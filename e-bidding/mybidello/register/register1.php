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

	
	
	
	
	
	
	if(isset($_POST['UserNameAvail']))
	{
		$username = mysql_real_escape_string($_POST['username']);
		$count=0;
		$quer=mysql_query("select * from login where username= '$username' ");
		$count=mysql_num_rows($quer);
		
		
		if ($count > 0)
		{
			
			
			echo "<script>alert('Already exists , Try Different Username')</script>";
		 	echo "<script>window.history.go(-1);</script>";
		}
				
		else
		{
			if (strlen($username) <= 4) {echo "<script>alert('Please enter Username with more than 4 characters')</script>";/*echo "<script>location.href='register.php'</script>";*/echo "<script>window.history.go(-1);</script>";$errcount++; }
			else
			{
			echo "<script>alert('Username Available')</script>";
		 	echo "<script>window.history.go(-1);</script>";
			}
		}
		
		}
		
	
	
	if(isset($_POST['submit']))
	{
	
	$name = mysql_real_escape_string($_POST['name']);
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$repassword = mysql_real_escape_string($_POST['repassword']);
	$contactno = mysql_real_escape_string($_POST['contactno']);
	$email = mysql_real_escape_string($_POST['email']);
	$age = mysql_real_escape_string($_POST['age']);
	$address = mysql_real_escape_string($_POST['address']);
	$city = mysql_real_escape_string($_POST['city']);
	$state = mysql_real_escape_string($_POST['state']);
	$gender= mysql_real_escape_string($_POST['Gender']);
	$question= mysql_real_escape_string($_POST['question']);
	$answer = mysql_real_escape_string($_POST['answer']);
	$question=mysql_real_escape_string($_POST['question']);
	$no =0;
	
	$num_length = strlen((string)$contactno);
	$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
    $num ='/[A-Z]+[a-z]+[0-9]+/';
	$num1= '/[0-9]/';
	$usernameexists = mysql_query("select count(*) from login where username = '$username' ");
	$emailexists = mysql_query("select count(*) from login where email = '$email' ");
	$standardage = 18;
	$errcount =0;
	while ( $row = mysql_fetch_assoc($usernameexists))
			{
				$no=$row['count(*)'];
			}
	
	//validation
	if(empty($name)){ echo "<script>alert('Please enter Name')</script>";
  /*echo "<script type=text/javascript>location.href='register.php'</script>" ;*/echo "<script>window.history.go(-1);</script>";
$errcount++; }
	
	if(empty($username)){ echo "<script>alert('Please enter Username')</script>";
  /*echo "<script>location.href='register.php'</script>";*/ echo "<script>window.history.go(-1);</script>"; $errcount++;}
	if (strlen($username) <= 4) {echo "<script>alert('Please enter Username with more than 4 characters')</script>";/*echo "<script>location.href='register.php'</script>";*/echo "<script>window.history.go(-1);</script>";$errcount++; }
	if ((preg_match($num,$username))) {echo "<script>alert('Please enter Username with atleast 1 number')</script>";/*echo "<script>location.href='register.php'</script>";*/echo "<script>window.history.go(-1);</script>";$errcount++; }
	if($no >0) {echo "<script>alert('username already exists')</script>";echo "<script>window.history.go(-1);</script>";$errcount++;}
	
	if(empty($password)){ echo "<script>alert('Please enter Password')</script>";
  				/*echo "<script>location.href='register.php'</script>"*/ echo "<script>window.history.go(-1);</script>";; $errcount++;}
	if(strlen($password) <=5) {echo "<script>alert('Please enter Password with more than 5 characters')</script>"; /*echo "<script>location.href='register.php'</script>"*/echo "<script>window.history.go(-1);</script>";;$errcount++; }
	if($password != $repassword){echo "<script>alert('Passwords do not match')</script>";/* echo "<script>location.href='register.php'</script>";*/echo "<script>window.history.go(-1);</script>"; $errcount++;}
	
	
	if($password == $username || $password == $name){ echo "<script>alert('Keep a more secure Password')</script>";/*echo "<script>location.href='register.php'</script>";*/echo "<script>window.history.go(-1);</script>";$errcount++; }
	
	if(empty($question)){ echo "<script>alert('Please enter a Security Question ')</script>";/*echo "<script>location.href='register.php'</script>";*/echo "<script>window.history.go(-1);</script>";$errcount++; }
	
	if(empty($answer)){ echo "<script>alert('Please answer your Security Question')</script>";/*echo "<script>location.href='register.php'</script>";*/echo "<script>window.history.go(-1);</script>";$errcount++; }
	
	if(empty($contactno)){echo "<script>alert('Please enter ContactNo.')</script>";
echo "<script>window.history.go(-1);</script>"; $errcount++;}
	if(!($num_length == 10)) { echo "<script>alert('Please enter valid 10 digit ContactNo.')</script>";/*echo "<script>location.href='register.php'</script>";*/echo "<script>window.history.go(-1);</script>";$errcount++; }
    if(!(preg_match($num1,$contactno)))  { echo "<script>alert('Contact no. can contain only digits from 0 to 9')</script>";echo "<script>window.history.go(-1);</script>"; $errcount++;}
	
	if(empty($email)){echo "<script>alert('Please enter E-mail')</script>";
  echo "<script>window.history.go(-1);</script>";/*echo "<script>location.href='register.php'</script>"*/;$errcount++; }
	if (!(preg_match($regex, $email))) { echo "<script>alert('Please enter valid E-mail Address')</script>";echo "<script>window.history.go(-1);</script>"; $errcount++;}
	

	if(empty($age)){echo "<script>alert('Please enter Age')</script>";
  /*echo "<script>location.href='register.php'</script>";*/echo "<script>window.history.go(-1);</script>"; $errcount++;}
	if($age < $standardage ){ echo "<script>alert('You are Under-Age to register')</script>";echo "<script>window.history.go(-1);</script>"; $errcount++;}
	
	if(empty($address)){echo "<script>alert('Please enter Address')</script>";
  echo "<script>window.history.go(-1);</script>"; $errcount++;}
	
	if(empty($city)){echo "<script>alert('Please enter City')</script>";
  echo "<script>window.history.go(-1);</script>"; $errcount++;}
	
	if(empty($state)){echo "<script>alert('Please enter State')</script>";
 echo "<script>window.history.go(-1);</script>";$errcount++;}
 
 
	
	$e="hello";
	if(!($errcount))
	{
		$a=$username;
  		$b=crypt($a, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t');
  
 		$c=$password;
  		$d=crypt($c, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t');
		
		$ans=crypt($answer,'$2a$10$1qAz2wSx3eDc4rFv5tGb5t');

  		$e.=$b;
		$e.=$d;
 		//echo '<br/>';
		$password= $e;

		//add to the database
	$spl=mysql_query("insert into login  VALUES(null,'$name','$username','$password','$contactno','$email','$age','$address','$city','$state','$gender','$question','$ans')");
	if(!empty($spl))
	{
		echo "<script>alert('You Have Been Successfully Registered. Please Login.')</script>";
		echo "<script>location.href='../login.php?start=1'</script>";
	}
	else
	{
		echo "<script>alert('Either your ContactNo. or E-mail ID is already registered')</script>";
		echo "<script>location.href='../login.php?start=1'</script>";
	}
	}
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