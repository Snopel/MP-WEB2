<?php
	//Using PHP to include the header for far easier manipulation. Same with Footer.
	include("includes/header.php");
	require("includes/mysqli_connect.php"); //Accessing the nicholas_balliro database
	//Activating main PHP function on Form post
	if(isset($_POST["login"])){
		//Preparing all variables with the Form's information
		$email = mysqli_real_escape_string($dbc, $_POST["txtEmail"]);
		$password = mysqli_real_escape_string($dbc, $_POST["txtPassword"]);
		
		//Query to see if the account exists
		$query = "SELECT * FROM accounts WHERE (userEmail = '$email' and userPassword = SHA('$password'))";
		$result = mysqli_query($dbc, $query);
		$num = mysqli_num_rows($result);
		
		//If the user is not found, display an error. Otherwise, log in.
		if($num == 0){
			echo "<h3>ERROR: Email or Password is incorrect.</h3>";
		} else {
			$row = mysqli_fetch_array($result);
			$_SESSION['user_email'] = $row['userEmail'];
			$email = $row['userEmail'];
			setcookie("userEmail", $email, time()+60*60*2); //Cookie lasts 2 hours before it expires
			
			header("Location: index.php");
		}
	} //End PHP
?>
	<script>
		//Now that the entire Head and part of the body is an Include, the only way to change the page titles is by using JavaScript for each page.
		document.getElementById("headTitle").innerHTML = "Login";
		document.getElementById("headBar").innerHTML = "Login";
	</script>
	
	<div class="main" id = "mainContent">
		<h2>Welcome back!</h2>
			<form action = "login.php" method = "post"> <!-- Allowing the form to Post to the PHP code above -->
				<fieldset>
					<legend>Account</legend>
					<div class = "form-grid">
						<div class = "form-item"><label for = "email">Email:</label></div> <!-- Naming the textbox for postage -->
						<div class = "form-item"><input type = "text" name = "txtEmail" required></div>
						<div class = "form-item"><label for = "password">Password:</label></div>
						<div class = "form-item"><input type = "password" name = "txtPassword" required></div>
				</fieldset>
				<input type = "submit" name = "login" value = "Login" id = "btnstyle"> <!-- Button that will submit Post -->
			</form>
	</div>
</div>
<?php
	include("includes/footer.html");
?>