<script type="text/javascript">
// $(function() {
// 	$( "#companies-menu-id" ).addClass( "active" );
// });

function showuploadconfirm()
{
	$('#upload-confirm').modal('show');
}
</script>
<style>

  .no-pd-rg{
	 padding-right: 0; 
  }  
select{ padding: 2px 0px;}

.payroll-div {
	margin-top: 10px;
	margin-bottom: 10px;
	border-bottom: 1px solid #ddd;
	padding: 0px;
	float: left;
	width: 100%;
}

a.machine-icons {
	height: 49px;
	line-height: 49px;
	display: inline-block;
	text-align: center;
	width: 50px;
	border-right: 1px solid #ddd;
}
.btn_icons {
    margin-right: 10px;
}

@media (min-width: 992px)
.modal-lg {
    width: 1012px;
}

@media (min-width: 992px) {
  .modal-dialog {
    width: 1012px;
  
  }
 
}
td .form-control{
width:inherit;
}
.datepicker{z-index:1151 !important;}

#sticky.stick {
    margin-top: 0 !important;
    position: fixed;
    top: 0;
    z-index: 1551;
    border-radius: 0 0 0.5em 0.5em;
    background-color: #222d32;
    padding: 8px!important;
    margin-left: -3px;
   
    right: 0px;
}
</style>

<div class="box box-warning container-fluid">


	<div class="box-header with-border">
		<h3 class="box-title col-xs-6">Medical Plan Enrollment Data - ABC Corp <small>(ACA-10000-1)</small></h3>
		<div class="col-xs-6 pull-right">
			<a class=" btn bg-orange btn-flat btn-social pull-right"> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		</div>
	</div>

	<div class="col-xs-12 header-new-main width-98 hide">
		<span class="header-icon-band"><i class="fa fa-file-text-o icon-band"
			style="font-weight: lighter;"></i></span>
		<p class="sub-header-new">Enter the information below for ALL
			employees who were employed with your company for any day of the
			reporting calendar year. This includes all part time and full time
			employees.</p>
	</div>

	<!-- /.box-header -->
	<div class="box-body">



		<div class="col-md-12 ">
			
			
<nav class="navbar "  role="navigation" style="margin-bottom: 0px; float: left; width: 100%;">
		<div id="sticky-anchor"></div>
		<div class="col-md-12 padding-left-0 padding-right-0" id="sticky" >

			

			<div class="" id="heading-navbar-collapse">
				<div class="navbar-left document-context-menu" >
				<div class="btn-category pull-right">

					

						<div class="" style="">

						
								<a href="#" class="last btn navbar-btn btn-default hide" data-toggle="tooltip" data-placement="bottom" title="" data-original-title=""><i style="color: #0000" class="fa  fa-flag fa-lg btn_icons"></i>Flag Selected Employees</a>															
								<!--href="#modal-container-349870" data-toggle="modal" --> 
								
									<div class="btn-group">
				  <button type="button" class="btn btn-default"><i
								class="fa fa-download fa-lg btn_icons"></i>Download</button>
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu">
					<li><a href="<?php echo Yii::$app->homeUrl;?>Images/sample.csv">Download Payroll Template</a></li>
					<li><a href="<?php echo Yii::$app->homeUrl;?>Images/sample.csv">Download Employment Period</a></li>
				   
				  </ul>
				</div>
				
				<div class="btn-group">
				  <button type="button" class="btn btn-default"><i
								class="fa fa-upload fa-lg btn_icons"></i>Upload</button>
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu">
					<li><a href="#" onclick="showuploadconfirm();" >Upload Payroll Data</a></li>
					<li><a href="#" onclick="showuploadconfirm();" >Upload Employment Period</a></li>
				   
				  </ul>
				</div>
								<a class="last btn navbar-btn btn-default hide"
								id="display-full" href="<?php echo Yii::$app->homeUrl;?>Images/sample.csv" data-toggle="tooltip"
								data-placement="bottom" title=""
								data-original-title=""><i
								class="fa fa-download fa-lg btn_icons"></i>Download Medical Plan Template File</a> <a class="last btn hide navbar-btn btn-default"
								id="display-940" href="#" data-toggle="tooltip"
								data-placement="bottom" title=""
								data-original-title=""><i
								style="color: #0000" class="fa fa-upload fa-lg btn_icons"></i>Upload Medical Plan Data</a> <a
								class="last btn navbar-btn btn-default" id="display-480"  onclick="myFunction();"
								data-toggle="tooltip" data-placement="bottom" title=""
								data-original-title=""><i
								style="color: #0000" class="fa fa-times fa-lg btn_icons"></i>Delete Selected</a>
							<!--	<a class="last btn navbar-btn btn-default" href="<?php //echo Yii::$app->homeUrl;?>Images/sample.csv"
								id="display-full" href="#" data-toggle="tooltip"
								data-placement="bottom" title=""
								data-original-title=""><i
								class="fa fa-download fa-lg btn_icons"></i>Download Sample CSV</a>-->
						</div>
						
						
					</div>
				
				</div>

				<div class="navbar-right document-context-menu" style="margin-right: 0px !important;">

					<div class="buttons pull-right" style="line-height: 35px;">
						<button type="reset" class="btn btn-success btn-sm filter-btn-search"
							style="" onclick="addemployRow();"> <i
							class="fa fa-plus" aria-hidden="true" style="margin-right: 5px;"></i>Add Medical Plan Enrollment
						</button>
						<button type="reset" class="btn btn-success btn-sm filter-btn-search"
							style="" >Save
						</button>
					</div>

				</div>
			</div>
			<!-- 
			<div class="col-md-12">
			<div class="buttons pull-right" style="line-height: 35px;">
						
						<button type="reset" class="btn btn-success btn-sm filter-btn-search"
							style="" onclick="addemployRow();"> Save
						</button>
					</div>
			
			</div> -->
		</div>
	</nav>
			<!--
			<div class="col-sm-3 form-group" style="margin-bottom: 10px;">
				<a class="btn btn-block btn-social btn-dropbox"> <i
					class="fa fa-download"></i> Download Payroll Template
				</a>
			</div>
			<div class="col-sm-3 form-group" style="margin-bottom: 10px;">
				<a class="btn btn-block btn-social btn-success"> <i
					class="fa fa-upload"></i> Upload Payroll Data
				</a>
			</div>
			<div class="col-sm-3 form-group" style="margin-bottom: 10px;">
				<a class="btn btn-block btn-social btn-google"> <i
					class="fa fa-times"></i> Delete Selected Records
				</a>
			</div>
