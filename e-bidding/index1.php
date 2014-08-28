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
	
	

	echo "<a href='mybidello/logout.php'  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:12px;'  >logout</a>";
    echo "<h3 style=' float:right; color:white; margin-top:3px;'> &nbsp; |  &nbsp;</h3>";
    echo "<span  style=' float:right; color:white; font:Verdana; margin-top:3px; font-size:16px;'>$user</span> ";
	echo "<span  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:14px;'>Welcome !&nbsp;&nbsp;&nbsp;</span> ";
	echo "<a href='mybidello/profile/mybids.php?start=0'  style=' float:left; margin-left:600px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >myBids</a>";
	echo "<a href='mybidello/profile/mywins.php?start=0'  style=' float:left; margin-left:30px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >myWins</a>";
	
	echo "<a href='mybidello/profile/myitems.php?start=0'  style=' float:left; margin-left:30px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >myItems</a>";
	
		
	echo "<a href='mybidello/postItem/postItem.php?start=0'  style=' float:left; margin-left:30px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >post an Item</a>";
	
	}
	else
	{
		$url = '&location=' . urlencode($_SERVER['REQUEST_URI']);
		echo "<a href='mybidello/register/register.php'  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:12px;'  >Register</a>";
    echo "<h3 style=' float:right; color:white; margin-top:3px;'> &nbsp; |  &nbsp;</h3>";
    echo "<a href='mybidello/login.php?start=0&error=0&$url'><img src='images/login.png' alt=''  height='38px' width='122px' style='float:right; '/></a>";
    
	}
	

	?>
    
		<div id="logo">
        
			<h1><a href="#">BIDELLO</a></h1>
            
		</div>
		<div id="menu">
			<ul>
				<li class="icon icon-ok current_page_item"><a href="index.php?start=0" accesskey="1" title="">homepage</a></li>
				<li class="icon icon-ok"><a href="aboutus/aboutus.php" accesskey="2" title="">about us</a></li>
				<li class="icon icon-ok"><a href="seenow/seenow.php?website_string=popularity&start=0&search=Search+now" accesskey="3" title="">bids</a></li>
				<li class="icon icon-ok"><a href="winners/winners.php?start=0" accesskey="4" title="">winners</a></li>
				<li class="icon icon-ok"><a href="contactus/contactus.php" accesskey="5" title="">contact us</a></li>
                <?php
				if($_SESSION["authenticated"]==false)
				{
                echo "<li class='icon icon-ok'><a href='mybidello/login.php?start=0&error=0&$url' accesskey='5' title=''>my bidello</a></li>";
				}
				else
				{
					echo "<li class='icon icon-ok'><a href='mybidello/mybidello1.php' accesskey='5' title=''>my bidello</a></li>";
				}
				
				?>
			</ul>
		</div>
        
       
	</div>
     <div class="search">
					<form action="" method="post">
						<input type="text" class="field" name="search" value="keywords here ..." title="keywords here ..." />
						<input type="submit" class="search-btn" name="submit" value="" />
						<div class="cl">&nbsp;</div>
					</form>
				</div>
</div>

		<!-- ****************************************************************************************************************** -->

			<div id="slider">
				<a href="#" class="button previous-button"><span class="icon icon-double-angle-left"></span></a>
				<a href="#" class="button next-button"><span class="icon icon-double-angle-right"></span></a>
				<div class="viewer">
					<div class="reel">
						<div class="slide" >
							<a class="link" href=""></a>
							<img src="images/2.jpg" alt=""  height="200px" width="980px" style="margin-left:10px; margin-top:1px;"/>
						</div>
						<div class="slide">
							<a class="link" href=""></a>
							<img src="images/1.jpg" alt="" height="200px" width="980px" style="margin-left:10px; margin-top:1px;"/>
						</div>
                        
                        <div class="slide">
							<a class="link" href=""></a>
							<img src="images/1.jpg" alt="" height="200px" width="980px" style="margin-left:10px; margin-top:1px;"/>
						</div>
                        
                       
                        
						
					</div>
				</div>
			</div>
			
			<script type="text/javascript">
				$('#slider').slidertron({
					viewerSelector: '.viewer',
					reelSelector: '.viewer .reel',
					slidesSelector: '.viewer .reel .slide',
					advanceDelay: 4000,
					speed: 'slow',
					navPreviousSelector: '.previous-button',
					navNextSelector: '.next-button',
					slideLinkSelector: '.link'
				});
			</script>

		<!-- ****************************************************************************************************************** -->


