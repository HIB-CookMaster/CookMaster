<?php

function getDatabaseConnection()
{
    $user = "ACCMANAGER";
    $password = "PASSACC";
    $con=new PDO('mysql:dbname=MAIN;host=localhost','ACCMANAGER','PASSACC'); 
    return $con;
}

?>