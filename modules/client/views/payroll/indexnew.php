<script type="text/javascript">
// $(function() {
// 	$( "#companies-menu-id" ).addClass( "active" );
// });
</script>
<style>


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
</style>

<div class="box box-warning container-fluid">


	<div class="box-header with-border">
		<h3 class="box-title col-xs-6">Payroll Data</h3>
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
			<div class="row">
				<div class="col-md-6">
					
				</div>
				<div class="col-md-6">
					
				</div>
			</div>
<nav class="navbar " role="navigation" style="margin-bottom: 0px; float: left; width: 100%;">
		<div class="" style="padding: 0px;">

			

			<div class="" id="heading-navbar-collapse">
				<div class="navbar-left document-context-menu" >
				<div class="btn-category pull-right">

					

						<div class="btn-group" style="">

						
								<a href="#" class="last btn navbar-btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title=""><i style="color: #0000" class="fa  fa-flag fa-lg btn_icons"></i>Flag Selected Employees</a>															
								<!--href="#modal-container-349870" data-toggle="modal" --> 
								<a class="last btn navbar-btn btn-default"
								id="display-full" href="#" data-toggle="tooltip"
								data-placement="bottom" title=""
								data-original-title=""><i
								class="fa fa-download fa-lg btn_icons"></i>Download Payroll Template</a> <a class="last btn navbar-btn btn-default"
								id="display-940" href="#" data-toggle="tooltip"
								data-placement="bottom" title=""
								data-original-title=""><i
								style="color: #0000" class="fa fa-upload fa-lg btn_icons"></i>Upload Payroll Data</a> <a
								class="last btn navbar-btn btn-default" id="display-480" href="#"
								data-toggle="tooltip" data-placement="bottom" title=""
								data-original-title=""><i
								style="color: #0000" class="fa fa-times fa-lg btn_icons"></i>Delete Selected</a>
						</div>
						
						
					</div>
				
				</div>

				<div class="navbar-right document-context-menu" style="margin-right: 0px !important;">

					<div class="buttons pull-right" style="line-height: 35px;">
						<button type="reset" class="btn btn-success btn-sm filter-btn-search"
							style="" onclick="addemployRow();"> <i
							class="fa fa-plus" aria-hidden="true" style="margin-right: 5px;"></i>Add
							Employee
						</button>
					</div>

				</div>
			</div>
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


		<div class=" col-md-12 padding-right-0" style="margin-top: 15px;">
			





	
		<div class="row col-xs-12 panel-0 padding-right-0">
			

				<!-- /.box-header -->
				<div class=" table-responsive">
					<table id="employee_add" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>Select</th>
								<th>Legal First Name</th>
								<th>Legal Middle Name</th>
								
								<th>Legal Last Name</th>
								<th>Suffix</th>
								<th>Social Security Number</th>
								
								<th>Street Address 1</th>
								<th>Street Address 2</th>
								<th>City or Town</th>
								<th>State</th>
								<th>Date of Birth</th>
								<th>Flag this person</th>
								<th>Notes</th>
								<th>-</th>
								
							</tr>
						</thead>
						<tbody >
							
							<tr>

								<td><input type="checkbox" class=""></td>
								<td><input type="text" value="Bob"></td>
								<td><input type="text"></td>
								<td><input type="text" value="Rich"></td>
								<td>
								<select >
										<option>Select</option>
                                          <option>Capt </option>
                                          <option>Dr </option>
                                          <option>Mayor </option>
                                          <option>Miss </option>
                                          <option selected>Mr </option>
                                          <option>Mrs </option>
                                          <option>Ms </option>
                                          <option>| </option>
                                          <option>|| </option>
                                          <option>||| </option>
                                          <option>Jr </option>
                                          <option>Sr </option>
                                          </select>
								</td>
								<td><input type="text" value="11-11-5555"></td>
								<td><input type="text" value="1342 Roper Mtn Rd., Suite 101"></td>
								<td><input type="text"></td>
								<td><input type="text" vlaue="Green Ville"></td>
								<td><select >
										<option>Select</option>
                                          <option >( AL ) Alabama </option>
                                          <option>( AK ) Alaska </option>
                                          <option>( AZ ) Arizona </option>
                                          <option>( AR ) Arkansas </option>
                                          <option>( CA ) California </option>
                                          <option>( CO ) Colorado </option>
                                          <option>( CT ) Connecticut </option>
                                          <option>( DE ) Delaware </option>
                                          <option>( FL ) Florida </option>
                                          <option>( GA ) Georgia </option>
                                          <option>( HI ) Hawaii </option>
                                          <option>( ID ) Idaho </option>
                                          <option>( IL ) Illinois </option>
                                          <option>( IN ) Indiana </option>
                                          <option>( IA ) Iowa </option>
                                          <option>( KS ) Kansas </option>
                                          <option>( KY ) Kentucky </option>
                                          <option>( LA ) Louisiana </option>
                                          <option>( ME ) Maine </option>
                                          <option>( MD ) Maryland </option>
                                          <option>( MA ) Massachusetts </option>
                                          <option>( MI ) Michigan </option>
                                          <option>( MN ) Minnesota </option>
                                          <option>( MS ) Mississippi </option>
                                          <option>( MO ) Missouri </option>
                                          <option>( MT ) Montana </option>
                                          <option>( NE ) Nebraska </option>
                                          <option>( NV ) Nevada </option>
                                          <option>( NH ) New Hampshire </option>
                                          <option>( NJ ) New Jersey </option>
                                          <option>( NM ) New Mexico </option>
                                          <option>( NY ) New York </option>
                                          <option>( NC ) North Carolina </option>
                                          <option>( ND ) North Dakota </option>
                                          <option>( OH ) Ohio </option>
                                          <option>( OK ) Oklahoma </option>
                                          <option>( OR ) Oregon </option>
                                          <option>( PA ) Pennsylvania </option>
                                          <option>( RI ) Rhode Island </option>
                                          <option selected>( SC ) South Carolina </option>
                                          <option>( SD ) South Dakota </option>
                                          <option>( TN ) Tennessee </option>
                                          <option>( TX ) Texas </option>
                                          <option>( UT ) Utah </option>
                                          <option>( VT ) Vermont </option>
                                          <option>( VA ) Virginia </option>
                                          <option>( WA ) Washington </option>
                                          <option>( WV ) West Virginia </option>
                                          <option>( WI ) Wisconsin </option>
                                          <option>( WY ) Wyoming </option>
                                          </select></td>
								
								<td><input type="date" class="" value="08/06/1985"></td>
							
							
								
								<td><input type="checkbox"></td>
								<td><input type="text" ></td>
								<td><input type="button" class="btn btn-success" value="Add More Details"  data-toggle="modal" data-target="#myModal" style="white-space:nowrap;"></td>
							</tr>
							
							<tr>

								<td><input type="checkbox" class=""></td>
								<td><input type="text" value="Bob"></td>
								<td><input type="text"></td>
								<td><input type="text" value="Rich"></td>
								<td>
								<select >
										<option>Select</option>
                                          <option>Capt </option>
                                          <option>Dr </option>
                                          <option>Mayor </option>
                                          <option>Miss </option>
                                          <option selected>Mr </option>
                                          <option>Mrs </option>
                                          <option>Ms </option>
                                          <option>| </option>
                                          <option>|| </option>
                                          <option>||| </option>
                                          <option>Jr </option>
                                          <option>Sr </option>
                                          </select>
								</td>
								<td><input type="text" value="11-11-5555"></td>
								<td><input type="text" value="1342 Roper Mtn Rd., Suite 101"></td>
								<td><input type="text"></td>
								<td><input type="text" vlaue="Green Ville"></td>
								<td><select >
										<option>Select</option>
                                          <option >( AL ) Alabama </option>
                                          <option>( AK ) Alaska </option>
                                          <option>( AZ ) Arizona </option>
                                          <option>( AR ) Arkansas </option>
                                          <option>( CA ) California </option>
                                          <option>( CO ) Colorado </option>
                                          <option>( CT ) Connecticut </option>
                                          <option>( DE ) Delaware </option>
                                          <option>( FL ) Florida </option>
                                          <option>( GA ) Georgia </option>
                                          <option>( HI ) Hawaii </option>
                                          <option>( ID ) Idaho </option>
                                          <option>( IL ) Illinois </option>
                                          <option>( IN ) Indiana </option>
                                          <option>( IA ) Iowa </option>
                                          <option>( KS ) Kansas </option>
                                          <option>( KY ) Kentucky </option>
                                          <option>( LA ) Louisiana </option>
                                          <option>( ME ) Maine </option>
                                          <option>( MD ) Maryland </option>
                                          <option>( MA ) Massachusetts </option>
                                          <option>( MI ) Michigan </option>
                                          <option>( MN ) Minnesota </option>
                                          <option>( MS ) Mississippi </option>
                                          <option>( MO ) Missouri </option>
                                          <option>( MT ) Montana </option>
                                          <option>( NE ) Nebraska </option>
                                          <option>( NV ) Nevada </option>
                                          <option>( NH ) New Hampshire </option>
                                          <option>( NJ ) New Jersey </option>
                                          <option>( NM ) New Mexico </option>
                                          <option>( NY ) New York </option>
                                          <option>( NC ) North Carolina </option>
                                          <option>( ND ) North Dakota </option>
                                          <option>( OH ) Ohio </option>
                                          <option>( OK ) Oklahoma </option>
                                          <option>( OR ) Oregon </option>
                                          <option>( PA ) Pennsylvania </option>
                                          <option>( RI ) Rhode Island </option>
                                          <option selected>( SC ) South Carolina </option>
                                          <option>( SD ) South Dakota </option>
                                          <option>( TN ) Tennessee </option>
                                          <option>( TX ) Texas </option>
                                          <option>( UT ) Utah </option>
                                          <option>( VT ) Vermont </option>
                                          <option>( VA ) Virginia </option>
                                          <option>( WA ) Washington </option>
                                          <option>( WV ) West Virginia </option>
                                          <option>( WI ) Wisconsin </option>
                                          <option>( WY ) Wyoming </option>
                                          </select></td>
								
								<td><input type="date" class="" value="08/06/1985"></td>
							
							
								
								<td><input type="checkbox"></td>
								<td><input type="text" ></td>
								<td><input type="button" class="btn btn-success" value="Add More Details"  data-toggle="modal" data-target="#myModal" style="white-space:nowrap;"></td>
							</tr>
							
							<tr>

								<td><input type="checkbox" class=""></td>
								<td><input type="text" value="Bob"></td>
								<td><input type="text"></td>
								<td><input type="text" value="Rich"></td>
								<td>
								<select >
										<option>Select</option>
                                          <option>Capt </option>
                                          <option>Dr </option>
                                          <option>Mayor </option>
                                          <option>Miss </option>
                                          <option selected>Mr </option>
                                          <option>Mrs </option>
                                          <option>Ms </option>
                                          <option>| </option>
                                          <option>|| </option>
                                          <option>||| </option>
                                          <option>Jr </option>
                                          <option>Sr </option>
                                          </select>
								</td>
								<td><input type="text" value="11-11-5555"></td>
								<td><input type="text" value="1342 Roper Mtn Rd., Suite 101"></td>
								<td><input type="text"></td>
								<td><input type="text" vlaue="Green Ville"></td>
								<td><select >
										<option>Select</option>
                                          <option >( AL ) Alabama </option>
                                          <option>( AK ) Alaska </option>
                                          <option>( AZ ) Arizona </option>
                                          <option>( AR ) Arkansas </option>
                                          <option>( CA ) California </option>
                                          <option>( CO ) Colorado </option>
                                          <option>( CT ) Connecticut </option>
                                          <option>( DE ) Delaware </option>
                                          <option>( FL ) Florida </option>
                                          <option>( GA ) Georgia </option>
                                          <option>( HI ) Hawaii </option>
                                          <option>( ID ) Idaho </option>
                                          <option>( IL ) Illinois </option>
                                          <option>( IN ) Indiana </option>
                                          <option>( IA ) Iowa </option>
                                          <option>( KS ) Kansas </option>
                                          <option>( KY ) Kentucky </option>
                                          <option>( LA ) Louisiana </option>
                                          <option>( ME ) Maine </option>
                                          <option>( MD ) Maryland </option>
                                          <option>( MA ) Massachusetts </option>
                                          <option>( MI ) Michigan </option>
                                          <option>( MN ) Minnesota </option>
                                          <option>( MS ) Mississippi </option>
                                          <option>( MO ) Missouri </option>
                                          <option>( MT ) Montana </option>
                                          <option>( NE ) Nebraska </option>
                                          <option>( NV ) Nevada </option>
                                          <option>( NH ) New Hampshire </option>
                                          <option>( NJ ) New Jersey </option>
                                          <option>( NM ) New Mexico </option>
                                          <option>( NY ) New York </option>
                                          <option>( NC ) North Carolina </option>
                                          <option>( ND ) North Dakota </option>
                                          <option>( OH ) Ohio </option>
                                          <option>( OK ) Oklahoma </option>
                                          <option>( OR ) Oregon </option>
                                          <option>( PA ) Pennsylvania </option>
                                          <option>( RI ) Rhode Island </option>
                                          <option selected>( SC ) South Carolina </option>
                                          <option>( SD ) South Dakota </option>
                                          <option>( TN ) Tennessee </option>
                                          <option>( TX ) Texas </option>
                                          <option>( UT ) Utah </option>
                                          <option>( VT ) Vermont </option>
                                          <option>( VA ) Virginia </option>
                                          <option>( WA ) Washington </option>
                                          <option>( WV ) West Virginia </option>
                                          <option>( WI ) Wisconsin </option>
                                          <option>( WY ) Wyoming </option>
                                          </select></td>
								
								<td><input type="date" class="" value="08/06/1985"></td>
							
							
								
								<td><input type="checkbox"></td>
								<td><input type="text" ></td>
								<td><input type="button" class="btn btn-success" value="Add More Details"  data-toggle="modal" data-target="#myModal" style="white-space:nowrap;"></td>
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
	// datepickerintialise();
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

