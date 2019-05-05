
<?php

    $servername = "localhost";
    $username = "root";
    $password="";
    $mydb     ="wscubep1";

    // Create connection
    $conn = mysqli_connect($servername,$username,$password,$mydb) or  die("Connection failed: " . mysqli_connect_error());
    $where="";
    error_reporting(0);
    session_start(); 
   //echo $_SESSION["ID"];
    if ($_SESSION["ID"]=="") 
    {
     header("location: index.php");
    }

    // delete query
    if ( isset($_GET['did']))
     {
       $ok=$_GET['did'];
       echo $ok;
       $del= "DELETE  FROM add_gallery where id='".$ok."'";
       echo $del; 
       $exe= mysqli_query($conn,$del);
      

       if ($exe) 
       {
         echo" table deleted";
       }
       else
       {
         echo" table not deleted";
       }

     }
     else
     {
      echo "did not known";
     }
    //mutiple delete
    $totdel= count($_POST['c1']);
    for ($i=0; $i< $totdel ; $i++) 
    { 
      $del="DELETE FROM add_gallery where id ='".$_POST['c1'][$i]."'";
      mysqli_query($conn,$del);

    }
?>


<!DOCTYPE html>
<html> 
<head>
   	<title>ViewGallery</title>
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
       <b><i> View Gallery </i></b>
    </div>
    <form method="post">
        <table border=\"3\" style= 'border-collapse:collapse; width:100%;'>
          <tr> 
             <th><input type="submit" name="Delete" value="Delete"> </th>
             <th>S.No.</th>
             <th>Gallery Title </th>
             <th> Image</th>
             <th> Delete</th>
             <th> Edit</th>                
          </tr> 
          <?php
               $sel="SELECT*from add_gallery $where";
               $exe=mysqli_query($conn,$sel);
               while($fetch=mysqli_fetch_array($exe))
                {   
                  $path="../uploadsimage/".$fetch['image'];
                   $path;
          ?>
          <tr> 
            <td><input type="checkbox" name="c1[]" value="<?php echo $fetch['id'] ?>"> </td>
             <td> <?php echo $fetch['id']?>   </td>
             <td> <?php echo $fetch['gallery_title']?>   </td>
             <td> 
                   <img src="<?php echo $path; ?>" width="50" height="50" alt="no image"> 
             </td> 
             <td><a href="viewgallery.php?did=<?php echo $fetch['id']?>">Delete </a> </td>
             <td><a href="addgallery.php?nid=<?php echo $fetch['id']?>"> Edit </a></td>                             
         </tr>

        <?php } ?>                                                          
     </table>                                             
     <div class="login_portal">                                                                 
     </div>
     <div class="footer">
     	  <b>www.wscubetech.com</b>
     </div>     	
 </div>
</body>
</html>