<?php

namespace app\components;

use Yii;
use yii\base\Component;
use app\controllers\SiteController;

class MailComponent extends Component {
	
	public function Createadminusermail($to,$name,$link) {
		$message = \Yii::$app->mailer->compose ()
		->setFrom ( 'admin@acareportingservice.com' )
		->setTo ( $to )
		->setSubject ( 'Activate ACA Account' )
		->setHtmlBody ( 'Hi ' . $name . ' ,<br><br>
							Your account is created in ACA Reporting Service <br>
							To activate your account please click on the below link.<br>
							<a href="' . $link . '" target="_blank">Click here</a><br><br>
							 Thanks<br>
							 ACA Reporting Service
						')->send();
		
		
	}
	
	public function Forgotpasswordmail($to,$name,$link)
	{
		$message = \Yii::$app->mailer->compose ()
		->setFrom ( 'admin@acareportingservice.com' )
		->setTo ( $to )
		->setSubject ( 'Forgot Password' )
		->setHtmlBody ( 'Hi ' . $name . ' ,<br><br>
							
							To reset your account password please click on the below link.<br>
							<a href="' . $link . '" target="_blank">Click here</a><br><br>
							 Thanks<br>
							 ACA Reporting Service
						')->send();
		
	}
	
	public function Resetlink($to,$name,$link)
	{
		$message = \Yii::$app->mailer->compose ()
		->setFrom ( 'admin@acareportingservice.com' )
		->setTo ( $to )
		->setSubject ( 'Activate ACA Account' )
		->setHtmlBody ( 'Hi ' . $name . ' ,<br><br>
				
							To activate your account please click on the below link.<br>
							<a href="' . $link . '" target="_blank">Click here</a><br><br>
							 Thanks<br>
							 ACA Reporting Service
						')->send();
	
	}
	
	public function Assignclientmail($to,$name,$client_details)
	{
		$message = \Yii::$app->mailer->compose ()
		->setFrom ( 'admin@acareportingservice.com' )
		->setTo ( $to )
		->setSubject ( 'Assigned to New client' )
		->setHtmlBody ( 'Hi ' . $name . ' ,<br><br>
				
							Your email id has been assigned to new client<br>
				            Client Name : '.$client_details['client_name'].'<br><br>
							 Thanks<br>
							 '.$client_details['client_brand'].'
						')->send();
	}
}