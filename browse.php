<?php include "partials/header.php" ?>

<main class="center">
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

    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Author 1 - Some book
            <button class="btn purple">Reserve</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Author 2 - Some other book
            <button class="btn purple">Reserve</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Author 1 - Another book
            <button class="btn purple">Reserve</button>
        </li>
    </ul>
</main>

<?php include "partials/footer.php" ?>