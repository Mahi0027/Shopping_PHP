  <?php
        if ($_REQUEST['nnumber']=="")
        { $paggingdata="limit 0,2";}   
   ?>

  <table style='border-collapse:collapse'; width="80%"; border="1" align="center">
                                <tr> 
                                    <td  ><input type="submit" value="Delete">
                                    </td> 
                                    <th> S.NO</th>
                                    <th>Countary Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                               <?php
                                 
                                    $sel ="SELECT* FROM countary $paggingdata";
                                    $exe = mysqli_query($conn,$sel);

                                    while($fetch=mysqli_fetch_array($exe))
                                    {

                              ?>    
                                <tr>
                                    <td><input type="checkbox" name="c1[]" value="<?php echo $fetch['s_no']?>"></td>
                                    <td><?php echo $fetch['s_no']?></td>
                                    <td><?php echo $fetch['countary_name']?></td>
                                    <td onclick="showdata(<?php echo $fetch['s_no']?>,
                                    '<?php echo $fetch['countary_name']?>')">Edit</td>
                                    <td onclick="deletedata(<?php echo $fetch ['s_no']?>)">Delete</td>
                                </tr>

                              <?php } ?>
                          </table><br>
                                