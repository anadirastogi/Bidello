<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php


$f_usr = mysql_real_escape_string ($_POST["username"]);
$f_pswd = mysql_real_escape_string ($_POST["password"]);
$loc=$_GET['location'];
$encryp  = crypt($f_pswd,'$2a$10$1qAz2wSx3eDc4rFv5tGb5t');
$con=mysql_connect("localhost","root","");

if(! $con)

{

        die('Connection Failed'.mysql_error());

}
$url = 'login.php?start=0&error=1&location='  . $loc;
mysql_select_db("bidello",$con);

$result=mysql_query("SELECT * FROM login WHERE username = '$f_usr'");

$rowcount= mysql_num_rows($result);

    if($rowcount)
	{
		$e="hello";
		while($row=mysql_fetch_assoc($result))
		{
		$pass=$row['password'];
		}
		$a=$f_usr;
  		$b=crypt($a, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t');
  
 		$c=$f_pswd;
  		$d=crypt($c, '$2a$10$1qAz2wSx3eDc4rFv5tGb5t');
		
	

  		$e.=$b;
		$e.=$d;
		
 		//echo '<br/>';
		if($e==$pass)
		{
		session_start();
		$_SESSION['authenticated']=TRUE;
		$_SESSION['user']=$f_usr;
		
		echo "<script>alert('login successfull')</script>";
      	header("Location: " . $loc);
		}
		
		else
		{
		$s='location=';
		$s.=$loc; 
       header ("Location: " . $url);
		}
	
	}
    else
	{
		 header ("Location: " . $url);
	}
	
	
?>

</body>
</html>
