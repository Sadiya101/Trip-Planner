<?php 
    require_once "dbModel.php";
    function AddReviews($rev,$rate)
    {
        $con = getConnection();
        $sql = "insert into reviewmodel values('','{$rev}', '{$rate}')";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            
            return false;
        }
    }
?>