<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>CATEGORIES</h2>
                <br/>
				<span class="byline">Search items to bid from various categories</span>
			
          
          <div style="margin-top:90px; ">
			<a href="Celectronics/electronics.php?start=0" class="button"  style="float:left;height:21px;  "><img src="images/elect.jpg"  style="margin-left:-40px; margin-top:-30px; margin-right:-40px; margin-bottom:-23px;"/></a>
            
           </div>
           
            <div style="margin-top:70px; margin-left:20px;">
            <a href="Cbooks/books.php?start=0" class="button"  style="float:left; margin-left:50px; height:21px; "><img src="images/books.jpg"  style="margin-left:-40px; margin-top:-30px; margin-right:-40px; margin-bottom:-23px;"/></a>
            </div>
            <div style="margin-top:70px;">
            <a href="Cfurniture/furniture.php?start=0" class="button"  style="float:left; margin-left:50px; height:21px;"><img src="images/furniture.jpg"  style="margin-left:-40px; margin-top:-30px; margin-right:-40px; margin-bottom:-23px;"/></a>
            </div>
            <div style="margin-top:70px;">
            <a href="Cmusicinstruments/musicinstruments.php?start=0" class="button"  style="float:left; margin-top:90px; height:21px;"><img class="hov" src="images/music.jpg"  style="margin-left:-40px; margin-top:-30px; margin-right:-40px; margin-bottom:-23px;"/></a>
            </div>
            <div style="margin-top:70px;">
            <a href="Croomappliances/roomappliances.php?start=0" class="button"  style="float:left;margin-left:50px; margin-top:90px; height:21px;"><img src="images/room.jpg"  style="margin-left:-40px; margin-top:-30px; margin-right:-40px; margin-bottom:-23px;"/></a>
            </div>
            <div style="margin-top:70px;">
            <a href="Csportsandgym/sportsandgym.php?start=0" class="button"  style="float:left; height:21px;  margin-left:50px;margin-top:90px;"><img src="images/sports.jpg"  style="margin-left:-40px; margin-top:-25px; margin-right:-40px; margin-bottom:-23px;"/></a>
            </div>
            <div style="margin-top:70px;">
            <a href="Ctravelandaccessories/travelandaccessories.php?start=0" class="button"  style="float:left; margin-top:90px; height:21px;"><img src="images/travel.jpg"  style="margin-left:-40px; margin-top:-30px; margin-right:-40px; margin-bottom:-23px;"/></a>
            </div>
            <div style="margin-top:70px;">
            <a href="Cmedia/media.php?start=0" class="button"  style="float:left; margin-left:50px; margin-top:90px; height:21px;"><img src="images/media.jpg"  style="margin-left:-40px; margin-top:-30px; margin-right:-40px; margin-bottom:-23px;"/></a>
            </div>
            <div style="margin-top:70px;">
            <a href="Cmiscellaneous/miscellaneous.php?start=0" class="button"  style="float:left;margin-left:50px;margin-top:90px; height:21px;"><img src="images/misc.jpg"  style="margin-left:-40px; margin-top:-30px; margin-right:-40px; margin-bottom:-23px;"/></a>
            </div>
            
             </div></div>
            
          
            
            
		<div id="sidebar">
			<div id="stwo-col">
				<div class="sbox1">
					<h2>Bid on these items now </h2>
                   <form style="margin-left:370px; margin-top:10px; margin-bottom:20px;" action="seenow/seenow.php" method="get"> <br />
    <select  name="website_string"  style="height:30px; color:#0c696e; width:150px;" >
        
    <option VALUE="popularity" selected="selected">Popular</option>
        <option VALUE="soontoend">Closing</option>
        <option value="mostRecent">Latest</option>
          
    </select>
    <input type="hidden" value="0" name="start" />
    <input type="submit"  style="height:30px; background-color:#0c696e; color:#FFF; " name="search" value="Search now"  >
