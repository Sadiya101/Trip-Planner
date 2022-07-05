<?php 

	if(isset($_COOKIE['c1'])){
?>
<html>
	<head>
		<title>Search Hotel </title>
	</head>
	<body style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
		<form method="post" action="ShowHInfo.php" enctype="">
			<fieldset style="width: 350px; height: 150px; margin: 200px 600px 200px">
					<h2 align="center"><b><i>Find Your Desired Hotels</i></b></h2>
					<TABLE>
						
					    <tr>
					    	<td><b>Find Hotels</b></td>
						    <td>
						    	<input type="Text" name="F_Hotels" value="" >
					    	    <input type="submit" name="Search" value="Search">
						    </td>
					    </tr>
					    <tr>
							<td></td>
						    <td><a href="ShowHList.php"> See Available hotel information</a></td>
					    </tr>  
					</TABLE>
			</fieldset>
		</form>
	</body>
</html>

<?php 
	}else{
		echo "invalid request";
	}  
?>

