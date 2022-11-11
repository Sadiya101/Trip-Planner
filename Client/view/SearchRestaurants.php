<?php
session_start(); 

	if(isset($_COOKIE['s1'])){
?>
<html>
	<head>
		<title>Search Restaurants</title>
	</head>
	<body style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
		<form method="post" action="../view/ShowRInfo.php" enctype="">
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
						    <td><a href="../view/ShowRList.php"> See Available Restaurants </a></td>
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