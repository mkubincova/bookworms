<?php include "partials/header.php" ?>

<main class="center">
    <?php if ($_SESSION && $_SESSION["userType"] == "admin") { ?>
        <h3>Hello <?php echo $_SESSION["username"] ?></h3>
        <form action="partials/upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <button type="submit" name="submit" class="btn btn-light">Upload</button>
        </form>
    <?php } else { ?>
        <h3 class="text-danger">You are not authorized to view this page</h3>
    <?php } ?>
</main>


<?php include "partials/footer.php" ?>