<?php
	function startconnection(){
		//declare variables
		$servername="localhost";
		$username="root";
		$password="dell@renurathore";
		$mydb="shopping";
		
		//create connection
		$conn=new mysqli($servername,$username,$password,$mydb) or die("connection failed: ".$conn->connection_error);
		
		return $conn;
	}
	function closeconnection($conn){
		//stop connection
		$conn->close();
	}
?>