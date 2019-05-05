
<?php
  
  require 'connection.php';
  $conn=startconnection();
  session_start();
  error_reporting(E_PARSE);
  $company_name=$_POST["company_name"];
  $address= $_POST["address"];
  $telephone=$_POST["telephone"];
  $mobile=$_POST["mobile"];  
  $email=$_POST["email"];

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
          echo "usave clicked";
          if ($company_name!="" && $address!="" && $telephone!="" && $mobile!="" && $email!="")
         { 
            $ins="INSERT INTO contact_us(company_name,address,telephone,mobile,email)
            values('$company_name','$address','$telephone','$mobile','$email') ";
            $exe=mysqli_query($conn,$ins);
            echo $ins;
            echo "data inserted successfully";
          }
          else
          {
            echo "conmpany name required";
          }
      }
      else
      {
        echo "if condition not satisfied";
      }
  }
  else
  {
    //update query
    $sel="SELECT * FROM contact_us where id='".$_GET['nid']."'";
    $exe=mysqli_query($conn,$sel);
    $fetch=mysqli_fetch_array($exe);
    if($company_name!="" && $address!="")
    {
      $upd="UPDATE contact_us set company_name='".$company_name."',address='".$address."', telephone='".$telephone."', mobile='".$mobile."',email='".$email."' ";
      $exe=mysqli_query($conn,$upd);
    }
  }    

?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
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
               <b><i> Contact Us </i></b>
          </div>                    
          <div class="login_portal">

               <div class="input"> 
                     <div class="input1">
                         Company Name:<br><br>
                         Address:     <br><br><br>
                         Telephone No: <br><br>
                         Mobile No:    <br><br>
                         Email Id:                                       
                    </div>                                                                                  
                   <form action="" method="post">                         
                      <div class="input2">
                          <input type="text" name="company_name" value="<?php echo $fetch['company_name']?>"> <br><br>
                          <textarea name="address"><?php echo $fetch['address'] ?> </textarea><br><br>
                          <input type="text" name="telephone" value="<?php echo $fetch['telephone'] ?>"> <br><br>
                          <input type="text" name="mobile" value="<?php echo $fetch['mobile'] ?>"> <br><br>
                          <input type="text" name="email" value="<?php echo $fetch['email'] ?>"> <br><br><br>
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