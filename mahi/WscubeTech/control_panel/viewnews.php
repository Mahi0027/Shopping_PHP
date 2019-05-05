<?php
 
    require'connection.php';
    $conn=startconnection();
    session_start(); 
    error_reporting(E_PARSE);
    $where="";     
   // echo $_SESSION["ID"];
    if ($_SESSION["ID"]=="") 
    {
     header("location: index.php");
    }       
   
    if(isset($_GET['did']))
    {
      $ok=$_GET['did'];
      echo "$ok";
      $del="DELETE FROM add_news where id='".$ok."'";
      $exe= mysqli_query($conn,$del);                           
      if($exe)
       {
          echo "delete ho gaya";
       }
      else
      {
         echo "nahi hua";
      }
    }
    
    //search query
    if($_POST['Submit']=="Submit")
    {         
      if ($_POST['search']!="")
       {
          $where="ntitle like '%".$_POST['search']."%'";
          //$where="where ndescription like '%".$_POST['search']."%'";
          $sel="SELECT * FROM add_news where $where " ;
          $exe= mysqli_query($conn,$sel);          
          echo "$sel";
          if($sel)
          {
            echo "search done ";
          }
          else
          {
            echo "search not done";
          }
       }    
    }
    //multiple delete query    
    $totdel=count($_POST['c1']);
    for($i=0;$i<$totdel;$i++)
    {
      echo $del="DELETE FROM add_news where id='".$_POST['c1'][$i]."'";
      mysqli_query($conn,$del); 
    }

    $start=0;
    $limit=2;
    $next=$_GET['page']+1;
    $pre=$_GET['page']-1;
    $start=$_GET['page']*limit;                      
     
?>



<!DOCTYPE html>
<html>
<head>
	 <title>ViewNews</title>
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
       <b><i> View News </i></b >
     </div>
     <form action="" method="post">
        <input type="text" name="search">
        <input type="submit" name="Submit" value="Submit">
     </form>                        
     <form method="post">
         <table border="2" style='border-collapse:collapse; width:80%;' align="center">
              <tr>
                 <td><input type="submit" value="Delete"></td>
                   <th>S.NO</th>
                   <th>Title</th>
                   <th>Description</th> 
                   <th>Delete</th>
                   <th>Edit</th>
              </tr>
              <?php
                    $sel="SELECT*from add_news    limit $start ,$limit";
                    $exe=mysqli_query($conn,$sel);
                    while($fetch=mysqli_fetch_array($exe))
                    { 
              ?>
                      <tr>
                          <td><input type="checkbox" name="c1[]" value="<?php echo $fetch['id']?>"></td>
                          <td><?php echo $fetch['id']?></td>
                          <td><?php echo $fetch['ntitle']?></td>
                          <td><?php echo $fetch['ndescription']?></td>
                          <td><a href="viewnews.php?did=<?php echo $fetch['id'];?>">delete</a></td>
                          <td> <a href="addnews.php?nid=<?php echo $fetch['id']?>">edit</a> 
                           </td>
                      </tr>
    
                   <?php }?>
            </table><br>
            <table align="center" border="1.5px">
                  <tr>
                      <td><a href="viewnews.php?page=0">Home</a></td>
                      <td>Previous</td>
                      <td>1 2 3</td>
                      <td><a href="viewnews.php?page=<?php echo $next; ?>"> Next</a></td>
                      <td>Last</td>
                  </tr>
              
            </table> 
                 </form>                  
                 <div class="login_portal"> </div> 
                 <div class="footer"><b>www.wscubetech.com</b></div>    	
  </div>
</body>
</html>



