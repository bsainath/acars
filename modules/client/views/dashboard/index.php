<script type="text/javascript">
$(function() {
	$( "#dashboard-menu-id" ).addClass( "active" );
}); 
</script>

<?php  $baseurl=Yii::$app->getUrlManager()->getBaseUrl(true);?>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<style>
.info-box-content{
	padding: 15px 10px;
	margin-left: 70px;
	text-align: center
}
.fa-rotate-45 {
	-webkit-transform: rotate(90deg);
	-moz-transform: rotate(90deg);
	-ms-transform: rotate(90deg);
	-o-transform: rotate(90deg);
	transform: rotate(90deg);
}

.info-box {
	display: block;
	min-height: 70px;
	background: #fff;
	width: 100%;
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
	border-radius: 0px;
	margin-bottom: 15px;
}

.info-box1 {
	min-height: 90px !important;
}

.info-box-icon {
	border-top-left-radius: 2px;
	border-top-right-radius: 0;
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 2px;
	display: block;
	float: left;
	height: 70px;
	width: 70px;
	text-align: center;
	font-size: 45px;
	line-height: 70px;
	background: rgba(0, 0, 0, 0.2);
	color: gray;
}

.info-box-icon1 {
	height: 90px !important;
	width: 70px !important;
	text-align: center !important;
	color: white !important;
	line-height: 90px !important;
}

.info-box-content1 {
	padding: 5px 10px!important;
	margin-left: 70px!important;
	text-align: left!important;
}




.info-box-number {
	display: block;
	font-weight: bold;
	font-size: 18px;
	color: #3c8dbc;
}

.content {
	background: white;
}

.small-box-footer {
	width: 50%;
}

.inner {
	height: 100px;
}

.small-box .icon {
	right: auto;
}
/*
.details{
background-color:grey;
}*/
.details-first {
	background-color: lightgrey;
}

.details-second {
	background-color: skyblue;
}

.details-third {
	background-color: lightgrey;
}

.details-color {
	/*color:white;*/
	padding-left: 25px;
}

.details-color-down {
	color: white;
	padding-top: 7px;
	padding-left: 47px;
}

.border-line {
	border-style: groove;
	border-width: medium;
	height: 36px;
	border-radius: 19px;
	width: 76%;
	margin-top: 17px;
}

.border-line-day {
	border-style: groove;
	border-width: medium;
	height: 44px;
	width: 76%;
	margin-top: 17px;
	color: white;
	padding-left: 10px;
	padding-top: 7px;
}

.letter-size {
	font-size: 30px;
}

.description {
	padding-top: 18px;
	/* padding-right: 0px; */
	padding-left: 14px;
	padding-bottom: 18px;
	height: 124px;
}

.calender-font {
	font-size: 100px;
	padding-top: 30px;
	padding-bottom: 30px;
}

.content-wrapper {
	min-height: 800px !important;
}

.highcharts-button {
	display: none;
}

.hr-tag {
	margin-top: 12px !important;
	margin-bottom: 12px !important;
	border: 0 !important;
	border-top: 2px solid #333 !important;
}

.paragraph {
	/* color: black;
font-weight: initial;
 font-size: 13px;*/
	
}

.sky-primary-blue {
	background: #0076BC;
	border-radius: 12px;
}

.color-white {
	color: white;
}

.padding-top-inner {
	padding-top: 28px !important;
}

.label-1 {
	padding: 0;
	padding-top: 5px;
	font-weight: 600;

	/* font-size: 13px; 
    color: black;
    background-color: rgba(211, 211, 211, 0.47);;
    text-align: right;
    padding-bottom: 5px; */
}

.label-2 {
	font-weight: 400;
	/* text-align: left;
    font-size: 13px;
    color: black;*/
}

.color-white-year {
	color: white;
	margin-bottom: 0 !important;
	font-size: 27px !important;
}

.color-white-year-service {
	color: white;
	margin-bottom: 0 !important;
	font-size: 27px !important;
	margin-top: 0px !important;
}

.sky-medium-blue {
	background: #05A6DF;
	border-radius: 12px;
}

.sky-lite-blue {
	background: #58C1E9;
	border-radius: 12px;
}

.sky-lite-green {
	background: #A3CF5E;
	border-radius: 12px;
}

.step-height {
	padding: 0px;
	background-color: lightgray;
	padding-bottom: 20px;
	margin-bottom: 18px;
}

.label-8 {
	padding-top: 5px;
	padding-bottom: 5px;
}

@media only screen and (max-width: 1199px) {
	.adjust_step_height {
		min-height: 200px;
	}
}

@media only screen and (max-width: 1270px) {
	.adjust_step_height {
		min-height: 500px;
	}
}