-->
		</div>


		<div class=" col-md-12 no-pd-rg" style="margin-top: 15px;">
			





	
		<div class="row col-xs-12 panel-0 no-pd-rg">
			

				<!-- /.box-header -->
				<div class=" table-responsive">
					<table id="employee_add" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th><input type="checkbox"></th>
								<th>Legal First Name</th>
								<th class="width-45">M.I</th>
								
								<th>Legal Last Name</th>
								<th class="width-62">Suffix</th>
								<th class="width-102">SSN</th>
								
								<th>Address 1</th>
								<th> Apt#, Suite</th>
								<th>City or Town</th>
								<th class="width-45" >State</th>
								<th class="width-80" >ZIP Code</th>
								<th class="width-80">Date of Birth</th>
								<th>Notes</th>
								<th>Medical.Plan</th>
								
							</tr>
						</thead>
						<tbody >
							
							<tr>

								<td><input type="checkbox" ></td>
								<td><input type="text" value="Bob" class="form-control"></td>
								<td class="width-45"><input type="text" maxlength="2" class="form-control"></td>
								<td><input type="text" value="Rich" class="form-control"></td>
								<td class="width-62"><input type="text" class="form-control" value="Mr" maxlength="5">
								</td>
								<td class="width-102"><input type="text" value="111-11-5555" class="form-control"></td>
								<td><input type="text" value="1342 Roper Mtn Rd., Suite 101" class="form-control"></td>
								<td><input type="text" class="form-control"></td>
								<td><input type="text" vlaue="Green Ville" class="form-control"></td>
								<td class="width-45"> <input type="text" value="SC" maxlength="2" class="form-control"></td>
								
									<td class="width-80"><input type="text" class="form-control" value="5858"></td>
								<td class="width-80"><input type="" class="form-control datepicker" value="04/10/2015"></td>
							
							
								
								<td><input type="text" class="form-control"></td>
								<td><input type="button" class="btn btn-success btn-sm" value="Add"  onclick="showenrollment();" style="white-space:nowrap;"></td>
								
							</tr>
							
							<tr>

								<td><input type="checkbox" ></td>
								<td><input type="text" value="Bob" class="form-control"></td>
								<td class="width-45"><input type="text" maxlength="2" class="form-control"></td>
								<td><input type="text" value="Rich" class="form-control"></td>
								<td class="width-62"><input type="text" class="form-control" value="Mr" maxlength="5">
								</td>
								<td class="width-102"><input type="text" value="111-11-5555" class="form-control"></td>
								<td><input type="text" value="1342 Roper Mtn Rd., Suite 101" class="form-control"></td>
								<td><input type="text" class="form-control"></td>
								<td><input type="text" vlaue="Green Ville" class="form-control"></td>
								<td class="width-45"> <input type="text" value="SC" maxlength="2" class="form-control"></td>
								<td class="width-80"><input type="text" class="form-control" value="5858"></td>
							
								
								<td class="width-80"><input type="" class="form-control datepicker" value="04/10/2015"></td>
							
							
								
								<td><input type="text" class="form-control"></td>
								<td><input type="button" class="btn btn-success btn-sm" value="Add"  onclick="showenrollment();" style="white-space:nowrap;"></td>
								
							</tr>
							
							<tr>

								<td><input type="checkbox" ></td>
								<td><input type="text" value="Bob" class="form-control"></td>
								<td class="width-45"><input type="text" maxlength="2" class="form-control"></td>
								<td><input type="text" value="Rich" class="form-control"></td>
								<td class="width-62"><input type="text" class="form-control" value="Mr" maxlength="5">
								</td>
								<td class="width-102"><input type="text" value="111-11-5555" class="form-control"></td>
								<td><input type="text" value="1342 Roper Mtn Rd., Suite 101" class="form-control"></td>
								<td><input type="text" class="form-control"></td>
								<td><input type="text" vlaue="Green Ville" class="form-control"></td>
								<td class="width-45"> <input type="text" value="SC" maxlength="2" class="form-control"></td>
									<td class="width-80"><input type="text" class="form-control" value="5858"></td>
								
								<td class="width-80"><input type="" class="form-control datepicker" value="04/10/2015"></td>
							
							
								
								<td><input type="text" class="form-control"></td>
								<td><input type="button" class="btn btn-success btn-sm" value="Add"  onclick="showenrollment();" style="white-space:nowrap;"></td>
								
							</tr>
							
																				
						</tbody>

					</table>
				</div>
				<ul class="pagination">
					<li><a> << </a></li>
					<li class="active"><a>1 <span class="sr-only">(current)</span>
					</a></li>
					<li><a>2</a></li>
					<li><a>3</a></li>
					<li><a>4</a></li>
					<li><a>5</a></li>
					<li><a>>></a></li>
				</ul>
				<!-- /.box-body -->
				<div class=" pagination pull-right">
							<div class="results">Showing 1 to 1 of 1 (1 Page)</div>							<select id="filter_pages" name="lookup_value">
