<?php
session_start();
	include("connection.php");
	include("functions.php");
     
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$username = $_POST['user_name'];
		$password = $_POST['password'];
		
		if(!empty($username) && !empty($password)) {
			
			$user_id = random_num(20);
			$query = "INSERT INTO wellfit_users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
		
			mysqli_query($query);
			
			header("Location: login.php");
			die;
		}
		
		else {
			
			echo "The information entered was incorrect. Can you please enter valid information.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Create Account</title>
</head>

<style>
  
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

  .logo {
	  display: block;
	  margin-left: auto;
	  margin-right: auto;
	  width: 220px;
  }
  
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: grey;
  }

  li1 {
  float: left;
  }

  li1 a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  }

  li1 a:hover {
  background-color: grey;
  }
  
  li2 {
  float: right;
  }

  li2 a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  }

  li2 a:hover {
  background-color: deepskyblue;
  }
  
  li1 a, .dropbtn {
	display: inline-block;
	color: white;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
  }

  li1 a:hover, .dropdown:hover .dropbtn {
	background-color: red;
  }

  li1.dropdown {
	display: inline-block;
  }

  .dropdown-content {
	display: none;
	position: absolute;
	background-color: #f9f9f9;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
  }

  .dropdown-content a {
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: left;
  }

  .dropdown-content a:hover {background-color: #f1f1f1;}

  .dropdown:hover .dropdown-content {
	display: block;
	}
  
  .createacc {
	text-align: center;
	color: blue;
	font-weight: underline;
	font-family: Verdana;
  }

	.open-button {
	  background-color: grey;
	  color: white;
	  padding: 16px 20px;
	  border: none;
	  cursor: pointer;
	  opacity: 0.8;
	  position: fixed;
	  bottom: 23px;
	  right: 28px;
	  width: 280px;
	}

	.form-popup {
	  display: none;
	  position: fixed;
	  bottom: 0;
	  right: 15px;
	  border: 3px solid #f1f1f1;
	  z-index: 9;
	}

	.form-container {
	  max-width: 300px;
	  padding: 10px;
	  background-color: white;
	}

	.form-container input[type=text], .form-container input[type=password] {
	  width: 100%;
	  padding: 15px;
	  margin: 5px 0 22px 0;
	  border: none;
	  background: #f1f1f1;
	}

	.form-container input[type=text]:focus, .form-container input[type=password]:focus {
	  background-color: #ddd;
	  outline: none;
	}

	.form-container .btn {
	  background-color: #04AA6D;
	  color: white;
	  padding: 16px 20px;
	  border: none;
	  cursor: pointer;
	  width: 100%;
	  margin-bottom:10px;
	  opacity: 0.8;
	}

	.form-container .cancel {
	  background-color: red;
	}

	.form-container .btn:hover, .open-button:hover {
	  opacity: 1;
	}
	
	.error.display-error {
		display: block;
		margin-bottom: 15px;
		transform: translateY(-15px);
	}
	
	.error {
		color: red;
		background-color: #fde8ec;
		padding: 10px;
		display: none;
	}
	
	.success {
		margin-bottom: 25px;
		color: green;
		background-color: #d2ffd2;
		padding: 10px;
		display: none;
	}
</style>
</head>
<body>

<header>
  <body background="background.jpg">
	<img class="logo" src="fitnessbadge.png" alt="Store logo">
	
	<ul>
	<li1><a href="http://localhost/Fitness%20website/FitnessHP.html">Home</a></li1>
	<li1 class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Sport</a>
    <ul class="dropdown-content">
      <a href="http://localhost/Fitness%20website/footballpage.html">Football/Soccer</a>
      <a href="http://localhost/Fitness%20website/rugbypage.html">Rugby</a>
      <a href="http://localhost/Fitness%20website/hockeypage.html">Hockey</a>
	  <a href="http://localhost/Fitness%20website/tennispage.html">Tennis</a>
    </ul>
  </li1>
	
	<li1><a href="http://localhost/Fitness%20website/list.html">To Do List</a></li1>
	<li1 class="dropdown">
	<a href="javascript:void(0)" class="dropbtn">Recover</a>
    <ul class="dropdown-content">
	<a href="http://localhost/Fitness%20website/recovery.html">Recovery</a>
	<a href="http://localhost/Fitness%20website/list1.html">Recovery List</a></ul></li1>
	<li1><a href="http://localhost/Fitness%20website/bmi.html">BMI Details</a></li1>
	
	<li2><a href="http://localhost/Fitness%20website/sign-out.html">Sign-out</a></li2>
	<li2><a href="http://localhost/Fitness%20website/createaccount.php">Sign-up</a></li2>
	<li2><a href="http://localhost/Fitness%20website/login.php">Login</a></li2>		
  </ul>
	
	<h1 class="createacc">Create Account Page</h1>

<button class="open-button" onclick="openForm()">Open Create Account Form *(User Details)</button>

<div class="form-popup" id="myForm">
  <form action="createaccount.php" class="form-container">
    <h1 class="createacc">Create Account</h1>
	
	<label for="user_name"><b>Username:</b></label>
    <input type="text" placeholder="Enter Username" name="user_name">

    <label for="password"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="password">

    <button type="submit" class="btn" id="login">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
	</form>
</div>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>