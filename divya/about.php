<?php
$conn=mysqli_connect('localhost','root','','iip');

?>
<html>
<head>
	<title>about</title>
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
			<div class="aboutus active"><a href="about.php">About Us</a></div>
			<div class="aboutus"><a href="courses.php">Courses</a></div>
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
				<div class="about">About Us</div>
				<div class="contain"><p>At IIP Academy, students always had the access to Major & Minor Projects in Website Development (PHP / MySQL)</p><p> IIP Academy Provide best training in .NET & PHP. So that students themselves can be able to develop projects and launch them LIVE on IIP Academy Online Servers. Our Students had developed several projects like wscubetech.com. Many students get easy job placements due to their online Projects on the IIP Academy. We are only institute in Jodhpur which provides free Web Hosting to our students on our servers.</p> <p> Engineering & MCA students can develop any small minor projects in .NET or PHP and could extend as their Major Projects in further years. Minor Projects are really not hard to develop, as also the colleges generally are not strict in accepting the minor projects.</p> <p> Minor Projects can be small but it must be remarkable. Because details of Minor Projects are required to put in your Resume. And students with good minor projects can be easily placed in good companies during Campus Placements.</p> <p> IIP Academy Provides 45 Days Industrial Training for Engineering (B.E. / B.TECH.) Students</p></div>
				<div class="about1">Why IIP Academy</div>
				<div class=contain>
						<?php
           $sel="select*from aboutus";
           $exe=mysqli_query($conn,$sel);
          while($fetch=mysqli_fetch_array($exe))
           {

		?>
		<div><?php echo $fetch['a_id'];?>
         	<?php echo $fetch['aboutus_title'];?>
         	<?php echo $fetch['aboutus_description'];?><br/>
         	
         	
         					<?php } ?>
				</div>
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