<?php
$conn=mysqli_connect('localhost','root','','iip');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
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
		<div class="head">User</div>
		<table border="2" align="center">
		<tr><td><input type="submit" value="Delete"></td>
			<td>srno.</td>
			<td>Username</td>
			<td>Password</td>
			<td>emailid</td>
			<td>address</td>
			<td>phone_no</td>
		    <td>delete</td>
			<td>edit</td>
		</tr>
		<?php
           $sel="select*from register";
           $exe=mysqli_query($conn,$sel);
          while($fetch=mysqli_fetch_array($exe))
           {

		?>
			<tr>
				<td><input type="checkbox" name="c1[]" value="<?php echo $fetch['n_id']?>"></td>
			<td><?php echo $fetch['reg_id']?></td>
			<td><?php echo $fetch['username']?></td>
			<td><?php echo $fetch['password']?></td>
			<td><?php echo $fetch['email']?></td>
			<td><?php echo $fetch['address']?></td>
		   <td><?php echo $fetch['phoneno']?></td>
			<td><a href="view_news.php?did=<?php echo $fetch['n_id'];?>">delete</a></td>
			<td><a href="add_news.php?nid=<?php echo $fetch['n_id']?>">edit</a></td>
		</tr>
		
		<?php }?>

		</table>
		
	</div>
</div>
<div class=outer>
	www.wscubetech.com
</div>
</body>
</html>