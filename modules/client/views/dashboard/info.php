
<!-- InputMask -->





<?php



$country_list = array(
  "United States",
  "Afghanistan",
  "Albania",
  "Algeria",
  "Andorra",
  "Angola",
  "Antigua and Barbuda",
  "Argentina",
  "Armenia",
  "Australia",
  "Austria",
  "Azerbaijan",
  "Bahamas",
  "Bahrain",
  "Bangladesh",
  "Barbados",
  "Belarus",
  "Belgium",
  "Belize",
  "Benin",
  "Bhutan",
  "Bolivia",
  "Bosnia and Herzegovina",
  "Botswana",
  "Brazil",
  "Brunei",
  "Bulgaria",
  "Burkina Faso",
  "Burundi",
  "Cambodia",
  "Cameroon",
  "Canada",
  "Cape Verde",
  "Central African Republic",
  "Chad",
  "Chile",
  "China",
  "Colombi",
  "Comoros",
  "Congo (Brazzaville)",
  "Congo",
  "Costa Rica",
  "Cote d'Ivoire",
  "Croatia",
  "Cuba",
  "Cyprus",
  "Czech Republic",
  "Denmark",
  "Djibouti",
  "Dominica",
  "Dominican Republic",
  "East Timor (Timor Timur)",
  "Ecuador",
  "Egypt",
  "El Salvador",
  "Equatorial Guinea",
  "Eritrea",
  "Estonia",
  "Ethiopia",
  "Fiji",
  "Finland",
  "France",
  "Gabon",
  "Gambia, The",
  "Georgia",
  "Germany",
  "Ghana",
  "Greece",
  "Grenada",
  "Guatemala",
  "Guinea",
  "Guinea-Bissau",
  "Guyana",
  "Haiti",
  "Honduras",
  "Hungary",
  "Iceland",
  "India",
  "Indonesia",
  "Iran",
  "Iraq",
  "Ireland",
  "Israel",
  "Italy",
  "Jamaica",
  "Japan",
  "Jordan",
  "Kazakhstan",
  "Kenya",
  "Kiribati",
  "Korea, North",
  "Korea, South",
  "Kuwait",
  "Kyrgyzstan",
  "Laos",
  "Latvia",
  "Lebanon",
  "Lesotho",
  "Liberia",
  "Libya",
  "Liechtenstein",
  "Lithuania",
  "Luxembourg",
  "Macedonia",
  "Madagascar",
  "Malawi",
  "Malaysia",
  "Maldives",
  "Mali",
  "Malta",
  "Marshall Islands",
  "Mauritania",
  "Mauritius",
  "Mexico",
  "Micronesia",
  "Moldova",
  "Monaco",
  "Mongolia",
  "Morocco",
  "Mozambique",
  "Myanmar",
  "Namibia",
  "Nauru",
  "Nepal",
  "Netherlands",
  "New Zealand",
  "Nicaragua",
  "Niger",
  "Nigeria",
  "Norway",
  "Oman",
  "Pakistan",
  "Palau",
  "Panama",
  "Papua New Guinea",
  "Paraguay",
  "Peru",
  "Philippines",
  "Poland",
  "Portugal",
  "Qatar",
  "Romania",
  "Russia",
  "Rwanda",
  "Saint Kitts and Nevis",
  "Saint Lucia",
  "Saint Vincent",
  "Samoa",
  "San Marino",
  "Sao Tome and Principe",
  "Saudi Arabia",
  "Senegal",
  "Serbia and Montenegro",
  "Seychelles",
  "Sierra Leone",
  "Singapore",
  "Slovakia",
  "Slovenia",
  "Solomon Islands",
  "Somalia",
  "South Africa",
  "Spain",
  "Sri Lanka",
  "Sudan",
  "Suriname",
  "Swaziland",
  "Sweden",
  "Switzerland",
  "Syria",
  "Taiwan",
  "Tajikistan",
  "Tanzania",
  "Thailand",
  "Togo",
  "Tonga",
  "Trinidad and Tobago",
  "Tunisia",
  "Turkey",
  "Turkmenistan",
  "Tuvalu",
  "Uganda",
  "Ukraine",
  "United Arab Emirates",
  "United Kingdom",
  "Uruguay",
  "Uzbekistan",
  "Vanuatu",
  "Vatican City",
  "Venezuela",
  "Vietnam",
  "Yemen",
  "Zambia",
  "Zimbabwe"
 );

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






<script type="text/javascript">


