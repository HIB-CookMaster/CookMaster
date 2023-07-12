<?php

require_once "../helpers/dbhelper.php";

$certif_name = $_GET['certif_name'];
$id_user = $_GET['id_user'];

$certif_name = str_replace(" ", "_", $certif_name);
$certif_name = strtolower($certif_name);

// TABLE name = CERTIFICATION

// Check if the user already has this certification
$con = getDatabaseConnection();
$query = $con->prepare("SELECT * FROM CERTIFICATION WHERE id_user = :id_user AND certif_name = :certif_name");
$query->execute([
    ":id_user" => $id_user,
    ":certif_name" => $certif_name
]);
$result = $query->fetch(PDO::FETCH_ASSOC);
var_dump($result);

if(!$result){
    // If not, add it to the database
    $query = $con->prepare("INSERT INTO CERTIFICATION (id_user, certif_name) VALUES (:id_user, :certif_name)");
    $query->execute([
        ":id_user" => $id_user,
        ":certif_name" => $certif_name
    ]);
    $info = $query->errorInfo();

    header("Location: ../profil/dashboard.php");
} else {
    // If yes, redirect to the dashboard
    header("Location: ../profil/dashboard.php");
}