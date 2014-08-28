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
	
	echo "<a href='../logout.php'  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:12px;'  >logout</a>";
    echo "<h3 style=' float:right; color:white; margin-top:3px;'> &nbsp; |  &nbsp;</h3>";
    echo "<span  style=' float:right; color:white; font:Verdana; margin-top:3px; font-size:16px;'>$user</span> ";
	echo "<span  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:14px;'>Welcome !&nbsp;&nbsp;&nbsp;</span> ";
	
	echo "<a href='../profile/mybids.php?start=0'  style=' float:left; margin-left:600px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >myBids</a>";
	echo "<a href='../profile/mywins.php?start=0'  style=' float:left; margin-left:30px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >myWins</a>";
	
	echo "<a href='../profile/myitems.php?start=0'  style=' float:left; margin-left:30px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >myItems</a>";
	
	echo "<a href='postItem.php?start=0'  style=' float:left; margin-left:30px; color:white; font:Verdana; margin-top:5px;  font-size:14px;'  >post an Item</a>";
	}
	else
	{
		$url = '&location=' . urlencode($_SERVER['REQUEST_URI']);
		echo "<a href='../register/register.php'  style=' float:right; color:white; font:Verdana; margin-top:6px; font-size:12px;'  >Register</a>";
    echo "<h3 style=' float:right; color:white; margin-top:3px;'> &nbsp; |  &nbsp;</h3>";
    echo "<a href='../login.php?start=0&error=0&$url'><img src='images/login.png' alt=''  height='38px' width='122px' style='float:right; '/></a>";
    
	}

	?>

		<div id="logo">
			<h1><a href="../../index1.php?start=0">Bidello</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="icon icon-ok current_page_item"><a href="../../index1.php?start=0" accesskey="1" title="">homepage</a></li>
				<li class="icon icon-ok"><a href="../../aboutus/aboutus.html" accesskey="2" title="">about us</a></li>
				<li class="icon icon-ok"><a href="../../seenow/seenow.php?website_string=popularity&start=0&search=Search+now" accesskey="3" title="">bids</a></li>
				<li class="icon icon-ok"><a href="../../winners/winners.php?start=0" accesskey="4" title="">winners</a></li>
				<li class="icon icon-ok"><a href="../contactus/contactus.php" accesskey="5" title="">contact us</a></li>
                   <?php
				if($_SESSION["authenticated"]==false)
				{
                echo "<li class='icon icon-ok'><a href='../login.php?start=0&error=0&$url' accesskey='5' title=''>my bidello</a></li>";
				}
				else
				{
					echo "<li class='icon icon-ok'><a href='../mybidello1.php' accesskey='5' title=''>my bidello</a></li>";
				}
				?>
			</ul>
		</div>
	</div>
</div>

	


