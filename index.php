<?php
// iniciar session BD
session_start();
$_SESSION['db'] = array(
	'host'=>'127.0.0.1',
	'db'=>'agenda',
	'usuario'=>'root',
	'password'=>''
);

//Iniciar Agenda

include("view/agenda.php");

?>