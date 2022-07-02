<?php
		if(isset($_COOKIE['c1'])){

?>
<html>
<head>
	<title>Show Hotel Info</title>
</head>
<body>
		<form>
			
				<h1><b><i><legend align="center">Restaurant Info</legend></i></b></h1>
				<table border="2" align="center">
					<tr>
						<th>Restaurant Name</th>
						<th>Location</th>
						<th>Link</th>
					</tr>
					<?php
					
						$file = fopen('Restaurants.txt', 'r');
						while (!feof($file)) 
						{
							$Info=fgets($file);
							if($Info!= null)
							{
								$rList = explode('|', $Info);
								$Name = trim($rList[0]);
								$location = trim($rList[1]);
								$Link = trim($rList[2]);
								echo "<tr>";
								echo "<td>".$Name."</td>";
								echo "<td>".$location."</td>";
								echo "<td>".$Link."</td>";
								echo "</tr>";
							}

						}
					?>

				</table><br/>
				<center><a href="Booking.php">Book Now</a></center>
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