<?php
	include("includes/header.html");
	require("includes/mysqli_connect.php");
	if(isset($_POST["registry"])){
		$username = $_POST["txtUsername"];
		$password = $_POST["txtPassword"];
		$repassword = $_POST["txtRePassword"];
		
		//Checking empty fields
		if(empty($username) || empty($password) || empty($repassword)){
			$errors = "<h4>ERROR: Fields cannot be left blank</h4>";
		}
		if(empty($errors)){
			if($password == $repassword){
				//NEW COMMANDS - Checking if your username is already in the system
				$query = "SELECT * FROM registry WHERE (username = '$username')";
				$result = mysqli_query($dbc, $query);
				$num = mysqli_num_rows($result); 
				//If the user has not been found, add it
				if ($num == 0){
					$query = "INSERT INTO registry(username, password) VALUES ('$username',SHA('$password'))";
					$result = mysqli_query($dbc, $query); //processing the query
					
					header("Location: index.php"); //redirect the page to load index.php
				} else {
					echo "<h4>ERROR: User already registered</h4>";
				}
			}//passwords same
			else{
				echo "<h4>ERROR: Passwords do not match</h4>";		
			}
		} else {
			echo $errors;
		}
	}//end submit
	
?>

	<h1>Register Form</h1>
	<form action = "registry.php" method = "post">
	<fieldset style = "{width: 700px;}">
		Create username
		<input type = "text" name = "txtUsername" />
		<p>
		Create password
		<input type = "password" name = "txtPassword" />
		</p>
		<p>
		Re-enter password
		<input type = "password" name = "txtRePassword" />
		</p>
		<input type = "submit" name = "registry" value = "Register" />
	
	
	</fieldset>
	</form>
<?php
	include("includes/footer.html");
?>