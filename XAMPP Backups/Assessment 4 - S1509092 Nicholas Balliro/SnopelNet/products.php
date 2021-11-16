<?php
	//Using PHP to include the header for far easier manipulation. Same with Footer.
	include("includes/header.php");
	require("includes/mysqli_connect.php");
?>
	<script>
		//Now that the entire Head and part of the body is an Include, the only way to change the page titles is by using JavaScript for each page.
		document.getElementById("headTitle").innerHTML = "Products";
		document.getElementById("headBar").innerHTML = "Products";
		
		//Fade in the shade for unlogged users
		$(function(){
			$("#nologin").click(function(){
				$("#nologin").fadeOut(3000);
			});
		});
	</script>
	
	<div class="main" id = "mainContent">
		<?php if(isset($_SESSION['user_email']) && isset($_COOKIE['userEmail'])){
			$query = "SELECT * FROM products";
			$result = mysqli_query($dbc, $query);
		?>
		<h2>PRODUCTS LIST</h2>
		<p>Below are a list of products available for purchase.</p>
		<img id = "breaker" src = "images/nail2.png" alt = "breaker"/>
		<table>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Description</th>
				<th>Price</th>
				<th>Image</th>
			</tr>
			<?php 
				while($row = mysqli_fetch_array($result))
				{ //fetch the array of the records
					$image = $row["productImg"];
					echo "<tr>";
					echo "<td>" . $row["productId"];
					echo "<td>" . $row["productName"];
					echo "<td>" . $row["productDescription"];
					echo "<td>" . $row["price"];
					echo "<td>" . "<img src = 'images/$image' width = '70' height = '70' align = 'top'/>";
					echo "</tr>";
				} ?>
		</table>
		<img id = "breaker" src = "images/nail2.png" alt = "breaker"/>
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
