<?php
	require "connection.php";
	$conn=startconnection();
	error_reporting(E_PARSE);

	$image=$_FILES['photo']['name'];
	$tmp_image=$_FILES['photo']['tmp_name'];
	$path="../products_images/registration/".$image;
	move_uploaded_file($tmp_image,$path);
	$username=$_POST['username'];
	$idname=$_POST['idname'];
	$email=$_POST['email'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	$gender=$_POST['gender'];
	$date=$_POST['date'];
	$address=$_POST['address'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$detail=$_POST['detail'];

	if(isset($_POST['registration'])){
		if($password1==$password2){
			$reg="INSERT INTO registration(name,idname,email,password,gender,dob,address,state,country,image,detail) VALUES ('$username','$idname','$email','$password1','$gender','$date','$address','$state','$country','$image','$detail')";
			$result=$conn->query($reg);
			if($result==true){
				$sreg="Registration successfull !";
			}
			else{
				$nreg="Registration Failed Try Again";
			}
		}
		else{
			$unmatech_password="Password Doesn't Match";
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
			<ul>
				<li></li>
				<li></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<div class="container">
		<h1>Admin Registration</h1>
		<?php
			if(isset($_POST['registration'])){
				if($password1==$password2){
					if($sreg==""){
		?>
						<div class="alert alert-danger">
							<strong><?php echo $nreg ?></strong>
						</div>
		<?php
					}
					else{
		?>
						<div class="alert alert-success">
							<strong><?php echo $sreg ?></strong>
						</div>
		<?php
					}
				}
				else{
		?>
					<div class="alert alert-danger">
						<strong><?php echo $unmatech_password ?></strong>
					</div>
		<?php
				}
			}
		?>
		<form action="" method="post" enctype="multipart/form-data" role="form">
			<div class="form-group form-group-md">
			   	<label class="col-sm-2">Name :</label>
			  	<div class="col-sm-10">
		            <input type="text" class="form-control"  id="usr" placeholder="Enter Name..." name="username" required>
		        </div>    
	  		</div><br><br><br>
	  		<div class="form-group form-group-md">
			   	<label class="col-sm-2">ID Name :</label>
			  	<div class="col-sm-10">
		            <input type="text" class="form-control"  id="idusr" placeholder="Enter ID Name..." name="idname" required>
		        </div>    
	  		</div><br><br>
	  		<div class="form-group form-group-md">
			   	<label class="col-sm-2" for="email">Email :</label>
			  	<div class="col-sm-10">
		            <input type="email" class="form-control"  id="email" placeholder="Enter Email..." name="email" required>
		        </div>    
	  		</div><br><br>
	  		<div class="form-group form-group-md">
			   	<label class="col-sm-2" for="pwd">Password :</label>
			  	<div class="col-sm-10">
		            <input type="password" class="form-control"  id="pwd" placeholder="Enter Password..." name="password1" required>
		        </div>    
	  		</div><br><br>
	  		<div class="form-group form-group-md">
			   	<label class="col-sm-2" for="pwd">Reenter Password :</label>
			  	<div class="col-sm-10">
		            <input type="password" class="form-control"  id="pwd" placeholder="Enter Password..." name="password2" required>
		        </div>    
	  		</div><br><br>
	  		<div class="form-group form-group-md">
			   	<label class="col-sm-2">Gender :</label>
			  	<div class="col-sm-10">
		            <div class="form-check-inline">
						<label class="form-check-label">
						    <input type="radio" class="form-check-input" name="gender" value="male">Male
						  </label>
						</div>&emsp;&emsp;&emsp;
						<div class="form-check-inline">
						  <label class="form-check-label">
						    <input type="radio" class="form-check-input" name="gender" value="female">Female
						  </label>
					</div>
		        </div>    
	  		</div><br><br>
	  		<div class="form-group form-group-md">
			   	<label class="col-sm-2">Date of Birth :</label>
			  	<div class="col-sm-10">
		            <input type="date" class="form-control" name="date" required>
		        </div>    
	  		</div><br><br>
	  		<div class="form-group form-group-md">
			   	<label class="col-sm-2">Address :</label>
			  	<div class="col-sm-10">
		            <input type="text" class="form-control" placeholder="Enter Your Home Address..." name="address">
		        </div>    
	  		</div><br><br>
	  		<div class="form-group form-group-md">
			   	<label class="col-sm-2">State :</label>
			  	<div class="col-sm-10">
		            <input type="text" class="form-control" placeholder="Enter Your State..." name="state" required>
		        </div>    
	  		</div><br><br>
	  		<div class="form-group form-group-md">
			   	<label class="col-sm-2">Country :</label>
			  	<div class="col-sm-10">
		            <input type="text" class="form-control" placeholder="Enter Your Country..." name="country" required>
		        </div>    
	  		</div><br><br>
	  		<div class="form-group form-group-sm">
			   	<label class="col-sm-2">Photo :</label>
			  	<div class="col-sm-10">
		            <input type="file" class="form-control" name="photo" required>
		        </div>    
	  		</div><br><br>
	  		<div class="form-group form-group-md">
			   	<label class="col-sm-2">Detail :</label>
			  	<div class="col-sm-10">
		            <textarea class="form-control" rows="5" name="detail" placeholder="Other Detail..."></textarea>
		        </div>    
	  		</div><br><br>
	  		<button type="submit" class="btn btn-success" name="registration">REGISTER</button>
		</form>
	</div>
</body>
</html>