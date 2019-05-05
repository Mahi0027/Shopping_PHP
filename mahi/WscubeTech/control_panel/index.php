<?php
    error_reporting(0);
    session_start();

    require 'connection.php' ;
    $servername = "localhost";
    $username = "root";
    $password="";
    $mydb     ="wscubep1";

        // Create connection
    $conn = mysqli_connect($servername,$username,$password,$mydb) or  die("Connection failed: " . mysqli_connect_error());
       
    if($_POST['login']=="Login")
    {


        $sel=" SELECT * FROM  login where username='".$_POST['uname']."'  
                and password='".$_POST['password']."'";
        $exe=mysqli_query($conn,$sel);
        echo $tot=mysqli_num_rows($exe);

        if($tot==1)
         {  

        if ($_POST['rem']==1){  
           
            setcookie("USERNAME",$_POST['uname'] ,time()+60);
            setcookie("PASSWORD",$_POST['password'],time()+60); 
         }

            $fetch=mysqli_fetch_array($exe);
            $_SESSION["ID"]= $fetch['id'];
            echo "<script>window.location='home.php' </script>";
         }
        else 
         {
            $msg="Invalid username password";
         }
    }


?>



<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    
     <div class="body">
     	  		<div class="header">
     	  			
   					   <b>  Welcome To WsCubeTech</b>
     	  		</div>
     	  		<div class="page_title">
     	  			   <b><i> Admin Portal </i></b>
     	        </div>

     	  		<div class="login_portal">
     	  			<div class="input"> 

                    <form action="" method="POST"> 
                        <div class="input1">
     	  			   	  	UserName:<br><br>
                            Password:<br><br>
                             <input type="checkbox" name="rem" value="1">            
    					</div>
                                
     	  			   	  <div class="input2">
                            <?php echo $_COOKIE["USERNAME"];  ?>
     	  			   	 <input type="text" name="uname" value="<?php echo $_COOKIE["USERNAME"];  ?>"> <br><br>
     	  		         <input  type="password" name="password" value="<?php echo $_COOKIE["PASSWORD"];  ?>"><br><br>
                             <b>Remember Me </b> <br><br>
                             <input type="submit" name="login" value="Login">
                          </div>
                          </div> 
                    </form>  
     	  			      
     	  		</div>
     	  		<div class="footer">
     	  			    <b>www.wscubetech.com</b>
     	  		</div>
     	

     </div>


</body>
</html>