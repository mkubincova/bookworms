<?php include "partials/header.php" ?>

<main>
    <form action="" method="get" class="row g-3">
        <div class="col-auto">
            <input type="text" placeholder="Author..." class="form-control">
        </div>
        <div class="col-auto">
            <input type="text" placeholder="Book title..." class="form-control">
        </div>
        <div class="col-auto">
            <input type="button" value="Search" class="btn btn-light">
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

    ?>
    
</main>

<?php include "partials/footer.php" ?>