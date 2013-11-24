<?php

/**************************************
	Kristenannjones.com
	Feedback Form Processor
	Created: 6/2011
**************************************/
	
	session_start();
	
	if ($_POST['submit']) {
		
		//check Name
		if(strlen(trim($_POST['name']))==0 || strlen(trim($_POST['name'])) > 200 || is_numeric($_POST['name'])) {
			//$nameerror=TRUE;
			$newpage = header("Location: /formerror.php");
			exit($newpage);
			//echo "name error";
		} else {
			$nameerror=FALSE;
			echo "name "; 
			exit;
		}
		
			
		
		//check Company	
		if(strlen(trim($_POST['company'])) > 200) {
			$newpage = header("Location: /formerror.php");
			exit($newpage);
			//echo "company error";
		
		} else {
			// error
		}
			
			
		//Check Email
		if (!eregi("^[_a-z0-9.-]+@[a-z0-9-]+(\.[a-z0-9-]+)+$", $_POST['email'])) {
			$emailerror = TRUE;
			$newpage = header("Location: /formerror.php");
			//echo "email error";
			exit($newpage);
			
		} else {
			$emailerror = FALSE;
			//echo "false - email";
		}
		
		//check Comments	
		if(strlen(trim($_POST['comments']))==0 || strlen(trim($_POST['comments'])) > 2100) {
			$commenterror=TRUE;
			$newpage = header("Location: /formerror.php");
			//echo "comments";
			exit($newpage);
			
		} else {
			$commenterror=FALSE;
			//echo "false " . $_POST['commenterror'];
		}
		
		//Captcha Verification
	
		require_once('recaptchalib.php');
		//$publickey = "6LfAn8USAAAAAGQ52amDjG9Ia3tLv0wZCNrqRTNN";
		$privatekey = "6LfAn8USAAAAABLjRXtuYaWtUvCcPbMDDF5wunCM";
		
		# the response from reCAPTCHA
		$resp = null;
		# the error code from reCAPTCHA, if any
		$error = null;

		# was there a reCAPTCHA response?
		if ($_POST["recaptcha_response_field"]) {
							
					$resp = recaptcha_check_answer ($privatekey,$_SERVER["REMOTE_ADDR"],$_POST["recaptcha_challenge_field"],$_POST["recaptcha_response_field"]);

						if (!$resp->is_valid) {
				
							//header("Location: ../feedback.php");
							//$message = preg_replace("/\r?\n/", "\\n", addslashes($message));
							//$alert = "<script type=\"text/javascript\">\n alert(\"Error. Invalid reCAPTCHA code. Please try again.\");\n //</script\n\n";
							
							//exit("Invalid CAPTCHA code. Go back and please try again.");
								//" (reCAPTCHA said: " . $resp->error . ")");
								
							$newpage = header("Location: /formerror.php");
							exit($newpage);
							//exit("Invalid reCAPTCHA code. Please try again.  " . $backbtn);
							
							//$captcharror = TRUE;
						}
		}
		
		//echo recaptcha_get_html($publickey, $error);
			
		//echo "end post";	

	} else {

			
		// Get form data
		$name = stripslashes($_POST['name']);
		$company = stripslashes($_POST['company']);
		$email = stripslashes($_POST['email']);
		$comments = stripslashes($_POST['comments']);
		
		//Strip code symbols
		//$var = str_replace($omitsymbols, " ", $var);
		$omitsymbols = array ("<", ">", "href", ";", "%", "$", "www.", "http://");
		
		$name = str_replace($omitsymbols, " ", $name);
		$company = str_replace($omitsymbols, " ", $company);
		$email = str_replace($omitsymbols, " ", $email);
		$comments = str_replace($omitsymbols, " ", $comments);
		
		
		// Get email template
		$email_template = implode('',file('../email_template.html'));
	
		// Assign variables
		$email_template = str_replace( '{NAME}',$name,$email_template );
		$email_template = str_replace( '{EMAIL}',$email,$email_template );
		$email_template = str_replace( '{COMPANY}',$company,$email_template );
		$email_template = str_replace( '{COMMENTS}',$comments,$email_template );
		
		// Assign recipient
		$to = "kjart101@gmail.com";
		
		// Assign subject
		$subject = "KAJ.com Feedback";
		
		// Assign header info
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: <".$email.">\r\n";
		

		// Send
		mail($to, $subject, $email_template, $headers);
		
			//echo "sent mail";
			//exit;
			
		//Thank you pg
		header("Location: /thankyou.html");
		exit;
		
		
	}
		
session_destroy();
?>