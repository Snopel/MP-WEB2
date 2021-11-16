<?php
	require("includes/mysqli_connect.php");
	
	$id = $_GET["id"];
	
	$query = "DELETE FROM products WHERE productId = '$id'";
	$result = mysqli_query($dbc, $query);
	
	if($result){
		header("Location: viewall.php");
	} else {
		echo "ERROR: Something went wrong deleting this record.";
	}
	
?>