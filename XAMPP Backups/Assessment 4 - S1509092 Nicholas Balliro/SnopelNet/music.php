<?php
	include("includes/header.php");
?>
	<script>
		document.getElementById("headTitle").innerHTML = "Music";
		document.getElementById("headBar").innerHTML = "Music";
	</script>
	<div class="main" id = "mainContent">
			<h2>Guitar Compositions</h2>
			<p>
				Below are some of Snopel's classical guitar performances as seen on his YouTube channel.
			</p>
			<!-- Description List: Used to list the titles and descriptions of each item -->
			<dl>
				<!-- Embedding videos via YouTube -->
				<iframe class = "imgframe vidframe" width="560" height="315" src="https://www.youtube.com/embed/gs0NlvJOnz8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<dt>Intro Theme - Hollow Knight</dt>
					<dd>
						This is the intro theme to the famous video game <i>Hollow Knight</i>.<br/>
						Composed by Christopher Larkin, Snopel loved this gorgeous, ambient introduction
						to such an atmosphericly intriguing game and decided to arrange it as an acoustic
						classical guitar arrangement to embrace the calming tone of this song.<br/>
						<p class = "copyright">
							Composer: Christopher Larkin, Team Cherry<br/>
							Arranged by: Nicholas Balliro, Snopel
						</p>
						<br/>
					</dd>
				<iframe class = "imgframe vidframe" width="560" height="315" src="https://www.youtube.com/embed/z4R4PmlfdG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<dt>White Palace - Hollow Knight</dt>
					<dd>
						Further into the musically enriched  of <i>Hollow Knight</i>, there is a
						certain area of Hallownest named The White Palace which Snopel admitted was
						his absolute favourite score in the game and just had to arrange it into his
						own musical style of fingerstyle classical guitar. Snopel wished to fully encapsulate
						the brilliance of Christopher Larkin's music and hence made this particular composition
						full length.
						<p class = "copyright">
							Composer: Christopher Larkin, Team Cherry<br/>
							Arranged by: Nicholas Balliro, Snopel
						</p>
						<br/>
					</dd>
				<iframe class = "imgframe vidframe" width="560" height="315" src="https://www.youtube.com/embed/nxpxRbZ9kOQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<dt>Lobby - Dragonball FighterZ</dt>
					<dd>
						Having an avid interest in pop culture, one other work Snopel has a particular
						interest in is that of <i>Dragonball</i>. This track in particular came from the
						Arc Systemworks fighter known as <i>Dragonball FighterZ</i>, which had a plethora
						of amazing scores. Snopel loved the Lobby music and was inspired to 
						make another game score arrangement into his classical acoustic ensemble.
						<p class = "copyright">
							Composer: Bandai-Namco<br/>
							Arranged by: Nicholas Balliro, Snopel
						</p>
						<br/>
					</dd>
			</dl>
			<!-- Mock button to display more videos... -->
			<div class = "linkstyle">
				<a href="#">More...</a>
			</div>
		</div>
	</div>
<?php
	include("includes/footer.html");
?>
