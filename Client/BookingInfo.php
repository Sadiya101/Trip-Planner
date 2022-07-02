<?php
		if(isset($_COOKIE['c1'])){

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
						<th>Hotel </th>
						<th>Restaurant</th>
						<th>No of people </th>
						<th>Date</th>
						<th>Total amount</th>
						<th>Payment method</th>
						
					</tr>
					<?php
					
						$file = fopen('BookingInfo.txt', 'r');
						while (!feof($file)) 
						{
							$Info=fgets($file);
							if($Info!= null)
							{
								$bList = explode('|', $Info);
								$Name = trim($bList[0]);
								$em = trim($bList[1]);
								$con = trim($bList[2]);
								$h = trim($bList[3]);
								$res = trim($bList[4]);
								$pNo = trim($bList[5]);
								$date = trim($bList[6]);
								$tAmount= trim($bList[7]);
								$pMethod = trim($bList[8]);
								echo "<tr>";
								echo "<td>".$Name."</td>";
								echo "<td>".$em."</td>";
								echo "<td>".$con."</td>";
								echo "<td>".$h."</td>";
								echo "<td>".$res."</td>";
								echo "<td>".$pNo."</td>";
								echo "<td>".$date."</td>";
								echo "<td>".$tAmount."</td>";
								echo "<td>".$pMethod."</td>";
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