<?php

 require 'connection.php';
    $conn=startconnection();
    error_reporting(0);
    
    //global $State_Id,$Countary_Id,$State_Name;
   
    $Countary_Id=$_POST['Countary_Id'];
    $Countary_Name=$_POST['Countary_Name'];
   
   
        // insert query

        if( $Countary_Id!=""  )
        {
            $ins= "INSERT INTO  countary(countary_id,countary_name) 
            values('$Countary_Id','$Countary_Name')";

            mysqli_query($conn,$ins);

            echo "Data inserted successfully";
        }
        else
            echo "fill all the enteries ";
   include 'cselect.php';


?>