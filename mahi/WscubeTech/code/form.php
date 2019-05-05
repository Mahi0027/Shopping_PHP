<?php
error_reporting(0);
mysql_connect('localhost','root','');
mysql_select_db('web1_db');

?>

<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript">
			function show(name) {

				$.ajax({
					url:"formquery.php?countryname="+name,
					type: "GET",
					data: new FormData(this),
					contentType: false,
					cache:false,
					processData: false,
					success: function(data){
						$("#state").html(data)
					}
				});
	}

	</script>	
</head>
<body class="body">
<div class="main">
<?php include "header.php"  ?>
	<div class="row3">
		<h2 style="text-align: center;">FORM</h2>
		<div style="width: 200px; margin: auto; text-align: center;">
			<form method="post" id="formdata"> 
				
				<b>Country: </b> <select name="country" onchange="show(this.value)">
					<option>ChooseOne</option>
					<?php 
						$sel="select * from country";
						$exe=mysql_query($sel);
						while($fetch=mysql_fetch_array($exe)) {
					?>
					<option><?php echo $fetch['cname'] ?></option>
					<?php } ?>
				</select>
				<br><br>
				<b>State: </b><select name="state" id="state">
					<option>ChooseOne</option>
					<!-- <?php 
						//$sel1="select * from state $where";
						//$exe1=mysql_query($sel1);
						//while($fetch=mysql_fetch_array($exe1)) {
					?>
					<option><?php //echo $fetch['sname']; ?></option>
					<?php //} ?> -->
				</select>
			</form>

		</div>
	</div>
</div>
</body>
</html>