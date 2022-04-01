
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Food Ordering</title>
<link href="admin/stylesheets/admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="admin/validation/admin.js">
</script>
</head>
<body>
	
<div id="page">
<div id="header">
<h1>Food Ordering </h1>
<a href="savory/index.html">Home</a> | <a href="maincourse.html">Main Course</a> | <a href="drink.html">Drinks</a> | <a href="desert.html">Dessert</a> | <a href="food_user.php">Orders</a> | <a href="">Logout</a>
</div>
<div id="container">
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
<th>Menu Quantity</th>
<th>Menu Amount(RM)</th>
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
<td><?php echo $row['FoodQuantity'];?></td>
<td><?php echo $row['FoodAmount'];?></td>
<td><a href = "update_fooduser.php?Id=<?php echo $row['FoodId'];?>">Change quantity to order</a></td>

</tr>
<?php
} ?>
	
</table>
<hr>
</div>
</div>
</body>
</html>