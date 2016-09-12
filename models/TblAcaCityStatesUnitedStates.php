<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_aca_city_states_united_states".
 *
 * @property string $locationID
 * @property string $city
 * @property integer $state
 * @property string $lat
 * @property string $lon
 *
 * @property TblAcaUsaStates $state0
 */
class TblAcaCityStatesUnitedStates extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_aca_city_states_united_states';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city', 'state', 'lat', 'lon'], 'required'],
            [['state'], 'integer'],
            [['city'], 'string', 'max' => 255],
            [['lat', 'lon'], 'string', 'max' => 20],
            [['state'], 'exist', 'skipOnError' => true, 'targetClass' => TblAcaUsaStates::className(), 'targetAttribute' => ['state' => 'state_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'locationID' => 'Location ID',
            'city' => 'City',
            'state' => 'State',
            'lat' => 'Lat',
            'lon' => 'Lon',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState0()
    {
        return $this->hasOne(TblAcaUsaStates::className(), ['state_id' => 'state']);
    }
}
