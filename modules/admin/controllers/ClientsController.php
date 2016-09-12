<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\Clients;
use app\models\TblAcaClients;
use app\models\TblAcaUsers;
use app\models\TblAcaStaffUsers;
use app\models\TblAcaBrands;
use yii\base\ErrorException;
use yii\base\Exception;
use app\models\TblAcaCompanies;
use app\models\TblAcaCompanyReportingPeriod;
use app\models\TblAcaClientsSearch;
use yii\db\Query;
use app\components\EncryptDecryptComponent;

/**
 * Default controller for the `admin` module
 */
class ClientsController extends Controller {
	/**
	 * Renders the index view for the module
	 * 
	 * @return string
	 */
	public function actionIndex() {
		$this->layout = 'main';
		$session = \Yii::$app->session;
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			/*
			 * Query to get all the client records
			 */
			$searchModel = new TblAcaClientsSearch ();
			$dataProvider = $searchModel->search ( \Yii::$app->request->queryParams );
			
			return $this->render ( 'index', [ 
					'dataProvider' => $dataProvider,
					'searchModel' => $searchModel 
			] );
		} else {
			
			\Yii::$app->SessionCheck->adminlogout ();
			
			return $this->goHome ();
		}
	}
	public function actionGetbrandthree() {
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			$get = \Yii::$app->request->post ();
			$id = $get ['value'];
			$clientid = null;
			if (! empty ( $get ['clientid'] )) {
				$clientid = $get ['clientid'];
			}
			$model = TblAcaBrands::Branduniquedetails ( $id );
			$myBrand = $model->brand_name;
			$result = substr ( $myBrand, 0, 3 );
			return $result . '' . '-' . '' . $clientid;
		} else {
			
			\Yii::$app->SessionCheck->adminlogout ();
			
			return $this->goHome ();
		}
	}
	
	/*
	 * This function is used to add a new client and also provides the login access to the client base on the email id and also adds the companies based on the sub ein count
	 */
	public function actionAddform() {
		$this->layout = 'main';
		$session = \Yii::$app->session;
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			$logged_user_id = $session ['admin_user_id'];
			/* Intializing an object */
			$new_client = new TblAcaClients ();
			$new_staff_user = new TblAcaStaffUsers ();
			$model_user = new TblAcaUsers ();
			$client_details = array ();
			
			$new_client->ein_count = 1;
			/* Check for post variables */
			if ($new_client->load ( \Yii::$app->request->post () )) {
				
				/* begining the db transaction */
				$transaction = \Yii::$app->db->beginTransaction ();
				try {
					
					/* collecting the post variables */
					$post = \Yii::$app->request->post ();
					
					/* Assiging the values */
					$new_client->attributes = $post ['TblAcaClients'];
					$new_client->client_number = $post ['TblAcaClients'] ['client_name'];
					
					/* Reporting Structure */
					$reporting_structure = $post ['TblAcaClients'] ['reporting_structure'];
					if ($reporting_structure == 15) 					// 15 Denotes Single EIN
					{
						$new_client->ein_count = 1;
						/* Sub EIN Count */
						$ein_count = 1;
					} else {
						$ein_count = $post ['TblAcaClients'] ['ein_count'];
					}
					
					$client_name = $post ['TblAcaClients'] ['client_name'];
					/* Reporting Year */
					$reporting_year = $post ['TblAcaClients'] ['aca_year'];
					
					/* Contact person email */
					$email_id = $post ['TblAcaClients'] ['email'];
					$check_email = $this->checkemailid ( $email_id ); // check email exists or not
					
					if ($check_email ['result'] == 0 || $check_email ['result'] == 2) {
						
						if ($check_email ['result'] == 0) 						// new user
						{
							$user_details = $this->addclientuser ( $email_id ); // adding new user
							$user_id = $user_details ['user_id'];
							$random_salt = $user_details ['random_salt'];
						} elseif ($check_email ['result'] == 2) 						// old client user
						{
							$user_id = $check_email ['user_id'];
						}
						
						$new_client->user_id = $user_id;
						$new_client->created_by = $logged_user_id;
						
						/* validating and saving the model */
						if ($new_client->validate () && $new_client->save ()) {
							
							/* collecting the last inserted id */
							$insert_id = $new_client->client_id;
							
							/* Collecting the first three charecters of the brand and saving it as client number */
							$model = TblAcaBrands::Branduniquedetails ( $new_client->brand_id );
							$brand_emailid = $model->support_email;
							$brand_name = substr ( $model->brand_name, 0, 3 );
							$new_client->client_number = $brand_name . '-' . $insert_id;
							
							/* saving the model */
							if ($new_client->save ()) {
								
								$client_number = $new_client->client_number;
								/* Add company to client */
								
								$client_company = $this->addclientcompany ( $insert_id, $client_number, $reporting_year, $ein_count, $client_name );
								
								/*
								 * Trigger mails
								 */
							
							/* New user mail
							 *
							*  assigning mail variables*/
							
							
							
							if ($check_email ['result'] == 0) 								// new user
								{
									
									$to = $email_id;
									$name = $new_client->client_name;
									$link = \Yii::$app->urlManager->createAbsoluteUrl ( '/setaccount' ) . '?random_salt=' . $random_salt . '&id=' . md5 ( $user_id );
									
									\Yii::$app->CustomMail->Createadminusermail ( $to, $brand_emailid, $name, $link ); // , $brand_emailid
								}
								
								// Already exist user mail
								if ($check_email ['result'] == 2) 								// client user
								{
									
									$old_user_details = $new_client->Findbyuserid ( $user_id );
									$to = $old_user_details->user->useremail;
									$name = $old_user_details->contact_first_name . ' ' . $old_user_details->contact_last_name;
									$client_details ['client_name'] = $new_client->client_name;
									$client_details ['client_brand'] = $model->brand_name;
									
									\Yii::$app->CustomMail->Assignclientmail ( $to, $brand_emailid, $name, $client_details );
								}
								/* commiting the values to the db */
								$transaction->commit ();
								
								/**
								 * * creating sharefile account **
								 */
								$client_details = TblAcaClients::Clientuniquedetails ( $insert_id );
								$firstname = $client_details->contact_first_name;
								$lastname = $client_details->contact_last_name;
								
								/**
								 * * getting sharefile credentials **
								 */
								$share_file = json_decode ( file_get_contents ( getcwd () . '/config/sharefile-credentials.json' ) );
								
								$hostname = $share_file->hostname;
								$username = $share_file->username;
								$password = $share_file->password;
								$client_api_id = $share_file->client_api_id;
								$client_secret = $share_file->client_secret;
								
								$instance = \Yii::$app->Sharefile->create_employee ( $hostname, $client_api_id, $client_secret, $username, $password, $insert_id, $user_id, $email_id, $firstname, $lastname );
								/**
								 * * END creating sharefile account **
								 */
								
								\Yii::$app->session->setFlash ( 'success', 'Client successfully added' );
								return $this->redirect ( array (
										'/admin/clients' 
								) );
							}
						} else {
							\Yii::$app->session->setFlash ( 'error', 'Client unable to add. Please try again' );
						}
					} else {
						if ($check_email ['result'] == 1) {
							$new_client->addError ( 'email', 'Email address is already used as a admin user.' );
						} elseif ($check_email ['result'] == 2) {
							$new_client->addError ( 'email', 'Email address is already used as a client company user.' );
						}
					}
				} catch ( Exception $e ) {
					
					$msg = $e->getMessage ();
					\Yii::$app->session->setFlash ( 'error', $msg );
					
					$transaction->rollback ();
				}
			}
			
			/* calling the function to collect all the admin users as a managers */
			$manager = $new_staff_user->getadminusers ();
			
			/* rendering the data to the view */
			return $this->render ( 'addform', [ 
					'new_client' => $new_client,
					'manager' => $manager 
			] );
		} else {
			
			\Yii::$app->SessionCheck->adminlogout ();
			
			return $this->goHome ();
		}
	}
	
	// Action used for updating particular client
	public function actionEditclient() {
		$session = \Yii::$app->session;
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			$get = \Yii::$app->request->get ();
			$id = $get ['id'];
			if (! empty ( $id )) {
				
				$encrypt_component = new EncryptDecryptComponent ();
				$id = $encrypt_component->decryptUser ( $id );
				
				$this->layout = 'main';
				
				$logged_user_id = $session ['admin_user_id'];
				
				$new_client = TblAcaClients::Clientuniquedetails ( $id );
				
				$package = $new_client->package_type;
				$old_ein_count = $new_client->ein_count;
				$year = $new_client->aca_year;
				$to = $new_client->email;
				$old_brand_id = $new_client->brand_id;
				$old_client_name = $new_client->client_name;
				$old_order_number = $new_client->order_number;
				$old_product = $new_client->product;
				
				$new_staff_user = new TblAcaStaffUsers ();
				$manager = $new_staff_user->getadminusers ();
				
				$transaction = \Yii::$app->db->beginTransaction ();
				try {
					
					if ($new_client->load ( \Yii::$app->request->post () )) {
						
						$post = \Yii::$app->request->post ();
						
						$new_client->attributes = $post ['TblAcaClients'];
						
						/* Reporting Structure */
						$reporting_structure = $post ['TblAcaClients'] ['reporting_structure'];
						if ($reporting_structure == 15) 						// 15 Denotes Single EIN
						{
							$new_client->ein_count = 1;
							$new_ein_count = 1;
						} else {
							$new_ein_count = $post ['TblAcaClients'] ['ein_count'];
						}
						
						$new_client->aca_year = $year;
						$new_client->brand_id = $old_brand_id;
						$new_client->client_name = $old_client_name;
						$new_client->order_number = $old_order_number;
						$new_client->product = $old_product;
						
						$new_client->modified_by = $logged_user_id;
						$new_client->modified_date = date ( 'Y-m-d H:i:s' );
						$reporting_year = $year;
						$client_name = $old_client_name;
						/* Collecting the first three charecters of the brand and saving it as client number */
						$model = TblAcaBrands::Branduniquedetails ( $new_client->brand_id );
						$brand_emailid = $model->support_email;
						$brand_name = substr ( $model->brand_name, 0, 3 );
						$new_client->client_number = $brand_name . '-' . $id;
						
						if ($new_ein_count >= $old_ein_count) {
							
							if ($new_client->save () && $new_client->validate ()) {
								$client_number = $new_client->client_number;
								
								$ein_count = $new_ein_count - $old_ein_count;
								if ($ein_count > 0) {
									$client_company = $this->updateclientcompany ( $id, $client_number, $reporting_year, $ein_count );
									
									/**
									 * Mail function for notifying user about additional EINs added.
									 * *
									 */
									\Yii::$app->CustomMail->Additionaleins ( $to, $brand_emailid, $client_name, $ein_count );
								}
								
								$transaction->commit ();
								
								\Yii::$app->session->setFlash ( 'success', 'Client successfully updated' );
								return $this->redirect ( array (
										'/admin/clients' 
								) );
							} else {
								return $this->render ( 'editclient', [ 
										'new_client' => $new_client,
										'manager' => $manager,
										'old_ein_count' => $old_ein_count 
								] );
							}
						} else {
							
							$new_client->addError ( 'ein_count', 'Ein count is less than old Ein count.' );
						}
					}
				} catch ( Exception $e ) {
					
					$msg = $e->getMessage ();
					\Yii::$app->session->setFlash ( 'error', $msg );
					
					$transaction->rollback ();
				}
				
				return $this->render ( 'editclient', [ 
						'new_client' => $new_client,
						'manager' => $manager,
						'old_ein_count' => $old_ein_count 
				] );
			}
		} else {
			
			\Yii::$app->SessionCheck->adminlogout ();
			
			return $this->goHome ();
		}
	}
	
	// Function checks email id if already exists in TblAcaUsers
	protected function checkemailid($email_id) {
		$session = \Yii::$app->session;
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			$result = array ();
			$new_user = 0;
			$admin_user = 1;
			$client_user = 2;
			$company_user = 3;
			
			if ($email_id) {
				$model_users = new TblAcaUsers ();
				
				$is_user = $model_users->findByUsername ( $email_id );
				
				if (! empty ( $is_user )) {
					if ($is_user->usertype == 1) {
						$result ['result'] = $admin_user;
					} else if ($is_user->usertype == 2) {
						$result ['result'] = $client_user;
					} else if ($is_user->usertype == 3) {
						$result ['result'] = $company_user;
					}
					
					$result ['user_id'] = $is_user->user_id;
				} else {
					$result ['result'] = $new_user;
				}
			}
			
			return $result;
		} else {
			
			\Yii::$app->SessionCheck->adminlogout ();
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Function used for adding new client user
	 *
	 * @param unknown $email_id        	
	 * @return multitype:NULL number
	 */
	protected function addclientuser($email_id) {
		$session = \Yii::$app->session;
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			$user_details = array ();
			$logged_user_id = $session ['admin_user_id'];
			if ($email_id) {
				$model_users = new TblAcaUsers ();
				
				$random_salt = $model_users->generatePasswordResetToken ();
				$model_users->useremail = $email_id;
				$model_users->usertype = 2; // 1 Denotes Client User
				$model_users->created_date = date ( 'Y-m-d H:i:s' );
				$model_users->modified_date = date ( 'Y-m-d H:i:s' );
				$model_users->created_by = $logged_user_id;
				$model_users->modified_by = $logged_user_id;
				$model_users->random_salt = $random_salt;
				$model_users->is_verified = 0;
				$model_users->is_deleted = 0;
				$model_users->is_active = 0;
				
				if ($model_users->save ()) {
					$user_details ['user_id'] = $model_users->user_id;
					$user_details ['random_salt'] = $model_users->random_salt;
				}
			}
			
			return $user_details;
		} else {
			
			\Yii::$app->SessionCheck->adminlogout ();
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Function is used for adding client companies .
	 * This function adds companies to the client account
	 * accordin to the number of EIN Count.
	 */
	protected function addclientcompany($client_id, $client_number, $reporting_year, $ein_count, $client_name) {
		$session = \Yii::$app->session;
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			$logged_user_id = $session ['admin_user_id'];
			if (! empty ( $client_id ) && ! empty ( $ein_count )) {
				$model_company = new TblAcaCompanies ();
				$model_company_reporting_period = new TblAcaCompanyReportingPeriod ();
				for($i = 1; $i <= $ein_count; $i ++) {
					
					$model_company->client_id = $client_id;
					$model_company->created_by = $logged_user_id;
					$model_company->created_date = date ( 'Y-m-d H:i:s' );
					$model_company->company_client_number = $client_number . '-' . $i;
					$model_company->reporting_status = 23; // denotes new company in look up options
					if ($i === 1) {
						
						$model_company->company_name = $client_name;
					} else {
						$model_company->company_name = '';
					}
					$model_company->isNewRecord = true;
					$model_company->company_id = NULL;
					
					if ($model_company->save ()) {
						$company_id = $model_company->company_id;
						$model_company_reporting_period->company_id = $company_id;
						$model_company_reporting_period->reporting_year = $reporting_year;
						$model_company_reporting_period->created_by = $logged_user_id;
						$model_company_reporting_period->created_date = date ( 'Y-m-d H:i:s' );
						$model_company_reporting_period->isNewRecord = true;
						$model_company_reporting_period->period_id = NULL;
						
						$model_company_reporting_period->save ();
					}
				}
				
				return 'success';
			}
		} else {
			
			\Yii::$app->SessionCheck->adminlogout ();
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Function is used for updating client companies .
	 * This function adds extra companies to the client account
	 * if EIN Count is greater than the last EIN Count.
	 */
	protected function updateclientcompany($client_id, $client_number, $reporting_year, $ein_count) {
		$session = \Yii::$app->session;
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			$logged_user_id = $session ['admin_user_id'];
			if (! empty ( $client_id ) && ! empty ( $ein_count )) {
				$model_company = new TblAcaCompanies ();
				$model_company_reporting_period = new TblAcaCompanyReportingPeriod ();
				
				$model_company_count = TblAcaCompanies::companiesCount ( $client_id );
				
				$ein_count1 = $ein_count + $model_company_count;
				
				for($i = $model_company_count + 1; $i <= $ein_count1; $i ++) {
					
					$model_company->client_id = $client_id;
					$model_company->created_by = $logged_user_id;
					$model_company->created_date = date ( 'Y-m-d H:i:s' );
					$model_company->company_client_number = $client_number . '-' . $i;
					$model_company->reporting_status = 23; // denotes new company in look up options
					$model_company->isNewRecord = true;
					$model_company->company_id = NULL;
					
					if ($model_company->save ()) {
						$company_id = $model_company->company_id;
						$model_company_reporting_period->company_id = $company_id;
						$model_company_reporting_period->reporting_year = $reporting_year;
						$model_company_reporting_period->created_by = $logged_user_id;
						$model_company_reporting_period->created_date = date ( 'Y-m-d H:i:s' );
						$model_company_reporting_period->isNewRecord = true;
						$model_company_reporting_period->period_id = NULL;
						
						$model_company_reporting_period->save ();
					}
				}
				
				return 'success';
			}
		} else {
			
			\Yii::$app->SessionCheck->adminlogout ();
			
			return $this->goHome ();
		}
	}
}
