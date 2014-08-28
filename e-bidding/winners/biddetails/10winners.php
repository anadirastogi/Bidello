<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
<script>
function goBack()
  {
  window.history.back()
  }
</script>

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
	
	echo "<a href='../../mybidello/logout.php'  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:12px;'  >logout</a>";
    echo "<h3 style=' float:right; color:white; margin-top:3px;'> &nbsp; |  &nbsp;</h3>";
    echo "<span  style=' float:right; color:white; font:Verdana; margin-top:3px; font-size:16px;'>$user</span> ";
	echo "<span  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:14px;'>Welcome !&nbsp;&nbsp;&nbsp;</span> ";
	echo "<a href='../../mybidello/profile/mybids.php?start=0'  style=' float:left; margin-left:600px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >myBids</a>";
	echo "<a href='../../mybidello/profile/mywins.php?start=0'  style=' float:left; margin-left:30px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >myWins</a>";
	
	echo "<a href='../../mybidello/profile/myitems.php?start=0'  style=' float:left; margin-left:30px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >myItems</a>";
	
	echo "<a href='../../mybidello/postItem/postItem.php?start=0'  style=' float:left; margin-left:30px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >post an Item</a>";
	
	}
	else
	{
		$url = '&location=' . urlencode($_SERVER['REQUEST_URI']);
		echo "<a href='../../mybidello/register/register.php'  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:12px;'  >Register</a>";
    echo "<h3 style=' float:right; color:white; margin-top:3px;'> &nbsp; |  &nbsp;</h3>";
    echo "<a href='../../mybidello/login.php?start=0&error=0&$url'><img src='images/login.png' alt=''  height='38px' width='122px' style='float:right; '/></a>";
    
	}

	?>
    
		<div id="logo">
        
			<h1><a href="../index.php?start=0">BIDELLO</a></h1>
            
		</div>
		<div id="menu">
			<ul><li class="icon icon-ok current_page_item"><a href="../../index.php?start=0" accesskey="1" title="">homepage</a></li>
				<li class="icon icon-ok"><a href="../../aboutus/aboutus.php" accesskey="2" title="">about us</a></li>
				<li class="icon icon-ok"><a href="../../seenow/seenow.php?website_string=popularity&start=0&search=Search+now" accesskey="3" title="">bids</a></li>
				<li class="icon icon-ok"><a href="../../winners/winners.php?start=0" accesskey="4" title="">winners</a></li>
				<li class="icon icon-ok"><a href="../../contactus/contactus.php" accesskey="5" title="">contact us</a></li>
                   <?php
				if($_SESSION["authenticated"]==false)
				{
                echo "<li class='icon icon-ok'><a href='../../mybidello/login.php?start=0&error=0&$url' accesskey='5' title=''>my bidello</a></li>";
				}
				else
				{
					echo "<li class='icon icon-ok'><a href='../../mybidello/mybidello1.php' accesskey='5' title=''>my bidello</a></li>";
				}
				
				?>	</ul>
		</div>
        
       
	</div>
     
</div>

		<!-- ****************************************************************************************************************** -->

			

		<!-- ****************************************************************************************************************** -->


