<?php 
$Name=$_POST['Name'];
$location =$_POST['location'];
$Type =$_POST['Type'];
$Link =$_POST['Link'];
if(isset($_COOKIE['c1']))
{
	$Info =$Name."|".$location."|".$Link."\r\n";
	$file=fopen('HotelList.txt', 'a');
	fwrite($file, $Info);
}
else
{
	echo "invalid request";
} 

				   

?>