<script type="text/javascript">

$(function() {

	$( ".custom-bg" ).click(function() {

		console.log(this);
		  //alert( "Handler for .click() called." );
		});
		
		



		$('.steps').hover(
				
               function () {
				   $(this).css('background','#000000');
                  $( this ).find('.check').css( "display", "none" );
  $( this ).find('.edit').css( "display", "block" );
               }, 
				
               function () {
				   $(this).css('background','rgb(14, 187, 121)');
                  $( this ).find('.check').css( "display", "block" );
  $( this ).find('.edit').css( "display", "none" );
               }
            );
			
			
		

//	$( "#dashboard-menu-id" ).addClass( "active" );
});

function basic(){
	
	
	$( "#collapseOne" ).prev().find('.steps').css( "display", "block" );
	$( "#collapseOne" ).prev().find('.check').css( "display", "block" );

	$('.fixed-number').css( "display", "block");
	$("#collapseOne" ).prev().find('.fixed-number').css( "display", "none");
	
	$(".parent-tabs").css( "background-image", "" );
	$("#collapseTwo" ).prev().css( "background-image","-webkit-linear-gradient(#6394ce,#395fa2)");
	$(".custom-bg").css( "color", "" );
	$( "#collapseTwo" ).prev().find('.custom-bg').css("color", "white");
	
	
	$( "#collapseTwo,#collapseOne" ).prev().css("opacity", "1");
	
	// console.log($( "#collapseOne" ).prev());background: rgba(222, 217, 210, 0.68);

	$("#collapseTwo").addClass( "in" );
	$("#collapseTwo").css("height","auto");
	$("#collapseTwo").removeClass( "collapsed" );
	
	$("#collapseTwo").attr("aria-expanded","true");
}

function editbasic(){
	
$('.steps').css( "display", "none" );

$('.fixed-number').css( "display", "block");

	$(".parent-tabs").css( "background-image", "" );
	$("#collapseOne" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseOne" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseOne").addClass("in");
	$("#collapseOne").css("height","auto");
	$("#collapseOne").removeClass("collapsed");
	$("#collapseOne").attr("aria-expanded","true");
	
	$( "#collapseTwo,#collapseThree,#collapseFour,#collapseFive,#collapseSix" ).prev().css("opacity", "0.6");
	
}

