<?php 

	if(isset($_COOKIE['c1'])){
?>

<html>
	<head>
		<title>Booking</title>
	</head>
		<body >
			<center><form method="post" action="Check_Booking.php" enctype="">
				<fieldset>
					<h3><b><u><legend> Booking Details </legend></u></b></h3>
					<TABLE>
						<tr>
							<td><b> Name </b></td>
						    <td><input type="Text" name="name" value="" ></td>
					    </tr>

					    <tr>
						    <td><b>Email</b></td>
						    <td><input type="Email" name="Email" value="" ></td>
					    </tr>

					    <tr>
						    <td><b>Contact no</b></td>
						    <td><input type="Number" name="Contact" value="" ></td>
					    </tr>

					    <tr>
						    <td><b>No. of people</b></td>
						    <td><input type="Number" name="N_people" value="" ></td>
					    </tr>

					    <tr>
						    <td><b>Date</b></td>
						    <td><input type="Date" name="Date" value="" ></td>
					    </tr>

					    <tr>
						    <td><b>Total Amount</b></td>
						    <td><input type="Number" name="Total_amount" value="" ></td>
					    </tr>

					    <tr>
						    <td><b>Payment Method</b></td>
						    <td>
						    	<input type="radio" name="P_method" value="" >Bkash
						    	<input type="radio" name="P_method" value="" >Cards
						    	<input type="radio" name="P_method" value="" >Paypal

						    </td>
					    </tr>
					   
						<tr>
						    <td> </td>
						    <td>
						    	<input type="submit" name="Confirm" value="Confirm Booking">
						    </td>
					    </tr>	
			        </TABLE>
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
