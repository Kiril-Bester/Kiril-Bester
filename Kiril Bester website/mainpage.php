<?php
session_start();
	include("connection.php");
	include("functions.php");
	
	$user_data = check_login($conn);
         
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
  </head>
  
<style>
  .WebContainer	{
    width:100%;
	min-width:1000px;
    height:auto;
  }
  
  .body {
	height: 100%;
	margin: 0;
  }
  
  .bg {
	height: 100%; 
	background: lightblue;
	background-image: linear-gradient(blue);
  }
  
  .fbadge {
	width: 200px
  }
  
  h1 {
	display: block;
	margin-left: auto;
	margin-right: auto;
	color: white;
	font-size: 40px;
	font-family: Times Times New Roman serif;
  }
  h2 {
	display: block;
	margin-left: auto;
	margin-right: auto;
	color: blue;
	font-size: 30px;
	font-family: Times Times New Roman serif;
  }
  
  div {
	display: flex;
    justify-content: center;
    align-items: center;
	background-color: aquamarine;
	width: 500px;
	padding: 5px;
	margin: 5px;
  }
  
  ul {
	display: block;
	margin-left: auto;
	margin-right: auto;
	background-color: aquamarine;
	width: 500px;
	height: 350px;
	padding: 10px;
	margin: 10px;
	border-radius: 8px;
  }
  
   .move {
	  display: text;
	  margin-left: auto;
	  margin-right: auto;
	  padding: 15px 28px;
	  background-color: white;
	  color: blue;
	  border-color: blue;
	  border-radius: 30px;
	  text-decoration: none;
  }
  .move:hover {
	  box-shadow: 2px 2px 10px violet;
  }
  
  .main {
	width: 682px;
	height: 380px;
	border-radius: 8px;
  }
  
  ul1 {
	position: absolute;
	right: 70px;
  }
  
  
</style>  
  
  <div>
   <header>
  <body class="bg">
	<img class="fbadge" src="fitnessbadge.png" alt="Fitness badge">
  </header>
  
    <h1>Kiril Bester</h1>
  </div>
  
  <div class="parent">
  <ul>
	<h2>Welcome Fitness</h2>
	<p>This website was created for fitness and sports understanding purposes. The users can use the knowledge that they will gain from <strong>WellFit</strong> and apply it to their interests.
	The site focuses on recovery from an injury as well as particular sports. The aim is to you with the knowledge that is required so you can apply it to your life.
	</p>
	<p>If you want to get started click below</p>
	<button target="blank" class="move" id="btn"><a href="http://localhost/Fitness%20website/FitnessHP.html">Start Here</a></button>
	<button class="move" id="btn"><a href="http://localhost/Fitness%20website/contact.html">Contact Us</a></button>
  </ul>
  
  <ul1>
	<img class="main" src="mainimg.jpg">
  </ul1>
  </div>
  
</body>
</html>