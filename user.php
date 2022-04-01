
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Foods</title>
<link href="admin/stylesheets/admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="admin/validation/admin.js">
</script>
</head>
<body>
	
<div id="page">
<div id="header">
<h1>Foods Management </h1>
<a href="admin/index.php">Home</a> | <a href="admin/categories.php">Categories</a> | <a href="admin/foods.php">Foods</a> | <a href="admin/accounts.php">Accounts</a> | <a href="admin/orders.php">Orders</a> | <a href="admin/reservations.php">Reservations</a> | <a href="admin/specials.php">Specials</a> | <a href="admin/staff.php">Staff</a> | <a href="admin/messages.php">Messages</a> | <a href="admin/options.php">Options</a> | <a href="admin/logout.php">Logout</a>
</div>
<div id="container">

<hr>
<?php include 'admin/dbconnect.php';


$result = mysql_query("SELECT * from staff ",$link) or die("Database error");?>
<p>&nbsp;</p>

<table width="950" align="center">
<CAPTION><h3>USER DETAILS</h3></CAPTION>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
<th>Password</th>
<th>Phone Number</th>
<th>Email</th>
<th>Action(s)</th>
</tr>

<?php
while($row = mysql_fetch_array($result)){ ?>
<tr>
<td><?php echo $row['UserId'];?></td>
<td><?php echo $row['FirstName'];?></td>
<td><?php echo $row['LastName'];?></td>
<td><?php echo $row['Username'];?></td>
<td><?php echo $row['Password'];?></td>
<td><?php echo $row['Phone'];?></td>
<td><?php echo $row['Email'];?></td>
<td><a href = "admin/update_staff.php?Id=<?php echo $row['UserId'];?>">Update</a></td>

</tr>
<?php
} ?>
	
</table>
<hr>
</div>
</div>
</body>
</html>