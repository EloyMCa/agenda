<?php

class db{

	private $conn;
	private $host;
	private $db;
	private $usuario;
	private $password;

	public function __construct($datos){
		$this -> host = $datos['host'];
		$this -> db = $datos['db'];
		$this -> usuario = $datos['usuario'];
		$this -> password = $datos['password'];
	}

	private function conectarDB(){

		$dsn = 'mysql:dbname='.$this -> db.';host='.$this -> host;
		
		try {
		    $this -> conn = new PDO($dsn, $this -> usuario, $this -> password);
		} catch (PDOException $e) {
		    echo 'Falló la conexión: ' . $e->getMessage();
		    exit();
		}
	}

	public function consultarDB($query){
		$this -> conectarDB();
		$resultado = array();
	    foreach ($this -> conn -> query($query) as $row) {
	        $resultado[] = $row;
	    }
	    return $resultado;
	}

	public function insertDB($query){
		$this -> conectarDB();
		$filasAfectadas = $this -> conn -> exec($query);
		$idInsert = $this -> conn -> lastInsertId();
		return array("afectados" => $filasAfectadas, "idInsertado" => $idInsert);
	}

	public function updateDB($query){
		$this -> conectarDB();
		$filasAfectadas = $this -> conn -> exec($query);
		return $filasAfectadas;
	}

	public function deleteDB($query){
		$this -> conectarDB();
		$filasAfectadas = $this -> conn -> exec($query);
		return $filasAfectadas;
	}

}

?>