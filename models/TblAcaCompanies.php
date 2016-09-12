<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_aca_companies".
 *
 * @property integer $company_id
 * @property integer $client_id
 * @property string $company_client_number
 * @property string $company_name
 * @property string $company_ein
 * @property integer $reporting_status
 * @property integer $created_by
 * @property string $created_date
 * @property integer $modified_by
 * @property string $modified_date
 *
 * @property TblAcaAggregatedGroup[] $tblAcaAggregatedGroups
 * @property TblAcaBasicAdditionalDetail[] $tblAcaBasicAdditionalDetails
 * @property TblAcaBasicInformation[] $tblAcaBasicInformations
 * @property TblAcaClients $client
 * @property TblAcaCompanyReportingPeriod[] $tblAcaCompanyReportingPeriods
 * @property TblAcaDesignatedGovtEntity[] $tblAcaDesignatedGovtEntities
 * @property TblAcaEmpStatusTrack[] $tblAcaEmpStatusTracks
 * @property TblAcaGeneralPlanInfo[] $tblAcaGeneralPlanInfos
 * @property TblAcaMecCoverage[] $tblAcaMecCoverages
 * @property TblAcaPlanCoverageType[] $tblAcaPlanCoverageTypes
 * @property TblAcaPlanCriteria[] $tblAcaPlanCriterias
 */
class TblAcaCompanies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_aca_companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_id', 'company_client_number', 'created_by'], 'required'],
            [['client_id', 'created_by', 'reporting_status', 'modified_by'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['company_client_number'], 'string', 'max' => 100],
            [['company_name'], 'string', 'max' => 200],
            [['company_ein'], 'string', 'max' => 25],
			[['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblAcaClients::className(), 'targetAttribute' => ['client_id' => 'client_id']],
        ];
    }

	
	
		
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'client_id' => 'Client ID',
            'company_client_number' => 'Company Client Number',
            'company_name' => 'Company Name',
            'company_ein' => 'Company Ein',
			'reporting_status' => 'Reporting Status',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblAcaAggregatedGroups()
    {
        return $this->hasMany(TblAcaAggregatedGroup::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblAcaBasicAdditionalDetails()
    {
        return $this->hasMany(TblAcaBasicAdditionalDetail::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblAcaBasicInformations()
    {
        return $this->hasMany(TblAcaBasicInformation::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClient()
    {
        return $this->hasOne(TblAcaClients::className(), ['client_id' => 'client_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblAcaCompanyReportingPeriods()
    {
        return $this->hasMany(TblAcaCompanyReportingPeriod::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblAcaDesignatedGovtEntities()
    {
        return $this->hasMany(TblAcaDesignatedGovtEntity::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblAcaEmpStatusTracks()
    {
        return $this->hasMany(TblAcaEmpStatusTrack::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblAcaGeneralPlanInfos()
    {
        return $this->hasMany(TblAcaGeneralPlanInfo::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblAcaMecCoverages()
    {
        return $this->hasMany(TblAcaMecCoverage::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblAcaPlanCoverageTypes()
    {
        return $this->hasMany(TblAcaPlanCoverageType::className(), ['company_id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblAcaPlanCriterias()
    {
        return $this->hasMany(TblAcaPlanCriteria::className(), ['company_id' => 'company_id']);
    }
	
	/**
     * @return \yii\db\ActiveQuery
     */
    public function getReportingstatus()
    {
    	return $this->hasOne(TblAcaLookupOptions::className(), ['lookup_id' => 'reporting_status']);
    }
    
	/**
     * @return \yii\db\ActiveQuery
     */
    public function getTbl_aca_company_reporting_period()
    {
    	return $this->hasOne(TblAcaCompanyReportingPeriod::className(), ['company_id' => 'company_id']);
    }
    
	   public function companiesCount($id)
    {
    	$results = TblAcaCompanies::find()->where(['client_id' => $id])
    	->All();
    	$count = count ( $results );
    	 return $count;
     }
	 
	  public function FindallclientsbyId($id)
    {
    	return TblAcaCompanies::find()->joinWith('client')->where(['tbl_aca_clients.user_id' => $id,'tbl_aca_clients.is_deleted'=>0])->All();
    }
    
    public static function Findallcompanies()
    {
    	return static::find()->joinWith('client')->where(['tbl_aca_clients.is_deleted'=>0])->All();
    }
	
	public function Companyuniquedetails($id)
    {
    	
    	return TblAcaCompanies::findOne(['company_id' => $id]);
	
    }
	
	public function Getcompanyperiod($id)
    {
    	return TblAcaCompanies::find()->joinWith('tbl_aca_company_reporting_period')->where(['tbl_aca_company_reporting_period.company_id'=>$id])->One();
    	
    }
	
	public function GetallcompaniesbyclientId($client_id)
    {
    	return TblAcaCompanies::findAll(['client_id' => $client_id]);
    }
   
    
    public function FindallwherecompanyIds($company_ids)
    {
    	return TblAcaCompanies::find()
				    	->where([
				    			'company_id' => $company_ids,
				    			])
				    			->all();
    
    }
	
	
	 public function Checkeinvalidity($old_ein,$company_ein,$year)
    {
    	$query = TblAcaCompanies::find()
		->joinWith('tbl_aca_company_reporting_period')
		->where(['tbl_aca_companies.company_ein'=>$company_ein])
		->andWhere(['tbl_aca_company_reporting_period.reporting_year'=>$year])
		->all();
		return $query;
    }
	
	 public function Getallactiveclientcompaniescount()
    {
    	
    	$all_companies = TblAcaCompanies::find()
    	->joinWith('client')
    	->joinWith('client.user')
    	->where(['tbl_aca_clients.is_deleted'=>0])
    	->andwhere(['tbl_aca_users.is_active'=>1])
    	->andwhere(['tbl_aca_users.is_deleted'=>0])
    	->All();
    	
    	return count($all_companies);
    }
    
    public function Topfivecompanies()
    {
    	return TblAcaCompanies::find()
    	->joinWith('client')
    	->joinWith('client.user')
    	->where(['tbl_aca_clients.is_deleted'=>0])
    	->andwhere(['tbl_aca_users.is_active'=>1])
    	->andwhere(['tbl_aca_users.is_deleted'=>0])
    	->limit(5)
    	->All();
    	 
    
    }
}
