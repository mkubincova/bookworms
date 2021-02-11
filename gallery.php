<?php include "partials/header.php" ?>

<main class="center">
    <h3>Gallery</h3>
    <div class="row">

        <?php $images = array_reverse(glob("img/gallery/*.{jpg,png,jpeg}", GLOB_BRACE)); ?>

        <?php foreach ($images as $image) { ?>

            <div class="col-sm-6 col-md-4 col-lg-3 item">
                <a href="img/gallery/<?php echo basename($image) ?>" data-lightbox="photos">
                    <img class="img-fluid" src="img/gallery/<?php echo basename($image) ?>">
                </a>
            </div>

        <?php } ?>

    </div>

</main>

<?php include "partials/footer.php" ?>