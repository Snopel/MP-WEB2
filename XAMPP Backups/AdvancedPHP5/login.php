<?php
	include("includes/header.php");
	require("includes/mysqli_connect.php");
	if(isset($_POST["login"])){
		$username = mysqli_real_escape_string($dbc, $_POST["txtUsername"]);
		$password = mysqli_real_escape_string($dbc, $_POST["txtPassword"]);
		
		$query = "SELECT * from registry WHERE (username = '$username' and password = SHA('$password'))";
		$result = mysqli_query($dbc, $query);
		$num = mysqli_num_rows($result);
		
		if($num==0){
			echo "The username or the password is incorrect";
		}//cannot login
		else{
			
			$row = mysqli_fetch_array($result);

			$_SESSION['user_name']=$row['username'];
			$name =$row['username'];
			setcookie("optusmember",  $name,  time()+60*60*2); // last 2 hours

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