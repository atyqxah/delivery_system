
<!DOCTYPE html>
<html>
<head>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
#apDiv1 {
	position: absolute;
	width: 1004px;
	height: 541px;
	z-index: 1;
	left: 269px;
	top: 67px;
	color: #903;
	background-color: #990033;
}
body,td,th {
	font-family: Lato, sans-serif;
	font-weight: bold;
	text-align: left;
}
#apDiv2 {
	position: absolute;
	width: 114px;
	height: 115px;
	z-index: 2;
	left: 1163px;
	top: -1px;
}
.AQ {
	color: #FFF;
}
#apDiv3 {
	position: absolute;
	width: 251px;
	height: 115px;
	z-index: 1;
	left: 567px;
	top: 190px;
}
#apDiv4 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 2;
	left: 374px;
	top: 289px;
}
#apDiv5 {
	position: absolute;
	width: 116px;
	height: 115px;
	z-index: 3;
	left: 1042px;
	top: 0px;
}
</style>

<meta charset="utf-8">
	
	<title>MENU USER</title>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="maincourse.html">MAIN COURSE</a><a href="maincourse.html"></a>
  <a href="drink.html">DRINK</a><a href="drink.html"></a>
  <a href="desert.html">DESSERT</a><a href="desert.html"></a>
<a href="food_user.php">ORDER MENU</a><a href="food_user.php"></a>
  <a href="#">RECEIPT</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<div id="apDiv1"><img name="ZA" src="picture/Screenshot (264).png" width="1007" height="541" alt=""></div>
<div id="apDiv2">
  <table width="111" height="59" border="10">
    <tr>
      <td width="83" bgcolor="#000000"> <span class="AQ"><a href="<?php echo $logoutAction ?>"style="text-decoration: none; color: #FFF;">LOGOUT</a></span></td>
    </tr>
  </table>
</div>
<div id="apDiv5">
  <table width="111" height="59" border="10">
    <tr>
      <td width="83" bgcolor="#000000" class="AQ"><span style="text-align: center"><a href="<?php echo $logoutAction ?>"style="text-decoration: none; color: #FFF;"></a></span><a href=  "update_user.php?Id=<?php echo $row['UserId'];?>"style="text-decoration: none; color: #FFF;">UPDATE</a><a href="<?php echo $logoutAction ?>"style="text-decoration: none; color: #FFF; text-align: center;"></a></td>
    </tr>
  </table>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   

</body>
</html> 
