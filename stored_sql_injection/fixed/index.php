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
        <!-- Bootstrap 5 CSS framework -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            * {text-align: center;}
        </style>
    </head>
    <body class="container">
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Recent Cyber Attacks</h1>
        </div>

        <div class="container mt-3">
            <p> This page shows the latest Cyber Attacks that occurred in these past few years ... </p>                                
            <h3>Due to GDPR regulations we need to show you all of the data that we have collected from you, if you do not wish for us to 
                keep your information, contact HR and they will remove your account 
            </h3>
        </div>

        <form action="./user_info.php" method="GET">
        <input type="submit" class="btn btn-primary btn-md" name="register" value="My Info">
    </form>
    </body>
</html>