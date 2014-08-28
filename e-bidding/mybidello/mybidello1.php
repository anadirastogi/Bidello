<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Fetchingly 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130903

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.slidertron-1.3.js"></script>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">

	<div id="header" class="container">
    
  <?php
	
	session_start();
	if($_SESSION["authenticated"]==true)
	{
	$user=$_SESSION["user"];
	
	echo "<a href='logout.php'  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:12px;'  >logout</a>";
    echo "<h3 style=' float:right; color:white; margin-top:3px;'> &nbsp; |  &nbsp;</h3>";
    echo "<span  style=' float:right; color:white; font:Verdana; margin-top:3px; font-size:16px;'>$user</span> ";
	echo "<span  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:14px;'>Welcome !&nbsp;&nbsp;&nbsp;</span> ";
	
	echo "<a href='changepassword.php'  style=' float:left; margin-left:830px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >Change Password</a>";
	}
	else
	{
		$url = '&location=' . urlencode($_SERVER['REQUEST_URI']);
		echo "<a href='../mybidello/register/register.php'  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:12px;'  >Register</a>";
    echo "<h3 style=' float:right; color:white; margin-top:3px;'> &nbsp; |  &nbsp;</h3>";
    echo "<a href='../mybidello/login.php?start=0&error=0&$url'><img src='images/login.png' alt=''  height='38px' width='122px' style='float:right; '/></a>";
	
    
	}

	?>
    
		<div id="logo">
        
			<h1><a href="../index.php?start=0">BIDELLO</a></h1>
            
            
		</div>
        
        
		<div id="menu">
			<ul><li class="icon icon-ok current_page_item"><a href="../index.php?start=0" accesskey="1" title="">homepage</a></li>
				<li class="icon icon-ok"><a href="../aboutus/aboutus.php" accesskey="2" title="">about us</a></li>
				<li class="icon icon-ok"><a href="../seenow/seenow.php?website_string=popularity&start=0&search=Search+now" accesskey="3" title="">bids</a></li>
				<li class="icon icon-ok"><a href="../winners/winners.php?start=0" accesskey="4" title="">winners</a></li>
				<li class="icon icon-ok"><a href="../contactus/contactus.php" accesskey="5" title="">contact us</a></li>
               	</ul>
		</div>
        
       
	</div>
     
</div>

		<!-- ****************************************************************************************************************** -->

			

		<!-- ****************************************************************************************************************** -->


<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				
			<h3>MY PROFILE </h3>
          <ul>
          <br/>
          <br/>
          <br/>
          <li ><a href="profile/mywins.php?start=0"><h3>My Wins</h3></a></li>
          <br/>
          <br/>
          <br/>
          <li ><a href="profile/myitems.php?start=0"><h3>My Items</h3></a></li>
          <br/>
          <br/>
          <br/>
          <li ><a href="profile/mybids.php?start=0"><h3>My Bids</h3></a></li>
          <br/>
          <br/>
          <li ><a href="postItem/postItem.php?start=0"><h3>Post An Item</h3></a></li>
          <br/>
          <br/>
          </ul>
        
             </div></div>
            
          
            
            
		<div id="sidebar" style="margin-left:120px; margin-top:25px;">
			<div id="stwo-col" >
				<div class="sbox1" style="margin-left:20px;">
					
 	
    <div id='tgt'></div>
    <br/>
   
   
   
        			
 		 	
 		 </div>
		
					</div>
                </div>
                </div>
	</div>
	</div>
    </div>
    <div style="background-color:#0c696e; margin-top:-25%; height:450px; ">
<div id="copyright" class="container">
<div style="margin-left:200px; margin-top:30px;">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;||&nbsp<a href="../index.php?start=0">Homepage</a> &nbsp;||&nbsp; <a href="../aboutus/aboutus.php">About us</a> &nbsp;||&nbsp;<a href="../seenow/seenow.php?website_string=popularity&start=0&search=Search+now">Bids</a> &nbsp;||&nbsp; <a href="../winners/winners.php?start=0">Winners</a> &nbsp;||&nbsp;<a href="../contactus/contactus.php">Contact Us</a>  &nbsp;||&nbsp; <a href="#">Sitemap</a> &nbsp;||&nbsp; <a href="../faq/faq.php">FAQ's</a> &nbsp;||&nbsp; <a href="../disclaimer/disclaimer.php">Disclaimer</a> &nbsp;||&nbsp;
 
</div>
<br/>


	<p>Copyright (c) 2013 <a href="../index.php?start=0">bidello.com </a>. All rights reserved. Design by <a href="" rel="nofollow">BITS PILANI GOA STUDENTS</a>.</p>
</div>
</div>
</body>
</html>
