<!DOCTYPE html>
<html>
	<head>
		<title>Enter Form</title>
	</head>
	<body>
		<?php
		//receive the data
			if(isset($_POST["submit"])){
				$name = $_POST["txtName"];
			
				echo "Hello $name";
			} else {
				
			}
		?>
		<h1>Enter Form</h1>
		<form action = "displayName.php" method = "post">
		Enter your name here
		<input type = "text" name = "txtName"/>
		<p>
		<input type = "submit" name = "submit" value = "Click here to send"/>

		</form>
	</body>
</html>