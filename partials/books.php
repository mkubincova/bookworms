<?php

$query = "SELECT bookLibrary.bookCopyId, book.title, library.name, bookLibrary.bookId
        FROM bookLibrary 
        LEFT JOIN book ON bookLibrary.bookId = book.bookId
        LEFT JOIN library ON bookLibrary.libraryId = library.libraryId
        WHERE bookLibrary.isReserved = ?";

$stmt = $db->prepare($query);
$stmt->bind_param("i", $isReserved);
$stmt->bind_result($bookCopyId, $title, $library, $bookId);
$stmt->execute();

?>