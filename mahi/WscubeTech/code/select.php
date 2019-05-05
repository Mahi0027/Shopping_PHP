<?php
	if ($_REQUEST['nnumber']=="") {
		$paggindata="limit 0,2";
	}

?>

<table align="center" border="1" width="90%">
			<tr>
				<th><input type="submit" name="muldel" value="Delete All" id="muldel" /></th>
				<th>S.No</th>
				<th>Country No</th>
				<th>Country Name</th>
				<th>Edit</th>
				<th>Delete</th>

			</tr>

			<?php 
				$sel="select * from country $search $paggindata" ;
				$exe=mysql_query($sel);
				$i=0;
				while ($fetch=mysql_fetch_array($exe)) {
					$i++;
			?>
			<tr align="center">
				<td><input type="checkbox" name="charray[]" value="<?php echo $fetch['cid']; ?>" /></td>
				<td><?php echo	$i ?></td>
				<td><?php echo	$fetch['cno']; ?></td>
				<td><?php echo	$fetch['cname']; ?></td>
				<td onclick="editdata(<?php echo $fetch['cid']; ?>, <?php echo $fetch['cno']; ?>, '<?php echo $fetch['cname']; ?>')"><input type="button" name="edit" value="Edit" /></td>
				<td onclick="deldata(<?php echo	$fetch['cid']; ?>)"><input type="button" name="delete" value="Delete"></td>

			</tr>
			<?php } ?>
		</table>