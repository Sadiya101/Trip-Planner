<?php 
    require_once "dbModel.php";
    function AddPackages($des,$dur,$bud,$hotel,$res,$trans)
    {
        $con = getConnection();
        $sql = "insert into packagemodel values('','{$des}', '{$dur}', '{$bud}','{$hotel}','{$res}','{$trans}')";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function ShowAvailablePackages()
    {
        $con = getConnection();
                    $sql = "select * from packagemodel";
                    $result = mysqli_query($con, $sql);
                    echo "<table border=2 align=center>
                    <tr>
                        
                        <td>Destination</td>
                        <td>Duration</td>
                        <td>Budget</td>
                        <td>Hotel</td>
                        <td>Restaurant</td>
                        <td>Transport</td>
                        
                       
                    </tr>";


                    while($row = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>
                            <td>{$row['Destination']}</td>
                            <td>{$row['Duration']}</td>
                            <td>{$row['Budget']}</td>
                            <td>{$row['Hotel']}</td>
                            <td>{$row['Restaurant']}</td>
                            <td>{$row['Transport']}</td>
                            </tr>";
                    }
                        echo "</table>";

    }

?>