<?php
	require "connection.php";
	$conn=startconnection();
	error_reporting(E_PARSE);
	
	//session create
	session_start();
	if($_SESSION['adminid']==""){
		header('location: index.php');
	}
	//upload first Main image
	$image_title=$_POST['name'];
	$name=$_FILES['main_image']['name'];
	$tmp_name=$_FILES['main_image']['tmp_name'];
	$path="../products_images/menjeans/".$name;
	move_uploaded_file($tmp_name,$path);
	$detail=$_POST['detail'];
	$set_prise=$_POST['price'];
	$status=$_POST['radio1'];

	//upload sub image
	$name1=$_FILES['file1']['name'];
	$tmp_name1=$_FILES['file1']['tmp_name'];
	$path1="../products_images/menjeans/".$name1;
	move_uploaded_file($tmp_name1,$path1);

	$name2=$_FILES['file2']['name'];
	$tmp_name2=$_FILES['file2']['tmp_name'];
	$path2="../products_images/menjeans/".$name2;
	move_uploaded_file($tmp_name2,$path2);

	$name3=$_FILES['file3']['name'];
	$tmp_name3=$_FILES['file3']['tmp_name'];
	$path3="../products_images/menjeans/".$name3;
	move_uploaded_file($tmp_name3,$path3);

	$name4=$_FILES['file4']['name'];
	$tmp_name4=$_FILES['file4']['tmp_name'];
	$path4="../products_images/menjeans/".$name4;
	move_uploaded_file($tmp_name4,$path4);

	$name5=$_FILES['file5']['name'];
	$tmp_name5=$_FILES['file5']['tmp_name'];
	$path5="../products_images/menjeans/".$name5;
	move_uploaded_file($tmp_name5,$path5);
	
	//insert data 
	if($_GET['edit']==""){
		if(isset($_POST['save'])){
			if(($image_title!="") && ($set_prise!="")){
				$sql="INSERT INTO men_jeans(name,main_image,first_sub_image,second_sub_image,third_sub_image,fourth_sub_image,fifth_sub_image,price,detail,status) VALUES ('$image_title','$name','$name1','$name2','$name3','$name4','$name5','$set_prise','$detail','$status')";
				$result=$conn->query($sql);
				if($result===true){
					$insert_success="Data Successfully Inserted";
				}else{
					$insert_fail="Data Not Inserted";
				}
			}
		}	
	}
	//update row
	else{
		$ok=$_GET['edit'];
		$sel="SELECT * FROM men_jeans WHERE id='".$ok."'";
		$exe=$conn->query($sel);
		$row=$exe->fetch_assoc();
		if($name!="" && $set_prise!=""){
			$upd="UPDATE men_jeans SET name='".$image_title."',main_image='".$name."',first_sub_image='".$name1."',second_sub_image='".$name2."',third_sub_image='".$name3."',fourth_sub_image='".$name4."',fifth_sub_image='".$name5."',price='".$set_prise."',detail='".$detail."',status='".$status."' WHERE id='".$ok."'";
			$exe=$conn->query($upd);
			if($exe==true){
				$update_success="data udpate successfully";
			}else{
				$update_fail="data not updated";
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
				<h1>Men's Jeans</h1><br>
				<?php
				if(isset($_POST['save'])){
					if($_GET['edit']==""){
						if($insert_success==""){
				?>
							<div class="alert alert-danger">
								<strong><?php echo $insert_fail ?></strong>
							</div>
							
				<?php
						}else{
				?>	
								<div class="alert alert-success">
								<strong><?php echo $insert_success ?></strong>
								</div>
				<?php
						}
					}else{
						if($update_success==""){
				?>
								<div class="alert alert-danger">
									<strong><?php echo $update_fail ?></strong>
								</div>
				<?php
						}else{
				?>
								<div class="alert alert-success">
									<strong><?php echo $update_success ?></strong>
								</div>
				<?php
						}
					}
				}
				?>
				<form action="" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<h4>Add Image Name:</h4>
						<input type="text" class="form-control" name="name" placeholder="Name of image..." alue="<?php echo $row['name'] ?>">
					</div>
					<div class="form-group">
						<h4>Add Main Image :</h4>
						<input type="file" class="form-control-file border" name="main_image">
					</div>
					<div class="form-group">
						<h4>Add Sub Images :</h4>
						<input type="file" class="form-control-file border" name="file1">
						<input type="file" class="form-control-file border" name="file2">
						<input type="file" class="form-control-file border" name="file3">
						<input type="file" class="form-control-file border" name="file4">
						<input type="file" class="form-control-file border" name="file5">
					</div>
					<div class="form-group">
						<h4>Set Price :</h4>
						<input type="text" class="form-control" id="usr" name="price" placeholder="set Price..." value="<?php echo $row['price'] ?>">
					</div>
					<div class="form-group">
						<h4>Add Detail :</h4>
						<textarea class="form-control" rows="5" id="comment" name="detail" placeholder="Add Details about Product..."><?php echo $row['detail'] ?></textarea>
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