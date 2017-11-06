<?php

session_start();

include("../assets/agenda.php");
include("../assets/tabla.php");

$agenda = new agenda($_SESSION['db']);

$newID = $agenda -> agregarContacto($_POST);

echo "<div class='alert alert-info'>Se ha insertado un nuevo contacto con el ID ".$newID."</div><br><a href='index.php' class='btn btn-success'>Inicio</a>";

?>