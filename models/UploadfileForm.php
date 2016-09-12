<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\IdentityInterface;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class UploadfileForm extends Model
{
    public $Document;
    
    

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['Document'], 'required'],
			[['Document'], 'string', 'max' => 200],
            
          
        ];
    }

   
}
