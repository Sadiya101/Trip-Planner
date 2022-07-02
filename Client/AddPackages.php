<?php 

if(isset($_COOKIE['c1']))
{
	$name=$_POST['Name'];
	$des=$_POST['Destination'];
	$dur =$_POST['Duration'];
	$bud =$_POST['Budget'];
	$hotel =$_POST['Hotel'];
	$res =$_POST['Restaurant'];
	$trans =$_POST['Transport'];
	$guide = $_POST['tGuide'];
	$Info =$name."|".$des."|".$dur."|".$bud."|".$hotel."|".$res."|".$trans."|".$guide."\r\n";
	$file=fopen('PackageList.txt', 'a');
	fwrite($file, $Info);
	header("location:Available_Packages.php");
}
else
{
	echo "invalid request";
}


?>