function addemployment()
{
	$new_row = '<tr>'

		+'<td><input type="text" class="datepicker form-control form-height " id="inputEmail3" placeholder=""></td>'
		+'<td><input type="text" class="datepicker form-control form-height " id="inputEmail3" placeholder=""></td>'
		+'<td><select class="form-control form-height "><option>Select</option><option>Plan Class1</option><option>Plan Class2</option></select></td>'
		
		+'<td><select class="form-control form-height "><option>Select</option><option>FT</option><option>PT</option></select></td>'
		+'<td><input type="checkbox"></td>'
		
		+'<td><textarea class="form-control form-height "></textarea></td>'
		+'<td><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>'
	+'</tr>';
	
	
}

function addRow() {

	var table = document.getElementById("employment_period_div").getElementsByTagName('tbody')[0];;

	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);

	var cell1 = row.insertCell(0);
	var element1 = document.createElement("input");
	element1.type = "date";
	element1.className ="datepicker form-control";
	cell1.appendChild(element1);

	var cell2 = row.insertCell(1);
	var element2 = document.createElement("input");
	element2.type = "date";
	element2.className ="datepicker form-control";
	cell2.appendChild(element2);

		var cell3 = row.insertCell(2);
		 var element3 = document.createElement("select");
		 element3.className ="form-control";
	    //element2.type = "select";
	    var option1 = '';
	    var option1 = document.createElement("option");
	    option1.innerHTML = "Option1";
	    option1.value = "1";
	    element3.add(option1, null);
	    var option2 = '';
	    var option2 = document.createElement("option");
	    option2.innerHTML = "Option2";
	    option2.value = "2";
	    element3.add(option2, null);
	    cell3.appendChild(element3);


		var cell4 = row.insertCell(3);
		 var element4 = document.createElement("select");
		 element4.className ="form-control";
	   var option3 = document.createElement("option");
	    option3.innerHTML = "FT";
	    option3.value = "1";
	    element4.add(option3, null);
	    var option4 = document.createElement("option");
	    option4.innerHTML = "PT";
	    option4.value = "2";
	    element4.add(option4, null);
	    cell4.appendChild(element4);

	    var cell5 = row.insertCell(4);
		var element5 = document.createElement("input");
		element5.type = "checkbox";
		element5.name="chkbox[]";
		cell5.appendChild(element5);


		var cell6 = row.insertCell(5);
		var element6 = document.createElement("textarea");
		element6.type = "";
		element6.name="";
		cell6.appendChild(element6);

		var cell7 = row.insertCell(6);
		var rowcount = rowCount + 1
		cell7.innerHTML = '<a  onclick="deleteRow('+rowcount+')" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete this row" style="margin-left: 13px;color:red;cursor:pointer;"><i class="fa fa-times" aria-hidden="true"></i></a>';

