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
        <title>Home Page</title>
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
        <br>
        <br>
        <br>
        <br>
        <h3>Due to GDPR regulations we need to show you all of the data that we have collected from you, if you do not wish for us to 
            keep your information, contact HR and they will remove your account </h3>
        <form action="./user_info.php" method="GET">
        <input type="submit" name="register" value="My Info">
    </form>
    </body>
</html>