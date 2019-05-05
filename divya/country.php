<?php
error_reporting(0);


$conn=mysqli_connect('localhost','root','',"iip");




$ins="insert into country set country_name = '".$_POST['title']."' ";

mysqli_query($conn,$ins);
$limit=2;
$sel1="select * from country";
           $exe1=mysqli_query($conn,$sel1);
           echo $total=mysqli_num_rows($exe1);
            $pages=ceil($total/$limit);


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
		<div class="head"><marquee>Country</marquee></div>
<form action="" method="post" id="formdata1">
			<input type="text" name="search1">
			<input type="submit" name="nsub" value="Search">
		</form><br>

 <form action="" method ="post" id="formdata">
			<div class="new_head">Country name</div> 

			<div class="new_text"><input type="text" value="" name="title" class="input" id="cname"></div>
			<br><br><br><br>

          <input type="hidden" name="id" id="cid">
          <br><br>
			<input type="text" name="" id="pagenumber" value="0">
			<input type="submit" name="" value="Save"><br><br>
		

		
 </form>

	<form method="post" id="form1"></form>
<form action= "" method="post" id="res">

                      <?php
                          include 'cselect.php';
                      ?>

		</form>

    <table align="center" border="1" width="70%;"> 
      <tr>
<td onclick="pagging(0)">First</td>
<td onclick="return pagging(1)">Prev</td>
<?php for($i=1; $i <=$pages ; $i++) {
            ?> 
    <a onclick="pg(<?php  echo $i-1; ?>)"> <?php echo $i; ?></a>
  <?php } ?>
<td onclick="pagging(2)">Next</td>
<td onclick="pagging(3)">Last</td>
      </tr>
    </table>
		</div>
</div>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
 
 //insert

  $("#formdata").on("submit", function() {
           $.ajax({
               url: "logical.php?action=insert&page=country", 
               type: "POST",
               data: new FormData(this),
               contentType: false,
               cache: false,
               processData:false,
               success: function(data) {
                   $("#res").html(data )
                   if ($("#cid").val()=="") {
                     $("#cname").val('');
                   }
               }
           });
           return false;
       });
 
 //Single delete

function deletedata(c){
	 $.ajax({
               url: "logical.php?action=delete&page=country&delid="+c, 
               type: "GET",
               
               success: function(data) {
                   $("#res").html(data)
               
               }
           });
}
               
//multiple delete


 $("#res").on("submit", function() {
           $.ajax({
               url: "logical.php?action=muldel&page=country", 

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

//searching

$("#formdata1").on("submit", function() {
           $.ajax({
               url: "logical.php?action=search&page=country", 
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

$("#formdata").on("submit", function() {
           $.ajax({
               url: "logical.php?action=update&page=country", 
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
    $("#cname").val(cname);
    $("#cid").val(id);
   
}
function pg(nnumber){
    $.ajax({
               url: "logical.php?action=pagging&page=country&nnumber="+nnumber, 
               type: "POST",
               data: new FormData(this),
               contentType: false,
               cache: false,
               processData:false,
               success: function(data) {
                   $("#res").html(data )
               }
           });


}

function pagging(p){
  var pagenumber= parseInt($("#pagenumber").val());

  if (p==1) {
    var nnumber=pagenumber-1;
   
    if (nnumber<0) {
      alert("No Pre Record");
      return false;
    }
  }
  if(p==2){
    var nnumber=pagenumber+1;
  }
  if(p==0)
  {
    var nnumber=0;
  }
  if(p==3){
    var nnumber="<?php echo ($pages-1); ?>";
  }
  $("#pagenumber").val(nnumber);
  $.ajax({
               url: "logical.php?action=pagging&page=country&nnumber="+nnumber, 
               type: "POST",
               data: new FormData(this),
               contentType: false,
               cache: false,
               processData:false,
               success: function(data) {
                   $("#res").html(data )
               }
           });
}

</script>
</body>
</html>