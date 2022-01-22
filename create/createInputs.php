<?php

function createInputFromEmployee()
{

    $return_form = "<form class=\"create\" action = \"create.php\", method = \"post\">
       
        <label for=\"employeeID\">EmployeeID </label>
        <input type=\"text\" id=\"employeeID\" name=\"employeeID\" required = \"required\"><br><br>
       
        <label for=\"language\">Language </label>
        <input type=\"text\" id=\"language\" name=\"language\"><br><br>
       
        <label for=\"first_name\">First Name </label>
        <input type=\"text\" id=\"first_name\" name=\"first_name\"><br><br>
       
        <label for=\"last_name\">Last Name </label>
        <input type=\"text\" id=\"last_name\" name=\"last_name\"><br><br>
       
        <label for=\"shopID\">ShopID </label>
        <input type=\"number\" id=\"shopID\" name=\"shopID\" required = \"required\" ><br><br>
       
        <input type=\"submit\" value=\"Submit\">
    </form>";
    return $return_form;
}

function createInputFromLKW()
{
    $return_form = "<form class=\"create\" action = \"create.php\", method = \"post\">
        
        <label for=\"licence_plate\">Licence Plate </label>
        <input type=\"text\" id=\"licence_plate\" name=\"licence_plate\" required = \"required\"><br><br>
        
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

function createInputFromPKW()
{
    $return_form = "<form class=\"create\" action = \"create.php\", method = \"post\">
       <label for=\"licence_plate\">Licence Plate </label>
        <input type=\"text\" id=\"licence_plate\" name=\"licence_plate\" required = \"required\" ><br><br>
        
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
