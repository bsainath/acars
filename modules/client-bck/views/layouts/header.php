<?php

use yii\helpers\Html;
use app\models\StaffDetails;
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
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
 
<header class="main-header">

    <?= Html::a('<div class="col-md-2 padding-0"><img src="/Images/ACA-Reporting-Logo.png" class=" hidden-xs hidden-sm" height="40px;" ></div>', Yii::$app->homeUrl.'client/dashboard', ['class' => 'logo','style'=>'padding: 0 2px;']) ?>

    <nav class="navbar navbar-static-top" role="navigation" >

        <a  href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
<div class=" col-xs-6">
         <div class=" col-xs-5 no-padding">
         <select class="form-control" style="margin-top: 13px;"><option>Select Company</option><option>Option Matrix</option></select>
         </div>
         
         <div class=" col-xs-5" style="padding-right:0px;">
         <select class="form-control" style="margin-top: 13px;"><option>Select Period</option><option>2016</option></select>
         </div>
         
         <div class=" col-xs-2 " >
         <button class="form-control btn btn-success" style="margin-top: 13px;">Go</button>
         </div>
         </div>
        <div class="navbar-custom-menu pull-right col-xs-3">

            <ul class="nav navbar-nav pull-right">

                <!-- Messages: style can be found in dropdown.less-->
               
        
                <!-- Tasks: style can be found in dropdown.less -->
               
                <!-- User Account: style can be found in dropdown.less -->
<?php 
$session = Yii::$app->session;
$logged_id = $session['logged_id'];
//$getdata= StaffDetails::find()->where(['=','user_id', $logged_id])->one();
$getdata=array();
?>
                <li class="dropdown user user-menu" >
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropd">
					<?php if(!empty($getdata->imageFile)){?>
                        <img src="http://reporting.uslawshield.com/uploads/<?php echo $logged_id; ?>/<?php echo $getdata->imageFile; ?>" class="user-image" alt="User Image"/>
						<?php }else{ ?>
						
						 <img src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/report_1_28146_default.png" class="user-image" alt="User Image"/>
						<?php } ?>
                        <span style="color:white!important;" class="hidden-xs">John Smith</span>
						<span class="caret"></span>
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
                                <?php // echo $getdata->first_name.' '.$getdata->last_name ?>
                                <small>Member since <?php // echo $getdata->created_date;?></small>
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
                                <a class="btn btn-default btn-flat no-wrap" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/login" data-method="post" style="padding: 5px;">Sign out</a>                            </div>
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


		
		
		<div class="modal fade in" id="modal-container-430197" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog pswd-pop">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Change Password</h4>
			</div>
			<div class="modal-body" style="float: left;">
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Email:</label>
				</div>
				<div class="col-sm-8">
					<input type="text" class="form-control add-member-input" readonly="readonly" value="johnsmith@aca.com">
<label class="error-msg" id="current-password-error"></label>
				</div>
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Current Password:</label>
				</div>
				<div class="col-sm-8">
					<input type="password" class="form-control add-member-input" placeholder="Current Password.." id="current-password"> <label class="error-msg" id="current-password-error"></label>
				</div>
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">New Password:</label>
				</div>
				<div class="col-sm-8">
					<input type="password" class="form-control add-member-input" placeholder="New Password.." id="new-password"> <label class="error-msg" id="new-password-error"></label>
				</div>
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Confirm Password:</label>
				</div>
				<div class="col-sm-8">
					<input type="password" class="form-control add-member-input" placeholder="Confirm Password.." id="new-confirm-password"> <label class="error-msg" id="confirm-password-error"></label> <label class="error-msg" id="display-password-error"></label>
				</div>
			</div>
			<div class="modal-footer" style="border-top: none;">
			<button type="button" class="btn btn-primary" id="chng_pwd_btn">Save
					changes</button>
				<button type="button" class="btn btn-default" data-dismiss="modal" onclick="clearChangePasswordFields();">Close</button>
				


			</div>
		</div>
	</div>
</div>



<div class="modal fade in" id="modal_update_profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog pswd-pop">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
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

