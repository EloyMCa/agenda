<?php
session_start();
$_SESSION['db'] = array(
	'host'=>'127.0.0.1',
	'db'=>'agenda',
	'usuario'=>'root',
	'password'=>''
);


include("view/agenda.php");

//cambioB

?>