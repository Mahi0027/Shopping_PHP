<?php
error_reporting(0);
mysql_connect('localhost', 'root','');
mysql_select_db('web1_db');
?>
<!DOCTYPE html>
<html>
<head>
	<title>country</title>
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript">
		//Insert
		$(document).ready(function(){		
		$("#formdata").on("submit", function() {
				 $.ajax({

				 	url:"logical.php?action=insert&page=country",
				 	type: "POST",
				 	data: new FormData(this),
				 	contentType: false,
				 	cache: false,
				 	processData:false,
				 	success: function(a) {
				 		$("#res").html(a)
				 		if($("#id").val()==""){
				 			$("#cno").val('');
				 			$("#cname").val('');
				 		}
				 	}
				 });
				 return false; 
		});

		});

//Delete
		function deldata(a){
			 $.ajax({

				 	url:"logical.php?action=delete&page=country&delid="+a,
				 	type: "GET",
				 	success: function(data) {
				 		$("#res").html(data)
				 	}

				   });
		}

//update
		function editdata(id,cno,cname){
			$("#id").val(id);
			$("#cno").val(cno);
			$("#cname").val(cname);

		}

//multiple delete

		$(document).ready(function(){		
		$("#res").on("submit", function() {
				 $.ajax({

				 	url:"logical.php?action=muldelete&page=country",
				 	type: "POST",
				 	data: new FormData(this),
				 	contentType: false,
				 	cache: false,
				 	processData:false,
				 	success: function(a) {
				 		$("#res").html(a)
				 	}
				 });
				 return false; 
		});

		});


//searching
		$(document).ready(function(){		
		$("#searching").on("submit", function() {
				 $.ajax({

				 	url:"logical.php?action=searching&page=country",
				 	type: "POST",
				 	data: new FormData(this),
				 	contentType: false,
				 	cache: false,
				 	processData:false,
				 	success: function(a) {
				 		$("#res").html(a)
				 	}
				 });
				 return false; 
		});

		});

		function pagging(p){
			var pagenumber=parseInt($("#pagenumber").val());
			if(p==1){
			
			var nnumber=pagenumber-1;
		}
		if(p==2){
			
			var nnumber=pagenumber+1;

		}
		if(p==0)
		{
			var nnumber=0;
		}


		    $("#pagenumber").val(nnumber);
			 $.ajax({

				 	url:"logical.php?action=pagging&page=country&nnumber="+nnumber,
				 	type: "POST",
				 	data: new FormData(this),
				 	contentType: false,
				 	cache: false,
				 	processData:false,
				 	success: function(a) {
			 		$("#res").html(a)
				 	}
				 });
		
	

		}






	</script>

</head>
<body class="body">
	<div class="main">
		<?php include 'header.php'; ?>
		<div class="row3">
			<h2 style="text-align: center;">country</h2>
			<div style="width: 200px; margin: auto; text-align: center;">
	
			<form method="post" id="searching">
				<input type="text" name="cname" />
				<input type="submit" name="save"  value="SEARCH" />

			</form>
				<form method="post" id="formdata">
					<input type="hidden" name="id" id="id" />
					Country number: <input type="text" name="cno" id="cno" />
					Country Name: <input type="text" name="cname" id="cname" /> 
					<input type="text" name="" id="pagenumber" value="0">
					
					<input type="submit" name="save" style="margin-top: 20px;" />

				</form>
			</div>

			<div class="clear"></div>
		</div>

		<form method="post" id="res">
		<?php	include "select.php"; ?>
	</form>	

	<table>
		<tr>
			<td onclick="pagging(0)">First</td>
			<td onclick="pagging(1)">Pre</td>
			<td onclick="pagging(2)">Next</td>
			<td>Last</td>
		</tr>
	</table>




		<!-- <?php include 'footer.php'; ?> -->
		<div class="clear"></div>
	</div>
</body>
</html>