<?php 

    $host = "localhost";
    $dbname = "webtech_project";
    $dbuser = "root";
    $dbpass = "";

    function getConnection()
    {
        global $host;
        global $dbname;
        global $dbpass;
        global $dbuser;
        $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        return $con;
    }
?>
