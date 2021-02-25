<?php include "partials/header.php" ?>

<?php
//save img to gallery
if (isset($_GET["getImg"])) {
    $img_url = "https://picsum.photos/500/400";
    $img_path = "./img/gallery/" . uniqid('', true) . ".jpg";

    file_put_contents($img_path, file_get_contents($img_url));
};

?>


<main class="center">
    <h3>Gallery</h3>
    <form action="" method="GET" class="box">
        <button type="submit" name="getImg" value="true" class="btn btn-light">New Image</button>
    </form>


    <div class="row">

    <!-- Only display one img, no saving to gallery -->
        <?php /*if (isset($_GET["getImg"])){ ?>
            <div class="col-sm-6 col-md-4 col-lg-3 item">
                <img src="https://picsum.photos/300/200" alt="random-img">
            </div>
        <?php } */?>


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