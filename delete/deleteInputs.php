<?php
function createInputFromTalk()
{
    $html_form =
        "<form class=\"delete\" action = \"delete.php\", method = \"post\">
       
        <label for=\"id_card_1\">Person1 ID </label>
        <input type=\"text\" id=\"id_card_1\" name=\"id_card_1\" required = \"required\"><br><br>
       
        <label for=\"id_card_2\">Person2 ID </label>
        <input type=\"text\" id=\"id_card_2\" name=\"id_card_2\" required = \"required\"><br><br>
       
        <input type=\"submit\" value=\"Submit\">
    </form>";

    return $html_form;
}

function createInputFromVehicle()
{
    $html_form =
        "<form class=\"delete\" action = \"delete.php\", method = \"post\">
        
        <label for=\"licence_plate\">Licence Plate </label>
        <input type=\"text\" id=\"licence_plate\" name=\"licence_plate\" required = \"required\"><br><br>
        
        <input type=\"submit\" value=\"Submit\">
    </form>";
    return $html_form;
}
