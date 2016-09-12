


<div class="box box-warning container-fluid">
            <div class="box-header with-border">
              <h3 class="box-title">Dashboard</h3>
            </div>
			
    <div class="col-xs-12 header-new-main width-98 hide">  
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">Here you can view the statistics.</p>
</div>

<style>
.morris-default-style {
	display: none;
}
.show-more{
	
	 width: 50%;margin-top: 15px;    margin-bottom: 15px;
}

.sky-medium-blue{
 background:#05A6DF;
    border-radius: 12px;
}
.sky-lite-blue{
 background:#58C1E9;
    border-radius: 12px;
}
.sky-lite-green{
 background:#A3CF5E;
    border-radius: 12px;
}
.bg-red{
  border-radius: 12px;
}
</style>

<!-- Main content -->
<section class="content">

	<!-- Small boxes (Stat box) -->
	<div class="row ">
	
		<div class="col-lg-3 col-xs-12">
			<!-- small box -->
			<div class="small-box sky-medium-blue">
				<div class="inner">
					<h3 class="h3-color display-loading-gif"
						id="job_applications_count">76</h3>
					<p>Total number of clients</p>
				</div>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-12">
			<!-- small box -->
			<div class="small-box sky-lite-blue">
				<div class="inner">
					<h3 class="h3-color display-loading-gif"
						id="applications_this_month">643</h3>
					<p>Total number of companies</p>
				</div>
			

				</a>
			</div>
		</div>

		<div class="col-lg-3 col-xs-12">
			<!-- small box -->
			<div class="small-box sky-lite-green">
				<div class="inner">
					<h3 class="h3-color display-loading-gif" id="phone_calls">1589</h3>
					<p>Total number of forms</p>
				</div>
			</div>
		</div>

		<!-- ./col -->
		<div class="col-lg-3 col-xs-12">
			<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
					<h3 class="h3-color display-loading-gif" id="calls_this_month">
						33496</h3>
					<p>Total user sessions till date</p>
				</div>
				
			</div>
		</div>


	</div>
	
	
	<!-- /.row -->

	<!-- top row -->
	<div class="row">
	
	
		
		
			<div class="box box-primary col-lg-12">
			
			
		<div class="col-md-4">
		
		<div class="box-header with-border">
              <h3 class="box-title">List of Clients</h3>
            </div>
					<div class="col-xs-12 panel-0">
						<div class="box">

							<!-- /.box-header -->
							<div class="box-body table-responsive">
								<table id="1exampleClients" class="table table-bordered table-hover">
									<thead>
										<tr class="tr-grid-header">

											<th>Client ID</th>
											<th>Client Name</th>
										
											
										</tr>
									</thead>
									<tbody>

										<tr>

											<td>10000</td>
											<td>Texas Group</td>
										
										
										</tr>

										<tr>

											<td>10001</td>
											<td>California Group</td>
										
											<!-- 	<td><a href="#" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 -->
										</tr>

										<tr>

											<td>10002</td>
											<td>Texas Group</td>
											
											<!-- 	<td><a href="#" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 -->
										</tr>

										
										<tr>

											<td>10006</td>
											<td>Sanjose Group</td>
											
											<!-- 	<td><a href="#" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 -->
										</tr>
										
										
										<tr>

											<td>10007</td>
											<td>Tata Group</td>
											
											<!-- 	<td><a href="#" title="edit" style="margin-left: 13px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a title="delete" href="#" style="margin-left: 13px;color:red;"><i class="fa fa-times" aria-hidden="true"></i></a></td>
								 -->
										</tr>

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
				<div class="box-header with-border">
              <h3 class="box-title">List of Companies</h3>
            </div>
					<div class="col-xs-12 panel-0">
						<div class="box">

							<!-- /.box-header -->
							<div class="box-body table-responsive">
								<table id="1exampleCompany" class="table table-bordered table-hover">
									<thead>
										<tr class="tr-grid-header">
											<th>Company ID</th>
											<th>Company Name</th>
										
										<!-- 	<th>Update</th> -->
											
										</tr>
									</thead>
									<tbody>

										<tr>
											<td>ACA-10000-1</td>
											<td>Abc Corp</td>
										
									<!-- 		<td style="text-align: center;"><a
												href="<?php echo Yii::$app->homeUrl;?>admin/company/editform"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
											-->
										</tr>

										<tr>
											<td>ACA-10000-2</td>
											<td>Raymond Corp</td>
											
									<!-- 		<td style="text-align: center;"><a
												href="<?php echo Yii::$app->homeUrl;?>admin/company/editform"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
										-->
										</tr>

										<tr>
											<td>ACA-10000-3</td>
											<td>Obsorn Corp</td>
										
									<!-- 		<td style="text-align: center;"><a
												href="<?php echo Yii::$app->homeUrl;?>admin/company/editform"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
											-->
										</tr>

										<tr>
											<td>ACA-10000-4</td>
											<td>Rest Corp</td>
											
									<!-- 		<td style="text-align: center;"><a
												href="<?php echo Yii::$app->homeUrl;?>admin/company/editform"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
											-->
										</tr>


										<tr>
											<td>ACA-10000-5</td>
											<td>Soap Corp</td>
											
									<!-- 		<td style="text-align: center;"><a
												href="<?php echo Yii::$app->homeUrl;?>admin/company/editform"><i
													class="fa fa-edit" style="cursor: pointer;"></i></a></td>
											-->
										</tr>
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
				
				<div class="box-header with-border">
              <h3 class="box-title">List of Users</h3>
            </div>
		<div class="col-xs-12 panel-0">
			<div class="box">

				<!-- /.box-header -->
				<div class="box-body table-responsive">
					<table id="1exampleUsers" class="table table-bordered table-hover">
						<thead>
							<tr class="tr-grid-header">

								<th>Username</th>
								<th>Email</th>
								
								
							</tr>
						</thead>
						<tbody>
							
							<tr>

								<td>Praveen Singh</td>
								<td>praveen@gmail.com</td>
							
							</tr>
				
				          	<tr>

								<td>Srusti Karn</td>
								<td>srusti@gmail.com</td>
							
							</tr>
							
								<tr>

								<td>Aakash Yadav</td>
								<td>aakash@gmail.com</td>
							
							</tr>
							
								<tr>

								<td>Anshula</td>
								<td>anshula@gmail.com</td>
							 
							</tr>
							
								<tr>

								<td>Vector</td>
								<td>vector@gmail.com</td>
							
							</tr>
					     
														
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
	
		<div class="col-lg-4 col-xs-12">
	<div class="small-box bg-green">
				<div class="inner">
					<h3 class="h3-color display-loading-gif"
						id="job_applications_count">500</h3>
					<p>Number of Company Users</p>
				</div>
				<div class="icon">
					<i class="fa fa-users"></i>
				</div>

			</div>
		</div>
		
		<div class="col-lg-4 col-xs-12">
		<div class="small-box bg-red" style="background-color: #f45b5b !important">
				<div class="inner">
					<h3 class="h3-color display-loading-gif" id="calls_this_month">
						2016</h3>
					<p>Current ACA reporting year</p>
				</div>
				<div class="icon">
					<i class="fa  fa-calendar-o"></i>
				</div>

			</div>
		</div>
		
		<div class="col-lg-4 col-xs-12">
			<div class="small-box bg-aqua" style="background-color: #8085e9 !important">
				<div class="inner">
					<h3 class="h3-color display-loading-gif" id="phone_calls">5</h3>
					<p>ACA Managers</p>
				</div>
				<div class="icon">
					<i class="fa fa-user"></i>
				</div>

			</div>
		</div>
		
	</div>
