<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
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

            $username = $conn->real_escape_string($username);
            $password = $conn->real_escape_string($password);

            $sql = "insert into Users (username,password) values ('$username','$password')";
            $result = $conn->query($sql);

            
            if($result == true) {
                echo "<h1 style=\"color: green;\"> Succesfully registered </h1>";
                echo "<form action=\"login.php\" method=\"GET\">";
                echo "<input type=\"submit\" value=\"Back to login page\">";
                echo "</form>";
            } else {
                echo "<h1 style=\"color: red;\"> Something went wrong! </h1>";
            }


            $conn->close();
    ?>

</body>
</html>