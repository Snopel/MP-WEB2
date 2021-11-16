<?php
	session_start(); 
	session_destroy(); // Destroy the session itself.
	setcookie ("userId",  "",  time() - 3600);// Destroy the user name cookie	
	header("Location: index.php");
?>
