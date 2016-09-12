
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

		+'<td><input type="date" class="form-control form-height " id="inputEmail3" placeholder=""></td>'
		+'<td><input type="date" class="form-control form-height " id="inputEmail3" placeholder=""></td>'
		+'<td><select class="form-control form-height "><option>Select</option><option>Plan Class1</option><option>Plan Class2</option></select></td>'
		
		+'<td><select class="form-control form-height "><option>Select</option><option>FT</option><option>PT</option></select></td>'
		+'<td><input type="checkbox"></td>'
		
		+'<td><textarea class="form-control form-height "></textarea></td>'
		+'<td><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>'
	+'</tr>';
	
	
}


function addRow() {

	var table = document.getElementById("employment_period_div").getElementsByTagName('tbody')[0];

	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);
	
	var rowcount = rowCount + 1
	
	var cell1 = row.insertCell(0);
	var element1 = document.createElement("input");
	element1.type = "text";
	element1.className ="form-control datepicker";
	cell1.appendChild(element1);

	var cell2 = row.insertCell(1);
	var element2 = document.createElement("input");
	element2.type = "text";
	element2.className ="form-control datepicker";
	cell2.appendChild(element2);

		var cell3 = row.insertCell(2);
		 var element3 = document.createElement("select");
		 element3.className ="form-control";
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
		 element4.className ="form-control hide";
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
		element6.className ="hide form-control datepicker";
		element6.type = "text";
		element6.id = "dob_"+rowcount;
		element6.name="";
		cell6.appendChild(element6);
		
		var cell7 = row.insertCell(6);
		var element7 = document.createElement("textarea");
		cell7.appendChild(element7);

		var cell8 = row.insertCell(7);
		cell8.innerHTML = '<a  onclick="deleteRow('+rowcount+')" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete this row" style="margin-left: 13px;color:red;cursor:pointer;"><i class="fa fa-times" aria-hidden="true"></i></a>';
		datepickerintialise();
}


function deleteRow(rowID) {
	try {
	var table = document.getElementById("employment_period_div");
	var rowCount = table.rows.length;
		var row = table.rows[rowID];
			table.deleteRow(rowID);
		
		

	}catch(e) {
		
	}
}

	</script>



<style>
.header-new-main {
	margin-bottom: 0px;
}

.form-height {
	height: 42px;
}

.flag_checkbox {
	font-family: 'Source Sans Pro', sans-serif;
	font-size: 16px;
	font-weight: 400;
	margin-left: 10px;
}

.margin-bottom-10 {
	margin-bottom: 10px;
}
</style>



<?php
$usStates = array (
		"AL" => "Alabama",
		"AK" => "Alaska",
		"AZ" => "Arizona",
		"AR" => "Arkansas",
		"CA" => "California",
		"CO" => "Colorado",
		"CT" => "Connecticut",
		"DE" => "Delaware",
		"FL" => "Florida",
		"GA" => "Georgia",
		"HI" => "Hawaii",
		"ID" => "Idaho",
		"IL" => "Illinois",
		"IN" => "Indiana",
		"IA" => "Iowa",
		"KS" => "Kansas",
		"KY" => "Kentucky",
		"LA" => "Louisiana",
		"ME" => "Maine",
		"MD" => "Maryland",
		"MA" => "Massachusetts",
		"MI" => "Michigan",
		"MN" => "Minnesota",
		"MS" => "Mississippi",
		"MO" => "Missouri",
		"MT" => "Montana",
		"NE" => "Nebraska",
		"NV" => "Nevada",
		"NH" => "New Hampshire",
		"NJ" => "New Jersey",
		"NM" => "New Mexico",
		"NY" => "New York",
		"NC" => "North Carolina",
		"ND" => "North Dakota",
		"OH" => "Ohio",
		"OK" => "Oklahoma",
		"OR" => "Oregon",
		"PA" => "Pennsylvania",
		"RI" => "Rhode Island",
		"SC" => "South Carolina",
		"SD" => "South Dakota",
		"TN" => "Tennessee",
		"TX" => "Texas",
		"UT" => "Utah",
		"VT" => "Vermont",
		"VA" => "Virginia",
		"WA" => "Washington",
		"WV" => "West Virginia",
		"WI" => "Wisconsin",
		"WY" => "Wyoming" 
);

$suffix = array (
		"Capt" => "Capt",
		"Dr" => "Dr",
		"Mayor" => "Mayor",
		"Miss" => "Miss",
		"Mr" => "Mr",
		"Mrs" => "Mrs",
		"Ms" => "Ms",
		"|" => "|",
		"||" => "||",
		"|||" => "|||",
		"Jr" => "Jr",
		"Sr" => "Sr" 
);

?>



<div class=" box box-warning container-fluid">

	<div class="box-header with-border">
		<h3 class="box-title col-xs-6">Update Medical Plan Enrollment - ABC Corp <small>(ACA-10000-1)</h3>
		
		 <div class="col-xs-6 pull-right padding-right-0">
			<a class=" btn bg-orange btn-flat btn-social pull-right"> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		<span style=" cursor: pointer;margin-top:10px;" class="col-xs-12 pull-right padding-right-0">
		<a
			href="<?php echo Yii::$app->homeUrl;?>client/medical" class="pull-right ">Back to Medical Plan Enrollment Data</a></span>
