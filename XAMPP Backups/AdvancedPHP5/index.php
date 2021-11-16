<?php
	include("includes/header.php");

	if(isset($_SESSION['user_name']) && isset($_COOKIE['optusmember']))   {		
	$user = $_SESSION['user_name'];
		echo "<h1>Welcome ".$user . " to Optus website";
		echo "</h1>";
		echo "<p>Body Content for logged in user</p>";
	}
	
	else{// not logged in

	echo "<h1>Please log in first.</h1>";
	
	}

	



	include("includes/footer.html");
?>