<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\TblAcaVideoLinks;
use app\models\TblAcaLookupOptions;
use app\models\TblAcaCodeMaster;

/**
 * Default controller for the `admin` module
 */
class VideoController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	$this->layout='main';
    	$session = \Yii::$app->session;                       //initialising session
    	$admin_permissions = $session ['admin_permissions'];  //storing session values in variable
    	if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
    	{
    		$model_lookupoption=TblAcaVideoLinks::Findallscreens();
    		//print_r($model_lookupoption);die();
    		return $this->render('index' ,['model'=>$model_lookupoption]);
    		
    	} else {
			
			\Yii::$app->SessionCheck->adminlogout ();         // Redirecting to home page if session destroyed
			
			return $this->goHome ();
		}
        return $this->render('index');
    }
    
    public function actionUpdatevideolink()
    {
    	if (\Yii::$app->SessionCheck->isLogged () == true) 		// checking logged session
    	{
    		$post = \Yii::$app->request->post ();
    		$result = array();
    		
			if (! empty ( $post )) { // checking the values
				
				$link=$post['link'];
				
				$video_id=$post['video_id'];
				
				if (! empty ( $video_id )) {
				
					$transaction = \Yii::$app->db->beginTransaction (); // begining the transaction
					try {
				
						$model_video = TblAcaVideoLinks::videouniquedetails ( $video_id ); // Retriving video link screen details for particular id

                       
							$model_video->url =   $link ; // assiging the values to model

							
						if ($model_video->validate () && $model_video->save ()) 						// validating model and saving it(server side validation)
						{
							$result['success'] = 'Video link has been updated successfully';
							$transaction->commit (); // commiting the transaction
						} else {
							
							$result['fail'] = $model_video->errors;
						}
					} catch ( Exception $e ) { // catching the exception
				
						$msg = $e->getMessage ();
						\Yii::$app->session->setFlash ( 'error', $msg );
				
						$transaction->rollback ();                                       //if exception occurs transaction rollbacks
				
						return $this->redirect ( array (
								'/admin/video'  // redirecting to main grid screen
						) );
					}
					
				} else {
					$result['fail'] = 'fail'; // sending response to ajax
				}
				} else {
					$result['fail'] = 'fail'; // sending response to ajax
				}
				
				return json_encode($result);
				
				} else {
					\Yii::$app->SessionCheck->adminlogout (); // Redirecting to home page if session destroyed
						
					return $this->goHome ();
				}
    }
    
    public function actionOptions()
    {
    	$this->layout='main';
    	return $this->render('options');
    }
}
