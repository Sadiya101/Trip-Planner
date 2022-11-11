<?php

$Name=$_POST['Name'];
$location =$_POST['location'];
$Type =$_POST['Type'];
$Link =$_POST['Link'];
	require_once"../model/HotelModel.php";
	$status = AddHotels($Name,$location,$Type,$Link);
	if($status)
		{	
			header('location:../controller/ShowHList.php');
		}
	else
		{
			echo "Error!";
        }
?>