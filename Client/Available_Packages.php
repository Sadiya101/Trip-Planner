<?php
		if(isset($_COOKIE['c1'])){

?>
<html>
<head>
	<title>Show Available Packages </title>
</head>
<body style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
		<form>
			
				<h1><b><i><legend align="center">	Available Packages</legend></i></b></h1>
				<table border="2" align="center">
					<tr>
						<th>Package Name</th>
						<th>Destination</th>
						<th>Duration</th>
						<th>Budget</th>
						<th>Hotels</th>
						<th>Restaurants</th>
						<th>Transport</th>
					</tr>
							
					<?php
					
						$file = fopen('PackageList.txt', 'r');
						while (!feof($file)) 
						{
							$Info=fgets($file);
							if($Info!= null)
							{
								$pList = explode('|', $Info);
								$name= trim($pList[0]);
								$des = trim($pList[1]);
								$dur = trim($pList[2]);
								$bud = trim($pList[3]);
								$hotel = trim($pList[4]);
								$res = trim($pList[5]);
								$trans = trim($pList[6]);
								echo "<tr>";
								echo "<td>".$name."</td>";
								echo "<td>".$des."</td>";
								echo "<td>".$dur."</td>";
								echo "<td>".$bud."</td>";
								echo "<td>".$hotel."</td>";
								echo "<td>".$res."</td>";
								echo "<td>".$trans."</td>";
								echo "</tr>";
						    }
						}
					?>

				</table><br/>
				    <center> <b>Liked any package?</b>
						<a href="PBooking.html">Book Now</a>
					</center>
			
		</form>
		<?php

		?>
		
</body>
</html>

<?php
			}
			else
			{
				echo "invalid request";
			}

?>