<?php include "partials/header.php" ?>

<main>
    <h3 class="center">My books</h3>

    <?php

    //get all authors
    include "partials/authors.php";

    //get all reserved books
    $isReserved = 1;
    include "partials/books.php";

    //print table
    include "partials/booktable.php";

    ?>

</main>

<?php include "partials/footer.php" ?>