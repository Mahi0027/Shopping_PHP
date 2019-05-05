<?php

   include 'connection.php';
   $conn=startconnection();
   // error_reporting(0);  
  if ($_REQUEST['page']=="countary")
  {
 
    if($_REQUEST['action']=="insert")
    {
      $Countary_Name=$_POST['Countary_Name'];
      $ID=$_POST['id'];
      if($ID==""){
        // insert query
       if( $Countary_Name!=""  )
        {
          $ins= "INSERT INTO  countary(countary_name) 
                   values('$Countary_Name')";
          mysqli_query($conn,$ins);
          echo "Data inserted successfully";
        }
        else
          echo "fill all the enteries "; 
        }
       else{
          $ins= "UPDATE countary  set countary_name='$Countary_Name'  where s_no=$ID";
          mysqli_query($conn,$ins);
          echo "Data Upadete successfully";
        }
    }
///////DELETE ON COUNTARY
    if ($_REQUEST['action']=="delete") 
    {
      $del= "DELETE from countary where s_no='".$_GET['delid']."'";
      mysqli_query($conn,$del) ; 
    }
/////////////MULTIPLE DELETE
    if ($_REQUEST['action']=="multidelete")
    {    
      $totdel=count($_POST['c1']);
      for($i=0;$i<$totdel;$i++)
      {
       $del="DELETE FROM countary where s_no='".$_POST['c1'][$i]."'";
       mysqli_query($conn,$del); 
      }
    }
////////PAGGING
    if ($_REQUEST['action']=="pagging")
    {
        $new=$_REQUEST['nnumber']*2;
        $paggingdata="limit $new,2";  
    }
   include 'cselect.php';
  }

  // STATE QUERIES/////////////////////////////////////////////////////
  ///////////////////////////////////
  if ($_REQUEST['page']=="state")
 {
   // INSERT
   if($_REQUEST['action']=="insert"  )
   {
    
    $State_Name=$_POST['State_Name'];
    $Countary_Name=$_POST['Countary_Name'];
    // insert ///query
    if( $State_Name!=""  )
    {
      $ins= "INSERT INTO  state set state_name='".$_POST['State_Name']."',
             Countary_Name='".$_POST['Countary_Name']."' ";            
      mysqli_query($conn,$ins);
      echo "Data inserted successfully";
    }
    else
       echo "fill all the enteries "; 
    }
    ///DELETE QUERY/////////////// 
   if ($_REQUEST['action']=="delete") 
   {
    $del= "DELETE from state where s_no='".$_GET['delid']."'";
    mysqli_query($conn,$del) ; 
   }
   /////MULTIPLE DELETE////////
   if ($_REQUEST['action']=="multidelete")
   {    
     $totdel=count($_POST['c1']);
     for($i=0;$i<$totdel;$i++)
     {
      $del="DELETE FROM countary where s_no='".$_POST['c1'][$i]."'";
      mysqli_query($conn,$del); 
     }
   }
   include 'sselect.php';
 } 
 

?>