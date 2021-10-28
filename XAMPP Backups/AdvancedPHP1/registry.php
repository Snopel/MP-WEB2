<?php
	include ('includes/header.html');
	require_once('includes/mysqli_connect.php'); //function called
	if(isset($_POST['registry']))
	{
		$username = $_POST['txtUsername'];
		$password = $_POST['txtPassword'];
		$confirmPass = $_POST['txtConfPass'];
			
		if($password == $confirmPass){
		 // insert the data from the registry Form
		 $query="INSERT INTO registry (username, password) VALUES('$username', SHA('$password'))";
		 $result = mysqli_query($dbc, $query);
		 header('Location: index.php');
		} else {
			echo "<h3>ERROR: Passwords do not match.</h3>";
		}
	}
?>
	<h1>Login to the Web Site</h1>
	<form action="registry.php" method="post">
		<fieldset style="{width:700px}">
			Enter Username:
			<input type="text" name="txtUsername" size="25" maxlength="30"/>
			<p>
			Enter Password:
			<input type="password" name="txtPassword" size="25" maxlength="30" />
			</p>
			<p>
			Confirm Password:
			<input type="password" name="txtConfPass" size="25" maxlength="30" />
			</p>
			<p align="center">
			<input type="submit" name="registry" value="Register" style="{width:100px}"/></p>
		</fieldset>
	</form>
<?php include ('includes/footer.html'); ?>