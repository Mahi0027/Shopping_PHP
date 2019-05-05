
<?php

  require'connection.php';
  $conn=startconnection();
  session_start(); 
  error_reporting(0);
  //echo $_SESSION["ID"];
  $where="";
  if ($_SESSION["ID"]=="") 
  {
     header("location: index.php");
  }
  
  //delete querys
  if(isset($_GET['did']))
  {
    $del="DELETE FROM contact_us where id='".$_GET['did']."'";
    $exe=mysqli_query($conn,$del);
    if($exe=true)
    {
      echo "DAta deleted";
    }
    else
    {
      echo" not deleted";
    }
  }

  //multiple delete
  $totdel=count($_POST['c1']);
  for ($i=0; $i<$totdel ; $i++)
  { 
    $del="DELETE FROM contact_us where id='".$_POST['c1'][$i]."'";
    $exe=mysqli_query($conn,$del)  ; 

  }


 

?>


<!DOCTYPE html>
<html>
<head>
	<title>View Contact Us</title>
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
                    <li><a href="viewinterviewque.php"> View Interview Question</a></li>
                    <li><a href="enquiry.php">Enquiry</a> </li>
                    <li><a href="changepass.php">Change Password</a> </li>
                    <li><a href="logout.php">Logout</a> </li>
              </ul>              
        </div>     	  		       
        <div class="page_title">
               <b><i> View Contact Us</i></b>
        </div>
        <form method="post">
            <table border="2" style='border-collapse: collapse; width: 90%' align="center">
               <tr>
                  <th><input type="submit" name="Delete" value="Delete"> </th>
                  <th> S.NO</th>
                  <th> Company Name</th>
                  <th> Address</th>
                  <th> Telephone</th>
                  <th> Mobile</th>
                  <th> Email</th>
                  <th>Delete </th>
                  <th>Edit </th>
               </tr>
               <?php 
                    $sel=" SELECT*FROM contact_us $where ";
                    $exe= mysqli_query($conn,$sel);
                    
                    while ($fetch=mysqli_fetch_array($exe))
                     {
                  ?>    <tr>
                            <td><input type="checkbox" name="c1[]" value="<?php  echo $fetch['id'] ?>"> </td>
                            <td><?php echo $fetch['id'] ?></td>
                            <td><?php echo $fetch['company_name'] ?></td>
                            <td><?php echo $fetch['address'] ?></td>
                            <td><?php echo $fetch['telephone'] ?></td>
                            <td><?php echo $fetch['mobile'] ?></td>
                            <td><?php echo $fetch['email'] ?></td>
                            <td><a href="viewcontactus.php?did=<?php echo $fetch['id']?>"> Delete </a></td>
                            <td><a href="addcontactus.php?nid=<?php echo $fetch['id']?>"> Edit </a></td>

                        </tr> 

                  <?php  } ?>

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