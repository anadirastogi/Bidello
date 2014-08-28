<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
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
<body >
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
			<h1><a href="../index.php?start=0">Bidello</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="icon icon-ok current_page_item"><a href="../index.php?start=0" accesskey="1" title="">homepage</a></li>
				<li class="icon icon-ok"><a href="../aboutus/aboutus.php" accesskey="2" title="">about us</a></li>
				<li class="icon icon-ok"><a href="../seenow/seenow.php?website_string=popularity&start=0&search=Search+now" accesskey="3" title="">bids</a></li>
				<li class="icon icon-ok"><a href="../winners/winners.php?start=0" accesskey="4" title="">winners</a></li>
				<li class="icon icon-ok"><a href="#" accesskey="5" title="">contact us</a></li>
                 <?php
				if($_SESSION["authenticated"]==false)
				{
                echo "<li class='icon icon-ok'><a href='../mybidello/login.php?start=0&error=0&$url' accesskey='5' title=''>my bidello</a></li>";
				}
				else
				{
					echo "<li class='icon icon-ok'><a href='../mybidello/mybidello1.php' accesskey='5' title=''>my bidello</a></li>";
				}
				
				?>
			</ul>
		</div>
	</div>
</div>

	


<div id="wrapper">
	<div id="page" class="container">
	
	<h2 style=" font-family:'MS Serif', 'New York', serif ;">Contact Us </h2>
        
        <br><form class="f"  form id="form1" action="contactus1.php" method="post"> 
		
 
 
        		
				<h3>    <p class="clearfix"> 
				       <label style=" font-family:'MS Serif', 'New York', serif ;"for="name">Name</label> 
			 	 		        
		<input style="height:30px;font-family:'MS Serif', 'New York', serif ;margin-left:162px ; border-radius:3px; width:300px; border:thick 5px;" type="text" name="name"  id="name"  placeholder="Name"> </h3>
					
				    
                    </p>
                          
				<h3>    <p class="clearfix"> 
				       <label style=" font-family:'MS Serif', 'New York', serif ;" for="email">E-mail</label>  
				        
				       <input  style="height:30px; font-family:'MS Serif', 'New York', serif ;margin-left:153px ; border-radius:3px;width:300px; border:thin 3px;" type="text" name="email" id="email" placeholder="E-mail"> </h3> 
						
                        						</p>
                        
				<h3>    <p class="clearfix" style="margin-top:20px;"> 
				       <label style=" font-family:'MS Serif', 'New York', serif ;"for="contact">Contact No.</label>  

		  					        
<input style="height:30px;font-family:'MS Serif', 'New York', serif ;margin-left:113px ; border-radius:3px; width:300px; border:thick 5px;" type="text" name="contactno" id="contact" placeholder="Contact"> </h3>
						                      
					</p>	
					 
				
				
                <h3>    <p class="clearfix"> 
				       <label style=" font-family:'MS Serif', 'New York', serif ;" for="city">Query</label> 
	        
<input  style="height:60px;font-family:'MS Serif', 'New York', serif ;margin-left:159px ; border-radius:3px; width:400px; border:thick 5px;" type="text" name="query" id="query" placeholder="Query"></h3>
				 <h4 style=" font-weight:100; font-family:'MS Serif', 'New York', serif ;">   (Keep it below 100 characters)</h4>
                    </p>
               
                 
                  <input type="submit"  style="height:30px; width:60px; margin-left:210px ;border-radius:3px;background-color:#0c696e; color:#FFF; " name="submit" value="Submit"> 
				       
                  
                   
                    </form>
                    <div>
                  	
				       

        
        
        
			
			</div>
  </div>
</div>
</div>




<div style="background-color:#0c696e; height:150px;">
<div id="copyright" class="container">
<div style="margin-left:200px; margin-top:30px;">
 &nbsp;||&nbsp;<a href="../index.php?start=0">Homepage</a> &nbsp;||&nbsp; <a href="../aboutus.aboutus.php">About us</a> &nbsp;||&nbsp;<a href="../seenow/seenow.php?website_string=popularity&start=0&search=Search+now">Bids</a> &nbsp;||&nbsp; <a href="../winners/winners.php?start=0">Winners</a> &nbsp;||&nbsp;<a href="#">Contact Us</a> &nbsp;||&nbsp;<a href="#">My Bidello</a> &nbsp;||&nbsp; <a href="#">Sitemap</a> &nbsp;||&nbsp; <a href="../faq/faq.php">FAQ's</a> &nbsp;||&nbsp; <a href="../disclaimer/disclaimer.php">Disclaimer</a> &nbsp;||&nbsp; 
</div>
<br/>


	<p>Copyright (c) 2013 <a href="../index.php?start=0">bidello.com </a>. All rights reserved. Design by <a href="" rel="nofollow">BITS PILANI GOA STUDENTS</a>.</p>
</div>
</div>
</body>

</html>
