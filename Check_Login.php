<?php
$name = $_POST['name'];
$pass = $_POST['Password'];

//for($i=0;$i<80;$i++)
	//{
		if($name == null || $pass == null)
		{
			echo "Error! Empty field!!!";

		}

		else
		{    
		    
		    $file = fopen('ClientList.txt', 'r');
		    while (!feof($file)) 
		    {
		    	$info=fgets($file);
		    	$client=explode('|', $info);
		    	if($name == trim($client[0]) && $pass == trim($client[1]))
		    	{
		    		setcookie('c1','true',time()+14400,'/');
		    		header('location:Home.php');
		    	}
		    	
		    }
		    echo "Invalid User!";
		    
		}
	//}
?>