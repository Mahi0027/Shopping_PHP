
<?php
      $s1=$_POST['sub1'];
      $s2 =$_POST['sub2'];
      $s3=$_POST['sub3'];
      $s4 =$_POST['sub4'];
      $s5 =$_POST['sub5'];


      $total=($s1+$s2+$s3+$s4+$s5);
      $per =($total/5); 
      $v;

      if($per<=35)
      {
           $v="F";
      }
      if ($per>35 && $per<=50)
      {
           $v="C";
      }
      if ($per>50 && $per<=70)
       {
            $v="B";
      }
      if ($per>70 ) 
      {
            $v="A";
      }

?>

<html>
<head>
		<title>get or post methode</title>
</head>

<body>
      <form actio="" method="post">
      		Sub1-	<input type="text" name="sub1" value="<?php echo $s1; ?>"><br><br>
      		Sub2-	<input type="text" name="sub2" value="<?php echo $s2; ?>"><br><br>
      		Sub3-	<input type="text" name="sub3" value="<?php echo $s3; ?>"><br><br>	
      		Sub4-	<input type="text" name="sub4" value="<?php echo $s4; ?>"><br><br>
      		Sub5-	<input type="text" name="sub5" value="<?php echo $s5; ?>"><br><br>

      		<input type="submit" name="usave" value="SAVE"><br><br>
      		
                  total- <input type="text" name="total" value="<?php echo $total; ?>"><br><br>
      		  per- <input type="text" name="per" value="<?php echo $per; ?>"><br><br>
      	   division- <input type="text" name="division" value="<?php echo $v; ?>"><br><br>
      </form>

</body>
</html>