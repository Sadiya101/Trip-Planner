<?php
$name = $_POST['name'];
$pass = $_POST['Password'];

for($i=0;$i<80;$i++)
	{
		if($name == null || $pass == null)
		{
			echo "Error! Empty field!!!";

		}

		else
		{
			//Name
			for($i=0;$i<80;$i++)
			{
				if($name == null || is_numeric($name[0]) || str_contains($name[0],' ') || str_contains($name[0],'$') || str_contains($name,'$') || str_contains($name,'*') )
				{
					echo "Invalid name";
					break;
				}

				elseif(ctype_alpha($name[0])||str_contains($name,'-')||str_contains($name,'.'))
				{
					echo "Valid name";
					break;
				}
				
				else
				{
					break;
				}
			}	
		     
		    //Passward
			for($i=0;$i<30;$i++)
			{
				if ( str_contains($pass,'@')&& strlen($pass)>=8 ||str_contains($pass,'+') || str_contains($pass,'_')||str_contains($pass,'.')|| ctype_alpha($pass[$i])|| is_numeric($pass[$i])) 
				{
					echo "Strong password";
					break;
				}
				else 
				{
					echo " Password field can not be empty";
					break;
				}
		    }

		    $file = fopen('ClientList.txt', 'r');
		    while (!feof($file)) 
		    {
		    	$info=fgets($file);
		    	$client=explode('|', $info);
		    	if($name == trim($client[0]) && $pass == trim($client[1]))
		    	{
		    		header('location:Home.html');
		    	}
		    }
		    echo "Invalid User!";
		}
	}
?>