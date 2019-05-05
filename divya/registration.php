<?php

$conn=mysqli_connect('localhost','root','',"iip");
if($_POST['uname']!="")
{
	$sel="select * from register where email='".$_POST[email]."'";
	$exe=mysqli_query($conn,$sel);
	$tot=mysqli_num_rows($exe);
	if(tot==0)
	{
$ins="insert into register set username = '".$_POST['uname']."', password='".$_POST['pwd']."', email = '".$_POST['email']."', address = '".$_POST['add']."', phoneno = '".$_POST['phone']."'";

mysqli_query($conn,$ins);
}
else{
	echo $msg="Please re enter email";
}
}
?>
<html>
<head>
	<title>Courses</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class=body>
	<div class="main">
		<div class="row1">
			<div class="logo"><img src="images/logo.png"></div>
			<div class="tagline">Looking for the Best Place for Programming</div>
			<div class="cinfo">
				<div class="site">www.iipacademy.com</div>
				<div class="email">Info@iipacademy.com</div>
				<div class="phoneno">+91-9269698122</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="row2">
			<div class="aboutus"><a href="index.php">Home</a></div>
			<div class="aboutus"><a href="about.php">About Us</a></div>
			<div class="aboutus active"><a href="courses.php">Courses</a></div>
			<div class="aboutus"><a href="gallery.php">Gallery</a></div>
			<div class="aboutus"><a href="enquiry.php">Enquiry</a></div>
			<div class="aboutus"><a href="contactus.php">Contact Us</a></div>
			<div class="clear"></div>
		</div>
		<div class="row3">
			<div class="r3c1">
				<div class="home1"><a href="index.php">Home</a></div>
				<div class="home1"><a href="about.php">About Us</a></div>
				<div class="home1"><a href="courses.php">Courses</a></div>
				<div class="home1"><a href="gallery.php">Gallery</a></div>
				<div class="home1"><a href="enquiry.php">Enquiry</a></div>
				<div class="home1"><a href="contactus.php">Contact Us</a></div>
			</div>
			<div class="r3_about">
				<div class="about" align ="center">REGISTRATION</div>
				<div class="contain1">	
					<form action="" method="post">
					UserName  <input type="textfield" name="uname"><br><br>
					Password <input type="password" name="pwd"><br><br>
					Email  <input type="textfield" name="email"><br><br>
					Address  <input type="textfield" name="add"><br><br>
					Phoneno <input type="textfield" name="phone"><br><br>
					<div align="center"><input type="submit" name="button" value="SAVE" ></div>
				</form>
			</div>
		</div>
			<div class="clear"></div>
		<div class="row5">
			<div class="footerleft"></div>
			<div class="footermid"><a href="index.php">Home</a> | <a href="about.php">About Us</a> | <a href="courses.php">Courses</a> | <a href="gallery.php">Gallery</a> | <a href="enquiry.php">Enquiry</a> | <a href="contactus.php">Contact Us</a></div>
			<div class="footerright"></div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	
	</body>
		</html>