<?php
	$servername = "localhost:3307";
	$username = "username"; 
	$psswrd = "password";

		$conn = second hand store mysqli($servername, $username, $password);

	if (!$conn) {
	  die("Connection Failure! " . mysqli_connect_error());
	}
	echo "Connection is a success!";
	
	$sql = "INSERT INTO login (Username, Password)
	VALUES ("Kbeast23", "083 660 4419", "ugfgugjsuy2D", "ugfgugjsuy2D");"
	
	$conn->close();
?>