<option value="3">5</option>
<option value="4">10</option>
<option value="5">15</option>
<option value="6">20</option>
<option value="7">25</option>
</select>							</div>
			
			<!-- /.box -->
		</div>
	


<script type="text/javascript">

$(document).ready(function(){
	 datepickerintialise();
	$("#flag_checkbox").click(function(){
		 var isChecked = $("#flag_checkbox").is(":checked");
			if(isChecked)
			{
				$('#flag_textarea').show();
			}
			else
			{
				$('#flag_textarea').hide();
			}
	});
});


function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('#sticky').addClass('stick');
        $('#sticky-anchor').height($('#sticky').outerHeight());
    } else {
        $('#sticky').removeClass('stick');
        $('#sticky-anchor').height(0);
    }
}

$(function() {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});

function getpersontype(id)
{
	$person_type_value = $('#person_type_'+id).val();
	if($person_type_value == 2 || $person_type_value == 3){
		$('#ssn_'+id).removeClass('hide');
		$('#dependentdob_'+id).removeClass('hide');
	}
	else
	{
		$('#ssn_'+id).addClass('hide');
		$('#dependentdob_'+id).addClass('hide');
	}
	
}

function getdob(id)
{
	$is_checked = $("#dependentdob_"+id).is(":checked");
	if($is_checked)
	{
		$('#dob_'+id).removeClass('hide');
		
	}else
	{
		$('#dob_'+id).addClass('hide');
	}
	
}


function addemployment()
{
	$new_row = '<tr>'

		+'<td><input type="text" class="datepicker  form-height " id="inputEmail3" placeholder=""></td>'
		+'<td><input type="text" class="datepicker  form-height " id="inputEmail3" placeholder=""></td>'
		+'<td><select class=" form-height "><option>Select</option><option>Plan Class1</option><option>Plan Class2</option></select></td>'
		
		+'<td><select class=" form-height "><option>Select</option><option>FT</option><option>PT</option></select></td>'
		+'<td><input type="checkbox"></td>'
		
		+'<td><textarea class=" form-height "></textarea></td>'
		+'<td><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>'
	+'</tr>';
	
	
}
function myFunction() {
    confirm("Are you sure want to delete ?");
}

