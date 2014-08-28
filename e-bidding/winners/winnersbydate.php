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
     
</div>

		<!-- ****************************************************************************************************************** -->

			

		<!-- ****************************************************************************************************************** -->


<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				
	
          <ul>
         
          <br/>
          <br/>
          <br/>
          <li ><a href="../index.php?start=0"><h3>Homepage</h3></a></li>
          <br/>
          <br/>
          <br/>
          <li ><a href="../aboutus/aboutus.php?start=0"><h3>About Us</h3></a></li>
          <br/>
          <br/>
          <br/>
          <li ><a href="../seenow/seenow.php?website_string=popularity&start=0&search=Search+now"><h3>Bids</h3></a></li>
          <br/>
          
          <br/>
          <li ><a href="../contactus/contactus.php"><h3>Contact Us</h3></a></li>
          <br/>
          <br/>
          <br/>
          <li ><a href="../mybidello/login.php?start=0&error=0"><h3>My Bidello</h3></a></li>
          <br/> 
          </ul>
			</div>
		</div>
		<div id="sidebar">
			<div id="stwo-col">
			  <div class="sbox1">
              <?php
			  $search=$_GET['website_string'];
			 
			  if($search=='lastweeks')
		{
		
		echo "<h1>PAST WEEK WINNERS</h1>";
		
		}
		else if($search='twoweeksago')
		{
			
			echo "<h1>2nd LAST WEEK WINNERS</h1>";
		}
		else
		{
			
			echo "<h1>3rd LAST WEEK WINNERS</h1>";
		}
			  
				?>
				
                
                
             
 
  
  <br>
    <br/>              
 	
    <div id='tgt'></div>
    <br/>
 
    
    <form style="margin-left:570px; margin-top:-50px; margin-bottom:30px;" action="winnersbydate.php"> <br />
    <input type="hidden" value="0" name="start" />
    <select  name="website_string"  style="height:30px; color:#0c696e; width:150px;" >
      <option VALUE=" " select="selected"> choose time interval</option>  
    <option VALUE="lastweeks" >last week</option>
        <option VALUE="twoweeksago">2nd last week</option>
        <option value="threeweeksago">3rd last week</option>
          
    </select>
    <input type="submit"  style="height:30px; background-color:#0c696e; color:#FFF; " name="search" value="Search now"  >
</form>
 
    
    <?php
	
	$con=mysql_connect("localhost","root","");
        if(! $con){
					die('Connection Failed'.mysql_error());
		}
		mysql_select_db("bidello",$con);
		$bidamt=0;
		
		 $start=$_GET['start'];
			  $per_page=5;
		
		$record_count= mysql_num_rows(mysql_query("SELECT * FROM bidinfo"));
		
		$max_pages =$record_count / $per_page;
		
		if(!$start)
		$start=0;
				$add=mysql_query("ALTER TABLE bidinfo ADD noofbidders int(9)");
		$getrandomno=mysql_query("Select * from bidinfo ");
		while($row2=mysql_fetch_assoc($getrandomno))
		{
			$rid=$row2['randomID'];
			$c=mysql_query("Select count(*) from bidders where randomID=$rid ");
			while ( $row2 = mysql_fetch_assoc($c))
			{
				$c1=$row2['count(*)'];
				
				$in=mysql_query("update bidinfo set noofbidders=$c1 where randomID=$rid ");
			}
			
		}
		 if($search=='lastweeks')
		{
		$get = mysql_query("Select * from bidinfo where adminFlag=0 and itemflag=1 and endDate > CURDATE()-7 order by endDate desc LIMIT $start , $per_page");
		
		}
		else if($search='twoweeksago')
		{
			$get = mysql_query("Select * from bidinfo where adminFlag=0 and itemflag=1 and endDate > CURDATE()-14 and endDate < CURDATE()-7 order by endDate desc LIMIT $start , $per_page");
			
		}
		else
		{
			$get = mysql_query("Select * from bidinfo where adminFlag=0 and itemflag=1 and endDate > CURDATE()-21 and endDate < CURDATE()-14 order by endDate desc LIMIT $start , $per_page");
		
		}
		
		while ( $row = mysql_fetch_assoc($get))
		{
			$bidobject=$row['bidObject'];
			$id=$row['randomID'];
			$winner = $row['buyerID'];
			
			
			$count= mysql_query("Select count(*) from bidders where randomID=$id ");
			$startdate=$row['startDate'];
			$enddate=$row['endDate'];
			
			while ( $row = mysql_fetch_assoc($count))
			{
				$nobidders=$row['count(*)'];
			
			}
			$winget = mysql_query("select * from bidders where bidderUserName ='$winner' and randomID=$id");
			while ($row = mysql_fetch_assoc($winget))
			{
				$bidamt=$row['bidAmount'];
				
			}
			echo "<div style='height:140px; width:1100px; float:left; margin-bottom:40px;'>";
			echo "<img src='../upload/$id.jpg'  height='120px' width='120px'/>"."&nbsp;&nbsp;&nbsp;";
			echo "&nbsp;&nbsp;&nbsp;"."<h4 style='margin-left:130px; margin-top:-120px;';>$bidobject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product id : $id</h4>"."<br/>";
			echo "&nbsp;&nbsp;&nbsp;"."<h5 style='margin-left:303px; margin-top:-40px;';>Y-M-D</h5>";
			echo "&nbsp;&nbsp;&nbsp;"."<h5 style='margin-left:230px; margin-top:-30px;';>Start Date : $startdate  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; End Date : $enddate</h5>";
			
			echo "&nbsp;&nbsp;&nbsp;"."<h5 style='margin-left:230px; margin-top:-30px;';>Winner : $winner   
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bid Amount :$bidamt   </h5>";
			
			echo "<form  style='margin-left:750px; margin-top:-30px;'; action='biddetails/10winners.php' method='get'> <input type='hidden' value='$id' name='product'> <input style='background-color:#0c696e; color:#FFF; ' type='submit' value='more details' name='details'></form>";
			echo "</div><hr/>";
			
		}
		$prev = $start - $per_page;
		$next = $start + $per_page;
		
		$ditch=mysql_query("ALTER TABLE bidinfo drop column noofbidders ");
		echo "<br/><br/>";
		if(!($start<=0))
		echo "<a href='winnersbydate.php?start=$prev' style='margin-left:300px;'>Prev</a>"."&nbsp;";
		
		$i=1;
		for ($x=0;$x<$record_count;$x=$x+$per_page)
		{
			if($start!=$x)
			{
				
				echo "<a href='winnersbydate.php?start=$x' style='margin-left:4px;'>$i</a>"."&nbsp;";
				
			} 
			else
			{
				if($start<=0)
				{
					echo "<a href='winnersbydate.php?start=$x' style='margin-left:300px;'><b>$i</b></a>"."&nbsp;";
				}
				else
				{
				echo "<a href='winnersbydate.php?start=$x' style='margin-left:4px;'><b>$i</b></a>"."&nbsp;";
				}
			}
			$i++;
		}
		
		if(!($start>=$record_count-$per_page))
		echo "<a href='winnersbydate.php?start=$next' style='margin-left:4px;'>Next</a>";
		
		
		
    ?>
    
					
                    
			  </div>
               
                
                
				
			</div>
		</div>
	</div>
    
	
    <div style="background-color:#0c696e; height:150px;">
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
