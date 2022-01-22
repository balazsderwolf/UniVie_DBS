<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="update.css">
</head>
<?php
require_once("updateInputs.php");
$Customer = "Customer";
$PKW = "PKW";
$LKW = "LKW";

?>

<body>
    <form action="" , method="post">
        <select name="relation_name">
            <option>Choose a Relation</option>
            <option name="Customer">Customer</option>
            <option name="PKW">PKW</option>
            <option name="LKW">LKW</option>
        </select>
        <input class="choose-submit" type="submit" name="submit" value="Update" />
    </form>

    <?php
    if (isset($_POST['relation_name'])) {
        $relation_name = $_POST['relation_name'];
        //echo $relation_name;
        if ($relation_name == $Customer) {
            echo CostumerSearch();
        } elseif ($relation_name == $PKW) {
            echo VehicleSearchP();
            $is_PKW = true;
        } elseif ($relation_name == $LKW) {
            echo VehicleSearchL();
        }
    } elseif (isset($_POST["id_card"])) {
        echo $_POST["id_card"];
        echo "\nWe executed your request - Redirecting in 3sec";
        header("refresh: 3; url = \"update.php\"");
    } elseif (isset($_POST["licence_plate"])) {
        echo $_POST["licence_plate"];
        echo "\nWe executed your request - Redirecting in 3sec";
        header("refresh: 3; url = \"update.php\"");
    } else {
        if (isset($_POST["id_card_S"])) {
            echo updateInputFromCustomer($_POST["id_card_S"]);
        } elseif (isset($_POST["licence_plate_P"])) {
            echo updateInputFromPKW($_POST["licence_plate_P"]);
        } elseif (isset($_POST["licence_plate_L"])) {
            echo updateInputFromLKW($_POST["licence_plate_L"]);
        }
    }
    ?>
</body>

</html>