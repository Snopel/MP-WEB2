<!DOCTYPE html>
<html>

	<body>
		<?php
			if (isset($_POST["submit"])) {
				require("mysqli_connect.php");
				$name = $_POST["firstname"] . " " . $_POST["lastname"];
				
				if (empty($name)){
					echo "ERROR: No name given.";
				}
				else{
					$query = "SELECT * FROM customers WHERE customerName = '$name'";
					$result = mysqli_query($dbc, $query);
					
					while($row = mysqli_fetch_array($result)){
						echo "<p>FOUND: " . $row["customerName"] . "</p>";
					}
				}
			}
		?>
		
		<h1>SearchForm</h1>
		
		<form action = "search.php" method = "post">
			Enter first name
			<input type = "text" name = "firstname" />
			<p>
			Enter last name
			<input type = "text" name = "lastname" />
			</p>
			
			<input type = "submit" name = "submit" value = "Search"/>
		
		
		
		</form>
		
	</body>
</html>