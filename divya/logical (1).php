<?php
error_reporting(0);
	$conn=mysqli_connect('localhost','root','',"iip");
	 $ser="";
   
if ($_REQUEST['page']=="country") {
 	  if($_REQUEST['action']=="insert"){
		
$ID=$_POST['id'];
    if($ID==""){
      if($_POST['title']!="")
      {
$ins="insert into country set country_name = '".$_POST['title']."' ";

mysqli_query($conn,$ins);
}
     }
     else

     {
$ins= "UPDATE country  set country_name='".$_POST['title']."' where country_id=$ID " ;
            mysqli_query($conn,$ins);

     }
 }

  if($_REQUEST['action']=="delete"){
  	 "DELETE from country where country_id='".$_GET['delid']."'";
  	mysqli_query($conn,"DELETE from country where country_id='".$_GET['delid']."'")	;	

  }


 if($_REQUEST['action']=="search"){

if ($_POST['search1']!="") {
  $ser="where country_name like '%".$_POST['search1']."%'";
}

  }


 if($_REQUEST['action']=="muldel"){
  $totdel=count($_POST['c1']);
for($i=0;$i<$totdel;$i++)
{
  $del="DELETE FROM country where country_id='".$_POST['c1'][$i]."'";
mysqli_query($conn,$del); 

  }
}

if($_REQUEST['action']=="pagging"){
$new=$_REQUEST['nnumber']*2;
$paggindata="limit $new,2";
}

include 'cselect.php';

}




//STATE PAGE


//insert
if ($_REQUEST['page']=="state") {
    if($_REQUEST['action']=="insert"){
      
$ID1=$_POST['id'];
    if($ID1==""){
  
    $ins="insert into state set s_name = '".$_POST['s_name']."', c_name='".$_POST['country_name']."' ";

    mysqli_query($conn,$ins);
}
else
{
$ins= "UPDATE state  set s_name='".$_POST['title']."' where state_id=$ID1 " ;
            mysqli_query($conn,$ins);

     }

  }

//delete


  if($_REQUEST['action']=="delete"){
      
      mysqli_query($conn,"DELETE from state where state_id='".$_GET['delid1']."'") ; 
  }

//muldel

if($_REQUEST['action']=="muldel"){
  $totdel=count($_POST['c1']);
for($i=0;$i<$totdel;$i++)
{

  $del="DELETE FROM state where state_id='".$_POST['c1'][$i]."'";
mysqli_query($conn,$del); 


  }
}

//search

if($_REQUEST['action']=="search"){

if ($_POST['search1']!="") {
  $ser="where c_name like '%".$_POST['search1']."%'";
}


  }

  
   include 'cselect1.php';

}
?>