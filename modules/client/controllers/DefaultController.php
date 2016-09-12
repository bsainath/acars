<?php

namespace app\modules\client\controllers;

use yii\web\Controller;
use app\models\PasswordForm;
use app\models\TblAcaUsers;

/**
 * Default controller for the `agent` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	$this->layout='main';
        return $this->render('index');
    }
    
    public function actionProfile()
    {
    	$this->layout='main';
    	return $this->render('profile');
    }
    
	
    public function actionChangepassword() {
    	$get_details = \Yii::$app->request->get ();
    	$model_password = new PasswordForm ();
    	$model_users = new TblAcaUsers ();
    	$output = array ();
    
    	$session = \Yii::$app->session;
    	$logged_user_id = $session ['admin_user_id'];
    	if (! empty ( $get_details ['oldpass'] ) && ! empty ( $get_details ['newpass'] ) && ! empty ( $get_details ['repeatnewpass'] )) {
    		$oldpass = $get_details ['oldpass'];
    		$newpass = $get_details ['newpass'];
    		$repeatnewpass = $get_details ['repeatnewpass'];
    			
    		$model_password->oldpass = $oldpass;
    		$model_password->newpass = $newpass;
    		$model_password->repeatnewpass = $repeatnewpass;
    			
    		$transaction = \Yii::$app->db->beginTransaction ();
    		try {
    			if ($model_password->validate ()) {
    				$user_details = $model_users->findById ( $logged_user_id );
    				$user_details->setPassword ( $newpass );
    					
    				if ($user_details->save ()) {
    					$transaction->commit();
    					$output ['success'] = 'success';
    
    				}
    			} else {
    				$output ['fail'] = $model_password->errors;
    			}
    		} catch ( Exception $e ) {
    
    			$msg = $e->getMessage ();
    			$output ['fail'] = $msg;
    
    			$transaction->rollback ();
    		}
    		return json_encode ( $output );
    	}
    }
    
	
    public function actionProjects()
    {
    	$this->layout='main';
    	return $this->render('projects');
    }
}
