
<?php
    require'connection.php';
    $conn=startconnection();
    session_start();
    session_destroy();
    header("location: index.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div class="body">
     	  	    <div class="header">
   					   <b>  Welcome To WsCubeTech</b>
     	  		</div>     	  		       
                <div class="page_title">
                      <b><i> Logout</i></b>
                </div>

                <div class="login_portal">
                 <b>LOGOUT SUCCESSFULLY</b>                                                 
                </div>                                                         	  			      	  			      
     	  		
     	  		<div class="footer">
     	  			    <b>www.wscubetech.com</b>
     	  		</div>
     	
      </div>
</body>
</html>