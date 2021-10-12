<!DOCTYPE html>
<html>
	<head>
		<title>Travel in The World</title>
		<link rel = "stylesheet" type = "text/css" href = "travel.css" />
	</head>
<body>
	<div id = "box">
		<h1>
		
		<?php
			echo "<img src = 'images/banner.gif'/>"; //MUST USE SINGLE QUOATATIONS INSIDE A DOUBLE
		?>
		
		</h1>
		<figure>
			<?php
				echo "<img src = 'images/snow.jpg' width = '300' height = '300'/>";
			?>
		</figure>
	
		<h2>Tours Australia</h2>
		
		<p>
		<span id = "company">Tours Australia</span> is an award winning travel company specialising in small group tours. <br/> 
		Adventure travel is a mind set and we've been bringing together like minded people <br/> 
		for over 20 years. We know how to get to the heart of a destination and our guides are <br/> 
		the best in the business. From the outback to the coast, we offer 3 unique tour styles<br/> 
		designed to deliver an unforgettable, authentic taste of Australia and New Zealand…<br/> 
		no matter what your budget is. We're the real deal. 
	<h2>Popular cities in Australia</h2>		
		<ul>
			<?php
				echo "<li>Melbourne</li>
					<li>Sydney</li>
					<li>Perth</li>
					<li>Adelaide</li>";
			?>
		</ul>
		</p>
		<p id = "footer">
			Information Technology - &copy; Melbourne Polytechnic
			
		</p>
	</div>
</body>
</html> 
