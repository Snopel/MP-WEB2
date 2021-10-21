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
				$number = $_POST["txtNumber"];
				if(empty($number)){
					echo "ERROR: No number entered.";
				} 
				else {
					if(is_numeric($number)){
						echo "The number entered is $number";
						$showForm = false;
					}
					else{
						echo "Wrong input, it is not a number";
					}
				}
			}
			
			if($showForm){
		?>
		<h1>Enter Form</h1>
		<form action = "display_number.php" method = "post">
		Enter a number here
		<input type = "text" name = "txtNumber"/>
		<p>
		<input type = "submit" name = "submit" value = "Click here to send"/>

		</form>
		<?php
			}
		?>
	</body>
</html>