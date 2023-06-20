<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Credentials Verification</title>
        <!-- Bootstrap 5 CSS framework -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            * {text-align: center;}
        </style>
    </head>
    <body class="container">
<?php

    require_once('db_connect.php');

    $conn = new mysqli($servername, $username, $password, $database);

    $stmt = $conn->prepare("select * from Users where username = ? and password = ?");
    $stmt->bind_param("ss",$_POST['username'],$_POST['password']);
    $stmt->execute();
    
    $result = $stmt->get_result();

    $stmt->close();

    $username = $_POST['username'];
    $username = $conn->real_escape_string($username);

    $sql1 = "insert into Sessions (username,session_id) values ('" . $username . "','" . session_id() . "')";
    $result1 = $conn->query($sql1);

    if($result1 == false) {
        echo "<p styl=\"color: red;\"> Something went wrong with the session ID </p>";
    }

    if($result->num_rows > 0) {

        $_SESSION['loggedin'] = true;
        echo "<div class=\"mt-4 p-5 bg-primary text-white rounded\">";
        echo "<h1 style=\"text-align: center; color: green;\"> Login Succesful </h1></div>";
        $conn->close();
        echo "<br>";
        echo "<form action=\"./index.php\" method=\"GET\"> <input class=\"btn btn-primary btn-md\" type=\"submit\" name=\"Go to website\" value=\"Go to website\"></form>";
    } else {
        $conn->close();
        echo "<div class=\"mt-4 p-5 bg-primary text-white rounded\">";
        echo "<h1 style=\"text-align: center; color: red;\"> Login Failed </h1></div>";
        echo "<br>";
        echo "<form action=\"./login.php\" method=\"GET\"> <input type=\"submit\" name=\"retry\" value=\"Retry\"></form>";
    }

?> 
    </body>
</html>