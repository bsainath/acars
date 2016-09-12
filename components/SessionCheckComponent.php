<?php

namespace app\components;

use Yii;
use yii\base\Component;
use app\controllers\SiteController;

class SessionCheckComponent extends Component {
	public function isLogged() {
		if (Yii::$app->session ['logged_status'] == true && Yii::$app->session ['is_admin'] == 'admin') {
			
			return true;
		} else {
			return false;
		}
	}
	
	
	public function isclientLogged() {
		if (Yii::$app->session ['logged_status'] == true && (Yii::$app->session ['is_client'] == 'client' || Yii::$app->session ['is_client'] == 'companyuser' )) {
				
			return true;
		} else {
			return false;
		}
	}
	
	public function Adminlogout() {
		$session = \Yii::$app->session;
		unset ( $session ['is_admin'] );
		unset ( $session ['admin_user_id'] );
		unset ( $session ['admin_email'] );
		unset ( $session ['admin_permissions'] );
		
		
	
		
	
	}
	
	public function Clientlogout() {
		$session = \Yii::$app->session;
		unset ( $session ['is_client'] );
		unset ( $session ['client_ids'] );
		unset ( $session ['company_ids'] );
		unset ( $session ['client_user_id'] );
		unset ( $session ['client_email'] );
		unset ( $session ['client_permissions'] );
		
		
	
	
	
	}
}