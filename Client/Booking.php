<?php 

	if(isset($_COOKIE['c1']))
	{

		$Name = $_POST['name'];
		$email = $_POST['Email'];
		$cNo = $_POST['Contact'];
		$hotel = $_POST['Hotel'];
		$res = $_POST['Restaurant'];
		$nPeople = $_POST['Npeople'];
		$date = $_POST['Date'];
		$cost = $_POST['tAmount'];
		$paymetM = $_POST['pMethod'];
				$Info = $Name."|".$cNo."|".$email."|".$hotel."|".$res."|".$nPeople."|".$date."|".$cost."|".$paymetM."\r\n";
				$file=fopen('BookingInfo.txt', 'a');
				fwrite($file, $Info);
				header('location:BookingInfo.php'); 
	}

	else
	{
		echo "invalid request";
	}  
?>

