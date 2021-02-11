<?php include "partials/header.php" ?>

<main>
    <form action="" method="get" class="row g-3">
        <div class="col-auto">
            <input type="text" name="author" placeholder="Author..." class="form-control">
        </div>
        <div class="col-auto">
            <input type="text" name="title" placeholder="Book title..." class="form-control">
        </div>
        <div class="col-auto">
            <input type="button" name="submit" value="Search" class="btn btn-light">
        </div>
    </form>


    <?php

    //get all authors
    include "partials/authors.php";

    //get all available books
    $isReserved = 0;
    include "partials/books.php";

    //print table
    include "partials/booktable.php";

    //xxs escaping
    if (isset($_POST['submit'])) {
        $author = $_POST['author'];
        $title = $_POST['title'];

        $author = htmlspecialchars($author, ENT_QUOTES, 'UTF-8');
        $title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    }

    ?>
    
</main>

<?php include "partials/footer.php" ?>