<?php
	include("includes/header.php");
?>
	<script>
		document.getElementById("headTitle").innerHTML = "About Us";
		document.getElementById("headBar").innerHTML = "About Us";
	</script>
		<div class="main" id = "mainContent">
			<h2>About SnopelNet</h2>
			<p>
				We at SnopelNet are a humble startup organisation tasked with creating this website for Snopel
				as our very first project. <br/>
				As this is the beginning of our journey, we aimed to showcase our web design fundamentals and
				skills to a broader audience through this rather famous client and aim to better ourselves with
				constructive feedback and customer reviews so that we can improve on what we lacked through this
				project. <br/><br/>
				We at SnopelNet thank you for checking out our webpage and look forward to a future in design 
				potentially in bigger and more widespread innovation.
			</p>
			<h2>YouTube Channel</h2>
			<a href = "https://www.youtube.com/channel/UC0mhVyMqGUih1FcXm45Rz6w" target = "blank">
				<img id = "youtube" src = "images/youtubelink.png"/>
			</a>
			<img id = "breaker" src = "images/nail2.png" alt = "breaker"/>
			<h2>Location</h2>
			<iframe class = "mapframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3155.032006722245!2d144.99574311597135!3d-37.74239333773715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad644f0a0afc13f%3A0xd8ef18400c8126c0!2sMelbourne%20Polytechnic%20Preston%20Campus!5e0!3m2!1sen!2sau!4v1616549606802!5m2!1sen!2sau" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			<p>
				Our business is located in <b>Preston, Victoria</b>.<br/>
				We are a small organisation based within the precint of <i>Melbourne Polytechnic</i> and conduct
				our work within the campus. <br/>
				We aim to expand our business to our own individual headquarters someday, however for now we enjoy the
				assistance and sponsorship from the TAFE to kickstart our career.<br/>
			</p>
				<h3>Address:</h3>
			<p>
				77 St Georges Road <br/>
				Preston VIC, 3072 <br/>
				Australia <br/>
				<br/>
				<br/>
			</p>
			<img id = "breaker" src = "images/nail2.png" alt = "breaker"/>
			<h2>Subscription</h2>
			<form>
				<fieldset>
					<legend>Contact Information</legend>
					<div class = "form-grid">
						<div class = "form-item"><label for = "fname">First Name:</label></div>
						<div class = "form-item"><input type = "text" placeholder = "First Name" required></div>
						<div class = "form-item"><label for = "lname">Last Name:</label></div>
						<div class = "form-item"><input type = "text" placeholder = "Last Name" required></div>
						<div class = "form-item"><label for = "email">Email:</label></div>
						<div class = "form-item"><input type = "text" placeholder = "address@example.com" required></div>
						<div class = "form-item"><label for = "phone">Phone:</label></div>
						<div class = "form-item"><input type = "text" required></div>
						<div class = "form-item">State:</div>
						<div class = "form-item" id = "stategrid">
							<select name = "st" required>
								<option value = "null"></option>
								<option value = "vic">Victoria</option>
								<option value = "nsw">New South Wales</option>
								<option value = "qld">Queensland</option>
								<option value = "nt">Northern Territory</option>
								<option value = "wa">Western Australia</option>
								<option value = "sa">South Australia</option>
								<option value = "tas"> Tasmania</option>
							</select>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<legend>Additional Information</legend>
					<br/>
					<input type = "checkbox" required><label for = "tc"> I have read and understood the terms and conditions</label><br/><br/>
					<input type = "checkbox"><label for = "offers"> I wish to be sent the latest offers on merchandise and events</label><br/><br/>
					<input type = "checkbox"><label for = "news"> I wish to be sent the latest news for SnopelNet</label><br/><br/>
				</fieldset>
				<input type = "submit" value = "Submit" id = "btnstyle">
			</form>
			<br/>
		</div>
	</div>
<?php
	include("includes/footer.html");
?>
