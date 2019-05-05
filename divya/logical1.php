<?php
error_reporting(0);


$conn=mysqli_connect('localhost','root','',"iip");

$ins="insert into state set s_name = '".$_POST['title']."', c_name='".$_POST['con']."' ";


mysqli_query($conn,$ins);

include 'cselect1.php';

?>