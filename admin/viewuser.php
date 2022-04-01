
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
		<?php
if(!isset ($_SERVER['HTTP_REFERER'])){
	header ('location:../admin/adminlogin.php');
    exit;
 } ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Food Ordering</title>
<link href="stylesheets/admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="validation/admin.js">
</script>
</head>
<body>
	
<div id="page">
<div id="header">
<h1>Food Ordering </h1>
<a href="../savory/index.html">Home</a> | <a href="foods.php">Foods</a> | <a href="../food_user.php">Orders</a> | <a href="staff.php">Staff</a> | <a href="viewuser.php">Accounts</a> | <a href="logoutadmin.php">Logout</a>
</div>
<div id="container">
  <hr>
<?php include 'dbconnect.php';


$result = mysql_query("SELECT * from user ",$link) or die("Database error");?>
<p>&nbsp;</p>

<table width="950" align="center">
<CAPTION><h3>AVAILABLE MENU</h3></CAPTION>
<tr>
<th>User ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
<th>Password</th>
<th>Phone</th>
<th>Email</th>
<th>Question ID</th>
<th>Answer</th>
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
<td><?php echo $row['QuestionId'];?></td>
<td><?php echo $row['Answer'];?></td>

</tr>
<?php
} ?>
	
</table>
<hr>
</div>
</div>
</body>
</html>