<?php
$conn=mysqli_connect('localhost','root','','iip');
?>

<html>
<head>
	<title>View Gallery</title>
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
		<table border="1" align="center">
		<tr>
			<td>srno.</td>
			<td>title</td>
			
			<td>gallery image</td>
			<td>delete</td>
			<td>edit</td>
		</tr>
		<?php
           $sel="select*from addgallery ";
           $exe=mysqli_query($conn,$sel);
          while($fetch=mysqli_fetch_array($exe))





           {

		?>
			<tr>
			<td><?php echo $fetch['g_id']?></td>
			<td><?php echo $fetch['gallery_title']?></td>
			
			<td><img src="../d_image/<?php echo $fetch['gallery_images']; ?>"  width="50"/></td>
			<td> delete</td>
			<td>edit</td>
				</tr>
						<?php } ?>
	</div>
</div>


</div>
</body>
</html>