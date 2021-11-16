<?php
	$dbc = mysqli_connect  ('localhost','bing','abc123','optus'); //the database, user, password might be different, 
	
	if (mysqli_connect_errno()) { 
    	echo "FATAL ERROR:</br></br>Database Connection Failed: ", mysqli_connect_error() ; 
    	exit(); 
	} 
?>

