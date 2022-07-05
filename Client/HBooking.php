<?php 
$Name = $_POST['name'];
$email = $_POST['Email'];
$cNo = $_POST['Contact'];
$hN = $_POST['hName'];
$location = $_POST['Loc'];
$nr = $_POST['Nroom'];
$cost = $_POST['tAmount'];
$counter=0;
	if(isset($_COOKIE['c1']))
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
			$hName=$_POST['hName'];
			$file = fopen('HotelList.txt', 'r');
			while (!feof($file)) 
			{
				$Info=fgets($file);
				$hList = explode('|', $Info);
				$Name = trim($hList[0]); 
					
				if(trim($hList[0])== $hName)
				{
					$counter;
					break;
				}
				else
				{
					$counter++;
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