@media only screen and (min-width: 1280px) {
	.adjust_step_height {
		min-height: 495px;
	}
}
}
ul.box_ul{
list-style: none;
    padding: 0px;
}
.box_ul li:before
{
    content: '-';
    margin: 5px;   /* any design */
}
</style>
<div class="box box-warning container-fluid">

	<div class="box-header with-border padding-left-0 padding-right-0">
		<h3 class="box-title col-xs-6 padding-left-0">
			ABC Corp <small>(ACA-10000-1)</small>
		</h3>
		<div class="col-xs-6 pull-right padding-right-0">
			<span class="col-xs-7 pull-right padding-right-0"
				style="font-size: 18px; text-align: right;"><b>Need help? Call
					1-800-888-8888</b></span>

		</div>
	</div>

	<div class="col-xs-12 header-new-main width-98 hide">
		<span class="header-icon-band"><i class="fa fa-file-text-o icon-band"
			style="font-weight: lighter;"></i></span>
		<p class="sub-header-new">You can see the statistics of company from
			this screen.</p>
	</div>

	<div class="row" style="margin-top: 21px;">
		<div class="col-md-3 col-sm-6 col-xs-12 padding-right-0">
			<div class="info-box" title="Current ACA Reporting Year">
				<span class="info-box-icon "><i class="fa fa-calendar-check-o"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Current ACA Reporting Year</span> <span
						class="info-box-number">2016</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- ./col -->
		<div class="col-md-3 col-sm-6 col-xs-12 padding-right-0">
			<div class="info-box" title="Reporting Package Purchased">
				<span class="info-box-icon "><i class="fa  fa-user"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Reporting Package Purchased</span> <span
						class="info-box-number">True Full Service</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- ./col -->
		<div class="col-md-3 col-sm-6 col-xs-12 padding-right-0">
			<div class="info-box"  title="Deadline to Provide Employees 1095">
				<span class="info-box-icon "><i class="fa fa-file-o"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Deadline to Provide Employees 1095</span>
					<span class="info-box-number">14 Days</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- ./col -->
		<div class="col-md-3 col-sm-6 col-xs-12 ">
			<div class="info-box"  title="Deadline to E-File with IRS">
				<span class="info-box-icon "><i class="ion-flash fa-rotate-45 "></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Deadline to E-File with IRS</span> <span
						class="info-box-number">74 Days</span>
				</div>
				<!-- /.info-box-content -->
			</div>
			<!-- /.info-box -->
		</div>
		<!-- ./col -->
	</div>

	<div class="col-md-12 padding-left-0 padding-right-0">
		<div class="col-md-8 padding-left-0">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h5 class="box-title" style="font-size: 18px !important;">Project
						Stage</h5>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool"
							data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool"
							data-widget="remove">
							<i class="fa fa-times"></i>
						</button>
					</div>
				</div>
				<div class="box-body">


					<div class="table-responsive">
						<table class="table no-margin">
							<thead>
								<tr>
									<th>Item</th>
									<th>Status</th>
									<th>Date of Completion</th>
									<th style="width: 32%;">Progress Bar</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Sign BAA</td>
									<td><span class="label label-success">Completed</span></td>

									<td>10/01/16</td>
									<td><div class="progress sm">
											<div class="progress-bar progress-bar-green"
												style="width: 100%"></div>
										</div></td>
								</tr>
								<tr>
									<td>Schedule Discovery Session</td>
									<td><span class="label label-success">Completed</span></td>
									<td>10/02/16</td>
									<td><div class="progress sm">
											<div class="progress-bar progress-bar-green"
												style="width: 100%"></div>
										</div></td>
								</tr>
								<tr>
									<td>Discovery Session with Account Manager</td>
									<td><span class="label label-info">Processing</span></td>

									<td>10/04/16</td>
									<td><div class="progress sm">
											<div class="progress-bar progress-bar-aqua"
												style="width: 30%"></div>
										</div></td>
								</tr>
								<tr>
									<td>Upload Payroll Data</td>
									<td><span class="label label-warning">Pending</span></td>
									<td>10/05/16</td>
									<td></td>
								</tr>
								<tr>
									<td>Upload Medical Enrollment Data</td>
									<td><span class="label label-warning">Pending</span></td>

									<td>10/05/16</td>
								</tr>
								<tr>
									<td>Data Validation</td>
									<td><span class="label label-warning">Pending</span></td>


									<td>10/10/16</td>
									<td></td>
								</tr>
								<tr>
									<td>General 1095 Forms</td>
									<td><span class="label label-warning">Pending</span></td>

									<td>01/16/17</td>
									<td></td>
								</tr>
								<tr>
									<td>Approve 1095 Forms</td>
									<td><span class="label label-warning">Pending</span></td>

									<td>01/16/17</td>
									<td></td>
								</tr>
								<tr>
									<td>Approve for e-File</td>
									<td><span class="label label-warning">Pending</span></td>

									<td>01/16/17</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>



				</div>


			</div>


		</div>

		<div class="col-md-4 padding-left-0">

			<div class="box box-primary">
				<div class="box-header with-border">
					<h5 class="box-title" style="font-size: 18px !important;">Full
						Service Support</h5>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool"
							data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool"
							data-widget="remove">
							<i class="fa fa-times"></i>
						</button>
					</div>
				</div>

				<div class="box-body">
					<div class="col-xs-4 padding-left-0 padding-right-0">
						<img class="img-responsive img-circle"
							style="height: 100px; width: 100px;"
							src="<?php echo $baseurl;?>/Images/user.jpg">
					</div>
					<div class="col-xs-8 padding-left-0 padding-right-0">
						<div style="padding: 21px;">
							<b>Amanda Brock</b></br> <i>Senior Account Manager</i></br>
							888-888-8888
						</div>
					</div>
