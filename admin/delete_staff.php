<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php include 'dbconnect.php';
$delete_id = $_GET['Id'];

$result=mysql_query("DELETE FROM staff where StaffId='$delete_id' ");
if($result)
{ echo "Delete successfully ! ";
  header('Refresh: 2; URL = staff.php'); }
?>
</body>
</html>
</body>
</html>