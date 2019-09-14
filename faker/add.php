<html>
<head>
	<title>Add Data</title>
</head>

<body>

<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = $_POST['ProductName'];
	$description = $_POST['ProductDescription'];
	$price = $_POST['ProductPrice'];
	$quantity = $_POST['ProductQuantity'];
		
	// checking empty fields
	if(empty($name) || empty($description) || empty($price)|| empty($quantity)) {
				
		if(empty($name)) {
			echo "<font color='red'>Field is empty.</font><br/>";
		}
		
		if(empty($description)) {
			echo "<font color='red'>Field is empty.</font><br/>";
		}
		
		if(empty($price)) {
			echo "<font color='red'>Field is empty.</font><br/>";
		}
		if(empty($quantity)) {
			echo "<font color='red'>Field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database		
		$sql = "INSERT INTO users(ProductName, ProductDescription, ProductPrice,ProductQuantity) VALUES(:ProductName, :ProductDescription, :ProductPrice,:ProductQuantity)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':ProductName', $name);
		$query->bindparam(':ProductDescription', $description);
		$query->bindparam(':ProductPrice', $price);
		$query->bindparam(':ProductQuantity', $quantity);
		$query->execute();
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
