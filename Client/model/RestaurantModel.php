<?php 
    require_once "dbModel.php";
    function AddRestaurants($Name,$Loc,$Link)
    {
        $con = getConnection();
        $sql = "insert into restaurantmodel values('','{$Name}','{$Loc}','{$Link}')";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            
            return false;
        }
    }
     function ShowRestaurantList()
    {
        $con = getConnection();
        $sql = "select * from restaurantmodel";
        $result = mysqli_query($con, $sql);
        echo "<table border=2 align=center>
        <tr>   
        <td>Restaurant_Name</td>
        <td>Location</td>
        <td>Website</td>                                           
        </tr>";
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>
            <td>{$row['Restaurant_Name']}</td>
            <td>{$row['Location']}</td>
            <td>{$row['Website']}</td>
            </tr>";
        }
            echo "</table>";
    }

    function SearchRestaurants($rName)
    {
        $con = getConnection();
        $sql = "select * from restaurantmodel where Restaurant_Name='{$rName}'";
        $res = mysqli_query($con, $sql);
        $count = mysqli_num_rows($res);

        if($count >0)
        {
            //return true;
            echo "<table border=2 align=center>
            <tr>   
            <td>Restaurant_Name</td>
            <td>Location</td>
            <td>Website</td>                                           
            </tr>";
        while($row = mysqli_fetch_assoc($res))
        {
            echo "<tr>
            <td>{$row['Restaurant_Name']}</td>
            <td>{$row['Location']}</td>
            <td>{$row['Website']}</td>
            </tr>";
        }
            echo "</table>";
        }
        else
        {
            return false;
        }

    }
?>
