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
<body class="container">
    <h1>Cyber Attack Alert System {CAAS}</h1>
    <br>
    <br>
    <?php


        echo "<h2>Signup</h2>";
        echo "<form method=\"POST\" action=\"./insert.php\">";
        echo "    <label>Username:</label>";
            echo "<input class=\"form-control\" type=\"text\" name=\"username\" required><br><br>";
            
            echo "<label>Password:</label>";
            echo "<input class=\"form-control\" type=\"password\" name=\"password\" required><br><br>";
            
            echo "<label>Email:</label>";
            echo "<input class=\"form-control\" type=\"email\" name=\"email\" required><br><br>";

            echo "    <label>Address:</label>";
            echo "<input class=\"form-control\" type=\"text\" name=\"address\" required><br><br>";

            echo "<input class=\"btn btn-primary btn-md\" type=\"submit\" value=\"Register\">";
        echo "</form>";

    ?>

</body>
</html>