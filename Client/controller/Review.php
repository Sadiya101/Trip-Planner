<?php 
session_start();
	if(isset($_COOKIE['s1']))
	{
		//if(isset($_POST['sReview']))
			//{
				$rev=$_POST['Review'];
				$rate=$_POST['rate'];
				require_once"../model/ReviewModel.php";
				$status = AddReviews($rev,$rate);
				if($status)
					{	
						echo"Thank you";

						//header('location:Review.php');
					}
				else
					{
						echo "Error!";
					}
			//}
	}	
				
	else
	{
		echo "invalid request";
	}  
?>