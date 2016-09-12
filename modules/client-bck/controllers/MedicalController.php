<?php

namespace app\modules\client\controllers;
use yii\web\Controller;

class MedicalController extends Controller
{
    public function actionIndex()
    {
    	$this->layout='main';
        return $this->render('index');
    }
    
    
    public function actionAddmedicalplan()
    {
    	$this->layout='main';
    	return $this->render('addmedicalplan');
    }
    
    
    public function actionUpdatemedicalplan()
    {
    	$this->layout='main';
    	return $this->render('updatemedicalplan');
    }

}
