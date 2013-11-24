<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>::  Kristen Ann Jones  ::  Feedback</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="generator" content="HAPedit 3.1">
<meta name="author" content="Kristen A. Jones">
<meta name="copyright" content="Copyright 2011 Kristen A. Jones. All rights reserved.">
<meta name="description" content="Portfolio site for Kristen A Jones, Artist, Designer, Developer">
<meta name="keywords" content="art, design, portfolio, graphics, print, web, develop, programming, websites, employment, freelance, hire, manager, feedback, response, inquiry ">
<meta name="robots" content="index, follow" >
<link rel="stylesheet" type="text/css" href="kajstyles2011.css" />

<link rel="icon" href="images/favicon.ico" type="image/x-icon" >
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" >

<!-- Form validation  -->
<script type="text/javascript" src="scripts/validation.js">
</script>


<script type="text/javascript">

//SuckerTree Horizontal Menu (Sept 14th, 06)
//By Dynamic Drive: http://www.dynamicdrive.com/style/

var menuids=["treemenu1"] //Enter id(s) of SuckerTree UL menus, separated by commas

function buildsubmenus_horizontal(){
for (var i=0; i<menuids.length; i++){
  var ultags=document.getElementById(menuids[i]).getElementsByTagName("ul")
    for (var t=0; t<ultags.length; t++){
		if (ultags[t].parentNode.parentNode.id==menuids[i]){ //if this is a first level submenu
			ultags[t].style.top=ultags[t].parentNode.offsetHeight+"px" //dynamically position first level submenus to be height of main menu item
			ultags[t].parentNode.getElementsByTagName("a")[0].className="mainfoldericon"
		}
		else{ //else if this is a sub level menu (ul)
		  ultags[t].style.left=ultags[t-1].getElementsByTagName("a")[0].offsetWidth+"px" //position menu to the right of menu item that activated it
    	ultags[t].parentNode.getElementsByTagName("a")[0].className="subfoldericon"
		}
    ultags[t].parentNode.onmouseover=function(){
    this.getElementsByTagName("ul")[0].style.visibility="visible"
    }
    ultags[t].parentNode.onmouseout=function(){
    this.getElementsByTagName("ul")[0].style.visibility="hidden"
    }
    }
  }
}

if (window.addEventListener)
window.addEventListener("load", buildsubmenus_horizontal, false)
else if (window.attachEvent)
window.attachEvent("onload", buildsubmenus_horizontal)

</script>

<!-- JQuery library -->
<script type="text/javascript" src="/jquery/jquery-1.6.1.js"> </script>

 <script type="text/javascript">
   // we will add our javascript code here           

$(document).ready(function(){
$("#ajax-contact-form").submit(function(){

// 'this' refers to the current submitted form
var str = $(this).serialize();

   $.ajax({
   type: "POST",
   url: "contact.php",
   data: str,
   success: function(msg){

$("#note").ajaxComplete(function(event, request, settings){

if(msg == 'OK') // Message Sent? Show the 'Thank You' message and hide the form
{
result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
$("#fields").hide();
}
else
{
result = msg;
}

$(this).html(result);

});

}

 });

return false;

});

});

 </script>  


<!--[if IE]>
<style type="text/css">
	
	div#captchabox{
		margin: 0;
		padding: 0;	
		top: -180px;
		left: 70px
	}


	div#buttons{
		margin: 0;
		padding: 0;
		top: -150px;
		left: 70px

	}
</style>
	<![endif]-->

<!-- Google Analytics -->

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24426660-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>
<div id="banner">
<div id="container">
	
		
<div id="wrapper">
<a href="index.html"><img src="images/newkjheaderart.gif" alt="kristen a jones" border="0"/> </a>
			<div id="line">&nbsp;</div>
	<div id="menu1">

		<div class="suckertreemenu">

		<ul id="treemenu1">
<li><a href="index.html">home</a></li>

		<li><a href="bio.html">about</a>
			  <ul>
				  <li><a href="bio.html">bio</a></li>
				  <li><a href="resume.html">resum&#233;</a></li>
			  </ul>
		</li>

				
		<li><a href="">services</a>
			<ul>
			  <li><a href="design.html">design</a></li>
			  <li><a href="development.html#program">development</a></li>
			  <li><a href="marketing.html">marketing</a></li>
			 </ul>
		</li>
		

		<li><a href="portfolio.html">portfolio</a></li>
		
				<li><a href="http://kj-art.tumblr.com/">blog</a></li>
		
		<li><a href="feedback.php">contact</a>
			<ul>
				<li><a href="feedback.php">feedback</a></li>
			
				<li><a href="http://www.linkedin.com/in/kjart">linkedin</a></li>
			
	
			 </ul>
		</li>


		
		
		</ul>
		<br style="clear: left;" />
		</div>
	
</div> <!-- end menu 1 -->	
		
		
<div id="content">   
		<h1> contact.</h1>
		
		Please complete the form below for creative services, website issues, or general comments.
		
		
		<form name="kajfeedback" id="kajfeedback" method="post" action="scripts/feedbackform.php" onSubmit="return validateForm(this);">
*Required fields<br/>
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
		
				<li><input class="inputbox1" type="text" value="" maxlength="200" tabindex="1" align="left" name="visitorname" id="visitorname"></li>
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
			<input class="submitbtn" type="submit" value="submit" tabindex="6">&nbsp; &nbsp;&nbsp;&nbsp;
							<input class="submitbtn" type="button" value="clear" onclick="reset();">	
							
				</div>		
		</form>

</div>
<br/><br/>

	<div id="footer">
	&copy; copyright
					 <script type="text/javascript">
					var copyrightyear = new Date();
					document.write(copyrightyear.getFullYear());
			  </script> kristen a. jones <br/>
				<a href="feedback.php">contact</a> :: <a href="sitemap.html">sitemap</a> <br />
<br />
<a href="http://www.linkedin.com/in/kjart" target="_blank"><img src="images/linkedin_icon.gif" alt="LinkedIn" border="0"/></a> &nbsp;<a href="http://pinterest.com/kjart101/" target="_blank"><img src="images/pinterest_icon.gif" alt="Pinterest" border="0"/></a> &nbsp;<a href="http://kj-art.tumblr.com/" target="_blank"><img src="images/tumblr_icon.gif" alt="Tumblr" border="0"/></a>

	</div> <!-- footer -->
</div><!-- content -->


<br/><br/>
		</div><!-- wrapper -->
		</div><!-- container -->
		
		</div><!-- banner -->

</body>
</html>
