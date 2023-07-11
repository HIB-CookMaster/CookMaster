<?php

require_once "../helpers/dbhelper.php";

$submitted_login = isset($_POST['login']) ? $_POST['login'] : null;
$submitted_password = isset($_POST['password']) ? $_POST['password'] : null;

if($submitted_login == null || $submitted_password == null) {
    die("Please fill in all the fields");
}

$con = getDatabaseConnection();
$query = $con->prepare("SELECT email, password FROM USERS WHERE email = :email;");
$query->execute([
    ":email" => $submitted_login
]);
$result = $query->fetch(PDO::FETCH_ASSOC);
$result_password = $result['password'];
$matching = password_verify($submitted_password, $result_password);

// Return json response
header('Content-Type: application/json');
echo json_encode([
    "success" => $matching
]);

?>