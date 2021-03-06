<?php
	require 'connection.php';
	$conn=startconnection();
	error_reporting(E_PARSE);

	//session create
	session_start();
	if($_SESSION['adminid']==""){
		header('location: index.php');
	}
	//Delete Row
	if(isset($_GET['del'])){
		$ok=$_GET['del'];
		echo "$ok";
		$delete="DELETE FROM women_shirt WHERE id='".$ok."'";
		$result=$conn->query($delete);
		if($result==true){
			$sdel="Row Deleted";
		}else{
			$ndel="Row Is Not Deleted";
		}
	}
	//Multiple Delete Row
	if(isset($_POST['multiple_delete'])){	
		$total=count($_POST["box"]);
		for($i=0;$i<$total;$i++){
			$del="DELETE FROM women_shirt WHERE id='".$_POST['box'][$i]."'";
			$conn->query($del);
		}	
	}
	//paging
	$aa="SELECT * FROM women_shirt";
	$bb=$conn->query($aa);
	$totalrow=$bb->num_rows;
	$limit=3;
	$next= $_GET['page']+1;
	$pre= $_GET['page']-1;
	if($pre<0){
		$pre=0;
	}
	$start=$_GET['page']*$limit;
	$last=ceil($totalrow/$limit);
	if($next>=$last){
		$next=$last-1;
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
				<h1>Women's Shirt</h1><br>
				<?php
					if(isset($_GET['del'])){
						if($sdel==""){
				?>
							<div class="alert alert-danger">
								<strong><?php echo $ndel ?></strong>
							</div>
				<?php
						}else{
				?>
							<div class="alert alert-success">
								<strong><?php echo $sdel ?></strong>
							</div>
				<?php
						}
					}
				?>
				<form action="" method="post">
					<div class="container">
						<h3>Activity Button</h3>
						<button type="button" class="btn btn-success" name="asc">Ascending</button>
						<button type="button" class="btn btn-success" name="dsc">Descending</button>
						<button type="button" class="btn btn-success" name="nam">Name</button>
						<button type="submit" class="btn btn-success" name="hide" value="1">Hide</button>
						<button type="submit" class="btn btn-success" name="show" value="5">Show</button>
						<input type="text" name="search" placeholder="Search..."><button type="submit" class="btn btn-light" name="search_button" value="404">Search</button>
					</div>
					
					<table class="table table-striped">
						<thead>
							<th>S.No.</th>
							<th>Name</th>
							<th>Main Image</th>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>5</th>
							<th>Price</th>
							<th>Detail</th>
							<th>Status</th>
							<th><button type="submit" class="btn btn-primary btn-sm" name="multiple_delete" value="999">Delete</button></th>
							<th>Delete</th>
							<th>Edit</th>
						</thead>
						<?php
							$where=1;
							$one=1;
							$name=null;
							//hide rows
							if(isset($_POST['hide'])){
								$where=$_POST['hide'];
							}
							//show all rows
							if(isset($_POST['show'])){
								$where=0;
							}
							//searching
							/*if(isset($_POST['search_button'])){
								$name=$_POST['search'];
								$where=0;
							}*/
							$select="SELECT * FROM women_shirt WHERE (status='".$where."' OR status='".$one."') LIMIT $start,$limit";
							$result=$conn->query($select);
							if($result->num_rows >0){
								while($row=$result->fetch_assoc()){
									$path="../products_images/womenshirt/".$row['main_image'];
									$path1="../products_images/womenshirt/".$row['first_sub_image'];
									$path2="../products_images/womenshirt/".$row['second_sub_image'];
									$path3="../products_images/womenshirt/".$row['third_sub_image'];
									$path4="../products_images/womenshirt/".$row['fourth_sub_image'];
									$path5="../products_images/womenshirt/".$row['fifth_sub_image'];
									?>
										<tbody>
											<tr>
												<td>&ensp;<?php echo $row['id'] ?></td>
												<td><?php echo $row['name'] ?></td>
												<td><img src="<?php echo $path; ?>" width='40px' height='40px' alt="no img"></td>
												<td><img src="<?php echo $path1; ?>" width='40px' height='40px' alt="no img"></td>
												<td><img src="<?php echo $path2; ?>" width='40px' height='40px' alt="no img"></td>
												<td><img src="<?php echo $path3; ?>" width='40px' height='40px' alt="no img"></td>
												<td><img src="<?php echo $path4; ?>" width='40px' height='40px' alt="no img"></td>
												<td><img src="<?php echo $path5; ?>" width='40px' height='40px' alt="no img"></td>
												<td><?php echo $row['price'] ?></td>
												<td><?php echo $row['detail'] ?></td>
												<td>&ensp;&ensp;<?php echo $row['status'] ?></td>
												<td>&ensp;&ensp;<input type="checkbox" class="form-check-input" name="box[]" value="<?php echo $row['id']; ?>"></td>
												<td><a href="show_women_shirt.php?del=<?php echo $row['id']?>">Delete</a></td>
												<td><a href="add_women_shirt.php?edit=<?php echo $row['id']?>">Edit</a></td>
											</tr>
										</tbody>
									<?php
								}
							}else{
							?>
								<br><div class="alert alert-info">
								  	<strong>There is no row or some rows hidden</strong>
								</div>
							<?php
							}?>						
					</table>
					<br>
				<table align="center" width="30%">
					<tr>
						<td><a href="show_women_shirt.php?page=0">Frist</a></td>
						<td><a href="show_women_shirt.php?page=<?php echo $pre; ?>">Pre</a></td>
						<td>
							<?php
								for($i=1;$i<=$last;$i++){
									if($i>3){
							?>
										<a href="show_women_shirt.php?page=<?php echo $i-1; ?>">.</a>
							<?php
										
									}else{
							?>
										<a href="show_women_shirt.php?page=<?php echo $i-1; ?>"><?php echo $i; ?></a>
							<?php			
									}
							?>	
							<?php
								}
							?>
						</td>
						<td><a href="show_women_shirt.php?page=<?php echo $next; ?>">Next</a></td>
						<td><a href="show_women_shirt.php?page=<?php echo $last-1; ?>">Last</a></td>
					</tr>
				</table>
				</form>
			</div>
		</div>
	</div>
	<?php
		stopconnection($conn);
	?>
</body>
</html>