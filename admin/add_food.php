<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php 
	if (isset ($_POST['Submit'])){
		$target = "../deliverysystem/picture".basename($_FILES['photo']['name']);
		
		include 'dbconnect.php';
		$foodName = $_POST['name'];
		$foodDesc = $_POST['description'];
		$foodPrice = $_POST['price'];
		$photo = $_FILES['photo']['name'];
		$foodCategory = $_POST['category'];
	
		$result = mysql_query("INSERT INTO food(FoodName,FoodDescription,FoodPrice,FoodPhoto,FoodCategory) VALUES ('$foodName','$foodDesc','$foodPrice','$photo','$foodCategory')") ;
	
		if($result){
			echo "Add successfully ! ";
			header('Refresh: 2; URL = foods.php'); }
		
		else 
			echo "Problem occured!";
	}
	?>
</body>
</html>