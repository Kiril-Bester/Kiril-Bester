<?php
error_reporting(E_ALL);
define('DB_HOST', 'localhost');
define('DB_NAME', 'Users');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db('Users', $con) or die("Failed to connect to MySQL: " . mysql_error());

function NewUser()
{
    $firstname = $_POST['firstname'];
    $efternamn = $_POST['efternamn'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $query     = "INSERT INTO WebsiteUsers (firstname,efternamn,email,password) VALUES ('$firstname','$efternamn','$email','$password')";
    $data = mysql_query($query) or die(mysql_error());
    if ($data) {
        echo "YOUR REGISTRATIOfafa";
    }
}

function SignUp()
{
    if (!empty($_POST['email'])) {
        $query = mysql_query("SELECT * FROM Websiteusers WHERE email = '$_POST[email]' ") or die(mysql_error());
        if (!$row = mysql_fetch_array($query) or die(mysql_error())) {
            NewUser();
        } else {
            echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
        }
    }
}

if (isset($_POST['submit'])) {
    SignUp();
}

?>

 <!DOCTYPE HTML> 
 <html> 
 <head> 
<title>Registrera Dig</title> 
<link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body> 
<table style=" position:absolute; left:550; top:200;">
<form method="POST" action="signup.php"> 
 <tr> <p style=" position:absolute; left:555; top:163;" >Namn</p><td> <input type="text" name="firstname"></td> 
 </tr> 
  <tr> <td>Efternamn</td><td> <input type="text" name="efternamn"></td> </tr> 
  <tr> <td>Email</td><td> <input type="text" name="email"></td></tr> 
  <tr> <td>Lösenord</td><td> <input type="password" name="password"></td> </tr> 
  <tr> <td>Bekräfta lösenord </td>
  <td><input type="password" name="cpass"></td> </tr>
   <tr> <td><input id="button" type="submit" name="submit" value="Skapa konto"></td> </tr> 
    </form> 
 </table>


   </body>
  </html>