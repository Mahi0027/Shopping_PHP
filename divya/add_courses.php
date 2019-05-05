<?php
$conn=mysqli_connect('localhost','root','','iip');
$ins= "insert into addcourse set course_name='".$_POST['c_name']."', fees='".$_POST['c_fees']."', duration='".$_POST['c_duration']."', course_description='".$_POST['desc']."', course_status='".$_POST['st']."' ";

mysqli_query($conn,$ins);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Courses</title>
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
		<div class="head">Add Courses</div>
		<form action="" method="post">
			<div class="new_head">Course Name</div> 
			<div class="new_text"><input type="text" name="c_name" class="input"><br><br></div>
			<div class="new_head">Fees</div> 
			<div class="new_text"><input type="text" name="c_fees" class="input"><br><br></div>
			<div class="new_head">Duration</div> 
			<div class="new_text"><input type="text" name="c_duration" class="input"><br><br></div>
			<div class="new_head">Description</div>
			<div class="new_text"><textarea class="inputtxtarea" name="desc"></textarea>  <br></div>
			<div class="active"><input type="radio" name="st">Active
			<input type="radio" name="">Deactive<br><br></div>
			<input type="submit" name="" value="Update">
		</form>
	</div>
</div>
<div class=outer>
	www.wscubetech.com
</div>
</body>
</html>