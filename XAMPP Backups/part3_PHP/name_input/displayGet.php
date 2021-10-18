<?php
	//Receive data
	$name = $_GET["txtName"];
	$number = $_GET["txtNumber"];

	if (is_numeric($number) == true){
		echo "<h2>Thank you $name.</h2>";
		echo "You will receive a call on $number.";
	} else {
		echo "<h2>ERROR</h2>";
		echo "Your number is invalid.";
	}
?>