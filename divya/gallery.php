<?php
$conn=mysqli_connect('localhost','root','','iip');
?>
<html>
<head>
	<title>gallery</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="body">
	<div class="main">
		<div class="row1">
			<div class="logo"><img src="images/logo.png"></div>
			<div class="tagline">Looking for the Best Place for Programming</div>
			<div class="cinfo">
				<div class="site">www.iipacademy.com</div>
				<div class="email">Info@iipacademy.com</div>
				<div class="phoneno">+91-9269698122</div></div>
			<div class="clear"></div>
		</div>	
		<div class="row2">
			<div class="aboutus"><a href="index.php">Home</a></div>
			<div class="aboutus"><a href="about.php">About Us</a></div>
			<div class="aboutus"><a href="courses.php">Courses</a></div>
			<div class="aboutus active"><a href="gallery.php">Gallery</a></div>
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
				<div class="about">Gallery</div>
				<div class="imageset1"><img src="gallery_img/1.jpg" width="200px" height="150px"></div>
				<div class="imageset"><img src="gallery_img/2.jpg" width="200px" height="150px"></div>	
				<div class="imageset"><img src="gallery_img/3.jpg" width="200px" height="150px"></div>
				<div class="imageset1"><img src="gallery_img/4.jpg" width="200px" height="150px"></div>
				<div class="imageset"><img src="gallery_img/5.jpg" width="200px" height="150px"></div>
				<div class="imageset"><img src="gallery_img/6.jpg" width="200px" height="150px"></div>
				<div class="imageset1"><img src="gallery_img/7.jpg" width="200px" height="150px"></div>
				<div class="imageset"><img src="gallery_img/8.jpg" width="200px" height="150px"></div>
				<div class="imageset"><img src="gallery_img/9.jpg" width="200px" height="150px"></div>
				<?php
           $sel="select * from addgallery";
           $exe=mysqli_query($conn,$sel);
          while($fetch=mysqli_fetch_array($exe))
           {
         ?>
         <div class="imageset"><?php echo $fetch['gallery_title'];?><div>
         	         	<img src="d_image/<?php echo $fetch['gallery_images'];?> " width="200px" height="150px"/>
         					<?php } ?>
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
</html>>