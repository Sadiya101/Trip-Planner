<?php 

	if(isset($_COOKIE['c1'])){
?>
<html>
	<head>
		<title>Search Restaurants</title>
	</head>
	<body>
		<form method="post" action="ShowRInfo.php" enctype="">
			<fieldset style="width: 400px; height: 150px; margin: 200px 600px 200px">
					<h2 align="center"><b><i>Looking for Restaurants? Search Here!</i></b></h2>
					<TABLE>	
					    <tr>
					    	<td><b>Find Restaurants</b></td>
						    <td>
						    	<input type="Text" name="F_Res" value="" >
					    	    <input type="submit" name="Search" value="Search">
					    	    

						    </td>
					    </tr>
					    <tr>
							<td></td>
						    <td><a href="ShowRList.php"> See Available Restaurants </a></td>
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