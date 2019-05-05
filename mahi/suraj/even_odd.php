
<?php

      $a=$_POST['sub1'];
      $ans;
     if ($a!="") 
     {
       
     
      if($a%2==0)
      {
        $ans="Even";

      }
      else
      {
        $ans="Odd";

      }  
      }

?>


<html>
<head>
			<title> Add</title>
</head>	
    <body>
    		<form actio="" method="post">
    			       value- <input type="text" name="sub1" value="<?php echo $a; ?>">
    			
      		    

      		          <input type="submit" name="usave" value="SAVE">
                  Ans- <input type="text" name="sub2" value="<?php echo $ans; ?>">

    		</form>

    </body>



</html>