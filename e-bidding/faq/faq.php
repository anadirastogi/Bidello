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
<script type="text/javascript" src="../jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="../jquery.slidertron-1.3.js"></script>
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
	
	echo "<a href='../mybidello/logout.php'  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:12px;'  >logout</a>";
    echo "<h3 style=' float:right; color:white; margin-top:3px;'> &nbsp; |  &nbsp;</h3>";
    echo "<span  style=' float:right; color:white; font:Verdana; margin-top:3px; font-size:16px;'>$user</span> ";
	echo "<span  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:14px;'>Welcome !&nbsp;&nbsp;&nbsp;</span> ";
	
	echo "<a href='../mybidello/profile/mybids.php?start=0'  style=' float:left; margin-left:600px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >myBids</a>";
	echo "<a href='../mybidello/profile/mywins.php?start=0'  style=' float:left; margin-left:30px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >myWins</a>";
	
	echo "<a href='../mybidello/profile/myitems.php?start=0'  style=' float:left; margin-left:30px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >myItems</a>";
	
	echo "<a href='../mybidello/postItem/postItem.php?start=0'  style=' float:left; margin-left:30px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >post an Item</a>";
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
                <?php
				if($_SESSION["authenticated"]==false)
				{
                echo "<li class='icon icon-ok'><a href='../mybidello/login.php?start=0&error=0&$url' accesskey='5' title=''>my bidello</a></li>";
				}
				else
				{
					echo "<li class='icon icon-ok'><a href='../mybidello/mybidello1.php' accesskey='5' title=''>my bidello</a></li>";
				}
				
				?>	</ul>
		</div>
        
       
	</div>
 

		<!-- ****************************************************************************************************************** -->
			

		<!-- ****************************************************************************************************************** -->


<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>FAQ</h2>
                <br/>
				<span class="byline">Some commonly asked questions.</span>
				<br></br>
				<h3> What type of auctions does Bidello host? </h3>
                <p> We host timed auctions only.  Bids are placed over a defined time period. The highest bidder at the end of the bidding period is successful.
 </p>
                
                <h3> How do I participate in auctions on Bidello? </h3>
                
                <p> You have to register first. After you create an account, you can either post bids or bid on current items. </p>
                
                <h3> Do I need to sign up for each auction? </h3>
                
                <p> No. Once you have created your account, you can use it for multiple auctions.</p>
                
                <h3> How old do I have to be to use Bidello? </h3>
                
                <p> You have to be above 18 years of age to legally place bids on Bidello. </p>
                                    
                <h3> How many items are bid per auction? </h3>
                
                <p> Just one item per auction </p>
                    
                <h3> Can I cancel my bid? </h3>
                    
                <p> No. Once a bid is placed, you can't cancel it. </p>'




                    
                    
            
             </div>
         </div>
            
	</div>
    
	
    <div style="background-color:#0c696e; height:150px;">
<div id="copyright" class="container">
<div style="margin-left:160px; margin-top:30px;">
 
 nbsp;||&nbsp;s<a href="../index.php?start=0">Homepage</a> &nbsp;||&nbsp; <a href="../aboutus/aboutus.php">About us</a> &nbsp;||&nbsp;<a href="../seenow/seenow.php?website_string=popularity&start=0&search=Search+now">Bids</a> &nbsp;||&nbsp; <a href="../winners/winners.php?start=0">Winners</a> &nbsp;||&nbsp;<a href="../contactus/contactus.php">Contact Us</a> &nbsp;||&nbsp;<a href="../mybidello/login.php?start=0&error=0">My Bidello</a> &nbsp;||&nbsp; <a href="#">Sitemap</a> &nbsp;||&nbsp; <a href="../faq/faq.php">FAQ's</a> &nbsp;||&nbsp; <a href="../disclaimer/disclaimer.php">Disclaimer</a> &nbsp;||&nbsp;</div>
<br/>


	<p>Copyright (c) 2013 <a href="../index.php?start=0">bidello.com </a>. All rights reserved. Design by <a href="" rel="nofollow">BITS PILANI GOA STUDENTS</a>.</p>
</div>
</div>
</body>
</html>
