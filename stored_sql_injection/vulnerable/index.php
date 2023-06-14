<!DOCTYPE html>
<html>
    <head>
        <title>Exploit Emporium Home</title>
        <style> 
            * {text-align: center;}
                .navbar {
                background-color: #f0f0f0;
                padding: 10px;
                }

                .navbar-nav {
                list-style: none;
                display: flex;
                justify-content: space-between;
                align-items: center;
                }

                .nav-item {
                margin-right: 10px;
                }

                .nav-link {
                text-decoration: none;
                color: #333;
                padding: 5px;
                }

                .search-form {
                display: flex;
                }

                .search-form input[type="text"] {
                padding: 5px;
                border: 1px solid #ccc;
                }

                .search-form button {
                padding: 5px 10px;
                background-color: #333;
                color: #fff;
                border: none;
                cursor: pointer;
                }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="mt-4 p-5 bg-primary text-white rounded">
            <h1>Exploit Emporium</h1>
        </div>
        <br>
        <nav class="navbar navbar-expand-sm bg-light">
            <div class="container-fluid">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Top Selling Exploits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Top 10 Hackers for Hire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">The dangers of not knowing math</a>
                </li>
                </ul>
            </div>
            <form class="search-form" action="./query_page.php" method="POST">
                <input type="text" name="exploit" placeholder="Seek the exploit">
                <button type="submit">Search</button>
            </form>
        </nav>
        <p>The Exploit Emporium was founded in June 12th 2023, a website for hackers by hackers<br> we pride ourselves with providing state of the art exploits, and for the right price, top tier zero day exploits!</p>
    </body>
</html>