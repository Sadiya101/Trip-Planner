<?php
	if(isset($_COOKIE['c1'])){

	?>
		<html>
			<head>
				<title>Searched Transport's Availabilty</title>
			</head>
				<body>
						<form>
							
								<h1><b><i><legend align="center">Your Desired Transport</legend></i></b></h1>
								<table border="2" align="center">
									<tr>
										<th>Transport Type</th>
										<th>Location</th>
										<th>No of seats</th>
										<th>Date</th>
									</tr>
								
							
					<?php
			            
                        $des=$_POST['Destination'];
                        $sNo=$_POST['seats'];

						$file = fopen('transports.txt', 'r');
						while (!feof($file)) 
						{
							$Info=fgets($file);
							$tList = explode('|', $Info);
							$tType = trim($tList[0]); 
							$loc = trim($tList[1]);
							$seat = trim($tList[2]);
							$date = trim($tList[3]);
					
							if(trim($tList[0])== $des)
							{
								echo "<tr>";
							 	echo "<td>".$tType."</td>";
								echo "<td>".$loc."</td>";
								echo "<td>".$seat."</td>";
								echo "<td>".$date."</td>";
								echo "</tr>";

								break;
							}
						}
					?>
					</table>
						</form>
						<center><a href="Booking.php">Book Now</a></center>
						
				</body>
			</html>
				
<?php
}
	else
	{
 		echo "invalid request";
	}

?>