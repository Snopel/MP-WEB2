<?php
	include("includes/header.php");
	require("includes/mysqli_connect.php");
	if(isset($_POST["search"])){
		$productname = $_POST["txtProductName"];
		
		
		$query = "SELECT * from products WHERE (productName = '$productname')";
		$result = mysqli_query($dbc, $query);
		$num = mysqli_num_rows($result);
		
		if($num==0){
			echo "No product with this name";
		}//cannot find the product
		else{
			while($row=mysqli_fetch_array($result)){
				
				echo "<p>" . $row["productId"] . " " . $row["productName"] . " " . $row["price"] . "</p>";
				
			}//end while
			
		}//can login
		
		
	}//end submit
	
?>

	<h1>Search Form</h1>
	<form action = "search.php" method = "post">
	<fieldset style = "{width: 700px;}">
		Enter Product Name
		<input type = "text" name = "txtProductName" />
		<p>
		
		
		<input type = "submit" name = "search" value = "Search" />
	
	
	</fieldset>
	</form>
<?php
	include("includes/footer.html");
?>