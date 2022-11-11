<?php
require_once"../model/ReviewModel.php";

session_start();
if(isset($_COOKIE['s1'])){

?>
<html>
<head>
	<title>Show Reviews </title>
</head>
		<body  style="background:linear-gradient(to bottom, #ffffff 0%, #ccff99 100%);">
			<form>
				<h1><b><i><legend align="center">Show Reviews</legend></i></b></h1>
					<?php
					$con = getConnection();
    				$sql = "select * from reviewmodel";
    				$result = mysqli_query($con, $sql);
					echo "<table border=2 align=center>
            		<tr>
            		 	
		                <td>Reviews</td>
		                <td>Rating</td>
            		</tr>";

					while($row = mysqli_fetch_assoc($result))
		    		{
		        		echo "<tr>
		                    <td>{$row['Reviews']}</td>
		                    <td>{$row['Rating']}</td>		                 
		            		</tr>";
		    		}
		    			echo "</table>";

					?>
		    </form>
		</body>
	</html>
<?php
	}
	else
		{
			echo "invalid request";
		}

?>