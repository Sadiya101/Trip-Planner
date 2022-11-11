<?php 
session_start();
	if(isset($_COOKIE['s1'])){
?>
<html>
	<head>
		<title>Search Hotel </title>
		<link rel="stylesheet" href="../asset/css/SHotels.css">
		<link rel="stylesheet" href="../asset/css/NaviBar.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	<body>
		<div class="navbar">
			<a href="Logout.php">Logout</a>
			<a href="#settings">Settings</a>
			<a href="Home.php">Home</a>
		</div>
		<div class="container">
		<div class="header">
		<form method="post" action="ShowHInfo.php" enctype="" >
					<h1><b><i>Find Your Desired Hotels</i></b></h1>
					<TABLE>
						
					    <tr>
					    	<td><p><b>Find Hotels</b></p></td>
						    <td>
						    	<input id="F_Hotels" type="Text" name="F_Hotels" value="" onkeyup="Check()" >
					    	    <button align ="right" type="submit" name="Search" value="Search" onsubmit="return  SHotels()">Search</button>
					    	    <span id="errReq"></span>
						    </td>
					    </tr>  
					</TABLE>
					<div id= result> </div>
		</form>
	</div>
</div>
<script src="../asset/js/sHotels.js"></script>
	</body>
</html>

<?php 
	}else{
		echo "invalid request";
	}  
?>