$(function(){
	  // get hash value
	  var hash = window.location.hash;
	  // now scroll to element with that id
	  $('.basic_info_menu').removeClass('active');
	  if(hash == '#basicinformation'){
		 
		 $("#collapseOne").addClass( "in" );
		  $('html, body').animate({ scrollTop: $(hash).offset().top -110  }); 
		  $('#basic_info_menu_1').addClass('active');
	  }
	  else if(hash == '#empstatustracking'){
		 
		 
	        
			
	$(".parent-tabs").css( "background-image", "" );
	$( "#collapseTwo" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
    $( "#collapseTwo" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	
		 $('#basic_info_menu_2').addClass('active');
		//  $("#collapseOne").removeClass( "in" );
		  $("#collapseTwo").addClass( "in" );
		//  $('#basic_btn_1').trigger('click');
		   $('html, body').animate({ scrollTop: $(hash).offset().top -126  }); 
	  }else if(hash == '#planofferingcriteria'){
	//	  $("#collapseOne").removeClass( "in" );
		 // $('#basic_btn_1').trigger('click');
		 // $('#basic_btn_2').trigger('click');
		 
		 $(".parent-tabs").css( "background-image", "" );
	$( "#collapseThree" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
    $( "#collapseThree" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
		 $("#collapseThree").addClass( "in" );
		   $('html, body').animate({ scrollTop: $(hash).offset().top -146  }); 
		   $('#basic_info_menu_3').addClass('active');
	  }
	  else if(hash == '#designatedgovtentity'){
		// $("#collapseOne").removeClass( "in" );
		//  $('#basic_btn_1').trigger('click');
		//  $('#basic_btn_2').trigger('click');
		//  $('#basic_btn_3').trigger('click');
		 $(".parent-tabs").css( "background-image", "" );
	$( "#collapseFour" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
    $( "#collapseFour" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
		 $("#collapseFour").addClass( "in" );
		   $('html, body').animate({ scrollTop: $(hash).offset().top -156  }); 
		    $('#basic_info_menu_4').addClass('active');
	  }
	  else if(hash == '#aggregatedgroup'){
	//	  $("#collapseOne").removeClass( "in" );
		//  $('#basic_btn_1').trigger('click');
		//  $('#basic_btn_2').trigger('click');
		//  $('#basic_btn_3').trigger('click');
		//  $('#basic_btn_4').trigger('click');
		 $(".parent-tabs").css( "background-image", "" );
	$( "#collapseFive" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
    $( "#collapseFive" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
		 $("#collapseFive").addClass( "in" );
		   $('html, body').animate({ scrollTop: $(hash).offset().top -166  }); 
		   $('#basic_info_menu_5').addClass('active');
	  }
	  else if(hash == '#anythingelse'){
	//	 $("#collapseOne").removeClass( "in" );
		//  $('#basic_btn_1').trigger('click');
		//  $('#basic_btn_2').trigger('click');
		 // $('#basic_btn_3').trigger('click');
		//  $('#basic_btn_4').trigger('click');
	//	  $('#basic_btn_5').trigger('click');
	
	 $(".parent-tabs").css( "background-image", "" );
	$( "#collapseSix" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
    $( "#collapseSix" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseSix").addClass( "in" );
		   $('html, body').animate({ scrollTop: $(hash).offset().top -190  });
			$('#basic_info_menu_6').addClass('active');		   
	  }
	 
	  return false;
	  
	    e.preventDefault();

	});
	
	
	
function leftNavigation(){
	  // get hash value
	  var hash = window.location.hash;
	  // now scroll to element with that id
	  $('.basic_info_menu').removeClass('active');
	  if(hash == '#basicinformation'){
		 
		  $(".parent-tabs").css( "background-image", "" );
	$( "#collapseOne" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
    $( "#collapseOne" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
		 $("#collapseOne").addClass( "in" );
		  $('html, body').animate({ scrollTop: $(hash).offset().top -110  }); 
		  $('#basic_info_menu_1').addClass('active');
		  editbasic();
	  }
	  else if(hash == '#empstatustracking'){
		 
		 
	        
			
	$(".parent-tabs").css( "background-image", "" );
	$( "#collapseTwo" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
    $( "#collapseTwo" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	
		 $('#basic_info_menu_2').addClass('active');
		//  $("#collapseOne").removeClass( "in" );
		  $("#collapseTwo").addClass( "in" );
		//  $('#basic_btn_1').trigger('click');
		   $('html, body').animate({ scrollTop: $(hash).offset().top -126  }); 
		   editbasic1();
	  }else if(hash == '#planofferingcriteria'){
	//	  $("#collapseOne").removeClass( "in" );
		 // $('#basic_btn_1').trigger('click');
		 // $('#basic_btn_2').trigger('click');
		 
		 $(".parent-tabs").css( "background-image", "" );
	$( "#collapseThree" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
    $( "#collapseThree" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
		 $("#collapseThree").addClass( "in" );
		   $('html, body').animate({ scrollTop: $(hash).offset().top -146  }); 
		   $('#basic_info_menu_3').addClass('active');
		   editbasic2();
	  }
	  else if(hash == '#designatedgovtentity'){
		// $("#collapseOne").removeClass( "in" );
		//  $('#basic_btn_1').trigger('click');
		//  $('#basic_btn_2').trigger('click');
		//  $('#basic_btn_3').trigger('click');
		 $(".parent-tabs").css( "background-image", "" );
	$( "#collapseFour" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
    $( "#collapseFour" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
		 $("#collapseFour").addClass( "in" );
		   $('html, body').animate({ scrollTop: $(hash).offset().top -156  }); 
		    $('#basic_info_menu_4').addClass('active');
		    editbasic3();
	  }
	  else if(hash == '#aggregatedgroup'){
	//	  $("#collapseOne").removeClass( "in" );
		//  $('#basic_btn_1').trigger('click');
		//  $('#basic_btn_2').trigger('click');
		//  $('#basic_btn_3').trigger('click');
		//  $('#basic_btn_4').trigger('click');
		 $(".parent-tabs").css( "background-image", "" );
	$( "#collapseFive" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
    $( "#collapseFive" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
		 $("#collapseFive").addClass( "in" );
		   $('html, body').animate({ scrollTop: $(hash).offset().top -166  }); 
		   $('#basic_info_menu_5').addClass('active');
		   editbasic4();
	  }
	  else if(hash == '#anythingelse'){
	//	 $("#collapseOne").removeClass( "in" );
		//  $('#basic_btn_1').trigger('click');
		//  $('#basic_btn_2').trigger('click');
		 // $('#basic_btn_3').trigger('click');
		//  $('#basic_btn_4').trigger('click');
	//	  $('#basic_btn_5').trigger('click');
	
	 $(".parent-tabs").css( "background-image", "" );
	$( "#collapseSix" ).prev().css( "background-image", "-webkit-linear-gradient(#6394ce,#395fa2)" );
	$(".custom-bg").css( "color", "" );
    $( "#collapseSix" ).prev().find('.custom-bg').css("color", "white");
	$( ".panel-collapse" ).removeClass("in");
	
	$("#collapseSix").addClass( "in" );
		   $('html, body').animate({ scrollTop: $(hash).offset().top -190  });
			$('#basic_info_menu_6').addClass('active');	
			 editbasic5();	   
	  }
	 
	  return false;
	  
	    e.preventDefault();

	}
$(document).ready(function(){
	/*$(document).ready(function(){
 $('.company_certify').click(function(){
   $val = this.value;
   
   if($val == 1)
   {
    $('input:radio[name=emp3]')[0].checked = true;
    $('input:radio[name=emp5]')[0].checked = true;
    $('input:radio[name=emp4]')[0].checked = true;
   
   }
   else if($val == 2)
   {
    $('input:radio[name=emp3]')[1].checked = true;
    $('input:radio[name=emp5]')[1].checked = true;
    $('input:radio[name=emp4]')[1].checked = true;
   
   }
  });
 
});*/
	
	$("input[name='dge-reporting']").click(function(){
	$value = this.value;
	if($value!=1)
	{
		$('.designation').hide();
	}else{
		$('.designation').show();
	}
	});
	
	$("input[name='other_entity_filling']").click(function(){
	$value = this.value;
	if($value!=1)
	{
		$('.other_entity_filling_yes').hide();
	}else{
		$('.other_entity_filling_yes').show();
	}
	});
	$("input[name='aggregate_grps2']").click(function(){
	$value = this.value;
	if($value!=1)
	{
		$('.filling_forms').hide();
	}else{
		$('.filling_forms').show();
	}
	});
	
	$("input[name='non_fulltime_employees']").click(function(){
	$value = this.value;
	if($value!=1)
	{
		$('.initialmeasurement').hide();
	}else{
		$('.initialmeasurement').show();
	}
	});
	});
function addnewrow(id)
{
	id++;
	$newrow = '<div class="row" id="row_'+id+'" style="margin-bottom:10px;"><div class="col-sm-3 padding-right-0"><p>Group Name</p><input type="text" class="form-control add_more" id="inputEmail3" placeholder=""></div>'
			+"<div class='col-sm-3 padding-right-0 padding-left-5'><p>Group EIN</p><input type='text' class='form-control add_more phone' id='inputEmail3' placeholder='' data-inputmask='mask: 99-9999999' data-mask></div>"
			+'<div class="col-sm-2 padding-left-5"><p>&nbsp;&nbsp;</p><button class="btn btn-danger" onclick="removerow('+id+');" id="">Remove</button></div></div>';
		
		$($newrow).insertBefore("#group_div_1");
}

function removerow(id)
{
	$('#row_'+id).remove();
}
function disableyear(){
	if($('#entire_year').is(':checked')) { 

		   $(".specific_year").attr("disabled", true);

		    }else{

		    	 $(".specific_year").attr("disabled", false);
			    }
}


$(function() {






$("[data-mask]").inputmask();

$( "#selected_others" ).click(function() {

		if($('#selected_others').is(':checked')) { 

			   $(".others_comments").removeClass("hide");

			    }else{

			    	 $(".others_comments").addClass("hide");
				    }

	    
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
	
	 $('.basic_info_menu').removeClass('active');
	 $('#basic_info_menu_2').addClass('active');
	 
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
	
	 $('.basic_info_menu').removeClass('active');
	 $('#basic_info_menu_1').addClass('active');
	 
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
	
	//$( "#collapseTwo,#collapseThree,#collapseFour,#collapseFive,#collapseSix" ).prev().css("opacity", "0.6");
	
}

function basic1(){
$('.basic_info_menu').removeClass('active');
	 $('#basic_info_menu_3').addClass('active');
	 
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
	 $('.basic_info_menu').removeClass('active');
	 $('#basic_info_menu_2').addClass('active');
	 
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
	
	//$( "#collapseThree,#collapseFour,#collapseFive,#collapseSix" ).prev().css("opacity", "0.6");
}



function basic2(){
 $('.basic_info_menu').removeClass('active');
	 $('#basic_info_menu_4').addClass('active');
	 
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
	$('.basic_info_menu').removeClass('active');
	 $('#basic_info_menu_3').addClass('active');
	 
	 
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
	
	//$( "#collapseFour,#collapseFive,#collapseSix" ).prev().css("opacity", "0.6");
}

function basic3(){
	 $('.basic_info_menu').removeClass('active');
	 $('#basic_info_menu_5').addClass('active');
	 
	 
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
	$('.basic_info_menu').removeClass('active');
	 $('#basic_info_menu_4').addClass('active');
	 
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
	
	//$( "#collapseFive,#collapseSix" ).prev().css("opacity", "0.6");
}

function basic4(){
	$('.basic_info_menu').removeClass('active');
	 $('#basic_info_menu_6').addClass('active');
	
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
	$('.basic_info_menu').removeClass('active');
	 $('#basic_info_menu_5').addClass('active');
	
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
	
//	$( "#collapseSix" ).prev().css("opacity", "0.6");
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
*/
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
    .btn-default-cancel{
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
    left: 3px;
    top: -2px;      
	position: absolute;
	color: #fff;
    background-color: #6699cc; 
    box-shadow: inset 0 1px 2px rgba(0,0,0,0.3); 
    background-color: #436799;
    background-image: -moz-linear-gradient(#375984,#436799);
    background-image: -webkit-linear-gradient(#375984,#436799); 
	}
	.padding-left-5{
		padding-left:5px;
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
	
	.panel.box{
		    border-top:none!important; 
	}
	.form-height{
    height: 42px;
    width: 90%;
	}
		.add_more{
	height: 42px;
    width: 100%;	
	}
	.control-checkbox{
	    font-weight: normal;
    font-size: 16px;
	}
	.span-label{
    display: inline-block;
    max-width: 100%;
    font-weight: bold;
	}
	
</style>

<div class="box box-warning container-fluid">
	<div class="box-header with-border">
              <h3 class="box-title col-xs-6">Basic Reporting Information - ABC Corp <small>(ACA-10000-1)</small></h3>
             <div class="col-xs-6 pull-right">
			<a class=" btn bg-orange btn-flat btn-social pull-right"> <i
				class="fa fa-youtube-play"></i>View Help Video
			</a>
		</div>
            </div>
			
 <div class="col-xs-12 header-new-main width-98 hide"> 
	<span class="header-icon-band"><i class="fa fa-file-text-o icon-band" style="font-weight: lighter;"></i></span>
	<p class="sub-header-new">Complete the sections below for basic information, status tracking, plan offering and DGE.</p>
</div>
		<div class="col-md-12 " >
		
		
		
		<div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
           
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel  box " id="basicinformation">
                  <div class="parent-tabs box-header with-border" style="background-image:-webkit-linear-gradient(#6394ce,#395fa2);">
				  
				  <span id="step" class="steps col-xs-2" onclick="editbasic();"   >
<span class="check " style="display:none;" >
<i class="fa fa-check" aria-hidden="true"></i>
<span class="">1</span>
</span>
<span  style="display:none;" class="edit">Edit</span></span> 
				  
                    <h4 class="box-title col-xs-6">
					<div class="fixed-number col-md-1 col-xs-2" style="top: 3px;">
						<span class="block-number">1</span>
						</div>	
                      <a  class="custom-bg col-md-11 col-xs-10" data-parent="#accordion" onclick="editbasic();" style="color:white; padding-left: 0;" >

					 Basic Information
                      </a>
                    </h4>
					
					<div class="box-title col-xs-3 pull-right" style="padding-top: 7px;">
					<p class="custom-bg summary-text pull-right" style="font-size: 12px; color:white; ">
					Provide employer information
					</p>
					</div>
					
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse bg-white black" >
                    <div class="box-body">
                    <p class="highlight-fancy">
			<span class="status"><i class="fa fa-info-circle" aria-hidden="true"></i></span> Fill the basic information in the form below
			
			 
			</p>
                      <div class="col-md-12 padding-right-0" >
					<div class="row">
						<div class="col-md-12" >
						
							<div class=" box-info">
          
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
              <div class="col-xs-offset-1 col-xs-10">
               <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>1.1&nbsp;&nbsp;&nbsp;Employer Name (Legal Name for IRS Filing)</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="" value="ABC Corp">
                  </div>
                  
                    <div class="col-sm-6">
                  <label class="control-label"><h4>1.2&nbsp;&nbsp;&nbsp;Employer Identification Number (EIN)</h4></label>
                    <input type="text" class="form-control form-height phone" id="inputEmail3" placeholder="" value="22-2454545"  data-inputmask='"mask": "99-9999999"' data-mask>
                  </div>
                </div>

                <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>1.3&nbsp;&nbsp;&nbsp;Tax Reporting Year</h4></label>
                    
                    <select class="form-control form-height">
                    <option>Select</option>
                     <option>2015</option>
                      <option selected>2016</option>
                      
                    </select>
                    
                  </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>1.4&nbsp;&nbsp;&nbsp;Contact Person Legal First Name</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                   <div class="col-sm-6">
                  <label class="control-label"><h4>1.5&nbsp;&nbsp;&nbsp;Contact Person Legal Middle Initial</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>1.6&nbsp;&nbsp;&nbsp;Contact Person Legal Last Name</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                   <div class="col-sm-6">
                  <label class="control-label"><h4>1.7&nbsp;&nbsp;&nbsp;Contact Person Suffix</h4></label>
                   <select class="form-control form-height">
										<option>Select</option>
                     <?php foreach ($suffix as  $key => $value) {?>
                     <option><?php echo $value; ?> </option>
                     <?php } ?>
                     </select> 
                  </div>
                </div>
                
                 <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>1.8&nbsp;&nbsp;&nbsp;Title of Contact Person</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                   <div class="col-sm-6">
                  <label class="control-label"><h4>1.9&nbsp;&nbsp;&nbsp;Contact Person Email Address</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                 <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>1.10&nbsp;&nbsp;&nbsp;Contact Telephone Number</h4></label>
                    <input type="text" class="form-control phone form-height" id="" placeholder="" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                  </div>
                </div>
                
                <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>1.11&nbsp;&nbsp;&nbsp;Street Address 1</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                  <div class="col-sm-6">
                  <label class="control-label"><h4>1.12&nbsp;&nbsp;&nbsp;Street Address 2 (Apt #, Suite #)</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
				
				
                 <div class="form-group">
				 <div class="col-sm-6">
                  <label class="control-label"><h4>1.13&nbsp;&nbsp;&nbsp;Country</h4></label>
				  <select class="form-control form-height">
                                 <?php foreach ($country_list as  $key => $value) {?>
                                 <option><?php echo $value; ?> </option>
                                 <?php } ?>
                                 </select>
                  </div>
				  
				   <div class="col-sm-6">
                  <label class="control-label"><h4>1.14&nbsp;&nbsp;&nbsp;State or Province</h4></label>
                   <select class="form-control form-height">
                      <option>Select</option>
                                 <?php foreach ($usStates as  $key => $value) {?>
                                 <option> <?php echo $key;?>  <?php echo $value; ?> </option>
                                 <?php } ?>
                                 </select>
                  </div>
				  
              
                </div>
                
                 <div class="form-group">

                <div class="col-sm-6">
                  <label class="control-label"><h4>1.15&nbsp;&nbsp;&nbsp;City or Town</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                   <div class="col-sm-6">
                  <label class="control-label"><h4>1.16&nbsp;&nbsp;&nbsp;ZIP or Foreign Postal Code</h4></label>
                    <input type="text" class="form-control form-height numbers" maxlength="5" id="inputEmail3" placeholder="">
                  </div>
                </div>
          
               
                
                <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>1.17&nbsp;&nbsp;&nbsp;Employee Benefit Broker Name</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                  <div class="col-sm-6">
                  <label class="control-label"><h4>1.18&nbsp;&nbsp;&nbsp;Employee Benefit Broker Email Address</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                   <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>1.19&nbsp;&nbsp;&nbsp;Employee Benefit Broker Telephone Number</h4></label>
                    <input type="text" class="form-control form-height phone" id="inputEmail3" placeholder="" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                  </div>
                  
                  
                </div>
                
              </div>
              <!-- /.box-body -->
           
              <!-- /.box-footer -->
            </form>
          </div>
				  			
						</div>
					</div>
				<div class="box-footer pull-right padding-right-0" >
                <a class="btn btn-default btn-default-cancel" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/reporting#basicinformation">Cancel</a>
				<a class="btn btn-success" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/reporting#basicinformation">Save and Exit</a>
											
                <button type="button" data-toggle="collapse" href="#collapseOne" onclick="basic()" id="basic_btn_1" class="btn btn-success">Save and Continue</button>
              </div>	
				
				</div>
				
				</div>
			
				
				
                    </div>
                  </div>
                </div>
                <div class="panel   box " id="empstatustracking">
                  <div class="parent-tabs box-header with-border" >
				  <span id="step1" class="steps col-xs-2" onclick="editbasic1()"   >
<span class="check " style="display:none;" >
<i class="fa fa-check" aria-hidden="true"></i>
<span class="">2</span>
</span>
<span  style="display:none;" class="edit">Edit</span></span>

                    <h4 class="box-title col-xs-6">
					<div class="fixed-number col-md-1 col-xs-2" style="top: 3px;">
						<span class="block-number">2</span>
						</div>	
                      <a  class="custom-bg col-md-11 col-xs-10" onclick="editbasic1()" style="padding-left: 0;" >
                        Large Employer Status & Tracking
                      </a>
                    </h4>
					
					<div class="box-title col-xs-3 pull-right" style="padding-top: 7px;">
					<p class="custom-bg summary-text pull-right" style=" font-size: 12px; ">
					Tell us about your company size
					</p>
					</div>
					
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse bg-white black">
                    <div class="box-body padding-right-0">
					<p class="highlight-fancy">
			<span class="status"><i class="fa fa-info-circle" aria-hidden="true"></i></span> Specify if your company is an Applicable Large Employer
			
			</p>
					
					<div class="col-md-offset-1 col-md-10">
					   <form class="form-horizontal" >
			  <div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>2.1&nbsp;&nbsp;&nbsp;Are you an Applicable Large Employer (ALE) ? </h4>
                   <input type="radio" name="largeemp" value="Yes"></input><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
				   
                    <input type="radio" name="largeemp"></input><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                    </label>
                  
                  </div>
                  
                   <div class="col-sm-6">
                  <label class="control-label"><h4>2.2&nbsp;&nbsp;&nbsp;Is this your first year as Applicable Large Employer (ALE) ?</h4>
                   <input  type="radio" name="largeemp1"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input  type="radio" name="largeemp1"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                    </label>
                  </div>
                </div>
				
               <div class="form-group">
                <div class="col-sm-12" >
                  <label class="control-label"><h4 style="margin-bottom: 25px;">2.3&nbsp;&nbsp;&nbsp;Which of these two categories apply to your company ? </h4>
                  <h5  style="margin-bottom: 0px;"> <input type="radio" name="few_more"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;An ALE with fewer than 100 full time employees (including full time equivalent employees).</span> </h5> &nbsp;&nbsp;&nbsp;&nbsp;
                   <h5  style="margin-top: 0px;"> <input type="radio" name="few_more"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;An ALE with more than 100 full time employees (including full time equivalent employees).</span>  </h5> 
                    </label>
                  
                  </div>
				  
				  	
                </div> 

			  
					
									
					</form>
				    </div>
                   <div class=" box-footer pull-right padding-right-0" >
              
                <a  class="btn btn-default btn-default-cancel" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/reporting#basicinformation">Cancel</a>
				<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/reporting#basicinformation" class="btn btn-success ">Save and Exit</a>
											
                <button type="button" data-toggle="collapse" href="#collapseTwo" onclick="basic1();"  id="basic_btn_2" class="btn  btn-success">Save and Continue</button>
              </div>   
					
                    </div>
                     
                  </div>
                </div>
                <div class="panel  box " id="planofferingcriteria">
                  <div class="parent-tabs box-header with-border" >
                   <span id="step2" class="steps col-xs-2" onclick="editbasic2()"  >
<span class="check " style="display:none;" >
<i class="fa fa-check" aria-hidden="true"></i>
<span class="">3</span>
</span>
<span  style="display:none;" class="edit">Edit</span></span>

                    <h4 class="box-title col-xs-6">
                     <div class="fixed-number col-md-1 col-xs-2" style="top: 3px;">
						<span class="block-number">3</span>
						</div>	
                      <a  class="custom-bg col-md-11 col-xs-10" onclick="editbasic2()" style="padding-left: 0;" >
                       Plan Offering Criteria
                      </a>
                    </h4>
					
					<div class="box-title col-xs-3 pull-right" style="padding-top: 7px;">
					<p class="custom-bg summary-text pull-right" style=" font-size: 12px; ">
					Variable hour measuring
					</p>
					</div>
					
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse bg-white black">
                    <div class="box-body padding-right-0">
					<p class="highlight-fancy">
			<span class="status"><i class="fa fa-info-circle" aria-hidden="true"></i></span> Fill the form below to measure variable hours and plan offering
			
			</p>
                      
			<div class="col-md-offset-1 col-md-10">
			   <form class="form-horizontal" >
			 <div> 
			 <h3>Variable Hour Measuring</h3>
			
                
               <div class="form-group">
                <div class="col-sm-12" >
                  <span class="control-label span-label"><h4>3.1&nbsp;&nbsp;&nbsp;There are two different methods which can be used to track hours worked for non-fulltime employees to ensure that they are not in-fact full-time. Please select your method used.</h4>
                  <input name="non_fulltime_employees" type="radio" value="1">&nbsp;&nbsp;&nbsp;&nbsp;
                  <span class="control-checkbox">Look-Back Measurement Method</span> &nbsp;&nbsp;&nbsp;&nbsp;
                   <input name="non_fulltime_employees" type="radio" value="2">&nbsp;&nbsp;&nbsp;&nbsp;<span class="control-checkbox">Monthly Measurement Method</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="non_fulltime_employees" type="radio" value="3">&nbsp;&nbsp;&nbsp;&nbsp;<span class="control-checkbox">Not Currently Measuring Hours</span>
                    </span>
                  
                  </div>
                </div> 
                 
                 
               <div class="form-group initialmeasurement" style="display:none;">
               <div class="col-sm-12" >
                  <label class="control-label"><h4>3.1.1&nbsp;&nbsp;&nbsp;What is the length of your initial measurement period (# of days) ?</h4></label>
                    <input type="text" style="width:50%;"class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                </div>
                
		           <div class="form-group initialmeasurement" style="display:none;">
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>3.1.2&nbsp;&nbsp;&nbsp;When does your initial measurement period begins ?
                  </h4>
                   <input type="radio" name="emp2"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Date of Hire (DOH)</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="emp2"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;1st of Month After DOH</span> 
                    </label>
                  </div>
                   </div>
					
					</div>
			
			
			<div> 
			
			<h3> Plan Offering Criteria</h3>
			
			
			<div class="form-group">
                <div class="col-sm-12" >
                  <label class="control-label"><h4>3.2&nbsp;&nbsp;&nbsp;What type of plan offering criteria did you meet this year ? (select any that apply).</h4></label>
                  
				  <div class="checkbox">
				  <label>
				  <input  type="checkbox" ><h4 class="margin-0">Qualifying Offer Method</h4>
				  </label>
                  </div>
				  
				   <div class="checkbox hide">
				  <label>
				  <input  type="checkbox"><h4 class="margin-0">Qualifying Offer Method with 2015 Transitional Relief
				  </h4>
				  </label>
                  </div>
				  
				   <div class="checkbox">
				  <label>
				  <input  type="checkbox"><h4 class="margin-0">98% Offer Method</h4>
				  </label>
                  </div>
                    
                  </div>
                </div> 
                
	
	 			<div class="form-group">
                <div class="col-sm-12" >
                  <label class="control-label"><h4>3.3&nbsp;&nbsp;&nbsp;Since February 9, 2014, can you certify that your company. </h4>
                   </label>
                   
              <div class="col-sm-12">
					<label class="control-label"><h4>(a) Hasn't changed workforce size to ensure that you are under 100 employees.</h4>
					<input name="emp5" class="company_certify company_certify_yes" type="radio" value="1">&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="control-checkbox">Yes</span> &nbsp;&nbsp;&nbsp;&nbsp;
					<input name="emp5" type="radio" class="company_certify company_certify_no"  value="2">&nbsp;&nbsp;&nbsp;&nbsp;<span class="control-checkbox">No</span>&nbsp;&nbsp;&nbsp;&nbsp;
					</label>
					</div>
					<div class="col-sm-12" >
					<label class="control-label"><h4>(b) Hasn't narrowed eligibility"," for your medical plan.</h4>
					<input name="emp3"  type="radio" class="company_certify company_certify_yes"  value="1">&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="control-checkbox">Yes</span> &nbsp;&nbsp;&nbsp;&nbsp;
					<input name="emp3" type="radio" class="company_certify company_certify_no"  value="2">&nbsp;&nbsp;&nbsp;&nbsp;<span class="control-checkbox">No</span>&nbsp;&nbsp;&nbsp;&nbsp;
					</label>
					</div>
					<div class="col-sm-12" >
					<label class="control-label"><h4>(c) Has maintained the same or higher % employer contribution to your medical plan costs
					.</h4>
					<input name="emp4"  type="radio"  class="company_certify company_certify_yes" value="1">&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="control-checkbox">Yes</span> &nbsp;&nbsp;&nbsp;&nbsp;
					<input name="emp4" type="radio" class="company_certify company_certify_no"   value="2">&nbsp;&nbsp;&nbsp;&nbsp;<span class="control-checkbox">No</span>&nbsp;&nbsp;&nbsp;&nbsp;
					</label>
					</div>
                  </div>
                </div> 
				
				
				
                    
                    </div>
                    
                     
              </form>
			</div>
			
                   <div class="box-footer pull-right padding-right-0" >
         
                <a  class="btn btn-default btn-default-cancel" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/reporting#basicinformation">Cancel</a>
				<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/reporting#basicinformation" class="btn btn-success ">Save and Exit</a>
                <button type="button" data-toggle="collapse" href="#collapseThree" onclick="basic2()" id="basic_btn_3" class="btn btn-success ">Save and Continue</button>
              </div>  
                    </div>
                    
                  </div>
                </div>
                
                <div class="panel  box "  id="designatedgovtentity">
                  <div class="parent-tabs box-header with-border" >
                   <span id="step3" class="steps col-xs-2" onclick="editbasic3()"  >
<span class="check " style="display:none;" >
<i class="fa fa-check" aria-hidden="true"></i>
<span class="">4</span>
</span>
<span  style="display:none;" class="edit">Edit</span></span>

                    <h4 class="box-title col-xs-6">
                      <div class="fixed-number col-md-1 col-xs-2" style="top: 3px">
						<span class="block-number">4</span>
						</div>	
                      <a  class="custom-bg col-md-11 col-xs-10" onclick="editbasic3()" style="padding-left: 0;" >
                        Designated Government Entity
                      </a>
                    </h4>
					
					<div class="box-title col-xs-3 pull-right" style="padding-top: 7px;">
					<p class="custom-bg summary-text pull-right" style=" font-size: 12px; ">
					Assigning DGE for reporting purposes
					</p>
					</div>
					
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse bg-white black">
                    <div class="box-body padding-right-0">
					<p class="highlight-fancy">
			<span class="status"><i class="fa fa-info-circle" aria-hidden="true"></i></span> Fill the form for your DGE
			
			</p>
           <div class="col-md-offset-1 col-md-10">  
            <form class="form-horizontal" >
             <div class="form-group">
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>4.1&nbsp;&nbsp;&nbsp;Will you be assigning a Designated Governmental Entity (DGE) for reporting purposes ?</h4>
                   <input type="radio" name="dge-reporting" value="1"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="dge-reporting" value="0"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                    </label>
                  </div>
                   </div>       
               
					<div class="designation" style="display:none;">
				
				<div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>4.1.1&nbsp;&nbsp;&nbsp;Name of Designated Governmental Entity</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                  <div class="col-sm-6">
                  <label class="control-label"><h4>4.1.2&nbsp;&nbsp;&nbsp;DGE's Employer Identification Number (EIN)</h4></label>
                    <input type="text" class="form-control form-height phone" id="inputEmail3" placeholder="" data-inputmask='"mask": "99-9999999"' data-mask>
                  </div>
                </div>
                	
				<div class="form-group">
                <div class="col-sm-6">
                  <label class="control-label"><h4>4.1.3&nbsp;&nbsp;&nbsp;Street Address 1</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                   <div class="col-sm-6">
                  <label class="control-label"><h4>4.1.4&nbsp;&nbsp;&nbsp;Street Address 2 (Apt #, Suite #)</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                </div>
                
                <div class="form-group">
              <div class="col-sm-6">
                  <label class="control-label"><h4>4.1.5&nbsp;&nbsp;&nbsp;DGE's City or Town</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  <div class="col-sm-6">
                  <label class="control-label"><h4>4.1.6&nbsp;&nbsp;&nbsp;DGE's State or Province</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                  
                  </div>
                  
                	<div class="form-group">
                
                  <div class="col-sm-6">
                  <label class="control-label"><h4>4.1.7&nbsp;&nbsp;&nbsp;DGE's Zip Code</h4></label>
                    <input type="text" class="form-control numbers form-height" maxlength="5" id="inputEmail3" placeholder="">
                  </div>
                </div>
                
                	<div class="form-group">
					
					 <div class="col-sm-6">
                  <label class="control-label"><h4>4.1.8&nbsp;&nbsp;&nbsp;DGE's Contact Person First Name</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
               
                   <div class="col-sm-6">
                  <label class="control-label"><h4>4.1.9&nbsp;&nbsp;&nbsp;DGE's Contact Person Middle Initial</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
                 
                </div>  
                
                <div class="form-group">
					
					 <div class="col-sm-6">
                  <label class="control-label"><h4>4.1.10&nbsp;&nbsp;&nbsp;DGE's Contact Person Last Name</h4></label>
                    <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                  </div>
               
                   <div class="col-sm-6">
                  <label class="control-label"><h4>4.1.11&nbsp;&nbsp;&nbsp;DGE's Contact Person Suffix</h4></label>
                  <select class="form-control form-height">
										<option>Select</option>
                                          <option>Capt </option>
                                          <option>Dr </option>
                                          <option>Mayor </option>
                                          <option>Miss </option>
                                          <option>Mr </option>
                                          <option>Mrs </option>
                                          <option>Ms </option>
                                          <option>| </option>
                                          <option>|| </option>
                                          <option>||| </option>
                                          <option>Jr </option>
                                          <option>Sr </option>
                                          </select>
                  </div>
                 
                </div>  
                <div class="form-group">
                 <div class="col-sm-6">
                  <label class="control-label"><h4>4.1.12&nbsp;&nbsp;&nbsp;DGE's Contact Phone number</h4></label>
                    <input type="text" class="form-control form-height phone" id="inputEmail3" placeholder=""  data-inputmask='"mask": "(999) 999-9999"' data-mask>
                  </div>
                   </div>
                  <div class="form-group">
                   <div class="col-sm-12" style="    margin-top: 10px;margin-bottom: 20px;">
                  <label class="control-label"><h4>4.1.13&nbsp;&nbsp;&nbsp;What will your DGE be reporting ?</h4>
                   <input type="radio" name="emp2"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Enrollment Only</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="emp2"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Enrollment and Offer of Coverage</span> 
                    </label>
                  </div>
                   </div> 
             	
					
					</div>
                    
                
              </form>
              </div>
			   <div class="box-footer pull-right padding-right-0" >
                
               <a  class="btn btn-default btn-default-cancel" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/reporting#basicinformation">Cancel</a>
		    	<a type="submit" class="btn btn-success" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/reporting#basicinformation">Save and Exit</a>
	            <button type="button" data-toggle="collapse" href="#collapseFour" onclick="basic3();" id="basic_btn_4"  class="btn btn-success ">Save and Continue</button>
              </div>  
			   
              </div>
                  </div>
                </div>
                
                <div class="panel  box " id="aggregatedgroup">
                  <div class="parent-tabs box-header with-border" >
                   <span id="step4" class="steps col-xs-2"  onclick="editbasic4()"  >
<span class="check " style="display:none;" >
<i class="fa fa-check" aria-hidden="true"></i>
<span class="">5</span>
</span>
<span  style="display:none;" class="edit">Edit</span></span>

                    <h4 class="box-title col-xs-6">
                      <div class="fixed-number col-md-1 col-xs-2" style="top: 3px">
						<span class="block-number">5</span>
						</div>	
                      <a  class="custom-bg col-md-11 col-xs-10"  onclick="editbasic4()" style="padding-left: 0;" >
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
                    <div class="box-body padding-right-0">
					<p class="highlight-fancy">
			<span class="status"><i class="fa fa-info-circle" aria-hidden="true"></i></span> Enter the Aggregated Group information.
			</p>
			<div class="col-md-offset-1 col-md-10">  
                    <div class="form-group row" style="    margin-top: 10px;margin-bottom: 20px;">
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>5.1&nbsp;&nbsp;&nbsp;Will this transmittal be the authoritative transmittal for your company ? Remember, each EIN must have their own authorative transmittal. </h4>
                    </label>
                  </div>
                  <div class="col-sm-6">
                  <input type="radio" name="aggregate_grps1"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="aggregate_grps1" checked><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                   
                  </div>
                   </div> 
                   
                   
                   <div class="form-group row" style="margin-top: 10px;margin-bottom: 20px;">
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>5.2&nbsp;&nbsp;&nbsp;During any month of the year, were you a member of an aggregated applicable large employer (ALE) group ? This may also be referred to as a control group. </h4>
                    </label>
                  </div>
                  <div class="col-sm-6">
                  <input type="radio" name="aggregate_grps2" value="1"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="aggregate_grps2"  value="0" checked><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                   
                  </div>
                   </div> 
                   
                    
                   
                   
                   <div class="col-xs-12 filling_forms" style="display:none;">
                    <div class="col-xs-12" style="border: 1px solid #ddd;">
                    <div class="form-group row" style="    margin-top: 10px;margin-bottom: 20px;">
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>5.2.1&nbsp;&nbsp;&nbsp;Will any other entity be filling 1095 forms on your behalf ?</h4>
                    </label>
                  </div>
                  <div class="col-sm-6">
                  <input type="radio" name="other_entity_filling" value="1"><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="other_entity_filling" value="0" checked><span class="control-checkbox">&nbsp;&nbsp;&nbsp;&nbsp;No</span> 
                   
                  </div>
                   </div> 
                    
                      <div class="form-group row other_entity_filling_yes" style="margin-top: 10px;margin-bottom: 20px;display:none;">
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>5.2.1.1&nbsp;&nbsp;&nbsp;If yes, how many 1095 forms will be filed by others on your behalf ?</h4>
                    </label>
                  </div>
                  <div class="col-sm-6">
                 <input type="text" class="form-control form-height" id="inputEmail3" placeholder="">
                 	 
                  </div>
                   </div> 
                   
                  
                      <div class="form-group row" style="    margin-top: 10px;margin-bottom: 20px;">
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>5.2.2&nbsp;&nbsp;&nbsp;How many months of the year were you a part of this aggregated group ?</h4>
                    </label>
                  </div>
				  <div class="col-sm-12">
                  
                 
				  </div>
                  <div class="col-sm-3">
                  
                  <div class="checkbox">
                 <label><input type="checkbox" onclick="disableyear();" id="entire_year"><span class="control-checkbox">Entire Year</span></label>
                  </div>
                  <div class="checkbox">
                 <label><input type="checkbox" class="specific_year"><span class="control-checkbox">January</span></label>
                  </div>
                  <div class="checkbox">
                 <label><input type="checkbox" class="specific_year"><span class="control-checkbox">February</span></label>
                  </div>
                  <div class="checkbox">
                 <label><input type="checkbox" class="specific_year"><span class="control-checkbox">March</span></label>
                  </div>
                 
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">April</span></label>
                 </div>
                 
                  <div class="checkbox">
                  <label><input type="checkbox" class="specific_year"><span class="control-checkbox">May</span></label>
                  </div>
                   <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">June</span></label>
                  </div>
                  </div>
                  
                  <div class="col-sm-3">
				  <div class="checkbox">
                   <label></label>
                   </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">July</span></label>
                   </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">August</span></label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">September</span></label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">October</span></label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">November</span></label>
                 </div>
                  <div class="checkbox">
                   <label><input type="checkbox" class="specific_year"><span class="control-checkbox">December</span></label>
                  </div>
                 
                  </div>
                   </div> 
                   
                     <div class="form-group row" style="    margin-top: 10px;margin-bottom: 20px;">
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>5.2.3&nbsp;&nbsp;&nbsp;List the name and EIN for each of the groups with which you are aggregated. Please list the aggregated members below in order from largest number of employees to smallest number of employees. Click "Add more" to add more than one group.</h4>
                    </label>
                  </div>
				  <div class="col-md-12" id="group_div">
				  <div class="row" id="group_div_1" style="margin-bottom:10px;">
                  <div class="col-sm-3 padding-right-0">
                  <p>
                  Group Name
                  </p>
                 <input type="text" class="form-control form-height" id="inputEmail3" placeholder="" style="width: 100%;">
                 	 
                  </div>
                  <div class="col-sm-3 padding-right-0 padding-left-5">
                  <p >
                  Group EIN
                  </p>
                 <input type="text" class="form-control form-height" id="inputEmail3 phone" placeholder="" style="width: 100%;" data-inputmask='"mask": "99-9999999"' data-mask>
                 	 
                  </div>
                  <div class="col-sm-2 padding-left-5">
                  <p >
                 &nbsp;&nbsp;
                  </p>
                 <button class="btn btn-primary no-wrap" onclick="addnewrow(1);" id="add_more_btn">Add more</button>	 
                  </div>
				  </div>
				  </div>
                   </div> 
                
                   </div> 
                    </div>
                    
              </div>
			   <div class="box-footer pull-right padding-right-0" >
              <a class="btn btn-default btn-default-cancel" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/reporting#basicinformation">Cancel</a>
				<a type="submit" class="btn btn-success" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/reporting#basicinformation">Save and Exit</a>
                <button type="button" data-toggle="collapse" href="#collapseFive" onclick="basic4()" id="basic_btn_5"  class="btn btn-success ">Save and Continue</button>
              </div> 
              </div>
                  </div>
                </div>
                
                <div class="panel  box " id="anythingelse">
                  <div class="parent-tabs box-header with-border" >
                    <span id="step5"  onclick="basic5();" class="steps col-xs-2"  >
<span class="check " style="display:none;"  >
<i class="fa fa-check" aria-hidden="true"></i>
<span class="">6</span>
</span>
<span  style="display:none;" class="edit">Edit</span></span>

                    <h4 class="box-title col-xs-6">
                      <div class="fixed-number col-md-1 col-xs-2" style="top: 3px">
						<span class="block-number">6</span>
						</div>	
                      <a  class="custom-bg col-md-11 col-xs-10"  onclick="editbasic5()" style="padding-left: 0;" >
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
                    <div class="box-body padding-right-0">
					
					<p class="highlight-fancy">
			<span class="status"><i class="fa fa-info-circle" aria-hidden="true"></i></span> Enter additional comments if any
			</p>
				<div class="col-md-offset-1 col-md-10">  
				
				
                      <div class="form-group row" style="    margin-top: 10px;margin-bottom: 20px;">
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>6.1&nbsp;&nbsp;&nbsp;If you don't mind us asking, how did you hear about us ?</h4>
                    </label>
                  </div>
                  <div class="col-sm-12">
                  <div class="checkbox">
                	<label> <input type="checkbox"><span class="control-checkbox">Referred by a friend</span></label>
                  </div>
                  <div class="checkbox">
                  <label><input type="checkbox"><span class="control-checkbox">Internet Search</span></label>
                 </div>
                  <div class="checkbox">
                 <label><input type="checkbox"><span class="control-checkbox">Attended our conference</span></label>
                 </div>
                  <div class="checkbox">
                 <label><input type="checkbox" id="selected_others" ><span class="control-checkbox">Others</span></label>
                 </div>
                 
                  </div>
                 
				 <div class="col-sm-6 hide others_comments">
                 <textarea class="form-control form-height"></textarea>
                 </div>
                  
                   </div> 
                   
                   
                   
                   <div class="form-group row" style="    margin-top: 10px;margin-bottom: 20px;">
                   <div class="col-sm-12" >
                  <label class="control-label"><h4>6.2&nbsp;&nbsp;&nbsp;Finally, is there anything else that we should know that pertains to your group or plan set up that you believe is important, and that wasn't mentioned in the previous forms ? </h4>
                    </label>
                  </div>
                  <div class="col-sm-6">
                  <textarea  class="form-control form-height" ></textarea>
                 
                  </div>
                  
                  
                   </div> 
              </div>
			   <div class="box-footer pull-right padding-right-0" >
                <a  class="btn btn-default btn-default-cancel" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/reporting#basicinformation">Cancel</a>
				<a href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/reporting#basicinformation" class="btn btn-success ">Save and Exit</a>			
             <a type="submit" href="<?php echo Yii::$app->getUrlManager()->getBaseUrl(); ?>/client/dashboard/plan"  class="btn btn-success ">Save and Continue</a>
<!--                 <button type="submit"  class="btn btn-success ">Save & Continue</button> -->
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