</section>
</div>
<!-- Morris.js charts -->


<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script
	src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>

<apex:includeScript
	value="{!URLFOR($Resource.mythemejs, 'js/morris-chart/morris.js')}" />
<apex:includeScript
	value="{!URLFOR($Resource.mythemejs, 'js/morris-chart/raphael-min.js')}" />
<apex:includeScript
	value="{!URLFOR($Resource.mythemejs, 'js/morris.init.js')}" />
<script>

$(document).ready(function(){
			    $('#exampleUsers').DataTable({

			    	"bFilter" : false,               
			    	"bLengthChange": false
			    });
				
				  $('#exampleClients').DataTable({

			    	"bFilter" : false,               
			    	"bLengthChange": false
			    });
				
				  $('#exampleCompany').DataTable({

			    	"bFilter" : false,               
			    	"bLengthChange": false
			    });
			}); 

$(function () {
   var chart = new Highcharts.Chart({
	
        chart: {
            type: 'line',
			renderTo: 'container'
        },
		 credits: {
            enabled: false
        },
		legend: {
            layout: 'vertical',
            backgroundColor: '#FFFFFF',
            floating: true,
            align: 'left',
            verticalAlign: 'top',
            x: 90,
            y: 45,
            labelFormatter: function () {
                return this.name + ' (click to hide)';
            }
        },
        title: {
            text: 'Daily line graph of user sessions'
        },
        
        xAxis: {
            categories: ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29',]
        },
        yAxis: {
            title: {
                text: 'Total Deliveries'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: false
                },
                enableMouseTracking: true
            }
        },
		 legend: {
            enabled: true
        },
        series: [ {
            name: 'Deliveries - '+13,
            data: [1,2,3,1,2,2,0,2,3,5,4,10,8,6,12,16,10,18,20,14,2,7,6,13,17,8,10,16,6,]
        }],
        lang: {
            noData: "No Deliveries"
        },
        noData: {
            style: {
                fontWeight: 'bold',
                fontSize: '15px',
                color: '#303030'
            }
        }
    });
	
	
	 //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    barChartData.datasets[1].fillColor = "#00a65a";
    barChartData.datasets[1].strokeColor = "#00a65a";
    barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
	
	
	
});


Morris.Bar({
  element: 'bar-example',
  data: [
    { y: 'Jan', a: 100, b: 90 },
    { y: 'Feb', a: 75,  b: 65 },
    { y: 'Mar', a: 50,  b: 40 },
    { y: 'Apr', a: 75,  b: 65 },
    { y: 'May', a: 50,  b: 40 },
    { y: 'Jun', a: 75,  b: 65 },
    { y: 'July', a: 100, b: 90 },
    { y: 'Aug', a: 100, b: 90 },
    { y: 'Sep', a: 100, b: 90 },
    { y: 'Oct', a: 100, b: 90 },
    { y: 'Nov', a: 100, b: 90 },
    { y: 'Dec', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Active', 'Inactive']
});
</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/no-data-to-display.js"></script>
<script src="http://www.google.com/jsapi?fake=.js"></script>

<script src="<?php echo Yii::$app->homeUrl;?>/js/morris.min.js"></script>
<script src="<?php echo Yii::$app->homeUrl;?>js/guage.js"></script>

<!-- /.content -->


