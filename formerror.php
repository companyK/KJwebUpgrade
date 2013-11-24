<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>::  Kristen Ann Jones - error</title>

<meta name="generator" content="HAPedit 3.1">
<meta name="author" content="Kristen A. Jones">
<meta name="copyright" content="Copyright 2011 Kristen A. Jones. All rights reserved.">
<meta name="description" content="Portfolio site for Kristen A Jones, Artist, Designer, Developer">
<meta name="keywords" content="art, design, portfolio, graphics, print, web, develop, programming, websites, employment, freelance, hire, manager, content, email, seo, copywriting, marketing, advertising, social media, research, analytics, ecommerce, biography, qualifications, history, profile ">
<meta name="robots" content="index, follow" >
<link rel="stylesheet" type="text/css" href="kajstyles2011.css" />

<link rel="icon" href="images/favicon.ico" type="image/x-icon" >
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" >



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
	<h1> form error.</h1>
		<div>
		Sorry, but there was an error processing the form. Please try entering your information and submitting the form again. 
				<br/><br/>
				 	<a href="../feedback.php">&#171; Return to the Contact Form</a><br/><br/>
						<img src="../images/spacer.gif" width="1" height="300px"/><br/><br/>

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
<br/><br/>
</div><!-- content -->


		</div><!-- wrapper -->
		</div><!-- container -->
		
		</div><!-- banner -->

</body>
</html>