</div>
	</div>

	<div class="col-xs-12 header-new-main width-98 hide">
		<span class="header-icon-band"><i class="fa fa-file-text-o icon-band"
			style="font-weight: lighter;"></i></span>
		<p class="sub-header-new">You can update employee from this screen.</p>
	</div>
	<div class="col-md-12">
		<div class=" box-info">

			<!-- /.box-header -->
			<!-- form start -->
			<form class="">


				<div class="box-body">
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-12">
							<div class="form-group col-sm-6">
								<div class="">
									<label class="control-label"><h4>Legal First Name</h4></label>
									<input type="text" class="form-control form-height"
										id="inputEmail3" placeholder="" value="Bruce">
								</div>
							</div>

							<div class="form-group col-sm-6">
								<div class="">
									<label class="control-label"><h4>Legal Middle Initial</h4></label>
									<input type="text" class="form-control form-height"
										id="inputEmail3" placeholder="" >
								</div>
							</div>

							<div class="form-group col-sm-6">
								<div class="">
									<label class="control-label"><h4>Legal Last Name</h4></label> <input
										type="text" class="form-control form-height" id="inputEmail3"
										placeholder="" value="Almighty">
								</div>
							</div>
							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>Suffix</h4></label>
									<select class="form-control form-height">
										<option>Select</option>
                     <?php foreach ($suffix as  $key => $value) {?>
                     <option <?php if($value == 'Mr'){ ?>selected<?php }?>><?php echo $value; ?> </option>
                     <?php } ?>
                     </select>
								</div>
							</div>


							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>Social
											Security Number</h4></label> <input type="text"
										class="form-control form-height" id="inputEmail3"
										placeholder="" value="11-11-5555">
								</div>
							</div>

							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>Street
											Address 1</h4></label> <input type="text"
										class="form-control form-height" id="inputEmail3"
										placeholder="" value="1342 Roper Mtn Rd">
								</div>
							</div>
						</div>
						<div class="col-md-12">



							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>Street
											Address 2</h4></label> <input type="text"
										class="form-control form-height" id="inputEmail3"
										placeholder="" value="1342 Roper Mtn Rd">
								</div>
							</div>


							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>City or Town</h4></label>
									<input type="text" class="form-control form-height"
										id="inputEmail3" placeholder="" value="Green Ville">
								</div>
							</div>

							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>State</h4></label>
									<select class="form-control form-height">
										<option>Select</option>
                     <?php foreach ($usStates as  $key => $value) {?>
                     <option <?php if($value == 'AK'){ ?>selected<?php }?>>( <?php echo $key;?> ) <?php echo $value; ?> </option>
                     <?php } ?>
                     </select>
								</div>
							</div>

							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>Zip code</h4></label>
									<input type="text" class="form-control form-height numbers"
										id="inputEmail3" placeholder="" maxlength="5">

								</div>
							</div>

							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>Date of
											Birth</h4></label> <input type="text"
										class="form-control datepicker form-height " id="inputEmail3" value="1992-08-31"
										placeholder="">

								</div>
							</div>

							<div class="form-group col-sm-6">
								<div class="">
									<div class="">
										<label style="margin-top: 15px;"><input type="checkbox"
											value="" id="flag_checkbox"><span
											class="control-label flag_checkbox">Flag this person</span></label>
										<input type="text" class="form-control form-height"
											id="flag_textarea" placeholder="" style="display: none;">

									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="box">
							<div class="box-header with-border row">
								<h3 class="box-title col-xs-6">Enrollment Periods</h3>
								<div class="col-xs-6 pull-right">
									<button onclick="addRow();" type="reset"
										class="btn btn-success btn-sm filter-btn-search pull-right">
										<i class="fa fa-plus" aria-hidden="true"
											style="margin-right: 5px;"></i>Add Enrollment Period
									</button>
								</div>
							</div>
							<!-- /.box-header -->
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
										<tr>
										<td><input type="text" class="form-control datepicker" value="2016-08-31">
										</td>
										<td><input type="text" class="form-control datepicker" value="2016-08-31">
										</td>
										<td>
										<select class="form-control" id="person_type_1" onchange="getpersontype(1)">
										<option value="1">Employee</option>
										<option value="2" selected>Dependent of Employee</option>
										<option value="3">Dependent of a Non-Employee</option>
										<option value="4">Non-Employee Enrolled</option>
										</select></td><td><input class="form-control" id="ssn_1" value="11-11-5555"></td>
										<td><input class="" type="checkbox" name="chkbox[]" checked onclick="getdob(1)" id="dependentdob_1"></td>
										<td><input class="form-control datepicker" type="text" id="dob_1" name="" value="1992-08-31"></td><td><textarea></textarea></td>
										<td><a onclick="deleteRow(1)" data-toggle="tooltip" data-placement="bottom" data-original-title="Delete this row" style="margin-left: 13px;color:red;cursor:pointer;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
										</tr>
										



									</tbody>

								</table>
							</div>

						</div>

					</div>





					



					<div class=" row">

						<div class="box-footer pull-right">
							<a class="btn btn-default "
								href="<?php echo Yii::$app->homeUrl;?>client/medical">Cancel</a>
								
							<a class="btn btn-success " href="<?php echo Yii::$app->homeUrl;?>client/medical">Update and Exit</a>
<button type="submit" class="btn btn-success ">Update and Continue</button>

						</div>
					</div>

				</div>
				<!-- /.box-body -->

				<!-- /.box-footer -->
			</form>
		</div>
	</div>
</div>