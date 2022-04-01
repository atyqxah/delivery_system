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
$name = $_POST ['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$target = $_POST['photo'];
$category = $_POST['category'];
// update data in mysql database 
$sql="UPDATE $tbl_name SET FoodName='$name', FoodDescription='$description', FoodPrice='$price' , FoodPhoto='$target' , FoodCategory='$category' WHERE FoodId='$updateId'";
$result=mysql_query($sql);

// if successfully updated. 
if($result){
echo "Successful to update!";
echo "<BR>";
header('Refresh: 2; URL = foods.php');
}

else {
echo "ERROR";
}
							 }
?>
	</body>
</html>