// datepickerintialise();

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
	element2.className ="";
	cell2.appendChild(element2);

	var cell3 = row.insertCell(2);
	var element3 = document.createElement("input");
	element3.type = "text";
	element3.className ="";
	cell3.appendChild(element3);
	
	
	var cell4 = row.insertCell(3);
	var element4 = document.createElement("input");
	element4.type = "text";
	element4.className ="";
	cell4.appendChild(element4);
	
		var cell5 = row.insertCell(4);
		 var element5 = document.createElement("select");
		// element5.className ="form-control";
	    //element2.type = "select";
	    var option1 = '';
	    var option1 = document.createElement("option");
	    option1.innerHTML = "Select";
	    option1.value = "1";
	    element5.add(option1, null);
	    var option2 = '';
	    var option2 = document.createElement("option");
	    option2.innerHTML = "Mr";
	    option2.value = "2";
	    element5.add(option2, null);
	    cell5.appendChild(element5);


		var cell6 = row.insertCell(5);
	var element6 = document.createElement("input");
	element6.type = "text";
	element6.className ="";
	cell6.appendChild(element6);
	
	
	var cell7 = row.insertCell(6);
	var element7 = document.createElement("input");
	element7.type = "text";
	element7.className ="";
	cell7.appendChild(element7);
	
	var cell8 = row.insertCell(7);
	var element8 = document.createElement("input");
	element8.type = "text";
	element8.className ="";
	cell8.appendChild(element8);
	
	var cell9 = row.insertCell(8);
	var element9 = document.createElement("input");
	element9.type = "text";
	element9.className ="";
	cell9.appendChild(element9);
		
		var cell10 = row.insertCell(9);
		 var element10 = document.createElement("select");
		// element10.className ="form-control";
	    //element2.type = "select";
	    var option1 = '';
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
	    element10.add(option3, null);
		
		
	    cell10.appendChild(element10);

		var cell11 = row.insertCell(10);
	var element11 = document.createElement("input");
	element11.type = "date";
	element11.className ="";
	cell11.appendChild(element11);
	
	var cell12 = row.insertCell(11);
	var element12 = document.createElement("input");
	element12.type = "checkbox";
	element12.className ="";
	cell12.appendChild(element12);
	
	var cell13 = row.insertCell(12);
	var element13 = document.createElement("input");
	element13.type = "text";
	element13.className ="";
	cell13.appendChild(element13);
	
