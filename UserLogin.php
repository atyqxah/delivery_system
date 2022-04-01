	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php 
	session_start ();
	if (isset($_POST['login'])) {
		require 'admin/dbconnect.php';
		$username = $_POST['username'];
		$password = $_POST ['password'];
		$result = mysqli_query($link , 'select * from user where Username = "'.$username.'" and Password ="'.$password.'"' );
		if(mysqli_num_rows($result)==1){
			$_SESSION['Username'] = $username;
			header('Location: MenuUser.php');
		}
		else
			echo "Account is not valid!";
	}
	?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>USER LOGIN</title>
<style type="text/css">
.abc {
	color: #960;
}
body {
	background-color: #453D38;
}
#apDiv1 {
	position: absolute;
	width: 434px;
	height: 306px;
	z-index: 1;
	left: 446px;
	top: 248px;
	background-color: #990033;
}
#apDiv2 {
	position: absolute;
	width: 239px;
	height: 54px;
	z-index: 2;
	left: 551px;
	top: 296px;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-weight: bold;
	font-size: 36px;
}
#apDiv3 {
	position: absolute;
	width: 324px;
	height: 138px;
	z-index: 3;
	left: 505px;
	top: 387px;
	background-color: #FFFFFF;
}
#apDiv4 {
	position: absolute;
	width: 200px;
	height: 43px;
	z-index: 4;
	left: 964px;
	top: 444px;
	font-size: 24px;
	text-align: center;
}
#apDiv5 {
	position: absolute;
	width: 1273px;
	height: 219px;
	z-index: 5;
	background-image: url(w1920.h1200.cr0.au0.ac1.f-none.png);
	top: 13px;
	left: 24px;
}
#apDiv6 {
	position: absolute;
	width: 200px;
	height: 84px;
	z-index: 6;
	left: 963px;
	top: 328px;
}
#apDiv6 table tr td {
	color: #FFF;
	font-weight: bold;
	text-align: center;
	font-size: 24px;
}
#apDiv7 {	position: absolute;
	width: 200px;
	height: 84px;
	z-index: 6;
	left: 1000px;
	top: 405px;
}
.AQ {
	color: #FFF;
	text-align: center;
}
#apDiv4 table tr td {
	text-align: center;
}
#apDiv6 table tr td a {
	color: #FFF;
}
</style>
</head>

<body>
<div id="apDiv1"></div>
<div id="apDiv2">LOGIN USER</div>
<div id="apDiv3">
	<form id="form1" name="form1" method="post" >
  
  <table width="330" height="141" border="10" align="center">
    <tr>
      <td bgcolor="#CCCCCC">USERNAME</td>
      <td bgcolor="#CCCCCC"><label for="username"></label>
      <input type="text" name="username" id="username" placeholder="Enter your username" required="required" /></td>
    </tr>
    <tr>
      <td bgcolor="#CCCCCC">PASSWORD</td>
      <td bgcolor="#CCCCCC"><label for="password"></label>
      <input type="password" name="password" id="password" placeholder="Enter your password" required="required" /></td>
    </tr>
    <tr align="center">
      <td bgcolor="#CCCCCC">&nbsp;</td>
      <td bgcolor="#CCCCCC"><input type="submit" name="login" id="login" value="LOGIN" /></td>
    </tr>
    
  </table>
</form>
</div><div id="apDiv5"></div>
<div id="apDiv6">
  <table width="200" height="75" border="10">
    <tr>
      <td bgcolor="#000000"><a href="savory/index.html" style="text-decoration:none;">HOME</a></td>
    </tr>
  </table>
</div>
<div id="apDiv4">
  <table width="200" height="75" border="10">
    <tr>
      <td bgcolor="#000000"><a href="registeruser.php" style="text-decoration:none;">REGISTER</a></td>
    </tr>
  </table>
</div>
</body>
</html>
