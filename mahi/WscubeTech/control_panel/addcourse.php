

<?php
     
    require 'connection.php';
    $conn=startconnection();
    session_start();
    error_reporting(E_PARSE);
    $course_name=$_POST["course_name"];
    $fees=$_POST["fees"];
    $duration=$_POST["duration"]; 
    $description=$_POST["description"];

    //echo $_SESSION["ID"];
    if ($_SESSION["ID"]=="") 
    {
     header("location: index.php");
    }


    if($_GET['nid']=="")

    {
      
      if(isset($_POST["usave"]))
      {
        if ($course_name!="")
        {
          echo " Data Succesfully Inserted";
          $sql="INSERT INTO add_course(course_name,fees,duration,descrption) 
          values ('$course_name','$fees', '$duration','$description')";
          echo $sql;
          $exe=mysqli_query($conn, $sql);
        }
        else 
        {
          echo " Course name required";
        }
      }
      else
      {
        echo "nothing is entered ";
      }
    }  
    else
    { //update 
      echo"entered in else";
      $sel="SELECT* from add_course where id='".$_GET['nid']."' ";
      $exe= mysqli_query($conn,$sel);
      $fetch=mysqli_fetch_array($exe);
      echo "after fetch array";

      if ($course_name!="" && $fees!="")
      { 
        echo " in update query";
        $upd="UPDATE add_course set course_name='".$course_name."',fees='".$fees."', duration='".$duration."',description='".$description."' where id='".$_GET['nid']."'";
        $exe=mysqli_query($conn,$upd);
        echo "$upd";

        if($exe=true)
        {
          echo "data updated  by update query";
        }
        else
        {
          echo "not updated";
        }  
      }

    }

     
?>

<!DOCTYPE html>
<html>
<head>
	<title>AddCourse</title>
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
                        <li><a href="viewinterviewque.php"> View Interview Question  </a></li>
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
                            CourseName:<br><br>
                            Fees:      <br><br>
                            Duration:  <br><br><br> 
                            Description:<br><br>      
                     </div>                                                                        
                     <form action="" method="POST">  
                            <div class="input2">
                                  <input type="text" name="course_name" value="<?php echo $fetch['course_name'] ?>"> <br><br>
                                  <input type="text" name="fees" value="<?php echo $fetch['fees'] ?>" > <br><br>
                                  <input type="text" name="duration" value="<?php echo $fetch['duration'] ?>" > <br><br>
                                  <textarea rows="5" cols="20" name="description"> <?php echo $fetch['description'] ?>" </textarea> <br><br>
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