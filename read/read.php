<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>READ</title>
    <link rel="stylesheet" href="read.css">
</head>

<?php
require_once("readInputs.php");
$Shop = "Shop";
$Sector = "Sector";
$Sells = "Sells";

?>

<body>
    <form action="" , method="post">
        <select name="relation_name">
            <option>Choose a Relation</option>
            <option name="Shop">Shop</option>
            <option name="Sector">Sector</option>
            <option name="Sells">Sells</option>
        </select>
        <input class="choose-submit" type="submit" name="submit" value="Search" />
    </form>
    <?php
    if (isset($_POST['relation_name'])) {
        $relation_name = $_POST['relation_name'];
        if ($relation_name == $Shop) {
            echo ShopSearch();
        } elseif ($relation_name == $Sector) {
            echo SectorSearch();
        } elseif ($relation_name == $Sells) {
            echo SellSearch();
        }
    }
    ?>

</body>

</html>