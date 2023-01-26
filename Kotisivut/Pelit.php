<?php

require 'Controller/PeliController.php';
$peliController = new PeliController();

if (isset($_POST['types']))
{
    $peliTablet = $peliController->LuoPeliTablet($_POST['types']);
}
else
{
    $peliTablet = $peliController->LuoPeliTablet('%');
}

$title = 'Pelejä';
$content = $peliController->PeliDropDownList(). $peliTablet;

include 'Template.php';

?>

