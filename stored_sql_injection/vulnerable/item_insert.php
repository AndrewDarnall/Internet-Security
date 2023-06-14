<!DOCTYPE html>
<html>
    <head>
        <title>Item Insertion Page</title>
        <style>
            * {text-align: center;}
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>

    <?php

    require('db_connect.php');

    $conn = new mysqli($servername, $username, $password, $database);

    $sql = "insert into exploits (item_name,item_price) values ('" . $_POST['exploit'] . "','" . $_POST['price'] . "')";
    
    if($conn->query($sql)) {
        echo "<script> console.log(\"item inserted succesfully\"); </script>";
    } else {
        echo "<script> console.error(\"Trouble inserting item\"); </script>";
    }

    $conn->close();

?>

        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Thank you for your submission, our sales team will get in touch with you shortly!</h1>
            <br>
            <br>
            <h3>Feel free to browse for more exploits!</h3>
        </div>

    </body>
</html>