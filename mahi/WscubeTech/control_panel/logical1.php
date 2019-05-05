<?php
 include 'connection.php';
   $conn=startconnection();
    error_reporting(0);
 

if($_REQUEST['action']=="insert"){

    //global $State_Id,$Countary_Id,$State_Name;
     $State_Id=$_POST['State_Id'];
    $Countary_Id=$_POST['Countary_Id'];
    $State_Name=$_POST['State_Name'];
   
   
        // insert query

        if( $State_Id!=""  )
        {
            $ins= "INSERT INTO  state(state_id,state_name) 
            values('$State_Id','Countary_Id','$Countary_Name')";

            mysqli_query($conn,$ins);

            echo "Data inserted successfully";
        }
        else
            echo "fill all the enteries ";
 
  }


   include 'sselect.php';



?>