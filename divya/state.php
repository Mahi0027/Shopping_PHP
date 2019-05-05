<?php
error_reporting(0);


$conn=mysqli_connect('localhost','root','',"iip");


	


$ins="insert into state set s_name = '".$_POST['title']."', c_name='".$_POST['con']."' ";

mysqli_query($conn,$ins);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Add News</title>
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
		<li><a href="add_iq.php">Add Interview Question

		</a></li>
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
		<div class="head"><marquee>State</marquee></div>

<form action="" method="post" id="formdata1">
			<input type="text" name="search1">
			<input type="submit" name="nsub" value="Search">
		</form><br>

		<form action="" method ="post" id="formdata">
			<div class="new_head">State name</div> 
			<div class="new_text"><input type="text" value="" name="title" class="input" id="sname"></div>
			<br><br>
             <input type="hidden" name="id" id="sid">
			<div class="new_head">Country name</div>
			<select name="country_name">
				<?php
                                
                                    $sel ="SELECT* FROM country";
                                    $exe = mysqli_query($conn,$sel);

while($fetch=mysqli_fetch_array($exe))
                                    {

                              ?>   
				<option value="<?php echo $fetch['country_name']?>">  <?php echo $fetch['country_name']?></option>
				
                              <?php } ?>
">
			</select>

			
			
			<input type="submit" name="" value="Save">
		
	</div>

	</form>
<form action= "" method="post" id="res">

                      <?php
                          include 'cselect1.php';
                      ?>

		</form>


<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
 
  $("#formdata").on("submit", function() {
           $.ajax({
               url: "logical.php?action=insert&page=state", 

               type: "POST",
               data: new FormData(this),
               contentType: false,
               cache: false,
               processData:false,
               success: function(data) {
                   $("#res").html(data )
                   if ($("#sid").val()=="") {
                     $("#sname").val('');
               }
           }
           });
           return false;
       });

  function deletedata(b){
	 $.ajax({
               url: "logical.php?action=delete&page=state&delid1="+b, 
               type: "GET",
               
               success: function(data) {
                   $("#res").html(data )
               }
           });
	}
	 $("#res").on("submit", function() {
           $.ajax({
               url: "logical.php?action=muldel&page=state", 

               type: "POST",
               data: new FormData(this),
               contentType: false,
               cache: false,
               processData:false,
               success: function(data) {
                   $("#res").html(data )
               }
           });
           return false;
       });

    $("#formdata1").on("submit", function() {
           $.ajax({
               url: "logical.php?action=search&page=state", 

               type: "POST",
               data: new FormData(this),
               contentType: false,
               cache: false,
               processData:false,
               success: function(data) {
                   $("#res").html(data )
               }
           });
           return false;
       });
function showdata(id,cname){
    $("#sname").val(cname);
    $("#sid").val(id);
   
}

</script> </body>
</html>
