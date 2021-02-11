<?php

include "config.php";
include "connect.php";

$bookCopyId = $_POST['id'];
$bookCopyId = htmlspecialchars($bookCopyId, ENT_QUOTES, 'UTF-8');

$query = "UPDATE bookLibrary
        SET isReserved = 1 
        WHERE bookCopyId = ?";

$stmt = $db->prepare($query);
$stmt->bind_param("i", $bookCopyId);
$stmt->execute();

header("Location: ../browse.php?reserved=true");

?>