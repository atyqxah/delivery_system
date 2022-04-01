
<html>
<?php
	$host="localhost";
	$username="root";
	$password="";
		
	$link = mysql_connect($host,$username,$password) or die ("Could not connect");
	
	$db = mysql_select_db("food_ordering", $link) or die ("Could not select database");
	?>
<head>
</head>

<body>
	
</body>
</html>