function addRow() {

	var table = document.getElementById("employment_period_div").getElementsByTagName('tbody')[0];

	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);
	
	var rowcount = rowCount + 1
	
	var cell1 = row.insertCell(0);
	var element1 = document.createElement("input");
	element1.type = "";
	element1.className ="datepicker form-control ";
	cell1.appendChild(element1);

	var cell2 = row.insertCell(1);
	var element2 = document.createElement("input");
	element2.type = "";
	element2.className ="datepicker form-control ";
	cell2.appendChild(element2);

		var cell3 = row.insertCell(2);
		 var element3 = document.createElement("select");
		 element3.className ="form-control ";
	    //element2.type = "select";
	    var option1 = '';
	    var option1 = document.createElement("option");
	    option1.innerHTML = "Employee";
	    option1.value = "1";
	    element3.add(option1, null);
	    var option2 = '';
	    var option2 = document.createElement("option");
	    option2.innerHTML = "Dependent of Employee";
	    option2.value = "2";
	    element3.add(option2, null);
		
		var option3 = document.createElement("option");
	    option3.innerHTML = "Dependent of a Non-Employee";
	    option3.value = "3";
	    element3.add(option3, null);
		
		var option4 = document.createElement("option");
	    option4.innerHTML = "Non-Employee Enrolled";
	    option4.value = "4";
	    element3.add(option4, null);
		element3.id ="person_type_"+rowcount;
		element3.setAttribute("onchange", "getpersontype("+rowcount+")", 0);
	    cell3.appendChild(element3);


		var cell4 = row.insertCell(3);
		 var element4 = document.createElement("input");
		 element4.className ="form-control  hide";
		 element4.id ="ssn_"+rowcount;
	     cell4.appendChild(element4);

	    var cell5 = row.insertCell(4);
		var element5 = document.createElement("input");
		element5.className ="hide";
		element5.type = "checkbox";
		element5.name="chkbox[]";
		element5.setAttribute("onclick", "getdob("+rowcount+")", 0);
		element5.id ="dependentdob_"+rowcount;
		cell5.appendChild(element5);


		var cell6 = row.insertCell(5);
		var element6 = document.createElement("input");
		element6.className ="hide  datepicker form-control";
		element6.type = "";
		element6.id = "dob_"+rowcount;
		element6.name="";
		cell6.appendChild(element6);
		
		var cell7 = row.insertCell(6);
		var element7 = document.createElement("textarea");
		element7.className ="form-control ";
		cell7.appendChild(element7);

		var cell8 = row.insertCell(7);
		cell8.innerHTML = '<a  onclick="deleteRow('+rowcount+')" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete this row" style="margin-left: 13px;color:red;cursor:pointer;"><i class="fa fa-times" aria-hidden="true"></i></a>';
	
 datepickerintialise();

}


function addemployRow() {

	var table = document.getElementById("employee_add").getElementsByTagName('tbody')[0];;

	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);

	var cell1 = row.insertCell(0);
	var element1 = document.createElement("input");
	element1.type = "checkbox";
	element1.className ="";
	cell1.appendChild(element1);

	var cell2 = row.insertCell(1);
	var element2 = document.createElement("input");
	element2.type = "text";
	element2.className ="form-control";
	cell2.appendChild(element2);

	var cell3 = row.insertCell(2);
	var element3 = document.createElement("input");
	element3.type = "text";
	element3.className ="form-control width-45";
	element3.maxLength = "2";
	
	cell3.appendChild(element3);
	
	
	var cell4 = row.insertCell(3);
	var element4 = document.createElement("input");
	element4.type = "text";
	element4.className ="form-control";
	cell4.appendChild(element4);
	
		var cell5 = row.insertCell(4);
		 var element5 = document.createElement("input");
		 element5.type = "text";
		 element5.className ="form-control width-62";
		 element3.maxLength = "5";
			
		  cell5.appendChild(element5);
		 


		var cell6 = row.insertCell(5);
	var element6 = document.createElement("input");
	element6.type = "text";
	element6.className ="form-control width-102";
	cell6.appendChild(element6);
	
	
	var cell7 = row.insertCell(6);
	var element7 = document.createElement("input");
	element7.type = "text";
	element7.className ="form-control";
	cell7.appendChild(element7);
	
	var cell8 = row.insertCell(7);
	var element8 = document.createElement("input");
	element8.type = "text";
	element8.className ="form-control";
	cell8.appendChild(element8);
	
	var cell9 = row.insertCell(8);
	var element9 = document.createElement("input");
	element9.type = "text";
	element9.className ="form-control";
	cell9.appendChild(element9);
		
		var cell10 = row.insertCell(9);
		 var element10 = document.createElement("input");
		 element10.type = "text";
		 element10.className ="form-control width-45";
		 element10.maxLength = "2";
	  /*  var option1 = '';
	    var option1 = document.createElement("option");
	    option1.innerHTML = "Select";
	    option1.value = "1";
	    element10.add(option1, null);
	    var option2 = '';
	    var option2 = document.createElement("option");
	    option2.innerHTML = "( AL ) Alabama ";
	    option2.value = "2";
	    element10.add(option2, null);
		
		var option3 = '';
	    var option3 = document.createElement("option");
	    option3.innerHTML = "( NH ) New Hampshire ";
	    option3.value = "2";
	    element10.add(option3, null);*/
		
		
	    cell10.appendChild(element10);

		
		
		var cell11 = row.insertCell(10);
	var element11 = document.createElement("input");
	element11.type = "";
	element11.className ="form-control width-80";
	cell11.appendChild(element11);
		
		
		var cell12 = row.insertCell(11);
	var element12 = document.createElement("input");
	element12.type = "";
	element12.className =" datepicker form-control width-80";
	cell12.appendChild(element12);
	
	
	var cell13 = row.insertCell(12);
	var element13 = document.createElement("input");
	element13.type = "text";
	element13.className ="form-control";
	cell13.appendChild(element13);
	
