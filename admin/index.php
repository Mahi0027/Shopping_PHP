
<?php
	require "connection.php";
	$conn=startconnection();
	error_reporting(E_PARSE);
	if(isset($_POST['login'])){
		$sel="SELECT * FROM registration WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
		$result=$conn->query($sel);
		$numrow=$result->num_rows;
		if($numrow==1){

			if($_POST['remember']==1){
				setcookie("USERNAME",$_POST['email'] ,time()+3600);
            	setcookie("PASSWORD",$_POST['password'],time()+300); 
			}

			$row=$result->fetch_assoc();
			session_start();
			$_SESSION["adminid"]=$row['idname'];
			$_SESSION["username"]=$row['name'];
			$_SESSION["image"]=$row['image'];
			header('location:home.php');
		}
		else{
			$wrong="Something Wrong ! Check Email or Passwrod";
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
	<div class="login_pannel">
		<div class="login_1st">q</div>
		<div class="login_2nd">
			<div class="container">
				<?php
			  		if(isset($_POST['login'])){
			  			if($numrow!=1){
			  	?>
			  		<br><strong style="color: #C34A2C;"><?php echo $wrong ?></strong><br>
			  	<?php
			  			}
			  		}
			  	?>
			  	<h1>Log In</h1>
			  	<form action="" method="post"  role="form">
			    <div class="form-group form-group-md">
			    	<label class="col-sm-2" for="email">Email :</label>
			    	<div class="col-sm-5">
		              <input type="text" class="form-control" placeholder="Enter email..." name="email" value="<?php echo $_COOKIE['USERNAME'] ?>">
		            </div>
		            <div class="col-sm-5" style="color: white;">sdfd</div><br><br>
			    </div>

			    <div class="form-group form-group-md">
			    	<label class="col-sm-2" for="pwd">Password :</label>
			    	<div class="col-sm-5">
		              <input type="password" class="form-control" placeholder="Enter Password..." name="password" value="<?php echo $_COOKIE['PASSWORD'] ?>">
		            </div>
		            <div class="col-sm-5" style="color: white;">sdfd</div><br><br>
			    </div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			    <input type="checkbox" name="remember" name="remember" value="1">&emsp;&emsp;<b>Remember Me</b><br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
			    <button type="submit" class="btn btn-primary" name="login">LOG IN</button>&emsp;&emsp;
			    Forgotten Password?&emsp;&emsp;&emsp;&emsp;<a href="registration.php">Registration?</a>
			  </form>
			</div>
		</div>
		<div class="login_3rd">fd</div>
	</div>
</body>
</html>