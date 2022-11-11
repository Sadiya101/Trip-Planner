<?php
require_once"../model/packageModel.php";
session_start();
if(isset($_COOKIE['s1'])){

?>
<html>
<head>
	<title>Show Available Packages </title>
</head>
<body style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
		<form>
			
				<h1><b><i><legend align="center">	Available Packages</legend></i></b></h1>
							
					<?php
					$status =ShowAvailablePackages();
					if($status)
				   	{
			    		return true;
			    	}

					?>

				<br/>
				    <center> <b>Liked any package?</b>
						<a href="../view/PBooking.html">Book Now</a>
					</center>
			
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