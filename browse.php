<?php include "partials/header.php" ?>

<main>
    <form action="" method="get" class="row g-3">
        <div class="col-auto">
            <input type="text" placeholder="Author..." class="form-control">
        </div>
        <div class="col-auto">
            <input type="text" placeholder="Book title..." class="form-control">
        </div>
        <div class="col-auto">
            <input type="button" value="Search" class="btn btn-light">
        </div>
    </form>


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


    //get all books
    $query = "SELECT bookLibrary.bookCopyId, book.title, library.name, bookLibrary.bookId
        FROM bookLibrary 
        LEFT JOIN book ON bookLibrary.bookId = book.bookId
        LEFT JOIN library ON bookLibrary.libraryId = library.libraryId
        WHERE bookLibrary.isReserved = 0";

    $stmt = $db->prepare($query);
    $stmt->bind_result($bookCopyId, $title, $library, $bookId);
    $stmt->execute();



    ?>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Copy ID</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Library</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($stmt->fetch()) { ?>
                <tr>
                    <th scope="row"><?php echo $bookCopyId ?></th>
                    <td scope="row"><?php echo $title ?></td>


                    <td>
                        <em>
                        <?php
                            foreach ($datas as $data) {
                                if($data["bookId"] == $bookId){
                                    echo " { " . $data["lName"] . " }";
                                };   
                            };
                        ?> 
                        </em>   
                    </td>

                    <td><?php echo $library ?></td>
                    <td>
                        <form action="partials/reserve.php" method="post" class="btn-form">
                            <input type="hidden" name="id" value="<?php echo $bookCopyId ?>">
                            <button type="submit" class="btn purple">Reserve</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


</main>

<?php include "partials/footer.php" ?>