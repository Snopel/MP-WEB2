<?php
	//File: mysqli_connect.php
	$dbc = mysqli_connect ('localhost', 'bing', 'abc123', 'warehouse');
	if (mysqli_connect_errno()) {
		echo "FATAL ERROR:</br></br>Database Connection Failed: ",
		mysqli_connect_error() ;
		exit();
	}
?>