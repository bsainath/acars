<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_aca_element_master".
 *
 * @property integer $master_id
 * @property integer $section_id
 * @property string $element_id
 * @property string $element_label
 * @property integer $created_by
 * @property string $created_date
 * @property integer $modified_by
 * @property string $modified_date
 */
class TblAcaElementMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_aca_element_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['section_id', 'element_id', 'element_label', 'created_by'], 'required'],
            [['section_id', 'created_by', 'modified_by'], 'integer'],
            [['created_date', 'modified_date'], 'safe'],
            [['element_id'], 'string', 'max' => 25],
            [['element_label'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'master_id' => 'Master ID',
            'section_id' => 'Section ID',
            'element_id' => 'Element ID',
            'element_label' => 'Element Label',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
        ];
    }
    
    public function getAlllookupoptions()
    {
    	return $this->hasOne(TblAcaLookupOptions::className(), ['section_id' => 'section_id']);
    }
    
    public static function Elementuniquedetails($id)
    {
    	return static::findOne(['master_id' => $id]);
    
    }
    public static function Elementalldetails($filter_elements)
    {
		if(empty($filter_elements)){
			
    	return static::find()
    	->joinWith(['alllookupoptions'])
    	->orderBy(['tbl_aca_element_master.master_id' => SORT_ASC])
    	->all();
		
		}else{
			
			return static::find()
    	->joinWith(['alllookupoptions'])
		->where(['=', 'tbl_aca_element_master.section_id', $filter_elements])
    	->orderBy(['tbl_aca_element_master.master_id' => SORT_ASC])
    	->all();
		}
    }
    
  public function FindelementbyelementId($id)
    {
    	return $this->find()->where(['element_id' => $id])->One();
    
    }
}
