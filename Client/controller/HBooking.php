<?php 
require_once"../model/HBookingModel.php";
$Name = $_POST['name'];
$email = $_POST['Email'];
$cNo = $_POST['Contact'];
$hN = $_POST['hName'];
$location = $_POST['Loc'];
$nr = $_POST['Nroom'];
$cost = $_POST['tAmount'];
$counter=0;
session_start();
	if(isset($_COOKIE['s1']))
	{
		if($Name == null || $email == null || $cNo == null|| $hN == null || $location == null || $nr == null || $cost == null )
		{
			echo "Error! Empty field!!!<br>";

		}
		else
		{
			//Contact number
			if(strlen($cNo)!=11)
			{
				$counter++;
				echo "Invalid number <br>";
			}
			

			//Hotel Name
			// $hName=$_POST['hName'];
			// $file = fopen('HotelList.txt', 'r');
			// while (!feof($file)) 
			// {
			// 	$Info=fgets($file);
			// 	$hList = explode('|', $Info);
			// 	$Name = trim($hList[0]); 
					
			// 	if(trim($hList[0])== $hName)
			// 	{
			// 		$counter;
			// 		break;
			// 	}
			// 	else
			// 	{
			// 		$counter++;
			// 	}
			// }



			if($counter == 0)
			{
				$status = hBooking($Name,$email,$cNo, $hN,$location,$nr,$cost);

				if($status)
				{
				 	echo '<script>alert("Your Booking Has been confirmed")</script>';
				}
				else
				{
					echo '<script>alert("Error Request ! Please try again")</script>';
				}
			
			}
	    }
	}

	else
	{
		echo "invalid request";
	}  
?>

