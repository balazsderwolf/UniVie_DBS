<?php
function ShopSearch()
{
    $return_form = "<form class=\"read\" action = \"read.php\", method = \"post\">
        <label for=\"shopID\">ShopID </label>
        <input type=\"number\" id=\"shopID\" name=\"shopID\" required = \"required\"><br><br>
        <input type=\"submit\" value=\"Submit\">
     </form>";

    return $return_form;
}

function SectorSearch()
{
    $return_form = "<form class=\"read\" action = \"read.php\", method = \"post\">
        <label for=\"sectorID\">SectorID </label>
        <input type=\"number\" id=\"sectorID\" name=\"sectorID\" required = \"required\"><br><br>
        <input type=\"submit\" value=\"Submit\">
     </form>";

    return $return_form;
}

function SellSearch()
{
    $return_form = "<form class=\"read\" action = \"read.php\", method = \"post\">
        <label for=\"licence_plate\">Licence Plate </label>
        <input type=\"text\" id=\"licence_plate\" name=\"licence_plate\" required = \"required\"><br><br>
        <input type=\"submit\" value=\"Submit\">
     </form>";

    return $return_form;
}
