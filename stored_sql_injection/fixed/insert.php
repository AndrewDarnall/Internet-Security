<?php 

    session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <!-- Bootstrap 5 CSS framework -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {text-align:  center;}
    </style>
</head>
<body>
    <h1>Cyber Attack Alert System {CAAS}</h1>
    <br>
    <br>
    <?php


            require_once('db_connect.php');

            $conn = new mysqli($servername, $username, $password, $database);

            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $sessionid = session_id();

            $username = $conn->real_escape_string($username);
            $password = $conn->real_escape_string($password);
            $email = $conn->real_escape_string($email);
            $address = $conn->real_escape_string($address);


            $sql = "insert into Users (username,password,email,address) values ('$username','$password','$email','$address')";
            $result = $conn->query($sql);
            
            if($result == true) {
                echo "<h1 style=\"color: green;\"> Succesfully registered </h1>";
                echo "<form action=\"login.php\" method=\"GET\">";
                echo "<input type=\"submit\" value=\"Back to login page\">";
                echo "</form>";
            } else {
                echo "<h1 style=\"color: red;\"> Something went wrong! </h1>";
            }

            $sql2 = "insert into Sessions (username,session_id) values ('$username','$sessionid')";
            $result2 = $conn->query($sql2);

            if($result2 == true) {

            } else {
                echo "<h1 style=\"color: red;\"> Something went wrong in query 2! </h1>";
            }


            $conn->close();
    ?>

</body>
</html>