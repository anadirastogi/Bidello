    <?php
/* 
 DELETE.PHP
 Deletes a specific entry from the 'players' table
*/

 // connect to the database
 if(($connection=mysql_connect("127.0.0.1","root",""))===FALSE)
   die("could not connect database");
 if(mysql_select_db("bidello",$connection)===FALSE)
	die("could not select database");

 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 
 // delete the entry


 $result = mysql_query("UPDATE bidinfo SET adminFlag=0 , startDate=CURDATE() , endDate=CURDATE()+7 ,  itemFlag=0 WHERE sysid=$id")
 or die(mysql_error()); 
 
 // redirect back to the view page
 header("Location: approval.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 $result = mysql_query("UPDATE bidinfo SET adminFlag=2 WHERE sysid=$id") or die(mysql_error()); 
 header("Location: news.php");
 }
 
?>