<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
		</div>
            
          
            
            
		<div id="sidebar">
			<div id="stwo-col">
				<div class="sbox1">
                
                <br/>
				
    <br/>              
 	
    <div id='tgt'></div>
    <br/>
    <form action="books.php" method="get">
    <input type="hidden" name="start"  value="0"/>
     
    </form>
    <?php
		$con=mysql_connect("localhost","root","");
        if(! $con){
					die('Connection Failed'.mysql_error());
		}
		mysql_select_db("bidello",$con);
		
		$id=$_GET['product'];
		
	
		$get = mysql_query("Select * from bidinfo where randomID=$id");
		
		while ( $row = mysql_fetch_assoc($get))
		{
			$bidobject=$row['bidObject'];
			
			$count= mysql_query("Select count(*) from bidders where randomID=$id ");
			$startdate=$row['startDate'];
			$enddate=$row['endDate'];
			$minamount=$row['lowerLimit'];
			$winner=$row['buyerID'];
			$category=$row['category'];
			$productget= mysql_query("Select * from productdescription where randomID=$id ");
			$winget = mysql_query("select * from bidders where bidderUserName ='$winner' and randomID=$id");
			while ($row7 = mysql_fetch_assoc($winget))
			{
				$bidamt=$row7['bidAmount'];
				
			}
			while($newrow = mysql_fetch_assoc($productget))
			{
				$condition=$newrow['condition'];
				$buy = $newrow['originalBuyDate'];
				$description = $newrow['description'];
			}
			while ( $row = mysql_fetch_assoc($count))
			{
				$nobidders=$row['count(*)'];
				
			}
			
			echo "<div style='height:740px; width:1150px; float:left;'>";
			echo "<img src='../../upload/$id.jpg'  height='200px' width='200px'/>"."&nbsp;&nbsp;&nbsp;";
			echo "&nbsp;&nbsp;&nbsp;"."<h1 style='margin-left:300px; margin-top:-220px;';>Results for $bidobject&nbsp;&nbsp;</h1>"."<br/>";
			echo "&nbsp;&nbsp;&nbsp;"."<h3 style='margin-left:300px; margin-top:-20px;';>Product id : $id</h3>"."<br/>";
			
			echo "&nbsp;&nbsp;&nbsp;"."<h3 style='margin-left:300px; margin-top:-30px;';>Start Date : $startdate &nbsp;&nbsp;(y-m-d) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End Date : $enddate &nbsp;&nbsp;(y-m-d)</h3>";
			
			echo "&nbsp;&nbsp;&nbsp;"."<h3 style='margin-left:300px; margin-top:-10px;';>number of bidders : $nobidders  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Category :  $category </h3>";
			
			
			echo "&nbsp;&nbsp;&nbsp;"."<h1 style='margin-left:300px; margin-top:-10px;';> Winner : $winner   </h1>";
			
			echo "&nbsp;&nbsp;&nbsp;"."<h1 style='margin-left:600px; margin-top:-60px;';> BidAmount : $bidamt </h1>";
			
			
			$listget = mysql_query("select * from bidders where randomID=$id and bidderUserName <> '$winner' order by bidAmount desc ");
			$p=2;
			while ($row8 = mysql_fetch_assoc($listget))
			{
				$bidamt2=$row8['bidAmount'];
				$name=$row8['bidderUserName'];
			echo "&nbsp;&nbsp;&nbsp;"."<h3 style='margin-left:300px; margin-top:-0px;';> Bidder at $p place : $name   </h3>";
				echo "&nbsp;&nbsp;&nbsp;"."<h3 style='margin-left:600px; margin-top:-40px; ';> BidAmount : $bidamt2 </h3>";
			$p=$p+1;
				
			}

	
			
			echo " <input style='background-color:#0c696e; color:#FFF; margin-left:930px; margin-top:50px; ' type='submit' value='Go Back' name='back' onclick='goBack()'/>";
			echo "</div>";
			
		}
		
    ?>
    
					
                    
			  </div>
               
                
                
				
			</div>
		</div>
	</div>
    
	
    <div style="background-color:#0c696e; height:150px; margin-top:-25%;">
<div id="copyright" class="container">
<div style="margin-left:200px; margin-top:30px;">
 
||&nbsp;<a href="../../index.php?start=0">Homepage</a> &nbsp;||&nbsp; <a href="../../aboutus/aboutus.php">About us</a> &nbsp;||&nbsp;<a href="../../seenow/seenow.php?website_string=popularity&start=0&search=Search+now">Bids</a> &nbsp;||&nbsp; <a href="../../winners/winners.php?start=0">Winners</a> &nbsp;||&nbsp;<a href="../../contactus/contactus.php">Contact Us</a> &nbsp;||&nbsp;<a href="../../mybidello/login.php?start=0&error=0">My Bidello</a> &nbsp;||&nbsp; <a href="#">Sitemap</a> &nbsp;||&nbsp; <a href="../../faq/faq.php">FAQ's</a> &nbsp;||&nbsp; <a href="../../disclaimer/disclaimer.php">Disclaimer</a> &nbsp;||&nbsp; 
</div>
<br/>


	<p>Copyright (c) 2013 <a href="../../index.php?start=0">bidello.com </a>. All rights reserved. Design by <a href="" rel="nofollow">BITS PILANI GOA STUDENTS</a>.</p>
</div>
</div>
</body>
</html>
