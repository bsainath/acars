<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use dmstr\widgets\Alert;

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>ACA Reporting Service | Full Service ACA Reporting</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=9" />


   <link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/css/custom.css" rel="stylesheet" type="text/css" />
   
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

			 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


            
		<link rel="shortcut icon" type="image/png" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/favicon.png" >
   
  
	<style>
#header_back {
  
	border-bottom: 1px solid #C5C5C5;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

       margin-top: 7% !important;
	
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

.tls {
    font-family: 'IM Fell French Canon SC', serif;
    color: #000;
    font-size: 52px;
}
</style>


</head>
<body style="background-color: rgba(245, 240, 230, 0.5);">
<div class="wrap">
<header class="header" id="header_back" style="background:url(<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/Images/loginpage-header.png);height:85px;">
<div class="" >
<div class="col-md-1 pull-left" style="padding :0px;">
  <a style="font-size: 25px; background: none; color: #367fa9;" class="logo pl-0" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>"> <!-- Add the image.jpg and option.png class icon to your logo image or logo icon to add the margining -->
			<img class="logo-style" style="height: 100%; float: left;
    margin-left: 15%;margin-top:14%;cursor:pointer;" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl();  ?>/Images/ACA-Reporting-Logo.png">

		</a>
</div>
<div class="col-md-8"></div>

<!-- <div class="col-md-3"><h3 class="fldp" style="margin-top:9%;color:white;">Delivery System</h3></div> -->

<div id="header" class="container  col-xs-0" style="padding:0px;">
<div class="col-md-1 col-xs-3" style="padding:0px;">
<h1>	
</h1>
			</div>
			
			<!--<a id="menu-drop-button" href="#"></a>-->
			 <div id="navigation-container" class="col-md-5 col-xs-9" style="padding-right:0px;">
						<div class="header_text">
					<h1 class="tls" style="font-family: -webkit-pictograph;font-size: 43px;"></h1>
					
				</div>
						
			</div>
		</div>
</div>
          
            <!-- Header Navbar: style can be found in header.less -->
            
        </header>

    <div class="container" style="padding: 70px 15px 20px;">       
    
      <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
    </div>
</div>


    <div class="container" style="padding: 10px;">
        <p style="text-align:center"> &#169;Copyright 2016 Sky Insurance Technologies. All rights reserved. <?php //date('Y') ?></p>

     
    </div>
	
	
	<div class="modal fade" id="mychangepassword" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop" style="width: 450px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" onclick="clearFields();">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Recover Password</h4>
			</div>
			<form id="resetpassword">
			<div class="modal-body">
			<div class="form-group">
				<div class="col-sm-2 add-mem"  style="line-height: 33px;">
					<label class="add-member-label">Email:</label>
				</div>
				<div class=" col-sm-10">
					<input type="text" class="form-control add-member-input"
						style="width: 100%;" placeholder="Enter email...."
						id="recover-email-id" name="email"/> <span class="error-msg  red"
						id="recover-error-messages"></span> <span class="green error-msg"
						id="recover-success-message"></span>
				</div>
	</div>
			</div>
			<div class="modal-footer"
				style="border-top: none; margin-right: 15px;">
				<button type="button" class="btn btn-default btn-sm"
					data-dismiss="modal" >Close</button>
				<button type="button" class="btn btn-primary btn-sm"
					onclick="return validateforgotpassword();">Submit</button>
			</div>
			</form>
		</div>
	</div>
</div>


<div class="modal fade" id="myresetlink" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop" style="width: 450px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" onclick="clearFields1();">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Reset Verification Link</h4>
			</div>
			<form id="resetlink">
			<div class="modal-body">
			<div class="form-group">
				<div class="col-sm-2 add-mem"  style="line-height: 33px;">
					<label class="add-member-label">Email:</label>
				</div>
				<div class=" col-sm-10">
					<input type="text" class="form-control add-member-input"
						style="width: 100%;" placeholder="Enter email...."
						id="recover-reset-link" name="email"/> <span class="error-msg  red"
						id="recover-error-link"></span> <span class="green error-msg"
						id="recover-success-link"></span>
				</div>
	</div>
			</div>
			<div class="modal-footer"
				style="border-top: none; margin-right: 15px;">
				<button type="button" class="btn btn-default btn-sm"
					data-dismiss="modal" >Close</button>
				<button type="button" class="btn btn-primary btn-sm"
					onclick="return validateresetverification();">Submit</button>
			</div>
			</form>
		</div>
	</div>
</div>
<script src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/js/validation.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	
<script>
function clearFields(){
	
$('#recover-email-id').val('');	
}

function clearFields1(){
	
$('#recover-reset-link').val('');	
}
</script>

<style>
/* Styles for verification */
#pswd_info {
	    position: absolute;
    padding: 15px;
    background: #fefefe;
    font-size: .875em;
    border-radius: 5px;
    box-shadow: 0 1px 3px #ccc;
    border: 1px solid #ddd;
    display: none;
    z-index: 1;
    top: 142px;
    /* left: 0px; */
    right: 164px;
 }
#pswd_info::before {
	content: "\25c0";
	position:absolute;
	top:80px;
	left:-10px;
	font-size:20px;
	line-height:14px;
	color:#ddd;
	text-shadow:none;
	display:block;
}
#pswd_info h4 {
	margin:0 0 10px 0; 
	padding:0;
	font-weight:normal;
}

.invalid {
	background:url(https://dl.dropboxusercontent.com/u/636000/password_verification/images/invalid.png) no-repeat 0 50%;
	padding-left:22px;
	line-height:24px;
	color:#ec3f41;
}
.valid {
	background:url(https://dl.dropboxusercontent.com/u/636000/password_verification/images/valid.png) no-repeat 0 50%;
	padding-left:22px;
	line-height:24px;
	color:#3a7d34;
}
</style>






</body>
              
			  
</html>

