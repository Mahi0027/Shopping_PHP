<?php 
error_reporting(0);
$conn=mysqli_connect('localhost','root','','iip');
if ($_GET['nid']=="") {

if ($_POST['company']!="" && $_POST['add']!="" && $_POST['phoneno']!="" && $_POST['mobileno']!="" && $_POST['emailid']!="") {
	

//insert query

$ins="insert into addcontactus set company_name='".$_POST['company']."',address='".$_POST['add']."',phoneno='".$_POST['phoneno']."', mobileno='".$_POST['mobileno']."', email_id='".$_POST['emailid']."',status='".$_POST['status']."'";
mysqli_query($conn,$ins);
}
}
//Update Query
else{
	$ins="select * from addcontactus where company_id='".$_GET['nid']."'";
	$exe=mysqli_query($conn,$ins);
	$fetch=mysqli_fetch_array($exe);
	//print_r($fetch);
	if ($_POST['company']!="" && $_POST['add']!="" && $_POST['phoneno']!="" && $_POST['mobileno']!="" && $_POST['emailid']!="")   {
	echo $upd="update addcontactus set company_name='".$_POST['company']."',address='".$_POST['add']."',phoneno='".$_POST['phoneno']."', mobileno='".$_POST['mobileno']."', email_id='".$_POST['emailid']."' ,status='".$_POST['status']."' where company_id='".$_GET['nid']."'";
mysqli_query($conn,$upd);
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add ContactUs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class=outer>
	WsCubeTech Control Panel
</div>
<div class="clear"></div>
<marquee>WsCube Tech</marquee>
<div class="menu">
	<ul>
		<li><a href="home.php">Home</a></li>
		<li><a href="add_news.php">Add News</a></li>
		<li><a href="view_news.php">View News</a></li>
		<li><a href="add_gallery.php">Add Gallery</a></li>
		<li><a href="view_gallery.php">View Gallery</a></li>
		<li><a href="add_courses.php">Add Courses</a></li>
		<li><a href="view_courses.php">View Courses</a></li>
		<li><a href="add_whyiip.php">Add Why iip</a></li>
		<li><a href="view_whyiip.php">View Why iip</a></li>
		<li><a href="aboutus.php">About Us </a></li>
		<li><a href="add_contactus.php">Add Contact Us</a></li>
		<li><a href="view_contactus.php">View Contact Us</a></li>
		<li><a href="add_iq.php">Add Interview Question</a></li>
		<li><a href="view_iq.php">View Interview Question</a></li>
		<li><a href="enquiry.php">Enquiry</a></li>
		<li><a href="user.php">User</a></li>
		<li><a href="index.php">Logout</a></li>
		<li><a href="change_psd.php">Change Password</a></li>
	</ul>

</div>
<div class="clear"></div>
<div class="inner">
	<div class="login">
		<div class="head">Add Contact Us</div>
		<form action="" method ="post">
			<div class="new_head">Company Name</div> 
			<div class="new_text"><input type="text" value="<?php echo $fetch['company_name'] ?>" name="company" class="input"><br><br></div>
			<div class="new_head">Address</div>
			<div class="new_text"><textarea class="inputtxtarea" value="" name="add"><?php echo $fetch['address'] ?></textarea>  <br></div>
			<div class="new_head">phone no.</div> 
			<div class="new_text"><input type="text" name="phoneno" value="<?php echo $fetch['phoneno'] ?>" class="input"><br><br></div>
			<div class="new_head">Mobile no.</div> 
			<div class="new_text"><input type="text" value="<?php echo $fetch['mobileno'] ?>" name="mobileno" class="input"><br><br></div>
			<div class="new_head">Email-id</div> 
			<div class="new_text"><input type="text" value="<?php echo $fetch['email_id'] ?>" name="emailid" class="input"><br><br></div>
			
			
			<input type="submit" name="" value="Update"><br><br>
			ENABLE<input type="radio" name="status" value="1">
			DISABLE<input type="radio" name="status" value="0">

		</form>
	</div>
</div>
<div class=outer>
	www.wscubetech.com
</div>
</body>
</html>