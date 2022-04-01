<html>
	<body>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="food_ordering"; // Database name 
$tbl_name="staff"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


if (isset ($_POST['Submit'])){
$updateId = $_GET['Id'];		
$firstname = $_POST ['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$position = $_POST['position'];
$phonenum = $_POST['phonenum'];

	
// update data in mysql database 
$sql="UPDATE $tbl_name SET StaffFirstName='$firstname', StaffLastName='$lastname', Address='$address' ,Position='$position' , StaffPhoneNo='$phonenum' WHERE StaffId='$updateId'";
$result=mysql_query($sql);

// if successfully updated. 
if($result){
echo "Successful to update";
echo "<BR>";
header('Refresh: 2; URL = staff.php'); 
}

else {
echo "ERROR";
}
							 }
?>
	</body>
</html>