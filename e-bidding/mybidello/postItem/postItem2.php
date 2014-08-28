<?php

session_start();
	if($_SESSION["authenticated"]==true)
	{
	$user=$_SESSION["user"];
	}
		$con=mysql_connect("localhost","root","");
        if(! $con){
					die('Connection Failed'.mysql_error());
		}
		mysql_select_db("bidello",$con);
	$adminflag=1;
	
	$errcount=0;
	
	if(isset($_POST['sendToVerify']))
	{
	
	$name = mysql_real_escape_string($_POST['name']);
	$new_date= mysql_real_escape_string($_POST['actualBuyDate']);
	$condition ="";
	$minbid =mysql_real_escape_string($_POST['minBidAmoun']);
	$desc =mysql_real_escape_string($_POST['description']);
	
	if(empty($name)){ echo "<script>alert('Please enter Name of object')</script>";
  /*echo "<script type=text/javascript>location.href='register.php'</script>" ;*/echo "<script>window.history.go(-1);</script>";
$errcount++; }

if(empty($desc)){ echo "<script>alert('Please enter description of object')</script>";
  /*echo "<script type=text/javascript>location.href='register.php'</script>" ;*/echo "<script>window.history.go(-1);</script>";
$errcount++; }

	
	

	$arg=$_POST['Gender'];
				$compare=$arg;
				if($compare=="new")
				{	$condition ="new";		
				}
				else if($compare=="used")
				{	 	$condition ="used";
				}
	
	$category =0;
	$arg1=$_POST['Category'];
				$compare1=$arg1;
				if($compare1=="choose")
				{			echo "<script>alert('Please Choose a Category')</script>";
  						 echo "<script>window.history.go(-1);</script>"; $errcount++;
				}
				
				else if ($compare1 == "Electronics")
				{	$category = 1;		
				}			
				
				else if ($compare1 == "Books")
				{	$category = 2;		
				}	
				else if ($compare1 == "Furniture")
				{	$category = 3;		
				}	
				else if ($compare1 == "Music")
				{	$category = 4;		
				}	
				else if ($compare1 == "Room")
				{	$category = 5;		
				}	
				else if ($compare1 == "Sports")
				{	$category = 6;		
				}	
				else if ($compare1 == "Travel")
				{	$category = 7;		
				}	
				else if ($compare1 == "Media")
				{	$category = 8;		
				}	
				else if ($compare1 == "misc")
				{	$category = 9;		
				}	
				
	$currentDate = date("d-m-Y");
	$year = date("Y");
	$d = date("m");
	$cat="";
	$cat .=$year;
	$cat.=$d;
	$cat.=$category;
	$max="SELECT MAX(sysid) FROM bidinfo ";
$maxquery= mysql_query($max);
$q=0;
while ($row= mysql_fetch_assoc($maxquery))
{
	
	$q=$row['MAX(sysid)'];
}

	
$cat.=$q;	
$type1 = $_FILES ["file"] ["type"];
$name1 = $_FILES ["file"] ["name"];
$size = $_FILES ["file"] ["size"];
$temp = $_FILES ["file"] ["tmp_name"];
$error = $_FILES ["file"] ["error"];


if (($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg"))
{
if ($error > 0)
{
	 echo "<script>alert('Sry could not be uploaded')</script>";
  						 echo "<script>window.history.go(-1);</script>";
						  $errcount++;
}

else
{
	$move_to = "../../upload/".$cat;
}

}


else
{
	 echo "<script>alert('Only .jpg images are allowed')</script>";
  						 echo "<script>window.history.go(-1);</script>";
						  $errcount++;
}

if($errcount == 0)
{
	 move_uploaded_file($_FILES['file']['tmp_name'],$move_to);
	
	$q1=mysql_query("insert into productdescription values('$cat','$condition','$desc','$new_date')");
	$q2=mysql_query("INSERT INTO bidinfo (sysid,bidObject,randomID,sellerID,lowerLimit,adminFlag,startDate,category) VALUES('$q','$name', '$cat','$user','minbid','1','CURDATE()','$category' )");
}

}


?>