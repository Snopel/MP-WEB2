<?php
	include("includes/header.php");
	require("includes/mysqli_connect.php");
	if(isset($_SESSION['user_name']) && isset($_COOKIE['optusmember']))   {	
		$query = "SELECT * FROM products";
		$result = mysqli_query($dbc, $query);
		
		echo "<table border = '1' width = '400' height = '60' align = 'center'>";
		echo "<tr><th>Product Id</th><th>Product name</th><th>Price</th><th>Product
		Image</th><th>View Details</th><th>Delete Product</th></tr>";
		while($row = mysqli_fetch_array($result))
		{ //fetch the array of the records
		$image = $row["productImg"];
		echo "<tr>";
		echo "<td>" . $row["productId"];
		echo "<td>" . $row["productName"];
		echo "<td>" . $row["price"];
		echo "<td>" . "<img src = 'images/$image' width = '30' height = '30' align =
		'top'/>";
		echo "<td><a href='productDetails.php?ID=",$row['productId'],"'>", 'View',
		"</a></td>";
		echo "<td><a href='delete.php?id=", $row['productId'], "'onclick='return
		confirm (\"Are you sure! you want to delete the quote?\");'>Delete</a></td>";
		echo "</tr>";
		}
		echo "</table>";
	}//logged in
	
	else{// not logged in

	echo "<h1>Please log in first.</h1>";
	
	}
	include("includes/footer.html");
?>
