<?php

    $logged_in = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : false;

    if($logged_in) {
        // later
        die();
    }

    


?>