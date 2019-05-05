<?php
    require 'connection.php';
    $conn=startconnection();
    error_reporting(0);




?>

<!DOCTYPE html>
<html>
<head>
	<title>Countary</title>
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
              <b><i> Countary </i></b>
        </div>
                    
        <div class="login_portal">
                <div class="input">                                      
                     <div class="input1">
                           
                            Countary Name:<br><br>
                            
                                 
                     </div>                                                                        
                     <form action="" method="post" id="formdata">  
                            <div class="input2">
                                 
                                  <input type="text" name="Countary_Name" id="cname"  > <br><br>

                                   <input type="hidden" name="id" id="cid">

                                  <input type="submit" name="usave" value="submit">
                            </div>
                      </form>  
                </div> 
                 <div>
                
                   <form action= "" method="post" id="res">
                   <?php
                          include 'cselect.php';
                      ?>
                                                   
                    </form> 
                </div>         
                  
          </div>
     	  <div class="footer">
		             <b>www.wscubetech.com</b>
     	  </div>     	
  </div>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
  
  $("#formdata").on("submit", function() {

         
           $.ajax({
               url: "logical.php?action=insert&page=countary", 
               type: "POST",
               data: new FormData(this),
               contentType: false,
               cache: false,
               processData:false,
               success: function(a) {
                   $("#res").html(a)
                   if ($("#cid").val()=="") {
                     $("#cname").val('');
                   }
               }
           });
           return false;
       });
    
  function deletedata(a){
   $.ajax({
            url: "logical.php?action=delete&page=countary&delid="+a, 
            type: "GET",     
            success: function(data)
          {
            $("#res").html(data )
          }
         });
}


function showdata(id,cname){
    $("#cname").val(cname);
    $("#cid").val(id);
   
}
</script>
</body>
</html>