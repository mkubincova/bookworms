<?php include "config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #48426d;">
            <div class=" container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link <?php echo ($currentPage == "index.php" || $currentPage == " ") ?  "active" : " " ?>" href="index.php">Home</a>
                        <a class="nav-link <?php echo ($currentPage == "about.php") ?  "active" : " " ?>" href="about.php">About us</a>
                        <a class="nav-link <?php echo ($currentPage == "browse.php") ?  "active" : " " ?>" href="browse.php">Browse books</a>
                        <a class="nav-link <?php echo ($currentPage == "mybooks.php") ?  "active" : " " ?>" href="mybooks.php">My books</a>
                        <a class="nav-link <?php echo ($currentPage == "contact.php") ?  "active" : " " ?>" href="contact.php">Contact us</a>
                    </div>
                </div>
            </div>
        </nav>
        <img src="img/header-img-01.jpg" alt="bookworms">
    </header>