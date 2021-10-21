<?php
	//File: displayName.php
	require_once("mysqli_connect.php"); //function called
	$query = "SELECT customerName FROM customers";
	$result = mysqli_query($dbc, $query);
	while($row = mysqli_fetch_array($result))
	{ //fetch the array of the records
		echo "<p>" . $row["customerName"] . "</p>";
	}
?>