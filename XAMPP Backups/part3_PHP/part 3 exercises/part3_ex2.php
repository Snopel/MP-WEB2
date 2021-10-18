<?php
	$x1 = rand(1,6);
	$x2 = rand(1,6);
	$x3 = rand(1,6);
	echo "<img src = '../images/$x1.gif ' />";
	echo "<img src = '../images/$x2.gif ' />";
	echo "<img src = '../images/$x3.gif ' />";
	
	if ($x1 == $x2 and $x2 == $x3){
		echo "<h1>BINGO!!</h1>";
	} else {
		echo "<h2>Not quite.</h2>";
	}
?>