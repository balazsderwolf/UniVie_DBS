<?php

function CostumerSearch()
{
    $return_form = "<form class=\"update\" action = \"update.php\", method = \"post\">
        <label for=\"id_card_S\">ID Card </label>
        <input type=\"text\" id=\"id_card_S\" name=\"id_card_S\" required = \"required\"><br><br>
        <input type=\"submit\" value=\"Submit\">
     </form>";

    return $return_form;
}

function VehicleSearchP()
{
    $return_form = "<form class=\"update\" action = \"update.php\", method = \"post\">
        <label for=\"licence_plate_P\">Licence Plate </label>
        <input type=\"text\" id=\"licence_plate_P\" name=\"licence_plate_P\" required = \"required\"><br><br>
        <input type=\"submit\" value=\"Submit\">
     </form>";

    return $return_form;
}
function VehicleSearchL()
{
    $return_form = "<form class=\"update\" action = \"update.php\", method = \"post\">
        <label for=\"licence_plate_L\">Licence Plate </label>
        <input type=\"text\" id=\"licence_plate_L\" name=\"licence_plate_L\" required = \"required\"><br><br>
        <input type=\"submit\" value=\"Submit\">
     </form>";

    return $return_form;
}

function updateInputFromCustomer($key)
{
    $return_form = "<form class=\"update\" action = \"update.php\", method = \"post\">
       <label for=\"id_card\">ID Card </label>
        <input type=\"text\" id=\"id_card\" name=\"id_card\" required = \"required\" value = \"" . $key . "\" readonly><br><br>
        
        <label for=\"first_name\">First Name </label>
        <input type=\"text\" id=\"first_name\" name=\"first_name\" required = \"required\" ><br><br>
        
        <label for=\"last_name\">Last Name </label>
        <input type=\"text\" id=\"last_name\" name=\"last_name\" required = \"required\"><br><br>
        
        <label for=\"address\">Address </label>
        <input type=\"text\" id=\"address\" name=\"address\" required = \"required\"><br><br>
        
        <input type=\"submit\" value=\"Submit\">
    </form>";
    return $return_form;
}

function updateInputFromPKW($key)
{
    $return_form = "<form class=\"update\" action = \"update.php\", method = \"post\">
       <label for=\"licence_plate\">Licence Plate </label>
        <input type=\"text\" id=\"licence_plate\" name=\"licence_plate\" required = \"required\" value = \"" . $key . "\" readonly><br><br>
        
        <label for=\"price\">Price </label>
        <input type=\"number\" id=\"price\" name=\"price\" required = \"required\" ><br><br>
        
        <label for=\"brand\">Brand </label>
        <input type=\"text\" id=\"brand\" name=\"brand\" required = \"required\"><br><br>
        
        <label for=\"shopID\">ShopID </label>
        <input type=\"number\" id=\"shopID\" name=\"shopID\" required = \"required\"><br><br>
        
        <label for=\"consumption\">Consumption </label>
        <input type=\"number\" id=\"consumption\" name=\"consumption\"><br><br>
        
        <label for=\"doorNr\">DoorNr </label>
        <input type=\"number\" id=\"doorNr\" name=\"doorNr\"><br><br>

        <input type=\"submit\" value=\"Submit\">
    </form>";
    return $return_form;
}

function updateInputFromLKW($key)
{
    $return_form = "<form class=\"update\" action = \"update.php\", method = \"post\">
        
        <label for=\"licence_plate\">Licence Plate </label>
        <input type=\"text\" id=\"licence_plate\" name=\"licence_plate\" required = \"required\" value = \"" . $key . "\" readonly><br><br>
        
        <label for=\"price\">Price </label>
        <input type=\"number\" id=\"price\" name=\"price\" required = \"required\"><br><br>
        
        <label for=\"brand\">Brand </label>
        <input type=\"text\" id=\"brand\" name=\"brand\" required = \"required\" ><br><br>
        
        <label for=\"shopID\">ShopID </label>
        <input type=\"number\" id=\"shopID\" name=\"shopID\" required = \"required\" ><br><br>
        
        <label for=\"platform\">Platform </label>
        <input type=\"number\" id=\"platform\" name=\"platform\"><br><br>
        
        <label for=\"lkw_size\">Size </label>
        <input type=\"number\" id=\"lkw_size\" name=\"lkw_size\"><br><br>
        
        <input type=\"submit\" value=\"Submit\">
    </form>";
    return $return_form;
}
