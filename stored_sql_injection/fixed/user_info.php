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
        <title>Contact Info</title>
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
            <h1>Your Information</h1>
        </div>
        <table class="table table-striped">
            <tr><th>Username</th><th>Email</th><th>Address</th></tr>
            <?php 

                require_once('db_connect.php');

                $conn = new mysqli($servername, $username, $password, $database);

                // I know that this works only temporairly, it would need to be updated at every login once the session
                // expires, but building a fully developed web app goes beyond the scope of the project
                // Thus this will suffice for a live demo where the session id doesn't expire
                $sessionid = session_id();

                $sql = "select username from Sessions where session_id = '$sessionid'";
                $result = $conn->query($sql);

                if($result == true) {

                    $row = $result->fetch_assoc();

                    $username = (string)$row['username'];

                    // Pathced up code
                    $stmt = $conn->prepare("select username, email, address from Users where username = ?");
                    $stmt->bind_param("s",$username);
                    $stmt->execute();
                    
                    $result2 = $stmt->get_result();

                    $stmt->close();
                    
                    if($result2 == true) {

                        $row2 = $result2->fetch_assoc();
                        echo "<tr><td>" . $row2['username'] . "</td><td>" . $row2['email'] . "</td><td>" . $row2['address'] . "</td></tr>"; 

                    } else {
                        echo "<p style=\"color: red;\"> Internal query error </p>";
                    }

                } else {
                    echo "<p style=\"color: red;\"> External query error </p>";
                }

                $conn->close();

            ?>
            </table>
            <br>
            <br>
            <br>
            <form action='./login.php' method='POST'>
                <input class="btn btn-primary btn-md" type="submit" value="logout">    
                <inut type="hidden" value="logout">
            </form>
    </body>
</html>