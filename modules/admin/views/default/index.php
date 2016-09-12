<script type="text/javascript">
$(document).ready(function(){
	 $("#admin_dashboard").addClass("active");
});
</script>
<link href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/css/admin/dashboard.css" rel="stylesheet">

<div class="box box-warning container-fluid">
            <div class="box-header with-border">
              <h3 class="box-title">Dashboard</h3>
            </div>
			
    <div class="col-xs-12 header-new-main width-98 hide">  
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">Here you can view the statistics.</p>
</div>



<!-- Main content -->
<section class="content">

<div class="row" style="margin-top:21px;">
<div class="col-lg-3 col-xs-12 col-md-6">
<!-- small box -->
  <div class="small-box sky-primary-blue" >
          	<div class="inner padding-top-inner">
		<h3 class="pull-right color-white-year"><?php if(!empty($dashboard_counts['count_clients'])){ echo $dashboard_counts['count_clients']; }?></h3>
		<div class="col-xs-12 padding-right-0  ">
          <p class="pull-right color-white">Total Number of Clients</p>
          </div>
		</div>
      
				</div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-12 col-md-6">
        <!-- small box -->
        <div class="small-box sky-medium-blue">
        	  <!-- <div class="icon">
              <i class="fa fa-briefcase"></i>
            </div> --> 
            <div class="inner padding-top-inner">
				<h3 class="pull-right color-white-year"><?php if(!empty($dashboard_counts['count_companies'])){ echo $dashboard_counts['count_companies']; }?></h3>
				<div class="col-xs-12 padding-right-0  ">
		          <p class="pull-right color-white">Total Number of Companies</p>
		          </div>
	       	</div>

       
				</div>
            </div>
            		<!-- ./col -->
        <div class="col-lg-3 col-xs-12 col-md-6">
        <!-- small box -->
        <div class="small-box sky-lite-blue">
                	<!--   <div class="icon">
              <i class="fa fa-calculator"></i>
            </div> --> 
        		  <div class="inner padding-top-inner">
					<h3 class="pull-right color-white-year"><?php if(!empty($dashboard_counts['count_forms_bought'])){ echo $dashboard_counts['count_forms_bought']; }?></h3>
					<div class="col-xs-12 padding-right-0 ">
			          <p class="pull-right color-white">Total Number of Forms</p>
			          </div>
					</div>
        		
          </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-12 col-md-6">
          <!-- small box -->
          <div class="small-box sky-lite-green">
         	  <div class="inner padding-top-inner">
         	  <!-- <div class="icon">
              <i class="fa fa-diamond"></i>
            </div> --> 
            <h3 class="pull-right color-white-year" ><b>33496</b></h3>
			
				<div class="col-xs-12 padding-right-0 ">
		          <p class="pull-right color-white">Total User Sessions Till Date</p>
		          </div>
				</div>
            
            </div>
            </div>
            <!-- ./col -->
            </div>
            
	<!-- Small boxes (Stat box) -->
	
	
	
	<!-- /.row -->

	<!-- top row -->
	<div class="row">
	
	
		
		
			<div class="box box-primary col-lg-12">
			
			
		<div class="col-md-4">
		
		<div class="box-header with-border padding-left-0">
              <h3 class="box-title">List of Clients</h3>
            </div>
					<div class="col-xs-12 panel-0 padding-left-0">
						<div class="box">

							<!-- /.box-header -->
							<div class="box-body table-responsive padding-left-0 padding-right-0">
								<table id="1exampleClients" class="table table-bordered table-hover">
									<thead>
										<tr class="tr-grid-header">

											<th>Client ID</th>
											<th>Client Name</th>
										
											
										</tr>
									</thead>
									<tbody>
									<?php if(!empty($dashboard_counts['all_client_users'])) { 
									$c= 0;	
									foreach($dashboard_counts['all_client_users'] as $clients)
									{
										?>
										<tr>

											<td><?php echo $clients->client_id; ?></td>
											<td><?php echo $clients->client_name; ?></td>
										
										
										</tr>
									<?php $c++; } } ?>
									</tbody>

								</table>
							</div>
							
								<div class="col-xs-12 show-more" >
								<div class="results"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/clients"><button class="form-control btn-success">Show More</button></a></div>
							</div> 
							
						</div>
						<!-- /.box -->
					</div>
				</div>
				
				
				
				<div class="col-md-4">
				<div class="box-header with-border padding-left-0">
              <h3 class="box-title">List of Companies</h3>
            </div>
					<div class="col-xs-12 panel-0 padding-left-0">
						<div class="box">

							<!-- /.box-header -->
							<div class="box-body table-responsive padding-left-0 padding-right-0">
								<table id="1exampleCompany" class="table table-bordered table-hover">
									<thead>
										<tr class="tr-grid-header">
											<th>Company ID</th>
											<th>Company Name</th>
										
										<!-- 	<th>Update</th> -->
											
										</tr>
									</thead>
									<tbody>

										<tbody>
									<?php if(!empty($dashboard_counts['all_companies'])) { 
									$d= 0;	
									foreach($dashboard_counts['all_companies'] as $companies)
									{
										?>
										<tr>

											<td><?php echo $companies->company_client_number; ?></td>
											<td><?php echo $companies->company_name; ?></td>
										
										
										</tr>
									<?php $d++; } } ?>
									</tbody>

								</table>
							</div>
							
						<div class="col-xs-12 show-more">
								<div class="results"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/company"><button class="form-control btn-success">Show More</button></a></div>
							</div> 
							
						</div>
					
					</div>
				</div>
		
				<div class="col-md-4">
				
				<div class="box-header with-border padding-left-0">
              <h3 class="box-title">List of Users</h3>
            </div>
		<div class="col-xs-12 panel-0 padding-left-0 padding-right-0">
			<div class="box">

				<!-- /.box-header -->
				<div class="box-body table-responsive padding-left-0 padding-right-0">
					<table id="1exampleUsers" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>Username</th>
								<th>Email</th>
								
								
							</tr>
						</thead>
						<tbody>
							
							<?php if(!empty($dashboard_counts['all_users'])) { 
									$e= 0;	
									foreach($dashboard_counts['all_users'] as $users)
									{
										?>
										<tr>

											<td><?php echo $users->first_name.' '.$users->last_name; ?></td>
											<td><?php echo $users->user->useremail; ?></td>
										
										
										</tr>
									<?php $e++; } } ?>
														
						</tbody>

					</table>
				</div>
					
					<div class="col-xs-12 show-more">
								<div class="results"><a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/admin/users"><button class="form-control btn-success">Show More</button></a></div>
							</div> 
		
			</div>
			
		</div>
	</div>
			</div>


