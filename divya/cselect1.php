<table border="1" align="center">
		<tr>
<td><input type="submit" value="Delete"></td>
			<td>srno.</td>
			<td>statename</td>
      <td>countryname</td>

			<td>edit</td>
			<td>delete</td>
		</tr>
	
	

		


		<?php
                                
                                    $sel ="SELECT* FROM state $ser";
                                    $exe = mysqli_query($conn,$sel);

                                    while($fetch=mysqli_fetch_array($exe))
                                    {

                              ?>    
                                <tr>

                                  <td><input type="checkbox" name="c1[]" value="<?php echo $fetch['state_id']?>"></td>
                                    
                                    <td><?php echo $fetch['state_id']?></td>
                                    <td><?php echo $fetch['s_name']?></td>
                                    <td><?php echo $fetch['c_name']?></td>

                                    <td onclick="showdata(<?php echo $fetch['state_id']?>,'<?php echo $fetch['s_name']?>')">Edit</td>

                                    <td onclick="deletedata(<?php echo $fetch['state_id']?>)">Delete</td>

                                </tr>

                              <?php } ?>
                          </table><br>
                          <div class="new_text"><input type="text" value="" name="title" class="input" id="sname"></div>