<?php 
$Name = $_POST['name'];
$email = $_POST['Email'];
$cNo = $_POST['Contact'];
$pName = $_POST['PName'];
$des = $_POST['Des'];
$nP = $_POST['Npeople'];
$cost = $_POST['tAmount'];
$counter=0;
session_start();
	if(isset($_COOKIE['s1']))
	{
		if($Name == null || $email == null || $cNo == null|| $pName == null || $des == null || $nP == null || $cost == null )
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
		

			//Package Name
			$pN=$_POST['PName'];
			$loc=$_POST['Des'];
			$file = fopen('PackageList.txt', 'r');
			while (!feof($file)) 
			{
				$Info=fgets($file);
				$pList = explode('|', $Info);
				$Name= trim($pList[0]);	
				$des = trim($pList[1]);
				if(trim($pList[0]) == $pN &&trim($pList[1])== $loc)
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

