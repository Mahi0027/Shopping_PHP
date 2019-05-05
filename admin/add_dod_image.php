<?php
	require "connection.php";
	$conn=startconnection();
	error_reporting(E_PARSE);

	//session create
	session_start();
	if($_SESSION['adminid']==""){
		header('location: index.php');
	}
	
	//upload first DOB image
	$name1=$_FILES['first_image']['name'];
	$tmp_name1=$_FILES['first_image']['tmp_name'];
	$path1="../dobfirst/".$name1;
	move_uploaded_file($tmp_name1,$path1);
	$detail1=$_POST['detail1'];
	$set_prise1=$_POST['price1'];
	
	//upload second DOB image
	$name2=$_FILES['second_image']['name'];
	$tmp_name2=$_FILES['second_image']['tmp_name'];
	$path2="../dobsecond/".$name2;
	move_uploaded_file($tmp_name2,$path2);
	$detail2=$_POST['detail2'];
	$set_prise2=$_POST['price2'];
	$status=$_POST['radio1'];

	if($_GET['edit']==""){
		if(isset($_POST['save'])){
			if(($set_prise1!="") && ($set_prise2!="")){
				$sql="INSERT INTO design_of_day(first_image,price1,detail1,second_image,price2,detail2,status) VALUES ('$name1','$set_prise1','$detail1','$name2','$set_prise2','$detail2','$status')";
				$result=$conn->query($sql);
				if($result===true){
					$sins="Data Successfully Inserted";
				}else{
					$nins="Data not Inserted";
				}
			}
		}	
	}
	//update row
	else{
		$ok=$_GET['edit'];
		$sel="SELECT * FROM design_of_day WHERE id='".$ok."'";
		$exe=$conn->query($sel);
		$row=$exe->fetch_assoc();
		if($name1!="" && $name2!=""){
			$upd="UPDATE design_of_day SET first_image='".$name1."',price1='".$set_prise1."',detail1='".$detail1."',second_image='".$name2."',price2='".$set_prise2."',detail2='".$detail2."',status='".$status."' WHERE id='".$ok."'";
			$exe=$conn->query($upd);
			if($exe==true){
				$supd="data udpate successfully";
			}else{
				$nupd="data not updated";
			}
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
				<h1>Design Of The Day</h1><br>
				<?php
				if(isset($_POST['save'])){
					if($_GET['edit']==""){
						if($sins==""){
				?>
							<div class="alert alert-danger">
								<strong><?php echo $nins ?></strong>
							</div>
							
				<?php
						}else{
				?>	
								<div class="alert alert-success">
								<strong><?php echo $sins ?></strong>
								</div>
				<?php
						}
					}else{
						if($supd==""){
				?>
								<div class="alert alert-danger">
									<strong><?php echo $nupd ?></strong>
								</div>
				<?php
						}else{
				?>
								<div class="alert alert-success">
									<strong><?php echo $supd ?></strong>
								</div>
				<?php
						}
					}
				}
				?>
				<form action="" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<h4>Add First Image :</h4>
						<input type="file" class="form-control-file border" name="first_image" value="<?php echo $row['first_image']; ?>">
					</div>
					<div class="form-group">
						<h4>Set Price :</h4>
						<input type="text" class="form-control" id="usr" name="price1" placeholder="set Price..." value="<?php echo $row['price1']; ?>">
					</div>
					<div class="form-group">
						<h4>Add Detail :</h4>
						<textarea class="form-control" rows="5" id="comment" placeholder="Add Details about Product..." name="detail1"><?php echo $row['detail1']; ?></textarea>
					</div>
					<div class="form-group">
						<h4>Add Second Image :</h4>
						<input type="file" class="form-control-file border" name="second_image" value="<?php echo $row['second_image']; ?>">
					</div>
					
					<div class="form-group">
						<h4>Set Price :</h4>
						<input type="text" class="form-control" id="usr" name="price2" placeholder="set Price..." value="<?php echo $row['price2']; ?>">
					</div>
					<div class="form-group">
						<h4>Add Detail :</h4>
						<textarea class="form-control" rows="5" id="comment" placeholder="Add Details about Product..." name="detail2"><?php echo $row['detail2']; ?></textarea>
					</div>
					<div class="form-group">
						<h4>Status :</h4>
						<input type="radio" class="form-check-input" name="radio1" value="1" >&ensp;&ensp;&ensp;Active&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type="radio" class="form-check-input" name="radio1" value="0" >&ensp;&ensp;&ensp;Deactive
					</div>
					<?php
						if($_GET['edit']==""){
							?>
							<button type="submit" class="btn btn-primary" name="save">Save</button>
						<?php
						}else{
							?>
							<button type="submit" class="btn btn-primary" name="save">Update</button>
						<?php
						}
					?>
				</form>
			</div>
		</div>
	</div>
</body>
</html>