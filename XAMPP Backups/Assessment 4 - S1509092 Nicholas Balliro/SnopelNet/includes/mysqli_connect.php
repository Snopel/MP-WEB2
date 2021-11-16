
	<?php
	$dbc = mysqli_connect  ('localhost','s1509092','antonio','nicholas_balliro');
	
	if (mysqli_connect_errno()) { 
    	echo "FATAL ERROR:</br></br>Database Connection Failed: ", mysqli_connect_error() ; 
    	exit(); 
	} 
?>

