
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
<table width="760" align="center">
<CAPTION><h3>ADD QUANTITY</h3></CAPTION>
<form name="menuForm" id="menuForm" action="add_quantity" method="post" enctype="multipart/form-data" onsubmit="return menuValidate(this)">
<tr>
    <th>Quantity</th>
    <th>Action(s)</th>
</tr>
<tr>
    <td><input type="text" name="quantity" id="quantity" class="textfield" /></td>
    <td><input type="submit" name="Submit" value="Add" /></td>
</tr>
</form>
</table>
<hr>
<?php include 'admin/dbconnect.php';


$result = mysql_query("SELECT * from food ",$link) or die("Database error");?>
<p>&nbsp;</p>

<table width="950" align="center">
<CAPTION><h3>AVAILABLE MENU</h3></CAPTION>
<tr>
<th>Menu ID</th>
<th>Menu Name</th>
<th>Menu Description</th>
<th>Menu Price</th>
<th>Menu Photo</th>
<th>Menu Category</th>
<th>Action(s)</th>
</tr>

<?php
while($row = mysql_fetch_array($result)){ ?>
<tr>
<td><?php echo $row['FoodId'];?></td>
<td><?php echo $row['FoodName'];?></td>
<td><?php echo $row['FoodDescription'];?></td>
<td><?php echo $row['FoodPrice'];?></td>
<td><img src='/deliverysystem/picture/<?php echo $row['FoodPhoto']; ?>' width="90" height="90" /></td>
<td><?php echo $row['FoodCategory'];?></td>
<td><a href = "admin/delete_food.php?Id=<?php echo $row['FoodId'];?>">Delete</a>|<a href = "admin/update_food.php?Id=<?php echo $row['FoodId'];?>">Update</a></td>

</tr>
<?php
} ?>
	
</table>
<hr>
</div>
</div>
</body>
</html>