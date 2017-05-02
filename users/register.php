<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'smart house');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

$username = $_POST['username'];
$password =  $_POST['password'];

$sql="SELECT * FROM users WHERE username='$username'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1){die(header("location:./login.html?return=2"));}
else {
  $query = "INSERT INTO users (username,password) VALUES ('$userName','$password')";
  $data = mysql_query ($query)or die(mysql_error());

  if($data) { die(header("location: ./login.html?return=3")); }
}
