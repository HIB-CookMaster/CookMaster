<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    session_start();

    // Connects to DB using PDO
    function getDatabaseConnection()
    {
        $user = "ACCMANAGER";
        $password = "PASSACC";
        $con=new PDO('mysql:dbname=MAIN;host=localhost','ACCMANAGER','PASSACC'); 
        return $con;
    }

    $first_name = isset($_POST['first-name']) ? $_POST['first-name'] : null;
    $last_name = isset($_POST['last-name']) ? $_POST['last-name'] : null;

    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $birthday = isset($_POST['birthday']) ? $_POST['birthday'] : null;

    $password = isset($_POST['password']) ? $_POST['password'] : null;
    $password2 = isset($_POST['password2']) ? $_POST['password2'] : null;

    if($first_name == null || $last_name == null || $email == null || $birthday == null || $password == null || $password2 == null) {
        die("Please fill in all the fields");
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email");
    }

    if($password != $password2) {
        die("Passwords do not match");
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $con = getDatabaseConnection();
    $query = $con->prepare("INSERT INTO USERS (first_name, surname, email, date_of_birth, password) VALUES (:first_name, :last_name, :email, :birthday, :password);");
    $query->execute([
        ":first_name" => $first_name,
        ":last_name" => $last_name,
        ":email" => $email,
        ":birthday" => $birthday,
        ":password" => $password
    ]);

    // Pour débug
    $info = $query->errorInfo();

    if ($info[2] == NULL) {
        echo "Account created successfully";
    } else {
        echo "Serverside error creating account";
    }
?>