<?php
	session_start(); 
	session_destroy(); // Destroy the session itself.
	setcookie ("optusmember",  "",  time() - 3600);// Destroy the user name cookie	
	header("Location: index.php");
	
?>
