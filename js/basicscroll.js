var url = document.URL;

var array = url.split("/");

var base = array[3];

if (array[2] == 'localhost') {
	var staticurl = '/' + base + '/client/dashboard/reporting';
	//var url_action = array[6].split("?")[0];
} else {
	var staticurl = '/client/dashboard/reporting';
	// var url_action = array[5].split("?")[0];
}




$(document).ready(function(){
	$('.basic_info_menu').click(function(){
		$url = $(this).find('a').attr("href");
		var res = $url.split("#");
		 var hash = '#'+res[1];
		 window.location.hash = hash;
		 
		 leftNavigation();
		  // now scroll to element with that id
		 
		 
		
		  
	});
	
	 $('#selectall').click(function(){
			var select = $("#selectall").is(":checked");
			if(select)
				{
				$('.permission_check').prop('checked', true);
				}
			else
				{
				$('.permission_check').prop('checked', false);
				}
			 
		 });
	
	$('.benefit_plan_info').click(function(){
		$url = $(this).find('a').attr("href");
		var res = $url.split("#");
		 var hash = '#'+res[1];
		 window.location.hash = hash;
		 
		 benefitNavigation();
		  // now scroll to element with that id
		  
	});
	
	
	
	
	
});