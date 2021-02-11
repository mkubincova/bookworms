<?php

if(isset($_POST['submit'])){
    $file = $_FILES['fileToUpload'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowedExt = array('jpg', 'jpeg', 'png');
    $allowedTypes = array('image/jpeg', 'image/png');

    if (in_array($fileActualExt, $allowedExt) && in_array($fileType, $allowedTypes)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000){

                $fileNameNew = uniqid('', true) . "." . $fileActualExt; //current time format
                $fileDestination = '../img/gallery/' . $fileNameNew;

                move_uploaded_file($fileTmpName, $fileDestination);

                header("Location: ../admin.php?uploaded=true");
            } else {
                echo "<p>Your file is too big!</p>";
            }
        } else {
            echo "<p>There was an error uploading your file!</p>";
        }
    } else {
        echo "<p>You cannot upload files of this type!</p>";
    }
}



?>