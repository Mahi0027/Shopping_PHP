<?php 
error_reporting(0);
$conn=mysqli_connect('localhost','root','','iip');
echo $ins="insert into enquiry set gender='".$_POST['gn']."',name='".$_POST['na']."',contact_no='".$_POST['ca']."', country='".$_POST['cn']."', state='".$_POST['st']."', city='".$_POST[ct]."', address='".$_POST[ad]."', email='".$_POST[em]."', enquiryy='".$_POST[eq]."'";
mysqli_query($conn,$ins);

?>
<html>
<head>
	<title>Enquiry</title>
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
			<div class="aboutus"><a href="gallery.php">Gallery</a></div>
			<div class="aboutus active"><a href="enquiry.php">Enquiry</a></div>
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
				<div class="about">Enquiry</div>
				<form action="" method="post">
					<div>
						<div class="infodisplay">Gender :</div>
						<div class="infoenter"><input type="radio" name="gn" value="male"/> Male <input type="radio" name="gn" value="Female"/> Female</div>
						<div class="clear"></div>
					</div>
					
					<div>
						<div class="infodisplay">Name : </div>
						<div class="infoenter"><input type="text" name="na" placeholder="Name" class="input"></div>
						<div class="clear"></div>
					</div>
					
					<div>
						<div class="infodisplay">Contact No :</div>
						<div class="infoenter"><input type="text" name="ca" placeholder="Contact number" class="input"></div>
						<div class="clear"></div>
					</div>
					
					<div>
						<div class="infodisplay">Country :</div>
						<div class="infoenter">
							<select name="cn">
								<option>---Select---</option>
								<option>India</option>
								<option>India</option>
								<option>India</option>
								<option>India</option>
								<option>India</option>
								<option>India</option>
								<option>India</option>
							</select>
						</div>
						<div class="clear"></div>
					</div>
					
					<div>
						<div class="infodisplay">State :</div>
						<div class="infoenter">
							<select name="st">
								<option>---Select---</option>
								<option>Rajasthan</option>
								<option>Punjab</option>
								<option>Kerala</option>
								<option>Maharastra</option>
								<option>New York</option>
								<option>Syndey</option>
							</select>
						</div>
						<div class="clear"></div>
					</div>
					
					<div>
						<div class="infodisplay">City :</div>
						<div class="infoenter">
							<select name="ct">
								<option>---Select---</option>
								<option>Jodhpur</option>
								<option>jaipur</option>
								<option>mumbai</option>
								<option>Ajmer</option>
								<option>Alwar</option>
								<option>Bikaner</option>
							</select>
						</div>
							<div class="clear"></div>
					</div>
				
					<div>
						<div class="infodisplay">Address :</div>
						<div class="infoenter">
							<textarea name="ad"></textarea>
						</div>
						<div class="clear"></div>
					</div>
					
					<div>
						<div class="infodisplay">Email:</div>
						<div class="infoenter"><input type="text" name="em" placeholder="Email" class="input"></div>
						<div class="clear"></div>
					</div>
					
					<div>
						<div class="infodisplay">Enquiry :</div>
						<div class="infoenter">
							<textarea name="eq"></textarea>
						</div>
						<div class="clear"></div>
					</div>
					
					<div>
						<input type="submit" value="Send" class="save">
					</div>
					<div class="clear"></div>

				</form>
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