<?php
	include("includes/header.php");
	require("includes/mysqli_connect.php");
	if(isset($_POST["registry"])){
		$username = $_POST["txtUsername"];
		$password = $_POST["txtPassword"];
		$repassword = $_POST["txtRePassword"];
		$errors = "";
		
		if(empty($username)){
			$errors = "<h4>You forgot to enter username</h4>";
		}//check username
		if(empty($password)){
			$errors = $errors . "<h4>You forgot to enter password</h4>";
		}//check passwordV
		if(empty($repassword)){
			$errors = $errors . "<h4>You forgot to confirm password</h4>";
		}//check repassword
		
		if(empty($errors)){
				if($password == $repassword){
					
					$query = "SELECT * from registry WHERE (username = '$username')";
					$result = mysqli_query($dbc, $query); //processing the query
					$num = mysqli_num_rows($result);
					if($num==0){
						$query = "INSERT INTO registry(username, password) VALUES ('$username',SHA('$password'))";
						$result = mysqli_query($dbc, $query); //processing the query
						
						header("Location: index.php"); //redirect the page to load index.php
					}//no user found
					else{
						echo "You have already registered";
					}
						
				}//passwords same
				else{
					echo "passwords are different";
				}
		}//no errors
		else{
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