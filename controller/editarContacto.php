<?php

session_start();

include("../assets/agenda.php");
include("../assets/tabla.php");

$agenda = new agenda($_SESSION['db']);

$newID = $agenda -> editarContacto($_POST);

echo "<div class='alert alert-info'>Se ha editado el contacto con el ID ".$_POST['id']."</div><br><a href='index.php' class='btn btn-success'>Inicio</a>";

?>