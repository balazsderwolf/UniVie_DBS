<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="delete.css">
    <title>DELETE</title>
</head>
<?php
require_once("deleteInputs.php");
$Vehicle = "Vehicle";
$Talk = "Talk";


?>

<body>
    <form action="" , method="post">
        <select name="relation_name">
            <option>Choose a Relation</option>
            <option name="Vehicle">Vehicle</option>
            <option name="Talk">Talk</option>
        </select>
        <input class="choose-submit" type="submit" name="submit" value="Delete" />
    </form>

    <?php
    if (isset($_POST["relation_name"])) {
        $redirect_to = $_POST["relation_name"];
        if ($redirect_to == $Vehicle) {
            echo createInputFromVehicle();
        } elseif ($redirect_to == $Talk) {
            echo createInputFromTalk();
        }
    } else {
        if (isset($_POST["licence_plate"])) {
            echo $_POST["licence_plate"];
            echo "\nWe executed your request - Redirecting in 3sec";
            header("refresh: 3; url = \"delete.php\"");
        } elseif (isset($_POST["id_card_1"]) and isset($_POST["id_card_2"])) {
            echo $_POST["id_card_1"];
            echo $_POST["id_card_2"];
            echo "<br>We executed your request - Redirecting in 3sec";
            header("refresh: 3; url = \"delete.php\"");
        }
    }


    ?>
</body>

</html>