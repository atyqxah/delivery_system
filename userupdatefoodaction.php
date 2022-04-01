<html>
	<body>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="food_ordering"; // Database name 
$tbl_name="food"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


if (isset ($_POST['Submit'])){
$updateId = $_GET['Id'];		
$quantity = $_POST['quantity'];
		
		$result=mysql_query("SELECT * FROM food WHERE FoodId='$updateId'") or die("A problem has occured ... \n" . "Our team is working on it at the moment ... \n" . "Please check back after few hours.");
	    $food_row=mysql_fetch_assoc($result);
        $food_price=$food_row['FoodPrice'];
		$total= $food_price * $quantity;
// update data in mysql database 
$sql="UPDATE $tbl_name SET FoodQuantity='$quantity', FoodAmount='$total' WHERE FoodId='$updateId'";
$result=mysql_query($sql);

// if successfully updated. 
if($result){
echo "Successful for ordering!";
echo "<BR>";
header('Refresh: 2; URL = food_user.php');
}

else {
echo "ERROR";
}
							 }
?>
	</body>
</html>