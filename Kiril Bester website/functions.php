<?php

function check_login($con) {

	if(isset($_SESSION['user_id'])) {
		$id = $_SESSION['user_id'];
		$query = "SELECT * FROM wellfit_users WHERE user_id = '$id' limit 1";
		
		$result = mysqli_query($con, $query);
		if($result && mysqli_num_rows($result) > 0) {
			
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	
	header("Location: login.php");
	die;
}

function random_num($length) {
	
	$text = "";
	if($length < 5) {
		
		$length = 5;
	}
	
	//assign random number between 4 and max length
	$len = rand(4, $length);
	
	//allowing for different lengths
	for ($i=0; $i < $len; $i++) {
		
		$text .= rand(0,9);
	}
	
	return $text;
}

?>