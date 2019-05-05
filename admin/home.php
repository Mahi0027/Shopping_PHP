<?php
	require "connection.php";
	$conn=startconnection();
	error_reporting(E_PARSE);
	
	//session create
	session_start();
	if($_SESSION['adminid']==""){
		header('location: index.php');
	}

?>

<!DOCSTYLE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/1_pk4gPFD0OLeKbwKlN1v9YA.png">
	<title>Admin panel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="style.css" rel="stylesheet">
	<script src="task.js" type="text/javascript"></script>
	 <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
</head>
<body>
	<div class="head_row" >
		<!--<div class="logo" style="margin: 1% 0% 4% 2%;"><img src="images/logo.jpg" width="100%"></div> -->
		<a href="home.php"><div class="logo"><img src="images/1_pk4gPFD0OLeKbwKlN1v9YA.png" width="100%"></div></a>
		<div class="headline">Control Panel</div>
		<div class="navig">
			<?php
				$pathx="../products_images/registration/".$_SESSION["image"];
			?>
			<ul>
				<li><img src="<?php echo $pathx ?>" alt="no img" width="40px" height="40px"></li>
				<li><?php echo $_SESSION['adminid'] ?></li>
				<li><a href="logout.php" style="">Log Out</a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<div>
		<div class="sidebar">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li>Add Images
					<ul>
						<li>Men
							<ul>
								<li><a href="add_men_shirt.php">Shirt</a></li>
								<li><a href="add_men_jeans.php">Jeans</a></li>
							</ul>
						</li>
						<li>Women
							<ul>
								<li><a href="add_women_shirt.php">Shirt</a></li>
								<li><a href="add_women_jeans.php">Jeans</a></li>
							</ul>
						</li>
						<li>kids
							<ul>
								<li><a href="add_kids_shirt.php">Shirt</a></li>
								<li><a href="add_kids_jeans.php">Jeans</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>Show Image
					<ul>
						<li>Men
							<ul>
								<li><a href="show_men_shirt.php">Shirt</a></li>
								<li><a href="show_men_jeans.php">Jeans</a></li>
							</ul>
						</li>
						<li>Women
							<ul>
								<li><a href="show_women_shirt.php">Shirt</a></li>
								<li><a href="show_women_jeans.php">Jeans</a></li>
							</ul>
						</li>
						<li>kids
							<ul>
								<li><a href="show_kids_shirt.php">Shirt</a></li>
								<li><a href="show_kids_jeans.php">Jeans</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="add_dod_image.php">Add DOD Image</a></li>
				<li><a href="show_dod_image.php">Show DOD Image</a></li>
				<li><a href="change_password.php">Change Password</a></li>
			</ul>
		</div>
		<div class="midsection">
			<div class="homedecore">Welcome<br>
				<?php
					echo $_SESSION['username'];
				?>	
			</div>
		</div>
	</div>
</body>
</html>