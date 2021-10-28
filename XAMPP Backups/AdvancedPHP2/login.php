<?php
	include("includes/header.html");
	require("includes/mysqli_connect.php");
	if(isset($_POST["login"])){
		$username = $_POST["txtUsername"];
		$password = $_POST["txtPassword"];
		
		//Query to match entered user to any in the system
		$query = "SELECT * FROM registry WHERE (username = '$username' AND password = SHA('$password'))"; //SHA will match encrypted passwords
		$result = mysqli_query($dbc, $query);
		$num = mysqli_num_rows($result);
		
		//Make sure the fields are not blank
		if (empty($username) || empty($password)){
			echo "<h4>ERROR: Fields cannot be blank</h4>";
		} else {
			//If the user is not found
			if($num == 0){
				echo "<h4>ERROR: Username or Password is incorrect.</h4>";
			} else {
				header("Location: index.php");
			}
		}
	}//end submit
	
?>
	<h1>Login</h1>
	<form action = "login.php" method = "post">
	<fieldset style = "{width: 700px;}">
		Username
		<input type = "text" name = "txtUsername" />
		<p>
		Password
		<input type = "password" name = "txtPassword" />
		</p>
		<input type = "submit" name = "login" value = "Login" />
	</fieldset>
	</form>
<?php
	include("includes/footer.html");
?>