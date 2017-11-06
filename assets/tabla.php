<?php

class tabla{
	public function miTabla($informacion){
		echo "<table class='table' >";
		echo "<thead class='thead-dark'>";
		echo "<tr>";
		foreach($informacion[0] as $columna => $info){
			echo "<th>";
			echo $columna;
			echo "</th>";
		}
		echo "<th>";
		echo "Acciones";
		echo "</th>";
		echo "</tr>";
		echo "</thead>";
		echo "<tbody class='thead-light'>";
		foreach($informacion as $filas){
			echo "<tr>";
			foreach($filas as $columna){
				echo "<td>";
				echo $columna;
				echo "</td>";
			}
			echo "<td>";
			echo "<button class='btn btn-warning' onClick=\"editarContacto(".$filas['Id'].");\">Editar</button><button class='btn btn-danger' onClick=\"eliminarContacto(".$filas['Id'].");\">Eliminar</button>";
			echo "</td>";
			echo "</tr>";
		}
		echo "</tbody>";
		echo "</table>";
	}
}

?>