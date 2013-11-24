/***********************************************************************
	JavaScript Validation 
	for Kristenannjones.com Feedback Form
	Created: 6/2011

************************************************************************/

// Assign variables and return error message
function validateForm(kajfeedback) {
var reason = "";
  reason += validateName(kajfeedback.name);
  reason += validateEmail(kajfeedback.email);
  reason += validateComments(kajfeedback.comments);
  reason += validateCaptcha(document.getElementById("recaptcha_response_field"));
  //reason += validateEmpty(kajfeedback.from);
   
  if (reason != "") {
  //alert("Please check the required fields.");
    return false;
  } else {
	return true;
  }
  return false;
}

//Check for empty fields
/*
function validateEmpty(fld) {
    var error = "";
  
    if (fld.value.length == 0) {
		//fld.style.background = 'Yellow'; 
        //error = "The required field has not been filled in.\n"
		fld.style.visibility = "visible";
    } else {
        fld.style.visibility = "hidden";
    }
    return error;   
}
*/

//Check Name
function validateName(name) {
    var error = "";
    var illegalChars = /\W/; // allow letters, numbers, and underscores
 
    if (name.value == "") {
		document.getElementById("nameerror").style.visibility = "visible";
		document.write("error");
	
		return false;
    } else if ((name.value.length < 2) || (name.value.length > 200)) {
		document.getElementById("nameerror").style.visibility = "visible";
		return false;
    } else {
        document.getElementById("nameerror").style.visibility = "hidden";
    } 
    return error;
	return false;
}

//Check Email
function trim(s)
{
  return s.replace(/^\s+|\s+$/, '');
} 

function validateEmail(email) {
    var error="";
    var tfld = trim(email.value);                        // value of field with whitespace trimmed off
    //var emailFilter = ^[_a-z0-9.-]+@[a-z0-9-]+(\.[a-z0-9-]+)+$ ;
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
    
    if (email.value == "") {
	    document.getElementById("emailerror").style.visibility = "visible";
		return false;
	} else if (email.value.length < 5) {
		document.getElementById("emailerror").style.visibility = "visible";
		return false;
    //} else if (emailaddress.value != "^[_a-z0-9.-]+@[a-z0-9-]+(\.[a-z0-9-]+)+$"){
		//document.getElementById("emailerror").style.visibility = "visible";
	} else {
		document.getElementById("emailerror").style.visibility =  "hidden";
    }
    return error;
	return false;
}


//Check Comments
function validateComments(comments) {
    var error = "";
 
    if (comments.value == "") {
		document.getElementById("commenterror").style.visibility = "visible";
		return false;
		
    } else if ((comments.value.length < 2) || (comments.value.length > 2000)) {
		document.getElementById("commenterror").style.visibility = "visible";
		return false;
    } else {
        document.getElementById("commenterror").style.visibility = "hidden";
		
    } 
    return error;
	return false;
}

//CheckCaptcha

var emptyField = document.getElementById("recaptcha_response_field");

function validateCaptcha(emptyField) {
    var error = "";
	
 
    if (emptyField.value == "") {
		alert("Please enter a valid code for Captcha verification.");
		return false;
    } else {
		//alert ("OK");
	}
    return error;
	return false;
}
