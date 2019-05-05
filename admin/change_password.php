<?php
	require "connection.php";
	$conn=startconnection();
	error_reporting(E_PARSE);

	//session create
	session_start();
	if($_SESSION['adminid']==""){
		header('location: index.php');
	}

	if(isset($_POST['submit'])){
		$check="SELECT * FROM registration WHERE password='".$_POST['old_password']."' AND idname='".$_SESSION['adminid']."'";
		$check_result=$conn->query($check);
		$totalrow=$check_result->num_rows;
		$row=$check_result->fetch_assoc();
		if($totalrow==1){
			if($_POST['new_password1']==$_POST['new_password2']){
				$update_password="UPDATE registration SET password='".$_POST['new_password1']."' WHERE id='".$row['id']."'";
				$update_result=$conn->query($update_password);
				if($update_result==true){
					$update_result_success="Password Change Successfull !";
				}
				else{
					$update_result_fail="Password Change Failed !";
				}
			}
			else{
				$not_match="New Password Not Match !";
			}
		}
		else{
			$wrong_old_password="Old Password Is Not Match";
		}
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
			<div class="container">
				<h1>Change Password</h1><br>
				<?php
					if(isset($_POST['submit'])){
						if($totalrow==1){
							if($_POST['new_password1']==$_POST['new_password2']){
								if($update_result==true){
				?>
									<div class="alert alert-success">
										<strong><?php echo $update_result_success ?></strong>
									</div>
				<?php
								}
								else{
				?>
									<div class="alert alert-danger">
										<strong><?php echo $update_result_fail ?></strong>
									</div>						
				<?php
								}
							}
							else{
				?>
								<div class="alert alert-warning">
									<strong><?php echo $not_match ?></strong>
								</div>
				<?php
							}
						}
						else{
				?>
							<div class="alert alert-danger">
								<strong><?php echo $wrong_old_password ?></strong>
							</div>
				<?php
						}
					}
				?>
				<form action="" method="post">
					<div class="form-group">
						<h4>Old Password :</h4>
						<input type="text" class="form-control" name="old_password" placeholder="Old Password...">
					</div><br><br><br>
					<div class="form-group">
						<h4>New Password :</h4>
						<input type="password" class="form-control" name="new_password1" placeholder="new Password...">
					</div>
					<div class="form-group">
						<h4>Reenter Password :</h4>
						<input type="password" class="form-control" name="new_password2" placeholder="new Password...">
					</div>
					<button type="submit" class="btn btn-primary" name="submit">Change Password</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>