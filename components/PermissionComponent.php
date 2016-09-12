<?php

namespace app\components;

use Yii;
use yii\base\Component;
use app\controllers\SiteController;
use app\models\TblAcaStaffUserPermission;
use app\models\TblAcaStaffUsers;

class PermissionComponent extends Component {
	
	/**
	 *
	 * @param id $staff_id        	
	 * @param array $permissions
	 *        	Adminstaffpermissions assigns permissions to the Admin users
	 */
	public function Adminstaffpermissions($staff_id, $permissions = null) {
		$model_permissions = new TblAcaStaffUserPermission ();
		$staff_permissions_details = $model_permissions->findById ( $staff_id );
		
		$session = \Yii::$app->session;
		$logged_user_id = $session ['admin_user_id'];
		
		if (! empty ( $staff_permissions_details )) {
			TblAcaStaffUserPermission::deleteAll (['staff_id'=>$staff_id]);
		}
		
		if (! empty ( $permissions )) {
			foreach ( $permissions as $key => $value ) {
				
				$model_permissions->staff_id = $staff_id;
				$model_permissions->staff_permission_id = $value;
				$model_permissions->created_by = $logged_user_id;
				$model_permissions->created_date = date ( 'Y-m-d H:i:s' );
				$model_permissions->isNewRecord = true;
				$model_permissions->admin_staff_permission_id = null;
				$model_permissions->save ();
			}
		}
		
		return 'success';
	}
	
	public function Getloggeduserpermission($user_id)
	{
		$permissions = array();
		$model_staff_users = new TblAcaStaffUsers();
		$model_permissions = new TblAcaStaffUserPermission ();
		
		$staff_user_details = $model_staff_users->findById ( $user_id );
		$staff_id = $staff_user_details->staff_id; // staff Id
		
		$staff_permissions_details = $model_permissions->findById ( $staff_id );
		
		if (! empty ( $staff_permissions_details )) {
			
			foreach($staff_permissions_details as $permission)
			{
				$permissions[] = $permission->staff_permission_id;
			}
			
		}
		
		return $permissions;
	}
}