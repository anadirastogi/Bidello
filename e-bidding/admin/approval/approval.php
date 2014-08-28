<?php
session_start();
if($_SESSION["authenticated"] !== TRUE){
    header('location:http://localhost:8080/GPEL/admin/admin.php');}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>View news</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="news.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="container">
  <div class="header"> <!-- end .header --></div>
  <div class="content">
  <p><a href="../home.php">Home</a>    <a href="./new.php">New</a><a style="float:right;" href="../../mybidello/logout.php">Logout</a></p>
   <?php
/* 
        VIEW.PHP
        Displays all data from 'news' table
*/

       if(($connection=mysql_connect("127.0.0.1","root",""))===FALSE)
		die("could not connect database");
	   if(mysql_select_db("bidello",$connection)===FALSE)
		die("could not select database");
       
	    // get results from database
        $result = mysql_query("SELECT * FROM bidinfo where adminFlag=1") 
                or die(mysql_error());  
                
        // display data in table
        //echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";
        
        echo "<table border='1' cellpadding='4'>";
        echo "<tr> <th>ID</th> <th>Image</th> <th>object</th> <th>product id</th> <th>seller</th> <th>lowerlimit</th>   <th>category</th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                                // echo out the contents of each row into a table
								$id=$row['randomID'];
                echo "<tr>";
                echo '<td>' . $row['sysid'] . '</td>';
				echo '<td>' . "<img src='../../upload/$id.jpg'  height='100px' width='100px'/>" . '</td>';;
                echo '<td>' . $row['bidObject'] . '</td>';
                echo '<td>' . $row['randomID'] . '</td>';
				echo '<td>' . $row['sellerID'] . '</td>';
				echo '<td>' . $row['lowerLimit'] . '</td>';
				echo '<td>' . $row['category'] . '</td>';
				
                
                echo '<td><a href="delete.php?id=' . $row['sysid'] . '" onclick="return confirm(\'Approve Bid?\');" >Approve</a></td>';
				echo '<td><a href="delete.php?id=' . $row['sysid'] . '" onclick="return confirm(\'Reject Bid?\');" >Reject</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?></div>

  <div class="footer"><!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
