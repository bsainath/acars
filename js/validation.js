var url = document.URL;

var array = url.split("/");

var base = array[3];

if (array[2] == 'localhost') {
	var staticurl = '/' + base + '/admin/default/changepassword';
	//var url_action = array[6].split("?")[0];
} else {
	var staticurl = '/admin/default/changepassword';
	// var url_action = array[5].split("?")[0];
}

if (array[2] == 'localhost') {
	var staticurl0 = '/' + base + '/site/resetlink';
	//var url_action = array[6].split("?")[0];
} else {
	var staticurl0 = '/site/resetlink';
	// var url_action = array[5].split("?")[0];
}


if (array[2] == 'localhost') {
	var staticurl1 = '/' + base + '/forgotpassword';
	//var url_action = array[6].split("?")[0];
} else {
	var staticurl1 = '/forgotpassword';
	// var url_action = array[5].split("?")[0];
}

if (array[2] == 'localhost') {
	var staticurl2 = '/' + base + '/client/default/changepassword';
	//var url_action = array[6].split("?")[0];
} else {
	var staticurl2 = '/client/default/changepassword';
	// var url_action = array[5].split("?")[0];
}


if (array[2] == 'localhost') {
	var staticurl3 = '/' + base + '/client/';
	//var url_action = array[6].split("?")[0];
} else {
	var staticurl3 = '/client/';
	// var url_action = array[5].split("?")[0];
}


