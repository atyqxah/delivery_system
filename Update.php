<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <style type="text/css">
  body {
	background-color: #966;
}
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
     $cid = $_GET['fid'];
	 
     $dbc = mysqli_connect ("localhost","root","","food_ordering");
     if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: ".mysqli_connect_error();
      }

     $sql = "select * from customer where CustId = '$cid'";
     $result = mysqli_query($dbc,$sql);

// to display the details error
  	  
      if (false === $result) 
      {
         echo mysql_error();
	    }
	  
      $row = mysqli_fetch_assoc($result)
?>
<div class="container">

<form class="form-horizontal" action="updprocess.php?fid=<?php echo $cid;?>" method="post">
<div class="form-group">
<h1 align="center">Update Register</h1><br><br>

 <h3>Customer ID:
 <fieldset disabled>
  <input class="form-control" type="text" name="fid" value='<?=$row['CustId'];?>'>
</fieldset>
  <br><br>
  Customer 	Password :
  <input class="form-control" type="text" name="fpassword" value='<?=$row['password'];?>'>
  <br><br>
  <br><br>
  Customer Name :
  <input class="form-control" type="text" name="fname" value='<?=$row['UserName'];?>'>
  <br><br>
  <br><br>
  Customer Gender :
  <input class="form-control" type="text" name="fgender" value='<?=$row['Gender'];?>'>
  <br><br>
  <br><br>
  Customer Phone Number :
  <input class="form-control" type="text" name="fphone" value='<?=$row['Phone'];?>'
  <br><br>
  
<input type="submit" value="Update" onclick="return confirm('Are you sure?')"><a href="MeunuLogin.php"style="text-decoration:none;"><input type="button" value="Cancel" /></a>

</form>

</body>
</html>