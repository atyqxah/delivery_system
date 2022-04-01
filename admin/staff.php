
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
if(!isset ($_SERVER['HTTP_REFERER'])){
	header ('location:../admin/adminlogin.php');
    exit;
 } ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Staff Record</title>
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
<CAPTION><h3>ADD A NEW STAFF</h3></CAPTION>
<form name="staffForm" id="staffForm" action="add_staff.php" method="post" enctype="multipart/form-data" onsubmit="return menuValidate(this)">
<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
	<th>Position</th>
    <th>Phone Number</th>
    <th>Action(s)</th>
</tr>
<tr>
    <td><input type="text" name="firstname" id="firstname" class="textfield" required /></td>
    <td><input type="text" name="lastname" id="lastname" class="textfield" required /></td>
	<td><textarea name="address" id="address" class="textfield" rows="2" cols="15"></textarea></td>
	<td><input type="text" name="position" id="position" class="textfield" /></td>
	<td><input type="text" name="phonenum" id="phonenum" class="textfield" /></td>
    <td><input type="submit" name="Submit" value="Add" /></td>
</tr>
</form>
</table>
<hr>
<?php include 'dbconnect.php';


$result = mysql_query("SELECT * from staff ",$link) or die("Database error");?>
<p>&nbsp;</p>

<table width="950" align="center">
<CAPTION><h3>AVAILABLE STAFF</h3></CAPTION>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Address</th>
<th>Position</th>
<th>Phone Number</th>
<th>Action(s)</th>
</tr>

<?php
while($row = mysql_fetch_array($result)){ ?>
<tr>
<td><?php echo $row['StaffId'];?></td>
<td><?php echo $row['StaffFirstName'];?></td>
<td><?php echo $row['StaffLastName'];?></td>
<td><?php echo $row['Address'];?></td>
<td><?php echo $row['Position'];?></td>
<td><?php echo $row['StaffPhoneNo'];?></td>
<td><bold><a href = "delete_staff.php?Id=<?php echo $row['StaffId'];?>">Delete</a></bold>|<a href = "update_staff.php?Id=<?php echo $row['StaffId'];?>">Update</a></td>

</tr>
<?php
} ?>
	
</table>
<hr>
</div>
</div>
</body>
</html>