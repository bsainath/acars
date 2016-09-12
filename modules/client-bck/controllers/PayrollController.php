<?php

namespace app\modules\client\controllers;
use yii\web\Controller;

class PayrollController extends Controller
{
    public function actionIndex()
    {
    	$this->layout='main';
        return $this->render('index');
    }
    
    
    public function actionAddemployee()
    {
    	$this->layout='main';
    	return $this->render('addemployee');
    }
    
    
    public function actionUpdateemployee()
    {
    	$this->layout='main';
    	return $this->render('updateemployee');
    }

    public function actionCompany()
    {
    	$this->layout='main';
    	return $this->render('company');
    }
    
    public function actionReporting()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('info');
    }
    
    public function actionPlan()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('plan');
    }
    
    public function actionUsers()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('users');
    }
}
