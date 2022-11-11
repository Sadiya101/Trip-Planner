<?php 
    require_once "dbModel.php";
    function AddHotels($Name,$location,$Type,$Link)
    {
        $con = getConnection();
        $sql = "insert into hotelmodel values('','{$Name}', '{$location}', '{$Type}','{$Link}')";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            
            return false;
        }
    }



    function ShowHotelList()
    {
        $con = getConnection();
        $sql = "select * from hotelmodel";
        $result = mysqli_query($con, $sql);
        echo "<table border=2 align=center>
        <tr>   
        <td>Hotel_Name</td>
        <td>Location</td>
        <td>Type</td>
        <td>Website</td>                                           
        </tr>";
        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>
            <td>{$row['Hotel_Name']}</td>
            <td>{$row['Location']}</td>
            <td>{$row['Type']}</td>
            <td>{$row['Website']}</td>
            </tr>";
        }
            echo "</table>";
    }

    function SearchHotels($hName)
    {
        $con = getConnection();
        // $sql = "select * from hotelmodel where Hotel_Name='{$hName}'";
        $sql = "select * from hotelmodel where Hotel_Name like '%{$hName}%'";
        $res = mysqli_query($con, $sql);
        $count = mysqli_num_rows($res);

        if($count >0)
        {
            //return true;
            echo "<table border=1 align=center>
            <tr>   
            <td>Hotel_Name</td>
            <td>Location</td>
            <td>Type</td>
            <td>Website</td>                                           
            </tr>";
        while($row = mysqli_fetch_assoc($res))
        {
            echo "<tr>
            <td>{$row['Hotel_Name']}</td>
            <td>{$row['Location']}</td>
            <td>{$row['Type']}</td>
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