<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "bankdb";
	

	$conn = mysqli_connect($servername, $username, $password, $database);

   
	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>