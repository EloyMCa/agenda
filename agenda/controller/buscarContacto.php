<?php

session_start();

include("../assets/agenda.php");
include("../assets/tabla.php");

$agenda = new agenda($_SESSION['db']);

$agenda -> buscarContacto($_GET['contacto']);

$tabla = new tabla();

$respuesta = $agenda -> respuesta;

if(count($respuesta) == 0){
	echo "<div class='alert alert-danger'>\"".$_GET['contacto']."\" No Encontrado</div>";
}else{

	$n=0;
	$info = array();

	foreach($respuesta as $linea){

		$info[$n] = array(
			"Id" => utf8_encode($linea['id']),
			"Nombre" => utf8_encode($linea['nombre']),
			"Apellidos" => utf8_encode($linea['apellidos']),
			"Telefono" => utf8_encode($linea['telefono']),
			"Correo" => utf8_encode($linea['correo']),
			"Ocupacion" => utf8_encode($linea['ocupacion2']),
			"Direccion" => utf8_encode($linea['direccion'].", ".$linea['colonia'].", ".$linea['municipio'].", ".$linea['estado'].", ".$linea['cp'])
		);

		$n++;

	}

	$tabla -> miTabla($info);

}

?>