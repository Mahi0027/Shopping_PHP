<?php
if($_REQUEST['nnumber']=="")
{
  $paggindata="limit 0,2";
}


?>

<table border="1" align="center">
		<tr>
      <td><input type="submit" value="Delete" /></td>
			<td>srno.</td>
			<td>Country_name</td>
			<td>delete</td>
			<td>edit</td>
		</tr>
	
	

		


		<?php
                                
                                    $sel ="SELECT* FROM country $ser $paggindata";
                                    $exe = mysqli_query($conn,$sel);
                                    while($fetch=mysqli_fetch_array($exe))
                                    {

                              ?>    
                                <tr>
                                    <td><input type="checkbox" name="c1[]" value="<?php echo $fetch['country_id']; ?>"></td>
                                    <td><?php echo $fetch['country_id']?></td>
                                    <td><?php echo $fetch['country_name']?></td>
                                    <td onclick="showdata(<?php echo $fetch['country_id']?>,'<?php echo $fetch['country_name']?>')">Edit</td>
                                    <td onclick="deletedata(<?php echo $fetch['country_id']; ?>)">Delete</td>
                                </tr>

                              <?php } ?>
                          </table><br>