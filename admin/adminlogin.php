
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php

if(isset($_POST['Submit'])){

if(strtolower($_POST["username"])=="admin" && $_POST["password"]=="admin"){
session_start();
$_SESSION['logged_in'] = TRUE;
header("Location: foods.php");

}else {
$error= "Login failed !";
} }
	?>
	
	<?php
session_start();
if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != TRUE){

header("Location: .adminlogin.php");
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Login</title>
<link href="stylesheets/admin_styles.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="page">
<div id="header">
<h1>Administrator Login </h1>
<p align="center">&nbsp;</p>
</div>
<form id="loginForm" name="loginForm" method="post">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td width="112"><b>Username</b></td>
      <td width="188"><input name="username" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <td><b>Password</b></td>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Login" /></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>