<div class="col-lg-12 padding-left-0 padding-right-0 col-md-hidden" style="
    height: 98px;
">

</div>

					<div class="col-xs-12 padding-left-0 padding-right-0">

						<div class="col-xs-12 padding-left-0 padding-right-0"
							style="margin-top: 10px; padding: 10px;">
							<div class="col-xs-6 padding-left-0">
								<b>Client Support Hotline:</b>
							</div>

							<div class="col-xs-6 padding-left-0 padding-right-0 ">
								<span class="pull-right">888-888-8888</span>
							</div>
						</div>
						<div class="col-xs-12 padding-left-0 padding-right-0"
							style="padding: 10px;">
							<div class="col-xs-6 padding-left-0">
								<b>Client Support Email:</b>
							</div>

							<div class="col-xs-6 padding-left-0 padding-right-0 ">
								<span class="pull-right">support@acareporting.com</span>
							</div>
						</div>
						<div class="col-xs-12 padding-left-0 padding-right-0"
							style="margin-top: 10px; padding: 10px;">
							<div class="info-box  info-box1 bg-aqua" style="margin-bottom: 0px;">
								<span class="info-box-icon info-box-icon1"><i
									class="glyphicon glyphicon-pencil"></i></span>

								<div class="info-box-content info-box-content1">
									<span class="info-box-text">Sign Client Agreements</span>

									<div class="progress">
										<div class="progress-bar" style="width: 100%"></div>
									</div>
									<span class="progress-description" title="Please click the button to securely sign our client agreement document."> Please click the button to
										securely sign our client agreement document. </span>
								<button style="color:black;">Continue</button>
								</div>

							</div>


							<!-- /.info-box-content -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<div class="col-xs-12 padding-left-0 padding-right-0">
	<div class="col-md-4  padding-right-0">
	<div class="box box-primary">
				<div class="box-header with-border">
					<h5 class="box-title" style="font-size: 18px !important;">Upload Secure Documents</h5>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool"
							data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool"
							data-widget="remove">
							<i class="fa fa-times"></i>
						</button>
					</div>
				</div>
					<div class="box-body">
					<div class="form-group">
                 <div class="">
                  <label class="control-label"><h4>Choose Document</h4></label>
                     <input type="file" class="form-control " id="inputEmail3" placeholder="">
                  </div>
                </div>
                <div class="form-group" style="margin-bottom:10px;">
				<div class="">
				<div class=" ">
				<button type="submit" class="btn btn-primary btn-sm ">Submit</button>
					
				</div>
				</div>
				</div>
	</div>
	 
	</div>
	</div>
	
	<div class="col-md-4  padding-right-0">
	<div class="box box-primary">
				<div class="box-header with-border">
					<h5 class="box-title" style="font-size: 18px !important;">Download Secure Documents</h5>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool"
							data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool"
							data-widget="remove">
							<i class="fa fa-times"></i>
						</button>
					</div>
				</div>
				<div class="box-body">
				
				
					<h5><u>Securely download documents including:</u></h5>
					
					<ul class="box_ul" style="list-style: none;
    padding: 0px;">
					  <li>Completed 1095 forms</li>
					  <li>Completed 1094 forms</li>
					  <li>Change request documents</li>
					  <li>IRS Acknowledgements</li>
					</ul>
					<div class="form-group" style="margin-bottom:10px;">
				<div class="">
				<div class=" ">
				<button type="submit" class="btn btn-primary btn-sm ">Continue to secure area</button>
					
				</div>
				</div>
				</div>
	</div>
	</div>
	</div>
	
	<div class="col-md-4 ">
	<div class="box box-primary">
				<div class="box-header with-border">
					<h5 class="box-title" style="font-size: 18px !important;">Video</h5>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool"
							data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool"
							data-widget="remove">
							<i class="fa fa-times"></i>
						</button>
					</div>
				</div>
				<div class="box-body">
	 <iframe width="100%"src="https://www.youtube.com/embed/vFIy7wSAnHg" frameborder="0" allowfullscreen></iframe></div>
  	</div>
	</div>
	</div>

</div>