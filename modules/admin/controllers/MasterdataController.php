<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\TblAcaBrands;
use app\models\TblAcaClients;
use yii\web\UploadedFile;
use app\models\TblAcaElementMaster;
use app\models\TblAcaLookupOptions;
use app\models\TblAcaCodeMaster;
use yii\base\Exception;
use app\components\EncryptDecryptComponent;
use app\models\TblAcaGlobalSettings;

/**
 * Default controller for the `admin` module
 */
class MasterdataController extends Controller {
	/**
	 * Renders the index view for the module
	 * 
	 * @return string
	 */
	
	/**
	 * Renders the grid with all brands
	 */
	public function actionIndex() {
		$this->layout = 'main';
		
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			
			$model_acabrands = TblAcaBrands::Brandalldetails (); // Retriving Brand details
			
			return $this->render ( 'index', [  // Rendering to index view
					'model' => $model_acabrands 
			] );
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // Redirecting to home page if session destroyed
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Renders the grid with all lookupoptions
	 */
	public function actionLookupoptions() {
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			
			$model_lookupoptions = TblAcaLookupOptions::lookupoptionsalldetails (); // Retriving Lookupoptions details
			$model_codemaster = new TblAcaCodeMaster (); // initialising model TblAcaCodeMaster
			$model_lookupoptions_modal = new TblAcaLookupOptions (); // initialising model TblAcaLookupOptions
			
			$this->layout = 'main'; // rendering the layout
			return $this->render ( 'lookupoptions', [  // Rendering to index view
					'model' => $model_lookupoptions,
					'model_codemaster' => $model_codemaster,
					'model_lookupoptions_modal' => $model_lookupoptions_modal 
			] );
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // Redirecting to home page if session destroyed
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Action for modal popup values for edit lookup options
	 */
	public function actionEditlookupoptions() {
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			
			$model_codemaster = new TblAcaCodeMaster (); // initialising models
			$model_lookupoptions_modal = new TblAcaLookupOptions ();
			
			$post = \Yii::$app->request->post ();
			if (! empty ( $post )) { // getting the values through post
				$id = $post ['id'];
				
				$model_lookupoptions = TblAcaLookupOptions::editlookupoptionsalldetails ( $id ); // Retriving Lookupoptions details for particular id
				
				$lookup_id = $model_lookupoptions->lookup_id; // assigning values to model
				$code_id = $model_lookupoptions->code_id;
				$lookup_value = $model_lookupoptions->lookup_value;
				$lookup_element = $model_lookupoptions ['code']->lookup_code;
				
				$arrEditvalues = array (
						"lookup_value" => $lookup_value, // preparing array to send in response for ajax
						"lookup_element" => $lookup_element,
						"lookup_id" => $lookup_id,
						"code_id" => $code_id 
				);
				
				echo json_encode ( $arrEditvalues ); // sending as a object
			}
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // Redirecting to home page if session destroyed
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Action for updating lookupoptions
	 */
	public function actionUpdatelookupoptions() {
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			
			$post = \Yii::$app->request->post ();
			if (! empty ( $post )) { // checking the values
				$value_name = $post ['TblAcaLookupOptions'] ['lookup_value']; // assigining them to variables
				$lookup_id = $post ['lookupid'];
				$code_id = $post ['codeid'];
				
				if (! empty ( $code_id )) {
					
					$transaction = \Yii::$app->db->beginTransaction (); // begining the transaction
					try {
						
						$model_lookup = TblAcaLookupOptions::lookupuniquedetails ( $lookup_id ); // Retriving Lookupoptions details for particular id
						$model_findoption = TblAcaLookupOptions::lookupfindoption ( $value_name ,$code_id );
						if ($value_name != $model_lookup->lookup_value) { // Checking for unique
							
							if (! empty ( $model_findoption )) {
								throw new Exception ( 'lookup value already exist.' ); // throw a exception
							} else {
								$model_lookup->lookup_value = strip_tags ( $value_name ); // assiging the values to model
							}
						} else {
							$model_lookup->lookup_value = strip_tags ( $value_name ); // assiging the values to model
						}
						
						if ($model_lookup->validate () && $model_lookup->save ()) 						// validating model and saving it(server side validation)
						{
							echo 'success';
							$transaction->commit (); // commiting the transaction
						} else {
							
							echo 'fail';
						}
					} catch ( Exception $e ) { // catching the exception
						
						$msg = $e->getMessage ();
						\Yii::$app->session->setFlash ( 'error', $msg );
						
						$transaction->rollback ();                                       //if exception occurs transaction rollbacks
						
						return $this->redirect ( array (
								'/admin/masterdata/lookupoptions'  // redirecting to main grid screen
												) );
					}
				} else {
					echo 'fail'; // sending response to ajax
				}
			} else {
				echo 'fail'; // sending response to ajax
			}
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // Redirecting to home page if session destroyed
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Action for activate or deactivate lookup option
	 */
	public function actionLookupstatusactivate() {
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			
			$post = \Yii::$app->request->post ();
			if (! empty ( $post )) { // checking values
				$id = $post ['id'];
				$is_active = $post ['is_active'];
				$transaction = \Yii::$app->db->beginTransaction (); // begining the transaction
				try {
					$model = TblAcaLookupOptions::lookupuniquedetails ( $id ); // checking for unique details
					if ($is_active == 1) {
						$model->lookup_status = 2;
					} elseif ($is_active == 2) {
						$model->lookup_status = 1;
					}
					
					if ($model->save () && $model->validate ()) 					// model saving and validating
					
					{
						echo 'success';
						$transaction->commit (); // commit the transaction
					} else {
						
						echo 'fail'; // sending response to ajax
					}
				} catch ( Exception $e ) { // catching block for throwing exception
					
					$msg = $e->getMessage ();
					\Yii::$app->session->setFlash ( 'error', $msg );
					
					$transaction->rollback ();                       //if exception occurs transaction rollbacks
				}
			} else {
				
				echo 'fail'; // sending response to ajax
			}
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // user logout if session expires
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Action for deletion of lookup option
	 */
	public function actionDeletelookupoptions() {
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			$post = \Yii::$app->request->post ();
			
			if (! empty ( $post ['id'] )) {
				
				$id = $post ['id'];
				
				$transaction = \Yii::$app->db->beginTransaction (); // begining the transaction
				try {
					$model = TblAcaLookupOptions::lookupuniquedetails ( $id ); // checking for particular id
					if (! empty ( $id )) {
						$modelfindsectionid = TblAcaLookupOptions::lookupfindsectionid ( $id ); // finding the usage of option
						
						if (empty ( $modelfindsectionid )) {
							
							if(TblAcaLookupOptions::findOne ( $id )->delete ()){
								
								echo 'success'; // sending response to ajax
							
								$transaction->commit (); // commit the transaction	
								
							} // model query for deleting option
							
							
						} 

						else {
							
							echo 'fail'; // sending response to ajax
						}
					}
				} catch ( Exception $e ) { // catching the exception
					
					$msg = $e->getMessage ();
					\Yii::$app->session->setFlash ( 'error', $msg );
					
					$transaction->rollback ();                                //if exception occurs transaction rollbacks
				}
			}
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // redirects if session expired
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Action for adding lookup option
	 */
	public function actionAddlookupoptions() {
		// rendering the main layout
		$this->layout = 'main';
		
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			
			$lookup_options = \Yii::$app->request->post ();
			
			
			$model_lookupoptions = new TblAcaLookupOptions ();      //initialising the model
			
			
			$session = \Yii::$app->session;                         // collecting variables from session
			$user_id = $session ['admin_user_id'];
			
			// begining the transaction
			$transaction = \Yii::$app->db->beginTransaction (); // begining the transaction
			try {
				
				if ($model_lookupoptions->load ( \Yii::$app->request->post () )) {
					
					$lookup_options = \Yii::$app->request->post (); // putting the post values in a variable
					$code_id = $lookup_options ['TblAcaLookupOptions'] ['code_id'];
					$optionString = $lookup_options ['TblAcaLookupOptions'] ['lookup_value'];
					$arrOptions = explode ( ',', $optionString ); // making string to array
					
					$x = 0;
					$erroroptions = '';
					foreach ( $arrOptions as $key => $value ) {
						
						$model_findoption = TblAcaLookupOptions::lookupfindoption ( $value , $code_id); // checking for unique
						
						if (! empty ( $model_findoption )) {
							throw new Exception ( 'Lookup option already exists.' ); // if duplicate entry throws a exception
						} else {
							
							// assigning values to model
							$model_lookupoptions->lookup_value = $value;
							$model_lookupoptions->code_id = $code_id;
							$model_lookupoptions->lookup_status = 1;
							$model_lookupoptions->created_by = $user_id;
							$model_lookupoptions->created_date = date ( 'Y-m-d H:i:s' );
							$model_lookupoptions->modified_date = date ( 'Y-m-d H:i:s' );
							$model_lookupoptions->lookup_id = NULL;
							$model_lookupoptions->isNewRecord = TRUE;
							if ($model_lookupoptions->validate () && $model_lookupoptions->save ()) { // validating and saving for each record
								$x ++;
							}
						}
					}
					
					// validating the
					if ($x > 0) {
						
						$transaction->commit (); // commit the transaction
						
						\Yii::$app->session->setFlash ( 'success', 'Lookup option added successfully' );
						return $this->redirect ( array ( // redirecting with success message
								'/admin/masterdata/lookupoptions' 
						) );
					} else {
						
						return $this->redirect ( array (
								'/admin/masterdata/lookupoptions' 
						) );
					}
				}
			} catch ( Exception $e ) { // display error messages if exception occurs
				
				$msg = $e->getMessage ();
				\Yii::$app->session->setFlash ( 'error', $msg );
				
				$transaction->rollback ();                          //if exception occurs transaction rollbacks
				
				return $this->redirect ( array (
						'/admin/masterdata/lookupoptions' 
				) );
			}
			
			return $this->render ( 'lookupoptions', [ 
					'$model_lookupoptions' => $model_lookupoptions 
			] );
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // if session destroyed user gets logout
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Action for adding lookup name
	 */
	public function actionAddlookupname() {
		$this->layout = 'main';
		
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			$session = \Yii::$app->session;                     // collecting variables from session
			$user_id = $session ['admin_user_id'];
			$lookup_options = \Yii::$app->request->post ();
			
			$model_codemaster = new TblAcaCodeMaster ();
			
			$transaction = \Yii::$app->db->beginTransaction (); // begining the transaction
			try {
				
				if ($model_codemaster->load ( \Yii::$app->request->post () )) {
					
					$lookup_name = \Yii::$app->request->post ();
					
					$lookup_code = $lookup_name ['TblAcaCodeMaster'] ['lookup_code'];
					$model_findcode = TblAcaCodeMaster::codemasterfindcode ( $lookup_code );
					
					if (! empty ( $model_findcode )) 					// checking for unique lookup code
					{
						throw new Exception ( 'Lookup name already exist.' ); // throws a exception
					} else {
						$model_codemaster->attributes = $lookup_name ['TblAcaCodeMaster'];
						$model_codemaster->code_type = 1;
						$model_codemaster->created_by = $user_id;
					}
					
					if ($model_codemaster->validate () && $model_codemaster->save ()) { // model validation happens
						
						$transaction->commit (); // commit the transaction
						
						\Yii::$app->session->setFlash ( 'success', 'Lookup Name added successfully' );
						return $this->redirect ( array ( // if added redirecting with success msg
								'/admin/masterdata/lookupoptions' 
						) );
					} else {
						
						\Yii::$app->session->setFlash ( 'error', 'lookup name cannot be added' );
						return $this->redirect ( array ( // if not added redirecting with success msg
								'/admin/masterdata/lookupoptions' 
						) );
					}
				}
			} catch ( Exception $e ) { // any exceptions catch throws error msg
				
				$msg = $e->getMessage ();
				\Yii::$app->session->setFlash ( 'error', $msg );
				
				$transaction->rollback ();                   //if exception occurs transaction rollbacks
				
				return $this->redirect ( array (
						'/admin/masterdata/lookupoptions'  // any exception redirecting with error msg
								) );
			}
			
			return $this->redirect ( array (
					'/admin/masterdata/lookupoptions' 
			) );
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // Redirecting to login page if session destroyed
			
			return $this->goHome ();
		}
	}
		/**
	 * Action for rendering account settings in the grid
	 */
	public function actionAccountsettings() {
		$this->layout = 'main';
		
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			$model_settings=TblAcaGlobalSettings::Findemailsettings(); //getting  data
	
		if(!empty($model_settings)){
			 $name=$model_settings->name;             //assigning data to variable
			 $value=$model_settings->value;
			 $setting_id=$model_settings->setting_id;
		}else{
			 $name='';             //assigning data to variable
			 $value='no data available';
			 $setting_id='';
		}
			
		
			return $this->render('accountsettings'            //render the values to screen
					 ,['name'=>$name,
					'value'=>$value,
					'setting_id'=>$setting_id]);
			
			
		} else {
			\Yii::$app->SessionCheck->adminlogout ();    // Redirecting to login page if session destroyed
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Action for updating account settings
	 */
	public function actionUpdateaccountsetting()
	{
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			$post = \Yii::$app->request->post ();
			$result = array();
	
			if (! empty ( $post )) { // checking the values
	
				$value=$post['value'];
				$id=$post['setting_id'];
	
				if (! empty ( $id )) {
	
					$transaction = \Yii::$app->db->beginTransaction (); // begining the transaction
					try {
	
						$model_setting = TblAcaGlobalSettings::settinguniquedetails ( $id ); // Retriving video link screen details for particular id
	
						 
						$model_setting->value =   $value ; // assiging the values to model
	
							
						if ($model_setting->validate () && $model_setting->save ()) 						// validating model and saving it(server side validation)
						{
							$result['success'] = 'Email setting has been updated successfully';
							$transaction->commit (); // commiting the transaction
						} else {
								
							$result['fail'] = $model_setting->errors;
						}
					} catch ( Exception $e ) { // catching the exception
	
						$msg = $e->getMessage ();
						\Yii::$app->session->setFlash ( 'error', $msg );
	
						$transaction->rollback ();                                       //if exception occurs transaction rollbacks
	
						return $this->redirect ( array (
								'/admin/accountsetting'  // redirecting to main grid screen
						) );
					}
						
				} else {
					$result['fail'] = 'some error occured'; // sending response to ajax
				}
			} else {
				$result['fail'] = 'some error occured'; // sending response to ajax
			}
	
			return json_encode($result);
	
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // Redirecting to home page if session destroyed
	
			return $this->goHome ();
		}
	}
	
	/**
	 * Action for rendering elements in the grid
	 */
	public function actionElements() {
		
		$this->layout = 'main';
		
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			
			$model_lookupoptions = new TblAcaLookupOptions ();
			
			$limit = $url = '';
			$filter ['filter_keyword'] = ''; // initialising filter for search
			
			$get = \Yii::$app->request->get ();
			
			if (isset ( $get ['keyword'] ) && $get ['keyword'] != '') {
				$encrypt_component = new EncryptDecryptComponent (); // decrypting the id
				$id = $encrypt_component->decryptUser ( $get ['keyword'] );
				$get ['keyword'] = $id;
				$filter ['filter_keyword'] = $get ['keyword'];
				
				$filter_elements = $get ['keyword'];
				$url .= '&keyword=' . $get ['keyword'];
			} else {
				$filter_elements = '';
				$url .= '&keyword=' . '';
			}
			
			$model_acaelements = TblAcaElementMaster::Elementalldetails ( $filter_elements ); // retriving values for grid
			
			return $this->render ( 'element', [  // render values to element view page
					'model' => $model_acaelements,
					'model_lookupoptions' => $model_lookupoptions 
			] );
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // Redirecting to login page if session destroyed
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Action for updating element label
	 */
	public function actionUpdateelementlabel() {
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			
			$post = \Yii::$app->request->post ();
			$id = $post ['id'];
			$elementid = $post ['elementid'];
			
			if (! empty ( $id )) {
				
				$transaction = \Yii::$app->db->beginTransaction (); // begining the transaction
				try {
					
					$model = TblAcaElementMaster::Elementuniquedetails ( $id );
					$model->element_label = strip_tags ( $elementid );
					
					if ($model->save () && $model->validate ()) {
						echo 'success'; // sending response to ajax
						$transaction->commit (); // commit the transaction
					} else {
						
						echo 'fail'; // sending response to ajax
					}
				} catch ( Exception $e ) { // catching the exception
					
					$msg = $e->getMessage ();
					\Yii::$app->session->setFlash ( 'error', $msg );
					
					$transaction->rollback ();                //if exception occurs transaction rollbacks
				}
			} else {
				echo 'fail'; // sending response to ajax
			}
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // Redirecting to login page if session destroyed
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Action for adding brand details
	 */
	public function actionAddbrand() {
		$this->layout = 'main';
		$session = \Yii::$app->session;
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			
			$logged_user_id = $session ['admin_user_id'];       // collecting variables from session
			$model_acabrands = new TblAcaBrands ();
			$model_acabrands->scenario = 'save'; // model scenario for validating
			
			$transaction = \Yii::$app->db->beginTransaction (); // begining the transaction
			try {
				if ($model_acabrands->load ( \Yii::$app->request->post () )) {
					
					$brand_details = \Yii::$app->request->post ();
					$name = $brand_details ['TblAcaBrands'] ['brand_name'];
					
					$checkmodel = TblAcaBrands::Checkbrandname ( $name ); // checking for particular brand name
					
					if (empty ( $checkmodel )) {
						$model_acabrands->attributes = $brand_details ['TblAcaBrands'];
						$model_acabrands->created_date = date ( 'Y-m-d H:i:s' );
						$model_acabrands->modified_date = date ( 'Y-m-d H:i:s' );
						$model_acabrands->created_by = $logged_user_id;
						$model_acabrands->is_deleted = 1;
						
						$image = UploadedFile::getInstance ( $model_acabrands, 'brand_logo' ); // getting instance of a uploaded file
						$rnd = rand ( 0, 99999 );
						if ($image) {
							$ext = explode ( ".", $image->name );
							
							$model_acabrands->brand_logo = $ext [0] . '_1_' . $rnd . '.' . $ext [1];
							
							$path = \Yii::$app->basePath . '/Images/profile_image/brand_logo/' . $model_acabrands->brand_logo;
						}
						if ($model_acabrands->save () && $model_acabrands->validate ()) { // model validated(server side validation)
							if ($image) {
								$image->saveAs ( $path );
								chmod ( $path, 0755 );
							}
							
							$transaction->commit (); // commit the transaction
							
							\Yii::$app->session->setFlash ( 'success', 'Brand added successfully' );
							return $this->redirect ( array (
									'/admin/masterdata'  // redirecting to grid if brand is added
														) );
						} else {
							
							return $this->render ( 'addbrand', [  // render the array to addbrand view file
									'model' => $model_acabrands 
							] );
						}
					} else {
						$model_acabrands->addError ( 'brand_name', 'Brand name address is already exist.' ); // model adding error
					}
				}
			} catch ( Exception $e ) { // any exceptions catch throws error msg
				
				$msg = $e->getMessage ();
				\Yii::$app->session->setFlash ( 'error', $msg );
				
				$transaction->rollback ();             //if exception occurs transaction rollbacks
			}
			return $this->render ( 'addbrand', [  // render the array to addbrand view file
					'model' => $model_acabrands 
			] );
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // Redirecting to login page if session destroyed
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Action for updating brand details
	 */
	public function actionEditbrand() {
		$this->layout = 'main';
		$session = \Yii::$app->session;
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			$logged_user_id = $session ['admin_user_id'];      // collecting variables from session
			$get = \Yii::$app->request->get ();
			$id = $get ['id'];
			$encrypt_component = new EncryptDecryptComponent ();
			$id = $encrypt_component->decryptUser ( $id ); // decrypting id
			if (! empty ( $id )) {
				
				$model_acabrands = TblAcaBrands::Branduniquedetails ( $id );
				$old_image = $model_acabrands ['brand_logo'];
				$old_brandname = $model_acabrands ['brand_name'];
				$transaction = \Yii::$app->db->beginTransaction (); // begining the transaction
				try {
					if ($model_acabrands->load ( \Yii::$app->request->post () )) {
						$brand_details = \Yii::$app->request->post ();
						$name = $brand_details ['TblAcaBrands'] ['brand_name'];
						
						if ($old_brandname == $name) { // checking for particular brand name
							$checkmodel = '';
						} else {
							$checkmodel = TblAcaBrands::Checkbrandname ( $name );
						}
						
						if (empty ( $checkmodel )) { // adding brand if brand name is not exist
							$model_acabrands->attributes = $brand_details ['TblAcaBrands'];
							$model_acabrands->support_email = $brand_details ['TblAcaBrands'] ['support_email'];
							$model_acabrands->support_number = $brand_details ['TblAcaBrands'] ['support_number'];
							$model_acabrands->modified_date = date ( 'Y-m-d H:i:s' );
							$model_acabrands->modified_by = $logged_user_id;
							$model_acabrands->is_deleted = 1;
							
							$image = UploadedFile::getInstance ( $model_acabrands, 'brand_logo' ); // getting instance of a uploaded file
							$rnd = rand ( 0, 99999 );
							
							if (! empty ( $image )) { // checking for image
								$ext = explode ( ".", $image->name );
								
								$model_acabrands->brand_logo = $ext [0] . '_1_' . $rnd . '.' . $ext [1];
								
								$path = \Yii::$app->basePath . '/Images/profile_image/brand_logo/' . $model_acabrands->brand_logo;
							} else {
								$model_acabrands->brand_logo = $old_image;
							}
							
							if ($model_acabrands->save () && $model_acabrands->validate ()) { // model validated(server side validation)
								if (! empty ( $image )) { // saving path for image
									$image->saveAs ( $path );
									chmod ( $path, 0755 );
								}
								$transaction->commit (); // commit the transaction
								
								\Yii::$app->session->setFlash ( 'success', 'Brand updated successfully' );
								return $this->redirect ( array ( // redirecting to grid if brand is updated
										'/admin/masterdata' 
								) );
							} else {
								
								return $this->render ( 'editbrand', [  // render the array to editbrand view file
										'model' => $model_acabrands 
								] );
							}
						} else {
							$model_acabrands->addError ( 'brand_name', 'Brand name is already exist.' ); // model adding error
						}
					}
				} catch ( Exception $e ) { // any exceptions catch throws error msg
					
					$msg = $e->getMessage ();
					\Yii::$app->session->setFlash ( 'error', $msg );
					
					$transaction->rollback ();             //if exception occurs transaction rollbacks
				}
				return $this->render ( 'editbrand', [  // render the array to editbrand view file
						'model' => $model_acabrands 
				] );
			}
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // Redirecting to login page if session destroyed
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Action for deletion brand details
	 */
	public function actionDeletebrand() {
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			
			$post = \Yii::$app->request->post (); // getting values by post method
			$id = $post ['id'];
			if (! empty ( $id )) {
				$model_client = new TblAcaClients (); // initialising model tblacaclients
				$transaction = \Yii::$app->db->beginTransaction (); // begining the transaction
				try {
					
					$model = TblAcaBrands::Branduniquedetails ( $id ); // Retriving the values of particular brand
					
					$check_brand = $model_client->findBybrandId ( $id ); // Retriving the values of particular brand which is used
					if (empty ( $check_brand )) {
						
						$model->is_deleted = 0;
						
						if ($model->save () && $model->validate ()) 						// model validated(server side validation)
						
						{
							echo 'success'; // sending response to ajax
							$transaction->commit (); // commit the transaction
						} else {
							
							echo 'Some error occurred';
						}
					} else {
						echo 'Brand cannot be deleted as it is already associated to a client.';
					}
				} catch ( Exception $e ) { // any exceptions throws error msg
					
					$msg = $e->getMessage ();
					\Yii::$app->session->setFlash ( 'error', $msg );
					 
					$transaction->rollback ();                         //if exception occurs transaction rollbacks
				}
			} else {
				echo 'fail'; // sending response to ajax
			}
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // Redirecting to login page if session destroyed
			
			return $this->goHome ();
		}
	}
	
	/**
	 * Action for activate/deactive brand
	 */
	public function actionBrandactivate() {
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			
			$post = \Yii::$app->request->post (); // getting values by post method
			$id = $post ['id'];
			$is_active = $post ['is_active'];
			$transaction = \Yii::$app->db->beginTransaction (); // begining the transaction
			try {
				$model = TblAcaBrands::Branduniquedetails ( $id ); // Retriving the values of particular brand
				if ($is_active == 1) {
					$model->brand_status = 2;
				} elseif ($is_active == 2) {
					$model->brand_status = 1;
				}
				
				if ($model->save () && $model->validate ()) 				// model validated(server side validation)
				
				{
					echo 'success';
					$transaction->commit (); // commit the transaction
				} else {
					
					echo 'fail'; // sending response to ajax
				}
			} catch ( Exception $e ) { // any exceptions throws error msg
				
				$msg = $e->getMessage ();
				\Yii::$app->session->setFlash ( 'error', $msg );
				
				$transaction->rollback ();                        //if exception occurs transaction rollbacks
			}
		} else {
			\Yii::$app->SessionCheck->adminlogout (); // Redirecting to login page if session destroyed
			
			return $this->goHome ();
		}
	}
	public function actionVideos() {
		$this->layout = 'main';
		
		if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
		{
			
			return $this->render ( 'videos' );
		} else {
			\Yii::$app->SessionCheck->adminlogout ();
			
			return $this->goHome ();
		}
	}
}
