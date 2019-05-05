<?php
error_reporting(0);
mysql_connect('localhost', 'root','');
mysql_select_db('web1_db');

$sel1="select * from state where scountry='".$_REQUEST['countryname']."'";
$exe1=mysql_query($sel1);
while($fetch=mysql_fetch_array($exe1)) {
?>
<option><?php echo $fetch['sname']; ?></option>
<?php } ?>