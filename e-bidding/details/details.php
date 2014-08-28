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
				
				?></ul>
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
		
		if($_SESSION["authenticated"]==true)
	{
	$user=$_SESSION["user"];
		$bid= mysql_query("SELECT * FROM bidders WHERE bidderUserName='$user' and randomID='$id'");
		$c=mysql_num_rows($bid);
	}
		while ( $row = mysql_fetch_assoc($get))
		{
			$bidobject=$row['bidObject'];
			
			$count= mysql_query("Select count(*) from bidders where randomID=$id ");
			$startdate=$row['startDate'];
			$enddate=$row['endDate'];
			$minamount=$row['lowerLimit'];
			$category=$row['category'];
			$productget= mysql_query("Select * from productdescription where randomID=$id ");
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
			
			echo "<div style='height:440px; width:1150px; font-family:'MS Serif', 'New York', serif; float:left;'>";
			echo "<img src='../upload/$id.jpg'  height='200px' width='200px'/>"."&nbsp;&nbsp;&nbsp;";
			echo "&nbsp;&nbsp;&nbsp;"."<h1 style='margin-left:300px; margin-top:-220px;';>$bidobject&nbsp;&nbsp;</h1>"."<br/>";
			echo "&nbsp;&nbsp;&nbsp;"."<h3 style='margin-left:300px; margin-top:-20px;';>Product Id : $id</h3>"."<br/>";
			
			echo "&nbsp;&nbsp;&nbsp;"."<h3 style='margin-left:300px; margin-top:-30px;';>Start Date : $startdate &nbsp;&nbsp;(y-m-d) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   End Date : $enddate &nbsp;&nbsp;(y-m-d)</h3>";
			
			echo "&nbsp;&nbsp;&nbsp;"."<h3 style='margin-left:300px; margin-top:-10px;';>Number of Bidders : $nobidders  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Category :  $category </h3>";
			echo "&nbsp;&nbsp;&nbsp;"."<h3 style='margin-left:300px; margin-top:-10px;';>Minimum Bid Amount : $minamount INR
			&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Condition :  $condition  </h3>";
			echo "&nbsp;&nbsp;&nbsp;"."<h3 style='margin-left:300px; margin-top:-10px;';>   Actual Buying Date :  $buy &nbsp; &nbsp;(y-m-d)</h3>";
			
			echo "&nbsp;&nbsp;&nbsp;"."<h2 style='margin-left:10px; font-weight:800; margin-top:30px;font-family:'MS Serif', 'New York', serif;';> Description  </h2>";
			
			echo "&nbsp;&nbsp;&nbsp;"."<h3 style='margin-left:10px; margin-top:-40px;';> $description  </h3>";
			
			if(empty($c))
			{
				
			echo "<form  style='margin-left:720px; margin-top:50px; margin-bottom:-21px; ';  
			action='../details/details1.php' method='get'> <input type='hidden' value='$id' name='product'> <input style='background-color:#0c696e; color:#FFF; ' type='submit' value='Bid Now' name='bid'/>";
		
		
			
			echo "</form>";
			}
			
			else
			{
				echo "<h5 style='margin-left:750px;'>You have already bid on this item</h5>" ;
			}
			echo "</div>";
			
			echo "<div style=' margin-left:800px; margin-top:-88px;'>";
			echo "<button  style='   margin-top:-140px; margin-bottom:30px; background:#0C696E; color:#FFF; ' onclick='goBack()'>Go Back</button>";
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
 
 nbsp;||&nbsp;s<a href="../index.php?start=0">Homepage</a> &nbsp;||&nbsp; <a href="../aboutus/aboutus.php">About us</a> &nbsp;||&nbsp;<a href="../seenow/seenow.php?website_string=popularity&start=0&search=Search+now">Bids</a> &nbsp;||&nbsp; <a href="../winners/winners.php?start=0">Winners</a> &nbsp;||&nbsp;<a href="../contactus/contactus.php">Contact Us</a> &nbsp;||&nbsp;<a href="../mybidello/login.php?start=0&error=0">My Bidello</a> &nbsp;||&nbsp; <a href="#">Sitemap</a> &nbsp;||&nbsp; <a href="../faq/faq.php">FAQ's</a> &nbsp;||&nbsp; <a href="../disclaimer/disclaimer.php">Disclaimer</a> &nbsp;||&nbsp; 
</div>
<br/>


	<p>Copyright (c) 2013 <a href="../index.php?start=0">bidello.com </a>. All rights reserved. Design by <a href="" rel="nofollow">BITS PILANI GOA STUDENTS</a>.</p>
</div>
</div>
</body>
</html>
