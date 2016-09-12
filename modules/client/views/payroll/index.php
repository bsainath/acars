
<!--<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-min.js"></script> 
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/globalize/0.1.1/globalize.min.js"></script>		
<script type="text/javascript" src="http://cdn3.devexpress.com/jslib/15.2.11/js/dx.webappjs.js"></script> --> <!--Desktop UI widgets-->



<script type="text/javascript" src="<?php  echo Yii::$app->homeUrl;?>js/dxgrid/jszip.min.js"></script>

 
<script type="text/javascript" src="<?php  echo Yii::$app->homeUrl;?>js/dxgrid/dx.all.js"></script> 
  
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->homeUrl;?>css/dx.common.css"/>		
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->homeUrl;?>css/dx.light.css"/>

<script type="text/javascript" src="<?php  echo Yii::$app->homeUrl;?>js/client/payroll.js"></script>
	
	<?php 
	
	if(!empty($_GET['c_id'])){
		$encoded_company_id=$_GET['c_id'];
	}
	?>
	
<script type="text/javascript">

//var jq = $;

		jq(document).ready(function(){
			
			
			fetchAllEmployees("<?php echo $encoded_company_id; ?>");
			

		});
		
		
		


	</script>

<div class="box box-warning container-fluid">


	<div class="box-header with-border">
		<h3 class="box-title col-xs-6">Payroll Data - <?php if(!empty($company_detals['company_name'])){echo htmlentities($company_detals['company_name']); }?> <small><?php if(!empty($company_detals['company_client_number'])){echo '('.htmlentities($company_detals['company_client_number']).')'; }?></small></h3>
		<div class="col-xs-6 pull-right">
			<a class=" btn bg-orange btn-flat btn-social pull-right" onclick="playVideo(5);"> <i
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
			
<nav class="navbar " role="navigation" style="margin-bottom: 0px; float: left; width: 100%;">
		<div id="sticky-anchor"></div>
		<div class="col-md-12 padding-left-0 padding-right-0" id="sticky" >
			

			<div class="" id="heading-navbar-collapse">
				<div class="navbar-left document-context-menu" >
				<div class="btn-category pull-right">

					

						<div class="" style="">

						
								<a href="#" class="last btn navbar-btn btn-default hide" data-toggle="tooltip" data-placement="bottom" title="" data-original-title=""><i style="color: #0000" class="fa  fa-flag fa-lg btn_icons"></i>Flag Selected Employees</a>															
								<!--href="#modal-container-349870" data-toggle="modal" --> 
							
				<div class="btn-group">
				  <a href="<?php echo Yii::$app->homeUrl;?>files/csv/sample.csv" class="btn btn-default"><i
								class="fa fa-download fa-lg btn_icons pd-r-5"></i>Download</a>
				 <!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu">
					<li><a href="<?php //echo Yii::$app->homeUrl;?>Images/sample.csv">Download Payroll Template</a></li>
					<li><a href="<?php //echo Yii::$app->homeUrl;?>Images/sample.csv">Download Employment Period</a></li>
				   
				  </ul> --> 
				</div>
				
				<div class="btn-group">
				  <a href="<?php echo Yii::$app->homeUrl;?>client/payroll/uploademployees?c_id=<?php echo $encoded_company_id; ?>" class="btn btn-default"><i
								class="fa fa-upload fa-lg btn_icons pd-r-5"></i>Upload</a>
				  <!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="caret"></span>
					<span class="sr-only">Toggle Dropdown</span>
				  </button>
				  <ul class="dropdown-menu">
					<li><a onclick="showuploadconfirm();" href="#">Upload Payroll Data</a></li>
					<li><a onclick="showuploadconfirm();" href="#">Upload Employment Period</a></li>
				   
				  </ul> -->
				</div>
						
								
								<a class="last btn navbar-btn btn-default hide"
								id="display-full" href="<?php echo Yii::$app->homeUrl;?>Images/sample.csv" data-toggle="tooltip"
								data-placement="bottom" title=""
								data-original-title=""><i
								class="fa fa-download fa-lg btn_icons"></i>Download Payroll Template</a> <a class="last btn navbar-btn btn-default hide"
								id="display-940" href="#" data-toggle="tooltip"
								data-placement="bottom" title=""
								data-original-title=""><i
								style="color: #0000" class="fa fa-upload fa-lg btn_icons"></i>Upload Payroll Data</a> 
								
								<!--<a class="last btn navbar-btn btn-default"
								id="display-full" href="<?php //echo Yii::$app->homeUrl;?>Images/sample.csv" data-toggle="tooltip"
								data-placement="bottom" title=""
								data-original-title=""><i
								class="fa fa-download fa-lg btn_icons"></i>Download Sample CSV</a>-->
						</div>
						
						
					</div>
				
				</div>

				
			</div>
		</div>
	</nav>
			
		</div>


		<div class=" col-md-12 no-pd-rg  padding-right-0" style="margin-top: 15px;">
			





	
		<div class="row col-xs-12 panel-0 no-pd-rg padding-right-0">
			

			<div class="demo-container">
        <div id="gridContainer"></div>
    </div>


</div>
		</div>
	



		
			
			
		
		</div>

		<div>




			
		</div>

	</div>
	<!-- /.box-body -->
</div>











