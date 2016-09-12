<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_aca_company_user_permission".
 *
 * @property integer $company_permission_id
 * @property integer $company_user_id
 * @property integer $client_permission_id
 * @property integer $company_id
 * @property integer $created_by
 * @property string $created_date
 * @property integer $modified_by
 * @property string $modified_date
 *
 * @property TblAcaClientRightsMaster $clientPermission
 * @property TblAcaCompanies $company
 * @property TblAcaCompanyUsers $companyUser
 */
class TblAcaCompanyUserPermission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_aca_company_user_permission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_user_id', 'client_permission_id', 'company_id', 'created_by', 'modified_by', 'modified_date'], 'required'],
            [['company_user_id', 'client_permission_id', 'company_id', 'created_by', 'modified_by'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['client_permission_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblAcaClientRightsMaster::className(), 'targetAttribute' => ['client_permission_id' => 'client_permission_id']],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblAcaCompanies::className(), 'targetAttribute' => ['company_id' => 'company_id']],
            [['company_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblAcaCompanyUsers::className(), 'targetAttribute' => ['company_user_id' => 'company_user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_permission_id' => 'Company Permission ID',
            'company_user_id' => 'Company User ID',
            'client_permission_id' => 'Client Permission ID',
            'company_id' => 'Company ID',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientPermission()
    {
        return $this->hasOne(TblAcaClientRightsMaster::className(), ['client_permission_id' => 'client_permission_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(TblAcaCompanies::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyUser()
    {
        return $this->hasOne(TblAcaCompanyUsers::className(), ['company_user_id' => 'company_user_id']);
    }
	
	
    public static function GetallcompaniesbycompanyuserId($company_user_id)
    {
    	return static::find()->where(['company_user_id' => $company_user_id])->groupBy('company_id')->All();
    }
     
    public static function FindallbycompanyuserId($company_user_id)
    {
    	return static::findAll(['company_user_id' => $company_user_id]);
    }
    
    public static function FindBycompanyuserIdcompanyId($company_user_id,$company_id)
    {
    	return static::findAll(['company_user_id' => $company_user_id,'company_id'=>$company_id]);
    }
    
    
    public static function GetallusersbycompanyId($company_id)
    {
    	return static::find()->joinWith('companyUser')->where(['company_id' => $company_id])->All();
    }
    
    /**
     *
     * Find all permissions in string format
     */
    public static function findPermissionsstring($company_user_id,$company_id)
    {
    	$details = static::findAll(['company_user_id' => $company_user_id,'company_id'=>$company_id]);
    	$permissions = '';
    	if(!empty($details))
    	{
    		foreach($details as $detail)
    		{
    			$permissions .= $detail->clientPermission->permission_name.', ';
    		}
    	}
    	else
    	{
    		$permissions = '<span style="color: black;">No Permissions assigned</span>';
    	}
    	return $permissions;
    }
}
