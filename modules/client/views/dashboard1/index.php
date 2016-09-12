<script type="text/javascript">
$(function() {
	$( "#dashboard-menu-id" ).addClass( "active" );
}); 
</script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/highcharts-more.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
 <!--<script src="<?php // echo Yii::$app->homeUrl;?>js/guage.js"></script> -->
<?php  $baseurl=Yii::$app->getUrlManager()->getBaseUrl(true);?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<style>
.content{
background: white;
}

.small-box-footer{
width:50%;
}
.inner{
height:100px;
}
.small-box .icon{
    right: auto;
}
/*
.details{
background-color:grey;
}*/
.details-first{
background-color:lightgrey;
}
.details-second{
background-color:skyblue;
}
.details-third{
background-color:lightgrey;
}
.details-color{
/*color:white;*/
padding-left:25px;
}
.details-color-down{
color:white;
padding-top:7px;
    padding-left: 47px;
}
.border-line{
    border-style: groove;
    border-width: medium;
    height: 36px;
    border-radius: 19px;
    width: 76%;
    margin-top: 17px;
}
.border-line-day{
    border-style: groove;
    border-width: medium;
    height: 44px;
    width: 76%;
    margin-top: 17px;
    color: white;
    padding-left: 10px;
    padding-top: 7px;
}
.letter-size{
font-size:30px;
}
.description{
    padding-top: 18px;
    padding-right: 0px;
    padding-left: 25px;
}
.calender-font{
    font-size: 100px;
    padding-top: 30px;
    padding-bottom: 30px;
}
.content-wrapper{
min-height:800px !important;
}
.highcharts-button{
display:none;
}
</style>
<div class="box box-warning container-fluid">

	<div class="box-header with-border padding-left-0 padding-right-0">
              <h3 class="box-title col-xs-6 padding-left-0">Company	Dashboard</h3>
			  <div class="col-xs-6 pull-right padding-right-0">
			<a class=" btn bg-orange btn-flat btn-social pull-right"> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		</div>
            </div>
			
 <div class="col-xs-12 header-new-main width-98 hide"> 
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">You can see the statistics of company from this screen.</p>
</div>

