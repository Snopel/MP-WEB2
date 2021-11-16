<?php
	include("includes/header.php");
	require("includes/mysqli_connect.php");
	if (isset($_POST["submit"])){
		$productId = $_POST["txtProductId"];
		$productName = $_POST["txtProductName"];
		$price = $_POST["txtPrice"];
		
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$image = $_FILES["fileToUpload"]["name"];
		$errors = "";
		
		$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
		
		if(file_exists($productId)){
			$errors = "ERROR: Product already exists";
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
				$query = "INSERT INTO products (productId, productName, price, productImg) VALUES ('$productId', '$productName', '$price', '$image')";
				$result = mysqli_query($dbc, $query);
				echo "Product added successfully.";
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
		<h1>Insert New Product</h1>
		<form action = "insert.php" method = "post" enctype = "multipart/form-data">
			Enter ID
			<input type = "text" name = "txtProductId" />
			<p>
			Enter Name
			<input type = "text" name = "txtProductName" />
			</p>
			Enter Price
			<input type = "text" name = "txtPrice" />
			</p>
			Select Display Image
			<p>
			<input type = "file" name = "fileToUpload" id = "fileToUpload">
			</p>
			<p>
			<input type = "submit" value = "Upload Image" name = "submit">
			</p>


		</form>
	</body>
</html>
<?php
	include("includes/footer.html");
?>