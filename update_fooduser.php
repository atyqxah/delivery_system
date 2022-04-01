<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   
   <head>
      <title>Update a Record of Food</title>
	  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	  <link href="admin/stylesheets/admin_styles1.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="admin/validation/admin.js">
</script>
   </head>
   
   <body>
	   <div id="container">
      <?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="food_ordering"; // Database name 
$tbl_name="food"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar
$updateId=$_GET['Id'];

// Retrieve data from database 
$sql="SELECT * FROM $tbl_name where FoodId='$updateId'";
$result=mysql_query($sql);

$row = mysql_fetch_array($result);
?>


<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td colspan="3" align="center"><strong>ORDERING FORM</strong> </td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center" width="70"><strong>Food Name</strong></td>
<td align="center" width="70"><strong>Food Description</strong></td>
<td align="center"><strong>Food Price(RM)</strong></td>
<td align="center"><strong>Food Photo</strong></td>
<td align="center"><strong>Food Category</strong></td>
<td align="center"><strong>Food Quantity</strong></td>
</tr>
<tr width="70">
<form name="form1" method="post" action="userupdatefoodaction.php?Id=<?php echo $updateId ; ?>" enctype="multipart/form-data">
<td>&nbsp;</td>
<td align="center" width="70">
<?php echo $row['FoodName']; ?>
</td>
<td align="center">
<?php echo $row['FoodDescription']; ?> </td>
<td align="center" >
<?php echo $row['FoodPrice']; ?>
</td>
<td align="center" >
<?php echo $row['FoodPhoto']; ?>
</td>
<td align="center">
<?php echo $row['FoodCategory'];?>">
</td>
<td align="center">
<input type="text" name="quantity" align="center" id="quantity" required="required" value="<?php echo $row['FoodQuantity']; ?>" />
</td>
<tr>
<td>&nbsp;</td>
<td>
<input name="Id" type="hidden" id="Id" value="<?php echo $row['FoodId']; ?>" />
</td>
<td align="center">
<input type="submit" name="Submit" value="Submit" />
</td>
</tr>
</form>
</tr>
<td>&nbsp;</td>
</table>

<?php
// close connection 
mysql_close();
?>
	   </div>
	</body>
</html>