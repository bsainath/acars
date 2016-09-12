<?php

namespace app\modules\client\controllers;
use yii\web\Controller;

class CompaniesController extends Controller
{
    public function actionIndex()
    {
    	$this->layout='main-companies';
        return $this->render('index');
    }

   
}
