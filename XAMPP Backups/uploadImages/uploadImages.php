<?php
	if (isset($_POST["submit"])){
		require("mysqli_connect.php");
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$name = $_FILES["fileToUpload"]["name"];
		$errors = "";
		
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		
		if(file_exists($target_file)){
			$errors = "ERROR: File already exists.";
		}
		//If file is greater than 50 MB
		if($_FILES["fileToUpload"]["size"] > 50000000){
			$errors = $errors . "<br/>ERROR: File too large. 50 MB Max.";
		}
		//If file is not in JPG or GIF format
		if(strtolower($imageFileType) != "jpg" && strtolower($imageFileType) != "jpg"){
			$errors = $errors . "<br/>ERROR: Invalid file type. JPG or GIF only.";
		}
		//Output any errors and if none proceed to upload
		if($errors != ""){
			echo $errors;
		} else {
			if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
				$query = "INSERT INTO images (imageName) VALUES ('$name')";
				$result = mysqli_query($dbc, $query);
				echo "File upload successful";
			} else {
				echo "ERROR: Upload could not be completed.";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
	
	</head>
	<body>
		<h1>Upload Images</h1>
		<form action = "uploadImages.php" method = "post" enctype = "multipart/form-data">
			Select an image to upload
			<p>
			<input type = "file" name = "fileToUpload" id = "fileToUpload">
			</p>
			<p>
			<input type = "submit" value = "Upload Image" name = "submit">
			</p>


		</form>
	</body>
</html>