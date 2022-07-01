<?php
		if(isset($_COOKIE['c1'])){

?>
<html>
<head>
	<title>Show Available Packages </title>
</head>
<body>
		<form>
			
				<h1><b><i><legend align="center">	Available Packages</legend></i></b></h1>
				<table border="2" align="center">
					<tr>
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
								$des = trim($pList[0]);
								$dur = trim($pList[1]);
								$bud = trim($pList[2]);
								$hotel = trim($pList[3]);
								$res = trim($pList[4]);
								$trans = trim($pList[5]);
								echo "<tr>";
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

				</table>
			
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