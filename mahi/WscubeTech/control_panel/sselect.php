 <table style='border-collapse:collapse'; width="80%"; border="1" align="center">
                                <tr>
                                    <th onclick="multidelete(<?php echo $fetch['s_no']?>)"><input type="submit" value="Delete"></th>  
                                    <th> S.NO</th>
                                    <th> State Name</th>
                                    <th>Countary Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                               <?php
                                
                                    $sel="SELECT* FROM state";
                                    $exe=mysqli_query($conn,$sel);

                                    while($fetch=mysqli_fetch_array($exe))
                                    {

                              ?>    
                                <tr>
                                    <td ><input type="checkbox" name="c1[]" value="<?php echo $fetch['id']?>"></td>
                                    <td><?php echo $fetch['s_no']?></td>
                                    <td><?php echo $fetch['state_name']?></td>
                                    <td><?php echo $fetch['countary_name']?></td>
                                    <td onclick="showdata(<?php echo $fetch['s_no']?>,
                                    '<?php echo $fetch['state_name']?>','<?php echo $fetch['countary_name']?>')">Edit
                                    </td>
                                    <td onclick="deletedata(<?php echo $fetch ['s_no']?>)">Delete</td>
                                </tr>

                              <?php } ?>
                          </table><br>