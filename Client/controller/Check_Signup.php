<?php
session_start();
require_once"../model/ClientModel.php";
$name = $_POST['name'];
$email = $_POST['Email'];
$pass = $_POST['Password'];
$Cpass= $_POST['Cpassword'];
$dob = $_POST['dob'];
$country = $_POST['Country'];
$submit = $_POST['submit'];
$counter = 0;

if($name == null || $email == null || $pass == null || $dob == null || $country == null || $Cpass==null )
{
	echo "Error! Empty field!!!<br>";

}

else
{
	//Name
	if($name == null || is_numeric($name[0]) || str_contains($name[0],' ') || str_contains($name[0],'$') || str_contains($name,'$') || str_contains($name,'*') )
		{
			$counter = 1;
			echo "Invalid name <br>";

		}

	elseif(ctype_alpha($name[0])||str_contains($name,'-')||str_contains($name,'.'))
		{
			$counter;
		}
		
	else{}
		
	
	//Email
	if(str_contains($email,'@')||str_contains($email,'+') || str_contains($email,'_')||str_contains($email,'.')|| ctype_alpha($email) ||is_numeric($email) || !str_contains($email,' '))
	    {
			$counter;
		}
	else
		{
			$counter = 1;
			echo "Inval!id email <br>";
		}

    //Password
	if ( str_contains($pass,'@')&& strlen($pass)>=8 ||str_contains($pass,'+') || str_contains($pass,'_')||str_contains($pass,'.')|| ctype_alpha($pass)|| is_numeric($pass)) 
		{
			$counter;
		}
	else 
		{
			$counter = 1;
			echo "Invalid Password <br>";
		}

	//Confirm Password
	if($pass==$Cpass)
		{
			$counter;
		}
	else
		{
			$counter = 1;
			echo "Password didn't match <br>";
		}

    
	if($counter==0)
		{
			$status = Signup($name,$pass,$email,$dob, $country);

			if($status)
			{
				header('location:../view/Login.html');
			}
			else
			{
				header('location:../view/Signup.html');
				
			}
		}

		//File Upload
	$src = $_FILES['myfile']['tmp_name'];
    $des = "upload/".$_FILES['myfile']['name'];

    if(move_uploaded_file($src, $des)){
        echo "success";
    }else{
        echo "Error";
    }
}
?>