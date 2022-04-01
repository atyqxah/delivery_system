<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php 
	if (isset ($_GET['Id'])){
		
		include 'admin/dbconnect.php';
		$quantity = $POST['quantity'];
		$food_id = $_GET['Id'];
		
		$result=mysql_query("SELECT * FROM food WHERE FoodId='$food_id'") or die("A problem has occured ... \n" . "Our team is working on it at the moment ... \n" . "Please check back after few hours.");
	    $food_row=mysql_fetch_assoc($result);
        $food_price=$food_row['FoodPrice'];
		$total= $food_price * $quantity;
		$result = mysql_query("INSERT INTO order_form(OrderQuantity,FoodId,Amount) VALUES ('$quantity','$food_id','$total')") ;
	
		if($result){
			echo "Add successfully ! ";
			header('Refresh: 2; URL = foodsuser.php'); }
		
		else 
			echo "Problem occured!";
	}
	?>
</body>
</html>