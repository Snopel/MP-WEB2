<?php
	//Using PHP to include the header for far easier manipulation. Same with Footer.
	include("includes/header.php");
	require("includes/mysqli_connect.php"); //Accessing the nicholas_balliro database
	//Activating main PHP function on Form post
	if(isset($_POST["register"])){
		//Preparing all variables with the Form's information
		$email = mysqli_real_escape_string($dbc, $_POST["txtEmail"]);
		$password = mysqli_real_escape_string($dbc, $_POST["txtPassword"]);
		$confPass = mysqli_real_escape_string($dbc, $_POST["txtConfPass"]);
		$country = mysqli_real_escape_string($dbc, $_POST["txtCountry"]);
		$userId = 1;
		$idLoop = false;
		
		//Checking if password is greater than 4 characters
		if(strlen($password) > 4){
			//Checking if password and confPass are the same
			if($password == $confPass){
				//Query to check if User is already in the system
				$query = "SELECT * FROM accounts WHERE (userEmail = '$email')";
				$result = mysqli_query($dbc, $query);
				$num = mysqli_num_rows($result);
				//If user does not exist, insert the user into the database
				if($num == 0){
					//Code to decide UserId unique number
					do{
						$query = "SELECT * FROM accounts WHERE (userId = '$userId')";
						$result = mysqli_query($dbc, $query);
						$num = mysqli_num_rows($result);
						if($num == 0){
							break;
						} else {
							$userId += 1;
						}
					}while($idLoop = true);
					
					$query = "SELECT userId FROM accounts)";
					$query = "INSERT INTO accounts(userId, userEmail, userPassword, userCountry)
							VALUES ('$userId', '$email', SHA('$password'), '$country')";
					$result = mysqli_query($dbc, $query);
					header("Location: index.php");
				} else { //If user has been found
					echo "<h3>ERROR: Email already registered.</h3>";
				} 
			} else { //If passwords do not match
				echo "<h3>ERROR: Passwords do not match.</h3>";
			} 
		} else {
			echo "<h3>ERROR: Password must be longer than 4 characters</h3>";
		}
	}//End PHP
?>
	<script>
		//Now that the entire Head and part of the body is an Include, the only way to change the page titles is by using JavaScript for each page.
		document.getElementById("headTitle").innerHTML = "Register";
		document.getElementById("headBar").innerHTML = "Register";
	</script>
	
	<div class="main" id = "mainContent">
		<h2>Welcome to SnopelNet!</h2>
			<form action = "register.php" method = "post"> <!-- Allowing the form to Post to the PHP code above -->
				<fieldset>
					<legend>Account Creation</legend>
					<div class = "form-grid">
						<div class = "form-item"><label for = "email">Email:</label></div> <!-- Naming the textbox for postage -->
						<div class = "form-item"><input type = "text" name = "txtEmail" required></div>
						<div class = "form-item"><label for = "password">Password:</label></div>
						<div class = "form-item"><input type = "password" name = "txtPassword" required></div>
						<div class = "form-item"><label for = "confPass">Confirm Password:</label></div>
						<div class = "form-item"><input type = "password" name = "txtConfPass" required></div>
						<div class = "form-item"><label for = "country">Country:</label></div>
						<div class = "form-item"><input type = "text" name = "txtCountry" required></div>
				</fieldset>
				<fieldset>
					<legend>Agreement</legend>
					<br/>
					<input type = "checkbox" required><label for = "tc"> I have read and understood the terms and conditions</label><br/><br/>
				</fieldset>
				<input type = "submit" name = "register" value = "Create Account" id = "btnstyle"> <!-- Button that will submit Post -->
			</form>
	</div>
</div>
<?php
	include("includes/footer.html");
?>