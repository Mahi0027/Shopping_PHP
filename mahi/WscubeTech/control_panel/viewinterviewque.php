
<?php
    require'connection.php';
    $conn=startconnection();
    error_reporting(E_PARSE);
    $where="";
    
    session_start(); 
    echo $_SESSION["ID"];
    if ($_SESSION["ID"]=="") 
    {
     header("location: index.php");
    }

?>


<!DOCTYPE html>
<html>
<head>
	<title>View Interview Question</title>
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
             <b><i> View Interview Question </i></b>
          </div>

           <form method="post">
          <table border="2" style='border-collapse:collapse; width:100%;'>
              <tr>
                 <td><input type="submit" value="Delete"></td>
                   <th>S.NO</th>
                   <th>Title</th>
                   <th>Description</th> 
                   <th>Delete</th>
                   <th>Edit</th>
              </tr>
              <?php 
                    $sel="SELECT*from interview_question $where";
                    $exe=mysqli_query($conn,$sel);
                   
                    while($fetch=mysqli_fetch_array($exe))
                     {
                ?>      <tr>
                          <td><input type="checkbox" name="c1[]" value="<?php echo $fetch['id']?>"></td>
                          <td><?php echo $fetch['id']?></td>
                          <td><?php echo $fetch['question']?></td>
                          <td><?php echo $fetch['answer']?></td>
                          <td><a href="viewinterviewque.php?did=<?php echo $fetch['id'];?>">delete</a></td>
                          <td> <a href="addinterviewque.php?nid=<?php echo $fetch['id']?>">edit</a> 
                           </td>
                      </tr>
    
                   <?php }?>
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