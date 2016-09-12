<?php

namespace app\modules\client\controllers;
use yii\web\Controller;
use app\models\TblAcaCompanies;
use app\models\TblAcaClients;
use app\components\EncryptDecryptComponent;
use app\models\TblAcaCompanyReportingPeriod;

class CompaniesController extends Controller
{
    public function actionIndex()
    {
    	
    	if (\Yii::$app->SessionCheck->isclientLogged () == true) 		// checking logged session
    	{
    	$this->layout='main-companies';
    	$model_companies = new TblAcaCompanies();
    	$model_client = new TblAcaClients();
    	$model_company_period = new TblAcaCompanyReportingPeriod();
    	
    	$session = \Yii::$app->session;
    	$logged_user_id = $session ['client_user_id'];
    	$client_ids =  $session ['client_ids']; //all related clients to the logged user
		$company_ids = $session ['company_ids'];//all related companies to the logged user
		$mapped_company_ids = array_map(function($piece){
				return (string) $piece;
			}, $company_ids);
		
    	
    		
    	$all_companies = $model_companies->FindallwherecompanyIds($company_ids);
    	
    	
    	
    
    	
    	
        return $this->render('index', [ 
					
					'all_companies' => $all_companies,
        		
			] );
        } else {
        	\Yii::$app->SessionCheck->clientlogout ();
        		
        	return $this->goHome ();
        }
    }

   
    public function actionCompanydetails()
    {
    	if (\Yii::$app->SessionCheck->isclientLogged () == true) 		// checking logged session
    	{
    		
    		$encrypt_component = new EncryptDecryptComponent();
    		$model_companies = new TblAcaCompanies();
    		$result = array();
    		
    		
    		$company = \Yii::$app->request->post();
    		$encrypt_company_id = $company['company_id'];
    		
    		$company_id = $encrypt_component->decryptUser($encrypt_company_id);
    		
    		$company_details = $model_companies->Companyuniquedetails($company_id);
    		
    		if(!empty($company_details))
    		{
    			$result['company_name'] = $company_details->company_name;
    			$result['company_ein'] = $company_details->company_ein;
    			$period_details = $model_companies->getcompanyperiod($company_details->company_id);
    			$result['reporting_year'] = $period_details->tbl_aca_company_reporting_period->reporting_year;
    		   		}
    		
    		return json_encode($result);
    	 } else {
        	\Yii::$app->SessionCheck->clientlogout ();
        		
        	return $this->goHome ();
        }
    }
    
    
    
    public function actionUpdatecompany()
    {
    	if (\Yii::$app->SessionCheck->isclientLogged () == true) 		// checking logged session
    	{
    		
    	$session = \Yii::$app->session;
    	$logged_user_id = $session ['client_user_id'];
    		
    		
    	$company_details = \Yii::$app->request->post();
    	
    	$encrypt_component = new EncryptDecryptComponent();
    	$model_companies = new TblAcaCompanies();
    	$model_company_reporting_year = new TblAcaCompanyReportingPeriod();
    	$result = array();
    	
    	$encrypt_company_id = $company_details['company_id'];
    	
    	$company_id = $encrypt_component->decryptUser($encrypt_company_id);
    	$company_name = $company_details['company_name'];
    	$company_ein = $company_details['company_ein'];
    	$company_reporting_year = $company_details['company_reporting_year'];
    	if($company_id)
    	{
    		
    		$old_company_details = $model_companies->Companyuniquedetails($company_id);
    		$old_company_period = $model_company_reporting_year->FindbycompanyId($company_id);
    		if(!empty($old_company_details))
    		{
    			// begin transaction
    			$transaction = \Yii::$app->db->beginTransaction ();
    				
    			try {
    				
    				$old_company_details->company_name = $company_name;
    				$old_company_details->company_ein = $company_ein;
    				$old_company_details->modified_by  = $logged_user_id;
    				$old_company_details->modified_date = date('Y-m-d H:i:s');
    				
    				if($old_company_details->save())
    				{
    					
    					$old_company_period->reporting_year = $company_reporting_year;
    					$old_company_period->modified_by  = $logged_user_id;
    					$old_company_period->modified_date = date('Y-m-d H:i:s');
    					
    					if($old_company_period->save())
    					{
    						$transaction->commit();
    						$result = 'success';
    						
    					}
    					
    				}
    				
    			} catch ( Exception $e ) {
				
				$result = $e->getMessage ();
				
				
				// rollback transaction
				$transaction->rollback ();
			}
    			
    			
    			
    		}
    	 	}
    	 	
    	 	return $result;
    	} else {
    		\Yii::$app->SessionCheck->clientlogout ();
    	
    		return $this->goHome ();
    	}
    }
}
