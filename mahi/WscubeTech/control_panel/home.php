
<?php

    
    require 'connection.php' ;
    $conn=startconnection();
    session_start();
    error_reporting(E_PARSE);
    echo $_SESSION["ID"];

    if ($_SESSION["ID"]=="") 
    {
        header("location: index.php");
    }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="body">
     	  	 <div class="header">
     			   <b>  Welcome To WsCubeTech</b>
     	      </div>
     	     <div class="pages">     	  		 	
     	  		   <ul>
     	  		 		<li><a href="home.php"> Home</a></li>   
     	  		 		<li><a href="addnews.php">Add News</a> </li>  
     	  		 		<li><a href="viewnews.php">View News</a> </li> 
     	  		 		<li><a href="addgallery.php">Add Gallery</a> </li>
     	  		 	 	<li><a href="viewgallery.php">View Gallery</a> </li>
     	  		 		<li><a href="addcourse.php">Add Course</a> </li>
     	  		 		<li><a href="viewcourse.php">View Course</a> </li> 
     	  		 		<li><a href="addwhyiip.php">Add Why IIP</a> </li>
     	  		 		<li><a href="viewwhyiip.php">View Why IIP</a> </li>
     	  		 		<li><a href="aboutus.php">About US</a> </li>
                        <li><a href="addcontactus.php"> Add Contact Us</a></li>
                        <li><a href="viewcontactus.php">View Contact Us</a> </li>
     	  		 		<li><a href="addinterviewque.php">Add Interview Question</a>  </li>
     	  		 		<li><a href="viewinterviewque.php"> View Interview Question </a></li>
     	  		 		<li><a href="enquiry.php">Enquiry</a> </li>
                        <li><a href="countary.php">Countary</a> </li>
                        <li><a href="state.php">State</a> </li>
                        <li><a href="form.php">Form</a> </li>
     	  		 		<li><a href="changepass.php">Change Password</a> </li>
     	  		 		<li><a href="logout.php">Logout</a> </li>
     	  		   </ul>     	  		 	
     	     </div>     	  		     	  			       	  			      
     
            <div class="footer">
     	        <b>www.wscubetech.com</b>
            </div>   
    </div>
     	     
</body>
</html>