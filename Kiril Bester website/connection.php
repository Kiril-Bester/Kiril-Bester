<?php

$dbhost = "localhost: 3307";
$dbuser = "root";
$dbpass = "";
$dbname = "fitness_signup";

if ($con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
	
	echo("Login was a success");
}