<div class="row" style="margin-top:21px;">
<div class="col-lg-3 col-xs-6">
<!-- small box -->
  <div class="small-box bg-aqua">
          	   <div class="icon">
              <i class="fa fa-archive"></i>
            </div>
		<div class="inner">
		<!--<i class="fa fa-arrow-up" style="font-size: 50px;" aria-hidden="true"></i>  -->
		<h3 class="pull-right">2016</h3>
		<div class="col-xs-12 ">
          <p class="pull-right">Current ACA Reporting year</p>
          </div>
		</div>
      
				</div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
        	   <div class="icon">
              <i class="fa fa-briefcase"></i>
            </div>
            <div class="inner">
				<h3 class="pull-right">100</h3>
				<div class="col-xs-12 ">
		          <p class="pull-right">Total No of forms purchased </p>
		          </div>
	       	</div>

       
				</div>
            </div>
            		<!-- ./col -->
        <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
                	   <div class="icon">
              <i class="fa fa-calculator"></i>
            </div>
        		  <div class="inner">
					<h3 class="pull-right">4</h3>
					<div class="col-xs-12 ">
			          <p class="pull-right">Total No of EINs Purchased</p>
			          </div>
					</div>
        		
          </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
         	  <div class="inner">
         	   <div class="icon">
              <i class="fa fa-diamond"></i>
            </div>
				<h3 class="pull-right">Package Name</h3>
				<div class="col-xs-12 ">
		          <p class="pull-right">Package Purchased: True Full Service</p>
		          </div>
				</div>
            
            </div>
            </div>
            <!-- ./col -->
            </div>
            
            
    <div class="col-xs-12" style=" padding: 0px 0px 36px;">
    <div class="col-sm-6 col-xs-12 details">
           <div class="col-xs-4" style="padding-top:15px;">
			<img class="img-responsive" style="height: 137px;" src="<?php echo $baseurl;?>/Images/user.jpg">
			</div>
			
			<div class="col-xs-8" style="padding-top:15px; padding-left:0px;">
			
				<div class="col-xs-12">
						<label class=" col-sm-4">Name:</label>
						<div class="col-sm-8">
						<label>Amanda Brock</label>
						</div>
					</div>
					
					<div class="col-xs-12">
						<label class=" col-sm-4">Address:</label>
						<div class="col-sm-8">
						<label>215/A/A, Road No. <span>12, MLA Colony,Banjara Hills, Hyderabad,Telangana 500034</label>
						</div>
					</div>	
					
					<div class="col-xs-12">
						<label class=" col-sm-4">Email:</label>
						<div class="col-sm-8">
						<label>amandabrock@gmail.com</label>
						</div>
					</div>	
					
					<div class="col-xs-12">
						<label class=" col-sm-4">Phone #:</label>
						<div class="col-sm-8">
						<label>888-888-8888</label>
						</div>
					</div>	
					
					<div class="col-xs-12">
						<label class=" col-sm-4">Company:</label>
						<div class="col-sm-8">
						<label>OptionMatrix</label>
						</div>
					</div>	
					<div class="col-xs-12">
						<label class=" col-sm-4">Customer #:</label>
						<div class="col-sm-8">
						<label>12314</label>
						</div>
					</div>		
		
							
		 
			</div>
			<div class="col-xs-12">
		
						<button type="button" class="pull-left btn btn-success " style="width:46%; font-size: 17px; margin-top: 15%;">Setup and Update</button>
					
					</div>	
	<!-- 	 <div class="col-xs-12">
		 <h5 class="details-color-down border-line">Master Company Name:: XXX Corp</h5>
		  <h5 class="details-color-down border-line">Current ACA Reporting year : 2016</h5>
		   <h5 class="details-color-down border-line">No of forms purchased : 100</h5>
		   <h5 class="border-line-day">Days remaining to provide employees 1095
                     forms: <b>14 Days</b></h5>
		 </div>	-->
		
    </div>
    

    
     <div class="col-sm-2 col-xs-12 details-first" style="min-height: 417px;">
     <div class="col-xs-12" style="padding:0px;">
     <div class="col-xs-2" >
     <span class="letter-size">1</span>
     </div>
     <div class="col-xs-10 description">
     <b>Sign Client Agreements</b>
     <p> User should be able to sign a pre formatted template
document. When the signature is completed, the system should show if the document was signed or not.</p>
    <button style="margin-top:32%;    background-color: black;color:white;" class="btn">Sign client Agreement</button>
     </div>
    </div>
    </div>
    
     <div class="col-sm-2 col-xs-12 details-second" style="min-height: 417px;">
      <div class="col-xs-12" style="padding:0px;">
     <div class="col-xs-2">
     <span class="letter-size">2</span>
     </div>
     <div class="col-xs-10 description">
     <b>Send Us Secure Documents</b>
     <p> It will allow adamanager role person to upload any document into
sharefile when linked on receive from us as well as the customer to upload when they click on send us secure documents.</p>
   <button class="btn "   style="background-color: black;color:white;">Send Secure Documents</button>
     </div>
    </div>
    </div>
    
     <div class="col-sm-2 col-xs-12 details-third" style="min-height: 417px;">
      <div class="col-xs-12" style="padding:0px;">
     <div class="col-xs-2">
     <span class="letter-size">3</span>
     </div>
     <div class="col-xs-10 description">
     <b>Receive From Us Secure Documents</b>
     <p>It will allow adamanager role person to upload any document into
sharefile when linked on receive from us as well as the customer to upload when they click on send us secure documents.</p>
    <button  style="background-color: black;color:white;" class="btn">Receive Secure Documents</button>
     </div>
    </div>
    </div>
    
    </div>
    <!--
    <div class="col-xs-12" style="padding:0px;">
    <div class="col-sm-2 col-xs-12" >
    <div id="container" style="width:200px; height: 245px; margin: 0 auto"></div>
    </div>
     <div class="col-sm-2 col-xs-12" >
    <div id="container1" style="width:200px; height: 245px; margin: 0 auto"></div>
    </div>
     <div class="col-sm-2 col-xs-12" >
    <div id="container2" style="width:200px; height: 245px; margin: 0 auto"></div>
    </div>
     <div class="col-sm-2 col-xs-12">
    <div id="container3"  style="width:200px; height: 245px; margin: 0 auto"></div>
    </div>
    
    </div> -->
   </div>