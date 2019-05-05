
<?php
   
    $servername = "localhost";
    $username = "root";
    $password ="";
    $mydb     ="wscubep1";
    $conn = mysqli_connect($servername,$username,$password,$mydb) or  
            die("Connection failed: " . mysqli_connect_error());   
    error_reporting(E_PARSE);
    $Name=$_POST["Name"];
    $Password=$_POST["Password"];
    $Email=$_POST["Email"];
    $Phone=$_POST["Phone"];
    $Place=$_POST["Place"];
 
   
    if(isset($_POST["save"]))
    {                                                            
        //insert query 
     if ($Name!="" && $Email!="" && $Phone!="")
          {                                      
             $ins="INSERT INTO rgister(name,password,  email,  phone,Place) 
                  values ('$Name','$Password','$Email','$Phone','$Place')";
              mysqli_query($conn,$ins);
              echo "$ins";
              echo "Data inserted succeffully $ins ";
          }
    else 
         {
          echo "news_title required";
         }
         //stopconnection($conn); 
        
    }   

?>




<html>
<head>
<title> IIP ACADEMY
</title>
 <link href="style.css" rel="stylesheet"/>

</head>




<body  class="body">
        <div class="outer">
                <div class="header">
                        <div class="logo"><img src="images/logo.png"></div>
                        <div class="midtext"><b>Looking for the Best Place for Programming</b>
                        </div>
                        
                        <div class="login2">
                             <input type="submit" name="LogIn" value="LogIn">

                        </div>

                        <div class="sitename">
                              www.iipacademy.com <br/><br/> 
                            <b> Info@iipacademy.com <br/> <br/> <b> 
                            <b class="no"> +91-9269698122 </b>
                        </div>
                        <div class="clear"></div>
                </div>
             
                <div class="menubar">
                            <div class="home_active">
                                <a href="index.php"> Home</a>
                            </div> 
                            <div class="about">
                                <a href="aboutus.php"> About</a>
                            </div> 
                            <div class="about"> 
                                <a href="coures.php"> Courses </a>
                            </div> 
                            <div class="about"> 
                                <a href="gallery.php">Gallery</a> 
                            </div> 
                            <div class="about">
                                <a href="enquiry.php">Enquiry</a>
                            </div> 
                            <div class="about"> 
                                <a href="contactus.php"> Contact Us</a> 
                            </div> 
                            <div class="clear"></div>
                       
                </div>
             
                <div class="maindiv1">
                       <div class="maindiv1_1">
                             <div class="maindiv1_1_1">
                                 <a href="index.php">Home</a> 
                              </div>
                              <div class="maindiv1_1_1">
                                 <a href="aboutus.php">About</a> 
                              </div>
                              <div class="maindiv1_1_1">
                                 <a href="coures.php">Courses </a> 
                              </div>
                              <div class="maindiv1_1_1">
                                 <a href="gallery.php">Gallery</a> 
                              </div>
                              <div class="maindiv1_1_1"> 
                                 <a href="enquiry.php">Enquiry</a>
                              </div>
                              <div class="maindiv1_1_1">
                                 <a href="contactus.php">Contact Us</a>
                              </div>
                      </div>
                      <div class="textarea">
                           <div class="login_portal_div"> 
                           	        <h2>RGISTER</h2>
                           			<form action="" method="POST">
                           				 <div class="login_portal_input1" style="margin-top: 20px;">
                           				 	 Name:    <br><br>
                           				 	 Password:<br><br>
                           				 	 Email:   <br><br>
                           				 	 Phone:   <br><br>
                           				 	 Address: <br><br>

                           				 </div>
                           				 <div class="login_portal_input2" style="margin-top: 20px;">
                           				 	 <input type="text" name="Name"><br><br>
                           				 	 <input type="text" name="Password"><br><br>
                           				 	 <input type="text" name="Email"><br><br>
                           				 	 <input type="text" name="Phone"><br><br>
                           				 	 <input type="text" name="Place"><br><br>
                           				 	 <input type="submit" name="save" value="save">

                           				 </div>

                           			</form>
                            </div>
                      </div>       
                      <div class="clear"></div> 
               </div>             
              
                        
   
                <div class="footer">
                               <div class="footer1"> 
                                   <img src="images/footer_left.png" width="13" height="48">
                               </div>
                               
                               <div class="footer2"> 
                                 <a href="index.php"> Home | </a>  
                                 <a href="aboutus.php"> About Us |</a>
                                 <a href="gallery.php"> Gallery |</a>
                                 <a href="courses.php"> Courses |</a> 
                                 <a href="enquiry.php"> Enquiry | </a> 
                                 <a href="contactus.php"> Contact Us </a>   
                               </div>
                               <div class="footer3">
                                  <img src="images/footer_right.png" width="13" height="48">
                               </div>
                               <div class="clear"></div>                            
                </div>    

      </div>


</body>

</html>
