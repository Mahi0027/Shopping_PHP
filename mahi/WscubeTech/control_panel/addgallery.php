
<?php
  
   require 'connection.php' ;
    $conn=startconnection();
    session_start();
    error_reporting(E_PARSE);
    // echo $_SESSION["ID"];
    if ($_SESSION["ID"]=="") 
    {
     header("location: index.php");
    }
     $name=$_FILES['image']['name'];
      $tmp_name=$_FILES['image']['tmp_name'];
      $path="../uploadsimage/".$name;    
      move_uploaded_file( $tmp_name, $path);
      $gallery_title=$_POST['gallery_title'];
      $image=$name;
      
  if ($_GET['nid']=="") 
  {     
    if(isset($_POST["usave"]))
    {      
      
      if ($gallery_title!="")
      {
        echo " Data Succesfully Inserted";
        $sql="INSERT INTO add_gallery(gallery_title,image) 
        values ('$gallery_title','$image')";
        mysqli_query($conn,$sql);
       
      }
      else 
      {
        echo " file name required";
      }
       //stopconnection($conn); 
    }
  }
  else
  { 
    //data fecth from database
    $ins="SELECT * FROM add_gallery where id='".$_GET['nid']."'";
    $exe=mysqli_query($conn,$ins);
    $fetch=mysqli_fetch_array($exe); 
    //update query
    if( $gallery_title!="")
    {   
      $upd =" UPDATE add_gallery SET gallery_title = '".$gallery_title."' , image = '".$image."' WHERE id = '".$_GET['nid']."'";
      $exe= mysqli_query($conn,$upd);
      echo "$exe";
      echo"data inserted successfully";
    }
    else
    {
      echo "if not staisfied";
    }
  }  
?>


<!DOCTYPE html>
<html>
<head>
	<title>AddGallery</title>
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
       <b><i> Add Gallery </i></b>
     </div>                    
     <div class="login_portal">
        <div class="input">                                      
            <div class="input1">
                Gallery_Title:<br><br> 
                Image :   
           </div>                                                                        
           <form action="" enctype="multipart/form-data" method="POST">    
               <div class="input2">
                   <input type="text" name="gallery_title" value="<?php echo $fetch['gallery_title'] ?>"> <br><br>
                   <input type="file" name="image" value="<?php echo $fetch['image'] ?>"><br><br><br>
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