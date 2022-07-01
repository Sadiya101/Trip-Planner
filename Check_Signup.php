<?php
$name = $_POST['name'];
$email = $_POST['Email'];
$pass = $_POST['Password'];
$dob = $_POST['dob'];
//$Gender= $_POST['Gender'];
$country = $_POST['Country'];
$submit = $_POST['submit'];

if($name == null || $email == null || $pass == null)
{
	echo "Error! Empty field!!!";

}

else
{
	//Name
	if($name == null || is_numeric($name[0]) || str_contains($name[0],' ') || str_contains($name[0],'$') || str_contains($name,'$') || str_contains($name,'*') )
		{
			echo "Invalid name";

		}

	elseif(ctype_alpha($name[0])||str_contains($name,'-')||str_contains($name,'.'))
		{
			echo "Valid name";
		
		}
		
	else{}
		
	
	//Email
	if(str_contains($email,'@')||str_contains($email,'+') || str_contains($email,'_')||str_contains($email,'.')|| $email[$i]== range("a", "z") ||$email[$i]== range("A", "Z") ||$email[$i]== range(0,9) || !str_contains($email,' '))
	    {
			echo "Valid email";
		}
	else
		{
			echo "Invalid email";
		}
	

	if(isset($dob) && isset($gender) && isset($country))
	{
		echo "Success";
	}
	else
	{
		echo "Empty field!!!";
	}

    //Password
		if ( str_contains($pass,'@')&& strlen($pass)>=8 ||str_contains($pass,'+') || str_contains($pass,'_')||str_contains($pass,'.')|| ctype_alpha($pass[$i])|| is_numeric($pass[$i])) 
		{
			echo "Strong password";
		}
		else 
		{
			echo " Password field can not be empty";
		}

    $client = $name."|".$pass."|".$email."|".$dob."|".$country."\r\n";
    $file=fopen('ClientList.txt', 'a');
    fwrite($file, $client);
    header('location:Login.html');   
}
?>