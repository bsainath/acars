<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;

use yii\bootstrap\ActiveForm;

$this->title = 'Set Account';

$this->params ['breadcrumbs'] [] = $this->title;

?>
     <?php if(Yii::$app->session->hasFlash('custom')): ?>
        <div class="alert alert-danger" role="alert">
            <?= Yii::$app->session->getFlash('custom')?>
        </div>
    <?php endif; ?>
.help-block-error{
	color:red;
	}
	
</style>
<div class="row">
	  <?php
			
$form = ActiveForm::begin ( [ 
					
					'id' => 'login-form',
					
					'options' => [ 
							'class' => 'login-form' 
					] 
			]
			 );
			?>
<h4 class=""
				

			</div>
			
			


			</div>
						
						<div class="form-group">
							  <div class="col-md-12" style=" padding: 0;margin-bottom:15px;">
							<div class="col-md-1 padding-left-0" style="float: left; padding-left: 0;">
							
							<input type="checkbox" id="checkme">
									</div>		
							<div class="col-md-10" style="padding-left: 0;">I accept  these<a href="https://acareportingservice.com/terms-and-conditions/"> terms and condition</a></div>
			           </div>
			           
			           </div>
			
			 <?= Html::submitButton('Save', ['class' => 'btn btn-primary blue col-xs-6 ','disabled'=>'', 'name' => 'login-button','style'=>'width: 100px; margin-bottom: 5%;','onclick'=>'return validatesetpassword();'])?>
			

		</div>

	 <?php ActiveForm::end(); ?>
          
          
        </div>
								<h4>Suggested Password Combinations:</h4>
								<ul style="list-style: none;">
									<li id="letter" class="invalid">At least <strong>one letter</strong></li>
									<li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
									<li id="number" class="invalid">At least <strong>one number</strong></li>
									<li id="specialchar" class="invalid">At least <strong>one special character</strong></li>
									<li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
								</ul>
							</div>
var checker = document.getElementById('checkme');
 // when unchecked or checked, run the function
 checker.onchange = function(){

if(this.checked == true){
    $(".blue").attr('disabled',false)
} else {
      $(".blue").attr('disabled',true)
}

}
</script>