<?php
	include("includes/header.php");
	require("includes/mysqli_connect.php");
		$productId = $_GET['ID']; //this ID is from the page
		$query="SELECT * FROM products WHERE productId =
		'$productId'";
		$result = mysqli_query($dbc, $query);
		echo "<table border = '1' width = '400' height = '60' align = 'center'>";
		while($row = mysqli_fetch_array($result))
		{
		$image = $row["productImg"];
		echo "<tr>";
		echo "<th>Product ID</th>" . "<td>" . $row["productId"];
		echo "</tr>";
		echo "<tr>";
		echo "<th>Product Name</th>" ."<td>" . $row['productName'];
		echo "</tr>";
		echo "<tr>";
		echo "<th>Price</th>" . "<td>" . $row['price'];
		echo "</tr>";
		echo "<tr>";
		echo "<th>Picture</th>" ."<td>" . "<img src = 'images/$image'
		width = '30' height = '30' align = 'top'/>";
		echo "</tr>";
		}
		echo "</table>";
		
	include("includes/footer.html");	
?>
