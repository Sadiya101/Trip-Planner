<?php
session_start();
	if(isset($_COOKIE['s1'])){

	?>
		<html>
			<head>
				<title>Searched Transport's Availabilty</title>
			</head>
				<body style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
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
							if($Info!= null)
							{
							$tList = explode('|', $Info);
							$tType = trim($tList[0]); 
							$loc = trim($tList[1]);
							$seat = trim($tList[2]);
							$date = trim($tList[3]);
					
							if(strtolower(trim($tList[0])) == strtolower($des))
								{
									echo "<tr>";
									echo "<td>".$loc."</td>";
								 	echo "<td>".$tType."</td>";
									echo "<td>".$seat."</td>";
									echo "<td>".$date."</td>";
									echo "</tr>";

									break;
								}
							}
						}
					?>
					</table>
						</form>
						<center><a href="../view/TBooking.html">Book Now</a></center>
						
				</body>
			</html>
				
<?php
}
	else
	{
 		echo "invalid request";
	}

?>