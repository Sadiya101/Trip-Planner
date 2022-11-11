<?php 
    require_once "dbModel.php";
    function hBooking($Name,$email,$cNo, $hN,$location,$nr,$cost)
    {
        $con = getConnection();
        $sql = "insert into hbookingmodel values('','{$Name}', '{$email}', '{$cNo}','{$hN}','{$location}' ,'{$nr}','{$cost}')";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
