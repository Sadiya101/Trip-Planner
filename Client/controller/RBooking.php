<?php 
$Name = $_POST['name'];
$email = $_POST['Email'];
$cNo = $_POST['Contact'];
$rN = $_POST['RName'];
$location = $_POST['Loc'];
$nP = $_POST['Npeople'];
$cost = $_POST['tAmount'];
$counter=0;
session_start();
	if(isset($_COOKIE['s1']))
	{
		if($Name == null || $email == null || $cNo == null|| $rN == null || $location == null || $nP == null || $cost == null )
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
			else{}

			//Restaurant Name
			$rName=$_POST['RName'];
			$file = fopen('Restaurants.txt', 'r');
			while (!feof($file)) 
			{
				$Info=fgets($file);
				$RList = explode('|', $Info);
				$Name = trim($RList[0]); 
					
				if(trim($RList[0])== $rName)
				{
					$counter;
					break;
				}
				else
				{
					$counter=1;
				}
			}

			if($counter == 0)
			{
				echo "Your Booking has been confirmed";
			}
			else
			{
				echo "Invalid Request! Try again";
			}
		}
	    
	}

	else
	{
		echo "invalid request";
	}  
?>

