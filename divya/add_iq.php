<?php
error_reporting(0);
$conn=mysqli_connect('localhost','root','',"iip");


if ($_GET['nid']=="") {

	if ($_POST['ques']!="" && $_POST['ans']!="") {
		


	$ins="insert into addiq set question = '".$_POST['ques']."', answer='".$_POST['ans']."' ";

	mysqli_query($conn,$ins);
	}

		# code...
}
//Update Query
else{
	$ins="select * from addiq where iq_id='".$_GET['nid']."'";
	$exe=mysqli_query($conn,$ins);
	$fetch=mysqli_fetch_array($exe);

	
	if ($_POST['ques']!="" && $_POST['ans']!="") {
 $upd="update addiq set question = '".$_POST['ques']."', answer='".$_POST['ans']."' where iq_id='".$_GET['nid']."' ";
mysqli_query($conn,$upd);
}
}

?>
<html>
<head>
	<title>Add Interview Questions</title>
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
		<div class="head">Add Interview Questions</div>
		<form method ="post">
			<div class="new_head">Question</div>
			<div class="new_text"><textarea class="inputtxtarea" name="ques"><?php echo $fetch['question']; ?></textarea>  </div><br>
			<div class="new_head">Answer</div>
			<div class="new_text"><textarea class="inputtxtarea"  name="ans"><?php echo $fetch['answer']; ?></textarea>  </div><br>
			
			<input type="submit" name="" value="Save">
		</form>
	</div>
</div>
<div class=outer>
	www.wscubetech.com
</div>
</body>
</html>