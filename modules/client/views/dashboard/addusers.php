<style>
.red {
	color: red;
}

.center {
	text-align: center;
}
</style>

<script>
$(document).ready(function(){
			    $('#exampleAddusers').DataTable({

			    	"aoColumnDefs": [

										{

										"bSortable": false,

										"aTargets": [ -1,-2,-3,-4,-5,-6 ]

										}

										],
										
											"bFilter" : false,               
			    	"bLengthChange": false
			    });
			});
</script>

<?php

$usStates = array(
    "AL" => "",
    "AK" => "",
    "AZ" => "",
    "AR" => "",
    "CA" => "",
    "CO" => "",
    "CT" => "",
    "DE" => "",
    "FL" => "",
    "GA" => "",
    "HI" => "",
    "ID" => "",
    "IL" => "",
    "IN" => "",
    "IA" => "",
    "KS" => "",
    "KY" => "",
    "LA" => "",
    "ME" => "",
    "MD" => "",
    "MA" => "",
    "MI" => "",
    "MN" => "",
    "MS" => "",
    "MO" => "",
    "MT" => "",
    "NE" => "",
    "NV" => "",
    "NH" => "",
    "NJ" => "",
    "NM" => "",
    "NY" => "",
    "NC" => "",
    "ND" => "",
    "OH" => "",
    "OK" => "",
    "OR" => "",
    "PA" => "",
    "RI" => "",
    "SC" => "",
    "SD" => "",
    "TN" => "",
    "TX" => "",
    "UT" => "",
    "VT" => "",
    "VA" => "",
    "WA" => "",
    "WV" => "",
    "WI" => "",
    "WY" => ""
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
              <h3 class="box-title col-xs-6">Add User - ABC Corp <small>(ACA-10000-1)</small></h3>
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
                     <option> <?php echo $key;?>  <?php echo $value; ?> </option>
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
						<div class="box-header with-border padding-left-0">
							<h3 class="box-title col-sm-10 padding-left-0">Company Access</h3>



						</div>

						<!-- /.box-header -->
						<div class="box-body table-responsive padding-left-0 padding-right-0">
							<table id="exampleAddusers" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>Name</th>
								<th>Company Admin</th>
								<th>View Company</th>
								<th>Sign Document</th>
								<th>View HIPPA data</th>
								<th>Edit HIPPA data</th>
								<th>Approve E-File</th>
								<th>Upload Document</th>
								<th>Download Document</th>
								
								
								

							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td>Abc Corp</td>
								<td><input type="checkbox" /></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
								<td><input type="checkbox"/></td>
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