<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   
   <head>
      <title>Update a Record of Staff</title>
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
$tbl_name="user"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// get value of id that sent from address bar
$updateId=$_GET['Id'];

// Retrieve data from database 
$sql="SELECT * FROM $tbl_name where UserId='$updateId'";
$result=mysql_query($sql);

$row = mysql_fetch_array($result);
?>


<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td colspan="3" align="center"><strong>UPDATE FOR STAFF RECORD </strong> </td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center"><strong>First Name</strong></td>
<td align="center"><strong>Last Name</strong></td>
<td align="center"><strong>Username</strong></td>
<td align="center"><strong>Password</strong></td>
<td align="center"><strong>Phone Number</strong></td>
<td align="center"><strong>Email</strong></td>
</tr>
	
<tr>
<form name="form3" method="post" action="updatuseraction.php?Id=<?php echo $updateId ; ?>" enctype="multipart/form-data">
<td>&nbsp;</td>
<td align="center">
<input name="firstname" type="text" id="firstname" class="textfield" value= "<?php echo $row['FirstName']; ?>" />
</td>
<td align="center">
<input name="lastname" type="text" id="lastname" class="textfield" value= "<?php echo $row['LastName']; ?>" />
</td>
<td>
	<input name="address" id="address" class="textfield" rows="2" cols="15" value="<?php echo $row['Username']; ?>" /> </td>
<td align="center">
<input name="position" type="text" id="position" class="textfield" value= "<?php echo $row['Password']; ?>" />
</td>
<td align="center" >
<input type="text" name="phonenum" id="phonenum" class="textfield" value="<?php echo $row['Phone']; ?>" />
</td>
<td align="center" >
<input type="text" name="email" id=email class="textfield" value="<?php echo $row['Email']; ?>" />
</td>	
<tr>
<td>&nbsp;</td>
<td>
<input name="Id" type="hidden" id="Id" value="<?php echo $row['UserId']; ?>" />
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