<?php 
	//Starting the session
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "stylesheet" href = "snopelnet.css" />
		<link rel = "icon" href="images/icon.png" />
		<title id = "headTitle"></title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	</head>
	<body>
		<!-- This Div is the layout for the entire document -->
		<div id = "box">
			<!-- The header image box designed to be the consistent title card for every page -->
			<div id = "header">
				<h1 id = "headBar"></h1>
			</div>
			<!-- Display logged in user -->
			<?php 
			if(isset($_SESSION['user_email']) && isset($_COOKIE['userEmail'])){
				if($_SESSION['user_email'] == 'admin@snopelnet.com'){
					echo "<div id = 'login'>Logged in as <b>Administrator</b>.</div>";
				} else {
					echo "<div id = 'login'>Logged in as <b>" . $_SESSION['user_email'] . "</b>.</div>";
				} 
			}
			?>
			
			<!-- Navigation bar, replacing the links with vectored buttons -->
			<div id = "contents">
				<div class="menu">
					<a href="index.php">Home</a>
					<a href="music.php">Music</a>
					<a href="artwork.php">Artwork</a>
					<a href="aboutus.php">About Us</a>
					<h4>STORE</h4>
					<a href="login.php">Login</a>
					<a href="register.php">Register</a>
					<a href="password.php">Change Password</a>
					<a href="products.php">Products</a>
					<a href="search.php">Search</a>
					<a href="tracking.php" id="trackPage">Tracking</a>
					<a href="logout.php">Logout</a>
				</div>