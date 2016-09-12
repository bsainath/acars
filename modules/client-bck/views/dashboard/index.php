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
    /* padding-right: 0px; */
    padding-left: 14px;
     padding-bottom: 18px;
     height: 273px;
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
.hr-tag{
    margin-top: 12px !important;
    margin-bottom: 12px !important;
    border: 0 !important;
    border-top: 2px solid #333 !important;
}
.paragraph{
/* color: black;
font-weight: initial;
 font-size: 13px;*/
}
.sky-primary-blue{
    background: #0076BC;
    border-radius: 12px;
}
.color-white{
color:white;
}
.padding-top-inner{
    padding-top: 28px !important;
}
.label-1{
    padding: 0;
	padding-top: 5px;
    font-weight: 600;
	
 /* font-size: 13px; 
    color: black;
    background-color: rgba(211, 211, 211, 0.47);;
    text-align: right;
    padding-bottom: 5px; */
}

.label-2{
  
 font-weight: 400;
  /* text-align: left;
    font-size: 13px;
    color: black;*/
   
}


.color-white-year{
color:white;
margin-bottom: 0 !important;
font-size: 27px !important;
}

.color-white-year-service{
color:white;
margin-bottom: 0 !important;
font-size: 27px !important;
margin-top:0px !important;
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
.step-height{
padding: 0px;
    background-color: lightgray;    padding-bottom: 20px;    margin-bottom: 5px;
}
.label-8{
    padding-top: 5px;
    padding-bottom: 5px;
}
@media only screen and (max-width: 1199px) {
   .adjust_step_height{
	   min-height:200px;
   }
}

@media only screen and (max-width: 1270px) {
   .adjust_step_height{
	   min-height:500px;
   }
}

@media only screen and (min-width: 1280px) {
   .adjust_step_height{
	   min-height:495px;
   }
}


}
</style>
<div class="box box-warning container-fluid">

	<div class="box-header with-border padding-left-0 padding-right-0">
              <h3 class="box-title col-xs-6 padding-left-0">Company	Dashboard</h3>
			  <div class="col-xs-6 pull-right padding-right-0">
			 <span class="col-xs-7" style="font-size: 18px;"><b>Need help? Call 1-800-888-8888</b></span>
			<a class=" btn bg-orange btn-flat btn-social pull-right col-xs-4"> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		</div>
            </div>
			
 <div class="col-xs-12 header-new-main width-98 hide"> 
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">You can see the statistics of company from this screen.</p>
</div>

