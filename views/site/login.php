<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?><script>window.onload = function(){            <?php if(!empty($errors)){                       	 $attribute=$errors['password']['0'];?>            	var attribute='<?php echo $attribute;?>';            	            	if(attribute=='Please verify your email'){            		$('#show').removeClass("hide");            		$("#show").css("display", "block");                                    	}            	<?php } ?> 			}; 			</script>
<div class="site-login">
     <?php if(Yii::$app->session->hasFlash('custom')): ?>
        <div class="alert alert-danger" role="alert">
            <?= Yii::$app->session->getFlash('custom') ?>
        </div>
    <?php endif; ?>
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4 box" style="background-color: white;box-shadow: 0 1px 3px 0 #bfbfbf;border-radius:6px;">
  

    <div class="">
        <div class="col-xs-12">
	<!-- BEGIN LOGIN FORM -->
	  <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'login-form'],
       
    ]); ?>
<h4 class="" style="margin:25px 0 15px 0; font-weight:bold; text-align:left;">Log In To Your Account</h4>
	<!-- BEGIN LOGIN FORM -->
	<form action="" class="login-form" method="post"
		novalidate="novalidate">
		
		<div class="form-group" style="margin-bottom:0px;">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->

			<div class="input-icon">						  <?= $form            ->field($model, 'username')            ->label(false)            ->textInput(['placeholder' => $model->getAttributeLabel('Username or Email'),'class'=>'form-control  placeholder-no-fix']) ?>
				

			</div>
		</div>
		<div class="form-group" >

			<div class="input-icon">
			 			<?= $form            ->field($model, 'password')            ->label(false)            ->passwordInput(['placeholder' => $model->getAttributeLabel('Password'),'class'=>'form-control  placeholder-no-fix']) ?>				


			</div>
		</div>
		<div class="form-actions">
			<div class="forget-password">
				<h4 class="pswd-lbl" style="color: #000;">Forgot your password ?</h4>
				<p style="color: #000;">
					<a id="forget-password" href="#" data-toggle="modal" data-target="#mychangepassword" onclick="resetforgotpassword();">Click here</a> to reset
					your password.
				</p>                <p style="color: #000;" class="hide" id="show">					<a id="forget-password" href="#" data-toggle="modal" data-target="#myresetlink" onclick="resetlinkagain();">Click here</a> to send verification link.								</p>
			</div>
			 <?= Html::submitButton('Login', ['class' => 'btn btn-primary blue col-xs-6', 'name' => 'login-button','style'=>'width: 100px; margin-bottom: 5%;']) ?>
			

		</div>
		
		


	</form>

	<!-- END LOGIN FORM -->

	 <?php ActiveForm::end(); ?>
          
        </div>
		</div>
		
    </div>
  </div>
</div>



 

