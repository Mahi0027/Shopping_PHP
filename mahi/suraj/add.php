

<?php

      $a=$_POST['sub1'];
      $b =$_POST['sub3'];
      $action=$_POST['action'];
      $c;
      if ($action=="+") {
      	$c=$a+$b;
      }
       if ($action=="-") {
      	 $c=$a-$b;
      }
       if ($action=="*") {
      	 $c=$a*$b;
      }
       if ($action=="/") {
      	 $c=$a/$b;
      }
      


?>


<html>
<head>
			<title> Add</title>
</head>	
    <body>
    		<form actio="" method="post">
    			value1- <input type="text" name="sub1" value="<?php echo $a; ?>">
    			action- <select name="action">
    						<option value="+">+</option>
    						<option value="-">-</option>
    						<option value="*">*</option>
    						<option value="/">/</option>
    		           </select>
      		    value2-	<input type="text" name="sub3" value="<?php echo $b; ?>"><br><br>

      		    <input type="submit" name="usave" value="Add"><br><br>
      		    ans- <input type="text" name="sub4" value="<?php echo $c; ?>">


    		</form>

    </body>



</html>
