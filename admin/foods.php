
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
if(!isset ($_SERVER['HTTP_REFERER'])){
	header ('location:../admin/adminlogin.php');
    exit;
 } ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Foods</title>
<link href="stylesheets/admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="validation/admin.js">
</script>
</head>
<body>
	
<div id="page">
<div id="header">
<h1>Foods Management </h1>
<a href="../savory/index.html">Home</a> | <a href="foods.php">Foods</a> | <a href="../food_user.php">Orders</a> | <a href="staff.php">Staff</a> | <a href="viewuser.php">Accounts</a> | <a href="logoutadmin.php">Logout</a>
</div>
<div id="container">
<table width="760" align="center">
<CAPTION><h3>ADD A NEW MENU</h3></CAPTION>
<form name="menuForm" id="menuForm" action="add_food.php" method="post" enctype="multipart/form-data" onsubmit="return menuValidate(this)">
<tr>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Photo</th>
    <th>Category</th>
    <th>Action(s)</th>
</tr>
<tr>
    <td><input type="text" name="name" id="name" class="textfield" /></td>
    <td><textarea name="description" id="description" class="textfield" rows="2" cols="15"></textarea></td>
    <td><input type="text" name="price" id="price" class="textfield" /></td>
    <td><input type="file" name="photo" id="photo"/></td>
	<td>
	<select name="category">
	<option value="1" name="Food" >Food</option>
    <option value="2" name="Drink" >Drink</option>  
	<option value="3" name="Dessert">Dessert</option>
    </select>
	</td>
    <td><input type="submit" name="Submit" value="Add" /></td>
</tr>
</form>
</table>
<hr>
<?php include 'dbconnect.php';


$result = mysql_query("SELECT * from food ",$link) or die("Database error");?>
<p>&nbsp;</p>

<table width="950" align="center">
<CAPTION><h3>AVAILABLE MENU</h3></CAPTION>
<tr>
<th>Menu ID</th>
<th width-"50">Menu Name</th>
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
<td align="center" width="70"><?php echo $row['FoodName'];?></td>
<td ><?php echo $row['FoodDescription'];?></td>
<td><?php echo $row['FoodPrice'];?></td>
<td><img src='/deliverysystem/picture/<?php echo $row['FoodPhoto']; ?>' width="150" height="140" /></td>
<td align="center"><?php echo $row['FoodCategory'];?></td>
<td><a href = "delete_food.php?Id=<?php echo $row['FoodId'];?>">Delete</a>|<a href = "update_food.php?Id=<?php echo $row['FoodId'];?>">Update</a></td>

</tr>
<?php
} ?>
	
</table>
<hr>
</div>
</div>
</body>
</html>