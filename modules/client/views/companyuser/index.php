<?php use app\models\TblAcaCompanyUserPermission;
use app\components\EncryptDecryptComponent;
$get_id = Yii::$app->request->get();
	  $company_id = $get_id['c_id'];
	 
		?>
<style>
.add-member-label{
font-weight:500;
}
</style>

<div class="box box-warning">

            
			 <div class="box-header with-border">
              <h3 class="box-title col-sm-6">Company Users - <?php echo $company_details->company_name; ?> <small> (<?php echo $company_details->company_client_number; ?>) </small></h3>
              
               <a class="col-sm- btn bg-orange btn-flat btn-social pull-right">
                <i class="fa fa-youtube-play"></i>View Help Video
              </a>
            </div>
			
 <div class="col-xs-12 header-new-main width-98 hide"> 
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">Managing all the users of the application is done from the list below.</p>
</div> 

            <!-- /.box-header -->
            <div class="box-body">
            
            <div>
<div class="table-responsive grid-filter m-5" style="float: right">
	<table class="table filter-table middle-align mb-0">
		<tbody>
			<tr class="">


				
				
				<td title="Add User" style="border-top:none;">
				<a type="reset" class="btn btn-success btn-sm filter-btn-search" style="" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/client/companyuser/adduser?c_id=<?php echo $company_id; ?>">
				<i class="fa fa-plus" aria-hidden="true" style="margin-right:5px;"></i>Add User</a></td>

				


			</tr>
		</tbody>
	</table>
</div>
<div>

	<div class="row m-5">
		<div class="col-xs-12 panel-0">
			<div class="box">

				<!-- /.box-header -->
				<div class="box-body table-responsive">
					<table id="exampleCompanyusers" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>First Name</th>
								<th>Last Name</th>
							
								
								<th>Email</th>
								<th>Phone</th>
								<th>Role</th>
								<th>Access</th>
								
								<!-- <th>Companies</th>
								<th>Periods</th> -->
								<th>Update</th>
							
								
							</tr>
						</thead>
						<tbody>
							<?php if(!empty($all_company_users))
							{
								$model_permissions = new TblAcaCompanyUserPermission();
								$encrypt_component =  new EncryptDecryptComponent();
							foreach($all_company_users as $users){ 
?>
							<tr>

								<td><?php echo $users->first_name; ?></td>
								<td><?php echo $users->last_name; ?></td>
								<td><?php echo $users->email; ?></td>
								<td><?php echo $users->phone; ?></td>
								<td><?php echo $users->role_notes; ?></td>
								<td><?php $permissions = $model_permissions->findPermissionsstring($users->company_user_id,$company_details->company_id); if(!empty($permissions)){ echo  preg_replace('/, $/', '', $permissions); } ?></td>
								<?php 
								$encrypt_company_user_id = $encrypt_component->encrytedUser($users->company_user_id); 
								?>
								<td style="text-align: center;"> 
			                                <a  href="<?php echo Yii::$app->homeUrl;?>client/companyuser/updateuser?c_id=<?php echo $company_id; ?>&company_user_id=<?php echo $encrypt_company_user_id; ?>"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
								
								
							</tr>	
							
							<?php }} ?>
																			
						</tbody>

					</table>
				</div>
				
		
			          </div>
			<!-- /.box -->
					</div>
				</div>
			</div>

		    </div>
            
            </div>
          </div>
          
          
<div class="modal fade" id="modal-container-1" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" >&times;</button>
				<h4 class="modal-title" id="myModalLabel">	Companies</h4>
			</div>
			<div class="modal-body" >
			<div class="" >
			<div class="col-md-12">
			<div class="col-sm-7 add-mem">
				<label class="add-member-label">OptionMatrix:</label>
			</div>
			<div class="col-md-5"><input type="checkbox"  checked/></div>
			</div>
			<div class="col-md-12">
			<div class="col-sm-7 add-mem">
				<label class="add-member-label">Syslink Sol:</label>
			</div>
			<div class="col-md-5"><input type="checkbox"/></div>
			</div>
			
			<div class="col-md-12">
			<div class="col-sm-7 add-mem">
				<label class="add-member-label">Ranger Infotech:</label>
			</div>
			<div class="col-md-5"><input type="checkbox"  checked/></div>
			</div>
			
			<div class="col-md-12">
			<div class="col-sm-7 add-mem">
				<label class="add-member-label">Iworkship Sol:</label>
			</div>
			<div class="col-md-5"><input type="checkbox"  checked/></div>
			</div>
			</div>
			</div>
			
			
			
			<div class="modal-footer" style="border-top: none;">
			<button type="button" class="btn btn-success" id="chng_pwd_btn">Save
					</button>
				<button type="button" class="btn btn-default" data-dismiss="modal"
					onclick="clearChangePasswordFields();">Close</button>
				
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="modal-container-2" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" >&times;</button>
				<h4 class="modal-title" id="myModalLabel">	Periods</h4>
			</div>
			<div class="modal-body" >
			<div class="" >
			<div class="col-md-12">
			<div class="col-sm-3 add-mem">
				<label class="add-member-label">2015:</label>
			</div>
			<div class="col-md-9"><input type="checkbox" checked/></div>
			</div>
			<div class="col-md-12">
			<div class="col-sm-3 add-mem">
				<label class="add-member-label">2016:</label>
			</div>
			<div class="col-md-9"><input type="checkbox"  checked/></div>
			</div>
			
		
			</div>
			</div>
			
			
			
			<div class="modal-footer" style="border-top: none;">
			<button type="button" class="btn btn-success" id="chng_pwd_btn">Save
					</button>
				<button type="button" class="btn btn-default" data-dismiss="modal"
					onclick="clearChangePasswordFields();">Close</button>
				


			</div>
		</div>
	</div>
</div>
          <script type="text/javascript">
	$(document).ready(function(){
			    $('#exampleCompanyusers').DataTable({

			    	"aoColumnDefs": [

										{

										"bSortable": false,

										"aTargets": [ -1 ]

										}

										],
										
											"bFilter" : false,               
			    	"bLengthChange": false
			    });
			});
</script>
        