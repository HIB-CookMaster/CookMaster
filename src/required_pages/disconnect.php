<?php

    session_start();

    $logged_in = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : false;

    if($logged_in) {
        $_SESSION['logged_in'] = false;
        $_SESSION['email'] = null;
    }
    header("Location: /CookMaster");
    
?>