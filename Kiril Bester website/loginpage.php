<?php
	$servername = "localhost:3307";
	$username = "username"; 
	$psswrd = "";

		$conn = mysqli_connect($servername, $username, $password);

	if (!$conn) {
	  die("Connection Failure! " . mysqli_connect_error());
	}
	echo "Connection is a success!";
	
	$conn->close();
?>