
<?php
    require "connection.php";
    $conn=startconnection();
    session_start();
    error_reporting(E_PARSE);
    $Question=$_POST["Question"];
    $Answer=$_POST["Answer"];

     
    echo $_SESSION["ID"];
    if ($_SESSION["ID"]=="") 
    {
     header("location: index.php");
    }

    if(isset($_POST["usave"]))
    {
      if($Question!="" && $Answer!="")
      {
        $ins="INSERT INTO interview_question(question,answer) values('$Question','$Answer')";
        mysqli_query($conn,$ins);
        echo $ins;
        echo "Data inserted successfully";
      }
      else
      {
        echo "question should be entered";
      }
    }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Interview Question </title>
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
               <b><i> Add Interview Question </i></b>
          </div>                   
          <div class="login_portal">
                  <div class="input"> 
                        <div class="input1">
                              Question:<br><br>
                              Answer:                
                        </div>
                        <form action="" method="post">      
                        <div class="input2">
                             <input type="text" name="Question" value="<?php echo $fetch['Question'] ?>"> 
                             <br><br>
                             <textarea name="Answer"><?php echo $fetch['Answer'] ?>
                              </textarea><br><br><br>
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