<?php
$conn=mysqli_connect('localhost','root','',"iip");
?>
<html>
<head>
	<title>contactus</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="body">
	<div class="main">
		<div class="row1">
			<div class="logo"><img src="images/logo.png"></div>
			<div class="tagline">LOOKING FOR THE BEST PLACE FOR PROGRAMMING</div>
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
			<div class="aboutus"><a href="courses.php">Courses</a></div>
			<div class="aboutus"><a href="gallery.php">Gallery</a></div>
			<div class="aboutus"><a href="enquiry.php">Enquiry</a></div>
			<div class="aboutus active"><a href="contactus.php">Contact Us</a></div>
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
				<div class="about">Contact Us</div><br />
	
		<?php
           $sel="select * from addcontactus";
           $exe=mysqli_query($conn,$sel);
          while($fetch=mysqli_fetch_array($exe))
           {
         ?>
         <div><?php echo $fetch['company_id'];?><br/>
         	<?php echo $fetch['company_name'];?><br/>
         	<?php echo $fetch['address'];?><br/>
         		<?php echo $fetch['phoneno'];?><br/>
         			<?php echo $fetch['mobileno'];?><br/>
         		<?php echo $fetch['email_id'];?><br/>
         					<?php } ?>
	</div><br/>
			</div>
			<div class="clear"></div>
		</div>
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