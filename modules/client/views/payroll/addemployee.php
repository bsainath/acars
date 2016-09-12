
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
	element1.type = "text";
	element1.className ="datepicker form-control";
	cell1.appendChild(element1);

	var cell2 = row.insertCell(1);
	var element2 = document.createElement("input");
	element2.type = "text";
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
		<h3 class="box-title col-xs-6">Add Employee Record - ABC Corp <small>(ACA-10000-1)</h3>
		<div class="col-xs-6 pull-right padding-right-0">
			<a class=" btn bg-orange btn-flat btn-social pull-right"> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		<span style=" cursor: pointer;margin-top:10px;" class="col-xs-12 pull-right">
		<a
			href="<?php echo Yii::$app->homeUrl;?>client/payroll" class="pull-right">Back to Payroll
				Data</a></span>

	</div>

	<div class="col-xs-12 header-new-main width-98 hide">
		<span class="header-icon-band"><i class="fa fa-file-text-o icon-band"
			style="font-weight: lighter;"></i></span>
		<p class="sub-header-new">You can add employee from this screen.</p>
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
										id="inputEmail3" placeholder="">
								</div>
							</div>

							<div class="form-group col-sm-6">
								<div class="">
									<label class="control-label"><h4>Legal Middle Initial</h4></label>
									<input type="text" class="form-control form-height"
										id="inputEmail3" placeholder="">
								</div>
							</div>

							<div class="form-group col-sm-6">
								<div class="">
									<label class="control-label"><h4>Legal Last Name</h4></label> <input
										type="text" class="form-control form-height" id="inputEmail3"
										placeholder="">
								</div>
							</div>
							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>Suffix</h4></label>
									<select class="form-control form-height">
										<option>Select</option>
                     <?php foreach ($suffix as  $key => $value) {?>
                     <option><?php echo $value; ?> </option>
                     <?php } ?>
                     </select>
								</div>
							</div>


							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>Social
											Security Number</h4></label> <input type="text"
										class="form-control form-height" id="inputEmail3"
										placeholder="">
								</div>
							</div>

							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>Street
											Address 1</h4></label> <input type="text"
										class="form-control form-height" id="inputEmail3"
										placeholder="">
								</div>
							</div>
						</div>
						<div class="col-md-12">



							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>Street
											Address 2</h4></label> <input type="text"
										class="form-control form-height" id="inputEmail3"
										placeholder="">
								</div>
							</div>


							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>City or Town</h4></label>
									<input type="text" class="form-control form-height"
										id="inputEmail3" placeholder="">
								</div>
							</div>

							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>State</h4></label>
									<select class="form-control form-height">
										<option>Select</option>
                     <?php foreach ($usStates as  $key => $value) {?>
                     <option>( <?php echo $key;?> ) <?php echo $value; ?> </option>
                     <?php } ?>
                     </select>
								</div>
							</div>

							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>Zip code</h4></label>
									<input type="text" class="form-control form-height numbers" maxlength="5"
										id="inputEmail3" placeholder="">

								</div>
							</div>

							<div class="form-group col-sm-6">
								<div class="">
									<label for="inputEmail3" class="control-label"><h4>Date of
											Birth</h4></label> <input type="text"
										class="datepicker form-control form-height " id="inputEmail3"
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
							<div class="box-header with-border row">
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



					<div class=" row">

						<div class="box-footer pull-right">
							<a class="btn btn-default "
								href="<?php echo Yii::$app->homeUrl;?>client/payroll">Cancel</a>
								
							<a class="btn btn-success " href="<?php echo Yii::$app->homeUrl;?>client/payroll">Save and Exit</a>
<button type="submit" class="btn btn-success ">Save and Continue</button>

						</div>
					</div>

				</div>
				<!-- /.box-body -->

				<!-- /.box-footer -->
			</form>
		</div>
	</div>
</div>