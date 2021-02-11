<?php include "partials/header.php" ?>

<main class="center">
    <h3>Login</h3>
    <form action="" method="post" style="width: 30%;  margin: 0 auto;">
        <input name="username" type="text" placeholder="Username" class="form-control"><br>
        <input name="password" type="password" placeholder="Password" class="form-control"><br>
        <input type="submit" value="Send" class="btn btn-light">
    </form>


    <?php
    //user authentication
    if (isset($_POST["username"]) && isset($_POST["password"])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
        $password = md5(htmlspecialchars($password, ENT_QUOTES, 'UTF-8'));

        $query = "SELECT *
        FROM User
        WHERE username = ? AND password = ? ";
   
        $stmt = $db->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->bind_result($id, $name, $psw, $type);
        $stmt->execute();

        //set session variables
        while ($stmt->fetch()) {
           
            $_SESSION["userId"] = $id;
            $_SESSION["username"] = $name;
            $_SESSION["password"] = $psw;
            $_SESSION["userType"] = $type;
            $_SESSION["ip"] = $_SERVER['REMOTE_ADDR'];

        }

        if ($_SESSION) {
            header("Location: /lab-1/browse.php");
        } else {
            echo "<p class='text-danger'>Your username or password is incorrect! Please try again.</p>";
        }
  
        $stmt->close();
    };


    ?>
</main>





<?php include "partials/footer.php" ?>