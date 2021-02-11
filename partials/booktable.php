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
                            if ($data["bookId"] == $bookId) {
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
                        <button type="submit" class="btn purple"><?php echo ($currentPage == "browse.php") ?  "Reserve" : "Return" ?></button>
                    </form>
                </td>
            </tr>
        <?php } ?>
        <?php $stmt->close() ?>
    </tbody>
</table>