
<script type="text/javascript">

function disableyear(){
	if($('#entire_year').is(':checked')) { 

		   $(".specific_year").attr("disabled", true);

		    }else{

		    	 $(".specific_year").attr("disabled", false);
			    }
}

function disableyear1(){
	if($('#entire_year1').is(':checked')) { 

		   $(".specific_year1").attr("disabled", true);

		    }else{

		    	 $(".specific_year1").attr("disabled", false);
			    }
}

$(document).ready(function(){

	$('#benefit_plan_info_menu_main').addClass('active');
	$('#benefit_plan_info_menu_3').addClass('active');



	
	$("input[name='add_plan_year']").click(function(){
	$value = this.value;
	if($value != 0 && $value != 4)
	{
		$('#combination_div2').show();
		$('#combination_div1').hide();
	}
	else if($value == 4){

	$('#combination_div1').show();
	$('#combination_div2').hide();
	}
	else
	{
		$('#combination_div1').hide();
		$('#combination_div2').hide();
	}
	
	});


	$("input[name='add_plan_year2']").click(function(){
		$value = this.value;
		if($value == 8)
		{
			$('#combination_div3').show();
		}
		else
		{
			$('#combination_div3').hide();
			
		}
		
		});


	$("input[name='emp_plan_contribution']").click(function(){
		$value = this.value;
		if($value == 1)
		{
			$('#lowest_cost_div').show();
		}
		else
		{
			$('#lowest_cost_div').hide();
			
		}
		
		});
		
		$("input[name='essential_coverage']").click(function(){
		$value = this.value;
		if($value != 0)
		{
			$('.years2').show();
		}
		else
		{
			$('.years2').hide();
			
		}
		
		});
		
		$("input[name='mv_coverage']").click(function(){
		$value = this.value;
		if($value != 0)
		{
			$('.years1').show();
		}
		else
		{
			$('.years1').hide();
			
		}
		
		});
});
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


function redirect1(){
	
	
		url='<?php echo Yii::$app->request->baseUrl. '/client/payroll' ?>';
		
		location=url;
}


function redirect(){
	
	
		url='<?php echo Yii::$app->request->baseUrl. '/client/dashboard/planclass' ?>';
		
		location=url;
}

