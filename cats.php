<?php include "partials/header.php" ?>

<?php
$breeds_array = 0;
if (isset($_GET["getBreeds"])) {
    $breeds_url = "https://catfact.ninja/breeds?limit=1000";
    $breeds_json = file_get_contents($breeds_url);
    $breeds_array = json_decode($breeds_json, true);
};


$cat_fact = 0;
if (isset($_GET["getFact"])) {
    $fact_url = "https://catfact.ninja/fact";

    $client = curl_init($fact_url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($client);
    $fact_object = json_decode($response, true);
    $cat_fact = $fact_object["fact"];
};
?>


<main class="flex-container center">
    <form action="" method="GET" class="box">
        <button type="submit" name="getBreeds" value="true" class="btn btn-light">New Breed</button>
        <?php
        if ($breeds_array) {
            $random_index = rand(0, 97);
            $show_breed = $breeds_array["data"][$random_index]["breed"];
            echo "<p>$show_breed</p>";
        }
        ?>
    </form>

    <form action="" method="GET" class="box">
        <input type="hidden">
        <button type="submit" name="getFact" value="true" class="btn btn-light">Cat Fact</button>
        <?php
        if ($cat_fact) {
            echo "<p>$cat_fact</p>";
        }
        ?>
    </form>

</main>


<?php include "partials/footer.php" ?>