</div>

		
<div class="row">
	
	
	  <div class="col-lg-4 col-xs-12 col-md-6">
        <!-- small box -->
        <div class="small-box sky-lite-blue">
                	<!--   <div class="icon">
              <i class="fa fa-calculator"></i>
            </div> --> 
        		  <div class="inner padding-top-inner">
					<h3 class="pull-right color-white-year"><?php if(!empty($dashboard_counts['count_company_users'])){ echo $dashboard_counts['count_company_users']; }?></h3>
					<div class="col-xs-12 padding-right-0 ">
			          <p class="pull-right color-white">Number of Company Users</p>
			          </div>
					</div>
        		
          </div>
          </div>
		  
		 <div class="col-lg-4 col-xs-12 col-md-6">
        <!-- small box -->
        <div class="small-box sky-lite-green">
                	<!--   <div class="icon">
              <i class="fa fa-calculator"></i>
            </div> --> 
        		  <div class="inner padding-top-inner">
					<h3 class="pull-right color-white-year"><?php echo date("Y"); ?></h3>
					<div class="col-xs-12 padding-right-0 ">
			          <p class="pull-right color-white">Current ACA Reporting Year</p>
			          </div>
					</div>
        		
          </div>
          </div>
		
		
		 <div class="col-lg-4 col-xs-12 col-md-6">
        <!-- small box -->
        <div class="small-box sky-medium-blue">
                	<!--   <div class="icon">
              <i class="fa fa-calculator"></i>
            </div> --> 
        		  <div class="inner padding-top-inner">
					<h3 class="pull-right color-white-year"><?php if(!empty($dashboard_counts['company_admin_users'])){ echo $dashboard_counts['company_admin_users']; }?></h3>
					<div class="col-xs-12 padding-right-0 ">
			          <p class="pull-right color-white">ACA Managers</p>
			          </div>
					</div>
        		
          </div>
          </div>
		
		
		
		
	</div>
</section>
</div>


<!-- /.content -->


