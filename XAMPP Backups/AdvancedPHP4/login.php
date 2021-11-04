<?php
	include("includes/header.html");
	require("includes/mysqli_connect.php");
	if(isset($_POST["login"])){
		$username = $_POST["txtUsername"];
		$password = $_POST["txtPassword"];
		
		$query = "SELECT * from registry WHERE (username = '$username' and password = SHA('$password'))";
		$result = mysqli_query($dbc, $query);
		$num = mysqli_num_rows($result);
		
		if($num==0){
			echo "The username or the password is incorrect";
		}//cannot login
		else{
			header("Location: index.php");
		}//can login
		
		
	}//end submit
	
?>

	<h1>Login Form</h1>
	<form action = "login.php" method = "post">
	<fieldset style = "{width: 700px;}">
		Enter username
		<input type = "text" name = "txtUsername" />
		<p>
		Enter password
		<input type = "password" name = "txtPassword" />
		</p>
		
		<input type = "submit" name = "login" value = "Login" />
	
	
	</fieldset>
	</form>
<?php
	include("includes/footer.html");
?>