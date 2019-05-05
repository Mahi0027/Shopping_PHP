
<?php
 
  require 'connection.php' ;
  $conn=startconnection();
  session_start(); 
  error_reporting(E_PARSE);
  $news_title=$_POST["ntitle"];
  $news_description=$_POST["ndescription"];
  echo $_SESSION["ID"];
  if ($_SESSION["ID"]=="") 
  {
     header("location: index.php");
  }
  
  if ($_GET['nid']=="") 
  {
    if(isset($_POST["usave"]))
    {                                                            
     //insert query 
      if ($news_title!="" && $news_description!="")
      {                                      
       $ins="INSERT INTO add_news(ntitle,ndescription) 
            values ('$news_title','$news_description')";
         mysqli_query($conn,$ins);
        echo "Data inserted succeffully $ins "; 
      }
      else 
      {
         echo "news_title required";
      }
         //stopconnection($conn); 
    }
    else
    {
      echo "dgf";
    } 
  }         
  else
   {  
     //echo "hiii";
     $ins="SELECT * from add_news where id='".$_GET['nid']."'";
     $exe=mysqli_query($conn,$ins);
     $fetch=mysqli_fetch_array($exe);        
     // update query
     if ($news_title!="" && $news_description!="")
     {  
       
        $upd=" UPDATE add_news set ntitle = '".$news_title."', ndescription='".$news_description."'
                  WHERE id ='".$_GET['nid']." '";
       mysqli_query($conn,$upd); 
     }
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
             Title:<br><br>
             Description:                                       
          </div>                                                                       
          <form action="" method="POST">
            <div class="input2">
               <input type="text"  value="<?php echo $fetch['ntitle'] ?>" name="ntitle"> <br><br>
               <textarea rows="5" cols="20" name="ndescription"><?php echo $fetch['ndescription'] ?> </textarea><br><br><br>
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