function basic1(){

$( "#collapseTwo" ).prev().find('.steps').css( "display", "block" );
	$( "#collapseTwo" ).prev().find('.check').css( "display", "block" );
	
	//$('.fixed-number').css( "display", "block");
	$("#collapseTwo" ).prev().find('.fixed-number').css( "display", "none");
	
	$( "#collapseThree" ).prev().css("opacity", "1");
	
$(".parent-tabs").css( "background-image", "" );
	$( "#collapseThree" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseThree" ).prev().find('.custom-bg').css("color", "white");
	
	$("#collapseThree").addClass( "in" );
	$("#collapseThree").css("height","auto");
	$("#collapseThree").removeClass( "collapsed" );
	$("#collapseThree").attr("aria-expanded","true");
}

function editbasic1(){
	
	$('#step1').css({"display":"none"});
	$('#step2').css({"display":"none"});
	$('#step3').css({"display":"none"});
	$('#step4').css({"display":"none"});
	$('#step5').css({"display":"none"});

	$("#collapseTwo,#collapseThree,#collapseFour,#collapseFive" ).prev().find('.fixed-number').css( "display", "block");
	
	$(".parent-tabs").css( "background-image", "" );
	$("#collapseTwo" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseTwo" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseTwo").addClass("in");
	$("#collapseTwo").css("height","auto");
	$("#collapseTwo").removeClass("collapsed");
	$("#collapseTwo").attr("aria-expanded","true");
	
	$( "#collapseThree,#collapseFour,#collapseFive,#collapseSix" ).prev().css("opacity", "0.6");
}



function basic2(){

$( "#collapseThree" ).prev().find('.steps').css( "display", "block" );
	$( "#collapseThree" ).prev().find('.check').css( "display", "block" );
	
	$("#collapseThree" ).prev().find('.fixed-number').css( "display", "none");

	$( "#collapseFour" ).prev().css("opacity", "1");
	
	$(".parent-tabs").css( "background-image", "" );
	$( "#collapseFour" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseFour" ).prev().find('.custom-bg').css("color", "white");
	
	$("#collapseFour").addClass( "in" );
	$("#collapseFour").css("height","auto");
	$("#collapseFour").removeClass( "collapsed" );
	$("#collapseFour").attr("aria-expanded","true");
}

function editbasic2(){
	
	$('#step2').css({"display":"none"});
	$('#step3').css({"display":"none"});
	$('#step4').css({"display":"none"});
	$('#step5').css({"display":"none"});

	$("#collapseThree,#collapseFour,#collapseFive" ).prev().find('.fixed-number').css( "display", "block");
	
	$(".parent-tabs").css( "background-image", "" );
	$("#collapseThree" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseThree" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseThree").addClass("in");
	$("#collapseThree").css("height","auto");
	$("#collapseThree").removeClass("collapsed");
	$("#collapseThree").attr("aria-expanded","true");
	
	$( "#collapseFour,#collapseFive,#collapseSix" ).prev().css("opacity", "0.6");
}

function basic3(){
	$( "#collapseFour" ).prev().find('.steps').css( "display", "block" );
	$( "#collapseFour" ).prev().find('.check').css( "display", "block" );
	
	$("#collapseFour" ).prev().find('.fixed-number').css( "display", "none");
	
	$( "#collapseFive" ).prev().css("opacity", "1");
	
$(".parent-tabs").css( "background-image", "" );
	$( "#collapseFive" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseFive" ).prev().find('.custom-bg').css("color", "white");
	
	$("#collapseFive").removeClass( "collapsed" );
	$("#collapseFive").addClass( "in" );
	$("#collapseFive").css("height","auto");
	$("#collapseFive").attr("aria-expanded","true");
}

function editbasic3(){
	
	$('#step3').css({"display":"none"});
	$('#step4').css({"display":"none"});
	$('#step5').css({"display":"none"});

	$("#collapseFour,#collapseFive" ).prev().find('.fixed-number').css( "display", "block");
	
	
	$(".parent-tabs").css( "background-image", "" );
	$("#collapseFour" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseFour" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseFour").addClass("in");
	$("#collapseFour").css("height","auto");
	$("#collapseFour").removeClass("collapsed");
	$("#collapseFour").attr("aria-expanded","true");
	
	$( "#collapseFive,#collapseSix" ).prev().css("opacity", "0.6");
}

function basic4(){
	$( "#collapseFive" ).prev().find('.steps').css( "display", "block" );
	$( "#collapseFive" ).prev().find('.check').css( "display", "block" );
	
	$("#collapseFive" ).prev().find('.fixed-number').css( "display", "none");
	
	$( "#collapseSix" ).prev().css("opacity", "1");
	
$(".parent-tabs").css( "background-image", "" );
	$( "#collapseSix" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseSix" ).prev().find('.custom-bg').css("color", "white");
	
	$("#collapseSix").addClass( "in" );
	$("#collapseSix").css("height","auto");
	$("#collapseSix").removeClass( "collapsed" );
	$("#collapseSix").attr("aria-expanded","true");
}

function editbasic4(){
	
	$('#step4').css({"display":"none"});
	$('#step5').css({"display":"none"});

	$("#collapseFive" ).prev().find('.fixed-number').css( "display", "block");

	$(".parent-tabs").css( "background-image", "" );
	$("#collapseFive" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseFive" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseFive").addClass("in");
	$("#collapseFive").css("height","auto");
	$("#collapseFive").removeClass("collapsed");
	$("#collapseFive").attr("aria-expanded","true");
	
	$( "#collapseSix" ).prev().css("opacity", "0.6");
}

/*
function basic5(){
	$( "#collapseSix" ).prev().find('.steps').css( "display", "block" );
	$( "#collapseSix" ).prev().find('.check').css( "display", "block" );
	
	$("#collapseSix" ).prev().find('.fixed-number').css( "display", "none");
	
$(".parent-tabs").css( "background-image", "" );
	$( "#collapseSix" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseSix" ).prev().find('.custom-bg').css("color", "white");
	
	$("#collapseSix").addClass( "in" );
	$("#collapseSix").css("height","auto");
	$("#collapseSix").removeClass( "collapsed" );
	$("#collapseSix").attr("aria-expanded","true");
}

function editbasic5(){
	
	
	$('#step5').css({"display":"none"});

	$("#collapseSix" ).prev().find('.fixed-number').css( "display", "block");

	
	$(".parent-tabs").css( "background-image", "" );
	$("#collapseSix" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
	$( "#collapseSix" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseSix").addClass("in");
	$("#collapseSix").css("height","auto");
	$("#collapseSix").removeClass("collapsed");
	$("#collapseSix").attr("aria-expanded","true");
}
*/

</script>
<style>
.mr-tp-2{
margin-top: 4%;}

.mr-tp-15{
margin-top: 15%;}

.btn{
white-space: normal;
}

ol>li.btn-lg{
font-size: 16px;
text-align:left;
}

ol>li.btn-lg>span{
margin-right: 5%;
text-align:center;
}
   .form-horizontal .control-label{
   text-align:left;
   }

.circle{
float: left;
    border-radius: 50%;
    background: white;
    color: black;
    width: 22px;
    }
    .btn-default{
        background-color: #d2d6de;
        }
        
   /* .btn-success{
        background-color: rgba(0, 166, 36, 0.5);
    } */
	
	.steps{
		display:none; background-image: linear-gradient(#0ebb79,#22a642);
    color: #fff;
    width: 58px; border-bottom: 1px solid rgba(0,0,0,0.5);
    border-radius: 0.8em 0.3em 0.3em 0.8em;
    text-align: center;
    line-height: 23px;
    font-weight: 900;
    font-size: 15px;
	}
	
	.steps{
		cursor:pointer;
	}
	
	.block-number{
		    font-family: initial;
		border-radius: 0.3em;
    width: 23px;
    height: 23px;
    letter-spacing: -1px;
    text-align: center;
    line-height: 23px;
    font-weight: 900;
    font-size: 15px;
    left: 10px;
    top: -2px;      
	position: absolute;
	color: #fff;
    background-color: #6699cc; 
    box-shadow: inset 0 1px 2px rgba(0,0,0,0.3); 
    background-color: #436799;
    background-image: -moz-linear-gradient(#375984,#436799);
    background-image: -webkit-linear-gradient(#375984,#436799); 
	}
	
	.highlight-fancy{
		border: 1px solid #FBEED5;
    text-shadow: 0 1px 0 rgba(255,255,255,0.5);
    padding: 0.1em 0.5em 0.3em 0.5em;
    border-radius: 0.2em;
    box-shadow: 0px 1px 0px rgba(106,32,28,0.1);
    background-color: #ffffcc;
    color: #90724a;
	}
	
	.box{
		    border-top:none!important; 
	}
	.form-height{
    height: 42px;
    width: 90%;
	}
	.control-checkbox{
	    font-weight: normal;
    font-size: 16px;
	}
</style>

<div class="box box-warning container-fluid">
	<div class="box-header with-border">
              <h3 class="box-title">Basic Reporting Info</h3>
            </div>
			
 <div class="col-xs-12 header-new-main width-98"> 
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">Complete the sections below for basic information, status tracking, plan offering and DGE.</p>
</div>
		<div class="col-md-12 row" >
		
		
		
		<div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
           
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel  box ">
                  <div class="parent-tabs box-header with-border" style="background-image:-webkit-linear-gradient(#6394ce,#395fa2);">
				  
				  <span id="step" class="steps col-xs-2" onclick="editbasic();"   >
<span class="check " style="display:none;" >
<i class="fa fa-check" aria-hidden="true"></i>
<span class="">1</span>
</span>
<span  style="display:none;" class="edit">Edit</span></span> 
				  
                    <h4 class="box-title col-xs-6">
					<div class="fixed-number col-xs-1" style="top: 3px;">
						<span class="block-number">1</span>
						</div>	
                      <a  class="custom-bg col-xs-11" data-parent="#accordion"  style="color:white; padding-left: 0;" >

					 Basic Information
                      </a>
                    </h4>
					
					<div class="box-title col-xs-3 pull-right" style="padding-top: 7px;">
					<p class="custom-bg summary-text pull-right" style="font-size: 12px; color:white; ">
					Provide employer information
					</p>
					</div>
					
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in bg-white black" >
                    <div class="box-body">
                    <p class="highlight-fancy">
			<span class="status"><i class="fa fa-info-circle" aria-hidden="true"></i></span> Fill the baisc information in the form below 
			</p>
                      <div class="col-md-11" >
					<div class="row">
						<div class="col-md-12">
						
							<div class=" box-info">
          
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
              <div class="col-xs-offset-1 col-xs-10">
               <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>Employer Name(Legal Nme for IRS Filing)</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                    <div class="col-sm-6">
                  <label class="control-label"><h4>Employer Identification Number(EIN)</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>

                <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>Tax Reporting Year</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>Contact Person Legal First Name</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                   <div class="col-sm-6">
                  <label class="control-label"><h4>Contact Person Legal Middle Name</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>Contact Person Legal Last Name</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                   <div class="col-sm-6">
                  <label class="control-label"><h4>Contact Person Suffix</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                 <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>Title of Contact Person</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                   <div class="col-sm-6">
                  <label class="control-label"><h4>Contact Person Email Address</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                 <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>Contact telephone Number</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>Street Address 1(Including Room or Street Number)</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                  <div class="col-sm-6">
                  <label class="control-label"><h4>Street Address 2(Including Room or Street Number)</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                
                 <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>City or Town</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                  <div class="col-sm-6">
                  <label class="control-label"><h4>State or Province</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
          
                 <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>ZIP or Foreign Postal Code</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                  <div class="col-sm-6">
                  <label class="control-label"><h4>Country</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>Employee Benefit Broker Name</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                  <div class="col-sm-6">
                  <label class="control-label"><h4>Employee Benefit Broker Email Address</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                   <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>Employee Benefit Broker</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                  <div class="col-sm-6">
                  <label class="control-label"><h4>Telephone Number</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
           
              <!-- /.box-footer -->
            </form>
          </div>
				  			
						</div>
					</div>
					
				<div class="box-footer pull-right" >
                <button type="submit"  class="btn btn-default ">Save</button>
                <button type="button" data-toggle="collapse" href="#collapseOne" onclick="basic()" class="btn btn-success">Continue</button>
              </div>
				</div>
				</div>
			
				
				
                    </div>
                  </div>
                </div>
                <div class="panel   box ">
                  <div class="parent-tabs box-header with-border" style="opacity: 0.6;">
				  <span id="step1" class="steps col-xs-2" onclick="editbasic1()"   >
<span class="check " style="display:none;" >
<i class="fa fa-check" aria-hidden="true"></i>
<span class="">2</span>
</span>
<span  style="display:none;" class="edit">Edit</span></span>

                    <h4 class="box-title col-xs-6">
					<div class="fixed-number col-xs-1" style="top: 3px;">
						<span class="block-number">2</span>
						</div>	
                      <a  class="custom-bg col-xs-11" data-parent="#accordion"  style="padding-left: 0;" >
                        Large Emp. Status & Tracking
                      </a>
                    </h4>
					
					<div class="box-title col-xs-3 pull-right" style="padding-top: 7px;">
					<p class="custom-bg summary-text pull-right" style=" font-size: 12px; ">
					Tell us about your company size
					</p>
					</div>
					
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse bg-white black">
                    <div class="box-body ">
					<p class="highlight-fancy">
			<span class="status"><i class="fa fa-info-circle" aria-hidden="true"></i></span> Specify if the company is Applicable Large Employer 
			</p>
					
					<div class="col-md-offset-1 col-md-10">
					   <form class="form-horizontal" >
			  <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>Are you an Appilcable Large Employee (ALE)?</h4>
                   <input type="checkbox"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                    </label>
                  
                  </div>
                  
                   <div class="col-sm-6">
                  <label class="control-label"><h4>Is this your first year as Appilcable Large Employee (ALE)?</h4>
                   <input type="checkbox"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="checkbox"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                    </label>
                  </div>
                </div>
				
               <div class="form-group">
                <div class="col-sm-12" >
                  <label class="control-label"><h4 style="margin-bottom: 25px;">Which of these two categories apply to you</h4>
                  <h5  style="margin-bottom: 0px;"> <input type="checkbox"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;An ALE with fewer than 100 full time employees(including full time equivalent employees)</span> </h5> &nbsp;&nbsp;&nbsp;&nbsp;
                   <h5  style="margin-top: 0px;"> <input type="checkbox"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;An ALE with more than 100 full time employees(including full time equivalent employees)</span>  </h5> 
                    </label>
                  
                  </div>
                </div> 

			
					
						  <div class=" box-footer pull-right" >
              
                <button type="submit"  class="btn btn-default ">Save</button>
                <button type="button" data-toggle="collapse" href="#collapseTwo" onclick="basic1();" class="btn  btn-success">Continue</button>
              </div>				
					</form>
				    </div>
                      
					
                    </div>
                     
                  </div>
                </div>
                <div class="panel  box ">
                  <div class="parent-tabs box-header with-border" style="opacity: 0.6;">
                   <span id="step2" class="steps col-xs-2" onclick="editbasic2()"  >
<span class="check " style="display:none;" >
<i class="fa fa-check" aria-hidden="true"></i>
<span class="">3</span>
</span>
<span  style="display:none;" class="edit">Edit</span></span>

                    <h4 class="box-title col-xs-6">
                     <div class="fixed-number col-xs-1" style="top: 3px;">
						<span class="block-number">3</span>
						</div>	
                      <a  class="custom-bg col-xs-11" data-parent="#accordion"  style="padding-left: 0;" >
                        Plan Offeirng Criteria
                      </a>
                    </h4>
					
					<div class="box-title col-xs-3 pull-right" style="padding-top: 7px;">
					<p class="custom-bg summary-text pull-right" style=" font-size: 12px; ">
					Variable hour measuring
					</p>
					</div>
					
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse bg-white black">
                    <div class="box-body">
					<p class="highlight-fancy">
			<span class="status"><i class="fa fa-info-circle" aria-hidden="true"></i></span> Fill the from below to measure variable hours and plan offerings
			</p>
                      
			<div class="col-md-offset-1 col-md-10">
			   <form class="form-horizontal" >
			 <div> 
			 <h3>Variable hour measuring</h3>
			
                
               <div class="form-group">
                <div class="col-sm-12" >
                  <label class="control-label"><h4>There are two different methods which can be user to track hours worked for non-fulltime employees to ensure that they are not in-fact full-time. Please select your method used.</h4>
                  <input name="emp1" id="lock-back-method" onchange="functionChecked();" type="radio">&nbsp;&nbsp;&nbsp;&nbsp;
                  <span class="control-checkbox">Lock-Back Measurement Method</span> &nbsp;&nbsp;&nbsp;&nbsp;
                   <input name="emp1" type="radio">&nbsp;&nbsp;&nbsp;&nbsp;<span class="control-checkbox">Monthly Measurement Method</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="emp1" type="radio">&nbsp;&nbsp;&nbsp;&nbsp;<span class="control-checkbox">Non Currently Measuring Hours</span>
                    </label>
                  
                  </div>
                </div> 
                 
                 
               <div class="form-group">
               <div class="col-sm-12" >
                  <label class="control-label"><h4>What is the length of your initial measurement period(# of days)?</h4></label>
                    <input type="text" style="width:50%;"class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                </div>
                
		           <div class="form-group">
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>When does your intial measurement begins?</h4>
                   <input type="radio" name="emp2"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Date of Hire(DOH)</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="emp2"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;1st of Month After DOH</span> 
                    </label>
                  </div>
                   </div>
					
					</div>
			
			
			<div> 
			
			<h3> Plan Offeirng Criteria</h3>
			
			
			<div class="form-group">
                <div class="col-sm-12" >
                  <label class="control-label"><h4>What type of plan offering criteria did you meet this year?(select any that apply).</h4>
                  <input name="emp2"  type="radio">&nbsp;&nbsp;&nbsp;&nbsp;
                  <span class="control-checkbox">Qualifying Offer Method</span> &nbsp;&nbsp;&nbsp;&nbsp;
                   <input name="emp2" type="radio">&nbsp;&nbsp;&nbsp;&nbsp;<span class="control-checkbox">Qualifying Offer Method</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="emp2" type="radio">&nbsp;&nbsp;&nbsp;&nbsp;<span class="control-checkbox">Qualifying Offer Method</span>
                    </label>
                  </div>
                </div> 
                
	
	 			<div class="form-group">
                <div class="col-sm-12" >
                  <label class="control-label"><h4>Since February 9,2012,can you certify that your company.</h4>
                   </label>
                   
                    <div class="col-sm-12">
                  <label class="control-label"><h4>(a) Hasn't changed workforce size to ensure that you are under 100 employees.</h4>
                  <input name="emp2"  type="radio">&nbsp;&nbsp;&nbsp;&nbsp;
                  <span class="control-checkbox">Yes</span> &nbsp;&nbsp;&nbsp;&nbsp;
                   <input name="emp2" type="radio">&nbsp;&nbsp;&nbsp;&nbsp;<span class="control-checkbox">No</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    </label>
                  </div>
                  
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>(b) Hasn't narrowed eligibility"," for your medical plan</h4>
                  <input name="emp2"  type="radio">&nbsp;&nbsp;&nbsp;&nbsp;
                  <span class="control-checkbox">Yes</span> &nbsp;&nbsp;&nbsp;&nbsp;
                   <input name="emp2" type="radio">&nbsp;&nbsp;&nbsp;&nbsp;<span class="control-checkbox">No</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    </label>
                  </div>
                  
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>(c) Has maintained the same or higher % employer contribution to your medical plan costs.</h4>
                  <input name="emp2"  type="radio">&nbsp;&nbsp;&nbsp;&nbsp;
                  <span class="control-checkbox">Yes</span> &nbsp;&nbsp;&nbsp;&nbsp;
                   <input name="emp2" type="radio">&nbsp;&nbsp;&nbsp;&nbsp;<span class="control-checkbox">No</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    </label>
                  </div>
                  </div>
                </div> 
				
				
				
                    
                    </div>
                    
                      <div class="box-footer pull-right" >
         
                <button type="submit"  class="btn btn-default ">Save</button>
                <button type="button" data-toggle="collapse" href="#collapseThree" onclick="basic2()" class="btn btn-success ">Continue</button>
              </div>
              </form>
			</div>
                    
                    </div>
                    
                  </div>
                </div>
                
                <div class="panel  box ">
                  <div class="parent-tabs box-header with-border" style="opacity: 0.6;">
                   <span id="step3" class="steps col-xs-2" onclick="editbasic3()"  >
<span class="check " style="display:none;" >
<i class="fa fa-check" aria-hidden="true"></i>
<span class="">4</span>
</span>
<span  style="display:none;" class="edit">Edit</span></span>

                    <h4 class="box-title col-xs-6">
                      <div class="fixed-number col-xs-1" style="top: 3px">
						<span class="block-number">4</span>
						</div>	
                      <a  class="custom-bg col-xs-11" data-parent="#accordion"  style="padding-left: 0;" >
                        Designated Gov. Entity
                      </a>
                    </h4>
					
					<div class="box-title col-xs-3 pull-right" style="padding-top: 7px;">
					<p class="custom-bg summary-text pull-right" style=" font-size: 12px; ">
					Assigning DGE for reporting purpose
					</p>
					</div>
					
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse bg-white black">
                    <div class="box-body">
					<p class="highlight-fancy">
			<span class="status"><i class="fa fa-info-circle" aria-hidden="true"></i></span> Is a DGE required for reporting purpose
			</p>
           <div class="col-md-offset-1 col-md-10">  
            <form class="form-horizontal" >
             <div class="form-group">
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>Will you be assigning a Designation Governmental Entity(DGE) for reporting purpose?</h4>
                   <input type="radio" name="emp2"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="emp2"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                    </label>
                  </div>
                   </div>       
               
					<div class="designation" >
				
				<div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>Name of Designation Governmental Entity</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                  <div class="col-sm-6">
                  <label class="control-label"><h4>DGE's Employer Identification Number</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                	
				<div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>DGE's street address</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                  <div class="col-sm-6">
                  <label class="control-label"><h4>DGE's City or Town</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
              
                	<div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>DGE's State or Province</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                  <div class="col-sm-6">
                  <label class="control-label"><h4>DGE's Zip Code</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                	<div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>DGE's Contact Phone number</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                  <div class="col-sm-6">
                  <label class="control-label"><h4>DGE's Name of person in contact</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>  
                
                  <div class="form-group">
                   <div class="col-sm-12" style="    margin-top: 10px;margin-bottom: 20px;">
                  <label class="control-label"><h4>What will your DGE be reporting</h4>
                   <input type="radio" name="emp2"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Enrollment Only</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="emp2"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Enrollment and Offer of Coverage</span> 
                    </label>
                  </div>
                   </div> 
             	
					
					</div>
                    
                    <div class="box-footer pull-right" >
                
                <button type="submit"  class="btn btn-default ">Save</button>
                <button type="button" data-toggle="collapse" href="#collapseFour" onclick="basic3();" class="btn btn-success ">Continue</button>
              </div>
              </form>
              </div>
              </div>
                  </div>
                </div>
                
                <div class="panel  box ">
                  <div class="parent-tabs box-header with-border" style="opacity: 0.6;">
                   <span id="step4" class="steps col-xs-2"  onclick="editbasic4()"  >
<span class="check " style="display:none;" >
<i class="fa fa-check" aria-hidden="true"></i>
<span class="">5</span>
</span>
<span  style="display:none;" class="edit">Edit</span></span>

                    <h4 class="box-title col-xs-6">
                      <div class="fixed-number col-xs-1" style="top: 3px">
						<span class="block-number">5</span>
						</div>	
                      <a  class="custom-bg col-xs-11" data-parent="#accordion"  style="padding-left: 0;" >
                        Aggregated Group
                      </a>
                    </h4>
					
					<div class="box-title col-xs-3 pull-right" style="padding-top: 7px;">
					<p class="custom-bg summary-text pull-right" style=" font-size: 12px; ">
					Submit group name and EIN
					</p>
					</div>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse bg-white black">
                    <div class="box-body">
					<p class="highlight-fancy">
			<span class="status"><i class="fa fa-info-circle" aria-hidden="true"></i></span> Enter the details below for company and EIN
			</p>
			<div class="col-md-offset-1 col-md-10">  
                     <img alt="" style="width: 100%;" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/page_is_under_construction.jpg">
                    
                    <div class="box-footer pull-right" >
              
                <button type="submit" data-toggle="collapse" href="#collapseFive"  class="btn btn-default ">Save</button>
                <button type="button" data-toggle="collapse" href="#collapseFive" onclick="basic4()"  class="btn btn-success ">Continue</button>
              </div>
              </div>
              </div>
                  </div>
                </div>
                
                <div class="panel  box ">
                  <div class="parent-tabs box-header with-border" style="opacity: 0.6;">
                    <span id="step5"  onclick="basic5();" class="steps col-xs-2"  >
<span class="check " style="display:none;"  >
<i class="fa fa-check" aria-hidden="true"></i>
<span class="">6</span>
</span>
<span  style="display:none;" class="edit">Edit</span></span>

                    <h4 class="box-title col-xs-6">
                      <div class="fixed-number col-xs-1" style="top: 3px">
						<span class="block-number">6</span>
						</div>	
                      <a  class="custom-bg col-xs-11" data-parent="#accordion"  style="padding-left: 0;" >
                        Anything Else to Tell Us
                      </a>
                    </h4>
					
					<div class="box-title col-xs-3 pull-right" style="padding-top: 7px;">
					<p class="custom-bg summary-text pull-right" style=" font-size: 12px; ">
					Fill additional information
					</p>
					</div>
					
                  </div>
                  <div id="collapseSix" class="panel-collapse collapse bg-white black">
                    <div class="box-body">
					
					<p class="highlight-fancy">
			<span class="status"><i class="fa fa-info-circle" aria-hidden="true"></i></span> Enter additional comments if any
			</p>
				<div class="col-md-offset-1 col-md-10">  
                      <img alt="" style="width: 100%;" src="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/Images/page_is_under_construction.jpg">
                     <div class="box-footer pull-right" >
               
                <button type="submit"  class="btn btn-success ">Save</button>
<!--                 <button type="submit"  class="btn btn-success ">Save & Continue</button> -->
              </div>
              </div>
              </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->
      <!-- END ACCORDION-->
		
		
		
		
		
		
			
		</div>
	
</div>

