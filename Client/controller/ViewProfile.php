<?php
session_start();

  require_once'../model/ClientModel.php';

  if (!isset($_SESSION['s1'])) {
    exit();
  } 
  else {
    $id = $_SESSION['s1'];

    $info =  ViewProfile($id);
    if (count($info) === 1) {
        foreach ($info as $client) {
            $Name = $client['Client_Name'];
            $Email = $client[' Email'];
            $DoB = $client['DOB'];
            $Password = $client['Password'];
            $Country = $client['Country'];
            $Message = "Welcome " . $tName ;
        }
    } else {
        $Message = "Sorry! Could not get your profile";
    }
}
  ?>
