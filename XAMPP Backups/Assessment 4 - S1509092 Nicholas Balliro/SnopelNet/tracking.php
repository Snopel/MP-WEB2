<?php
	//Using PHP to include the header for far easier manipulation. Same with Footer.
	include("includes/header.php");
	require("includes/mysqli_connect.php");
?>
	<script>
		//Now that the entire Head and part of the body is an Include, the only way to change the page titles is by using JavaScript for each page.
		document.getElementById("headTitle").innerHTML = "Tracking";
		document.getElementById("headBar").innerHTML = "Tracking";
		
		//Fade in the shade for unlogged users
		$(function(){
			$("#nologin").click(function(){
				$("#nologin").fadeOut(3000);
			});
		});
	</script>
	
	<div class="main" id = "mainContent">
	<!-- Making sure the email that is accessing is that of the site administrator's -->
	<?php if(isset($_SESSION['user_email']) && isset($_COOKIE['userEmail']) && $_SESSION['user_email'] == 'admin@snopelnet.com'){
		$query = "SELECT * FROM tracking";
		$result = mysqli_query($dbc, $query);
	?>
	<h2>TRACKING DATA</h2>
	<p>All search data is recorded below.</p>
	<img id = "breaker" src = "images/nail2.png" alt = "breaker"/>
	<table>
		<tr>
			<th>ID</th>
			<th>Item</th>
		</tr>
		<?php 
			while($row = mysqli_fetch_array($result))
			{ //fetch the array of the records
				echo "<tr>";
				echo "<td>" . $row["trackingId"];
				echo "<td>" . $row["trackingDetails"];
				echo "</tr>";
			} 
		?>
	</table>
	<img id = "breaker" src = "images/nail2.png" alt = "breaker"/>
	<?php } else { ?>
		<h2>ADMINISTRATOR ONLY</h2>
		<br/>
		<img src = "images/nologin.png" id = "nologin">
		<br/>
		<h4>Only the administrator can see this page.</h4>
	<?php } ?>
	</div>
</div>
<?php
	include("includes/footer.html");
?>