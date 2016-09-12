<?php use app\components\EncryptDecryptComponent;
use yii\helpers\ArrayHelper;
use app\models\TblAcaLookupOptions;
?>
<script type="text/javascript">
$(document).ready(function(){
    $('#example2').DataTable({

    	"aoColumnDefs": [
						{
						"bSortable": false,
				    	"aTargets": [ -1 ]
						}
						],			
					"bFilter" : true,               
			    	"bLengthChange": true
    });
    $('#global_filter_search').on( 'click', function () {
        
    	filterColumn(1);
    	filterColumn(2);
    } );

    $('#global_filter_clear').on( 'click', function () {
    	$('#col1_filter').val('');
    	$('#col2_filter').val('')
    	  filterColumn(1);
     	  filterColumn(2);
    } );

    $('#example2_filter').hide();



    function filterColumn ( i ) {
        $('#example2').DataTable().column( i ).search(
            $('#col'+i+'_filter').val()
           
        ).draw();
    }
     
	
});
</script>
<style>
.imp-mark {
	color: red;
}

.width-98 {
	width: 98%;
}
</style>
<div class="box box-warning container-fluid">

	<div class="box-header with-border">
		<h3 class="box-title col-xs-6">
			Your Companies List <span style="font-size: 15px;">( Number of EIN's bought : <?php if(!empty($all_companies)){ echo count($all_companies);}else { echo '0'; } ?> )</span>
		</h3>
		<div class="col-xs-6 pull-right padding-right-0">
			<a class=" btn bg-orange btn-social pull-right "> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		</div>
	</div>

	<div class="col-xs-12 header-new-main width-98 ">
		<span class="header-icon-band"><i class="fa fa-file-text-o icon-band"
			style="font-weight: lighter;"></i></span>
		<p class="sub-header-new">Select Company to Get Started</p>
	</div>

	<div class="box-body">

		<div>
			<div class=" table  grid-filter m-5 filter-div-back"
				style="float: left; padding: 12px; border-top: 1px solid #ddd;">
				<div class="col-lg-12" style="padding-right: 0;">


					<div class="col-lg-3 col-md-6"
						style="display: inline-flex; white-space: nowrap;">
						<span style="line-height: 1.9;">Select Company Name :</span>&nbsp;&nbsp;&nbsp;<select
							class="form-control" id="col1_filter" data-column="1">
							<option  value="">All</option>
							<?php if(!empty($all_companies)){
							foreach ($all_companies as $companies)
							{
								if(!empty($companies->company_name)){
								?>
							<option value="<?php echo $companies->company_name; ?>" ><?php echo $companies->company_name; ?></option>
							<?php } } } ?>
						</select>
					</div>
 <?php 
                    $listData= ArrayHelper::map(TblAcaLookupOptions::find()->where(['=', 'code_id', 5])->andwhere(['<>', 'lookup_status', 2])->all(), 'lookup_id', 'lookup_value');
                   
                    ?>
					<div class="col-lg-3 col-md-6"
						style="display: inline-flex; white-space: nowrap;">
						<span style="line-height: 1.9;">Reporting Year :</span>&nbsp;&nbsp;&nbsp;<select
							class="form-control"  id="col2_filter" data-column="2">
							<option  value="">Select</option>
							<?php if(!empty($listData)) {
										
										
									foreach($listData as $key=>$value)
									{
										?>
									<option value="<?php echo $value; ?>" ><?php echo $value; ?></option>
									<?php }} ?>
						</select>
					</div>


					<div class="col-lg-3 col-md-6"
						style="display: inline-flex; white-space: nowrap;">
						<button class="btn btn-primary" style="margin-right: 5px;" id="global_filter_search">Search</button>
						<button class="btn btn-primary" id="global_filter_clear">Clear</button>
					</div>










				</div>




			</div>
			<div>

				<div class="row m-5">
					<div class="col-xs-12 panel-0">
						<div class="box">

							<!-- /.box-header -->
							<div class="box-body table-responsive">
								<table id="example2" class="table table-bordered table-hover">
									<thead>
										<tr class="tr-grid-header">
											<th>Company Id</th>
											<th>Company Name</th>

											<th>Reporting Year</th>


											<th>EIN</th>
											<th>Reporting Status</th>

											<th>Update</th>


										</tr>
									</thead>
									<tbody>

									<?php
									
if (! empty ( $all_companies )) {
										foreach ( $all_companies as $companies ) {

								$encrypt_component = new EncryptDecryptComponent();
								$encrypt_id = $encrypt_component->encrytedUser($companies->company_id);
											?>
										<tr>
											<td><?php echo $companies->company_client_number; ?></td>
											<td>
											<?php if(!empty($companies->company_name)){?>
											<a target="_blank"
												href="<?php echo Yii::$app->homeUrl;?>client/dashboard?c_id=<?php echo $encrypt_id; ?>"><?php if(!empty($companies->company_name)){ echo $companies->company_name;}else{ echo 'NA'; } ?></a>
										<?php }else{?>
										<span>Update<a onclick="showupdatemodal('<?php echo $encrypt_id; ?>');" role="button" class="btn"
												data-toggle="modal"><i class="fa fa-edit"
													style="cursor: pointer;"></i></a></span>
										<?php } ?>
												</td>


											<td><?php $period_details = $companies->getcompanyperiod($companies->company_id); 
											echo $period_details->tbl_aca_company_reporting_period->year->lookup_value; ?></td>

											<td>
											<?php if(!empty($companies->company_ein)){ echo $companies->company_ein;}else{ ?> <span>Update<a onclick="showupdatemodal('<?php echo $encrypt_id; ?>');" role="button" class="btn"
												data-toggle="modal"><i class="fa fa-edit"
													style="cursor: pointer;"></i></a></span><?php } ?></td>
											<td><?php  echo $companies->reportingstatus->lookup_value;  ?></td>

											<td style="text-align: center;"><a onclick="showupdatemodal('<?php echo $encrypt_id; ?>');" role="button" class="btn"
												data-toggle="modal"><i class="fa fa-edit"
													style="cursor: pointer;"></i></a></td>
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


<form id="update_cmpny_form">
			<div class="modal fade" id="update_company_modal" tabindex="-1"
				role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog pswd-pop">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"
								aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Update Company Details</h4>
						</div>
						<div class="modal-body" style="float: left;">

							<div class="form-group col-md-12">
							<div class="col-sm-4 add-mem">
								<label class="add-member-label">Company Name<span class="red">*</span></label>
							</div>
							<div class="col-sm-8">
								<input class="form-control add-member-input" placeholder=""
									id="company-name" value="" name="company_name" /> <span
									class="error-msg red" id="company-name-error"></span>
							</div>

</div>
<div class="form-group col-md-12">
							<div class="col-sm-4 add-mem">
								<label class="add-member-label">Company EIN<span class="red">*</span></label>
							</div>
							<div class="col-sm-8">
								<input class="form-control add-member-input phone"
									placeholder="" id="company-ein" value="" name="company_ein"
									data-inputmask='"mask": "99-9999999"' data-mask />
								<p style="font-size: 14px;">(Note: EIN should be in the format
									XX-XXXXXXX and in numbers only)</p>
								<span class="error-msg red" id="company-ein-error"></span>
							</div>
							</div>
<div class="form-group col-md-12">

							<div class="col-sm-4 add-mem">
								<label class="add-member-label">Reporting Year</label>
							</div>
							<div class="col-sm-8">
							
								<select class="form-control" id="company-reporting-year" name="company_reporting_year">
									<?php if(!empty($listData)) {
										
										
									foreach($listData as $key=>$value)
									{
										?>
									<option value="<?php echo $key; ?>" ><?php echo $value; ?></option>
									<?php }} ?>
								</select> 
								
								<span class="error-msg" id="company-reporting-year-error"></span>
							</div>

</div>
						</div>
						<div class="modal-footer" style="border-top: none;">

							<div class="col-md-12">
								<button type="button" class="btn btn-success" id="update_cmpny_btn"
									 onclick ="return validateupdatecompany();">Update</button>
								<button type="button" class="btn btn-default"
									data-dismiss="modal"  onclick ="resetupdatecompany();">Close</button>

							</div>

						</div>
					</div>
				</div>
			</div>
</form>

			<div class="modal fade" id="modal-container-430199" tabindex="-1"
				role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog pswd-pop">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"
								aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Add Additional EIN</h4>
						</div>
						<div class="modal-body" style="float: left;">


							<div class="col-sm-4 add-mem">
								<label class="add-member-label">Company Name<span class="red">*</span></label>
							</div>
							<div class="col-sm-8">
								<input class="form-control add-member-input" placeholder=""
									id="current-password" /> <label class="error-msg"
									id="current-password-error"></label>
							</div>


							<div class="col-sm-4 add-mem">
								<label class="add-member-label">Company EIN<span class="red">*</span></label>
							</div>
							<div class="col-sm-8">
								<input class="form-control add-member-input phone"
									placeholder="" id="current-password"
									data-inputmask='"mask": "99-9999999"' data-mask />
								<p style="font-size: 14px;">(Note: EIN should be in the format
									XX-XXXXXXX and in numbers only)</p>

								<label class="error-msg" id="current-password-error"></label>
							</div>


							<div class="col-sm-4 add-mem">
								<label class="add-member-label">Reporting Year</label>
							</div>
							<div class="col-sm-8">
								<select class="form-control">
									<option>Select</option>
									<option selected>2016</option>
								</select> <label class="error-msg" id="current-password-error"></label>
							</div>

							<div class="col-sm-4 add-mem hide">
								<label class="add-member-label">Reporting Status<span
									class="red">*</span></label>
							</div>
							<div class="col-sm-8 hide">
								<select class="form-control"><option>Select</option>
									<option>Created</option>
									<option>Forms Generated</option>
									<option>E-Filed</option>
									<option>Data Validated</option>
								</select>
							</div>


						</div>
						<div class="modal-footer" style="border-top: none;">
							<div class="col-md-12">
								<button type="button" class="btn btn-success" id="chng_pwd_btn"
									data-dismiss="modal">Save</button>
								<button type="button" class="btn btn-default"
									data-dismiss="modal" onclick="clearChangePasswordFields();">Close</button>


							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</div>