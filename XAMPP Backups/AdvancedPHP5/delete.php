<?php
	require("includes/mysqli_connect.php");
	
	$id = $_GET["id"];
	
	$query = "DELETE from products WHERE (productId = '$id')";
	$result = mysqli_query($dbc, $query);
	
	if($result){
		header("Location: viewall.php");
	}
	else{
		echo "You have a problem to delete the record";
	}



?>