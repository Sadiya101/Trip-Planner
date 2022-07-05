<?php
	if(isset($_COOKIE['c1'])){

	?>
		<html>
			<head>
				<title>Show Restaurant Info</title>
			</head>
				<body style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
					<form>
							
						<h1><b><i><legend align="center">Restaurant Info</legend></i></b></h1>
							<table border="2" align="center">
									<tr>
										<th>Restaurant Name</th>
										<th>Location</th>
										<th>Link</th>
									</tr>
					<?php 
                        $rName=$_POST['F_Res'];
						$file = fopen('Restaurants.txt', 'r');
						while (!feof($file)) 
						{
							$Info=fgets($file);
							$rList = explode('|', $Info);
							$Name = trim($rList[0]); 
							$location = trim($rList[1]);
							$Link = trim($rList[2]);
					
							if(strtolower(trim($rList[0])) == strtolower($rName))
							{
								echo "<tr>";
							 	echo "<td>".$Name."</td>";
								echo "<td>".$location."</td>";
								echo "<td>".$Link."</td>";
								echo "</tr>";
								break;
							}
						}
					?>
					</table>
					<center><br/><a href="RBooking.html">Book Now</a></center>
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