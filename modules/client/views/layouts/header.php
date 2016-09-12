<?php

use yii\helpers\Html;
use app\models\StaffDetails;
use app\models\TblAcaClients;
use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */
?>
<style>

.skin-blue .main-header .logo{
background-color: #222d32!important;
}

.skin-blue .main-header .navbar {
    background-color: #222d32!important;
}
.box-title {
    display: inline-block !important;
   font-size: 22px !important;
    color: #222D32 !important
    margin: 0 !important;
    line-height: 1 !important;
}
@media (min-width: 768px)
{
.sidebar-mini.sidebar-collapse .main-header .navbar {
    margin-left: 280px !important;
}
}

@media (min-width: 768px)
{
.sidebar-mini.sidebar-collapse .main-header .logo {
    width: 280px !important;
}
}


@media (min-width: 768px)
{
.sidebar-mini.sidebar-collapse .sidebar-menu>li:hover>a>span:not(.pull-right), .sidebar-mini.sidebar-collapse .sidebar-menu>li:hover>.treeview-menu {
    display: block !important;
    position: absolute;
    width: 220px !important;
    left: 50px;
}
}

.main-header .logo{
	height: 60px;
	line-height: 60px;
}
.main-header .sidebar-toggle
{
line-height: 30px;	
}

.navbar-nav>.user-menu .user-image
{
	margin-top:2px;
}
#dropd{
	line-height: 30px;	
}
.main-sidebar, .left-side{
	padding-top: 60px;
}

@media (max-width: 767px)
{
.xs-login{
position: absolute !important;
    /* top: -50px; */
    bottom: 50px!important;
    z-index: 1111111!important;
    right: 10px!important;

}
}


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
    z-index: 1051;
    top: 128px;
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
 
<header class="main-header">

    <?= Html::a('<div class="col-md-2 padding-0"><img src="/Images/ACA-Reporting-Logo.png" class="" height="40px;" ></div>', Yii::$app->homeUrl.'client/dashboard', ['class' => 'logo','style'=>'padding: 0 2px;']) ?>

    <nav class="navbar navbar-static-top" role="navigation" >

        <a  href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
<div class=" col-lg-6 col-xs-9 col-md-9 ">
         <div class=" col-xs-5 padding-right-0 padding-left-0">
         <select class="form-control" style="margin-top: 13px;"><option>Select Company</option><option>Option Matrix</option></select>
         </div>
         
         <div class=" col-xs-5  padding-right-0" style="padding-left: 5px;">
         <select class="form-control" style="margin-top: 13px;"><option>Select Period</option><option>2016</option></select>
         </div>
         
         <div class=" col-xs-2" style="padding-left: 4px;">
         <button class="form-control btn btn-success" style="margin-top: 13px;">Go</button>
         </div>
         </div>
        <div class="navbar-custom-menu pull-right col-xs-2 col-lg-3 col-md-2">

            <ul class="nav navbar-nav pull-right">

                <!-- Messages: style can be found in dropdown.less-->
               
        
                <!-- Tasks: style can be found in dropdown.less -->
               
                <!-- User Account: style can be found in dropdown.less -->
<?php 
$session = Yii::$app->session;
$logged_id = $session['client_user_id'];
$model_clients = new TblAcaClients();

if($session['is_client'] == 'client')
{
$client_details = $model_clients->findbyuserid($logged_id);

$name = $client_details->client_name;
$member_since = date ( "j M Y", strtotime ( $client_details->created_date ) );
}
else 
{
	$company_user_details = $model_company_users->FindByuserId($logged_id);
	$name = $company_user_details->first_name.' '.$company_user_details->last_name;
	$member_since = date ( "j M Y", strtotime ( $company_user_details->created_date ) );
}

