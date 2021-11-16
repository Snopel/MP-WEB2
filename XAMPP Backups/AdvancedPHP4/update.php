<?php
	include("includes/header.php");
	require("includes/mysqli_connect.php");
	if(isset($_POST["update"])){
		$username = $_POST["txtUsername"];
		$password = $_POST["txtPassword"];
		$newpassword = $_POST["txtNewPassword"];
		$repassword = $_POST["txtRePassword"];
		$error1 = "";
		$error2 = "";
		$error3 = "";
		$error4 = "";
		
		if(empty($username)){
			$error1 = " Username cannot be blank";
		}
		if(empty($password)){
			$error2 = " Password cannot be blank";
		}
		if(empty($newpassword)){
			$error3 = " New password cannot be blank";
		}
		if(empty($repassword)){
			$error4 = " Please re-enter password";
		}
		
		if(empty($error1) && empty($error2) && empty($error3) && empty($error4)){
			//Begin the IF statements.
			if($newpassword == $repassword && $newpassword != $password){
				$query = "SELECT * from registry WHERE (username = '$username' and password = SHA('$password'))";
				$result = mysqli_query($dbc, $query);
				$num = mysqli_num_rows($result);
				
				if($num == 0){
					echo "The username or the password is incorrect";
				}//cannot login
				else{
					$query = "UPDATE registry SET password = SHA('$newpassword') WHERE (username = '$username' and password = SHA('$password'))";
					$result = mysqli_query($dbc, $query);
					header("Location: login.php");
				}//can login
			} 
			else {
				echo "ERROR: New password cannot be the same as old password, and new passwords must match.";
			}
		}
		
	}//end submit
	
?>

	<h1>Update Password</h1>
	<form action = "update.php" method = "post">
	<fieldset style = "{width: 700px;}">
		Enter username
		<input type = "text" name = "txtUsername" /> <span><?php if(!empty($error1)){ echo $error1; } ?></span>
		<p>
		Enter password
		<input type = "password" name = "txtPassword" /> <span><?php if(!empty($error2)){ echo $error2; } ?></span>
		</p>
		<p>
		Enter new password
		<input type = "password" name = "txtNewPassword" /> <span><?php if(!empty($error3)){ echo $error3; } ?></span>
		</p>
		<p>
		Confirm new password
		<input type = "password" name = "txtRePassword" /> <span><?php if(!empty($error4)){ echo $error4; } ?></span>
		</p>
		<input type = "submit" name = "update" value = "Update" />
	
	
	</fieldset>
	</form>
<?php
	include("includes/footer.html");
?>