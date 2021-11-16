<?php
	include("includes/header.php");
	require("includes/mysqli_connect.php");
	if(isset($_POST["password"])){
		$email = $_POST["txtEmail"];
		$password = $_POST["txtPassword"];
		$newPass = $_POST["txtNewPass"];
		$confPass = $_POST["txtConfPass"];
		
		//This PHP function changes the password of a user.
		//First, check if the entered passwords are valid
		if($password != $newPass && $newPass == $confPass){
			//It is vital to make sure passwords are encrypted in both uses. Not doing so will cause the accounts to be inaccessible due to the passwords not matching up.
			$query = "SELECT * from accounts WHERE userEmail = '$email' and userPassword = SHA('$password')";
			$result = mysqli_query($dbc, $query);
			$num = mysqli_num_rows($result);
			//If no accounts were found
			if($num==0){
				echo "<h3>ERROR: Could not find a match. Did you enter your information correctly?</h3>";
			}
			//If the information is valid, begin the password reassignment. Again, encryption must be done BOTH times.
			//Not doing so here will make the account impossible to access and will have to be deleted.
			else{
				$query = "UPDATE accounts SET userPassword = SHA('$newPass') WHERE userEmail = '$email' and userPassword = SHA('$password')";
				$result = mysqli_query($dbc, $query);
				header("Location: index.php");
			}//Update successful
		}
		else{ //If passwords are invalid
			echo "<h3>ERROR: Passwords invalid. Make sure the new password is different</h3>";
		}
		
	}//End PHP
?>	
	<script>
		document.getElementById("headTitle").innerHTML = "Change Password";
		document.getElementById("headBar").innerHTML = "Change Password";
	</script>
	
	<div class="main" id = "mainContent">
		<h2>Can't log in? Change your password here!</h2>
			<form action = "password.php" method = "post">
				<fieldset>
					<legend>Account Details</legend>
					<div class = "form-grid">
						<div class = "form-item"><label for = "email">Email:</label></div>
						<div class = "form-item"><input type = "text" name = "txtEmail" required></div>
						<div class = "form-item"><label for = "password">Password:</label></div>
						<div class = "form-item"><input type = "password" name = "txtPassword" required></div>
						<div class = "form-item"><label for = "newPass">New Password:</label></div>
						<div class = "form-item"><input type = "password" name = "txtNewPass" required></div>
						<div class = "form-item"><label for = "confPass">Confirm Password:</label></div>
						<div class = "form-item"><input type = "password" name = "txtConfPass" required></div>
				</fieldset>
				<input type = "submit" name = "password" value = "Confirm" id = "btnstyle">
			</form>
	</div>
</div>
<?php
	include("includes/footer.html");
?>