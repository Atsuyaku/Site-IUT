<?php

$host="localhost";
$username="root";
$password="";
$db_name="smart house";
$tbl_name="users"; 

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$username=$_POST['username'];
$password=$_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){
	session_start();
	$_SESSION['loggedin'] = true;
	$_SESSION['username'] = $username;

	die(header("location:../index.php"));
} else{
	die(header("location:./login.html"));
}
