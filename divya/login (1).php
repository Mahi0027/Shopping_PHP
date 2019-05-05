<?php
session_start();
error_reporting(0);
$conn=mysqli_connect('localhost','root','','iip');
if($_POST['save']=="submit"){
	$sel="SELECT * from admin where username='".$_POST['uname']."' and password='".$_POST[pwd]."' ";
	$exe=mysqli_query($conn,$sel);
	echo $tot=mysqli_num_rows($exe);
	if($tot==1){
if($_POST['rem']==1)
{
	setcookie("USERNAME",$_POST['uname'],time()+60);
	setcookie("USEPASS",$_POST['pwd'],time()+60);
}

		$fetch=mysqli_fetch_array($conn,$exe);
		$_SESSION["adminid"]=$fetch['admin_id'];
echo "<script> window.location='home.php'</script>";

	}
	else{
		echo $msg ="Invalid username and password";
	}
}
?>
<html>
<head>
	<title>View News</title>
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
<div class="clear"></div>
<div class="inner">
	<div class="login">
		<div class="head">LOGIN</div>
		<form method="post">
  user_name   <input type="text" name="uname" value="<?php echo $_COOKIE["USERNAME"]; ?>"><br><br>
  password  <input type="password" name="pwd" value="<?php echo $_COOKIE["USEPASS"]; ?>"><br><br><br>
  <input type="checkbox" name="rem" value="1"> remember me
  <input type="submit" name="save" value="submit">
		</form>
</div>
</body>
</html>