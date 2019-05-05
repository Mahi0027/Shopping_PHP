<?php
$conn=mysqli_connect('localhost','root','','iip');
?>
<html>
<head>
	<title>Enquiry</title>
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
		<div class="head">Enquiry</div>
		<table border="1" align="center">
		<tr>
			<td>srno.</td>
			<td>gender</td>
			<td>name</td>
			<td>contactno</td>
			<td>country</td>
			<td>state</td>
			<td>city</td>
			<td>address</td>
			<td>emailid</td>
			<td>enquiry</td>
			<td>delete</td>
			<td>edit</td>
		</tr>
		<?php
           $sel="select * from enquiry";
           $exe=mysqli_query($conn,$sel);
          while($fetch=mysqli_fetch_array($exe))
           {

		?>
		<tr>
			<td><?php echo $fetch['e_id']?></td>
			<td><?php echo $fetch['gender']?></td>
			<td><?php echo $fetch['Name']?></td>
			<td><?php echo $fetch['contact_no']?></td>
			<td><?php echo $fetch['country']?></td>
			<td><?php echo $fetch['state']?></td>
			<td><?php echo $fetch['city']?></td>
			<td><?php echo $fetch['address']?></td>
			<td><?php echo $fetch['email']?></td>
			<td><?php echo $fetch['enquiry']?></td>
			<td>delete</td>
			<td>edit</td>
		</tr>
		<?php } ?>
		</table>	
		
	</div>
</div>
<div class=outer>
	www.wscubetech.com
</div>
</body>
</html>