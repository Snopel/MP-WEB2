<?php
	include("includes/header.html");
	require("includes/mysqli_connect.php");
	if(isset($_POST["update"])){
		$username = $_POST["txtUsername"];
		$password = $_POST["txtPassword"];
		$newpassword = $_POST["txtNewPassword"];
		$repassword = $_POST["txtRePassword"];
		
		if($password != $newpassword && $newpassword == $repassword){
			$query = "SELECT * from registry WHERE (username = '$username' and password = SHA('$password'))";
			$result = mysqli_query($dbc, $query);
			$num = mysqli_num_rows($result);
			
			if($num==0){
				echo "The username or the password is incorrect, or you are not in the system";
			}//cannot update
			else{
				$query = "UPDATE registry SET password = '$newpassword' WHERE username = '$username' and password = SHA('$password')";
				$result = mysqli_query($dbc, $query);
				header("Location: index.php");
			}//can update
		}//checking all passwords
		else{
			echo "Please double check the passwords";
		}
		
	}//end submit
	
?>

	<h1>Update Form</h1>
	<form action = "update.php" method = "post">
	<fieldset style = "{width: 700px;}">
		Enter username
		<input type = "text" name = "txtUsername" />
		<p>
		Enter current password
		<input type = "password" name = "txtPassword" />
		</p>
		<p>
		Enter new password
		<input type = "password" name = "txtNewPassword" />
		</p>
		<p>
		Re-enter password
		<input type = "password" name = "txtRePassword" />
		</p>
		
		<input type = "submit" name = "update" value = "Update" />
	
	
	</fieldset>
	</form>
<?php
	include("includes/footer.html");
?>