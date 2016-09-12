<?php

?>

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
right:200px !important;
}
/*
.details{
background-color:grey;
}*/
.details-first{
background-color:pink;
}
.details-second{
background-color:cornsilk;
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
font-size:63px;
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
		          <p class="pull-right">No of forms purchased</p>
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
			          <p class="pull-right">No of EIN Purchased</p>
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
				<h3 class="pull-right">364</h3>
				<div class="col-xs-12 ">
		          <p class="pull-right">Package Purchased: True Full Service</p>
		          </div>
				</div>
            
            </div>
            </div>
            <!-- ./col -->
            </div>
            
            
    <div class="col-xs-12" style=" padding: 0px 0px 18px;">
    <div class="col-xs-6 details">
           <div class="col-xs-3" style="padding-top:15px;">
			<img class="img-responsive" style="height: 137px;" src="<?php echo $baseurl;?>/Images/user.jpg">
			</div>
			
			<div class="col-xs-9" style="padding-top:15px;">
			
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
		
					<div class="col-xs-12">
		
						<label style=" font-size: 26px; margin-top: 168px;">Need help? Call 1-800-888-8888</label>
					
					</div>			
		 
			</div>
	<!-- 	 <div class="col-xs-12">
		 <h5 class="details-color-down border-line">Master Company Name:: XXX Corp</h5>
		  <h5 class="details-color-down border-line">Current ACA Reporting year : 2016</h5>
		   <h5 class="details-color-down border-line">No of forms purchased : 100</h5>
		   <h5 class="border-line-day">Days remaining to provide employees 1095
                     forms: <b>14 Days</b></h5>
		 </div>	-->
		
    </div>
    

    
     <div class="col-xs-2 details-first">
     <div class="col-xs-12" style="padding:0px;">
     <div class="col-xs-2" style="height:426px;">
     <span class="letter-size">1</span>
     </div>
     <div class="col-xs-10 description">
     <b>Sign Client Agreements</b>
     <p> User should be able to sign a pre formatted template
document. When the signature is completed, the system should show if the document was signed or not.</p>
    <i class="fa fa-calendar calender-font" aria-hidden="true"></i>
     </div>
    </div>
    </div>
    
     <div class="col-xs-2 details-second">
      <div class="col-xs-12" style="padding:0px;">
     <div class="col-xs-2">
     <span class="letter-size">2</span>
     </div>
     <div class="col-xs-10 description">
     <b>Send Us Secure Documents</b>
     <p> It will allow adamanager role person to upload any document into
sharefile when linked on receive from us as well as the customer to upload when they click on send us secure documents.</p>
    <i class="fa  fa-bar-chart-o calender-font" aria-hidden="true"></i>
     </div>
    </div>
    </div>
    
     <div class="col-xs-2 details-third">
      <div class="col-xs-12" style="padding:0px;">
     <div class="col-xs-2">
     <span class="letter-size">3</span>
     </div>
     <div class="col-xs-10 description">
     <b>Receive From Us Secure Documents</b>
     <p>It will allow adamanager role person to upload any document into
sharefile when linked on receive from us as well as the customer to upload when they click on send us secure documents.</p>
    <i class="fa fa-mars-double calender-font" aria-hidden="true"></i>
     </div>
    </div>
    </div>
    
    </div>
    
    <div class="col-xs-12" style="padding:0px;">
    <div class="col-xs-2" >
    <div id="container" style="background-color:grey;width:200px; height: 200px; margin: 0 auto"></div>
    </div>
     <div class="col-xs-2" >
    <div id="container1" style="width:200px; height: 200px; margin: 0 auto"></div>
    </div>
     <div class="col-xs-2" >
    <div id="container2" style="width:200px; height: 200px; margin: 0 auto"></div>
    </div>
     <div class="col-xs-2">
    <div id="container3"  style="width:200px; height: 200px; margin: 0 auto"></div>
    </div>
    
    </div>
   </div>