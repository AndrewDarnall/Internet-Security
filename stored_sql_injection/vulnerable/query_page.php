<!DOCTYPE html>
<html>
    <head>
        <title>Exploit Query Page</title>
        <style>
            * {text-align: center;}
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
<?php

    require_once('db_connect.php');

    $conn = new mysqli($servername, $username, $password, $database);
 
    $sql = "select * from exploits where item_name = '" . $_POST['exploit'] .  "'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {

        echo "<table class=\"table table-striped\"> <tr> <th> Exploit </th> <th> Price </th> </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['item_name'] . " </td><td>" . $row['item_price'] . "</td>";
            echo "</td>";
        }
        
    } else {
        echo "<br><br><br><h1 style=\"color: red\"> Whoops looks like we're all out of stock </h1>";
    }

    $conn->close();
?>
    <br>
    <br>
    <br>
    <br>
    <h1>Got an exploit? Want to sell it? Let us know what you have and how much you want for it! </h1>
    <form action="./item_insert.php" action="POST">
        <input type="text" name="exploit" placeholder="Exploit name">
        <input type="number" name="price" palceholder="Name your price">
        <button type="submit">Submit</button>
    </form>
    </body>
</html>