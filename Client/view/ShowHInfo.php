<?php
require_once"../model/HotelModel.php";
session_start();
	if(isset($_COOKIE['s1'])){

	?>
		<html>
			<head>
				<title>Show Hotel Info</title>
				<link rel="stylesheet" href="../asset/css/NaviBar.css">
				<link rel="stylesheet" href="../asset/css/SHinfo.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        		integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        		crossorigin="anonymous" referrerpolicy="no-referrer" />
			</head>
				<body>
				<div class="navbar">
				<a href="Logout.php">Logout</a>
				<a href="#settings">Settings</a>
				<a href="Home.php">Home</a>
			</div>
			<div class="container">
			<div class="header">
						<form>
							
							<h1><b><i>Hotel Info</i></b></h1>	
							<?php
								$hName=$_POST['F_Hotels'];
					            $status = SearchHotels($hName);
								if($status)
								   	{
							    		return true;
							    	}
							    	// $json =$_POST['data'];
    								// $hotel = ['hName'=> 'Seagull'];
   									// $json = json_encode($hotel);
					?>
					<center><br/><b><a href="HBooking.html">Book Now</a></b></center>
					</form>
				</div>
				</div>
				</body>
			</html>
				
<?php
}
	else
	{
 		echo "invalid request";
	}

?>