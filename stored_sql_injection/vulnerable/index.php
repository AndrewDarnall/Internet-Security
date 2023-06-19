<?php

    session_start();

    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        // Redirect to login page or display access denied message
        header('Location: login.php');
        exit;
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <style>
            * {text-align: center;}
        </style>
    </head>
    <body>
        <h1>Recent Cyber Attacks</h1>
        <br>
        <br>
        <br>
        <p> This page shows the latest Cyber Attacks that occurred in these past few years ... </p>
    </body>
</html>