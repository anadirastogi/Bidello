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
		<div id="logo">
			<h1><a href="../../index1.php?start=0">Bidello</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="icon icon-ok current_page_item"><a href="../../index1.php?start=0" accesskey="1" title="">homepage</a></li>
				<li class="icon icon-ok"><a href="../../aboutus/aboutus.html" accesskey="2" title="">about us</a></li>
				<li class="icon icon-ok"><a href="../../seenow/seenow.php?website_string=popularity&start=0&search=Search+now" accesskey="3" title="">bids</a></li>
				<li class="icon icon-ok"><a href="../../winners/winners.php?start=0" accesskey="4" title="">winners</a></li>
				<li class="icon icon-ok"><a href="#" accesskey="5" title="">contact us</a></li>
                
			</ul>
		</div>
	</div>
</div>

	


<div id="wrapper">
	<div id="page" class="container">
	
	<h2 style=" font-weight:bold;font-family:'MS Serif', 'New York', serif ;">NEW USER REGISTRATION </h2>
        <br>
        <br><form  style=" font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serifclass="f" form id="form1" action="register1.php" method="post"> 
		
 
 
        		
				<h3>    <p class="clearfix"> 
				       <label style=" font-weight:bold;font-family:'MS Serif', 'New York', serif ;"for="name"><b>Name<b></label> 
		 		        
		<input style="height:30px;border-radius:3px;font-family:'MS Serif', 'New York', serif ; margin-left:230px; width:300px; border:thick 5px;" type="text" name="name" value="<?php if(isset($_POST['name'])){ echo $_POST['name']; } ?>" id="name"  placeholder="Name"> </h3>
					
				    
                    </p>
                <h3>    <p class="clearfix"> 
				       <label style=" font-weight:bold;font-family:'MS Serif', 'New York', serif ;" for="gender"><b>Gender<b></label> 
        
				        <select  style="font-family:'MS Serif', 'New York', serif ;margin-left:214px;" id="gender" name="Gender">
                        <option>Male</option>
                        <option>Female</option>
                        </select></h3>
				    </p>
                <h3>   <p class="clearfix"> 
				       <label style=" font-weight:bold;font-family:'MS Serif', 'New York', serif ;"for="username"><b>Username <b></label>  
         
			<input style="height:30px;border-radius:3px;font-family:'MS Serif', 'New York', serif ;margin-left:196px;width:300px; border:thick 5px;" type="text" name="username" id="username" placeholder="Username"> </h3>
  <input type="submit"  style="height:20px;border-radius:3px; font-family:'MS Serif', 'New York', serif ;margin-left:640px; margin-top:-40px; background-color:#0c696e; color:#FFF; " name="UserNameAvail" value="Check Username Availability">
            	
                    
                    <p style=" font-weight:100;font-family:'MS Serif', 'New York', serif ;"> (Must be a more than 4 character alphanumeric string) </p>
                    <br/>
                    
                    				   </p>
				
				<h3>    <p class="clearfix"> 
			
                
                       <label style="font-family:'MS Serif', 'New York', serif ;" for="password"><b>Password <b></label> 
		           
			<input  style="height:30px;border-radius:3px;font-family:'MS Serif', 'New York', serif ; margin-left:195px; width:300px; border:thick 15px;" type="password" name="password" id="password" placeholder="Password"> </h3>
            
<p style=" font-weight:100; font-family:'MS Serif', 'New York', serif ;"> (Must  be more than 4 characters and not similar to username or name) </p>
                    <br/>
					</p> 
                    
                <h3>    <p class="clearfix"> 
				       <label style=" font-weight:bold;font-family:'MS Serif', 'New York', serif ;"for="cpassword"><b>Confirm Password    <b></label>   
				    
				    <input style="height:30px;border-radius:3px;font-family:'MS Serif', 'New York', serif ; margin-left:130px; width:300px; border:thick 5px;" type="password" name="repassword" id="cpassword" placeholder="Confirm Password"> </h3>
				    <p style=" font-weight:100;font-family:'MS Serif', 'New York', serif ;"> (Same as Password)</p>
				 <label style=" font-weight:bold;font-family:'MS Serif', 'New York', serif ;"for="state"><b>Please enter a security question<b></label>  
                  				        
<input style="height:30px; margin-left:60px; border-radius:3px;font-family:'MS Serif', 'New York', serif ;width:400px; border:thick 5px; m" type="text" name="question" id="question" placeholder="Security question"> <br/><br/>
 <label style=" font-weight:bold;font-family:'MS Serif', 'New York', serif ;"for="securityanswer"><b>Answer to security question<b></label>  
                  
                  <input style="border-radius:3px;height:30px;font-family:'MS Serif', 'New York', serif ; margin-left:85px; width:400px; border:thick 5px; m" type="text" name="answer" id="question" placeholder="Answer"> 

