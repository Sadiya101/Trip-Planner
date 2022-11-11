<?php

session_start();
if(isset($_COOKIE['s1'])){

?>
<html>
<head>
	<title>Show Hotel Info</title>
</head>
<body style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
		<form>
			<h1><b><i><legend align="center">Hotel Info</legend></i></b></h1>
					<?php
					require_once"../model/HotelModel.php";
					$status =ShowHotelList();
					if($status)
				   	{
			    		return true;
			    	}
					
							
					?>
				<center><a href="HBooking.html">Book Now</a></center>
		</form>
		
</body>
</html>

<?php
			}
			else
			{
				echo "invalid request";
			}

?>