<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #827167;
}
#apDiv1 {
	position: absolute;
	width: 463px;
	height: 447px;
	z-index: 1;
	left: 411px;
	top: 99px;
	background-color: #463E39;
}
#apDiv2 {
	position: absolute;
	width: 81px;
	height: 41px;
	z-index: 2;
	left: 201px;
	top: 414px;
	font-size: 24px;
	color: #00C;
}
#apDiv1 #form1 #apDiv2 a {
	color: #FFF;
}
</style>
<script>
function validateForm() {
  var a = document.forms["form1"]["fid"].value;
  var b = document.forms["form1"]["fpassword"].value;
  var c = document.forms["form1"]["fname"].value;
  var d = document.forms["form1"]["fgender"].value;
  var e = document.forms["form1"]["fphone"].value;
  if (a == "") {
    alert("Use name must be filled out");
    return false;
  }
  if (b == "") {
    alert("Password must be filled out");
    return false;
  }
  if (c == "") {
    alert("Name must be filled out");
    return false;
  }
  if (d == "") {
    alert("Gender must be filled out");
    return false;
  }
  if (e == "") {
    alert("Phone number must be filled out");
    return false;
  }
}
</script>
</head>

<body>
<div id="apDiv1"><form id="form1" name="form1" method="post" onSubmit="return validateForm()"action="new.php">
  
  <p>&nbsp;</p>
  <table width="301" height="358" border="10" align="center">
    <tr>
      <td colspan="2" bgcolor="#FFFFFF"><div align="center">Register  Details</div></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">User Name</td>
      <td bgcolor="#FFFFFF"><label for="fid"></label>
      <input type="text" name="fid" id="fid" /></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">Password</td>
      <td bgcolor="#FFFFFF"><label for="fpassword"></label>
      <input type="text" name="fpassword" id="fpassword" /></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">Name</td>
      <td bgcolor="#FFFFFF"><label for="fname"></label>
      <input type="text" name="fname" id="fname" /></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">Gender</td>
      <td bgcolor="#FFFFFF"><p>
        <label>
          <input type="radio" name="fgender" value="Male" id="fgender_0" />
          Male</label>
        <br />
        <label>
          <input type="radio" name="fgender" value="Female" id="fgender_1" />
          Female</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">Phone Number</td>
      <td bgcolor="#FFFFFF"><label for="fphone"></label>
      <input type="text" name="fphone" id="fphone" /></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />
        <input type="reset" name="btnreset" id="btnreset" value="Reset" /></td>
    </tr>
    
  </table>
  <div id="apDiv2"><a href="savory/menu.html">HOME</a></div>
</form></div>
</body>
</html>


