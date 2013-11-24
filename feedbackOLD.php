<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>::  Kristen Ann Jones  :: </title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="generator" content="HAPedit 3.1">
<meta name="author" content="Kristen A. Jones">
<meta name="copyright" content="Copyright 2011 Kristen A. Jones. All rights reserved.">
<meta name="description" content="Portfolio site for Kristen A Jones, Artist, Designer, Developer">
<meta name="keywords" content="art, design, portfolio, graphics, print, web, develop, programming, websites, employment, freelance, hire, manager, content, email, seo, copywriting, marketing, advertising, social media, research, analytics, ecommerce ">
<meta name="robots" content="index, follow" >
<link rel="stylesheet" type="text/css" href="kajstyles2011.css" />

<link rel="icon" href="images/favicon.ico" type="image/x-icon" >
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" >

<!-- Form validation  -->
<script type="text/javascript" src="scripts/validation.js">
</script>

</head>

<body>
<div id="banner">
<div id="container">
		<div id="logo"><a href="index.html"><img src="images/kjlogo2.gif" alt="kristen a jones" border="0"/></a> 
		<div id="line">&nbsp;</div>
		</div>
		
		
		<div id="wrapper">
		<div id="mainnav"><a href="index.html">home</a>  ::  <a href="bio.html">about</a>  :: <a href="resume.html">resum&#233;</a> :: <a href="https://picasaweb.google.com/112825005269831199317/Portfolio#">portfolio</a> :: <a href="http://kjart101.blogspot.com/">artlog</a>:: <a href="http://www.cafepress.com/potent_tees">potent tees</a> :: <a href="feedback.php">contact</a> </div>
	
		<div id="content">   
			
		<br/>
		<h1> contact.</h1>
		Please complete the form below for creative services, website issues, or general comments.
		
		
		<form name="kajfeedback" id="kajfeedback" method="post" action="scripts/feedbackform.php" onSubmit="return validateForm(this);">
*Required fields
		<div id="formleft">
			<ul>
				<li>*Name </li>
		
				<li>Company</li>
				<li>*Email</li>
				<li>*Comments</li>
				
			</ul>
		</div>
		
		<div id="formright">
		
			<ul>
		
				<li><input class="inputbox1" type="text" value="" maxlength="200" tabindex="1" align="left" name="name" id="name"></li>
				<li><input class="inputbox1" type="text" value="" maxlength="200" tabindex="2" align="left" name="company" id="company"></li>
				<li> <input class="inputbox1" type="text" value="" maxlength="200" tabindex="3" align="left" name="email" id="email"> </li>
				<li><textarea class="commentbox" value="" tabindex="4" cols="1" rows="20" name="comments" id="comments"></textarea></li>

		</ul>
		</div>
		
		<div id="errors">
			<ul>
					<li id="nameerror" style="visibility:hidden">Error. Please check your name.</li>
				
					<li >&nbsp;</li>

					<li id="emailerror" style="visibility:hidden">Error. Please check your email.</li>
					
					<li id="commenterror" style="visibility:hidden">Error. Please check your comments.</li>
			</ul>
		</div>
		<br/>
	<div id="captchabox">
		
		 <script type="text/javascript">
						var RecaptchaOptions = {
						theme : 'white'
							};
						</script>
				
						<?php
							require_once('scripts/recaptchalib.php');
							$publickey = "6LfAn8USAAAAAGQ52amDjG9Ia3tLv0wZCNrqRTNN";
							echo recaptcha_get_html($publickey, $error);
						?>
	</div>	

<div id="buttons">
<input class="submitbtn" type="submit" value="submit" tabindex="6" onclick="validateForm();">&nbsp; &nbsp;&nbsp;&nbsp;
				<input class="submitbtn" type="button" value="clear" onclick="reset();">	
				
	</div>		
</form>

	<br/>
<div id="footer">
&copy; Copyright
				 <script type="text/javascript">
				var copyrightyear = new Date();
				document.write(copyrightyear.getFullYear());
		  </script> Kristen A. Jones <br/>
		    <a href="feedback.php">Contact</a> :: <a href="http://kjart101.blogspot.com/">Artlog</a> :: <a href="http://twitter.com/#!/kj_art">Twitter</a>
</div>
		
		</div>
		</div>

</div>
</div>

</body>
</html>
