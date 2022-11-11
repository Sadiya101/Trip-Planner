<?php 
session_start();
	if(isset($_COOKIE['s1'])){
?>
<html>
	<head>
		<title>Search Transport </title>
	</head>
	<body style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
		<form method="post" action="../controller/SearchedT.php" enctype="">
			<fieldset style="width: 450px; height: 200px; margin: 200px 500px 200px">
					<h2 align="center"><b><i>Find Transports Anytime</i></b></h2>
					<TABLE>
						
					    <tr>
					    	<td><b>Destination</b></td>
						    <td><input type="Text" name="Destination" value="" ></td>	    
					    </tr>
					    <tr>
					    	<td><b>No of Seats</b></td>
							<td><input type="number" name="seats" value="" ></td>				    
					    </tr>
					    <tr>
					    	<td><b>Transport Type</b></td>
						    <td>
						    	<select name="type">
					    		<option value="Bus"> Bus </option>
							    <option value="Car"> Car </option>
							    <option value="Train"> Train </option> 
							    <input type="submit" name="Search" value="Search">   	    
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