<div id="wrapper">
	<div id="page" class="container">
	
	<h2 style="font-weight: bold; font-family:'MS Serif', 'New York', serif ;"> POST YOUR ITEM </h2>
        <br>
        <br><form class="f" action="postItem2.php" method="post" enctype="multipart/form-data"> 
		
 
 
        		
				<h3>    <p class="clearfix"> 
				       <label style="font-family:'MS Serif', 'New York', serif" for="name">Item Name</label> 
		 		        
		<input style="height:30px; margin-left:230px ; width:300px;font-family:'MS Serif', 'New York', serif; border-radius:3px; border:thick 5px;" type="text" name="name"   id="name"  placeholder="Name"> </h3>
					
				    
                    </p>
                <h3>    <p class="clearfix"> 
				       <label style="font-weight: bold;font-family:'MS Serif', 'New York', serif";for="gender">Item Condition</label> 
        
				        <select style="font-family:'MS Serif', 'New York', serif ;margin-left:200px ;  border-radius:3px;" id="gender" name="Gender">
                        <option value="new">New</option>
                        <option value="used">Used</option>
                        </select></h3>
				    </p>
               <h3>    <p class="clearfix"> 
				       <label style="font-weight: bold;font-family:'MS Serif', 'New York', serif" for="Category">Category</label> 
        
				        <select style=" font-family:'MS Serif', 'New York', serif ;margin-left:243px ; border-radius:3px;"id="category" name="Category">
                        <option VALUE="choose">Choose Category </option>
                        <option VALUE="Electronics">Electronics</option>
                       <option VALUE="Books">Books</option>
                        <option VALUE="Furnitures">Furnitures</option>
                        <option VALUE="Music">>Music Instruments</option>
                        <option VALUE="Room">Room appliances</option>
                        <option VALUE="Sports">Sports & Gym</option>
                        <option VALUE="Travel">Travel & Accessories</option>
                        <option value="Media">Media</option>
                        <option value="misc">Miscellaneous</option>
                                               
                        </select></h3>
				    </p>
            	
                    
                    
				<h3>    <p class="clearfix"> 
			
                
                       <label style="font-weight: bold;font-family:'MS Serif', 'New York', serif"for="minBidAmount">Minimum Bid Amount </label> 
		          
			<input  style="height:30px; width:300px ;margin-left:143px ; border:thick 15px; border-radius:3px;"  type="number" name="minBidAmoun" id="minBidAmoun" placeholder="Minimum Bid Amount"> </h2>
            </p>
                               
                <h3>    <p class="clearfix"> 
				       <label style="font-weight: bold;font-family:'MS Serif', 'New York', serif" for="actualBuyDate">Actual Buying Date   </label>   
				    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
		
			    <input style="height:30px;font-family:'MS Serif', 'New York', serif; margin-left:123px ; border-radius:3px;";width:300px; border:thick 5px;" type="Date" name="actualBuyDate" id="actualBuyDate" placeholder="Actual Buy Date"> </h3>
				    <p style="font-family:'MS Serif', 'New York', serif">(Date should be in the format dd/mm/yyyy)</p>
                   
					</p> 
                    
				 <h3>    <p class="clearfix" style=" font-weight: bold;font-family:'MS Serif', 'New York', serif ;"> 
				       <label for="description"><b>Description    <b></label>   
				    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
		
			    <input style="height:60px; font-family:'MS Serif', 'New York', serif ;margin-left:177px ;width:300px; border:thick 5px;  border-radius:3px;" type="text" name="description" id="description" placeholder="Description"> </h3>
				 <p style=" font-weight: 400;font-family:'MS Serif', 'New York', serif ; border-radius:3px;" >(Write description of the product in less than 250 characters)</p>
                   
					</p> 
                 
                 
                  
                    <br/>
                    

<h3><label style="font-weight: 400;font-weight:bold ;font-family:'MS Serif', 'New York', serif ;" for="file">Upload Pic:</label>
<input type="file" name="file" id="file"><br>
 <p style=" font-weight: 400;font-family:'MS Serif', 'New York', serif ; border-radius:3px;" >(Image should be in JPEG format only and less than 100K in size)</p>
 <br/>
<input type="submit"  style=" margin-left:310px; border-radius:3px;height:30px;font-weight: bold; font-family:'MS Serif', 'New York', serif ;background-color:#0c696e; color:#FFF; " name="sendToVerify" value="Submit"  > 
                    <spacer align="right"/>
                    </form>
                    <div>
                    <br>
                    <br>
				        
				       

        
        
        
			
			</div>
		</div>
	</div>
</div>




<div style="background-color:#0c696e; height:150px;">
<div id="copyright" class="container">
<div style="margin-left:200px; margin-top:30px;">
 &nbsp;||&nbsp;<a href="../../index.php?start=0">Homepage</a> &nbsp;||&nbsp; <a href="../../aboutus.aboutus.html">About us</a> &nbsp;||&nbsp;<a href="#">Bids</a> &nbsp;||&nbsp; <a href="#">Winners</a> &nbsp;||&nbsp;<a href="#">Contact Us</a> &nbsp;||&nbsp;<a href="#">My Bidello</a> &nbsp;||&nbsp; <a href="#">Sitemap</a> &nbsp;||&nbsp; <a href="#">FAQ's</a> &nbsp;||&nbsp; <a href="#">Disclaimer</a> &nbsp;||&nbsp; 
</div>
<br/>


	<p>Copyright (c) 2013 <a href="../index.php?start=0">bidello.com </a>. All rights reserved. Design by <a href="" rel="nofollow">BITS PILANI GOA STUDENTS</a>.</p>
</div>
</div>
</body>

</html>
