<?php

namespace app\modules\client\controllers;

use yii\web\Controller;

/**
 * Default controller for the `agent` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	$this->layout='main';
        return $this->render('index');
    }
    
    public function actionProfile()
    {
    	$this->layout='main';
    	return $this->render('profile');
    }
    
    public function actionProjects()
    {
    	$this->layout='main';
    	return $this->render('projects');
    }
}
