<?php 

	if(isset($_COOKIE['c1'])){
?>

<html>
	<head>
		<title>Review</title>
	</head>

	<body  style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
		<form method="post" action="Review.php" enctype="">


			<fieldset style="width: 600px;height: 200; margin: 200px 400px 200px">
				<h1 align="center"><b><i>Share Your Experience,Write a Review</i></b></h1>
				<h3><a href=""></a></h3>
				<table>
					<tr>
						<td>
							<input type="Text" name="Review" value="" placeholder="what would you like to review?" >
							<input type="submit" name="sReview" value="submit">	
						</td>
					</tr>
					<tr>
						<td>Rate Us
							<input type="radio" name="rate" value="*">*
							<input type="radio" name="rate" value="**">**
							<input type="radio" name="rate" value="***">***
							<input type="radio" name="rate" value="****">****
							<input type="radio" name="rate" value="*****">*****
						</td>
					</tr>
					<tr>
						<td><a href="SeeReviews.php">View Reviews</a></td>
					</tr>
				</table>
			</fieldset>
		</form>
				<?php
					if(isset($_POST['sReview']))
					{
						$rev=$_POST['Review'];
						$rate=$_POST['rate'];
						$cReview = $rev."|".$rate."\r\n";
					    $file=fopen('Reviews.txt', 'a');
					    fwrite($file, $cReview);

					}	
				?>
	</body>
</html>

<?php 
	}else{
		echo "invalid request";
	}  
?>