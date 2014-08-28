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
		
		$amount = $_GET['amount'];
		$id = $_GET['product'];
		$user= $_GET['user'];
		
		$query= mysql_query("select * from bidinfo where randomID = $id ");
		while($row = mysql_fetch_assoc($query))
		{
			$lower=$row['lowerLimit'];
				
		}
		
		if(empty($amount))
		{ 
		
		echo "<script>alert('Enter amount')</script>";
		echo "<script>window.history.go(-1);</script>";
        
		}
		
		if( $amount < $lower)
		
			{
					echo "<script>alert('your amount should be more than or equal to minimum bid amount')</script>";
					echo "<script>window.history.go(-1);</script>";
			}
			
		else
		
			{
				$q=mysql_query("insert into bidders values('$id','$user','$amount')");
				echo "<script>alert('your bid has been successfully posted')</script>";
				echo "<script>location.href='../index.php'</script>";
			}
	
?>		
		
		
</body>
</html>