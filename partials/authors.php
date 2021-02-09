<?php
//get all authors
    $query2 = "SELECT authorBook.bookId, author.lName
        FROM authorBook
        INNER JOIN author ON authorBook.authorId = author.authorId";

    $result = mysqli_query($db, $query2) or die(mysqli_error($db));;
    $datas = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
        };
        $result->close();
    };
?>    