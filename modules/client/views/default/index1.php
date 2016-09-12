<?php



use yii\helpers\Html;

use yii\widgets\ActiveForm;

use yii\base\Configurable;

use yii\base\ViewContextInterface;

use yii\helpers\ArrayHelper;

use app\models\UsaStates;

use app\models\StaffDetails;



/* @var $this yii\web\View */

/* @var $model common\models\OrderHeader */

/* @var $form yii\widgets\ActiveForm */
// $this->title = Yii::t('app', 'Single Point Reporting | Add Staff User');

?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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


            <div class="box-header with-border">
              <h3 class="box-title">Browse Projects</h3>
            </div>
			
<div class="col-xs-12 header-new-main width-98">
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">Agent can browse the list of projects for the specific photographer over here. Download links for media files are available after clicking the specific property / project link.</p>
</div>

            <!-- /.box-header -->
            <div class="box-body">
            
            <div>
<div class="table-responsive grid-filter m-5" style="float: left">
	<table class="table filter-table middle-align mb-0">
		<tbody>
			<tr class="filter-div-back">


				<td style="width: 1%; line-height: 2.428571;">Photographer:</td>
				<td style="width: 20%"><input class="form-control" type="text" style="width: 90%;" id="filter_keyword" value=""></td>
				<td style="width: 12%; line-height: 2.428571;">Property Name:</td>
				<td style="width: 20%">
				
				<input class="form-control" type="text" style="width: 90%;" id="filter_keyword" value="">				
				</td>
				<td style="width: 1%; line-height: 2.428571;">Date:</td>
				<td style="width: 15%">
				<input type="text" class="form-control" id="date_select">				</td>
				<td style="width: 1%"></td>
				<td class="grid-anchor" style="width: 2%"><button type="submit" style="" class="btn btn-primary btn-sm filter-btn-search" >Search</button></td>
				<td style="width: 10%"><button type="reset" class="btn btn-primary btn-sm filter-btn-search"  style="">Clear</button></td>

				


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
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>Photographer</th>
								<th>Delivery date & time</th>
								<th>Property Name</th>
								<th>Low Res Images</th>
								<th>High Res Images </th>
								<th>Video </th>
								<th>Virtual Tour</th>
								
								

							</tr>
						</thead>
						<tbody>
													<tr>

								<td>Jack McSweeney</td>
								<td>31-Jul-2016 3:30 PM</td>
								<td>217/1 California</td>
								<td class="align-center"><a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></td>
								<td class="align-center"><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></td>
								<td class="align-center"><a href="#"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></a></td>
								<td class="align-center"><a href="#"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a></td>
								
								
								
							</tr>
							
							<tr>

								<td>Marc Rasmussen</td>
								<td>3-Jul-2016 3:30 PM</td>
								<td>217/1 Texas</td>
								<td class="align-center"><a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></td>
								<td class="align-center"><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></td>
								<td class="align-center"><a href="#"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></a></td>
								<td class="align-center"><a href="#"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a></td>
								
								
								
							</tr>
							
							<tr>

								<td>Ron Holborn</td>
								<td>1-Jul-2016 3:30 PM</td>
								<td>Global properties</td>
								<td class="align-center"><a href="#"><i class="fa fa-download" aria-hidden="true"></i></a></td>
								<td class="align-center"><a href="#"><i class="fa fa-cloud-download" aria-hidden="true"></i></a></td>
								<td class="align-center"><a href="#"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></a></td>
								<td class="align-center"><a href="#"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a></td>
								
								
								
							</tr>
							
																				
						</tbody>

					</table>
				</div>
				<!-- /.box-body -->
				<div class="hide pagination pull-right">
							<div class="results">Showing 1 to 1 of 1 (1 Page)</div>							<select id="filter_pages" onchange="agencySearch();" name="lookup_value">
<option value="3">5</option>
<option value="4">10</option>
<option value="5">15</option>
<option value="6">20</option>
<option value="7">25</option>
</select>							</div>
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




</script>
		</div>
            
                        </div>
            <!-- /.box-body -->
          </div>
		  