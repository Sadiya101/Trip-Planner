<?php

$Name=$_POST['Name'];
$Loc =$_POST['Location'];
$Link =$_POST['Link'];
require_once"../model/RestaurantModel.php";
$status = AddRestaurants($Name,$Loc,$Link);
if($status)
	{	
		header('location:../controller/ShowrRList.php');
	}
else
	{
		echo "Error!";
    }
?>