function validatesetpassword() {

	if (document.getElementById("setpasswordform-password").value == '') {
		document.getElementById("setpasswordform-password").style.borderColor = "red";
		$('.field-setpasswordform-password').find('p.help-block').html(
				'Password Required');
		document.getElementById("setpasswordform-password").focus();
		return false;
	} else {
			
			
			// set password variable
		var pswd = $('#setpasswordform-password').val();

		//validate the length
		if (pswd.length < 8) {
			$('#length').removeClass('valid').addClass('invalid');
			document.getElementById("setpasswordform-password").style.borderColor = "red";
			document.getElementById("setpasswordform-password").focus();
			$('#pswd_info').show();
			return false;
		} else {
			$('#length').removeClass('invalid').addClass('valid');
			document.getElementById("setpasswordform-password").style.borderColor = "";
			$('#pswd_info').hide();
		}

		//validate letter
		if (pswd.match(/[A-z]/)) {
			$('#letter').removeClass('invalid').addClass('valid');
			document.getElementById("setpasswordform-password").style.borderColor = "";
			$('#pswd_info').hide();
			
		} else {
			$('#letter').removeClass('valid').addClass('invalid');
			document.getElementById("setpasswordform-password").style.borderColor = "red";
			document.getElementById("setpasswordform-password").focus();
			$('#pswd_info').show();
			return false;
		}

		//validate uppercase letter
		if (pswd.match(/[A-Z]/)) {
			$('#capital').removeClass('invalid').addClass('valid');
			document.getElementById("setpasswordform-password").style.borderColor = "";
			$('#pswd_info').hide();
		} else {
			$('#capital').removeClass('valid').addClass('invalid');
			document.getElementById("setpasswordform-password").style.borderColor = "red";
			document.getElementById("setpasswordform-password").focus();
			$('#pswd_info').show();
			return false;
		}

		//validate special character
		if (pswd.match(/[@!#\$\^%&*()+=\-\[\]\\\';,\.\/\{\}\|\":<>\? ]/)) {
			$('#specialchar').removeClass('invalid').addClass('valid');
			document.getElementById("setpasswordform-password").style.borderColor = "";
			$('#pswd_info').hide();
		} else {
			$('#specialchar').removeClass('valid').addClass('invalid');
			document.getElementById("setpasswordform-password").style.borderColor = "red";
			document.getElementById("setpasswordform-password").focus();
			$('#pswd_info').show();
			return false;
		}

		//validate number
		if (pswd.match(/\d/)) {
			$('#number').removeClass('invalid').addClass('valid');
			document.getElementById("setpasswordform-password").style.borderColor = "";
			$('#pswd_info').hide();
		} else {
			$('#number').removeClass('valid').addClass('invalid');
			document.getElementById("setpasswordform-password").style.borderColor = "red";
			document.getElementById("setpasswordform-password").focus();
			$('#pswd_info').show();
			return false;
		}
		
		
		document.getElementById("setpasswordform-password").style.borderColor = "";
		$('.field-setpasswordform-password').find('p.help-block').html('');

	}

	if (document.getElementById("setpasswordform-confirmpassword").value == '') {
		document.getElementById("setpasswordform-confirmpassword").style.borderColor = "red";
		$('.field-setpasswordform-confirmpassword').find('p.help-block').html(
				'Confirm Password Required');
		document.getElementById("setpasswordform-confirmpassword").focus();
		return false;
	} else {

		document.getElementById("setpasswordform-confirmpassword").style.borderColor = "";
		$('.field-setpasswordform-confirmpassword').find('p.help-block').html('');

	}

	if (document.getElementById("setpasswordform-confirmpassword").value != document
			.getElementById("setpasswordform-password").value) {

		document.getElementById("setpasswordform-password").style.borderColor = "red";
		document.getElementById("setpasswordform-confirmpassword").style.borderColor = "red";
		$('.field-setpasswordform-confirmpassword').find('p.help-block').html(
				'Password Mismatch');
		document.getElementById("setpasswordform-confirmpassword").focus();
		return false;
	} else {
		document.getElementById("setpasswordform-password").style.borderColor = "";
		document.getElementById("setpasswordform-confirmpassword").style.borderColor = "";
		$('.field-setpasswordform-confirmpassword').find('p.help-block').html('');

	}

}

$(document).ready(function() {

	//you have to use keyup, because keydown will not catch the currently entered value
	$('#setpasswordform-password').keyup(function() {

		// set password variable
		var pswd = $(this).val();

		//validate the length
		if (pswd.length < 8) {
			$('#length').removeClass('valid').addClass('invalid');
		} else {
			$('#length').removeClass('invalid').addClass('valid');
		}

		//validate letter
		if (pswd.match(/[A-z]/)) {
			$('#letter').removeClass('invalid').addClass('valid');
		} else {
			$('#letter').removeClass('valid').addClass('invalid');
		}

		//validate uppercase letter
		if (pswd.match(/[A-Z]/)) {
			$('#capital').removeClass('invalid').addClass('valid');
		} else {
			$('#capital').removeClass('valid').addClass('invalid');
		}

		//validate special character
		if (pswd.match(/[@!#\$\^%&*()+=\-\[\]\\\';,\.\/\{\}\|\":<>\? ]/)) {
			$('#specialchar').removeClass('invalid').addClass('valid');
		} else {
			$('#specialchar').removeClass('valid').addClass('invalid');
		}

		//validate number
		if (pswd.match(/\d/)) {
			$('#number').removeClass('invalid').addClass('valid');
		} else {
			$('#number').removeClass('valid').addClass('invalid');
		}

	}).focus(function() {
		$('#pswd_info').show();
	}).blur(function() {
		$('#pswd_info').hide();
	});
	
	
	
	
	//you have to use keyup, because keydown will not catch the currently entered value
	$('#new-password').keyup(function() {

		// set password variable
		var pswd = $(this).val();

		//validate the length
		if (pswd.length < 8) {
			$('#length').removeClass('valid').addClass('invalid');
		} else {
			$('#length').removeClass('invalid').addClass('valid');
		}

		//validate letter
		if (pswd.match(/[A-z]/)) {
			$('#letter').removeClass('invalid').addClass('valid');
		} else {
			$('#letter').removeClass('valid').addClass('invalid');
		}

		//validate uppercase letter
		if (pswd.match(/[A-Z]/)) {
			$('#capital').removeClass('invalid').addClass('valid');
		} else {
			$('#capital').removeClass('valid').addClass('invalid');
		}

		//validate special character
		if (pswd.match(/[@!#\$\^%&*()+=\-\[\]\\\';,\.\/\{\}\|\":<>\? ]/)) {
			$('#specialchar').removeClass('invalid').addClass('valid');
		} else {
			$('#specialchar').removeClass('valid').addClass('invalid');
		}

		//validate number
		if (pswd.match(/\d/)) {
			$('#number').removeClass('invalid').addClass('valid');
		} else {
			$('#number').removeClass('valid').addClass('invalid');
		}

	}).focus(function() {
		$('#pswd_info').show();
	}).blur(function() {
		$('#pswd_info').hide();
	});

});

function changepassword() {
	if (document.getElementById("current-password").value == '') {
		document.getElementById("current-password").style.borderColor = "red";
		document.getElementById("current-password-error").innerHTML = "Current Password required";
		document.getElementById("current-password").focus();
		return false;
	} else {
		document.getElementById("current-password").style.borderColor = "";
		document.getElementById("current-password-error").innerHTML = "";
	}

	if (document.getElementById("new-password").value == '') {
		document.getElementById("new-password").style.borderColor = "red";
		document.getElementById("new-password-error").innerHTML = "New Password required";
		document.getElementById("new-password").focus();
		return false;
	} else {
		
		// set password variable
		var pswd = $('#new-password').val();

		//validate the length
		if (pswd.length < 8) {
			$('#length').removeClass('valid').addClass('invalid');
			document.getElementById("new-password").style.borderColor = "red";
			document.getElementById("new-password").focus();
			$('#pswd_info').show();
			return false;
		} else {
			$('#length').removeClass('invalid').addClass('valid');
			document.getElementById("new-password").style.borderColor = "";
			$('#pswd_info').hide();
		}

		//validate letter
		if (pswd.match(/[A-z]/)) {
			$('#letter').removeClass('invalid').addClass('valid');
			document.getElementById("new-password").style.borderColor = "";
			$('#pswd_info').hide();
			
		} else {
			$('#letter').removeClass('valid').addClass('invalid');
			document.getElementById("new-password").style.borderColor = "red";
			document.getElementById("new-password").focus();
			$('#pswd_info').show();
			return false;
		}

		//validate uppercase letter
		if (pswd.match(/[A-Z]/)) {
			$('#capital').removeClass('invalid').addClass('valid');
			document.getElementById("new-password").style.borderColor = "";
			$('#pswd_info').hide();
		} else {
			$('#capital').removeClass('valid').addClass('invalid');
			document.getElementById("new-password").style.borderColor = "red";
			document.getElementById("new-password").focus();
			$('#pswd_info').show();
			return false;
		}

		//validate special character
		if (pswd.match(/[@!#\$\^%&*()+=\-\[\]\\\';,\.\/\{\}\|\":<>\? ]/)) {
			$('#specialchar').removeClass('invalid').addClass('valid');
			document.getElementById("new-password").style.borderColor = "";
			$('#pswd_info').hide();
		} else {
			$('#specialchar').removeClass('valid').addClass('invalid');
			document.getElementById("new-password").style.borderColor = "red";
			document.getElementById("new-password").focus();
			$('#pswd_info').show();
			return false;
		}

		//validate number
		if (pswd.match(/\d/)) {
			$('#number').removeClass('invalid').addClass('valid');
			document.getElementById("new-password").style.borderColor = "";
			$('#pswd_info').hide();
		} else {
			$('#number').removeClass('valid').addClass('invalid');
			document.getElementById("new-password").style.borderColor = "red";
			document.getElementById("new-password").focus();
			$('#pswd_info').show();
			return false;
		}
		
		document.getElementById("new-password").style.borderColor = "";
		document.getElementById("new-password-error").innerHTML = "";
	}
	
	
	

	if (document.getElementById("new-confirm-password").value == '') {
		document.getElementById("new-confirm-password").style.borderColor = "red";
		document.getElementById("confirm-password-error").innerHTML = "Confirm Password required";
		document.getElementById("new-confirm-password").focus();
		return false;
	} else {
		document.getElementById("new-confirm-password").style.borderColor = "";
		document.getElementById("confirm-password-error").innerHTML = "";
	}

	if (document.getElementById("new-confirm-password").value != document
			.getElementById("new-password").value) {
		document.getElementById("new-password").style.borderColor = "red";
		document.getElementById("new-confirm-password").style.borderColor = "red";
		document.getElementById("confirm-password-error").innerHTML = "Password Mismatch";
		document.getElementById("new-confirm-password").focus();
		return false;
	} else {
		document.getElementById("new-password").style.borderColor = "";
		document.getElementById("new-confirm-password").style.borderColor = "";
		document.getElementById("confirm-password-error").innerHTML = "";

	}

	var datastr = $('#change-password-form').serialize();
	var curl = staticurl + '?' + datastr;
	$
			.ajax({
				type : 'GET',
				url : curl,
				data : datastr,
				dataType : "json",

				success : function(response) {

					if (response['fail']) {
						if (response['fail']['oldpass']) {

							document.getElementById("current-password").style.borderColor = "red";
							document.getElementById("current-password-error").innerHTML = response['fail']['oldpass'];
							document.getElementById("current-password").focus();

						}

						if (response['fail']['repeatnewpass']) {

							document.getElementById("new-confirm-password").style.borderColor = "red";
							document.getElementById("new-password").style.borderColor = "red";
							document.getElementById("confirm-password-error").innerHTML = response['fail']['repeatnewpass'];
							document.getElementById("new-confirm-password")
									.focus();

						}
					} else {
						toastr.success('Password has been successfully changed')
						resetchangepassword();
						$('#myModal-change-pswd').modal('hide');
					}

				}
			});

}



function changeclientpassword() {
	if (document.getElementById("current-password").value == '') {
		document.getElementById("current-password").style.borderColor = "red";
		document.getElementById("current-password-error").innerHTML = "Current Password required";
		document.getElementById("current-password").focus();
		return false;
	} else {
		document.getElementById("current-password").style.borderColor = "";
		document.getElementById("current-password-error").innerHTML = "";
	}

	if (document.getElementById("new-password").value == '') {
		document.getElementById("new-password").style.borderColor = "red";
		document.getElementById("new-password-error").innerHTML = "New Password required";
		document.getElementById("new-password").focus();
		return false;
	} else {
		
		// set password variable
		var pswd = $('#new-password').val();

		//validate the length
		if (pswd.length < 8) {
			$('#length').removeClass('valid').addClass('invalid');
			document.getElementById("new-password").style.borderColor = "red";
			document.getElementById("new-password").focus();
			$('#pswd_info').show();
			return false;
		} else {
			$('#length').removeClass('invalid').addClass('valid');
			document.getElementById("new-password").style.borderColor = "";
			$('#pswd_info').hide();
		}

		//validate letter
		if (pswd.match(/[A-z]/)) {
			$('#letter').removeClass('invalid').addClass('valid');
			document.getElementById("new-password").style.borderColor = "";
			$('#pswd_info').hide();
			
		} else {
			$('#letter').removeClass('valid').addClass('invalid');
			document.getElementById("new-password").style.borderColor = "red";
			document.getElementById("new-password").focus();
			$('#pswd_info').show();
			return false;
		}

		//validate uppercase letter
		if (pswd.match(/[A-Z]/)) {
			$('#capital').removeClass('invalid').addClass('valid');
			document.getElementById("new-password").style.borderColor = "";
			$('#pswd_info').hide();
		} else {
			$('#capital').removeClass('valid').addClass('invalid');
			document.getElementById("new-password").style.borderColor = "red";
			document.getElementById("new-password").focus();
			$('#pswd_info').show();
			return false;
		}

		//validate special character
		if (pswd.match(/[@!#\$\^%&*()+=\-\[\]\\\';,\.\/\{\}\|\":<>\? ]/)) {
			$('#specialchar').removeClass('invalid').addClass('valid');
			document.getElementById("new-password").style.borderColor = "";
			$('#pswd_info').hide();
		} else {
			$('#specialchar').removeClass('valid').addClass('invalid');
			document.getElementById("new-password").style.borderColor = "red";
			document.getElementById("new-password").focus();
			$('#pswd_info').show();
			return false;
		}

		//validate number
		if (pswd.match(/\d/)) {
			$('#number').removeClass('invalid').addClass('valid');
			document.getElementById("new-password").style.borderColor = "";
			$('#pswd_info').hide();
		} else {
			$('#number').removeClass('valid').addClass('invalid');
			document.getElementById("new-password").style.borderColor = "red";
			document.getElementById("new-password").focus();
			$('#pswd_info').show();
			return false;
		}
		
		
		document.getElementById("new-password").style.borderColor = "";
		document.getElementById("new-password-error").innerHTML = "";
	}

	if (document.getElementById("new-confirm-password").value == '') {
		document.getElementById("new-confirm-password").style.borderColor = "red";
		document.getElementById("confirm-password-error").innerHTML = "Confirm Password required";
		document.getElementById("new-confirm-password").focus();
		return false;
	} else {
		document.getElementById("new-confirm-password").style.borderColor = "";
		document.getElementById("confirm-password-error").innerHTML = "";
	}

	if (document.getElementById("new-confirm-password").value != document
			.getElementById("new-password").value) {
		document.getElementById("new-password").style.borderColor = "red";
		document.getElementById("new-confirm-password").style.borderColor = "red";
		document.getElementById("confirm-password-error").innerHTML = "Password Mismatch";
		document.getElementById("new-confirm-password").focus();
		return false;
	} else {
		document.getElementById("new-password").style.borderColor = "";
		document.getElementById("new-confirm-password").style.borderColor = "";
		document.getElementById("confirm-password-error").innerHTML = "";

	}

	var datastr = $('#change-password-form').serialize();
	var curl = staticurl2 + '?' + datastr;
	$
			.ajax({
				type : 'GET',
				url : curl,
				data : datastr,
				dataType : "json",

				success : function(response) {

					if (response['fail']) {
						if (response['fail']['oldpass']) {

							document.getElementById("current-password").style.borderColor = "red";
							document.getElementById("current-password-error").innerHTML = response['fail']['oldpass'];
							document.getElementById("current-password").focus();

						}

						if (response['fail']['repeatnewpass']) {

							document.getElementById("new-confirm-password").style.borderColor = "red";
							document.getElementById("new-password").style.borderColor = "red";
							document.getElementById("confirm-password-error").innerHTML = response['fail']['repeatnewpass'];
							document.getElementById("new-confirm-password")
									.focus();

						}
					} else {
						toastr.success('Password has been successfully changed')
						resetchangepassword();
						$('#modal-container-430197').modal('hide');
					}

				}
			});

}


function resetchangepassword() {
	$('#current-password').val('');
	$('#new-password').val('');
	$('#new-confirm-password').val('');

	document.getElementById("new-password").style.borderColor = "";
	document.getElementById("new-confirm-password").style.borderColor = "";
	document.getElementById("current-password").style.borderColor = "";

	document.getElementById("current-password-error").innerHTML = "";
	document.getElementById("confirm-password-error").innerHTML = "";
	document.getElementById("new-password-error").innerHTML = "";

}

function resetforgotpassword() {
	$('#recover-email-id').val('');
	document.getElementById("recover-email-id").style.borderColor = "";
	document.getElementById("recover-error-messages").innerHTML = "";
}

function validateforgotpassword()
{
	if (document.getElementById("recover-email-id").value == '') {
		document.getElementById("recover-email-id").style.borderColor = "red";
		document.getElementById("recover-error-messages").innerHTML = "Email required";
		document.getElementById("recover-email-id").focus();
		return false;
	}
	 else if (!validateEmail(document.getElementById('recover-email-id').value)) {
			document.getElementById('recover-error-messages').innerHTML = "Valid email required";
			document.getElementById("recover-email-id").style.borderColor = "red";
			document.getElementById('recover-email-id').focus();
			return false;
		}
	else {
		document.getElementById("recover-email-id").style.borderColor = "";
		document.getElementById("recover-error-messages").innerHTML = "";
	}

	var datastr = $('#resetpassword').serialize();
	
	
	
	var curl = staticurl1 + '?' + datastr;
	$
			.ajax({
				type : 'GET',
				url : curl,
				data : datastr,
				dataType : "json",

				success : function(response) {
					if (response['fail']) {
						if (response['fail']['email']) {
							
							document.getElementById("recover-email-id").style.borderColor = "red";
							document.getElementById("recover-error-messages").innerHTML = response['fail']['email'];
							document.getElementById("recover-email-id").focus();
						
						}
					}else
						{
						
						toastr.success('Please check your email for the link to update your password.')
						resetforgotpassword();
						$('#mychangepassword').modal('hide');
						
						}
					
					
				}
			});
	
}


function resetresetlinkagain() {
	$('#recover-reset-link').val('');
	document.getElementById("recover-reset-link").style.borderColor = "";
	document.getElementById("recover-error-link").innerHTML = "";
}

function validateresetverification()
{
if (document.getElementById("recover-reset-link").value == '') {
	document.getElementById("recover-reset-link").style.borderColor = "red";
	document.getElementById("recover-error-link").innerHTML = "Email required";
	document.getElementById("recover-reset-link").focus();
	return false;
}
 else if (!validateEmail(document.getElementById('recover-reset-link').value)) {
		document.getElementById('recover-error-link').innerHTML = "Valid email required";
		document.getElementById("recover-reset-link").style.borderColor = "red";
		document.getElementById('recover-reset-link').focus();
		return false;
	}
else {
	document.getElementById("recover-reset-link").style.borderColor = "";
	document.getElementById("recover-error-link").innerHTML = "";
}

var datastr = $('#resetlink').serialize();



var curl = staticurl0 + '?' + datastr;
$
		.ajax({
			type : 'GET',
			url : curl,
			data : datastr,
			dataType : "json",

			success : function(response) {
				if (response['fail']) {
					if (response['fail']['email']) {
						
						document.getElementById("recover-email-id").style.borderColor = "red";
						document.getElementById("recover-error-messages").innerHTML = response['fail']['email'];
						document.getElementById("recover-email-id").focus();
					
					}
				}else
					{
					
					toastr.success('Please check your email for the link to verify your mail and set account.')
					resetresetlinkagain();
					$('#myresetlink').modal('hide');
					
					}
				
				
			}
		});

}

function validateEmail(email) {
	var reg = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
	if (reg.test(email))
		testresults = true;
	else
		testresults = false;
	return (testresults);
}


function showupdatemodal($company_id){
	
	
	resetupdatecompany();
	var datastr = 'company_id='+$company_id;
	var curl = staticurl3 + 'companies/companydetails' ;
	$
			.ajax({
				type : 'POST',
				url : curl,
				data : datastr,
				dataType : "json",

				success : function(response) {
					if(response != '')
						{
						var company_name = response.company_name;
						var company_ein = response.company_ein;
						var company_reporting_year = response.reporting_year;
						
						
						$('#company-name').val(company_name);
						$('#company-ein').val(company_ein);
						$('#company-reporting-year').val(company_reporting_year);
						$("#update_cmpny_btn").attr("onclick", 'return validateupdatecompany("'+$company_id+'")');
						
						
						$('#update_company_modal').modal('show');
						
						}
					
				}
			});
	
	
}

function resetupdatecompany($company_id)
{
	$('#company-name').val('');
	$('#company-ein').val('');
	$('#company-reporting-year').val('');

	document.getElementById("company-name").style.borderColor = "";
	document.getElementById("company-ein").style.borderColor = "";
	document.getElementById("company-reporting-year").style.borderColor = "";

	document.getElementById("company-name-error").innerHTML = "";
	document.getElementById("company-ein-error").innerHTML = "";
	document.getElementById("company-reporting-year-error").innerHTML = "";
}

function validateupdatecompany($company_id)
{
	if (document.getElementById("company-name").value == '') {
		document.getElementById("company-name").style.borderColor = "red";
		document.getElementById("company-name-error").innerHTML = "Company name required";
		document.getElementById("company-name").focus();
		return false;
	} else {
		document.getElementById("company-name").style.borderColor = "";
		document.getElementById("company-name-error").innerHTML = "";
	}

	
	if (document.getElementById("company-ein").value == '') {
		document.getElementById("company-ein").style.borderColor = "red";
		document.getElementById("company-ein-error").innerHTML = "Company EIN required";
		document.getElementById("company-ein").focus();
		return false;
	} else {
		document.getElementById("company-ein").style.borderColor = "";
		document.getElementById("company-ein-error").innerHTML = "";
	}

	var datastr = $('#update_cmpny_form').serialize();
	datastr += '&company_id='+$company_id;
	var curl = staticurl3 + 'companies/updatecompany' ;
	$
			.ajax({
				type : 'POST',
				url : curl,
				data : datastr,
				
				success : function(response) {
					if(response != '')
						{
						if(response == 'success')
							{
							toastr.success('Company updated successfully');
							$('#update_company_modal').modal('hide');
							setTimeout("location.reload(true);", 1500);
							}
						else
							
							{
							
							toastr.error(response);
							
							}
						
						
						
						}
					
				}
			});
	

}



