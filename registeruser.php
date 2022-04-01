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
  var a = document.forms["form1"]["firstname"].value;
  var b = document.forms["form1"]["lastname"].value;
  var c = document.forms["form1"]["fusername"].value;
  var d = document.forms["form1"]["fpassword"].value;
  var e = document.forms["form1"]["fphone"].value;
  var f = document.forms["form1"]["femail"].value;
  var g = document.forms["form1"]["fsecurity"].value;
  var h = document.forms["form1"]["fanswer"].value;

  if (a == "") {
    alert("First name must be filled out");
    return false;
  }
  if (b == "") {
    alert("Last name must be filled out");
    return false;
  }
  if (c == "") {
    alert("User Name must be filled out");
    return false;
  }
  if (d == "") {
    alert("Password must be filled out");
    return false;
  }
  if (e == "") {
    alert("Phone number must be filled out");
    return false;
  }
  if (f == "") {
    alert("Email must be filled out");
    return false;
  }
  if (g == "") {
    alert("Security question must be filled out");
    return false;
  }
  if (h == "") {
    alert("Answer must be filled out");
    return false;
  }

  
}
</script>
</head>

<body>
<div id="apDiv1"><form id="form1" name="form1" method="post" enctype="multipart/form-data" onSubmit="return validateForm()" action="new.php">
  
  <p>&nbsp;</p>
  <table width="301" height="358" border="10" align="center">
    <tr>
      <td colspan="2" bgcolor="#FFFFFF"><div align="center">Register  Details</div></td>
    </tr>
	<tr>
      <td bgcolor="#FFFFFF">First Name</td>
      <td bgcolor="#FFFFFF"><label for="firstname"></label>
      <input type="text" name="firstname" id="firstname" /></td>
    </tr>
	<tr>
      <td bgcolor="#FFFFFF">Last Name</td>
      <td bgcolor="#FFFFFF"><label for="lastname"></label>
      <input type="text" name="lastname" id="lastname" /></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">User Name</td>
      <td bgcolor="#FFFFFF"><label for="fusername"></label>
      <input type="text" name="fusername" id="fusername" /></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF">Password</td>
      <td bgcolor="#FFFFFF"><label for="fpassword"></label>
      <input type="text" name="fpassword" id="fpassword" /></td>
	  </tr>
    <tr>
      <td bgcolor="#FFFFFF">Phone Number</td>
      <td bgcolor="#FFFFFF"><label for="fphone"></label>
      <input type="text" name="fphone" id="fphone" /></td>
    </tr>
	<tr>
      <td bgcolor="#FFFFFF">Email</td>
      <td bgcolor="#FFFFFF"><label for="femail"></label>
      <input type="text" name="femail" id="femail" /></td>
	  </tr>
	 <tr>
      <td bgcolor="#FFFFFF">Security Question</td>
      <td bgcolor="#FFFFFF"><p>
        <label>
          <input type="radio" name="fsecurity" id="fsecurity" />
          What is your favourite place?</label>
        <br />
        <label>
          <input type="radio" name="fsecurity" id="fsecurity" />
          What is your most sweet memory?</label>
        <br />
      </p></td>
    </tr>
	<tr>
      <td bgcolor="#FFFFFF">Answer</td>
      <td bgcolor="#FFFFFF"><label for="fanswer"></label>
      <input type="text" name="fanswer" id="fanswer" /></td>
	  </tr>
    <tr>
      <td bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />
        <input type="reset" name="btnreset" id="btnreset" value="Reset" /></td>
    </tr>
    <tr ALIGN="center"><div id="apDiv2"><a href="savory/index.html">HOME</a></div></tr>
  </table>
	
</form></div>
</body>
</html>


