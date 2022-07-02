<?php
	if(isset($_COOKIE['c1'])){

	?>
		<html>
			<head>
				<title>Show Hotel Info</title>
			</head>
				<body>
						<form>
							
								<h1><b><i><legend align="center">Hotel Info</legend></i></b></h1>
								<table border="2" align="center">
									<tr>
										<th>Hotel Name</th>
										<th>Location</th>
										<th>Link</th>
									</tr>
								
							
					<?php
			            
                        $hName=$_POST['F_Hotels'];
						$file = fopen('HotelList.txt', 'r');
						while (!feof($file)) 
						{
							$Info=fgets($file);
							$hList = explode('|', $Info);
							$Name = trim($hList[0]); 
							$location = trim($hList[1]);
							$Link = trim($hList[2]);
					
							if(trim($hList[0])== $hName)
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