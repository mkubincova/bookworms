<?php include "partials/header.php" ?>

<main>
    <div class="flex-container">
        <form action="" method="post" class="box">
            <input name="name" type="text" placeholder="Name" class="form-control"><br>
            <input name="email" type="email" placeholder="Email" class="form-control"><br>
            <textarea name="message" cols="40" rows="5" placeholder="Message" class="form-control"></textarea><br>
            <button type="submit" name="submit" class="btn btn-light" style="float: right;">Send</button>
        </form>
        <div class="box">
            <h3>Got questions? Contact us!</h3>
            <p><strong>Email:</strong> info@bookworms.com</p>
            <p> <strong>Phone:</strong> +46 77 56 89</p>
        </div>
    </div>

<?php

    //xxs escaping
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');

    }

?>

</main>

<?php include "partials/footer.php" ?>