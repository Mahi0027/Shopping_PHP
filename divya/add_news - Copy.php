<?php
error_reporting(0);


$conn=mysqli_connect('localhost','root','',"iip");

if ($_GET['nid']=="") {

if ($_POST['title']!="" && $_POST['description']!="") {
	


$ins="insert into addnews set news_title = '".$_POST['title']."', news_description='".$_POST['description']."' ";

mysqli_query($conn,$ins);
}

	# code...
}
//Update Query
else{
	$ins="select * from addnews where n_id='".$_GET['nid']."'";
	$exe=mysqli_query($conn,$ins);
	$fetch=mysqli_fetch_array($exe);
	if ($_POST['title']!="" && $_POST['description']!="") {
	 $upd="update addnews set news_title = '".$_POST['title']."', news_description='".$_POST['description']."' where n_id='".$_GET['nid']."' ";
mysqli_query($conn,$upd);
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add News</title>
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
		<li><a href="add_iq.php">Add Interview Question

		</a></li>
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
		<div class="head"><marquee>Add News</marquee></div>
		<form action="" method ="post">
			<div class="new_head">News Title</div> 
			<div class="new_text"><input type="text" value="<?php echo $fetch['news_title'] ?>" name="title" class="input"></div><br><br>

			<div class="new_head">News Description</div>
			<div class="new_text"><textarea class="inputtxtarea" name="description"><?php echo $fetch['news_description'] ?></textarea></div><br><br><br>
			<input type="submit" name="" value="Save">
		
	</div>
	</form>
</div>
<div class=outer>
	www.wscubetech.com
</div>
</body>
</html>