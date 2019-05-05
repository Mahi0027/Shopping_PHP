<?php
    
    function startconnection()
    {
        // declaring variable
    	$servername = "localhost";
		$username = "root";
		$password="dell@renurathore";
		$mydb     ="";

		// Create connection
		$conn = mysqli_connect($servername,$username,$password) or  die("Connection failed: " . mysqli_connect_error());

		return $conn;
			
    }

    function stopconnection($conn)
    {   // stop connection
           mysqli_close($conn);
    }
?>