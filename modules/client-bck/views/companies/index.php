
<style>
.imp-mark{
color:red;
}
</style>
<div class="box box-warning container-fluid">
	
	<div class="box-header with-border">
              <h3 class="box-title col-xs-6">List of Companies <span style="font-size: 15px;">( Number of EIN's : 4 )</span></h3>
			  <div class="col-xs-6 pull-right">
			<a class=" btn bg-orange btn-social pull-right"> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		</div>
            </div>
			
  
	<div class="box-body">

		<div>
			<div class=" table  grid-filter m-5 filter-div-back"  style="float: left;padding: 12px;
    border-top: 1px solid #ddd;">
				<div class="col-lg-12" style="    padding-right: 0;">
				
				
				<div class="col-lg-3 col-md-6" style="display: inline-flex;white-space: nowrap;" >
				<span style="line-height:1.9;">Company Name :</span>&nbsp;&nbsp;&nbsp;<select class="form-control">
				<option>All</option>
				<option>Texas Group</option>
				<option>California Group</option>
				</select></div>
				
				<div class="col-lg-3 col-md-6" style="display: inline-flex;white-space: nowrap;" >
				<span style="line-height:1.9;">Reporting Year :</span>&nbsp;&nbsp;&nbsp;<select class="form-control">
				<option>Select</option>
				<option>2015</option>
				<option>2016</option>
				</select></div>
				
				
				<div class="col-lg-3 col-md-6" style="display: inline-flex;white-space: nowrap;" >
				<button class="btn btn-primary" style="margin-right:5px;">Search</button>
				<button class="btn btn-primary">Clear</button>
				</div>
				
				
				
			
				
				
				
				
				
				
				<div class="col-lg-3 pull-right col-xs-6 padding-right-0"    >
				
				<div >
				<a id="modal-430198" href="#modal-container-430199" role="button"  data-toggle="modal"><button
										type="reset" class="btn btn-success filter-btn-search pull-right"
										>
										<i class="fa fa-plus" aria-hidden="true"
											style="margin-right: 5px;"></i>Add Additional EIN
									</button></a>
				</div>
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
											<th>Company Number</th>
											<th>Company Name</th>
											<th>Reporting Year</th>

											<!--<th>Subscription Number</th>-->
											<th>Reporting Status</th>
											<th>EIN</th>
											<th>Update</th>
											<!--<th>Delete</th>-->

										</tr>
									</thead>
									<tbody>

										<tr>
											<td>ACA-10000-1</td>
											<td><a href="<?php echo Yii::$app->homeUrl;?>client/dashboard">Abc Corp</a></td>
											<td>2016</td>

										<!--	<td>S123</td>-->
											<td><select class="form-control" style="width:50%"><option>Select</option>
											<option>Created</option>
											<option>Forms Generated</option>
											<option>E-Filed</option>
											<option>Data Validated</option>
											</select></td>
											<td>22-2454545</td>
											<td style="text-align: center;"> 
			                                <a id="modal-430198" href="#modal-container-430198" role="button" class="btn" data-toggle="modal"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
										<!--	<td style="text-align: center; color: red;    margin-top: 10px;"><i
												class="fa fa-times cursor" style="cursor: pointer;"></i></td>-->
											<!-- 	<td><a href="#" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 -->
										</tr>

										<tr>
											<td>ACA-10000-2</td>
											<td><a href="<?php echo Yii::$app->homeUrl;?>client/dashboard">Raymond Corp</a></td>
											<td>2016</td>

											<!--	<td>S123</td>-->
											<td><select class="form-control" style="width:50%"><option>Select</option>
											<option>Created</option>
											<option>Forms Generated</option>
											<option>E-Filed</option>
											<option>Data Validated</option>
											</select></td>
											<td>88-5465654</td>
											<td style="text-align: center;"> <a id="modal-430198" href="#modal-container-430198" role="button" class="btn" data-toggle="modal"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
												<!--	<td style="text-align: center; color: red;    margin-top: 10px;"><i
												class="fa fa-times cursor" style="cursor: pointer;"></i></td>-->
											<!-- 	<td><a href="#" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 -->
										</tr>

										<tr>
											<td>ACA-10000-3</td>
											<td><a href="<?php echo Yii::$app->homeUrl;?>client/dashboard">Obsorn Corp</a></td>
											<td>2016</td>

											<!--	<td>S123</td>-->
											<td><select class="form-control" style="width:50%"><option>Select</option>
											<option>Created</option>
											<option>Forms Generated</option>
											<option>E-Filed</option>
											<option>Data Validated</option>
											</select></td>
											<td>78-4565445</td>
											<td style="text-align: center;"> <a id="modal-430198" href="#modal-container-430198" role="button" class="btn" data-toggle="modal"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a>
													</td>
												<!--	<td style="text-align: center; color: red;    margin-top: 10px;"><i
												class="fa fa-times cursor" style="cursor: pointer;"></i></td>-->
											<!-- 	<td><a href="#" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 -->
										</tr>

										<tr>
											<td>ACA-10000-4</td>
											<td><a href="<?php echo Yii::$app->homeUrl;?>client/dashboard">Rest Corp</a></td>
											<td>2016</td>

											<!--	<td>S123</td>-->
											<td><select class="form-control" style="width:50%"><option>Select</option>
											<option>Created</option>
											<option>Forms Generated</option>
											<option>E-Filed</option>
											<option>Data Validated</option>
											</select></td>
											<td>45-8789799</td>
											<td style="text-align: center;"> <a id="modal-430198" href="#modal-container-430198" role="button" class="btn" data-toggle="modal"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a>
													</td>
												<!--	<td style="text-align: center; color: red;    margin-top: 10px;"><i
												class="fa fa-times cursor" style="cursor: pointer;"></i></td>-->
											<!-- 	<td><a href="#" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 -->
										</tr>


									</tbody>

								</table>
							</div>
							<div class="col-xs-12">
							<ul class="pagination">
								<li><a> << </a></li>
								<li class="active"><a>1<span class="sr-only">(current)</span>
								</a></li>
								<li><a>2</a></li>
								<li><a>3</a></li>
								<li><a>4</a></li>
								<li><a>5</a></li>
								<li><a>>></a></li>
							</ul>
							<!-- /.box-body -->
							<div class=" pagination pull-right">
								<div class="results">Showing 1 to 4 of 4 (1 Page)</div>
								<select id="filter_pages" onchange="agencySearch();"
									name="lookup_value">
									<option value="3">5</option>
									<option value="4" selected>10</option>
									<option value="5">15</option>
									<option value="6">20</option>
									<option value="7">25</option>
								</select>
							</div>
							</div>
						</div>
						<!-- /.box -->
					</div>
				</div>
			</div>



<div class="modal fade" id="modal-container-430198" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" >&times;</button>
				<h4 class="modal-title" id="myModalLabel">	Update Company Details</h4>
			</div>
			<div class="modal-body" style="float: left;">
			
			
			<div class="col-sm-4 add-mem">
					<label class="add-member-label">Company Name<span class="red">*</span></label>
				</div>
				<div class="col-sm-8">
					<input class="form-control add-member-input"
						placeholder="" id="current-password"  value="OptionMatrix"/> <label
						class="error-msg" id="current-password-error"></label>
				</div>
				
				
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Company EIN<span class="red">*</span></label>
				</div>
				<div class="col-sm-8">
					<input class="form-control add-member-input"
						placeholder="" id="current-password" value="23-23232323" />
					<p style="font-size:14px;">(Note: EIN should be in the format XX-XXXXXXX and in numbers only)</p>
						<label
						class="error-msg" id="current-password-error"></label>
				</div>
			<div class="col-sm-4 add-mem">
					<label class="add-member-label">Reporting Status<span class="red">*</span></label>
				</div>
				<div class="col-sm-8">
					<select class="form-control"><option>Select</option>
											<option selected>Created</option>
											<option>Forms Generated</option>
											<option>E-Filed</option>
											<option>Data Validated</option>
											</select>
				</div>
				
			</div>
			<div class="modal-footer" style="border-top: none;">
			
			<div class="col-md-12">
			<button type="button" class="btn btn-success" id="chng_pwd_btn"
					>Update
					</button>
				<button type="button" class="btn btn-default" data-dismiss="modal"
					onclick="clearChangePasswordFields();">Close</button>
				
</div>

			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="modal-container-430199" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog pswd-pop">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true" >&times;</button>
				<h4 class="modal-title" id="myModalLabel">	Add Additional EIN</h4>
			</div>
			<div class="modal-body" style="float: left;">
			
			
			<div class="col-sm-4 add-mem">
					<label class="add-member-label">Company Name<span class="red">*</span></label>
				</div>
				<div class="col-sm-8">
					<input class="form-control add-member-input"
						placeholder="" id="current-password" /> <label
						class="error-msg" id="current-password-error"></label>
				</div>
				
				
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Company EIN<span class="red">*</span></label>
				</div>
				<div class="col-sm-8">
					<input class="form-control add-member-input"
						placeholder="" id="current-password" /> 
						<p style="font-size:14px;">(Note: EIN should be in the format XX-XXXXXXX and in numbers only)</p>
					
						<label
						class="error-msg" id="current-password-error"></label>
				</div>
			
				<div class="col-sm-4 add-mem">
					<label class="add-member-label">Reporting Status<span class="red">*</span></label>
				</div>
				<div class="col-sm-8">
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
					>Save
					</button>
				<button type="button" class="btn btn-default" data-dismiss="modal"
					onclick="clearChangePasswordFields();">Close</button>
				

</div>
			</div>
		</div>
	</div>
</div>
			<script type="text/javascript">
function agencySearch(){


	url='/admin/agency?filter=on';

	var filter_keyword =document.getElementById('filter_keyword').value;
	
	if (filter_keyword) {
		url += '&keyword='+ encodeURIComponent(filter_keyword);
	}

	var filter_status =document.getElementById('filter_status').value;
	
	if (filter_status !=0) {
		url += '&status=' + encodeURIComponent(filter_status);
	}

	var filter_package =document.getElementById('package').value;
	
	if (filter_package !=0) {
		url += '&package=' + encodeURIComponent(filter_package);
	}
	

	 var selects = document.getElementById("filter_pages");
	 var selected = document.getElementById("filter_pages").value;
	 
//	 var Value = selects.options[selects.selectedIndex].value;// will gives u
	 // value

	 var selectedText = selects.options[selects.selectedIndex].text;
//	 var selectedValue = selects.options[selected.selectedValue].value;
	 var filter_count = selectedText;
	 var filter_value = selected;
		
	 if (filter_count) {
			url += '&filter_pages=' + encodeURIComponent(filter_count);
	}
	 if (filter_value) {
			url += '&filter_value=' + encodeURIComponent(filter_value);
	}	
	
	location=url;

}

function clearGrid()
{
	url='/admin/agency';
	location=url;
	
}




</script>
		</div>

	</div>
</div>