$getdata=array();
?>
                <li class="dropdown user user-menu" >
                    <a href="#" class="dropdown-toggle no-wrap xs-login" data-toggle="dropdown" id="dropd">
					<?php if(!empty($getdata->imageFile)){?>
                        <img src="http://reporting.uslawshield.com/uploads/<?php echo $logged_id; ?>/<?php echo $getdata->imageFile; ?>" class="user-image" alt="User Image"/>
						<?php }else{ ?>
						
						 <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/report_1_28146_default.png" class="user-image" alt="User Image"/>
						<?php } ?>
                        <span style="color:white!important;" class="hidden-xs"><?php echo $name; ?></span>
						<span class="caret hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu" >
                        <!-- User image -->
                        <li class="user-header">
						<div>
						<?php if(!empty($getdata->imageFile)){?>
                            <img src="http://reporting.uslawshield.com/uploads/<?php echo $logged_id; ?>/<?php echo $getdata->imageFile; ?>" class="img-circle" style="    height: 80px;width: 80px;float: initial;
                                 alt="User Image"/>
								 
								 <?php }else{ ?>
						
						 <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/report_1_28146_default.png" class="user-image" alt="User Image" style="    height: 80px;width: 80px;float: initial;"/>
						<?php } ?>
						</div>
                            <p>
                                <?php  echo $name; ?>
                                <small>Member since <?php  echo $member_since;?></small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                      
                        <!-- Menu Footer-->
                        <li class="user-footer">
						<!--<div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>-->
                            <div class="col-md-3" style="padding-left: 0px;">
                                <a  href="#modal_update_profile" data-toggle="modal"   class="btn btn-default btn-flat no-wrap"  style="    padding: 5px;">Profile</a>
                            </div>
                            
                          
							<div class="col-md-6" style="padding-left: 0px;">
                                <a  href="#modal-container-430197" data-toggle="modal" class="btn btn-default btn-flat no-wrap" style="    padding: 5px;">Change Password</a>
                            </div>
                           <div class="col-md-3" style="padding-left: 0px;">
                                <a class="btn btn-default btn-flat no-wrap" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/clientlogout" data-method="post" style="padding: 5px;">Sign out</a>                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
               <!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>-->
            </ul>
        </div>
    </nav>
</header>


		
		
 <?php
	$session = \Yii::$app->session;
	$email = $session ['client_email'];
	
	?>
	<form  class="" id="change-password-form">
<div class="modal fade" id="modal-container-430197" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Change Password</h4>
			</div>
			<div class="modal-body" style="float: left;">
				
				<div class="form-group col-md-12">
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Email:</label>
				</div>
				<div class="col-sm-8">
					<span class="form-control"><?php echo $email; ?></span> 
				</div>
				</div>
				<div class="form-group col-md-12">
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Current Password:<span class="red">*</span></label>
				</div>
				<div class="col-sm-8">

					<input type="password" class="form-control add-member-input"
						placeholder="Current Password.." id="current-password" name="oldpass"/> <span
						class="error-msg red" id="current-password-error"></span>
				</div>
				</div>
				<div class="form-group col-md-12">
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">New Password:<span class="red">*</span></label>
				</div>
				<div class="col-sm-8">
					<input type="password" class="form-control add-member-input"
						placeholder="New Password.." id="new-password" name="newpass"/> <span
						class="error-msg red" id="new-password-error"></span>
				</div>
				</div>
				<div class="form-group col-md-12">
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Confirm Password:<span class="red">*</span></label>
				</div>
				<div class="col-sm-8">
					<input type="password" class="form-control add-member-input"
						placeholder="Confirm Password.." id="new-confirm-password" name="repeatnewpass"/> <span
						class="error-msg red" id="confirm-password-error"></span> <label
						class="error-msg" id="display-password-error"></label>
				</div>
				</div>
				
			</div>
			<div class="modal-footer" style="border-top: none;">
				<button type="button" class="btn btn-primary" id="chng_pwd_btn" onclick="return changeclientpassword();">Save
					Changes</button>
				<button type="button" class="btn btn-default" data-dismiss="modal"
					onclick="resetchangepassword();">Close</button>



			</div>
		</div>
	</div>
</div>
</form>


<div class="modal fade in" id="modal_update_profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog pswd-pop">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">Ã—</button>
				<h4 class="modal-title" id="myModalLabel">Update Profile</h4>
			</div>
			<div class="modal-body" style="float: left;">
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">User Name:<span class="red">*</span></label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control add-member-input" value="John Smith">
<label class="error-msg" id="current-password-error"></label>
				</div>
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Email:<span class="red">*</span></label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control add-member-input" value="johnsmith@gmail.com" placeholder="Current Password.." id="current-password"> <label class="error-msg" id="current-password-error"></label>
				</div>
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Profile Image:</label>
				</div>
				<div class="col-sm-8">
				<input type="file" class="form-control form-height" id="inputEmail3" placeholder=""></div>
				
			</div>
			<div class="modal-footer" style="border-top: none;">
			<button type="button" class="btn btn-primary" id="chng_pwd_btn">Update</button>
				<button type="button" class="btn btn-default" data-dismiss="modal" onclick="clearChangePasswordFields();">Close</button>
				


			</div>
		</div>
	</div>
</div>