//	var cell14 = row.insertCell(13);
//	var element14 = document.createElement("input");
//	element14.type = "button";
//	element14.className ="btn btn-success";
//	cell14.appendChild(element14);
		var cell14 = row.insertCell(13);
		var rowcount = rowCount + 1
		cell14.innerHTML = '<button onclick="showenrollment();" class="btn btn-success btn-sm" style="white-space:nowrap;">Add</button>';


		
 datepickerintialise();

}

function showenrollment()
{
	datepickerintialise();
	$('#myModal').modal('show');
	
}
function deleteRow(rowID) {
	try {
	var table = document.getElementById("employment_period_div").getElementsByTagName('tbody')[0];
	rowID--;
	var rowCount = table.rows.length;
		var row = table.rows[rowID];
			table.deleteRow(rowID);
		
		

	}catch(e) {
		// alert(e);
	}
}




</script>
		
			
			
		
		</div>

		<div>




			<script type="text/javascript">
function agencySearch(){


	

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







<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enrollment Periods</h4>
      </div>
      <div class="modal-body">
        <div class="row">
						<div class="box">
							<div class="box-header with-border ">
							<!--	<h3 class="hide box-title col-xs-6">Employment Periods</h3>  -->
								<div class="col-xs-6 pull-right padding-right-0">
									<button onclick="addRow();" type="reset"
										class="btn btn-success btn-sm filter-btn-search pull-right">
										<i class="fa fa-plus" aria-hidden="true"
											style="margin-right: 5px;"></i>Add Enrollment Period
									</button>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="col-md-12">
							<div class="box-body table-responsive">
							
								<table id="employment_period_div"
									class="table table-bordered table-hover">
									<thead>
										<tr class="tr-grid-header">

											<th>Coverage Start Date</th>
											<th>Coverage End Date</th>

											<th>Person Type</th>
											<th>Connected Employee SSN</th>
											<th>Use Dependent DOB</th>
											<th>DOB</th>
											<th>Notes</th>
											<th>Action</th>

										</tr>
									</thead>
									<tbody>
										<tr><td><input type="text" class="datepicker form-control "></td><td><input type="text" class=" datepicker form-control"></td><td><select class="form-control" id="person_type_1" onchange="getpersontype(1)"><option value="1">Employee</option><option value="2">Dependent of Employee</option><option value="3">Dependent of a Non-Employee</option><option value="4">Non-Employee Enrolled</option></select></td><td><input class="form-control hide" id="ssn_1"></td><td><input class="hide" type="checkbox" name="chkbox[]" onclick="getdob(1)" id="dependentdob_1"></td><td><input class="hide datepicker form-control" type="text" id="dob_1" name=""></td><td><textarea class="form-control"></textarea></td><td><a onclick="deleteRow(1)" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete this row" style="margin-left: 13px;color:red;cursor:pointer;"><i class="fa fa-times" aria-hidden="true"></i></a></td></tr>
										



									</tbody>

								</table>
							</div>
</div>
						</div>

					</div>
					
					


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save Changes</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div id="upload-confirm" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md" style="width: 600px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Confirmation</h4>
      </div>
      <div class="modal-body" style="text-align:center;">
        <h4>Please retain a copy of the file for your reference.</h4>
      </div>
      <div class="modal-footer">
	  <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>