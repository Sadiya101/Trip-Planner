<?php 

	if(isset($_COOKIE['c1'])){
?>
<html>
	<head>
		<title>Search Transport </title>
	</head>
	<body>
		<form method="post" action="SearchedT.php" enctype="">
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
