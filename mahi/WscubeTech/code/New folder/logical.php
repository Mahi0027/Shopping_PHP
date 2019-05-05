<?php
error_reporting(0);
	$conn=mysqli_connect('localhost','root','',"iip");
	 
if ($_REQUEST['page']=="country") {
	  if($_REQUEST['action']=="insert"){
		

$ins="insert into country set country_name = '".$_POST['title']."' ";

mysqli_query($conn,$ins);
 }
  if($_REQUEST['action']=="delete"){
  	 "DELETE from counatry where counatry_id='".$_GET['delid']."'";
  	mysqli_query($conn,"DELETE from country where country_id='".$_GET['delid']."'")	;		
  }
 if($_REQUEST['action']=="serach"){

  }
 if($_REQUEST['action']=="muldel"){

  }
include 'cselect.php';
}


if ($_REQUEST['page']=="state") {
	# code...
}

?>