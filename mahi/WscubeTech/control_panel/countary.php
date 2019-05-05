  <?php
    require 'connection.php';
    $conn=startconnection();
    error_reporting(0);

    $start=0;
    $limit=2;

    //last page pagging code

    $sel="select*from countary";
    $exe=mysqli_query($conn,$sel);
    $total=mysqli_num_rows($exe);
    $pages=ceil($total/$limit);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Countary</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <div class="body">
         <div class="header">     	  			
   					    <b>  Welcome To WsCubeTech</b>
     	   </div>
         <div class="pages">              
                <ul>
                        <li><a href="home.php"> Home</a></li>   
                        <li><a href="addnews.php">Add News</a> </li>  
                        <li><a href="viewnews.php">View News</a> </li> 
                        <li><a href="addgallery.php">Add Gallery</a> </li>
                        <li><a href="viewgallery.php">View Gallery</a> </li>
                        <li><a href="addcourse.php">Add Course</a> </li>
                        <li><a href="viewcourse.php">View Course</a> </li> 
                        <li><a href="addwhyiip.php">Add Why IIP</a> </li>
                        <li><a href="viewwhyiip.php">View Why IIP</a> </li>
                        <li><a href="aboutus.php">About US</a> </li>
                        <li><a href="addcontactus.php"> Add Contact Us</a></li>
                        <li><a href="viewcontactus.php">View Contact Us</a> </li>
                        <li><a href="addinterviewque.php">Add Interview Question</a>  </li>
                        <li><a href="viewinterviewque.php"> View Interview Question  </a></li>
                        <li><a href="enquiry.php">Enquiry</a> </li>
                        <li><a href="changepass.php">Change Password</a> </li>
                        <li><a href="logout.php">Logout</a> </li>
                </ul>              
        </div>     	  		       
        <div class="page_title">
              <b><i> Countary </i></b>
        </div>
                    
        <div class="login_portal">
                <div class="input">                                      
                     <div class="input1">
                           
                            Countary Name:<br><br>
                            
                                 
                     </div>                                                                        
                     <form action="" method="post" id="formdata">  
                            <div class="input2">
                                 
                                  <input type="text" name="Countary_Name" id="cname"  > <br><br>

                                   <input type="hidden" name="id" id="cid"><br> <br>
                                   <input type="text" name="pagenumber" id="pagenumber" value="0"><br>

                                  <input type="submit" name="usave" value="submit">
                            </div>
                      </form>  
                </div> 
                 <div>
                
                   <form action= "" method="post" id="res">
                   <?php
                          include 'cselect.php';
                      ?>
                                                   
                    </form>
                    <table align="center" border=".5px" >
                        <tr>
                            <td onclick="pagging(0)">First</td>
                            <td onclick=" return pagging(1)">Prev</td>
                            <?php
                              for($i=1;$i<$pages;$i++)
                              {
                              ?>
                              <a onclick="page(<?php echo $i-1;?>)"> <?php echo $i;  ?></a>
                              <?php}?>

                            <td onclick="pagging(2)">Next</td>
                            <td onclick="pagging(3)"> Last</td>
                        </tr>
                    </table> 
                </div>         
                  
          </div>
     	  <div class="footer">
		             <b>www.wscubetech.com</b>
     	  </div>     	
  </div>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
  
  $("#formdata").on("submit", function() 
     {   
           $.ajax
           ({
               url: "logical.php?action=insert&page=countary", 
               type: "POST",
               data: new FormData(this),
               contentType: false,
               cache: false,
               processData:false,
               success: function(a) {
                   $("#res").html(a)
                   if ($("#cid").val()=="") {
                     $("#cname").val('');
                   }
               }
           });
           return false;
       });
    
  function deletedata(a)
  {
     $.ajax({
              url: "logical.php?action=delete&page=countary&delid="+a, 
              type: "GET",

              success: function(data)
            {
             $("#res").html(data)
            }
         });
  }

  $("#res").on("submit",function()
  {
    $.ajax({
            url:"logical.php?action=multidelete&page=countary",
            type:"POST",
            data: new FormData(this),
               contentType: false,
               cache: false,
               processData:false,
            success:function(data)
            {
              $("#res").html(data)
            }
          });
        return false;
       }); 
  


  function showdata(id,cname)
  {
    $("#cname").val(cname);
    $("#cid").val(id);   
  } 
// pagging
  function pagging(p)
  {
    var pagenumber=parseInt($('#pagenumber').val());

    if(p==0)
    {
      var nnumber=0;
    }
    if(p==1)
    {
      var nnumber=pagenumber-1;

      if (nnumber<0)
      {
        alert("No PRevious Recoard");
        return false;
      }
    }

    if(p==2)
    {
      var nnumber=pagenumber+1;
    }
    if (p==3) 
    {
      var nnumber="<?php echo ($pages-1)?>";
    }  

    $('#pagenumber').val(nnumber)
    $.ajax
      ({
         url:"logical.php?action=pagging&page=countary&nnumber="+nnumber,
         type:"POST",
         data:new FormData(this),
         contentType:false,
         cache:false,
         processData:false,
         success:function(a)
         {
          $("#res").html(a)
         } 
      });
  }

  // function page(nnumber)
  // {
  //   $.ajax
  //   ({
  //       url:"logical.php?action=pagging&page=countary&nnumber="+nnumber,
  //       type:"POST",
  //       data:new FormData(this),
  //       success:function(a)
  //       {
  //         $("#res").html(a)
  //       }

  //   });
  // }

</script>
</body>
</html>

