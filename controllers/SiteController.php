<?php

namespace app\controllers;

use Yii;
use yii\base\Action;
use yii\base\Exception;
use yii\base\UserException;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SetPasswordForm;
use app\models\TblAcaStaffUsers;
use app\models\TblAcaUsers;
use app\models\ForgotPasswordForm;
use app\components\EncryptDecryptComponent;
use app\models\TblAcaClients;
use app\models\TblAcaCompanyUsers;
use app\models\TblAcaCompanies;
use app\models\TblAcaCompanyUserPermission;
use yii\web\HttpException;

class SiteController extends Controller {
	/**
	 * @inheritdoc
	 */
	// public function behaviors()
	// {
	// return [
	// 'access' => [
	// 'class' => AccessControl::className(),
	// 'only' => ['logout'],
	// 'rules' => [
	// [
	// 'actions' => ['logout'],
	// 'allow' => true,
	// 'roles' => ['@'],
	// ],
	// ],
	// ],
	// 'verbs' => [
	// 'class' => VerbFilter::className(),
	// 'actions' => [
	// 'logout' => ['post'],
	// ],
	// ],
	// ];
	// }
	
	/**
	 * @inheritdoc
	 */
	public function actions() {
		return [ 
				'error123' => [ 
						'class' => 'yii\web\ErrorAction' 
				],
				'captcha' => [ 
						'class' => 'yii\captcha\CaptchaAction',
						'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null 
				] 
		];
	}
	
	/*
	 * this function is used to manage custom errors
	 */
	public function actionError(){
		
		
        if (($exception = Yii::$app->getErrorHandler()->exception) === null) {
            // action has been invoked not from error handler, but by direct route, so we display '404 Not Found'
            $exception = new HttpException(404, Yii::t('yii', 'Page not found.'));
        }
       
        if ($exception instanceof HttpException) {
            $code = $exception->statusCode;
        } else {
            $code = $exception->getCode();
        }
        
        if ($exception instanceof Exception) {
            $name = $exception->getName();
        } else {
            $name = $this->defaultName ?: Yii::t('yii', 'Error');
        }
        if ($code) {
            $name .= " (#$code)";
        }
        
        if ($exception instanceof UserException) {
            $message = $exception->getMessage();
        } else {
            $message = $this->defaultMessage ?: Yii::t('yii', 'An internal server error occurred.');
        }
     //   print_r($message); die();
        if (Yii::$app->getRequest()->getIsAjax()) {
            return "$name: $message";
        } else {
            return $this->render('error', [
                'name' => $name,
                'message' => $message,
                'exception' => $exception,
            ]);
        }
    }
	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex() {
		// echo 'fdfds'; die();
		$this->layout = 'main-home';
		return $this->render ( 'index' );
	}
	
