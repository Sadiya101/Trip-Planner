<?php 

	if(isset($_COOKIE['c1'])){
?>

<html>
	<head>
		<title>Home Page</title>
	</head>
	<body>
		<center><form>
			<fieldset style="width: 350px; margin: 200px 200px 200px">
					<h1 align="center"><b><i>Trip Planner</i></b></h1>
					<a href="Available_Packages.php"> Available Packages </a><br/>
					<a href="AddPackages.html"> Add Packages </a><br/>
					<a href="SearchRestaurants.php"> Restaurants </a><br/>
					<a href="SearchHotels.php"> Hotels </a><br/>
					<a href="Booking.html"> Book Now </a><br/>
					<a href="Review.php"> Review </a><br/>
					<a href="Tguide.php"> Request a Tour Guide </a><br/>
					<a href="logout.php"> logout </a><br/>

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