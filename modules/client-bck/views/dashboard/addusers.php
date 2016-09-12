<style>
.red {
	color: red;
}

.center {
	text-align: center;
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

<div class="box box-warning">


	<div class="box-header with-border">
	<div class="col-md-12">
              <h3 class="box-title col-xs-6">Add User</h3>
             <div class="col-xs-6 pull-right">
			<a class=" btn bg-orange btn-flat btn-social pull-right"> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		</div>
            </div>
			</div>

	<div class="col-xs-12 header-new-main width-98 hide">
		<span class="header-icon-band"><i class="fa fa-file-text-o icon-band"
			style="font-weight: lighter;"></i></span>
		<p class="sub-header-new">New user can be added from below screen.</p>
	</div>

	<!-- /.box-header -->
	<div class="box-body">

		<div class="col-md-12">

			<div class="col-sm-6">
				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>
								First Name<span class="red">*</span>
							</h4> </label>
					</div>
					<div class="col-sm-6">
						<input type="text" class="form-control form-height"
							id="inputEmail3" placeholder="">

					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>
								Last Name<span class="red">*</span>
							</h4> </label>
					</div>
					<div class="col-sm-6">
						<input type="text" class="form-control form-height"
							id="inputEmail3" placeholder="">

					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>
								Email<span class="red">*</span>
							</h4> </label>
					</div>
					<div class="col-sm-6">
						<input type="text" class="form-control form-height"
							id="inputEmail3" placeholder="">

					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>Phone</h4> </label>
					</div>
					<div class="col-sm-6">
						<input type="text" class="form-control form-height"
							id="inputEmail3" placeholder="">

					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>
								What describes your role with this company?<span class="red">*</span>
							</h4> </label>
					</div>
					<div class="col-sm-6">
						<input type="text" class="form-control form-height"
							id="inputEmail3" placeholder="">

					</div>
				</div>

			</div>
			<div class="col-sm-6">

				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>Address 1</h4> </label>
					</div>
					<div class="col-sm-6">
						<input type="text" class="form-control form-height"
							id="inputEmail3" placeholder="">

					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>Address 2 (Apt#, Suite)</h4> </label>
					</div>
					<div class="col-sm-6">
						<input type="text" class="form-control form-height"
							id="inputEmail3" placeholder="">

					</div>
				</div>

				
					<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>State</h4> </label>
					</div>
					<div class="col-sm-6">
						<select class="form-control form-height">
										<option>Select</option>
                     <?php foreach ($usStates as  $key => $value) {?>
                     <option>( <?php echo $key;?> ) <?php echo $value; ?> </option>
                     <?php } ?>
                     </select>

					</div>
				</div>
				
				
				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>City</h4> </label>
					</div>
					<div class="col-sm-6">
						<input type="text" class="form-control form-height"
							id="inputEmail3" placeholder="">

					</div>
				</div>

			
				<div class="form-group row">
					<div class="col-sm-6">
						<label class="control-label"><h4>Zip code</h4> </label>
					</div>
					<div class="col-sm-6">
						<input type="text" class="form-control form-height numbers" maxlength="5"
							id="inputEmail3" placeholder="">

					</div>
				</div>

			</div>


			<div class="">

				<div class="col-xs-12 panel-0">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title col-sm-10">Company Access</h3>



						</div>

						<!-- /.box-header -->
						<div class="box-body table-responsive">
							<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>Name</th>
								<th>Abc Corp</th>
							
								
								<th>Raymond Corp</th>
								<th>Obsorn Corp</th>
								<th>Rest Corp</th>
								
								

							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td>Company Admin</td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
							</tr>
							
							<tr>
									<td>View Company</td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
							</tr>
							<tr>
								<td>Sign Document</td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
							</tr>
							<tr>
								<td>View HIPPA data</td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
							</tr>
							<tr>
								<td>Edit HIPPA data</td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
							</tr>
							<tr>
								<td>Approve E-File</td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
							</tr>
							<tr>
								<td>Add Payroll Data</td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
							</tr>
							<tr>
								<td>Edit Payroll Data</td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
							</tr>
																			
						</tbody>

					</table>
						</div>

						<!-- /.box-body -->

					</div>
					<!-- /.box -->
				</div>

			</div>
			
			
			<div class="col-sm-12">
			 <div class="box-footer pull-right" >
			 	<a class="btn btn-success " href="<?php echo Yii::$app->homeUrl;?>client/dashboard/users">Save</a>
										
              <a  class="btn btn-default " href="<?php echo Yii::$app->homeUrl;?>client/dashboard/users">Cancel</a>
											
                 </div>
			</div>
		</div>
	</div>
	<!-- /.box-body -->
</div>