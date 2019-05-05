<?php
   
   include 'connection.php';
   $conn=startconnection();

  $sel="SELECT * FROM state where countary_name='".$_REQUEST['countary_name']."'";
  $exe=mysqli_query($conn,$sel);

  while ($fetch=mysqli_fetch_array($exe))
   {?>
  	 	<option><?php echo $fetch['state_name'] ?></option>
   <?php}?>