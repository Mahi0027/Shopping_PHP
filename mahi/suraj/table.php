

<?php

      $a=$_POST['sub1'];
      $i=1;
      while ( $i<= 10)
      {  
      	 $c=$a*$i;
      	 echo $c."<br>";
      	 $i++;	 
      }
      
      

?>


<html>
<head>
			<title> Table</title>
</head>	
    <body>
    		<form action="" method="post">
    			       value- <input type="text" name="sub1" value="<?php echo $a; ?>">
    			
      		    

      		          <input type="submit" name="usave" value="SAVE">
               

    		</form>

    </body>



</html>