<div class="row" style="margin-top:21px;">
<div class="col-lg-3 col-xs-12 col-md-6">
<!-- small box -->
  <div class="small-box sky-primary-blue" >
          	 <!--   <div class="icon">
              <i class="fa fa-archive"></i>
            </div>-->
		<div class="inner padding-top-inner">
		<!--<i class="fa fa-arrow-up" style="font-size: 50px;" aria-hidden="true"></i>  -->
		<h3 class="pull-right color-white-year">2016</h3>
		<div class="col-xs-12 padding-right-0  ">
          <p class="pull-right color-white">Current ACA Reporting year</p>
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
				<h3 class="pull-right color-white-year">100</h3>
				<div class="col-xs-12 padding-right-0  ">
		          <p class="pull-right color-white">Total No of forms purchased </p>
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
					<h3 class="pull-right color-white-year">4</h3>
					<div class="col-xs-12 padding-right-0 ">
			          <p class="pull-right color-white">Total No of EINs Purchased</p>
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
            <h3 class="pull-right color-white-year" ><b>True Full Service</b></h3>
			
				<div class="col-xs-12 padding-right-0 ">
		          <p class="pull-right color-white">Package Purchased</p>
		          </div>
				</div>
            
            </div>
            </div>
            <!-- ./col -->
            </div>
            
            
    <div class="col-md-12" style=" padding: 0px 0px 36px;">
    <div class="col-md-5 col-sm-7 col-xs-12 details" style="padding-left: 0;">
	
           <div class="col-xs-3" style="padding-top:15px;    padding-left: 0;">
			<img class="img-responsive" src="<?php echo $baseurl;?>/Images/user.jpg">
			</div>
			
			<div class="col-xs-8" style="padding-top:15px; padding-left:0px;">
			
				<div class="col-xs-12">
						<label class=" col-sm-4 label-1">Name:</label>
						<div class="col-sm-8 label-8">
						<label class="label-2">Amanda Brock</label>
						</div>
					</div>
					
					<div class="col-xs-12">
						<label class=" col-sm-4 label-1">Address:</label>
						<div class="col-sm-8 label-8">
						<label class="label-2">215/A/A, Road No. <span>12, MLA Colony,Banjara Hills, Hyderabad, Telangana 500034</label>
						</div>
					</div>	
					
					<div class="col-xs-12">
						<label class=" col-sm-4 label-1">Email:</label>
						<div class="col-sm-8 label-8">
						<label class="label-2">amandabrock@gmail.com</label>
						</div>
					</div>	
					
					<div class="col-xs-12">
						<label class=" col-sm-4 label-1">Phone #:</label>
						<div class="col-sm-8 label-8">
						<label class="label-2">888-888-8888</label>
						</div>
					</div>	
					
					<div class="col-xs-12">
						<label class=" col-sm-4 label-1">Company:</label>
						<div class="col-sm-8 label-8">
						<label class="label-2">OptionMatrix</label>
						</div>
					</div>	
					<div class="col-xs-12">
						<label class=" col-sm-4 label-1">Customer #:</label>
						<div class="col-sm-8 label-8">
						<label class="label-2">12314</label>
						</div>
					</div>		
		
							
		 
			</div>
			<div class="col-xs-12">
		
					<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/reporting">	<button type="button" class="pull-left btn btn-success " style="width:46%; font-size: 17px;    margin-top: 8%;margin-bottom: 2%;">Setup and Update</button>
					</a>
					</div>	
	<!-- 	 <div class="col-xs-12">
		 <h5 class="details-color-down border-line">Master Company Name:: XXX Corp</h5>
		  <h5 class="details-color-down border-line">Current ACA Reporting year : 2016</h5>
		   <h5 class="details-color-down border-line">No of forms purchased : 100</h5>
		   <h5 class="border-line-day">Days remaining to provide employees 1095
                     forms: <b>14 Days</b></h5>
		 </div>	-->
		
    </div>
    

     <div class="col-md-7 col-sm-5 col-xs-12 " style="padding-right: 0px;">
     <div class="col-lg-4" style="    padding-left: 4px;padding-right: 0px " >
    
     <div class="col-xs-12 step-height">
     <div class="col-xs-12" style="padding: 0px;">
     
     <div class="col-xs-12 description">
     <b style="color:black;">Sign Client Agreements</b>
     <hr class="hr-tag">
     <p class="paragraph"> User should be able to sign a pre formatted template
document. When the signature is completed, the system should show if the document was signed or not.</p>
   
     </div>
    </div>
     <div class="col-xs-12" >
     <button style=" background-color:gray;color:white;width:100%;white-space: nowrap;" class="btn btn-default">Sign Client Agreement</button>
     </div>
    </div>
    </div>
    
    
     <div class="col-lg-4" style="      padding-left: 4px; padding-right: 0px;" >
     <div class="col-xs-12 step-height" style="background-color: rgba(211, 211, 211, 0.47);" >
     <div class="col-xs-12" style="padding: 0px;">
     <div class="col-xs-12 description">
     <b style="color:black;">Upload Secure Documents</b>
     <hr class="hr-tag">
     <p class="paragraph">It will allow admin role person to upload any document into
sharefile when linked on receive from us as well as the customer to upload when they click on send us secure documents.</p>
  
     </div>
    </div>
    
      <div class="col-xs-12" >
     <button style=" background-color: gray;color:white;width:100%;" class="btn btn-default">Upload</button>
     </div>
     
     </div>
    </div>
    
    
       
     <div class="col-lg-4" style="       padding-left: 4px;padding-right: 0px;" >
     <div class="col-xs-12 step-height" >
    <div class="col-xs-12" style="padding: 0px;">
     <div class="col-xs-12 description">
     <b style="color:black;">Download Forms & More</b>
     <hr class="hr-tag">
     <p class="paragraph"> User should be able to sign a pre formatted template
document. When the signature is completed, the system should show if the document was signed or not.</p>
   
     </div>
    </div>
    
     <div class="col-xs-12" >
     <button style=" background-color: gray;color:white;width:100%;" class="btn btn-default">Download</button>
     </div>
     
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