  <table style='border-collapse:collapse'; width="80%"; border="1" align="center">
                                <tr>  
                                    <td> S.NO</td>
                                    <td> Countary Id</td>
                                    <td>Company Name</td>
                                    <td>Edit</td>
                                    <td>Delete</td>

                                </tr>
                               <?php
                                
                                    $sel ="SELECT* FROM countary";
                                    $exe = mysqli_query($conn,$sel);

                                    while($fetch=mysqli_fetch_array($exe))
                                    {

                              ?>    
                                <tr>
                                    <td><?php echo $fetch['s_no']?></td>
                                    <td><?php echo $fetch['countary_id']?></td>
                                    <td><?php echo $fetch['countary_name']?></td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>

                              <?php } ?>
                          </table><br>
                                