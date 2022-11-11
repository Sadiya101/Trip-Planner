<?php 
session_start();
	if(isset($_COOKIE['s1'])){
?>
 
<html>
	<head>
		<title>Home Page</title>
		<link rel="stylesheet" href="../asset/css/Home.css">
		<link rel="stylesheet" href="../asset/css/NaviBar.css">
		
	</head>
	<body>
		<div class="navbar">
  <a href="Logout.php">Logout</a>
  <a  href="../view/ViewProfile.html">My profile</a>
  <a href="Home.php">Home</a>
  
</div>

<div class="main">
	<div class="container">
     	<div class="header">
		<center><form>
					<h1 align="center"><b><i>Trip Planner</i></b></h1>
					<div class="dropdown">
					  <button><b>Packages</b></button><br/>
					  <div class="dropdown-content">
					  <a href="../controller/Available_Packages.php" class="button"><b> Available Packages</b> </a>
					<a href="AddPackages.html" class="button"><b> Customize Packages</b> </a><br/>
					  </div>
					</div>
					<br/>
					<div class="dropdown">
					  <button><b>Hotels</b></button>
					  <div class="dropdown-content">
					  <a href="SearchHotels.php" class="button"><b>Search Hotels</b>
					  <a href="ShowHList.php" class="button"><b>See Available Hotels</b>
					   </a><br/>
					  </div>
					</div>
					<br/>
					<div class="dropdown">
					  <button><b>Restaurants</b></button>
					  <div class="dropdown-content">
					  <a href="SearchRestaurants.php" class="button"><b>Search Restaurants </b></a><br/>
					  <a href="ShowRList.php" class="button"><b>See Available Restaurants </b></a><br/>
					  </div>
					</div>
					<br/>
					<div class="dropdown">
					  <button><b>Transports</b></button>
					  <div class="dropdown-content">
					  	<a href="../controller/RTansport.php" class="button"><b>Search Transports</b> </a><br/>
					  </div>
					</div>
					<br/>
					<div class="dropdown">
					  <button><b>Booking</b></button>
					  <div class="dropdown-content">
					  <a href="HBooking.html" class="button"> Book Hotels </a><br/>
						<a href="RBooking.html" class="button"> Book Restaurants </a><br/>
						<a href="TBooking.html" class="button"> Book Transports </a><br/>
					  </div>
					</div>
					<br/>
					<div class="dropdown">
					  <button><b>Reviews</b></button>
					  <div class="dropdown-content">
					  <a href="Reviews.html" class="button"> Review </a><br/>
					  </div>
					</div>		
		</form>
		</center>
	</div>
</div>
</div>
	</body>
</html>

<?php 
	}else{
		echo "invalid request";
	}  
?>