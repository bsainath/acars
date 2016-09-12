<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_aca_video_links".
 *
 * @property integer $vedio_uid
 * @property string $screen
 * @property string $url
 * @property string $created_date
 * @property integer $created_by
 * @property integer $modified_by
 * @property string $modified_date
 */
class TblAcaVideoLinks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_aca_video_links';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['screen', 'url', 'created_by'], 'required'],
            [['url'], 'string'],
            ['url','url'],
            [['created_date', 'modified_date'], 'safe'],
            [['created_by', 'modified_by'], 'integer'],
            [['screen'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vedio_uid' => 'Vedio Uid',
            'screen' => 'Screen',
            'url' => 'Url',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'modified_by' => 'Modified By',
            'modified_date' => 'Modified Date',
        ];
    }
    
    public static function Findallscreens()
    {
    	return static::find()->where(['<>','vedio_uid',''])->All();
    	
    }
    
    public static function videouniquedetails($id)
    {
    	return static::findOne(['vedio_uid' => $id]);
    
    }
}
