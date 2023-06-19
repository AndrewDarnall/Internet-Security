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

            echo "<h2>Signup</h2>";
            echo "<form method=\"POST\" action=\"./insert.php\">";
            echo "    <label>Username:</label>";
                echo "<input type=\"text\" name=\"username\" required><br><br>";
                
                echo "<label>Password:</label>";
                echo "<input type=\"password\" name=\"password\" required><br><br>";
                
                echo "<input type=\"submit\" value=\"Register\">";
            echo "</form>";

    ?>

</body>
</html>