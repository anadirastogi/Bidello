<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
	$user=$_SESSION["user"];
	
	echo "<a href='../mybidello/logout.php'  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:12px;'  >logout</a>";
    echo "<h3 style=' float:right; color:white; margin-top:3px;'> &nbsp; |  &nbsp;</h3>";
    echo "<span  style=' float:right; color:white; font:Verdana; margin-top:3px; font-size:16px;'>$user</span> ";
	echo "<span  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:14px;'>Welcome !&nbsp;&nbsp;&nbsp;</span> ";
	
	
	
	

	?>
       
  
		<div id="logo">
        
			<h1><a href="../index.php">BIDELLO</a></h1>
            
		</div>
		<div id="menu">
			<ul>
				<li class="icon icon-ok current_page_item"><a href="../index.php?start=0" accesskey="1" title="">homepage</a></li>
				<li class="icon icon-ok"><a href="../aboutus/aboutus.html" accesskey="2" title="">about us</a></li>
				<li class="icon icon-ok"><a href="../seenow/seenow.php?website_string=popularity&start=0&search=Search+now" accesskey="3" title="">bids</a></li>
				<li class="icon icon-ok"><a href="../winners/winners.php" accesskey="4" title="">winners</a></li>
				<li class="icon icon-ok"><a href="../contactus/contactus.html" accesskey="5" title="">contact us</a></li>
                  <?php
			
				
				
					echo "<li class='icon icon-ok'><a href='mybidello1.php' accesskey='5' title=''>my bidello</a></li>";
				
				
				?>
			</ul>
		</div>
        
       
	</div>
 
	

<div id="wrapper">
	<div id="page" class="container">
    
    <h2  style="font-family:'MS Serif', 'New York', serif;">Change your Password</h2>
  
<?php
$con=mysql_connect("localhost","root","");
if(! $con)
{ die('Connection Failed'.mysql_error()); }
mysql_select_db("bidello",$con);

		
		
		
					echo "<form action='changepassword1.php' method='POST'>";
		echo "<center><table><tr>";
		echo"<br>";
		echo"<br>";
		echo"<br>";
		echo "<tr><td><h3><b>Current Password </td><td><h3><b><input style=' margin-left:20px' type='password' name='opass'></td></tr>";
		echo "<tr><td><h3><b>New Password</td><td><h3><b><input style=' margin-left:20px' type='password' name='npass'></td></tr>";
		echo "<tr><td><h3><b>Confirm New Password</td><td><h3><b><input style=' margin-left:20px' type='password' name='cnpass'></td></tr>";
		echo "<input type='hidden' name='user' value=$user />";
		echo "</tr></table>";
		echo "<br/>";
		echo "<br/>";
		
		echo "<td><form  style='margin-right:40px;margin-top:10px;'; >  <input style=' margin-left:200px;background-color:#0c696e; color:#FFF; ' type='submit' value='Change' name='Change'></form></td>";
		echo"<a style=' margin-left:20px;font-family:'MS Serif', 'New York', serif; ' href='mybidello1.php'>Go Back</a>";
		
		
		/*echo "</tr></table>";
		echo "<td><input type='submit' value='Change' name='change'></td>";
		}
		//else
		//{
			echo "<script>alert('incorrect answer to security question')</script>";
  	       echo "<script>window.history.go(-1);</script>";  
		}*/
		
?>
</div>
				       
         
        
        <br/>
        <br/>
        <br/>
        <br/>
			
			</div>
		</div>
	</div>
</div>
 <div style="background-color:#0c696e; height:150px;">
<div id="copyright" class="container">
<div style="margin-left:160px; margin-top:30px;">
 &nbsp;||&nbsp;<a href="../index.php?start=0">Homepage</a> &nbsp;||&nbsp; <a href="../aboutus/aboutus.html">About us</a> &nbsp;||&nbsp;<a href="../seenow/seenow.php?website_string=popularity&start=0&search=Search+now">Bids</a> &nbsp;||&nbsp; <a href="#">Winners</a> &nbsp;||&nbsp;<a href="../contactus/contactus.html">Contact Us</a> &nbsp;||&nbsp; <a href="#">Sitemap</a> &nbsp;||&nbsp; <a href="../faq/faq.html">FAQ's</a> &nbsp;||&nbsp; <a href="../disclaimer/disclaimer.html">Disclaimer</a> &nbsp;||&nbsp; 
</div>
<br/>


	<p>Copyright (c) 2013 <a href="../index.php?start=0">bidello.com </a>. All rights reserved. Design by <a href="" rel="nofollow">BITS PILANI GOA STUDENTS</a>.</p>
</div>
</div>
</body>
</html>