function thispage(){
	
	
		url='<?php echo Yii::$app->request->baseUrl. '/client/dashboard/addplanclass' ?>';
		
		location=url;
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
.mr-tp-2 {
	margin-top: 4%;
}

.mr-tp-15 {
	margin-top: 15%;
}

.mr-r-1 {
	margin-right: 1%;
}

.btn {
	white-space: normal;
	/* box-shadow: 3px 2px 5px rgba(136, 136, 136, 0.28);*/
}

ol>li.btn-lg {
	font-size: 16px;
	text-align: left;
}

ol>li.btn-lg>span {
	margin-right: 5%;
	text-align: center;
}

.circle {
	float: left;
	border-radius: 50%;
	background: white;
	color: black;
	width: 22px;
}

.btn-default-cancel {
	background-color: #d2d6de;
}

.btn-success {
	background-color: rgb(0, 166, 36);
}

.form-horizontal .control-label {
	text-align: left;
}

.steps {
	display: none;
	background-image: linear-gradient(#0ebb79, #22a642);
	color: #fff;
	width: 58px;
	border-bottom: 1px solid rgba(0, 0, 0, 0.5);
	border-radius: 0.8em 0.3em 0.3em 0.8em;
	text-align: center;
	line-height: 23px;
	font-weight: 900;
	font-size: 15px;
}

.steps {
	cursor: pointer;
}

.block-number {
	font-family: initial;
	border-radius: 0.3em;
	width: 23px;
	height: 23px;
	letter-spacing: -1px;
	text-align: center;
	line-height: 23px;
	font-weight: 900;
	font-size: 15px;
	left: 3px;
	top: -2px;
	position: absolute;
	color: #fff;
	background-color: #6699cc;
	box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
	background-color: #436799;
	background-image: -moz-linear-gradient(#375984, #436799);
	background-image: -webkit-linear-gradient(#375984, #436799);
}

.highlight-fancy {
	border: 1px solid #FBEED5;
	text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
	padding: 0.1em 0.5em 0.3em 0.5em;
	border-radius: 0.2em;
	box-shadow: 0px 1px 0px rgba(106, 32, 28, 0.1);
	background-color: #ffffcc;
	color: #90724a;
}

.panel.box {
	border-top: none !important;
}

.form-height {
	height: 42px;
	width: 90%;
}

.control-checkbox {
	font-weight: normal;
	font-size: 16px;
}
</style>

<div class="box box-warning container-fluid">
	<div class="box-header with-border ">
              <h3 class="box-title col-xs-6">Add Plan Class - ABC Corp <small>(ACA-10000-1)</small></h3>
             <div class="col-xs-6 pull-right">
			<a class=" btn bg-orange btn-flat btn-social pull-right"> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		</div>
            </div>

	<div class="col-xs-12 header-new-main width-98 hide">
		<span class="header-icon-band"><i class="fa fa-file-text-o icon-band"
			style="font-weight: lighter;"></i></span>
		<p class="sub-header-new">Below is the form to add plan class.</p>
	</div>
	<div class="col-md-12 ">



		<div class="">
			<div class="">
				<div class="box box-solid">

					<!-- /.box-header -->
					<div class="box-body">
						<div class="box-group" id="accordion">
							<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
							<div class="panel  box ">
								<div class="parent-tabs box-header with-border"
									style="background-image: -webkit-linear-gradient(#6394ce, #395fa2);">

									<span id="step" class="steps col-xs-2" onclick="editbasic();">
										<span class="check " style="display: none;"> <i
											class="fa fa-check" aria-hidden="true"></i> <span class="">9</span>
									</span> <span style="display: none;" class="edit">Edit</span>
									</span>

									<h4 class="box-title col-sm-6 col-xs-12">
										<div class="fixed-number col-sm-1 col-xs-2" style="top: 3px;">
											<span class="block-number">9</span>
										</div>
										<a class="custom-bg col-sm-11 col-xs-10"
											data-parent="#accordion"
											style="color: white; padding-left: 0;"> Coverage Type and
											Waiting Period </a>
									</h4>

									<div class="box-title col-xs-3 pull-right"
										style="padding-top: 7px;">
										<p class="custom-bg summary-text pull-right"
											style="font-size: 12px; color: white;"></p>
									</div>

								</div>
								<div id="collapseOne"
									class="panel-collapse collapse in bg-white black">
									<div class="box-body">
										<p class="highlight-fancy">
											<span class="status"><i class="fa fa-info-circle"
												aria-hidden="true"></i></span> Fill the information about your Plan Class
												
										</p>
										<div class="col-md-12 padding-right-0">
											<div class="">
												<div class="">

													<div class=" box-info">

														<!-- /.box-header -->
														<!-- form start -->
														<form class="form-horizontal">
															<div class="col-md-offset-1 col-md-10">
																<div class="col-xs-12">
																	<div class="form-group "
																		>
																		<div class="col-md-5">
																			<label class="control-label"><h4> 9.1&nbsp;&nbsp;&nbsp;Plan Class Number</h4>
																			</label>
																		</div>
																		<div class="col-md-7">
																			<input type="text" class="form-control form-height"
																				id="inputEmail3" placeholder="" value="Plan #1" readonly disabled>

																		</div>
																	</div>

																	
																	<div class="form-group "
																		>
																		<div class="col-md-5">
																			<label class="control-label"><h4> 9.2&nbsp;&nbsp;&nbsp;Plan Class Name</h4>
																			</label>
																		</div>
																		<div class="col-md-7">
																			<input type="text" class="form-control form-height"
																				id="inputEmail3" placeholder="" value=""  >

																		</div>
																	</div>
																	
																	<div class="form-group row"
																		style="margin-top: 10px; margin-bottom: 20px;">
																		<div class="col-md-5">
																			<label class="control-label"><h4> 9.3&nbsp;&nbsp;&nbsp;What type of plan
																					did you offer this year for this class of employee ?</h4>
																			</label>
																		</div>
																		<div class="col-md-3">
																			<div class="row">
																				<input type="radio" name="add_plan_year" value="0"><span
																					class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No Qualifying Plan Offered
																					</span>&nbsp;&nbsp;&nbsp;&nbsp;
																			</div>
																			<div class="row">
																				<input type="radio" name="add_plan_year" value="1"><span
																					class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Self Insured 
																					</span>&nbsp;&nbsp;&nbsp;&nbsp;
																			</div>


																		</div>

																		<div class="col-md-4">
																			<div class="row">
																				<input type="radio" name="add_plan_year" value="2"><span
																					class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Fully Insured
																					</span>&nbsp;&nbsp;&nbsp;&nbsp;
																			</div>
																			<div class="row">
																				<input type="radio" name="add_plan_year" value="3"> <span
																					class="control-checkbox">&nbsp;&nbsp;&nbsp;Multi
																					Employer Plan </span>&nbsp;&nbsp;&nbsp;&nbsp;
																			</div>

																		</div>
																		<div class="col-md-6"></div>
																		<div class="col-md-6">
																			<div class="row">
																				<input type="radio" name="add_plan_year" value="4"><span
																					class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Combination
																					of the options above during the year</span>&nbsp;&nbsp;&nbsp;&nbsp;
																			</div>
																		</div>
																	</div>

																	<div class="" id="combination_div1" style="display: none;">
																		<div class="col-xs-12" style="border: 1px solid #ddd;">
																			<div class="col-sm-4">
																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">January</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																						<option>Select Coverage Type</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																							<option>Multi Employer Plan</option>
																						</select>
																					</div>
																				</div>

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">April</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																								<option>Select Coverage Type</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																							<option>Multi Employer Plan</option>
																						</select>
																					</div>
																				</div>

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">July</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Coverage Type</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																							<option>Multi Employer Plan</option>
																						</select>
																					</div>
																				</div>

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">October</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																								<option>Select Coverage Type</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																							<option>Multi Employer Plan</option>
																						</select>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-4">

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">February</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Coverage Type</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																							<option>Multi Employer Plan</option>
																						</select>
																					</div>
																				</div>
																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">May</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Coverage Type</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																							<option>Multi Employer Plan</option>
																						</select>
																					</div>
																				</div>
																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">August</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																								<option>Select Coverage Type</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																							<option>Multi Employer Plan</option>
																						</select>
																					</div>
																				</div>
																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">November</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Coverage Type</option>
																							<option>Fully Insured</option>
																							<option>Self Insured </option>
																							<option>Multi Employer Plan</option>
																						</select>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-4">

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">March</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Coverage Type</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																							<option>Multi Employer Plan</option>
																						</select>
																					</div>
																				</div>

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">June</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																								<option>Select Coverage Type</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																							<option>Multi Employer Plan</option>
																						</select>
																					</div>
																				</div>

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">September</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Coverage Type</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																							<option>Multi Employer Plan</option>
																						</select>
																					</div>
																				</div>

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">December</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Coverage Type</option>
																							<option>Fully Insured</option>
																							<option>Self Insured</option>
																							<option>Multi Employer Plan</option>
																						</select>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>




																	<div class="" id="combination_div2" style="display: none;">
																		<div class="col-md-12" style="border: 1px solid #ddd;">
																			<div class="form-group" style="margin-top: 10px; margin-bottom: 20px;">
																			<div class="col-md-5">
																				<label class="control-label"><h4></h4>
																				</label>
																			</div>
																			<div class="col-md-3">
																				<div class="row">
																					<input type="radio" name="add_plan_year2" value="0"><span
																						class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Date fo hire (DOH)</span>&nbsp;&nbsp;&nbsp;&nbsp;
																				</div>
																				<div class="row">
																					<input type="radio" name="add_plan_year2" value="1"><span
																						class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;30 Days after DOH
																						</span>&nbsp;&nbsp;&nbsp;&nbsp;
																				</div>
																				<div class="row">
																					<input type="radio" name="add_plan_year2" value="2"><span
																						class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;60 Days after DOH
																						</span>&nbsp;&nbsp;&nbsp;&nbsp;
																				</div>
																				<div class="row">
																					<input type="radio" name="add_plan_year2" value="3"><span
																						class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;90 Days after DOH
																						</span>&nbsp;&nbsp;&nbsp;&nbsp;
																				</div>

																			</div>

																			<div class="col-md-4">
																				<div class="row">
																					<input type="radio" name="add_plan_year2" value="4"><span
																						class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;1st of Month after DOH</span>&nbsp;&nbsp;&nbsp;&nbsp;
																				</div>
																				<div class="row">
																					<input type="radio" name="add_plan_year2" value="5"><span
																						class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;1st of Month after 30 days after DOH</span>&nbsp;&nbsp;&nbsp;&nbsp;
																				</div>
																				
																				<div class="row">
																					<input type="radio" name="add_plan_year2" value="6"><span
																						class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;1st of Month after 60 days after DOH</span>&nbsp;&nbsp;&nbsp;&nbsp;
																				</div>
																				
																				<div class="row">
																					<input type="radio" name="add_plan_year2" value="7"><span
																						class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;1st of Month after 90 days after DOH</span>&nbsp;&nbsp;&nbsp;&nbsp;
																				</div>
																			</div>
																			<div class="col-md-5"></div>
																		<div class="col-md-7">
																			<div class="row">
																				<input type="radio" name="add_plan_year2" value="8"><span
																					class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Combination
																					of the options above during the year</span>&nbsp;&nbsp;&nbsp;&nbsp;
																			</div>
																		</div>
																		</div>
																		
																		<div class="" id="combination_div3" style="display: none;">
																		<div class="col-xs-12" style="border: 1px solid #ddd;margin-bottom: 15px;">
																			<div class="col-md-4">
																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">January</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Waiting Period</option>
																							<option>Date fo hire (DOH)</option>
																							<option>30 Days after DOH</option>
																							<option>60 Days after DOH</option>
																							<option>90 Days after DOH</option>
																							<option>1st of Month after DOH</option>
																							<option>1st of Month after 30 days after DOH</option>
																							<option>1st of Month after 60 days after DOH</option>
																							<option>1st of Month after 90 days after DOH</option>
																							
																						</select>
																					</div>
																				</div>

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">April</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Waiting Period</option>
																							<option>Date fo hire (DOH)</option>
																							<option>30 Days after DOH</option>
																							<option>60 Days after DOH</option>
																							<option>90 Days after DOH</option>
																							<option>1st of Month after DOH</option>
																							<option>1st of Month after 30 days after DOH</option>
																							<option>1st of Month after 60 days after DOH</option>
																							<option>1st of Month after 90 days after DOH</option>
																							
																						</select>
																					</div>
																				</div>

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">July</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Waiting Period</option>
																							<option>Date fo hire (DOH)</option>
																							<option>30 Days after DOH</option>
																							<option>60 Days after DOH</option>
																							<option>90 Days after DOH</option>
																							<option>1st of Month after DOH</option>
																							<option>1st of Month after 30 days after DOH</option>
																							<option>1st of Month after 60 days after DOH</option>
																							<option>1st of Month after 90 days after DOH</option>
																							
																						</select>
																					</div>
																				</div>

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">October</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Waiting Period</option>
																							<option>Date fo hire (DOH)</option>
																							<option>30 Days after DOH</option>
																							<option>60 Days after DOH</option>
																							<option>90 Days after DOH</option>
																							<option>1st of Month after DOH</option>
																							<option>1st of Month after 30 days after DOH</option>
																							<option>1st of Month after 60 days after DOH</option>
																							<option>1st of Month after 90 days after DOH</option>
																							
																						</select>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-4">

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">February</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Waiting Period</option>
																							<option>Date fo hire (DOH)</option>
																							<option>30 Days after DOH</option>
																							<option>60 Days after DOH</option>
																							<option>90 Days after DOH</option>
																							<option>1st of Month after DOH</option>
																							<option>1st of Month after 30 days after DOH</option>
																							<option>1st of Month after 60 days after DOH</option>
																							<option>1st of Month after 90 days after DOH</option>
																							
																						</select>
																					</div>
																				</div>
																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">May</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Waiting Period</option>
																							<option>Date fo hire (DOH)</option>
																							<option>30 Days after DOH</option>
																							<option>60 Days after DOH</option>
																							<option>90 Days after DOH</option>
																							<option>1st of Month after DOH</option>
																							<option>1st of Month after 30 days after DOH</option>
																							<option>1st of Month after 60 days after DOH</option>
																							<option>1st of Month after 90 days after DOH</option>
																							
																						</select>
																					</div>
																				</div>
																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">August</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Waiting Period</option>
																							<option>Date fo hire (DOH)</option>
																							<option>30 Days after DOH</option>
																							<option>60 Days after DOH</option>
																							<option>90 Days after DOH</option>
																							<option>1st of Month after DOH</option>
																							<option>1st of Month after 30 days after DOH</option>
																							<option>1st of Month after 60 days after DOH</option>
																							<option>1st of Month after 90 days after DOH</option>
																							
																						</select>
																					</div>
																				</div>
																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">November</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Waiting Period</option>
																							<option>Date fo hire (DOH)</option>
																							<option>30 Days after DOH</option>
																							<option>60 Days after DOH</option>
																							<option>90 Days after DOH</option>
																							<option>1st of Month after DOH</option>
																							<option>1st of Month after 30 days after DOH</option>
																							<option>1st of Month after 60 days after DOH</option>
																							<option>1st of Month after 90 days after DOH</option>
																							
																						</select>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-4">

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">March</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Waiting Period</option>
																							<option>Date fo hire (DOH)</option>
																							<option>30 Days after DOH</option>
																							<option>60 Days after DOH</option>
																							<option>90 Days after DOH</option>
																							<option>1st of Month after DOH</option>
																							<option>1st of Month after 30 days after DOH</option>
																							<option>1st of Month after 60 days after DOH</option>
																							<option>1st of Month after 90 days after DOH</option>
																							
																						</select>
																					</div>
																				</div>

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">June</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Waiting Period</option>
																							<option>Date fo hire (DOH)</option>
																							<option>30 Days after DOH</option>
																							<option>60 Days after DOH</option>
																							<option>90 Days after DOH</option>
																							<option>1st of Month after DOH</option>
																							<option>1st of Month after 30 days after DOH</option>
																							<option>1st of Month after 60 days after DOH</option>
																							<option>1st of Month after 90 days after DOH</option>
																							
																						</select>
																					</div>
																				</div>

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">September</div>
																					<div class="col-sm-9">
																						<select class="form-control">
																							<option>Select Waiting Period</option>
																							<option>Date fo hire (DOH)</option>
																							<option>30 Days after DOH</option>
																							<option>60 Days after DOH</option>
																							<option>90 Days after DOH</option>
																							<option>1st of Month after DOH</option>
																							<option>1st of Month after 30 days after DOH</option>
																							<option>1st of Month after 60 days after DOH</option>
																							<option>1st of Month after 90 days after DOH</option>
																							
																						</select>
																					</div>
																				</div>

																				<div class="row"
																					style="margin-top: 10px; margin-bottom: 20px;">
																					<div class="col-sm-3">December</div>
																					<div class="col-md-9">
																						<select class="form-control">
																							<option>Select Waiting Period</option>
																							<option>Date fo hire (DOH)</option>
																							<option>30 Days after DOH</option>
																							<option>60 Days after DOH</option>
																							<option>90 Days after DOH</option>
																							<option>1st of Month after DOH</option>
																							<option>1st of Month after 30 days after DOH</option>
																							<option>1st of Month after 60 days after DOH</option>
																							<option>1st of Month after 90 days after DOH</option>
																							
																						</select>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																		
																		
																		
																		
																		</div>
																		
																	</div>

																	<div class="form-group row"
																		style="margin-top: 10px; margin-bottom: 20px;">
																		<div class="col-md-8">
																			<label class="control-label"><h4> 9.4&nbsp;&nbsp;&nbsp;If an employee terminates their employment prior to the last day of the month while
																			enrolled on this plan, will they still be covered under the medical plan through the end of
																			the month?</h4>
																			</label>
																		</div>
																		<div class="col-md-4" style="    margin-top: 10px;">
																			 <input type="radio" name="aggregate_grps2" checked><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="aggregate_grps2" ><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                   

																		</div>
																	</div>
																	

																	

																</div>
																
													
																
															</div>
													
													</div>
													<!-- /.box-body -->

													<!-- /.box-footer -->
													</form>
																<div class="box-footer pull-right padding-right-0">
											<a  class="btn btn-default btn-default-cancel" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/planclass">Cancel</a>
											<a type="submit" class="btn btn-success " href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/planclass">Save and Exit</a>
											<button type="button" data-toggle="collapse"
												href="#collapseOne" onclick="basic()"
												class="btn btn-success">Save and Continue</button>
										</div> 
												</div>

											</div>
										</div>

										
									</div>
								</div>



						
						</div>
					
					<div class="panel box ">
						<div class="parent-tabs box-header with-border"
							style="opacity: 0.6;">
							<span id="step1" class="steps col-xs-2 no-wrap" onclick="editbasic1()"> <span
								class="check " style="display: none;"> <i class="fa fa-check"
									aria-hidden="true"></i> <span class="">10</span>
							</span> <span style="display: none;" class="edit">Edit</span></span>

							<h4 class="box-title col-sm-6 col-xs-12">
								<div class="fixed-number col-sm-1 col-xs-2" style="top: 3px;">
									<span class="block-number">10</span>
								</div>
								<a class="custom-bg col-sm-11 col-xs-10"
									data-parent="#accordion" style="padding-left: 0;">Type of Coverage Offered </a>
							</h4>

							<div class="box-title col-xs-3 pull-right"
								style="padding-top: 7px;">
								<p class="custom-bg summary-text pull-right"
									style="font-size: 12px;"></p>
							</div>

						</div>
						<div id="collapseTwo"
							class="panel-collapse collapse bg-white black">
							<div class="box-body padding-right-0">
								<p class="highlight-fancy">
									<span class="status"><i class="fa fa-info-circle"
										aria-hidden="true"></i></span> Specify the type of coverage offered
										
								</p>

								<div class="col-md-offset-1 col-md-10">
									<form class="form-horizontal">
										<div class="form-group row"
																		style="margin-top: 10px; margin-bottom: 20px;">
																		<div class="col-md-6">
																			<label class="control-label"><h4>10.1&nbsp;&nbsp;&nbsp;Did you offer Minimum Value (MV) coverage to employees?</h4>
																			</label>
																		</div>
																		<div class="col-md-4" style="    margin-top: 10px;">
																			 <input type="radio" name="mv_coverage" value="1" ><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="mv_coverage" value="0" checked><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                   

																		</div>
																	</div>
										
										
										
										<div class="form-group row years1" style="    margin-top: 10px;margin-bottom: 20px;display:none;">
                   <div class="col-md-6">
                  <label class="control-label"><h4>10.1.1&nbsp;&nbsp;&nbsp;What months did you offer MV coverage? </h4>
                    </label>
                  </div>
                  <div class="col-sm-3">
                  
                  <div class="checkbox">
                 <label><input type="checkbox" onclick="disableyear();" id="entire_year">Entire Year</label>
                  </div>
                  <div class="checkbox">
                 <label><input type="checkbox" class="specific_year">January</label>
                  </div>
                  <div class="checkbox">
                 <label><input type="checkbox" class="specific_year">February</label>
                  </div>
                  <div class="checkbox">
                 <label><input type="checkbox" class="specific_year">March</label>
                  </div>
                 
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year">April</label>
                 </div>
                 
                  <div class="checkbox">
                  <label><input type="checkbox" class="specific_year">May</label>
                  </div>
                   <div class="checkbox">
                   <label><input type="checkbox" class="specific_year">June</label>
                  </div>
                  </div>
                  
                  <div class="col-sm-3">
				  <div class="checkbox">
                   <label></label>
                   </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year">July</label>
                   </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year">August</label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year">September</label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year">October</label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year">November</label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year">December</label>
                  </div>
                 
                  </div>
                   </div>
                   
                   
                   <div class="form-group row"
																		style="margin-top: 10px; margin-bottom: 20px;">
																		<div class="col-md-6">
																			<label class="control-label"><h4>10.2&nbsp;&nbsp;&nbsp;Did you offer Minimum Essential coverage to your <b>Employees </b> during this ACA reporting year?</h4>
																			</label>
																		</div>
																		<div class="col-md-4" style="    margin-top: 10px;">
																			 <input type="radio" name="essential_coverage" value="1" ><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="essential_coverage" value="0" checked><span class="control-checkbox" checked>&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                   

																		</div>
																	</div>
										
										
										<div class="form-group row years2" style="    margin-top: 10px;margin-bottom: 20px;display:none;">
                   <div class="col-md-6">
                  <label class="control-label"><h4>10.2.1&nbsp;&nbsp;&nbsp;Select which months during the year did you offer this coverage? </h4>
                    </label>
                  </div>
                  <div class="col-sm-3">
                  
                  <div class="checkbox">
                 <label><input type="checkbox" onclick="disableyear1();" id="entire_year1">Entire Year</label>
                  </div>
                  <div class="checkbox">
                 <label><input type="checkbox" class="specific_year1">January</label>
                  </div>
                  <div class="checkbox">
                 <label><input type="checkbox" class="specific_year1">February</label>
                  </div>
                  <div class="checkbox">
                 <label><input type="checkbox" class="specific_year1">March</label>
                  </div>
                 
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year1">April</label>
                 </div>
                 
                  <div class="checkbox">
                  <label><input type="checkbox" class="specific_year1">May</label>
                  </div>
                   <div class="checkbox">
                   <label><input type="checkbox" class="specific_year1">June</label>
                  </div>
                  </div>
                  
                  <div class="col-sm-3">
				  <div class="checkbox">
                   <label></label>
                   </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year1">July</label>
                   </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year1">August</label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year1">September</label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year1">October</label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year1">November</label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year1">December</label>
                  </div>
                 
                  </div>
                   </div>
                   
                   <div class="form-group row"
																		style="margin-top: 10px; margin-bottom: 20px;">
																		<div class="col-md-6">
																			<label class="control-label"><h4>10.3&nbsp;&nbsp;&nbsp;Did you offer Minimum Essential coverage to <b>Spouses of your Employees </b> during this ACA reporting year?</h4>
																			</label>
																		</div>
																		<div class="col-md-4" style="    margin-top: 10px;">
																			 <input type="radio" name="spouses" checked=""><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="spouses"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                   

																		</div>
																	</div>
																	
																	
																	<div class="form-group row"
																		style="margin-top: 10px; margin-bottom: 20px;">
																		<div class="col-md-6">
																			<label class="control-label"><h4>10.4&nbsp;&nbsp;&nbsp;Was this offer of coverage conditional?
																			(Example: An offer of coverage not available to a spouse who is employed and offered coverage at their own place of employment)
																			</h4></label>
																		</div>
																		<div class="col-md-4" style="    margin-top: 10px;">
																			 <input type="radio" name="offer_coverage" checked=""><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="offer_coverage"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                   

																		</div>
																	</div>
																	
																	<div class="form-group row"
																		style="margin-top: 10px; margin-bottom: 20px;">
																		<div class="col-md-6">
																			<label class="control-label"><h4>10.5&nbsp;&nbsp;&nbsp;Did you offer Minimum Essential Coverage to <b>Dependents of Your Employees</b> during the ACA reporting year?</h4>
																			</label>
																		</div>
																		<div class="col-md-4" style="    margin-top: 10px;">
																			 <input type="radio" name="minimum_covergae" checked=""><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="minimum_covergae"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                   

																		</div>

																		</div>
											</form>
																	</div>

										
								  <div class=" box-footer pull-right padding-right-0">

											<a  class="btn btn-default btn-default-cancel" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/planclass">Cancel</a>
											<a type="submit" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/planclass" class="btn btn-success ">Save and Exit</a>
											<button type="button" data-toggle="collapse"
												href="#collapseTwo" onclick="basic1();"
												class="btn  btn-success">Save and Continue</button>
										</div>	
								
								</div>
	                        

							</div>

						</div>
						
						
					<div class="panel box ">
						<div class="parent-tabs box-header with-border"
							style="opacity: 0.6;">
							<span id="step1" class="steps col-xs-2" onclick="editbasic2()"> <span
								class="check " style="display: none;"> <i class="fa fa-check"
									aria-hidden="true"></i> <span class="">11</span>
							</span> <span style="display: none;" class="edit">Edit</span></span>

							<h4 class="box-title col-sm-6 col-xs-12" style="">
								<div class="fixed-number col-sm-1 col-xs-2" style="top: 3px;">
									<span class="block-number">11</span>
								</div>
								<a class="custom-bg col-sm-11 col-xs-10"
									data-parent="#accordion" style="padding-left: 0;">Employee Contributions </a>
							</h4>

							<div class="box-title col-xs-3 pull-right"
								style="padding-top: 7px;">
								<p class="custom-bg summary-text pull-right"
									style="font-size: 12px;"></p>
							</div>

						</div>
						<div id="collapseThree"
							class="panel-collapse collapse bg-white black">
							<div class="box-body padding-right-0">
								<p class="highlight-fancy">
									<span class="status"><i class="fa fa-info-circle"
										aria-hidden="true"></i></span> Specify your Employee Contributions
										
								</p>

								<div class="col-md-offset-1 col-md-10">
									<form class="form-horizontal" >
			 <div> 
			
			   <div class="form-group">
                <div class="col-sm-12" >
                  <label class="control-label">
				  <h4>"Pay or Play" rule require employees to offer coverage that is affordable based upon  a percentage of each employee's household income. Employers would rarely know this number, so the IRS allows for assumptions to be made called "safe harbors"</h4>
				  <h4>11.1&nbsp;&nbsp;&nbsp;Please choose a safe harbor for reporting purposes. This safe harbor will apply for this specific plan class only.</h4>
                  
				  <div>
				  <input name="emp1111" id="lock-back-method"  type="radio">&nbsp;&nbsp;&nbsp;&nbsp;
                  <span class="control-checkbox">Assume W2 earnings is household earnings (W2 safe harbor)</span> &nbsp;&nbsp;&nbsp;&nbsp;
				  </div>
				  
				  <div>
                   <input name="emp1111" type="radio">&nbsp;&nbsp;&nbsp;&nbsp;
				   <span class="control-checkbox">Assume household earnings meets federal poverty line (federal poverty line safe harbor)</span>
				  </div> 
				   
				   <div>
                    <input name="emp1111" type="radio">&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="control-checkbox">Use employee's rate of pay to determine household earnings (rate of pay safe harbor)</span>
					</div>
					
					<div>
					<input name="emp1111" type="radio">&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="control-checkbox">Do not apply a safe harbor to this plan class</span>
					</div>
					
                    </label>
                  
                  </div>
                </div> 
                                 
		           <div class="form-group">
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>11.2&nbsp;&nbsp;&nbsp;Were employee plan contributions for this class consistent across all employees, versus specific to each employee based upon age, salary or other criteria?</h4>
                   <input type="radio" name="emp_plan_contribution" class="emp_plan_contribution" value="1"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="emp_plan_contribution" checked class="emp_plan_contribution" value="2"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                    </label>
                  </div>
                   </div>
				   
				   <div class="form-group" id="lowest_cost_div" style="display:none;">
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>11.2.1&nbsp;&nbsp;&nbsp;What were the lowest cost employee-only premiums each month for all employees in the class?</h4>
				<div class="col-sm-12 padding-left-0">

				<div class="col-sm-6 padding-left-0">
				  <span class=""><h4>January</h4></span>
               <div class="input-group ">
					<span class="input-group-addon">$ </span> <input type="text"  name=""  class="form-control form-height numbers" >
				</div>
				</div>
				  
				  <div class="col-sm-6 padding-left-0">
				  <span class=""><h4>February</h4></span> 
				   <div class="input-group ">
					<span class="input-group-addon">$ </span>
				  <input type="text" class="form-control form-height numbers">
				  </div> </div>
				  
                   <div class="col-sm-6 padding-left-0">
				  <span class=""><h4>March</h4></span> 
				   <div class="input-group ">
					<span class="input-group-addon">$ </span>
				  <input type="text" class="form-control form-height numbers">
				  </div> </div>
				  
				  <div class="col-sm-6 padding-left-0">
				  <span class=""><h4>April</h4></span> 
				   <div class="input-group ">
					<span class="input-group-addon">$ </span>
				  <input type="text" class="form-control form-height numbers">
				  </div> </div>
				  
				  <div class="col-sm-6 padding-left-0 ">
				  <span class=""><h4>May</h4></span> 
				   <div class="input-group ">
					<span class="input-group-addon">$ </span>
				  <input type="text" class="form-control form-height numbers">
				  </div> </div>
				  
				  <div class="col-sm-6 padding-left-0">
				  <span class=""><h4>June</h4></span> 
				   <div class="input-group ">
					<span class="input-group-addon">$ </span>
				  <input type="text" class="form-control form-height numbers">
				  </div> </div>
				  
				  <div class="col-sm-6 padding-left-0">
				  <span class=""><h4>July</h4></span> 
				   <div class="input-group ">
					<span class="input-group-addon">$ </span>
				  <input type="text" class="form-control form-height numbers">
				  </div> </div>
				  
				  <div class="col-sm-6 padding-left-0">
				  <span class=""><h4>August</h4></span> 
				   <div class="input-group ">
					<span class="input-group-addon">$ </span>
				  <input type="text" class="form-control form-height numbers">
				  </div> </div>
				  
				  <div class="col-sm-6 padding-left-0">
				  <span class=""><h4>September</h4></span> 
				   <div class="input-group ">
					<span class="input-group-addon">$ </span>
				  <input type="text" class="form-control form-height numbers">
				  </div> </div>
				  
				  <div class="col-sm-6 padding-left-0">
				  <span class=""><h4>October</h4></span> 
				   <div class="input-group ">
					<span class="input-group-addon">$ </span>
				  <input type="text" class="form-control form-height numbers">
				  </div> </div>
				  
				  <div class="col-sm-6 padding-left-0">
				  <span class=""><h4>November</h4></span> 
				   <div class="input-group ">
					<span class="input-group-addon">$ </span>
				  <input type="text" class="form-control form-height numbers">
				  </div> </div>
				  <div class="col-sm-6 padding-left-0">
				  <span class=""><h4>December</h4></span> 
				   <div class="input-group ">
					<span class="input-group-addon">$ </span>
				  <input type="text" class="form-control form-height numbers">
				  </div> </div>
				  
				  
				 
				  
				  </div>
                  
                    </label>
                  </div>
                   </div>
					
					</div>
			<div> 
                </div> 
              </form>
				
                    </div>
					  <div class="box-footer pull-right" >
         
                <a type="submit"  class="btn btn-default btn-default-cancel" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/planclass">Cancel</a>
                <a type="submit"  class="btn btn-success " href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/planclass">Save and Exit</a>
				<button type="button" data-toggle="collapse" href="#" onclick="redirect1();" class="btn  btn-success">Save & Continue</button>
              </div>
								</div>
            

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
</div>
	</div>
</div>


