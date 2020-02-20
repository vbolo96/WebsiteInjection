<?php

require 'Controller/CarController.php';
$carController = new CarController();

if(isset($_POST['tip']))
{
    //Fill page with cars of the selected type
    $carTables = $carController->CreateCarTables($_POST['tip']);
}
else 
{
    //Page is loaded for the first time, no type selected -> Fetch all types
    $carTables = $carController->CreateCarTables('%');
}

//Output page data
$title = 'Cars overview';
$side=" ";
$content = $carController->CreateCarDropdownList(). $carTables;

include 'structura.php';