<?php
	//Using PHP to include the header for far easier manipulation. Same with Footer.
	include("includes/header.php");
/*?>
	<script>
		//Now that the entire Head and part of the body is an Include, the only way to change the page titles is by using JavaScript for each page.
		document.getElementById("headTitle").innerHTML = "Logout";
		document.getElementById("headBar").innerHTML = "Logout";
	</script>
	
	<div class="main" id = "mainContent">
		<h2>TO BE EDITED</h2>
	</div>
</div>
<?php*/
	session_start(); 
	session_destroy(); // Destroy the session itself.
	setcookie ("userEmail",  "",  time() - 3600);// Destroy the user name cookie	
	header("Location: index.php");
	//include("includes/footer.html");
?>