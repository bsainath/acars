
 
 function characters(event){
	 //alert(event);
	 var r = event.replace(new RegExp("[0-9]", "g"), "");
	 return r.replace(/[^\w\s]/gi, '');    
 }
 
 function parseDate(str) {
    var mdy = str.split('/');
    return new Date(mdy[2], mdy[0]-1, mdy[1]);
}

 // this function is used to return the current date
 function currentDate(){
	 var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!

var yyyy = today.getFullYear();
if(dd<10){
    dd='0'+dd
} 
if(mm<10){
    mm='0'+mm
} 
var today = yyyy+'/'+mm+'/'+dd;
return today;
 }
 
 
 $(".numbers").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
	
	function datepickerintialise(){
	$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
     maxDate: '0'
});
}

// this function is used for validation
function uploadCsv() {
	 
	if (document.getElementById("csv_file").value == '') {
	  document.getElementById("error-csv").innerHTML = " CSV required";
	  $(".bootstrap-filestyle").css("border", "red solid 1px");	 
	  return false;
	 } else {
	  document.getElementById("error-csv").innerHTML = "";
	  $(".bootstrap-filestyle").css("border", "none");	 
	 }
	 var fname = document.getElementById('csv_file').value;
	 var re = /(\.csv)$/i;
	 if (fname != '') {
	  if (!re.exec(fname)) {
	   document.getElementById('error-csv').innerHTML = "Please select csv file format only";
	   $(".bootstrap-filestyle").css("border", "red solid 1px");	 	   
	   return false;
	  } else {
	   document.getElementById('error-csv').innerHTML = "";
	   $(".bootstrap-filestyle").css("border", "none");
	  }
	 }
	}
