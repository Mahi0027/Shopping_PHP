<?php
error_reporting(0);
$conn=mysqli_connect('localhost','root','','iip');
$where="";

$del="DELETE FROM addnews where n_id='".$_GET['did']."'";
mysqli_query($conn,$del);

if ($_POST['ntitle']!="") {
	$where="where news_title like '%".$_POST['ntitle']."%'";
}


 $totdel=count($_POST['c1']);
for($i=0;$i<$totdel;$i++)
{
echo $del="DELETE FROM addnews where n_id='".$_POST['c1'][$i]."'";
mysqli_query($conn,$del);	
}

//code for start,prex,next,last...
$limit=2;
$next= $_GET['page']+1;
$pre= $_GET['page']-1;
$start=$_GET['page']*$limit;
$last=$_GET['page']/$limit;
?>

<!DOCTYPE html>
<html>
<head>
	<title>View News</title>
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
		<div class="head">View News</div>

        <form action="" method="post">
			<input type="text" name="ntitle">
			<input type="submit" name="nsub" value="save">
		</form>
		<form method="post">
		<table border="1" align="center">
		<tr><td><input type="submit" value="Delete"></td>
			<td>srno.</td>
			<td>add_title</td>
			<td>add_description</td>
			<td>delete</td>
			<td>edit</td>
		</tr>
		<?php
           $sel="select*from addnews $where limit $start,$limit";
           $exe=mysqli_query($conn,$sel);
          while($fetch=mysqli_fetch_array($exe))
           {

		?>
			<tr>
				<td><input type="checkbox" name="c1[]" value="<?php echo $fetch['n_id']?>"></td>
			<td><?php echo $fetch['n_id']?></td>
			<td><?php echo $fetch['news_title']?></td>
			<td><?php echo $fetch['news_description']?></td>
			<td><a href="view_news.php?did=<?php echo $fetch['n_id'];?>">delete</a></td>
			<td><a href="add_news.php?nid=<?php echo $fetch['n_id']?>">edit</a></td>
		</tr>
		
		<?php } ?>

		</table>


		</form>

		<br>

		<table align="center" border="1" width="70%;"> 
			<tr>
				<td><a href="view_news.php?page=0">First</a></td>
				<td><a href="view_news.php?page=<?php  echo $pre; ?>">Pre</a></td>
				<td>
					<?php
						$sel1="select * from addnews";
           $exe1=mysqli_query($conn,$sel1);
            $tot=mysqli_num_rows($exe1);
            $pages=ceil($tot/$limit);

   for($i=1; $i <=$pages ; $i++) {
            ?> 
    <a href="view_news.php?page=<?php  echo $i-1; ?>"> <?php echo $i; ?></a>
           <?php }
					?>
				</td> 
    <td><a href="view_news.php?page=<?php  echo $next; ?>"> Next </a></td>
	<td><a href="view_news.php?page=<?php  echo $pages-1; ?>">Last</a></td>
			</tr>
		</table>


			</div>
</div>
<div class=outer>
	www.wscubetech.com
</div>
</body>
</html>