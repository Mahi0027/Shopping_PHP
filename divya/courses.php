<?php
$conn=mysqli_connect('localhost','root','','iip');

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
				<div class="about">Courses</div>
				<div class="contain1">	
						1.) Website Development (HTML, CSS, JAVASCRIPT, PHP, MYSQL)<br />
				    	2.) Android Development<br />
			 			3.) Core Java and Advance Java<br />
						4.) .NET<br />
 						5.) I-PHONE<br />
						6.) SEO<br />
						7.) C / C++ <br />
						8.) Advance PHP (HTML5, CSS3, AJAX, Jquery, Joomla, Wordpress
						<?php
           $sel="select * from addcourse";
           $exe=mysqli_query($conn,$sel);
          while($fetch=mysqli_fetch_array($exe))
           {
	?>
	<div><?php echo $fetch['co_id'];?><br/>
         	<?php echo $fetch['course_name'];?><br/>
         	<?php echo $fetch['fees'];?><br/>
         		<?php echo $fetch['duration'];?><br/>
         			<?php echo $fetch['course_description'];?><br/>
         		<?php echo $fetch['course_status'];?><br/>
         					<? php } ?>
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