<?php
$DB_SERVER 		= "localhost";
$DB_USERNAME	= "root";
$DB_PASSWORD	= "";

$connect = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD) or die("Can't connect to server");
$db= mysqli_select_db($connect, "tuskys");

?>
