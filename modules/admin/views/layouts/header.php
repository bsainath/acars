<?php
use yii\helpers\Html;
use app\models\StaffDetails;
use yii\helpers\Url;
use app\models\TblAcaClients;
use app\models\TblAcaStaffUsers;
use app\components\EncryptDecryptComponent;
/* @var $this \yii\web\View */
/* @var $content string */
?>
<link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/admin.css" rel="stylesheet">
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<?php
$session = Yii::$app->session;
$admin_user_id = $session ['admin_user_id'];
$admin_permissions = $session ['admin_permissions'];
$model_staff_users = new TblAcaStaffUsers ();

$staff_user_details = $model_staff_users->findById ( $admin_user_id );
$name = $staff_user_details->first_name.' '.$staff_user_details->last_name;
$member_since = date ( "j M Y", strtotime ( $staff_user_details->created_date ) );
$getdata = array ();
?>
<header class="main-header">

    <?= Html::a('<div class="col-md-2 padding-0"><img style="width: 214px;" src="/Images/ACA-Reporting-Logo.png" class=" hidden-xs hidden-sm" height="40px;" ></div>', Yii::$app->homeUrl.'admin/clients', ['class' => 'logo','style'=>'padding: 0 2px;'])?>

    <nav class="navbar navbar-static-top" role="navigation">

		<a href="#" class="sidebar-toggle" data-toggle="offcanvas"
			role="button"> <span class="sr-only">Toggle navigation</span>
		</a>
		
		 <?php if((in_array ( '3', $admin_permissions ) == true) && (in_array ( '11', $admin_permissions ) == true))   	{ ?>
		<div class=" col-lg-4 col-xs-hidden ">
			<div class=" col-lg-8 padding-left-0 padding-right-0">
				<select class="form-control" id="shadow_login_id"
					style="margin-top: 13px;"><option value="">Select Client</option>
					<?php $model_clients = new TblAcaClients(); 
					$all_clients = $model_clients->Findallclients();
					
					if(!empty($all_clients))
					{
					foreach ($all_clients as $clients)
					{
						$encrypt_component = new EncryptDecryptComponent();
						$user_id = $encrypt_component->encrytedUser($clients->user_id);
					?>
					<option value="<?php echo $user_id; ?>"><?php echo $clients->client_name; ?></option>
					<?php }}?>
					</select>
			</div>
			<div class=" col-lg-3 padding-right-0" style="padding-left: 5px;">
				<button class="form-control btn btn-success"
					style="margin-top: 13px;" onclick="shadowlogin();">Go</button>
			</div>
		</div>
		 <?php } ?>
		<div class="navbar-custom-menu pull-right col-lg-6 col-xs-3">

			<ul class="nav navbar-nav pull-right">

				<!-- Messages: style can be found in dropdown.less-->


				<!-- Tasks: style can be found in dropdown.less -->

				<!-- User Account: style can be found in dropdown.less -->

                <li class="dropdown user user-menu"><a href="#"
					class="dropdown-toggle" data-toggle="dropdown" id="dropd">
					<?php if(!empty($staff_user_details->profile_pic)){?>
                        <img
						src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/profile_image/<?php echo $staff_user_details->profile_pic; ?>"
						class="user-image" alt="User Image" />
						<?php }else{ ?>
						
						 <img
						src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/report_1_28146_default.png"
						class="user-image" alt="User Image" />
						<?php } ?>
                        <span style="color: white !important;"
						class="hidden-xs"> <?php  $string = (strlen($name) > 15) ? substr($name,0,13).'...' : $name;?> 
						     <?php  echo $string; ?></span> <span class="caret"></span>
				</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<div>
						<?php if(!empty($staff_user_details->profile_pic)){?>
                            <img
									src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/profile_image/<?php echo $staff_user_details->profile_pic; ?>"
									class="img-circle"
									style="height: 80px; width: 80px; float: initial;" User Image"/>
								 
								 <?php }else{ ?>
						
						 <img
									src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/report_1_28146_default.png"
									class="user-image" alt="User Image"
									style="height: 80px; width: 80px; float: initial;" />
						<?php } ?>
						</div>
							<p>
                     <?php  $string = (strlen($name) > 15) ? substr($name,0,13).'...' : $name;    
                      ?>      <?php  echo $string; ?>
                                <small>Member since <?php  echo $member_since ;?></small>
							</p>
						</li>
						<!-- Menu Body -->

						<!-- Menu Footer-->
						<li class="user-footer">
							<!--<div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>-->
							<div class="col-md-3" style="padding-left: 0px;">
                            <?php $user_id = $admin_user_id;
		$encrypt_component = new EncryptDecryptComponent();
		$user_id = $encrypt_component->encrytedUser($user_id);
		?>
                                <a
									href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/profile/index?id=<?php echo $user_id;?>"
									class="btn btn-default btn-flat no-wrap" style="padding: 5px;">Profile</a>
							</div>
							<div class="col-md-6" style="padding-left: 0px;">
								<a data-toggle="modal" data-target="#myModal-change-pswd"
									class="btn btn-default btn-flat no-wrap" style="padding: 5px;">Change
									Password</a>
							</div>
							<div class="col-md-3" style="padding-left: 0px;">
								<a class="btn btn-default btn-flat no-wrap"
									href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/adminlogout"
									data-method="post" style="padding: 5px;">Sign out</a>
							</div>
						</li>
					</ul></li>

				<!-- User Account: style can be found in dropdown.less -->
				<!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>-->
			</ul>
		</div>
	</nav>
</header>
<noscript>
        <div id="noscript-warning">ACA Reporting Service works best with JavaScript enabled<img  alt="" class="dno"></div>
    </noscript>
