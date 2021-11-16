<?php
	include("includes/header.php");
	require("includes/mysqli_connect.php");
	if(isset($_POST["search"])){
		$product = $_POST["txtProduct"];
		
		$query = "SELECT * from products WHERE productName = '$product'";
		$result = mysqli_query($dbc, $query);
		$num = mysqli_num_rows($result);
		
		if($num == 0){
			echo "ERROR: Product does not exist in the system.";
		}//cannot login
		else{
			while($row = mysqli_fetch_array($result)){
				echo "<p>" . $row["productId"] . "  " . $row["productName"] . " " . $row["price"] . "</p>";
			}
		}//can login
		
		
	}//end submit
	
?>

	<h1>Search</h1>
	<form action = "search.php" method = "post">
	<fieldset style = "{width: 700px;}">
		Enter Product Name
		<input type = "text" name = "txtProduct" />
		<p>
		<input type = "submit" name = "search" value = "Search" />
	
	
	</fieldset>
	</form>
<?php
	include("includes/footer.html");
?>