<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'smart house');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " .     mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

$userName = $_POST['username'];
$password =  $_POST['password'];
$query = "INSERT INTO users (username,password) VALUES ('$userName','$password')";
$data = mysql_query ($query)or die(mysql_error());

if($data) { die(header("location: ./login.html'")); }
else { die(header("location: ./index.php")); }
