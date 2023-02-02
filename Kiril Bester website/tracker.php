<?php

$dbhost="localhost: 3307";
$dbusername="root";
$dbname="fitness_tracker";
$dbpass="";

$conn = mysql_connect("localhost","root","", "dbname");

if (!$conn)

  {

  die('Could not connect: ' . mysql_error());

  }

mysql_select_db("smart", $con);

$result = mysql_query("SELECT * FROM Form");

echo "<table border='1'>

<tr>

<th>date</th>

<th>names</th>

<th>excercise</th>

<th>calorieIntake</th>

<th>weightLoss<th>

</tr>";

 

while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['date'] . "</td>";

  echo "<td>" . $row['names'] . "</td>";

  echo "<td>" . $row['excercise'] . "</td>";

  echo "<td>" . $row['calorieIntake'] . "</td>";

  echo "<td>" . $row['weightLoss'] . "</td>";
  
  echo "</tr>";

  }

echo "</table>";

 

mysql_close($con);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress Tracker</title>
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
	background: pink;
	background-image: linear-gradient(lightblue, green);
  }
  
  .fbadge {
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
  
  .center {
	float: left;
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
	background-color: grey;
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
	
  table {
	display: block;
	margin-left: auto;
	margin-right: auto;
	font-family: arial, sans-serif;
	border-collapse: collapse;
	width: 95%;
  }

  td, th {
	border: 2px solid blue;
	text-align: center;
	padding: 10px;
  }

  tr:nth-child(even) {
	background-color: lightblue;
  }
	
  h1 {
	text-align: center;
	color: yellow;
  }
  
  input {
	width: 150px;
	height: 30px
	padding: 12px 20px;
	margin: 8px 0;
	box-sizing: border-box;
	background-color: lightgrey;
	color: blue;
  }
  
  .status {
	width: 160px
  }
  
  .submit {
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 100px;
	height: 50px;
	background-color: lime;
	color: white;
	text-align: center;
	border: 0;
  }
  .reset {
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 100px;
	height: 50px;
	background-color: blue;
	color: white;
	text-align: center;
	border: 0;
  }
  
  .ignore {
	border: 2px green;
	padding: 0;
	background-color: green;
  }
  
  </style>
  
  <header>
  <body class="bg">
	<img class="fbadge" src="fitnessbadge.png" alt="Fitness badge">
  </header>
  
  <ul>
	<li1><a href="file:///C:/Users/User/Documents/Fitness%20website/FitnessHP.html#home">Home</a></li1>
	<li1 class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Sport</a>
    <div class="dropdown-content">
      <a href="file:///C:/Users/User/Documents/Fitness%20website/footballpage.html">Football/Soccer</a>
      <a href="file:///C:/Users/User/Documents/Fitness%20website/rugbypage.html">Rugby</a>
      <a href="file:///C:/Users/User/Documents/Fitness%20website/hockeypage.html">Hockey</a>
	  <a href="file:///C:/Users/User/Documents/Fitness%20website/tennispage.html">Tennis</a>
    </div>
  </li1>
	<li1><a href="file:///C:/Users/User/Documents/Fitness%20website/recovery.html">Recovery</a></li1>
	<li1><a href="file:///C:/Users/User/Documents/Fitness%20website/bmi.html">BMI Details</a></li1>
	<li1><a href="file:///C:/Users/User/Documents/Fitness%20website/tracker.html">Track Progress</a></li1>
	
	<li2><a href="file:///C:/Users/User/Documents/Fitness%20website/sign-out.html">Sign-out</a></li2>
	<li2><a href="file:///C:/Users/User/Documents/Fitness%20website/createaccount.html">Sign-up</a></li2>
	<li2><a href="file:///C:/Users/User/Documents/Fitness%20website/login.html">Login</a></li2>		
  </ul>
  <br><br><br><br><br>
  
  <h1>Keep Track of YOUR Progress</h1>
  
  
  <div>
<table action="tracker.js" method="POST">
  <tr>
    <th>Date</th>
    <th>Name & Surname</th>
    <th>Excercise Description</th>
	<th>Calorie Intake</th>
	<th>Status</th>
	<th>Weight Loss</th>
	<th>Status</th>
  </tr>
  <tr>
    <td>(DD/MM/YY)</td>
    <td>Example: (Bob Jacobus)</td>
    <td>Example: (Ran 2km)</td>
	<td>Limit: 
	<input type="text" id="calorielimit" name="calorie"></td>
	<td class="status"></td>
	<td>Limit: 
	<input type="text" id="weightlimit" name="weightloss"></td>
	<td class="status"></td>
  </tr>
  <tr>
    <td>
	<input class="date" type="text" id="date"></td>
    <td>
	<input class="name" type="text" id="names" ></td>
    <td>
	<input class="excercise" type="text" id="excercise"></td>
	<td>
	<input class="calorie" type="text" id="calorie"></td>
    <td class="status" id="caloriestatus"></td>
    <td>
	<input class="wloss" type="text" id="wloss"></td>
	<td class="status" id="weightstatus"></td>
	
  </tr>
  <tr>
    <td>
	<input class="date" type="text" id="date1"></td>
    <td>
	<input class="name" type="text" id="names1" ></td>
    <td>
	<input class="excercise" type="text" id="excercise1"></td>
	<td>
	<input class="calorie" type="text" id="calorie1"></td>
    <td class="status"></td>
    <td>
	<input class="wloss" type="text" id="wloss1"></td>
	<td class="status"></td>
  </tr>
  <tr>
    <td>
	<input class="date" type="text" id="date2"></td>
    <td>
	<input class="name" type="text" id="names2" ></td>
    <td>
	<input class="excercise" type="text" id="excercise2"></td>
	<td>
	<input class="calorie" type="text" id="calorie2"></td>
    <td class="status"></td>
    <td>
	<input class="wloss" type="text" id="wloss2"></td>
	<td class="status"></td>
  </tr>
  <tr>
    <td>
	<input class="date" type="text" id="date3"></td>
    <td>
	<input class="name" type="text" id="names3" ></td>
    <td>
	<input class="excercise" type="text" id="excercise"></td>
	<td>
	<input class="calorie" type="text" id="calorie3"></td>
    <td class="status"></td>
    <td>
	<input class="wloss" type="text" id="wloss3"></td>
	<td class="status"></td>
  </tr>
  <tr>
    <td>
	<input class="date" type="text" id="date4"></td>
    <td>
	<input class="name" type="text" id="names4" ></td>
    <td>
	<input class="excercise" type="text" id="excercise4"></td>
	<td>
	<input class="calorie" type="text" id="calorie4"></td>
    <td class="status"></td>
    <td>
	<input class="wloss" type="text" id="wloss4"></td>
	<td class="status"></td>
  </tr>
  
  <tr>
    <td>
	<input class="date" type="text" id="date5"></td>
    <td>
	<input class="name" type="text" id="names5" ></td>
    <td>
	<input class="excercise" type="text" id="excercise5"></td>
	<td>
	<input class="calorie" type="text" id="calorie5"></td>
    <td class="status"></td>
    <td>
	<input class="wloss" type="text" id="wloss5"></td>
	<td class="status"></td>
  </tr>
  
  <tr>
    <td>
	<input class="date" type="text" id="date6"></td>
    <td>
	<input class="name" type="text" id="names6" ></td>
    <td>
	<input class="excercise" type="text" id="excercise6"></td>
	<td>
	<input class="calorie" type="text" id="calorie"></td>
    <td class="status"></td>
    <td>
	<input class="wloss" type="text" id="wloss6"></td>
	<td class="status"></td>
  </tr> 
  
  <td class="ignore"></td>
  <td class="ignore"></td>
  <td>Total: </td>
  <td id="result"></td>
  <td>Total: </td>
  <td id="result1"></td>
</table>

  <br>
  
	<button class="submit" type="submit" id="submit">Submit</button>
	<input class="calorie" type="int" id="calorietotal"></td>
	<button class="reset" type="reset" id="reset">Reset</button>
	<input class="wloss" type="int" id="weighttotal"></td>
  </div>
  
</body>
</html>
  
  