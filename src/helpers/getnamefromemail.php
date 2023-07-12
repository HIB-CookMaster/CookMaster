<?php

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    require_once "dbhelper.php";

    function getFirstNameFromEmail(string $email) {
        $con = getDatabaseConnection();
        $query = $con->prepare("SELECT first_name FROM USERS WHERE email = :email;");
        $query->execute([
            ":email" => $email
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $first_name = $result['first_name'];
        return $first_name;
    }

    function getLastNameFromEmail(string $email) {
        $con = getDatabaseConnection();
        $query = $con->prepare("SELECT surname FROM USERS WHERE email = :email;");
        $query->execute([
            ":email" => $email
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        $last_name = $result['surname'];
        return $last_name;
    }

    function getFullNameFromEmail(string $email) {
        $first_name = getFirstNameFromEmail($email);
        $last_name = getLastNameFromEmail($email);
        $full_name = $first_name . " " . $last_name;
        return $full_name;
    }

?>