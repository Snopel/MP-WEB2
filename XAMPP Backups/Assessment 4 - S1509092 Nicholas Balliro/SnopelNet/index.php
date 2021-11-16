<?php
	//Using PHP to include the header for far easier manipulation. Same with Footer.
	include("includes/header.php");
?>
	<script>
		//Now that the entire Head and part of the body is an Include, the only way to change the page titles is by using JavaScript for each page.
		document.getElementById("headTitle").innerHTML = "SnopelNet";
		document.getElementById("headBar").innerHTML = "SnopelNet";
	</script>
	<!-- The main section -->
	<div class="main" id = "mainContent">
		<h2>Welcome!</h2>
		<p>Welcome to <b>SnopelNet</b>!</p>
		<p>
			This is a humble gallery for the artist <b>Snopel</b> to showcase his many works and creations for any willing
			outsider to view, along with updates on his carreer and upcoming public events!
		</p>
		<!-- Inserting a breaker image to separate information with a bit more 'pop' -->
		<img id = "breaker" src = "images/nail2.png" alt = "breaker"/>
		<h2>News</h2>
		<div class = "date">18/03/2021</div>
		<h3>The All-Australia Art Tour is back on!</h3>
		<p>
			Good news, all!<br/><br/>
			With the Covid-19 situation looking a lot more workable, the tour that was previously planned in December is
			back on! <br/>
			Starting from the <b>22nd of March</b> we will be re-initiating the national art tour of Australia, where our very own <b>Snopel</b>
			will be showcasing his works and travelling the country! <br/><br/>
			Come see us at the following sites:<br/>
		</p>
		<!-- This seemed to be the best way to layout all the information cleanly and coherently -->
		<table>
			<tr>
				<th>Date</th>
				<th>Location</th>
				<th>State</th>
				<th>Event</th>
			</tr>
			<tr>
				<td>22/03</td>
				<td>Federation Square</td>
				<td>VIC</td>
				<td>Music Performance</td>
			</tr>
			<tr>
				<td>24/03</td>
				<td>National Gallery of Victoria</td>
				<td>VIC</td>
				<td>Art Showcase</td>
			</tr>
			<tr>
				<td>27/03</td>
				<td>Sydney Opera House</td>
				<td>NSW</td>
				<td>Music Performance</td>
			</tr>
			<tr>
				<td>28/03</td>
				<td>Art Gallery of NSW</td>
				<td>NSW</td>
				<td>Art Showcase</td>
			</tr>
			<tr>
				<td>31/03</td>
				<td>Pacific Fair</td>
				<td>QLD</td>
				<td>Music Performance</td>
			</tr>
			<tr>
				<td>02/04</td>
				<td>Queensland Museum</td>
				<td>QLD</td>
				<td>Art Showcase</td>
			</tr>
			<tr>
				<td>05/04</td>
				<td>Ayer's Rock</td>
				<td>NT</td>
				<td>Music Performance</td>
			</tr>
			<tr>
				<td>07/04</td>
				<td>Mbantua Fine Art Gallery</td>
				<td>NT</td>
				<td>Art Showcase</td>
			</tr>
			<tr>
				<td>10/04</td>
				<td>Ningaloo Reef Marine Park</td>
				<td>WA</td>
				<td>Music Performance</td>
			</tr>
			<tr>
				<td>12/04</td>
				<td>Art Gallery of Western Australia</td>
				<td>WA</td>
				<td>Art Showcase</td>
			</tr>
			<tr>
				<td>15/04</td>
				<td>Adelaide Zoo</td>
				<td>SA</td>
				<td>Music Performance</td>
			</tr>
			<tr>
				<td>17/04</td>
				<td>Maritime Museum</td>
				<td>SA</td>
				<td>Art Showcase</td>
			</tr>
			<tr>
				<td>22/04</td>
				<td>Tasman National Park</td>
				<td>TAS</td>
				<td>Music Performance</td>
			</tr>
			<tr>
				<td>24/04</td>
				<td>Queen Victoria Museum</td>
				<td>TAS</td>
				<td>Art Showcase</td>
			</tr>
		</table>
		<p>
			As we are only a small business at the moment, all these viewings will be completely <b>FREE</b>! So if you 
			happen to be in the area during the above dates, feel free to come see us and show some support. We will
			also be selling merchandise for the occasion. <br/>
			<br/>
			We hope to see you all there!
		</p>
		
		<div class = "date">16/12/2020</div>
		<h3>Art Tour Cancelled...</h3>
		<p>
			Greetings all, <br/><br/>
			Unfortunately due to the recent Chrismtas lockdown, we have decided it is no longer safe to host our planned
			Australia tour. <br/>
			It is probably best that we wait until this virus calms down to a long streak of 0 case days before we think about
			working the times out again, as we want this to be a free event and do not want to lose any more funding if it will
			be canceled again. <br/>
			<br/>
			On the behalf of the SnopelNet team, we apologise for the inconvenience and disappointment and will endeavour to 
			roll this fantastic event out again once it is deemed safe.<br/>
			We thank you for your patience and your support.
		</p>
		
		<div class = "date">26/11/2020</div>
		<h3>Surprise Soiree was a success!</h3>
		<!-- Inserting an image onto the page cleanly -->
		<figure class = "imgright">
			<img class = "imgframe" src = "images/soiree.png" alt = "Soiree Photo"/>
		</figure>
		<p>
			Greetings all,<br/><br/>
			We at the SnopelNet team would like to thank each and every one of you for your support in our sudden soiree event at the
			rural town of Wallan, VIC. We would also like to personally thank the regional college for allowing us to conduct such
			a wonderful event for the VCE students who were struggling with their studies during the COVID-19 pandemic.<br/>
			We thought this would be a nice way to lift the spirits of these troubled young minds and ease their worries with some
			good old fashioned music therapy!<br/>
			The turnout was a lot more wholesome than we expected and once again, we would like to thank you for joining us in
			lending a hand to these youths in this horrible time.<br/>
			<br/>
			We hope all who showed up enjoyed the performance!
		</p>
		<br/>
		<!-- A mock button designed to display older information when pressed like a normal news network -->
		<div class = "linkstyle">
			<a href="#">Older News...</a>
		</div>
	</div>
</div>
<?php
	include("includes/footer.html");
?>
