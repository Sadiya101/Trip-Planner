<?php 

	if(isset($_COOKIE['c1'])){
?>

<html>
	<head>
		<title>Home Page</title>
	</head>
	<body>
		<center><form>
			<fieldset style="width: 700px;height: 350; margin: 150px 200px 200px">
					<h1 align="center"><b><i>Trip Planner</i></b></h1>
					<h3 align="center"><b><i>Make Your Trips Easier</i></b></h3>	
					<hr noshade="" width="600">	
					<a href="Available_Packages.php"> Available Packages </a><br/>
					<a href="AddPackages.html"> Add Packages </a><br/>
					<a href="SearchRestaurants.php"> Restaurants </a><br/>
					<a href="SearchHotels.php"> Hotels </a><br/>
					<a href="RTansport.php"> Transport </a><br/>
					<a href="Booking.html"> Book Now </a><br/>
					<a href="Review.php"> Review </a><br/>
					<a align="center" href="logout.php"> logout </a>
					<hr noshade="" width="600">
			</fieldset>
		</form>
		</center>
	</body>
</html>

<?php 
	}else{
		echo "invalid request";
	}  
?>