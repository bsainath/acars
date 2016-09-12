<?php

namespace app\modules\client\controllers;

use yii\web\Controller;
use app\models\TblAcaCompanies;
use app\models\TblAcaClients;
use app\components\EncryptDecryptComponent;
use app\models\TblAcaCompanyReportingPeriod;
use app\models\TblAcaCompanyUsers;
use app\models\TblAcaClientRightsMaster;
use app\models\TblAcaCompanyUserPermission;
use app\models\TblAcaUsers;

class CompanyuserController extends Controller {
	public function actionIndex() {
		$this->layout = 'main';
		if (\Yii::$app->SessionCheck->isclientLogged () == true) 		// checking logged session
		{
			$encrypt_component = new EncryptDecryptComponent ();
			$model_companies = new TblAcaCompanies ();
			$model_company_users = new TblAcaCompanyUsers ();
			$model_company_user_permission = new TblAcaCompanyUserPermission ();
			
			$session = \Yii::$app->session;
			$client_ids = $session ['client_ids']; // all related clients to the logged user
			$company_ids = $session ['company_ids']; // all related companies to the logged user
			$mapped_company_ids = array_map ( function ($piece) {
				return ( string ) $piece;
			}, $company_ids );
			
			$get_company_id = \Yii::$app->request->get ();
			if (! empty ( $get_company_id )) {
				$encrypt_company_id = $get_company_id ['c_id'];
				if (! empty ( $encrypt_company_id )) {
					$company_id = $encrypt_component->decryptUser ( $encrypt_company_id );
					$check_company_details = $model_companies->Companyuniquedetails ( $company_id );
					$client_id = $check_company_details->client_id;
				}
				
				if (! empty ( $check_company_details ) && in_array ( $client_id, $client_ids, TRUE ) && in_array ( $company_id, $mapped_company_ids, TRUE )) {
					
					$all_company_users = $model_company_users->GetallusersbycompanyId ( $company_id );
					
					return $this->render ( 'index', [ 
							'company_details' => $check_company_details,
							'all_company_users' => $all_company_users 
					] );
				} else {
					return $this->redirect ( array (
							'/client/companies' 
					) );
				}
			} else {
				return $this->redirect ( array (
						'/client/companies' 
				) );
			}
		} else {
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
	}
	public function actionAdduser() {
		$this->layout = 'main';
		if (\Yii::$app->SessionCheck->isclientLogged () == true) 		// checking logged session
		{
			$encrypt_component = new EncryptDecryptComponent ();
			$model_companies = new TblAcaCompanies ();
			$model_company_users = new TblAcaCompanyUsers ();
			$model_client_rights_master = new TblAcaClientRightsMaster ();
			$model_users = new TblAcaUsers ();
			
			$user_details = array ();
			$permissions = array ();
			$company_user_permissions =  array();
			$phone = '';
			$address_1 = '';
			$address_2 = '';
			$zip = '';
			$state = '';
			$city = '';
			
			$session = \Yii::$app->session;
			$logged_user_id = $session ['client_user_id'];
			$client_ids = $session ['client_ids']; // all related clients to the logged user
			$company_ids = $session ['company_ids']; // all related companies to the logged user
			$mapped_company_ids = array_map ( function ($piece) {
				return ( string ) $piece;
			}, $company_ids );
			
			$get_company_id = \Yii::$app->request->get ();
			
			if (! empty ( $get_company_id )) {
				$encrypt_company_id = $get_company_id ['c_id'];
				if (! empty ( $encrypt_company_id )) {
					$company_id = $encrypt_component->decryptUser ( $encrypt_company_id );
					$check_company_details = $model_companies->Companyuniquedetails ( $company_id );
					$client_id = $check_company_details->client_id;
				}
				
				if (! empty ( $check_company_details ) && in_array ( $client_id, $client_ids, TRUE ) && in_array ( $company_id, $mapped_company_ids, TRUE )) {
					
				
					$all_companies = $model_companies->FindallclientsbyId ( $logged_user_id );
					
					$client_rights = $model_client_rights_master->Findallrights ();
					
					// begin transaction
					$transaction = \Yii::$app->db->beginTransaction ();
					
					try {
						if ($model_company_users->load ( \Yii::$app->request->post () ) && $model_users->load ( \Yii::$app->request->post () )) {
							$client_details = \Yii::$app->request->post ();
							$email_id = $client_details ['TblAcaUsers'] ['useremail'];
							if (! empty ( $client_details ['userpermission'] )) {
								$permissions = $client_details ['userpermission'];
							}
							// check email id existence
							
							$check_email_details = $this->checkemailid ( $email_id );
							
							if ($check_email_details ['result'] == 0) 							// new user
							{
								
								$new_user = $this->Addnewuser ( $email_id ); // creating new user
								$user_id = $new_user ['user_id'];
								$random_salt = $new_user ['random_salt'];
								
								// add company user
								$user_details ['first_name'] = $client_details ['TblAcaCompanyUsers'] ['first_name'];
								$user_details ['last_name'] = $client_details ['TblAcaCompanyUsers'] ['last_name'];
								
								if (! empty ( $staff_details ['TblAcaCompanyUsers'] ['phone'] )) {
									$phone = preg_replace ( '/[^A-Za-z0-9\']/', '', $staff_details ['TblAcaCompanyUsers'] ['phone'] ); // escape apostraphe
								}
								if (! empty ( $staff_details ['TblAcaCompanyUsers'] ['address_1'] )) {
									$address_1 = $staff_details ['TblAcaCompanyUsers'] ['address_1'];
								}
								if (! empty ( $staff_details ['TblAcaCompanyUsers'] ['address_2'] )) {
									$address_2 = $staff_details ['TblAcaCompanyUsers'] ['address_2'];
								}
								if (! empty ( $staff_details ['TblAcaCompanyUsers'] ['state'] )) {
									$state = $staff_details ['TblAcaCompanyUsers'] ['state'];
								}
								if (! empty ( $staff_details ['TblAcaCompanyUsers'] ['city'] )) {
									$city = $staff_details ['TblAcaCompanyUsers'] ['city'];
								}
								
								if (! empty ( $staff_details ['TblAcaCompanyUsers'] ['zip'] )) {
									$zip = $staff_details ['TblAcaCompanyUsers'] ['zip'];
								}
								
								$user_details ['phone'] = $phone;
								$user_details ['email'] = $email_id;
								$user_details ['address_1'] = $address_1;
								$user_details ['address_2'] = $address_2;
								$user_details ['state'] = $state;
								$user_details ['city'] = $city;
								$user_details ['zip'] = $zip;
								$user_details ['role_notes'] = $client_details ['TblAcaCompanyUsers'] ['role_notes'];
								
								$new_company_user = $this->Addcompanyuser ( $user_id, $client_id, $user_details );
								
								// assign permissions to company user
								if (! empty ( $permissions ) && ! empty ( $new_company_user ['company_user_id'] )) {
									$company_user_id = $new_company_user ['company_user_id'];
									$assign_permissions = $this->Assignpermissions ( $company_id, $permissions, $company_user_id );
								}
								
								$transaction->commit ();
								\Yii::$app->session->setFlash ( 'success', 'User added successfully' );
								return $this->redirect ( array (
										'/client/companyuser?c_id=' . $encrypt_company_id 
								) );
							} elseif ($check_email_details ['result'] == 3) 							// old company user
							{
								$old_user_id = $check_email_details ['user_id'];
								// check company user related to particular client
								$check_company_user = $this->checkuserexistence ( $old_user_id, $client_id );
								if (! empty ( $check_company_user ['output'] ) && $check_company_user ['output'] == 1) {
									
									$company_user_id = $check_company_user ['company_user_id'];
									
									// assign permissions to company user
									if (! empty ( $permissions ) && ! empty ( $company_user_id )) {
										
										$assign_permissions = $this->Assignpermissions ( $company_id, $permissions, $company_user_id );
									}
									
									$transaction->commit ();
									\Yii::$app->session->setFlash ( 'success', 'User added successfully' );
									return $this->redirect ( array (
											'/client/companyuser?c_id=' . $encrypt_company_id 
									) );
								} else if (! empty ( $check_company_user ['result'] ) && $check_company_user ['result'] == 0) {
									$model_users->addError ( 'useremail', 'Email address already exists.' );
								}
							} else {
								
								$model_users->addError ( 'useremail', 'Email address already exists.' );
							}
						}
					} catch ( Exception $e ) {
						
						$msg = $e->getMessage ();
						\Yii::$app->session->setFlash ( 'error', $msg );
						
						// rollback transaction
						$transaction->rollback ();
					}
					
					return $this->render ( 'addusers', [ 
							'company_details' => $check_company_details,
							'model_company_users' => $model_company_users,
							'all_companies' => $all_companies,
							'client_rights' => $client_rights,
							'model_users' => $model_users,
							'company_user_permissions'=>$company_user_permissions 
					] );
				} else {
					return $this->redirect ( array (
							'/client/companies' 
					) );
				}
			} else {
				return $this->redirect ( array (
						'/client/companies' 
				) );
			}
		} else {
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
	}
	public function actionUpdateuser() {
		$this->layout = 'main';
		if (\Yii::$app->SessionCheck->isclientLogged () == true) 		// checking logged session
		{
			$encrypt_component = new EncryptDecryptComponent ();
			$model_companies = new TblAcaCompanies ();
			$model_company_users = new TblAcaCompanyUsers ();
			$model_client_rights_master = new TblAcaClientRightsMaster ();
			$model_users = new TblAcaUsers ();
			$model_company_user_permission = new TblAcaCompanyUserPermission();
			
			
			$user_details = array ();
			$permissions = array ();
			$company_user_permissions = array();
			$phone = '';
			$address_1 = '';
			$address_2 = '';
			$zip = '';
			$state = '';
			$city = '';
			
			$session = \Yii::$app->session;
			$logged_user_id = $session ['client_user_id'];
			$client_ids = $session ['client_ids']; // all related clients to the logged user
			$company_ids = $session ['company_ids']; // all related companies to the logged user
			$mapped_company_ids = array_map ( function ($piece) {
				return ( string ) $piece;
			}, $company_ids );
			
			$get_company_id = \Yii::$app->request->get ();
			
			if (! empty ( $get_company_id ) && ! empty ( $get_company_id ['c_id'] )) {
				$encrypt_company_id = $get_company_id ['c_id'];
				
				if (! empty ( $get_company_id ['company_user_id'] )) {
					
					$encrypt_company_user_id = $get_company_id ['company_user_id'];
					if (! empty ( $encrypt_company_id )) {
						$company_id = $encrypt_component->decryptUser ( $encrypt_company_id );
						$check_company_details = $model_companies->Companyuniquedetails ( $company_id );
						$client_id = $check_company_details->client_id;
					}
					$company_user_id = $encrypt_component->decryptUser ( $encrypt_company_user_id );
					
					if (! empty ( $check_company_details ) && in_array ( $client_id, $client_ids, TRUE ) && in_array ( $company_id, $mapped_company_ids, TRUE )) {
						

						$company_users = $model_company_users->FindBycompanyuserId($company_user_id);
						if(!empty($company_users))
						{
							$model_company_users = $company_users;
							$user_id = $model_company_users->user_id;
							
							$users = $model_users->findById($user_id);
							
							if(!empty($users))
							{
								$model_users = $users;
							}
						
						$all_permissions = $model_company_user_permission->FindBycompanyuserIdcompanyId($company_user_id,$company_id);
						
						if(!empty($all_permissions ))
						{
						foreach($all_permissions as $permission)
						{
							
							$company_user_permissions[] = $permission->client_permission_id;
						}
						}
						$all_companies = $model_companies->FindallclientsbyId ( $logged_user_id );
						
						$client_rights = $model_client_rights_master->Findallrights ();
						
						// begin transaction
						$transaction = \Yii::$app->db->beginTransaction ();
						
						try {
							if ($model_company_users->load ( \Yii::$app->request->post () ) && $model_users->load ( \Yii::$app->request->post () )) {
								$client_details = \Yii::$app->request->post ();
								$email_id = $client_details ['TblAcaUsers'] ['useremail'];
								if (! empty ( $client_details ['userpermission'] )) {
									$permissions = $client_details ['userpermission'];
								}
								
								$model_company_users->attributes = $client_details ['TblAcaCompanyUsers'];
								
								if($model_company_users->save())
								{
									
									
										$assign_permissions = $this->Assignpermissions ( $company_id, $permissions, $company_user_id );
									
										$transaction->commit ();
										\Yii::$app->session->setFlash ( 'success', 'User updated successfully' );
										return $this->redirect ( array (
												'/client/companyuser?c_id=' . $encrypt_company_id
										) );
									
								}
								
								
							}
						} catch ( Exception $e ) {
							
							$msg = $e->getMessage ();
							\Yii::$app->session->setFlash ( 'error', $msg );
							
							// rollback transaction
							$transaction->rollback ();
						}
						
						return $this->render ( 'updateusers', [ 
								'company_details' => $check_company_details,
								'model_company_users' => $model_company_users,
								'all_companies' => $all_companies,
								'client_rights' => $client_rights,
								'model_users' => $model_users,
								'company_user_permissions'=>$company_user_permissions
						] );
						
						
					}
					 else {
						return $this->redirect ( array (
								'/client/companyuser?c_id=' . $encrypt_company_id
						) );
					}
					} else {
						return $this->redirect ( array (
								'/client/companies' 
						) );
					}
				} else {
					return $this->redirect ( array (
							'/client/companyuser?c_id=' . $encrypt_company_id 
					) );
				}
			} else {
				return $this->redirect ( array (
						'/client/companies' 
				) );
			}
		} else {
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
	}
	protected function Assignpermissions($company_id, $permissions = NULL, $company_user_id) {
		if (\Yii::$app->SessionCheck->isclientLogged () == true) 		// checking logged session
		{
			
				$session = \Yii::$app->session;
				$logged_user_id = $session ['client_user_id'];
				$model_company_user_permissions = new TblAcaCompanyUserPermission ();
				$result = '';
				
				$check_all_permissions = $model_company_user_permissions->FindallbycompanyuserId ( $company_user_id );
				if (! empty ( $check_all_permissions )) {
					TblAcaCompanyUserPermission::deleteAll ( [ 
							'company_user_id' => $company_user_id,
							'company_id' => $company_id 
					] );
				}
				
				foreach ( $permissions as $key => $value ) {
					
					$model_company_user_permissions->company_user_id = $company_user_id;
					$model_company_user_permissions->client_permission_id = $value;
					$model_company_user_permissions->company_id = $company_id;
					$model_company_user_permissions->created_by = $logged_user_id;
					$model_company_user_permissions->created_date = date ( 'Y-m-d H:i:s' );
					$model_company_user_permissions->modified_by = $logged_user_id;
					$model_company_user_permissions->modified_date = date ( 'Y-m-d H:i:s' );
					$model_company_user_permissions->isNewRecord = true;
					$model_company_user_permissions->company_permission_id = null;
					$model_company_user_permissions->save ();
				}
			
		} else {
				\Yii::$app->SessionCheck->clientlogout ();
				
				return $this->goHome ();
			}
	}
	
	/**
	 * Function used for adding new company user
	 *
	 * @param unknown $email_id        	
	 * @return multitype:NULL number
	 */
	protected function Addnewuser($email_id) {
		$session = \Yii::$app->session;
		if (\Yii::$app->SessionCheck->isclientLogged () == true) 		// checking logged session
		{
			$user_details = array ();
			$logged_user_id = $session ['client_user_id'];
			if ($email_id) {
				$model_users = new TblAcaUsers ();
				
				$random_salt = $model_users->generatePasswordResetToken ();
				$model_users->useremail = $email_id;
				$model_users->usertype = 3; // 3 Denotes Company User
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
			
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
	}
	protected function checkemailid($email_id) {
		$session = \Yii::$app->session;
		if (\Yii::$app->SessionCheck->isclientLogged () == true) 		// checking logged session
		{
			$result = array ();
			$new_user = 0;
			$admin_user = 1;
			$client_user = 2;
			$company_user = 3;
			
			if ($email_id) {
				$model_users = new TblAcaUsers ();
				$model_company_users = new TblAcaCompanyUsers ();
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
			
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
	}
	protected function Addcompanyuser($user_id, $client_id, $user_details) {
		$session = \Yii::$app->session;
		$logged_user_id = $session ['client_user_id'];
		$result = array ();
		
		if (\Yii::$app->SessionCheck->isclientLogged () == true) 		// checking logged session
		{
			$model_company_users = new TblAcaCompanyUsers ();
			
			$model_company_users->client_id = $client_id;
			$model_company_users->user_id = $user_id;
			$model_company_users->first_name = $user_details ['first_name'];
			$model_company_users->last_name = $user_details ['last_name'];
			$model_company_users->phone = $user_details ['phone'];
			$model_company_users->email = $user_details ['email'];
			$model_company_users->address_1 = $user_details ['address_1'];
			$model_company_users->address_2 = $user_details ['address_2'];
			$model_company_users->state = $user_details ['state'];
			$model_company_users->city = $user_details ['city'];
			$model_company_users->zip = $user_details ['zip'];
			$model_company_users->role_notes = $user_details ['role_notes'];
			$model_company_users->created_by = $logged_user_id;
			$model_company_users->created_date = date ( 'Y-m-d H:i:s' );
			;
			$model_company_users->modified_by = $logged_user_id;
			$model_company_users->modified_date = date ( 'Y-m-d H:i:s' );
			;
			
			if ($model_company_users->save ()) {
				$company_user_id = $model_company_users->company_user_id;
				$result ['output'] = 'success';
				$result ['company_user_id'] = $company_user_id;
			}
			
			return $result;
		} else {
			
			\Yii::$app->SessionCheck->clientlogout ();
			
			return $this->goHome ();
		}
	}
	protected function checkuserexistence($old_user_id, $client_id) {
		if (\Yii::$app->SessionCheck->isclientLogged () == true) 		// checking logged session
		{
			$result = array ();
			$user_details = TblAcaCompanyUsers::FindbyuserIdclientID ( $old_user_id, $client_id );
			if (! empty($user_details))
			{
				$result['output'] = 1;
				$result['company_user_id'] = $user_details->company_user_id;
			}
			else 
			{
				$result['output']= 0;
			}
			
			return $result;
		}else {
	
			\Yii::$app->SessionCheck->clientlogout ();
	
			return $this->goHome ();
		}
	}
}
