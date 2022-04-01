<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php 
	if (isset ($_POST['Submit'])){
		
		include 'dbconnect.php';
		$firstName = $_POST['firstname'];
		$lastName = $_POST['lastname'];
		$address = $_POST['address'];
		$position = $_POST['position'];
		$phonenum = $_POST['phonenum'];
	
		$result = mysql_query("INSERT INTO staff(StaffFirstName,StaffLastName,Address,Position,StaffPhoneNo) VALUES ('$firstName','$lastName','$address','$position','$phonenum')") ;
	
		if($result){
			echo "Add successfully ! ";
			header('Refresh: 2; URL = staff.php'); }
		
		else 
			echo "Problem occured!";
	}
	?>
</body>
</html>