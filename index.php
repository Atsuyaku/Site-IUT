<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    header('Location: login.html');
	exit();
}	
?>

<a class="btn" href="logout.php">Log Out</a>
