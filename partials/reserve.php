<?php

include "config.php";
include "connect.php";

$bookCopyId = $_POST['id'];

$query = "UPDATE bookLibrary
        SET isReserved = 1 
        WHERE bookCopyId = ?";


$stmt = $db->prepare($query);
$stmt->bind_param("i", $bookCopyId);
$stmt->execute();

//$result = mysqli_query($db, $query);

header("Location: ../browse.php?reserved=true");


?>