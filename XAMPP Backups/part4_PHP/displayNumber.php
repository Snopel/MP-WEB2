<?php
	//receive the data
	$number = $_POST["txtNumber"];
	
	if(is_numeric($number)){
		echo "The number entered is $number";
	}
	else{
		echo "Wrong input, it is not a number";
	}


?>