<br/><br/><br/></h3>   
  
                
				<h3>    <p class="clearfix" style="margin-top:20px;"> 
				       <label style=" font-weight:bold;font-family:'MS Serif', 'New York', serif ;"for="contact"><b>Contact No.<b></label>  
   
		  					        
<input style="border-radius:3px;height:30px;font-family:'MS Serif', 'New York', serif ;margin-left:180px; width:300px; border:thick 5px;" type="text" name="contactno" id="contact" placeholder="Contact"> </h3>
						<p style=" font-weight:100;font-family:'MS Serif', 'New York', serif ;"> (Must be a 10 digit number. Exclude country code. for eg: +918806922558 to be filled in as 8806922558)</p>
                        <br/>
					</p>
				
				<h3>    <p class="clearfix"> 
				       <label style=" font-weight:bold;font-family:'MS Serif', 'New York', serif ;"for="email"><b>E-mail<b></label>  
				       
				       <input  style=" border-radius:3px;height:30px;font-family:'MS Serif', 'New York', serif ; margin-left:215px; width:300px; border:thick 5px;" type="text" name="email" id="email" placeholder="E-mail"> </h3> 
						<p style=" font-weight:100;font-family:'MS Serif', 'New York', serif ;"> (Enter email in proper format  for eg: someone.someone@something.com OR someone.someone@something.co.xx)</p>
                        <br/>
					
					
					</p> 
				
				<h3>    <p class="clearfix"> 
				       <label style=" font-weight:bold;font-family:'MS Serif', 'New York', serif ;"for="age"><b>Age<b></label>   
<input  style="border-radius:3px;font-family:'MS Serif', 'New York', serif ;margin-left:240px;" type="number" name="age" id="age" placeholder="Age"> </h3>
						<p style=" font-weight:100;font-family:'MS Serif', 'New York', serif ;"> (To register you must be of age more than 18 years) </p>
                        <br/>
				    
                    </p>
                     
				<h3>    <p class="clearfix"> 
				       <label style=" font-weight:bold;font-family:'MS Serif', 'New York', serif ;"for="address"><b>Address<b></label> 
				      <input style="height:30px;font-family:'MS Serif', 'New York', serif ;border-radius:3px; margin-left:210px;width:300px; border:thick 5px;" type="text" name="address" id="address" placeholder="Address"> </h3>
				    </p>
				    
                <h3>    <p class="clearfix"> 
				       <label style=" font-weight:bold;font-family:'MS Serif', 'New York', serif ;" for="city"><b>City<b></label> 		        
<input  style="margin-left:240px;font-family:'MS Serif', 'New York', serif ;border-radius:3px;" type="text" name="city" id="city"  placeholder="City"> </h3>
				    </p>
                <h3>    <p class="clearfix"> 
				       <label style=" font-weight:bold;font-family:'MS Serif', 'New York', serif ;" for="state"><b>State<b></label> 
				        
<input style="height:30px;font-family:'MS Serif', 'New York', serif ;border-radius:3px; margin-left:233px; width:300px; border:thick 5px;" type="text" name="state" id="state" placeholder="State"> </h3>

                 
                 
                  
                    <br/>
                    <spacer align="right"/>
                    </form>
                    <div>
                    <br>
                    <br>
				        <input type="submit"  style=" margin-left:100;  margin-right:600px; font-family:'MS Serif', 'New York', serif ;height:30px; background-color:#0c696e; color:#FFF; " name="submit" value="Register"  > 
				       

        
        
        
			
			</div>
		</div>
	</div>
</div>




<div style="background-color:#0c696e; height:150px;">
<div id="copyright" class="container">
<div style="margin-left:200px; margin-top:30px;">
 &nbsp;&nbsp;&nbsp;||&nbsp;<a href="../../index.php?start=0">Homepage</a> &nbsp;||&nbsp; <a href="../../aboutus.aboutus.html">About us</a> &nbsp;||&nbsp;<a href="#">Bids</a> &nbsp;||&nbsp; <a href="#">Winners</a> &nbsp;||&nbsp;<a href="#">Contact Us</a>  &nbsp;||&nbsp; <a href="#">Sitemap</a> &nbsp;||&nbsp; <a href="#">FAQ's</a> &nbsp;||&nbsp; <a href="#">Disclaimer</a> &nbsp;||&nbsp; 
</div>
<br/>


	<p>Copyright (c) 2013 <a href="../index.php?start=0">bidello.com </a>. All rights reserved. Design by <a href="" rel="nofollow">BITS PILANI GOA STUDENTS</a>.</p>
</div>
</div>
</body>

</html>
