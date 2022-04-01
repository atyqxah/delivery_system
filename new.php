<?php
 session_start();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$cusername = $_POST['fusername'];
$cpassword = $_POST['fpassword'];
$cphone = $_POST['fphone'];
$cemail = $_POST['femail'];
$securityquestion = $_POST['fsecurity'];
$answer = $_POST['fanswer'];


$dbc = mysqli_connect ("localhost","root","","food_ordering");
if (mysqli_connect_errno())
   {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

$sql="INSERT INTO user(`FirstName`,`LastName`,`Username`,`Password`,`Phone`,`Email`,`QuestionId`,`Answer`) values ('$firstname','$lastname','$cusername','$cpassword','$cphone','$cemail','$securityquestion','$answer')";

$results= mysqli_query($dbc,$sql); 

if ($results)
{
	
	mysqli_commit($dbc);
	
	
	print '<script>alert("You have register");</script>';
	print '<script>window.location.assign("UserLogin.php");</script>';
	
}
else
 {

 	mysqli_rollback($dbc);
	print '<script>alert("Data Is Invalid , You fail to register");</script>'; //display message box
	print '<script>window.location.assign("REGISTER.php");</script>'; //go to index.php page
	}	

?>
