<?php

namespace app\modules\client\controllers;

use yii\web\Controller;
//use app\models\PayrollData;
use app\models\TblAcaPayrollData;
use yii\helpers\Json;
use app\models\TblAcaPayrollEmploymentPeriod;
use yii\web\UploadedFile;
use app\components\EncryptDecryptComponent;
use app\models\TblAcaUsaStates;
use app\models\TblAcaCityStatesUnitedStates;
use app\models\TblAcaLookupOptions;
use app\models\TblAcaPlanCoverageType;
use app\models\TblAcaCompanies;

/**
 * This class is used to manage all the payroll data screen
 */
class PayrollController extends Controller {
	/*
	 * this is the default function which is use to render the payroll data to the view
	 */
	public function actionIndex() {
		if (\Yii::$app->SessionCheck->isclientLogged () == true) { // checking logged session
		                                                           
			// print_r($resp); die();
		                                                           // check for the c_id in the url
			if (isset ( $_GET ['c_id'] ) && $_GET ['c_id'] != '') {
				
				// rendering the layout
				$this->layout = 'main';
				
				// collecting the company id from the url and decoding it
				$company_id = EncryptDecryptComponent::decryptUser ( $_GET ['c_id'] );
				
				
				$sql="SELECT company_client_number,company_name FROM tbl_aca_companies WHERE company_id='".$company_id."'";
				
				$company_detals=TblAcaCompanies::findBySql($sql)->one();
				
			//print_r($company_detals); die();
				
				return $this->render ( 'index', array (
						'company_id' => $company_id,
						'encoded_company_id' => $_GET ['c_id'],
						'company_detals'=>$company_detals
				) );
			}
		} else {
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
	}
	
	/**
	 * This function is used to return the payroll data based on the company id
	 */
	public function actionPayrolldata() {
		if (\Yii::$app->SessionCheck->isclientLogged () == true) { // checking logged session
		                                                           
			// check for the company id post
			if (! empty ( $_POST ['c_id'] )) {
				
				// collecting the company id from the post and decoding it
				$company_id = EncryptDecryptComponent::decryptUser ( $_POST ['c_id'] );
				
				// calling the model function to collect all the employess specific to company id
				$employees = TblAcaPayrollData::payrolldata ( $company_id );
				
				// initialising
				$employee_data = array ();
				$i = 0;
				
				// creating an array of employees as required for dx data grid
				foreach ( $employees as $employee ) {
					
					$data = array ();
					$data = TblAcaPayrollData::employmentdata ( $employee ['employee_id'] );
					$employee ['employmentperiods'] = $data;
					
					array_push ( $employee_data, $employee );
					$i ++;
				}
				
				// convering the array to json
				$employees_data = Json::encode ( $employee_data );
				
				$arrempployes = array();
				$arrempployes['employ']=$employees_data;
				
				// collecting the suffixes
				$encoded_suffix = Json::encode ( TblAcaPayrollData::Suffixes () );
				$arrempployes['suffix']=$encoded_suffix;
				
				// collecting the plan classes
				$arrempployes['planclass']=Json::encode ( TblAcaPlanCoverageType::planclasses($company_id) );
				
				// returning the response
				return  Json::encode ($arrempployes);
			}
		} else {
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
	}
	
	/**
	 * This function is used to commit the new employee details in the database
	 */
	public static function actionNewemployee() {
		if (\Yii::$app->SessionCheck->isclientLogged () == true) { // checking logged session
		                                                           
			// check for the data post
			if (! empty ( $_POST ['newdata'] )) {
				
				// assiging Posted values to the variables
				$data = $_POST ['newdata'];
				
				$company_id = EncryptDecryptComponent::decryptUser ( $_POST ['company_id'] );
				
				// collecting the loged user id from the session
				$logged_user = \Yii::$app->session->get ( 'client_user_id' );
				
				$response = array ();
				
				$first_name=$data ['first_name'];
				$last_name=$data ['last_name'];
				
			
				$sql = "SELECT employee_id FROM tbl_aca_payroll_data WHERE LCASE(first_name) LIKE '%" . strtolower($first_name) . "%' AND LCASE(last_name) LIKE '%" . strtolower($last_name) . "%' AND company_id='".$company_id."'";
				$record_exist = TblAcaPayrollData::findBySql ( $sql )->one ();
				
				// check for duplicate entry
				if(empty($record_exist['employee_id'])){
				
				// initialising the model
				$model = new TblAcaPayrollData ();
				
				$model->company_id = $company_id;
				
				// assiging the values to the model based on the condition
				if (isset ( $data ['first_name'] ) && $data ['first_name'] != '')
					$model->first_name = strip_tags ( $data ['first_name'] );
				
				if (isset ( $data ['middle_name'] ) && $data ['middle_name'] != '')
					$model->middle_name = strip_tags ( $data ['middle_name'] );
				
				if (isset ( $data ['last_name'] ) && $data ['last_name'] != '')
					$model->last_name = strip_tags ( $data ['last_name'] );
				
				if (isset ( $data ['suffix'] ) && $data ['suffix'] != '')
					$model->suffix = $data ['suffix'];
				
				if (isset ( $data ['ssn'] ) && $data ['ssn'] != '')
					$model->ssn = $data ['ssn'];
				
				if (isset ( $data ['address1'] ) && $data ['address1'] != '')
					$model->address1 = $data ['address1'];
				
				if (isset ( $data ['apt_suite'] ) && $data ['apt_suite'] != '')
					$model->apt_suite = $data ['apt_suite'];
				
				if (isset ( $data ['city'] ) && $data ['city'] != '')
					$model->city = $data ['city'];
				
				if (isset ( $data ['state'] ) && $data ['state'] != '')
					$model->state = $data ['state'];
				
				if (isset ( $data ['zip'] ) && $data ['zip'] != '')
					$model->zip = $data ['zip'];
				
				if (isset ( $data ['dob'] ) && $data ['dob'] != '')
					$model->dob = $data ['dob'];
				
				if (isset ( $data ['notes'] ) && $data ['notes'] != '')
					$model->notes = $data ['notes'];
				
				$model->created_by = $logged_user;
				
				/**
				 * transaction block for the sql transactions to the database
				 */
				
				$connection = \yii::$app->db;
				
				// starting the transaction
				$transaction = $connection->beginTransaction ();
				
				
				
				// try block
				try {
					// validating the model and saving the model
					if ($model->validate () && $model->save ()) {
						// commiting the model
						$transaction->commit ();
						
						$response ['status'] = 1;
						$response ['message'] = 'success';
					}
				} catch ( Exception $e ) {
					$msg = $e->getMessage ();
					$response ['status'] = 0;
					$response ['message'] = $msg;
					// rollbacking the transaction
					$transaction->rollback ();
				}
				}else{
					$response ['status'] =2;
					$response ['message'] = 'Record already exist with the same name';
				}
				
				// returning the response
				echo json_encode ( $response );
			}
		} else {
			
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
	}
	
	/**
	 * This function is used to update the particula employee details and commit in the database
	 */
	public function actionUpdateemployee() {
		if (\Yii::$app->SessionCheck->isclientLogged () == true) { // checking logged session
		                                                           
			// check for the data post
			if (! empty ( $_POST ['newdata'] )) {
				
				// assiging Posted values to the variables
				$newdata = $_POST ['newdata'];
				
				$olddata = $_POST ['olddata'];
				// print_r($_POST); die();
				$comapny_id = EncryptDecryptComponent::decryptUser ( $_POST ['company_id'] );
				
				// collecting the loged user id from the session
				$logged_user = \Yii::$app->session->get ( 'client_user_id' );
				
				// initialising the model
				$model = TblAcaPayrollData::findOne ( [ 
						'employee_id' => $olddata ['employee_id'] 
				] );
				
				$model->company_id = $comapny_id;
				
				// assiging the values to the model based on the condition
				if (isset ( $newdata ['first_name'] ) && $newdata ['first_name'] != '')
					$model->first_name = $newdata ['first_name'];
				
				if (isset ( $newdata ['middle_name'] ) && $newdata ['middle_name'] != '')
					$model->middle_name = $newdata ['middle_name'];
				
				if (isset ( $newdata ['last_name'] ) && $newdata ['last_name'] != '')
					$model->last_name = $newdata ['last_name'];
				
				if (isset ( $newdata ['suffix'] ) && $newdata ['suffix'] != '')
					$model->suffix = $newdata ['suffix'];
				
				if (isset ( $newdata ['ssn'] ) && $newdata ['ssn'] != '')
					$model->ssn = $newdata ['ssn'];
				
				if (isset ( $newdata ['address1'] ) && $newdata ['address1'] != '')
					$model->address1 = $newdata ['address1'];
				
				if (isset ( $newdata ['apt_suite'] ) && $newdata ['apt_suite'] != '')
					$model->apt_suite = $newdata ['apt_suite'];
				
				if (isset ( $newdata ['city'] ) && $newdata ['city'] != '')
					$model->city = $newdata ['city'];
				
				if (isset ( $newdata ['state'] ) && $newdata ['state'] != '')
					$model->state = $newdata ['state'];
				
				if (isset ( $newdata ['zip'] ) && $newdata ['zip'] != '')
					$model->zip = $newdata ['zip'];
				
				if (isset ( $newdata ['dob'] ) && $newdata ['dob'] != '')
					$model->dob = $newdata ['dob'];
				
				if (isset ( $newdata ['notes'] ) && $newdata ['notes'] != '')
					$model->notes = $newdata ['notes'];
				
				$model->created_by = $logged_user;
				
				/**
				 * transaction block for the sql transactions to the database
				 */
				
				$connection = \yii::$app->db;
				
				// starting the transaction
				$transaction = $connection->beginTransaction ();
				
				// initialising
				$response = array ();
				
				// try block
				try {
					// validating the model and saving the model
					if ($model->validate () && $model->save ()) {
						// commiting the model
						$transaction->commit ();
						
						$response ['status'] = 1;
						$response ['message'] = 'Updated successfully';
					}
				} catch ( Exception $e ) {
					$msg = $e->getMessage ();
					$response ['status'] = 0;
					$response ['message'] = $msg;
					// rollbacking the transaction
					$transaction->rollback ();
				}
				
				// returning the response
				echo json_encode ( $response );
			}
		} else {
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
	}
	
	/**
	 * This function is used to delete the particular employee details from the database
	 */
	public function actionDeletepayrollemployee() {
		if (\Yii::$app->SessionCheck->isclientLogged () == true) { // checking logged session
		                                                           
			// check for the data post
			if (! empty ( $_POST ['record'] )) {
				
				// assiging Posted values to the variables
				$data = $_POST ['record'];
				
				// initialising the model
				
				$model = TblAcaPayrollData::findOne ( [ 
						'employee_id' => $data ['employee_id'] 
				] );
				
				$employment_model = TblAcaPayrollEmploymentPeriod::deleteAll ( [ 
						'employee_id' => $data ['employee_id'] 
				] );
				
				// print_r($employment_model); die();
				
				/**
				 * transaction block for the sql transactions to the database
				 */
				
				$connection = \yii::$app->db;
				
				// starting the transaction
				$transaction = $connection->beginTransaction ();
				
				// initialising
				$response = array ();
				
				// try block
				try {
					
					// validating the model and saving the model
					if ($model->delete ()) {
						// commiting the model
						$transaction->commit ();
						
						$response ['status'] = 1;
						$response ['message'] = 'Deleted successfully';
					}
				} catch ( Exception $e ) {
					$msg = $e->getMessage ();
					$response ['status'] = 0;
					$response ['message'] = $msg;
					// rollbacking the transaction
					$transaction->rollback ();
				}
				
				// returning the response
				echo json_encode ( $response );
			}
		} else {
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
	}
	
	/**
	 * This function is used to add the employment period of the particular employee details
	 * and commit in the database
	 */
	public function actionAddemploymentperiod() {
		if (\Yii::$app->SessionCheck->isclientLogged () == true) { // checking logged session
		                                                           // check for the data post
			if (! empty ( $_POST ['employee_details'] )) {
				
				// assiging Posted values to the variables
				$employee_details = $_POST ['employee_details'];
				
				$data = $_POST ['record'];
				
				// collecting the loged user id from the session
				$logged_user = \Yii::$app->session->get ( 'client_user_id' );
				
				// initialising the model
				$model = new TblAcaPayrollEmploymentPeriod ();
				
				$model->employee_id = $employee_details ['employee_id'];
				
				// assiging the values to the model based on the condition
				if (isset ( $data ['hire_date'] ) && $data ['hire_date'] != '')
					$model->hire_date = $data ['hire_date'];
				
				if (isset ( $data ['termination_date'] ) && $data ['termination_date'] != '')
					$model->termination_date = $data ['termination_date'];
				
				if (isset ( $data ['plan_class'] ) && $data ['plan_class'] != '')
					$model->plan_class = $data ['plan_class'];
				
				if (isset ( $data ['status'] ) && $data ['status'] != '')
					$model->status = $data ['status'];
				
				if (isset ( $data ['waiting_period'] ) && $data ['waiting_period'] != '')
					$model->waiting_period = $data ['waiting_period'] == true ? 1 : 0;
				
				$model->created_by = $logged_user;
				
				/**
				 * transaction block for the sql transactions to the database
				 */
				
				$connection = \yii::$app->db;
				
				// starting the transaction
				$transaction = $connection->beginTransaction ();
				
				$response = array ();
				
				// try block
				try {
					// validating the model and saving the model
					if ($model->validate () && $model->save ()) {
						// commiting the model
						$transaction->commit ();
						
						$response ['status'] = 1;
						$response ['message'] = 'New employment record added successfully';
					}
				} catch ( Exception $e ) {
					$msg = $e->getMessage ();
					$response ['status'] = 0;
					$response ['message'] = $msg;
					// rollbacking the transaction
					$transaction->rollback ();
				}
				
				// returning the response
				echo json_encode ( $response );
			}
		} else {
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
	}
	
	/**
	 * This function is used to update the employment period of the particular employee details
	 * and commit in the database
	 */
	public function actionUpdateemploymentperiod() {
		if (\Yii::$app->SessionCheck->isclientLogged () == true) { // checking logged session
		                                                           // check for the data post
			if (! empty ( $_POST ['oldrecord'] )) {
				
				// assiging Posted values to the variables
				$olddata = $_POST ['oldrecord'];
				
				$data = $_POST ['newrecord'];
				
				// collecting the loged user id from the session
				$logged_user = \Yii::$app->session->get ( 'client_user_id' );
				
				// initialising the model
				$model = TblAcaPayrollEmploymentPeriod::findOne ( [ 
						'period_id' => $olddata ['period_id'] 
				] );
				
				// $model->employee_id=$employee_details['employee_id'];
				
				// assiging the values to the model based on the condition
				if (isset ( $data ['hire_date'] ) && $data ['hire_date'] != '')
					$model->hire_date = $data ['hire_date'];
				
				if (isset ( $data ['termination_date'] ) && $data ['termination_date'] != '')
					$model->termination_date = $data ['termination_date'];
				
				if (isset ( $data ['plan_class'] ) && $data ['plan_class'] != '')
					$model->plan_class = $data ['plan_class'];
				
				if (isset ( $data ['status'] ) && $data ['status'] != '')
					$model->status = $data ['status'];
				
				if (isset ( $data ['waiting_period'] ) && $data ['waiting_period'] != '')
					
					$model->waiting_period = $data ['waiting_period'] == "true" ? 1 : null;
				
				$model->created_by = $logged_user;
				
				/**
				 * transaction block for the sql transactions to the database
				 */
				
				$connection = \yii::$app->db;
				
				// starting the transaction
				$transaction = $connection->beginTransaction ();
				
				$response = array ();
				
				// try block
				try {
					// validating the model and saving the model
					if ($model->validate () && $model->save ()) {
						// commiting the model
						$transaction->commit ();
						$response ['status'] = 1;
						$response ['message'] = 'Employment record updated successfully';
					}
				} catch ( Exception $e ) {
					$msg = $e->getMessage ();
					$response ['status'] = 0;
					$response ['message'] = $msg;
					// rollbacking the transaction
					$transaction->rollback ();
				}
				
				// returning the response
				echo json_encode ( $response );
			}
		} else {
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
	}
	
	/**
	 * This function is used to delete the employment period of the particular employee details
	 * and commit in the database
	 */
	public function actionDeleteemploymentperiod() {
		if (\Yii::$app->SessionCheck->isclientLogged () == true) { // checking logged session
		                                                           // check for the data post
			if (! empty ( $_POST ['record'] )) {
				
				// assiging Posted values to the variables
				$data = $_POST ['record'];
				
				// collecting the loged user id from the session
				$logged_user = \Yii::$app->session->get ( 'client_user_id' );
				
				// initialising the model
				$model = TblAcaPayrollEmploymentPeriod::findOne ( [ 
						'period_id' => $data ['period_id'] 
				] );
				
				/**
				 * transaction block for the sql transactions to the database
				 */
				
				$connection = \yii::$app->db;
				
				// starting the transaction
				$transaction = $connection->beginTransaction ();
				
				$response = array ();
				
				// try block
				try {
					// validating the model and saving the model
					if ($model->delete ()) {
						// commiting the model
						$transaction->commit ();
						$response ['status'] = 1;
						$response ['message'] = 'Employment record deleted successfully';
					}
				} catch ( Exception $e ) {
					$msg = $e->getMessage ();
					$response ['status'] = 0;
					$response ['message'] = $msg;
					// rollbacking the transaction
					$transaction->rollback ();
				}
				
				// returning the response
				echo json_encode ( $response );
			}
		} else {
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
	}
	
	/*
	 * this function is used to upload the employee details into the payroll table
	 */
	public function actionUploademployees() {
		$session = \Yii::$app->session;
		
		if (\Yii::$app->SessionCheck->isclientLogged () == true) { // checking logged session
			
			if (isset ( $_GET ['c_id'] ) && $_GET ['c_id'] != '') {
				$company_id = EncryptDecryptComponent::decryptUser ( $_GET ['c_id'] );
				
				// rendering the main
				$this->layout = 'main';
				
				// initialsing the model
				$model_employee = new TblAcaPayrollData ();
				$model_employment_period = new TblAcaPayrollEmploymentPeriod ();
				
				// check for file post
				if (! empty ( $_FILES ['TblAcaPayrollData'] ['tmp_name'] ['employee_id'] )) {
					
					$file_extension = strtolower ( strrchr ( $_FILES ['TblAcaPayrollData'] ['name'] ['employee_id'], '.' ) );
					
					//$mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');
					
					// check for csv file
				///	if (in_array($_FILES['TblAcaPayrollData']['type'],$mimes) && ($file_extension == '.csv')) {
					if ($file_extension == '.csv') {
						
						$file = UploadedFile::getInstance ( $model_employee, 'employee_id' );
						
						if ($file != '') {
							
							// genrating random file name
							$file_name=rand(5,20).'.csv';
							
							// file name
							$fileName1 = "{$file_name}";
							
							$folder_name = 'csv_upload';
							
							// saving files in files/csv/csv_upload/..
							if (! is_dir ( getcwd () . '/files/csv/' . $folder_name )) {
								$old = umask ( 0 );
								mkdir ( getcwd () . '/files/csv/' . $folder_name, 0777, true );
								umask ( $old );
							}
							if ($fileName1)
								$file->saveAs ( getcwd () . '/files/csv/' . $folder_name . '/' . $fileName1 );
						}
						
						// $session["file-name"] = $fileName1;
						
						$webroot = getcwd ();
						
						$file = $webroot . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'csv' . DIRECTORY_SEPARATOR . $folder_name . DIRECTORY_SEPARATOR . $fileName1;
						
						$fp = fopen ( $file, 'r' );
						
						if ($fp) {
							$line = fgetcsv ( $fp, 1000, "," );
							
							// initialising the variables
							$CLEAN_GET = array ();
							
							$first_time = true;
							$x = 0;
							
							$result_count = $count = $InsertedCount = 0;
							$m = 1;
							$f = 1;
							$record_count = '';
							$record_count_first = '';
							$NotInsertedRecord = '';
							
							$Total_records = 0;
							$or_info = 0;
							
							$model_user = '';
							$model_agents = '';
							$model_agent_alloc = '';
							
							
							
							$search = array (
									"\\",
									"\x00",
									"\n",
									"\r",
									"'",
									'"',
									"\x1a" ,
									"-"
							);
							$replace = array (
									"\\\\",
									"\\0",
									"\\n",
									"\\r",
									"\'",
									'\"',
									"\\Z",
									"" 
							);
							
							
							echo 'Upload in process please wait.';
							
							$values = [ 
									"first_name",
									"middle_name",
									"last_name",
									"suffix",
									"ssn",
									"address1",
									"apt_suite",
									"city",
									"state",
									"zip",
									"dob",
									"notes",
									"hire_date",
									"temination_date",
									"plan_class",
									"status",
									"waiting_period" 
							];
							
							$connection = \Yii::$app->db;
							// begining the transaction
							$transaction = $connection->beginTransaction ();
							
							try {
								do {
									if (! empty ( $line )) {
										$count ++;
										
										// used to check for skipping first and second line
										if ($first_time == true || $count == 2) {
											$first_time = false;
											continue;
										}
										if ($count > 2500) {
											sleep ( 1 );
											$count = 0;
											echo ".";
											flush ();
										}
										
										// check for first name and last name of the employee
										if (!(empty($line [0]) || empty($line [2]))) {
											$first_name='';
											$last_name='';
											
											$first_name = strip_tags(preg_replace('/[^a-z]/i','', $line [0] ));
											$last_name = strip_tags(preg_replace('/[^a-z]/i','', $line [2] ));
											
											
											$sql = "SELECT employee_id FROM tbl_aca_payroll_data WHERE LCASE(first_name) LIKE '%" . strtolower($first_name) . "%' AND LCASE(last_name) LIKE '%" . strtolower($last_name) . "%' AND company_id='".$company_id."'";
											$record_exist = TblAcaPayrollData::findBySql ( $sql )->one ();
											
											// check for duplicate entry
											if(empty($record_exist['employee_id'])){
											// from session
											$logged_id = $session->get ( 'client_user_id' );
											
											$model_employee->created_by = $logged_id;
											$model_employee->company_id = $company_id;
											
											$model_employee->employee_id = NULL; // primary key(auto increment id) id
											$model_employee->isNewRecord = true;
											
											if(!empty($line [0])){
											$model_employee->first_name = $first_name;
											}
										
											if(!empty($line [1])){
											$model_employee->middle_name = strip_tags(preg_replace('/[^a-z]/i','', $line [1] ));
											}
										
											if(!empty($line [2])){
											$model_employee->last_name = $last_name;
											}
											
											if(!empty($line [3])){
											$suffix = strtolower ( preg_replace('/[^A-Za-z0-9\-]/', '', $line [3] ) );
											if ($suffix != '') {
												// query to get he suffix id from look up options table
												$sql = "SELECT lookup_id FROM tbl_aca_lookup_options WHERE LCASE(lookup_value) LIKE '%" . $suffix . "%' AND code_id=7 ";
												$resp = TblAcaLookupOptions::findBySql ( $sql )->one ();
												if (! empty ( $resp->lookup_id )) {
													$model_employee->suffix = $resp->lookup_id;
												}
											}
											}
											
											if(!empty($line [4])){
												$ssn=strip_tags(preg_replace('/\D/', '', $line [4] ));
												if(strlen($ssn)==9){
													$model_employee->ssn = $ssn;
												}
											
											}
											
											if(!empty($line [5])){
											$model_employee->address1 = strip_tags(preg_replace('/[^A-Za-z0-9\-]/', '', $line [5] ));
											}
											
											if(!empty($line [6])){
											$model_employee->apt_suite = strip_tags(preg_replace('/[^A-Za-z0-9\-]/', '', $line [6] ));
											}
											
											if(!empty($line [7])){
											$model_employee->city = strip_tags(strtoupper ( preg_replace('/[^a-z]/i','', $line [7] ) ));
											}
											
											if(!empty($line [8])){
											$model_employee->state = strip_tags(strtoupper ( preg_replace('/[^a-z]/i','', $line [8] ) ));
											}
											
											if(!empty($line [9])){
												
												$zip=strip_tags(preg_replace('/\D/', '', $line [9] ));
												if(strlen($zip)==5){
													$model_employee->zip = $zip;
												}
											
											}
											
											if(!empty($line [10])){
											$model_employee->dob = date ( "Y-m-d", strtotime ( $line [10] ) );
											}
											
											if(!empty($line [11])){
											$model_employee->notes = strip_tags(preg_replace('/[^A-Za-z0-9\-]/', '', $line [11] ));
											}
											
											// check for model validate and then saving
											if ($model_employee->validate () && $model_employee->save ()) {
												$x ++;
												$last_id = $model_employee->employee_id;
												
												for($i = 0, $j = 12; $i < 12; $i ++, $j += 5) {
													if (! empty ( $line [$j] )) {
														
														// this block is for employment period
														$model_employment_period->period_id = NULL;
														$model_employment_period->isNewRecord = true;
														$model_employment_period->employee_id = $last_id;
														
														if(!empty($line [$j])){
														$model_employment_period->hire_date = date ( "Y-m-d", strtotime ( $line [$j] ) );
														}
														
														if(!empty($line [$j+1])){
														$model_employment_period->termination_date = date ( "Y-m-d", strtotime ( $line [$j + 1] ) );
														}
														
														$plan='';
														if(!empty($line [$j+2])){
														$plan = strtolower(str_replace($search, $replace,$line[$j+2]));
														if($plan!=''){
														//query to get he plan class id from tbl_aca_plan_coverage_type table
														$sql="SELECT plan_class_id FROM tbl_aca_plan_coverage_type WHERE LCASE(plan_class_number) LIKE '%".$plan."%' ";
														$resp=TblAcaPlanCoverageType::findBySql($sql)->one();
														if(!empty($resp->plan_class_id)){
														$model_employment_period->plan_class=$resp->plan_class_id;
														}
														}
														}
														
														if(!empty($line [$j+3])){
														if ($line [$j + 3] != '') {
															$status = '';
															$status = strtolower ( preg_replace('/[^A-Za-z0-9\-]/', '', $line [$j + 3] ) );
															$model_employment_period->status = $status == 'ft' ? 1 : ($status == 'pt' ? 2 : '');
														}
														}
														
														if(!empty($line [$j+4])){
														if ($line [$j + 4] != '') {
															$waiting_period = '';
															$waiting_period = strtolower ( preg_replace('/[^A-Za-z0-9\-]/', '', $line [$j + 4] ) );
															$model_employment_period->waiting_period = $waiting_period == 'yes' ? 1 : null;
														}
														}
														
														$model_employment_period->created_by = $logged_id;
														
														// print_r($model_employment_period);
														if ($model_employment_period->save ()) {
															$x ++;
														}
													}
												}
											} else {
												
												$NotInsertedRecord .= $Total_records . ',';
											}
											$Total_records ++;
										}
										
									}
									}
								} while ( ($line = fgetcsv ( $fp, 1000, ",", "'" )) != FALSE );
								
								// die();
								// echo $x; die();
								if ($x > 0) {
									$transaction->commit ();
								}
							} catch ( \Exception $e ) {
							//	print_r ( $e );
							//	die ();
								$msg = $e->getMessage ();
								$session = \Yii::$app->session;
								// assign the message for flash variable
								$session->setFlash ( 'error', $msg );
								$transcation->rollBack ();
								
							}
							
							// file closing
							fclose($fp);
							// deleting the file
							unlink($file);
							
							$error_count = $Total_records - $x;
						//	echo $error_count; die();
							if ($error_count > 0) {
								// message to the user for missing record rows
								
								$session->setFlash ( 'error', "$x Record(s) uploaded. <br> <span > Total Records: $Total_records <br> Imported: $x   </span><br> <span > Some errors encounterd.</span><br><span style='float: left;word-break: break-all;'>Errors: $error_count - this is because the data in mandatory fields such as first name,last name is missing.</span>" );
							} else {
								$session->setFlash ( 'success', "$Total_records Record(s) uploaded. <br><span > Total Records: $Total_records <br> Imported : $Total_records </span>" );
							}
							
							
							return $this->redirect ( \Yii::$app->getUrlManager ()->getBaseUrl () . '/client/payroll?c_id=' . $_GET ['c_id'] );
						}
    						
   
    				}else{
    					//echo 'test'; die();
    				}
    		}
    			
    		
    			return $this->render('uploademployees',['model_import'=>$model_employee]);
    		}else{
    			return $this->goHome();
    		}
    	}else{
    		\Yii::$app->SessionCheck->clientlogout ();
    	
    		return $this->goHome ();
    	}
    }
    
    
}
