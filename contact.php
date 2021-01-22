<?php include "partials/header.php" ?>

<main>
    <div class="flex-container">
        <form action="" method="get" class="box">
            <input name="name" type="text" placeholder="Name" class="form-control"><br>
            <input name="email" type="email" placeholder="Email" class="form-control"><br>
            <textarea name="message" cols="40" rows="5" placeholder="Message" class="form-control"></textarea><br>
            <input type="button" value="Send" class="btn btn-light" style="float: right;">
        </form>
        <div class="box">
            <h3>Got questions? Contact us!</h3>
            <p><strong>Email:</strong> info@bookworms.com</p>
            <p> <strong>Phone:</strong> +46 77 56 89</p>
        </div>
    </div>


</main>

<?php include "partials/footer.php" ?>