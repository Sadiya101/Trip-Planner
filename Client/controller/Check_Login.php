<?php
session_start();
require_once"../model/ClientModel.php";
$name = $_POST['name'];
$pass = $_POST['Password'];


	if($name == null || $pass == null)
	{
		echo "Error! Empty field!!!";

	}

	else
	{    
		$status = Login($name, $pass);
		    
		if($status)
		   	{
		   		$_SESSION['s1'] = true;
	    		setcookie('s1','true',time()+14400,'/');
	    		header('location:../view/Home.php');
	    	}
		else
	    	{
	    		echo "Invalid User!";
	    	}
		    	    
	}
	// $json =$_POST['data'];
    // $user = ['username'=> 'Sadia', 'password'=>'123456789'];
	$user = [$allUsers];
	$allUsers= [u1,u2];
	$u1= ['username'=> 'Sadia', 'password'=>'123456789'];
	$u2=['username'=> 'Bhitto', 'password'=>'22222222'];
	$u3=['username'=> 'Leon', 'password'=>'33333333'];
    $json = json_encode($user);
	echo($json);
   
?>	