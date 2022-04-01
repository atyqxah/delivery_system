<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	
if(isset($GET["drink"])){
	$quantityd1 = $_POST['quantityd1'];
 $quantityd2 = $_POST['quantityd2'];
 $quantityd3 = $_POST['quantityd3'];
 $quantityd4 = $_POST['quantityd4'];
 $quantityd5 = $_POST['quantityd5'];
 $quantityd6 = $_POST['quantityd6'];
 $quantityd7 = $_POST['quantityd7'];
 $quantityd8 = $_POST['quantityd8'];
	$drink=$GET["drink"];
	$c = count($drink);
	$price1=0.0;
	$total1=0.0;
	$price2=0.0;
	$total2=0.0;
	$price3=0.0;
	$total3=0.0;
	$price4=0.0;
	$total4=0.0;
	$price5=0.0;
	$total5=0.0;
	$price6=0.0;
	$total6=0.0;
	$price7=0.0;
	$total7=0.0;
	$price8=0.0;
	$total8=0.0;
	$totalalldrink=0.0;
	for($i=0;$i<$c;$i++){
		if($drink[$i]==1){
			$total1=$quantityd1*8.86;
			$price1=$price1+$total1;
			echo "AFFOGATO<br>";
			echo "Quantity : ".$quantityd1;
			echo "PRICE : ".$price1;
		}
		if($drink[$i]==2){
			$total2=$quantityd2*11.84;
			$price2=$price2+$total2;
			echo "MARSHMALLOW COCOA<br>";
			echo "Quantity : ".$quantityd2;
			echo "PRICE : ".$price2;
		}
		if($drink[$i]==3){
			$total3=$quantityd3*11.84;
			$price3=$price3+$total3;
			echo "VIENNA COFFEE<br>";
			echo "Quantity : ".$quantityd3;
			echo "PRICE : ".$price3;
		}
		if($drink[$i]==4){
			$total4=$quantityd4*11.84;
			$price4=$price4+$total4;
			echo "CHEEKY MONKEY<br>";
			echo "Quantity : ".$quantityd4;
			echo "PRICE : ".$price4;
		}
		if($drink[$i]==5){
			$total5=$quantityd5*13.43;
			$price5=$price5+$total5;
			echo "CHOCOLATE MILSHAKE<br>";
			echo "Quantity : ".$quantityd5;
			echo "PRICE : ".$price5;
		}
		if($drink[$i]==6){
			$total6=$quantityd6*15.42;
			$price6=$price6+$total6;
			echo "SWEAT ALABAMA<br>";
			echo "Quantity : ".$quantityd6;
			echo "PRICE : ".$price6;
		}
		if($drink[$i]==7){
			$total7=$quantityd7*11.84;
			$price7=$price7+$total7;
			echo "CITRUS MINT<br>";
			echo "Quantity : ".$quantityd7;
			echo "PRICE : ".$price7;
		}
		if($drink[$i]==8){
			$total8=$quantityd8*12.44;
			$price8=$price8+$total8;
			echo "HAPPINESS INFUSION<br> ";
			echo "Quantity : ".$quantityd8;
			echo "PRICE : ".$price8;
		}
	}
	$totalalldrink = $price1+$price2+$price3+$price4+$price5+$price6+$price7+$price8;
	echo "TOTAL PRICE DRINK : ".$totalalldrink."<br>";
}
else{
	echo "Please choose something!";
}
if(isset($GET["main"])){
	$quantitym1 = $_POST['quantitym1'];
 $quantitym2 = $_POST['quantitym2'];
 $quantitym3 = $_POST['quantitym3'];
 $quantitym4 = $_POST['quantitym4'];
 $quantitym5 = $_POST['quantitym5'];
 $quantitym6 = $_POST['quantitym6'];
 $quantitym7 = $_POST['quantitym7'];
 $quantitym8 = $_POST['quantitym8'];
	$main=$GET["main"];
	$c = count($main);
	$price1=0.0;
	$total1=0.0;
	$price2=0.0;
	$total2=0.0;
	$price3=0.0;
	$total3=0.0;
	$price4=0.0;
	$total4=0.0;
	$price5=0.0;
	$total5=0.0;
	$price6=0.0;
	$total6=0.0;
	$price7=0.0;
	$total7=0.0;
	$price8=0.0;
	$total8=0.0;
	$totalallmain=0.0;
	for($i=0;$i<$c;$i++){
		if($main[$i]==1){
			$total1=$quantitym1*72.00;
			$price1=$price1+$total1;
			echo "VOLCANO ISLAND<br>";
			echo "Quantity : ".$quantitym1;
			echo "PRICE : ".$price1;
		}
		if($main[$i]==2){
			$total2=$quantitym2*39.00;
			$price2=$price2+$total2;
			echo "CALAMARI MUSSELS CHICKEN<br>";
			echo "Quantity : ".$quantitym2;
			echo "PRICE : ".$price2;
		}
		if($main[$i]==3){
			$total3=$quantitym3*19.90;
			$price3=$price3+$total3;
			echo "VOLCANO MUSSELS<br>";
			echo "Quantity : ".$quantitym3;
			echo "PRICE : ".$price3;
		}
		if($main[$i]==4){
			$total4=$quantitym4*29.50;
			$price4=$price4+$total4;
			echo "QUAD DELIGHT<br>";
			echo "Quantity : ".$quantitym4;
			echo "PRICE : ".$price4;
		}
		if($main[$i]==5){
			$total5=$quantitym5*16.50;
			$price5=$price5+$total5;
			echo "CAJUN WINGS<br>";
			echo "Quantity : ".$quantitym5;
			echo "PRICE : ".$price5;
		}
		if($main[$i]==6){
			$total6=$quantitym6*15.90;
			$price6=$price6+$total6;
			echo "SINGLE GARLIC HERB MUSSELS<br>";
			echo "Quantity : ".$quantitym6;
			echo "PRICE : ".$price6;
		}
		if($main[$i]==7){
			$total7=$quantitym7*26.00;
			$price7=$price7+$total7;
			echo "CHICKEN OF LIBERTY<br>";
			echo "Quantity : ".$quantitym7;
			echo "PRICE : ".$price7;
		}
		if($main[$i]==8){
			$total8=$quantitym8*37.50;
			$price8=$price8+$total8;
			echo "SALMON N MASH<br> ";
			echo "Quantity : ".$quantitym8;
			echo "PRICE : ".$price8;
		}
	}
	$totalallmain = $price1+$price2+$price3+$price4+$price5+$price6+$price7+$price8;
	echo "TOTAL PRICE MAIN COURSE : ".$totalallmain."<br>";
}
else{
	echo "Please choose something!";
}
if(isset($GET["desert"])){
	 $quantityde1 = $_POST['quantityde1'];
 $quantityde2 = $_POST['quantityde2'];
 $quantityde3 = $_POST['quantityde3'];
 $quantityde4 = $_POST['quantityde4'];
 $quantityde5 = $_POST['quantityde5'];
 $quantityde6 = $_POST['quantityde6'];
	$desert=$GET["desert"];
	$c = count($desert);
	$price1=0.0;
	$total1=0.0;
	$price2=0.0;
	$total2=0.0;
	$price3=0.0;
	$total3=0.0;
	$price4=0.0;
	$total4=0.0;
	$price5=0.0;
	$total5=0.0;
	$price6=0.0;
	$total6=0.0;
	$price7=0.0;
	$total7=0.0;
	$price8=0.0;
	$total8=0.0;
	$totalalldesert=0.0;
	for($i=0;$i<$c;$i++){
		if($desert[$i]==1){
			$total1=$quantityde1*19.00;
			$price1=$price1+$total1;
			echo "FRIED OREO WITH ICE CREAM<br>";
			echo "Quantity : ".$quantityde1;
			echo "PRICE : ".$price1;
		}
		if($desert[$i]==2){
			$total2=$quantityde2*16.00;
			$price2=$price2+$total2;
			echo "SIZZLING BANANA FRITTERS WITH ICE CREAM<br>";
			echo "Quantity : ".$quantityde2;
			echo "PRICE : ".$price2;
		}
		if($desert[$i]==3){
			$total3=$quantityde3*16.00;
			$price3=$price3+$total3;
			echo "SIZZLING BROWNIE WITH ICE CREAM<br>";
			echo "Quantity : ".$quantityde3;
			echo "PRICE : ".$price3;
		}
		if($desert[$i]==4){
			$total4=$quantityde4*11.50;
			$price4=$price4+$total4;
			echo "SUPER FRUIT CRUMBLE<br>";
			echo "Quantity : ".$quantityde4;
			echo "PRICE : ".$price4;
		}
		if($desert[$i]==5){
			$total5=$quantityde5*8.50;
			$price5=$price5+$total5;
			echo "COOKIE SUNDAE<br>";
			echo "Quantity : ".$quantityde5;
			echo "PRICE : ".$price5;
		}
		if($desert[$i]==6){
			$total6=$quantityde6*11.50;
			$price6=$price6+$total6;
			echo "STRAWBERRY FLAMIN GO<br>";
			echo "Quantity : ".$quantityde6;
			echo "PRICE : ".$price6;
		}
	}
	$totalalldesert = $price1+$price2+$price3+$price4+$price5+$price6;
	echo "TOTAL PRICE DESERT : ".$totalalldesert."<br>";
}
else{
	echo "Please choose something!";
}
if (isset($POST["drink"])&& ($POST["main"]) && ($POST["desert"])){
$totalall = 0.0;
$totalall = $totalalldesert + $totalalldrink + $totalallmain;
echo "TOTAL ALL PRICE : RM".$totalall."<br>";  }
?>
</body>
</html>