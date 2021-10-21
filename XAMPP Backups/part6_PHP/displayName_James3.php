<?php
	//File: displayName.php
	require_once("mysqli_connect.php"); //function called
	$query = "SELECT * FROM customers WHERE customerId = '002' and customerName = 'James Smith'";
	$result = mysqli_query($dbc, $query);
	while($row = mysqli_fetch_array($result))
	{ //fetch the array of the records
		echo "<p>" . $row["customerId"] . "<br/>" . $row["customerName"] . "<br/>" . $row["cardType"] . "<br/>" . $row["cardNumber"] . "<br/>" . $row["expiredDate"] . "</p>" ;
	}
?>