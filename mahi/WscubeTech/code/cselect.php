  <table style='border-collapse:collapse'; width="80%"; border="1" align="center">
                                <tr>  
                                    <td> S.NO</td>
                                    <td>Countary Name</td>
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
                                    <td><?php echo $fetch['countary_name']?></td>
                                    <td onclick="showdata(<?php echo $fetch['s_no']?>,'<?php echo $fetch['countary_name']?>')">Edit</td>
                                    <td onclick="deletedata(<?php echo $fetch ['s_no']?>)">Delete</td>
                                </tr>

                              <?php } ?>
                          </table><br>
                                