<?php
session_start();
if(isset($_COOKIE['s1'])){

?>
<html>
<head>
	<title>Booking Info</title>
</head>
<body>
		<form>
			
			<h1><b><i><legend align="center">Booking Info</legend></i></b></h1>
				<table border="2" align="center">
					<tr>
						<th>Name </th>
						<th>Email</th>
						<th>Contact No </th>
						<th>Hotel Name </th>
						<th>No of Rooms</th>
						<th>Total amount</th>			
					</tr>
					<?php
					
						$file = fopen('BookingInfo.txt', 'r');
						while (!feof($file)) 
						{
							$Info=fgets($file);
							if($Info!= null)
							{
								$bhList = explode('|', $Info);
								$Name = trim($bhList[0]);
								$con = trim($bhList[1]);
								$em = trim($bhList[2]);
								$hn = trim($bhList[3]);
								$nR = trim($bhList[5]);
								$tAmount= trim($bhList[6]);
								echo "<tr>";
								echo "<td>".$Name."</td>";
								echo "<td>".$em."</td>";
								echo "<td>".$con."</td>";
								echo "<td>".$hn."</td>";
								echo "<td>".$nR."</td>";							
								echo "<td>".$tAmount."</td>";
								echo "</tr>";
							}

						}
					?>

				</table><br/>
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