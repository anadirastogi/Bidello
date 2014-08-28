<?php

session_start();
	$user=$_SESSION["user"];

$con=mysql_connect("localhost","root","");
if(! $con)
{ die('Connection Failed'.mysql_error()); }
mysql_select_db("bidello",$con);

		$opass= mysql_real_escape_string($_POST['opass']);
		$npass = mysql_real_escape_string($_POST['npass']);
		$cnpass = mysql_real_escape_string($_POST['cnpass']);
		$errcount =0;

		$t="hello";
		$t2=$user;
		$t3=crypt($t2, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t');
		
		$result=mysql_query("SELECT * FROM login WHERE username = '$user'");

$rowcount= mysql_num_rows($result);

    if($rowcount)
	{
		$e="hello";
		while($row=mysql_fetch_assoc($result))
		{
		$p=$row['password'];
		}
	}
		$t4=$opass;
  		$t5=crypt($t4, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t');
		$t.=$t3;
		$t.=$t5; 
		if(empty($npass) || empty($cnpass) || empty($cnpass) ){ echo "<script>alert('Please fill all the fields')</script>";
  				/*echo "<script>location.href='register.php'</script>"*/ echo "<script>window.history.go(-1);</script>";$errcount++;}
		if($t != $p)
		{
			echo "<script>alert('Your old password is incorrect')</script>";
  				/*echo "<script>location.href='register.php'</script>"*/ echo "<script>window.history.go(-1);</script>";$errcount++;
			
		}
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
			echo "<script>alert('Password Successfully changed.')</script>";
			echo "<script>location.href='mybidello1.php'</script>";
		}
		
		


?>
