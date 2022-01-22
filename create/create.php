<html>

<head>
    <title>CREATE</title>
    <link rel="stylesheet" href="create.css">

</head>

<?php
require_once("createInputs.php");
$Employee = "Employee";
$PKW = "PKW";
$LKW = "LKW";

?>

<body>
    <form action="" , method="post">
        <select name="relation_name">
            <option>Choose a Relation</option>
            <option name="Employee">Employee</option>
            <option name="PKW">PKW</option>
            <option name="LKW">LKW</option>
        </select>
        <input class="choose-submit" type="submit" name="submit" value="Create" />
    </form>

    <?php
    if (isset($_POST['relation_name'])) {
        $relation_name = $_POST['relation_name'];
        //echo $relation_name;
        if ($relation_name == $Employee) {
            echo createInputFromEmployee();
        } elseif ($relation_name == $PKW) {
            echo createInputFromPKW();
        } elseif ($relation_name == $LKW) {
            echo createInputFromLKW();
        }
    } else {
        if (isset($_POST["licence_plate"])) {
            echo $_POST["licence_plate"];
            echo "\nWe executed your request - Redirecting in 3sec";
            header("refresh: 3; url = \"create.php\"");
        } elseif (isset($_POST["employeeID"])) {
            echo $_POST["employeeID"];

            echo "<br>We executed your request - Redirecting in 3sec";
            header("refresh: 3; url = \"create.php\"");
        }
    }

    /*$name = "a12030553";
    $psw = "FbUw2020";
    $db_name = "lab";
    $conn = oci_connect($name, $psw, $db_name);
    if (!$conn) {
        echo "ERROR - CANT ACCESS DATABASE";
    }
    $sql = 'SELECT * FROM ABC;';
    $stmt = oci_parse($conn, $sql);
    oci_execute($stmt);

    if (isset($_GET["subm1"])) {
        while ($row = oci_fetch_assoc($stmt)) {
            echo "<br>";
            echo $row['SHOPID'];
        }
    }
    oci_free_statement($stmt);
    oci_close($conn);*/
    ?>
</body>

</html>