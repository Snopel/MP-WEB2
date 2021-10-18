<?php
	$name = $_POST["txtName"];
	//Break character; looks for a space and marks the position
	$break = strPos($name, " ");
	//Use the break character to split
	$firstName = substr($name, 0, $break);
	$lastName = substr($name, ($break + 1));
	
	echo "First name: $firstName<br/>Last name: $lastName";
?>