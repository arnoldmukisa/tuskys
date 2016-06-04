<?php

require('config.php');

session_start(); // Starting Session
if (isset($_POST['login'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
	echo 'Input username and password';
}
else
{

// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connect, $username);
$password = mysqli_real_escape_string($connect, $password);
$password = md5($password);

// // SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connect, "SELECT * from users where password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);
if ($rows === 1) {



$_SESSION['login_user']=$username; // Initializing Session

header("location: ../snippets/home.php"); // Redirecting To Other Page
        
        
} else {
// $error = "Username or Password is invalid";
 echo "Enter Valid Username or Password";
}
mysqli_close($connect); // Closing Connection
}
}
?>