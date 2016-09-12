<?php



use yii\helpers\Html;

use yii\widgets\ActiveForm;

use yii\base\Configurable;

use yii\base\ViewContextInterface;

use yii\helpers\ArrayHelper;





/* @var $this yii\web\View */

/* @var $model common\models\OrderHeader */

/* @var $form yii\widgets\ActiveForm */
// $this->title = Yii::t('app', 'Single Point Reporting | Add Staff User');

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">


$(document).ready(function() {
	
	
		//   $('.display-loading-gif').html('<img style="width:30px;height:30px;" src="/images/loading25.gif">');		  
		//   $('#dashboard-li').css("background","#000000");
		//   $('#dashboard-li').css("color","#ffffff");
		//   $('#date_select').datepicker();
		  // $('#to_date').datepicker();
		 //  $('#report-from-date').datepicker();
		  // $('#report-to-date').datepicker();

		   $("#browse_projects").addClass('active');
	
		   
});

</script>
<!-- jQuery UI 1.11.4 -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->


<style>
div.required label.control-label:after {
    content: " *";
    color: red;
}

div#users-role label,div#users-form_access label,div#users-status label {
    font-weight: 200;
    margin-right: 10px;
    font-family: wf_segoe-ui_normal, "Segoe UI", "Segoe WP", Tahoma, Arial, sans-serif;
    color: #505050;
    font-weight: 400;
    line-height: 1.5em;
}
</style>

<div class="box box-warning">

<div class="col-xs-8 box">
            <div class="box-header with-border">
              <h3 class="box-title">Your Personal Account Manager is:</h3>
            </div>
			


            <!-- /.box-header -->
            <div class="box-body col-xs-12 " style="padding-left: 0;">
            
            <div class="col-xs-3 col-md-2">
            <img alt="" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/user.PNG" style=" height: 140px; width: 93%;">
            </div>
            
            <div class="col-xs-9 col-md-10">
            <ul class="no-padding" style=" list-style: none; height: 140px;" >
            <li style="font-size: 21px;">Amanda Brock</li>
            <li style="font-size: 21px;">888-999-5555</li>
            <li style="font-size: 21px;"><a href="#">amanda@gmail.com</a></li>
            </ul>
            </div>
            
            <div>
<div class="table-responsive grid-filter m-5" style="float: left">
	
</div>




		</div>
            
                        </div>
            <!-- /.box-body -->
            
            </div>
            
            <div class="col-xs-4" ></div>
            
            
          </div>
		  