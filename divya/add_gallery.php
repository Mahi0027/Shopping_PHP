<?php

$conn=mysqli_connect('localhost','root','','iip');
if($_POST['g_title']!="" )
{
	    $name=$_FILES['g_img']['name'];
		$tmp_name=$_FILES['g_img']['tmp_name'];
		$path="../d_image/".$name;
    move_uploaded_file($tmp_name, $path);
echo $ins= "insert into addgallery set gallery_title='".$_POST['g_title']."', gallery_images='".$name."' ";

mysqli_query($conn,$ins);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Gallery</title>
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
		<div class="head">Add Gallery</div>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="new_head">Gallery Title</div> 
			<div class="new_text"><input type="text" name="g_title" class="input"><br><br></div>

			<div class="new_head">Gallery Images</div>
			<div class="new_text"><input type="file" name="g_img" class="input_file"><b>(e.g.:- .jpg, .png, .jpeg, .tif, .gif)</b>  <br><br><br></div>
			<input type="submit" name="" value="Save">
		</form>
	</div>
</div>
<div class=outer>
	www.wscubetech.com
</div>
</body>
</html>