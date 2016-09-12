<?php

namespace app\modules\client\controllers;
use yii\web\Controller;

class Dashboard1Controller extends Controller
{
    public function actionIndex()
    {
    	$this->layout='main';
        return $this->render('index');
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
	
	public function actionPlanclass()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('planclass');
    }
    
    
    public function actionAddplanclass()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('addplanclass');
    }
    
    public function actionUsers()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('users');
    }
    
    
    public function actionAddusers()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('addusers');
    }
    
    public function actionMedical()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('medical');
    }
    
    public function actionCreate()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main'; 
    	return $this->render('createaca');
    }
    
    public function actionManage()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('manageaca');
    }
    
    public function actionEfile()
    {
    	//echo 'xcxz'; die();
    	$this->layout='main';
    	return $this->render('efile');
    }
}
