<?php
	include("includes/header.php");
	require("includes/mysqli_connect.php");
?>
	<script>
		document.getElementById("headTitle").innerHTML = "Search";
		document.getElementById("headBar").innerHTML = "Search";
		
		//Fade in the shade for unlogged users
		$(function(){
			$("#nologin").click(function(){
				$("#nologin").fadeOut(3000);
			});
		});
	</script>
	
	<div class="main" id = "mainContent">
	<?php if(isset($_SESSION['user_email']) && isset($_COOKIE['userEmail'])){ ?>
	<h2>Please enter a keyword to search our products.</h2>
		<form action = "search.php" method = "post">
			<fieldset>
				<legend>Keyword</legend>
				<div class = "form-grid">
					<div class = "form-item"><input type = "text" name = "txtSearch" required></div>
			</fieldset>
			<input type = "submit" name = "search" value = "Search" id = "btnstyle">
		</form>
	
	<?php //Using PHP to conduct the product search
		if(isset($_POST["search"])){
			$searchItem = $_POST["txtSearch"]; //Grabbing the search data
			$query = "SELECT * FROM products WHERE (productName = '$searchItem' OR productDescription = '$searchItem')";
			$result = mysqli_query($dbc, $query);
			$num = mysqli_num_rows($result);
			//Echo how many results were found
			echo "<h4>Your search returned $num results.</h4>";
			//Display the items
			while($row = mysqli_fetch_array($result)){
					$image = $row["productImg"];
					echo "<table>";
					echo "<tr>";
					echo "<td>" . $row["productId"];
					echo "<td>" . $row["productName"];
					echo "<td>" . $row["productDescription"];
					echo "<td>" . $row["price"];
					echo "<td>" . "<img src = 'images/$image' width = '70' height = '70' align = 'top'/>";
					echo "</tr>";
					echo "</table>";
			}
			//Add the search data to the Tracking table to be viewed by the admin
			$query = "INSERT INTO tracking (trackingDetails) VALUES ('$searchItem')";
			$result = mysqli_query($dbc, $query);
		}
	?>
	</div>
	<?php } else { ?>
		<h2>LOCKED CONTENT</h2>
		<br/>
		<img src = "images/nologin.png" id = "nologin">
		<br/>
		<h4>Please log in to see this page.</h4>
	<?php } ?>
	</div>
</div>
<?php
	include("includes/footer.html");
?>