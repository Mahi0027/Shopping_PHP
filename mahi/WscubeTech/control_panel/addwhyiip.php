
<?php

  require 'connection.php';
  $conn=startconnection();
  error_reporting(E_PARSE);
  $title=$_POST["title"];
  
  session_start(); 
  echo $_SESSION["ID"];
  if ($_SESSION["ID"]=="") 
  {
     header("location: index.php");
  }
  if ($_GET['nid']=="") 
  {
      if(isset($_POST["usave"]))
    
      {
          //inset query
          if($title!="")
          {
            $ins="INSERT INTO add_whyiip (title) values('$title')";
            mysqli_query($conn,$ins);
            echo $ins;
            echo "Data inserted successfully";
          }
          else
          {
            echo"Title should be entered";
          }
      }
     else
      {
        echo "if not satisfied";
      }
  }
  else
  {
    //update query
    $sel="SELECT * FROM add_whyiip where id='".$_GET['nid']."' ";
    $exe=mysqli_query($conn,$sel);
    $fetch=mysqli_fetch_array($exe);
    echo "in else";

    if($title!="")
    {
      $upd="UPDATE add_whyiip set title='".$title."' where id='".$_GET['nid']."'";
      $exe=mysqli_query($conn,$upd);

       if($exe)
      {
        echo "Data Updated";  
      }
      else
      {
        echo "Data didnt updated";
      }  
    }
  }  

?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Why IIP</title>
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
                      <li><a href="viewinterviewque.php"> View Interview Question   </a></li>
                      <li><a href="enquiry.php">Enquiry</a> </li>
                      <li><a href="changepass.php">Change Password</a> </li>
                      <li><a href="logout.php">Logout</a> </li>
                </ul>              
          </div>     	  		             
          <div class="page_title">
                <b><i> Add Why IIP </i></b>
          </div>
          <div class="login_portal">
                  <div class="input"> 
                         <div class="input1">
                                Title:<br><br>                                           
                          </div>                                                   
                          <form action="" method="post">                           
                          <div class="input2">
                               <input type="text" name="title" value="<?php echo $fetch['title'] ?>"> <br><br>
                             </div><br><br><br>
                               <input type="radio" name="Activaet">Activate
                               <input type="radio" name="Deactivate">Deactivate <br><br><br>
                               <input type="submit" name="usave" value="Submit">     
                           </div>
                        </form>   

          </div>
     	    <div class="footer">
     	  			    <b>www.wscubetech.com</b>
     	    </div>
     	
   </div>



</body>
</html>