</form>
 
    <div id='tgt'></div>
					 <?php
		$con=mysql_connect("localhost","root","");
        if(! $con){
					die('Connection Failed'.mysql_error());
		}
		mysql_select_db("bidello",$con);
		
		$per_page=5;
		$start=$_GET['start'];
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
		$get = mysql_query("Select * from bidinfo where adminFlag=0 and itemflag=0  order by noofbidders desc LIMIT $start , $per_page");
		
		while ( $row = mysql_fetch_assoc($get))
		{
			$bidobject=$row['bidObject'];
			$id=$row['randomID'];
			$count= mysql_query("Select count(*) from bidders where randomID=$id ");
			$startdate=$row['startDate'];
			$enddate=$row['endDate'];
			while ( $row = mysql_fetch_assoc($count))
			{
				$nobidders=$row['count(*)'];
			}
			
			echo "<div style='height:140px; width:650px; float:left;'>";
			echo "<img src='upload/$id.jpg'  height='120px' width='120px'/>"."&nbsp;&nbsp;&nbsp;";
			echo "&nbsp;&nbsp;&nbsp;"."<h4 style='margin-left:130px; margin-top:-120px;';>$bidobject&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product id : $id</h4>"."<br/>";
			echo "&nbsp;&nbsp;&nbsp;"."<h5 style='margin-left:290px; margin-top:-40px;';>YYYY-MM-DD</h5>";
			echo "&nbsp;&nbsp;&nbsp;"."<h5 style='margin-left:230px; margin-top:-30px;';>Start Date : $startdate  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; End Date : $enddate</h5>";
			
			echo "&nbsp;&nbsp;&nbsp;"."<h5 style='margin-left:230px; margin-top:-30px;';>number of bidders : $nobidders   </h5>";
			
			echo "<form  style='margin-left:550px; margin-top:-30px;'; action='details/details.php' method='get'> <input type='hidden' value='$id' name='product'> <input type='hidden' value='$start' name='start'> <input style='background-color:#0c696e; color:#FFF; ' type='submit' value='view details' name='details'></form>";
			echo "</div><hr/>";
			
		}
		$prev=$start - $per_page;
		$next = $start + $per_page;
		
		$ditch=mysql_query("ALTER TABLE bidinfo drop column noofbidders ");
		echo "<br/><br/>";
		if(!($start<=0))
		echo "<a href='index1.php?start=$prev&session=0' style='margin-left:300px;'>Prev</a>"."&nbsp;";
		
		$i=1;
		for ($x=0;$x<$record_count;$x=$x+$per_page)
		{
			if($start!=$x)
			{
				
				echo "<a href='index1.php?start=$x&session=0' style='margin-left:4px;'>$i</a>"."&nbsp;";
				
			} 
			else
			{
				if($start<=0)
				{
					echo "<a href='index1.php?start=$x&session=0' style='margin-left:300px;'><b>$i</b></a>"."&nbsp;";
				}
				else
				{
				echo "<a href='index1.php?start=$x&session=0' style='margin-left:4px;'><b>$i</b></a>"."&nbsp;";
				}
			}
			$i++;
		}
		
		if(!($start>=$record_count-$per_page))
		echo "<a href='index1.php?start=$next&session=0' style='margin-left:4px;'>Next</a>";
		
    ?>
                    
			  </div>
                <b>
                
               
				
			</div>
		</div>
	</div>
    
	
    <div style="background-color:#0c696e; height:150px;">
<div id="copyright" class="container">
<div style="margin-left:160px; margin-top:30px;">
 &nbsp;||&nbsp;<a href="index.php?start=0">Homepage</a> &nbsp;||&nbsp; <a href="aboutus/aboutus.php">About us</a> &nbsp;||&nbsp;<a href="seenow/seenow.php?website_string=popularity&start=0&search=Search+now">Bids</a> &nbsp;||&nbsp; <a href="winners/winners.php?start=0">Winners</a> &nbsp;||&nbsp;<a href="contactus/contactus.php">Contact Us</a> &nbsp;||&nbsp;<a href="mybidello/login.php">My Bidello</a> &nbsp;||&nbsp; <a href="#">Sitemap</a> &nbsp;||&nbsp; <a href="faq/faq.php">FAQ's</a> &nbsp;||&nbsp; <a href="disclaimer/disclaimer.php">Disclaimer</a> &nbsp;||&nbsp; 
</div>
<br/>


	<p>Copyright (c) 2013 <a href="index.php?start=0">bidello.com </a>. All rights reserved. Design by <a href="" rel="nofollow">BITS PILANI GOA STUDENTS</a>.</p>
</div>
</div>
</body>
</html>
