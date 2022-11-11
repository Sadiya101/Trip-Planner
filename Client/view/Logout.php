<?php
session_start();
session_destroy();
setcookie('s1','true',time()-100,'/');
header('location:../view/Login.html');

?>