<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

$con=mysql_connect("localhost","root","");
if(! $con)
{ die('Connection Failed'.mysql_error()); }
mysql_select_db("bidello",$con);

		$user= $_POST['user'];
		$npass = mysql_real_escape_string($_POST['npass']);
		$cnpass = mysql_real_escape_string($_POST['cnpass']);
		$errcount =0;


		if(empty($npass) || empty($cnpass)){ echo "<script>alert('Please enter password')</script>";
  				/*echo "<script>location.href='register.php'</script>"*/ echo "<script>window.history.go(-1);</script>";$errcount++;}
		if(strlen($npass) <=5) {echo "<script>alert('Please enter password with more than 5 characters')</script>"; /*echo "<script>location.href='register.php'					`		</script>"*/echo "<script>window.history.go(-1);</script>";;$errcount++; }
		if($npass != $cnpass){echo "<script>alert('New and Confirm Password fields do not match')</script>";/* echo "<script>location.href='register.php'</script>";*/echo "<script>																			        window.history.go(-1);</script>"; $errcount++;}
		
		if($errcount == 0)
		{	
			$e="hello";
			
			$a=$user;
  			$b=crypt($a, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t');
  
 			$c=$npass;
  			$d=crypt($c, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t');
		
			$e.=$b;
			$e.=$d;
 			//echo '<br/>';
			$password= $e;
			
			$updatepass = mysql_query("UPDATE login SET password='$password' WHERE username='$user' ");
			echo "<script>alert('Password Successfully changed. Login With your New password now.')</script>";
			echo "<script>location.href='login.php?start=0&error=3&location=../index.php?start=0'</script>";
		}
		
		


?>
<body>
</body>
</html>