	/**
	 * Login action.
	 *
	 * @return string
	 */
	public function actionLogin() {
		$this->layout = 'login';
		
		$model = new LoginForm ();
		$model_clients = new TblAcaClients();
		$model_company_users = new TblAcaCompanyUsers();
		$client_ids = array();
		$company_ids = array();
		$company_user_id = '';
		
		if ($model->load ( \Yii::$app->request->post () ) && $model->login ()) {
			
			$session = \Yii::$app->session;
			$usertype = $session ['logged_usertype'];
			$logged_id = $session ['logged_id'];
			$useremail = $session ['logged_username'];
			$permissions = $session ['logged_permissions'];
			
			if ($usertype == 1) {
				$session['is_admin'] = 'admin';
				$session['admin_user_id'] = $logged_id;
				$session['admin_email'] = $useremail;
				$session['admin_permissions'] = $permissions;
				
				unset($session['logged_usertype']);
				unset($session['logged_username']);
				unset($session['logged_id']);
				unset($session['logged_permissions']);
				
				return $this->redirect ( array (
						'/admin' 
				) );
			} elseif ($usertype == 2) {
				
				
				
				$session['is_client'] = 'client';
				$session['client_user_id'] = $logged_id;
				// get all related client
    			$client_details =  TblAcaClients::FindallclientsbyId($user_id);
    			if(!empty($client_details))
    			{
    				foreach ($client_details as $details)
    				{
    				$client_id = $details->client_id;
    				$company_details = TblAcaCompanies::GetallcompaniesbyclientId($client_id);
    				$client_ids[] = $client_id;
    				
    				if(!empty($company_details))
    				{
    					foreach($company_details as $company)
    					{
    						$company_ids[] = $company->company_id;
    					}
    					
    				}
    				}
    			}
    			
    			$session['client_ids'] = $client_ids;
    			$session['company_ids'] = $company_ids;
				$session['client_email'] = $useremail;
				$session['client_permissions'] = $permissions;
				
				unset($session['logged_usertype']);
				unset($session['logged_username']);
				unset($session['logged_id']);
				unset($session['logged_permissions']);
				
				return $this->redirect ( array (
						'/client/companies' 
				) );
				
			}
			elseif($usertype == 3)
			{
				
				$session['is_client'] = 'companyuser';
				$session['client_user_id'] = $logged_id;
				
				$company_user_details = TblAcaCompanyUsers::FindByuserIds($logged_id);
				
				if(!empty($company_user_details))
    			{
    				foreach ($company_user_details as $details)
    				{
    					$company_user_id = $details->company_user_id;
    					$assigned_company_details = TblAcaCompanyUserPermission::GetallcompaniesbycompanyuserId($company_user_id);
    					
    					if(!empty($assigned_company_details))
    					{
    						foreach ($assigned_company_details as $company_details)
    						{
    							$company_ids[] = $company_details->company_id;
    						}
    					
    					}
    				$client_ids[] = $details->client_id;
    				}
    			}
    			
    			
    			$session['client_ids'] = $client_ids;
    			$session['company_ids'] = $company_ids;
				$session['client_email'] = $useremail;
				$session['client_permissions'] = $permissions;
				
				unset($session['logged_usertype']);
				unset($session['logged_username']);
				unset($session['logged_id']);
				unset($session['logged_permissions']);
				
				return $this->redirect ( array (
						'/client/companies'
				) );
			}
		} else {
			
			return $this->render ( 'login', [ 
					
					'model' => $model 
			] );
		}
	}
	
	
	public function actionShadowlogin()
	{
		$get_user_id = \Yii::$app->request->get ();
		$encrypted_user_id = $get_user_id['id'];
		$model_users =  new TblAcaUsers();
		$encrypt_component = new EncryptDecryptComponent();
		$model_clients = new TblAcaClients();
		$client_ids = array();
		$company_ids = array();
		
		if(!empty($encrypted_user_id))
		{
			$session = \Yii::$app->session;
		
			unset ( $session ['is_client'] );
			unset ( $session ['client_ids'] );
			unset ( $session ['company_ids'] );
			unset ( $session ['client_user_id'] );
			unset ( $session ['client_email'] );
			unset ( $session ['client_permissions'] );
			
			if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
    	{
    		$user_id = $encrypt_component->decryptUser($encrypted_user_id);
    		$user_details = $model_users->findById($user_id);
    		$permissions = '';
    		
    		if(!empty($user_details))
    		{
    			$session['is_client'] = 'client';
    			$session['client_user_id'] = $user_id;
    			
    			// get all related client
    			$client_details =  TblAcaClients::FindallclientsbyId($user_id);
    			if(!empty($client_details))
    			{
    				foreach ($client_details as $details)
    				{
    				$client_id = $details->client_id;
    				$company_details = TblAcaCompanies::GetallcompaniesbyclientId($client_id);
    			
    				$client_ids[] = $client_id;
    				
    				if(!empty($company_details))
    				{
    					foreach($company_details as $company)
    					{
    						$company_ids[] = $company->company_id;
    					}
    					
    				}
    				}
    			}
    			
    			$session['client_ids'] = $client_ids;
    			$session['company_ids'] = $company_ids;
    			$session['client_email'] = $user_details->useremail;
    			$session['client_permissions'] = $permissions;
    			
    			return $this->redirect ( array (
    					'/client/companies'
    			) );
    		}
    		else 
    		{
    			Yii::$app->session->setFlash('error', 'User does not exists');
    		}
    		
    		
    		
    		
    	}
		}
		
	}
	/**
	 */
	public function actionSetaccount() {
		$this->layout = 'login';
		$model = new SetPasswordForm ();
		$model_users = new TblAcaUsers ();
		$get_user_details = \Yii::$app->request->get ();
		$session = \Yii::$app->session;
		if (! empty ( $get_user_details ['random_salt'] ) && ! empty ( $get_user_details ['id'] )) {
			
			$id = $get_user_details ['id'];
			$random_salt = $get_user_details ['random_salt'];
			
			$user_details = $model_users->setPasswordIdentity ( $id, $random_salt );
			
			if (!empty($user_details['success'])) {
				$users = $user_details['success'];
				if ($model->load ( \Yii::$app->request->post () ) && $model->validate()) {
					
					$transaction = \Yii::$app->db->beginTransaction ();
					try {
						
						$password_post = \Yii::$app->request->post () ;
						
						$password = $password_post['SetPasswordForm']['password'];
						$users->setPassword($password);
						$users->random_salt = '';
						$users->is_active = 1;
						$users->is_verified = 1;
						
						if($users->save())
						{
						$transaction->commit ();
						\Yii::$app->session->setFlash ( 'success', 'Password is set successfully. You can now login to your account.' );
						return $this->redirect ( array (
								'/login'
						) );
						}
					} catch (Exception $e) {
						$msg = $e->getMessage ();
						\Yii::$app->session->setFlash ( 'error', $msg );
							
						$transaction->rollback ();
						
					}
					
				}
				
			} else {
				\Yii::$app->session->setFlash   ( 'error', $user_details['fail'] );
				return $this->redirect ( array (
						'/login' 
				) );
			}
			
			return $this->render ( 'setaccount', [ 
					
					'model' => $model 
			] );
		} else {
			return $this->redirect ( array (
					'/index' 
			) );
		}
	}
	
	
	public function actionForgotpassword()
	{
		$get_details = \Yii::$app->request->get();
		$output = array();
		
		if(!empty($get_details))
		{
		$model_forgot_password = new ForgotPasswordForm();
		$model_users = new TblAcaUsers();
		$model_staff_users = new TblAcaStaffUsers ();
		$email = $get_details['email'];
		
		$model_forgot_password->email = $email;
		if($model_forgot_password->validate())
		{
			$user_details = $model_users->findByUsername($email);
			$user_id = $user_details->user_id;
			
			$staff_user_details = $model_staff_users->findById ( $user_id );
			
			$random_salt = $model_users->generatePasswordResetToken ();
			$user_details->random_salt = $random_salt;
			
			if($user_details->save())
			{
			// assigning mail variables
			$to = $user_details->useremail;
			$name = $staff_user_details->first_name . ' ' . $staff_user_details->last_name;
			$link = \Yii::$app->urlManager->createAbsoluteUrl ( '/setaccount' ) . '?random_salt=' . $random_salt . '&id=' . md5 ( $user_id );
			
			\Yii::$app->CustomMail->Forgotpasswordmail ( $to, $name, $link );
							
			$output['success'] = 'success';
			
			}
			
		}
		else 
		{
			$output['fail'] = $model_forgot_password->errors;
		}
		
		}
		
		return json_encode($output);
	}
	
	
	public function actionResetlink()
	{
		$get_details = \Yii::$app->request->get();
		$output = array();
	
		if(!empty($get_details))
		{
			$model_forgot_password = new ForgotPasswordForm();
			$model_users = new TblAcaUsers();
			//$model_staff_users = new TblAcaStaffUsers ();
			$email = $get_details['email'];
	
			$model_forgot_password->email = $email;
			if($model_forgot_password->validate())
			{
				$user_details = $model_users->findByUsername($email);
				$user_id = $user_details->user_id;
					
				//	$staff_user_details = $model_staff_users->findById ( $user_id );
					
				$random_salt = $model_users->generatePasswordResetToken ();
				$user_details->random_salt = $random_salt;
					
				if($user_details->save())
				{
					// assigning mail variables
					$to = $user_details->useremail;
					$name =  $user_details->useremail;
					$link = \Yii::$app->urlManager->createAbsoluteUrl ( '/setaccount' ) . '?random_salt=' . $random_salt . '&id=' . md5 ( $user_id );
						
					\Yii::$app->CustomMail->Resetlink ( $to, $name, $link );
						
					$output['success'] = 'success';
						
				}
					
			}
			else
			{
				$output['fail'] = $model_forgot_password->errors;
			}
	
		}
	
		return json_encode($output);
	}
	/**
	 * Logout action.
	 *
	 * @return string
	 */
	public function actionAdminlogout() {
		\Yii::$app->SessionCheck->Adminlogout ();
		
		return $this->goHome ();
	}
	
	/**
	 * Logout action.
	 *
	 * @return string
	 */
	public function actionClientlogout() {
		\Yii::$app->SessionCheck->Clientlogout ();
	
		return $this->goHome ();
	}
	
	/**
	 * Displays contact page.
	 *
	 * @return string
	 */
	public function actionContact() {
		$model = new ContactForm ();
		if ($model->load ( Yii::$app->request->post () ) && $model->contact ( Yii::$app->params ['adminEmail'] )) {
			Yii::$app->session->setFlash ( 'contactFormSubmitted' );
			
			return $this->refresh ();
		}
		return $this->render ( 'contact', [ 
				'model' => $model 
		] );
	}
	
	/**
	 * Displays about page.
	 *
	 * @return string
	 */
	public function actionAbout() {
		return $this->render ( 'about' );
	}
}
