<?php 

session_start();
if(isset($_COOKIE['s1']))
{
	require_once"../model/packageModel.php";
	$des=$_POST['Destination'];
	$dur =$_POST['Duration'];
	$bud =$_POST['Budget'];
	$hotel =$_POST['Hotel'];
	$res =$_POST['Restaurant'];
	$trans =$_POST['Transport'];
	//$guide = $_POST['tGuide'];
	$status = AddPackages($des,$dur,$bud,$hotel,$res,$trans);

			if($status)
			{
				header("location: ../controller/Available_Packages.php");
			}
			else
			{
				echo "Error! Failed to add packages";
				//header('location:../controller/AddPackages.php');
				
			}
	
}
else
{
	echo "invalid request";
}


?>