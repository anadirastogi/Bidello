<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php

		$con=mysql_connect("localhost","root","");
        if(! $con){
					die('Connection Failed'.mysql_error());
		}
		mysql_select_db("bidello",$con);

	
	
	$name = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);
	$contactno = mysql_real_escape_string($_POST['contactno']);
	$q = mysql_real_escape_string($_POST['query']);
	
	$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
	$num1= '/[0-9]/';
	$errcount =0;
	$num_length = strlen($contactno);
	
	if(empty($name)){ echo "<script>alert('Enter name')</script>";
  /*echo "<script type=text/javascript>location.href='register.php'</script>" ;*/echo "<script>window.history.go(-1);</script>";
$errcount++; }
	
	if(empty($email)){echo "<script>alert('Please enter e-mail')</script>";
  echo "<script>window.history.go(-1);</script>";/*echo "<script>location.href='register.php'</script>"*/;$errcount++; }
	if (!(preg_match($regex, $email))) { echo "<script>alert('Please enter valid valid email address')</script>";echo "<script>window.history.go(-1);</script>"; $errcount++;}
	
	if(empty($contactno)){echo "<script>alert('Please enter contactno')</script>";
echo "<script>window.history.go(-1);</script>"; $errcount++;}
	if(($num_length !== 10)) { echo "<script>alert('Please enter valid 10 digit contact no.')</script>";/*echo "<script>location.href='register.php'</script>";*/echo "<script>window.history.go(-1);</script>";$errcount++; }
    if(!(preg_match($num1,$contactno)))  { echo "<script>alert('Contact no. can contain only digits from 0 to 9')</script>";echo "<script>window.history.go(-1);</script>"; $errcount++;}
	
	if(empty($q)){ echo "<script>alert('Query can't be left blank')</script>";
  /*echo "<script type=text/javascript>location.href='register.php'</script>" ;*/echo "<script>window.history.go(-1);</script>";
$errcount++; }
	
	if($errcount == 0)
	{
		$spl=mysql_query("insert into contactus values('$name','$email','$contactno','$q') ");
		
		echo "<script>alert('Your query has been recieved, we will get back to you shortly')</script>";
		echo "<script>location.href='contactus.php'</script>";
		
	}
	
		
	
	
?>	
	
<div style="background-color:#0c696e; height:150px;">
<div id="copyright" class="container">
<div style="margin-left:200px; margin-top:30px;">
 &nbsp;||&nbsp;<a href="../index.php?start=0">Homepage</a> &nbsp;||&nbsp; <a href="#">About us</a> &nbsp;||&nbsp;<a href="#">Bids</a> &nbsp;||&nbsp; <a href="#">Winners</a> &nbsp;||&nbsp;<a href="#">Contact Us</a> &nbsp;||&nbsp;<a href="#">My Bidello</a> &nbsp;||&nbsp; <a href="#">Sitemap</a> &nbsp;||&nbsp; <a href="#">FAQ's</a> &nbsp;||&nbsp; <a href="#">Disclaimer</a> &nbsp;||&nbsp; 
</div>
<br/>


	<p>Copyright (c) 2013 <a href="../index.php?start=0">bidello.com </a>. All rights reserved. Design by <a href="" rel="nofollow">BITS PILANI GOA STUDENTS</a>.</p>
</div>
</div>
</body>
</html>