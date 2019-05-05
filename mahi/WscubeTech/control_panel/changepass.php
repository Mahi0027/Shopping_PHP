
<?php
   
    require'connection.php';
    $conn=startconnection();
    error_reporting(E_PARSE);
    session_start(); 
    //echo $_SESSION["ID"];
    if ($_SESSION["ID"]=="") 
    {
     header("location: index.php");
    }
    
    if($_POST['usave']=="submit")
     {
        
        $oldpassword=$_POST["oldpassword"];
        $newpassword=$_POST["newpassword"];
        $confirmpassword=$_POST["confirmpassword"];
        $sel="SELECT * FROM  login WHERE password='$oldpassword' and  id='".$_SESSION["ID"]."'";
        $exe=mysqli_query($conn,$sel);
        $tot=mysqli_num_rows($exe);
        if($tot==1){
          if ($newpassword==$confirmpassword) {
            $upd=" UPDATE login SET password = '".$newpassword."'
                  WHERE id ='".$_SESSION['ID']."'";
                  mysqli_query($conn,$upd);
          }
          else{
            $msg="";
          }


        }
        // echo $sel;
        
        // while($fetch=mysqli_fetch_array($exe))
        // {
        //     echo $fetch['password'];
        //     $databsepass=$fetch['password'];
        // echo $databsepass;
            
        //     if($oldpassword==$databsepass)
        //     {
        //         //echo"old password matched enter the new one";
        //          echo $databasepass;
            
            
        //          if($newpassword==$confirmpassword)
        //         {
        //             $upd=" UPDATE rgister SET password = '".$newpassword."'
        //             WHERE id ='".$_SESSION['ID']."'";
        //              echo $upd;
        //              $exe=mysqli_query($conn,$upd);
        //              if($exe===TRUE)
        //              {
        //                 echo"password updated";
        //                 echo $databasepass;
        //              }
        //              else
        //              {
        //                  echo "not updated";
        //              }
                     
                      
                     
        //         }
        //         else
        //         {
        //             echo" $$ entered new passwords didnt matched $$";
                
        //         }
            
            
        //    }
            else
           {
                echo"old password didnt matched";
           }

        
    }
    else
    {
        echo"not submitted";
    }
    
?>


<!DOCTYPE html>
<html>
<head>
	<title>AddNews</title>
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
                      <li><a href="changepass.php">Change Password</a> </li>
                      <li><a href="logout.php">Logout</a> </li>
                </ul>              
          </div>     	  		       
          <div class="page_title">
                <b><i> Add News </i></b>
          </div>                    
          <div class="login_portal">
                 <div class="input"> 
                        <div class="input1">
                             Old Password:<br><br>
                             New Password: <br><br>
                             Confirm Password:                                      
                        </div>
                     <form action="" method="post">
                            <div class="input2">
                                <input type="text" name="oldpassword"> <br><br>
                                <input type="text" name="newpassword"><br><br>
                                <input type="text" name="confirmpassword"><br><br><br>
                                <input type="submit" name="usave" value="submit">
                            </div>
                     </form>     
              
                 </div>   
                    
          </div>
     	    <div class="footer">
     	  		    <b>www.wscubetech.com</b>
     	    </div>     	
  </div>


</body>
</html>