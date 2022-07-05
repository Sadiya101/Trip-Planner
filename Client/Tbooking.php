<?php 
$Name = $_POST['name'];
$email = $_POST['Email'];
$cNo = $_POST['Contact'];
$tN = $_POST['tName'];
$location = $_POST['Loc'];
$Seat = $_POST['nSeats'];
$cost = $_POST['tAmount'];
$counter=0;
	if(isset($_COOKIE['c1']))
	{
		if($Name == null || $email == null || $cNo == null|| $tN == null || $location == null || $Seat == null || $cost == null )
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
			

			//Transport Name
			$tLoc=$_POST['Loc'];
			$date=$_POST['Date'];
			$file = fopen('transports.txt', 'r');
			while (!feof($file)) 
			{
				$Info=fgets($file);
				$tList = explode('|', $Info);
				$location = trim($tList[0]); 
					
				if(trim($tList[0])== $tLoc && trim($tList[3])== $date )
				{
					$counter;
					break;
				}
				
			}



			if($counter == 0)
			{
				echo "Your Booking has been confirmed";
			}
			else
			{
				echo "Wrong Crendentials! Try again";
			}
	    }
	}

	else
	{
		echo "invalid request";
	}  
?>

