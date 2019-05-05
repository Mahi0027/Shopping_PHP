<?php
   
   require'connection.php';
   $conn=startconnection();
   error_reporting(E_PARSE);
   $where="";
   session_start(); 
   echo $_SESSION["ID"];
   if ($_SESSION["ID"]=="") 
   {
     header("location: index.php");
   }

   //delete query
   if(isset($_GET['did']))
   {
     $del="DELETE FROM add_course where id='".$_GET['did']."'";
     $exe= mysqli_query($conn,$del);

     if($exe==TRUE)
     {
      echo "delete ho gya";
     }
     else
     {
      echo" nahio hua";
     }
   }


?>



<!DOCTYPE html>
<html>
<head>
	<title>ViewCourse</title>
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
             <b><i> View Course </i></b>
        </div>
             <form action="" method="post"> 
                  <table border=\"3\" style= 'border-collapse:collapse; width:100%;'>
                        <tr> 
                            <th><input type="submit" name="Delete" value="Delete"> </th>
                            <th>S.NO.</th>
                            <th>Course Name </th>
                            <th> Fees</th>
                            <th>Duration </th>
                            <th>Description </th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr> 
                        <?php 
                            $sel="SELECT*FROM add_course $where" ;
                          // (mysql)+i is important
                            $exe=mysqli_query($conn,$sel);
                      
                         while ( $fetch=mysqli_fetch_array($exe))
                         {                                                                    
                         ?>  
                             <tr> 
                                  <td><input type="checkbox" name="c1[]" value="<?php echo $fetch['id'] ?>"></td>
                                  <td> <?php echo $fetch['id'] ?> </td>
                                  <td> <?php echo $fetch['course_name']?></td>
                                  <td> <?php echo $fetch['fees'] ?> </td>
                                  <td> <?php echo $fetch['duration']?> </td>
                                  <td> <?php echo $fetch['description']?> </td>
                                  <td><a href="viewcourse.php?did=<?php echo $fetch['id']?> "> Delete </a></td>
                                  <td><a href="addcourse.php?nid=<?php echo $fetch['id']?>"> Edit </a></td>
                              </tr>"                                        
                     <?php } ?>
                 </table>     
             </form>      
                                                  
        <div class="login_portal">                                                                  
        </div>                                                          	  			       	  			           	  		
     	<div class="footer">
     	      <b>www.wscubetech.com</b>
     	</div>    	
  </div>
</body>
</html>