//	var cell14 = row.insertCell(13);
//	var element14 = document.createElement("input");
//	element14.type = "button";
//	element14.className ="btn btn-success";
//	cell14.appendChild(element14);
		var cell14 = row.insertCell(13);
		var rowcount = rowCount + 1
		cell14.innerHTML = '<button  data-toggle="modal" data-target="#myModal" class="btn btn-success" style="white-space:nowrap;">Add More Details</button>';

// datepickerintialise();

}

function deleteRow(rowID) {
	try {
	var table = document.getElementById("employment_period_div");
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
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="row">
						<div class="box">
							<div class="box-header with-border ">
								<h3 class="box-title col-xs-6">Employment Periods</h3>
								<div class="col-xs-6 pull-right">
									<button onclick="addRow();" type="reset"
										class="btn btn-success btn-sm filter-btn-search pull-right">
										<i class="fa fa-plus" aria-hidden="true"
											style="margin-right: 5px;"></i>Add Employment Period
									</button>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body table-responsive">

								<table id="employment_period_div"
									class="table table-bordered table-hover">
									<thead>
										<tr class="tr-grid-header">

											<th>Hire Date</th>
											<th>Termination Date</th>

											<th>Medical Plan Class Name</th>
											<th>FT/PT Status</th>
											<th>Don't Apply Waiting Period</th>
											<th>Notes</th>
											<th>Action</th>

										</tr>
									</thead>
									<tbody>




									</tbody>

								</table>
							</div>

						</div>

					</div>
					
					<div class="row">
						<div class="box">
							<div class="box-header with-border ">
								<h3 class="box-title col-xs-6">Non-Consistent Employee
									Contributions</h3>

							</div>
							<!-- /.box-header -->
							<div class="box-body ">
								<p class="highlight-fancy">
									<span class="status"><i class="fa fa-info-circle"
										aria-hidden="true"></i></span> Enter the monthly cost for
									coverage offered if the employee was in non-consistent cost
									class.
								</p>
								<div class="">
									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Jan </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>
									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Feb </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>
									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Mar </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>
									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Apr </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> May </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Jun </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Jul </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Aug </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Sep </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Oct </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Nov </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>

									<div class="col-md-3 margin-bottom-10">
										<div class="input-group input-icon right">
											<span class="input-group-addon"> Dec </span> <input
												id="email" class="input-error form-control" type="text"
												value="">
										</div>

									</div>


								</div>
							</div>

						</div>

					</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>