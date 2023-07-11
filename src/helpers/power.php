<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once "dbhelper.php";

// Get the power level of a user
function getPowerLevel($email)
{
    $con = getDatabaseConnection();
    $query = $con->prepare("SELECT power FROM USERS WHERE email = :email;");
    $query->execute([
        ":email" => $email
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    var_dump($result);
    return $result['power'];
}

// Gives the word of a power level
function powerToString($power) {
    switch($power) {
        case 0:
            return "User";
        case 1:
            return "Cook";
        case 2:
            return "Moderator";
        case 3:
            return "Administrator";
        default:
            return "Unknown";
    }
}

?>