<?php

    // db_credentials
    // in order to connect to a dockerized database you need to be on the same network
    // and you need to have the IP address of the docker container

    // Since the db container address changes at every launch, use the network feature
    // to find the container's IP by the name, must have some sort of DNS

    // start the session
    session_start();

    session_regenerate_id();

    $_SESSION['loggedin'] = false;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <!-- Bootstrap 5 CSS framework -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {text-align:  center;}
    </style>
</head>
<body class="container">
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Cyber Attack Alert System {CAAS}</h1>
    </div>    
    <br>
    <br>
    <h2>Login Page</h2>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="./verify.php">
        <label>Username:</label>
        <input class="form-control" type="text" name="username" required><br><br>
        
        <label>Password:</label>
        <input class="form-control" type="password" name="password" required><br><br>
        
        <input class="btn btn-primary btn-md" type="submit" value="Login">
    </form>
    <br>
    <br>
    <br>
    <h2> Not a user? Register here </h2>
    <form action="./register.php" method="GET">
        <input class="btn btn-primary btn-md" type="submit" name="register" value="Register">
    </form>
</body>
</html>