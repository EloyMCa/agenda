function buscarContacto(){
	var valorBuscar = document.getElementById("buscarContacto").value;
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("respuesta").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "controller/buscarContacto.php?contacto=" + valorBuscar, true);
	xhttp.send();
}

function nuevoContacto(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("vista").innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "view/nuevoContacto.php", true);
	xhttp.send();
}

function editarContacto(id){
	var formData = new FormData();
	formData.append("id", id);

	$.ajax({
		type: "POST",
		url: "view/editarContacto.php",
		data: formData,
		cache: false,
        contentType: false,
        processData: false,
		success: function( result ) {
			$( "#vista" ).html( result );
		}
	});
}

function editarContactoAccion(id){
	
	var formData = new FormData();
	formData.append("id", id);
	formData.append("nombre", document.getElementById("nombre").value);
	formData.append("apellidos", document.getElementById("apellidos").value);
	formData.append("telefono", document.getElementById("telefono").value);
	formData.append("correo", document.getElementById("correo").value);
	formData.append("ocupacion", document.getElementById("ocupacion").value);
	formData.append("direccion", document.getElementById("direccion").value);
	formData.append("colonia", document.getElementById("colonia").value);
	formData.append("municipio", document.getElementById("municipio").value);
	formData.append("estado", document.getElementById("estado").value);
	formData.append("cp", document.getElementById("cp").value);

	$.ajax({
		type: "POST",
		url: "controller/editarContacto.php",
		data: formData,
		cache: false,
        contentType: false,
        processData: false,
		success: function( result ) {
			$( "#respuesta" ).html( result );
		}
	});
}

function agregarContacto(){
	
	var formData = new FormData();
	formData.append("nombre", document.getElementById("nombre").value);
	formData.append("apellidos", document.getElementById("apellidos").value);
	formData.append("telefono", document.getElementById("telefono").value);
	formData.append("correo", document.getElementById("correo").value);
	formData.append("ocupacion", document.getElementById("ocupacion").value);
	formData.append("direccion", document.getElementById("direccion").value);
	formData.append("colonia", document.getElementById("colonia").value);
	formData.append("municipio", document.getElementById("municipio").value);
	formData.append("estado", document.getElementById("estado").value);
	formData.append("cp", document.getElementById("cp").value);

	$.ajax({
		type: "POST",
		url: "controller/agregarContacto.php",
		data: formData,
		cache: false,
        contentType: false,
        processData: false,
		success: function( result ) {
			$( "#respuesta" ).html( result );
		}
	});
}

function eliminarContacto(id){
	var formData = new FormData();
	formData.append("id", id);

	$.ajax({
		type: "POST",
		url: "view/eliminarContacto.php",
		data: formData,
		cache: false,
        contentType: false,
        processData: false,
		success: function( result ) {
			$( "#vista" ).html( result );
		}
	});
}

function eliminarContactoAccion(id){
	var formData = new FormData();
	formData.append("id", id);

	$.ajax({
		type: "POST",
		url: "controller/eliminarContacto.php",
		data: formData,
		cache: false,
        contentType: false,
        processData: false,
		success: function( result ) {
			$( "#respuesta" ).html( result );
		}
	});
}