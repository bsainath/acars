<style>
.width-98{
	    width: 98%;
}
</style>
<div class="box box-warning">


            <div class="box-header with-border">
              <h3 class="box-title col-sm-6">Current Available Plan Classes - ABC Corp <small>(ACA-10000-1)</small>
              </h3>
              
               <a class="col-sm- btn bg-orange btn-flat btn-social pull-right">
                <i class="fa fa-youtube-play"></i>View Help Video
              </a>
            </div>
			
 <div class="col-xs-12 header-new-main width-98 "> 
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">To define a plan class, please click Add Plan Class button
	</p>
</div> 

            <!-- /.box-header -->
            <div class="box-body">
            
            <div>
<div class="table-responsive grid-filter m-5" style="float: right;margin-bottom: 10px;">
	<table class="">
		<tbody>
			<tr class="filter-div-back">


				
				
				<td title="Add Plan Class">
				<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl();?>/client/dashboard/addplanclass"><button type="reset" class="btn btn-success btn-sm filter-btn-search" style="">
				<i class="fa fa-plus" aria-hidden="true" style="margin-right:5px;"></i>Add Plan Class</button></a></td>

				


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
					<table id="examplePlanclass" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>Name</th>
								<th>Plan Type</th>
								<th>Waiting Period</th>
								
								<th>MV Coverage</th>
								<th>MV months</th>
								<th>MEC</th>
								<th>Update</th>
								
							</tr>
						</thead>
						<tbody>
							
							<tr>

								<td>Plan 1</td>
								<td>Fully Insured</td>
								<td>DOH</td>
								
								<td>Yes</td>
								<td>Jan, Feb, Mar</td>
								<td>Emp</td>
								<td style="text-align: center;"><a
												href="<?php echo Yii::$app->homeUrl;?>client/dashboard/updateplanclass"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
								
							</tr>
							
							<tr>

								<td>Plan 2</td>
								<td>Not Offered</td>
								<td>DOH</td>
								
								<td>Yes</td>
								<td>Jan, Feb, Mar</td>
								<td>Spouses, Employees</td>
								<td style="text-align: center;"><a
												href="<?php echo Yii::$app->homeUrl;?>client/dashboard/updateplanclass"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
								
							</tr>
							
							<tr>

								<td>Plan 3</td>
								<td>Semi Insured</td>
								<td>DOH</td>
								
								<td>Yes</td>
								<td>Jan, Feb, Mar, May</td>
								<td>Emp, Dependent</td>
							    <td style="text-align: center;"><a
												href="<?php echo Yii::$app->homeUrl;?>client/dashboard/updateplanclass"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
							</tr>
							
							<tr>

								<td>Plan 4</td>
								<td>Self Insured</td>
								<td>DOH</td>
								
								<td>Yes</td>
								<td>Jan, Feb, Mar, May, June</td>
								<td>Spouse, Emp</td>
								<td style="text-align: center;"><a
												href="<?php echo Yii::$app->homeUrl;?>client/dashboard/updateplanclass"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td> 
													
							</tr>
							
																				
						</tbody>

					</table>
				</div>
				
		
			</div>
			<!-- /.box -->
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

$(document).ready(function(){
			    $('#examplePlanclass').DataTable({

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
		</div>
            
                        </div>
            <!-- /.box-body -->
          </div>