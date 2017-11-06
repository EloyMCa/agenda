<?php

include("db.php");

class agenda{

	private $db;
	public $respuesta;

	public function __construct($infoDB){
		$this -> db = new db($infoDB);
	}

	public function verTodos(){
		$query = "SELECT t1.*, t2.ocupacion as ocupacion2, t3.direccion, t3.colonia, t3.municipio, t3.estado, t3.cp FROM agenda as t1 LEFT JOIN ocupacion as t2 ON t1.ocupacion = t2.id LEFT JOIN address as t3 ON t1.id = t3.id_agenda ORDER BY t1.id ASC;";
		$this -> respuesta = $this-> db -> consultarDB($query);
	}

	public function buscarContacto($buscarContacto){
		$query = "SELECT t1.*, t2.ocupacion as ocupacion2, t3.direccion, t3.colonia, t3.municipio, t3.estado, t3.cp FROM agenda as t1 LEFT JOIN ocupacion as t2 ON t1.ocupacion = t2.id LEFT JOIN address as t3 ON t1.id = t3.id_agenda WHERE apellidos LIKE '%".$buscarContacto."%' OR nombre LIKE '%".$buscarContacto."%' ORDER BY apellidos ASC;";
		$this -> respuesta = $this-> db -> consultarDB($query);
	}

	public function buscarContactoId($buscarContacto){
		$query = "SELECT t1.*, t2.ocupacion as ocupacion2, t3.direccion, t3.colonia, t3.municipio, t3.estado, t3.cp FROM agenda as t1 LEFT JOIN ocupacion as t2 ON t1.ocupacion = t2.id LEFT JOIN address as t3 ON t1.id = t3.id_agenda WHERE t1.id = '".$buscarContacto."';";
		$this -> respuesta = $this-> db -> consultarDB($query);
	}

	public function agregarContacto($info){
		$query = "INSERT INTO agenda(nombre, apellidos, telefono, correo, ocupacion) VALUES('".$info['nombre']."','".$info['apellidos']."','".$info['telefono']."','".$info['correo']."','".$info['ocupacion']."');";
		$newId = $this-> db -> insertDB($query);
		$query = "INSERT INTO address(id_agenda, direccion, colonia, municipio, estado, cp) VALUES('".$newId["idInsertado"]."','".$info['direccion']."','".$info['colonia']."','".$info['municipio']."','".$info['estado']."','".$info['cp']."');";
		$newId2 = $this-> db -> insertDB($query);

		return $newId["idInsertado"];

	}

	public function editarContacto($info){
		$query = "UPDATE agenda SET nombre='".$info['nombre']."', apellidos='".$info['apellidos']."', telefono='".$info['telefono']."', correo='".$info['correo']."', ocupacion='".$info['ocupacion']."' WHERE id='".$info['id']."';";
		$filasAfectadas = $this-> db -> updateDB($query);
		$query = "UPDATE address SET direccion='".$info['direccion']."', colonia='".$info['colonia']."', municipio='".$info['municipio']."', estado='".$info['estado']."', cp='".$info['cp']."' WHERE id_agenda='".$info['id']."';";
		$filasAfectadas2 = $this-> db -> updateDB($query);

		return $filasAfectadas;

	}

	public function eliminarContacto($info){
		$query = "DELETE FROM agenda WHERE id='".$info['id']."';";
		$filasAfectadas = $this-> db -> deleteDB($query);
		$query = "DELETE FROM address WHERE id_agenda='".$info['id']."';";
		$filasAfectadas2 = $this-> db -> deleteDB($query);

		return $filasAfectadas;

	}
}

?>