<?php 
    require_once "dbModel.php";
    function Signup($name,$pass,$email,$dob, $country)
    {
        $con = getConnection();
        $sql = "insert into clientmodel values('','{$name}', '{$pass}', '{$email}','{$dob}','{$country}')";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    function Login($name, $pass)
    {
        $con = getConnection();
        $sql = "select * from clientmodel where Client_Name='{$name}'and Password='{$pass}' ";
        $res = mysqli_query($con, $sql);
        $count = mysqli_num_rows($res);

        if($count >0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function ViewProfile($id)
    {
        $con = getConnection();
        $sql = "SELECT * FROM clientmodel WHERE Serial_No.  = ?";
        $sql = $connection->prepare($sql);
        $sql->bind_param("s", $id);
        // $sql->execute();
        // // $res = $sql->get_result();
        $res = mysqli_query($con, $sql);
        $count = mysqli_num_rows($res);

        if($count >0)
        {
            //return true;
            echo "<table border=2 align=center>
            <tr>   
            <td>Client_Name</td>
            <td>Email</td>
            <td>DOB</td>
            <td>Password</td>  
            <td>Country</td>                                           
            </tr>";
        while($row = mysqli_fetch_assoc($res))
        {
            echo "<tr>
            <td>{$row['Client_Name']}</td>
            <td>{$row['Email']}</td>
            <td>{$row['DOB']}</td>
            <td>{$row['Password']}</td>
            <td>Country</td>
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