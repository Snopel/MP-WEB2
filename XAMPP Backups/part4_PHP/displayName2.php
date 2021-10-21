<!DOCTYPE html>
<html>
	<head>
		<title>Enter Form</title>
	</head>
	<body>
		<?php
			$showForm = true;
			//receive the data
			if(isset($_POST["submit"])){
				$name = $_POST["txtName"];
				if(empty($name)){
					echo "ERROR: No name entered.";
				} else {
					echo "Hello $name";
					$showForm = false;
				}
			}
			
			if($showForm == true){
			//Links to below PHP to insert entire HTML inside this statement
		?>
		<h1>Enter Form</h1>
		<form action = "displayName2.php" method = "post">
		Enter your name here
		<input type = "text" name = "txtName"/>
		<p>
			<input type = "submit" name = "submit" value = "Click here to send"/>
		</p>
		</form>
		<?php
			}
			//Closing the link
		?>
	</body>
</html>