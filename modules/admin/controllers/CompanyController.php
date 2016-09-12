<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\TblAcaCompanies;
use app\models\TblAcaCompaniesSearch;
use yii\db\Query;

/**
 * Default controller for the `admin` module
 */
class CompanyController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
    	{
    	$this->layout='main';
    	$model_companies = new TblAcaCompanies();              //initialising model
		$searchModel = new TblAcaCompaniesSearch();
		
    	$all_companies = $model_companies->Findallcompanies();      //finding all companies
		
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams); //dataProvider for grid 
		
        return $this->render('index', [                       //render values to index view
					'all_companies' => $all_companies,
					'dataProvider'=>$dataProvider,
					'searchModel'=>$searchModel,
			] );
        } else {
        	\Yii::$app->SessionCheck->adminlogout ();        // Redirecting to home page if session destroyed
        		
        	return $this->goHome ();
        }
    }
	
    public function actionAddform()
    {
    	$this->layout='main';
    	return $this->render('addform');
    }
    
	/**
	 * Action for updating the status of lookupoptions
	 */
	public function actionStatuschange()
    {
       $post=\Yii::$app->request->post (); 
        if(!empty($post))	{                                 //checking the values for post
		$id = $post ['id'];
		$statusid = $post ['statusid'];
		$transaction = \Yii::$app->db->beginTransaction ();      // begining the transaction
		try {
			$model=TblAcaCompanies::Companyuniquedetails($id);      //finding unique details of a company
			
				$model->reporting_status = strip_tags($statusid);
			
			
			if ($model->save () && $model->validate ())           // validating model and saving it(server side validation)

			{
				echo 'success';                                //sending response to ajax
				$transaction->commit ();                       // commiting the transaction
			} else {
				
				echo 'fail';                                   //sending response to ajax
			}
		} catch ( Exception $e ) {                          // catching the exception
			
			$msg = $e->getMessage ();
			\Yii::$app->session->setFlash ( 'error', $msg );
    		 
    		$transaction->rollback ();                    //if exception occurs transaction rollbacks
    	}
	}else{
		echo 'fail';
	}
    }
	
    public function actionEditform()
    {
    	$this->layout='main';
    	return $this->render('editform');
    }

}
