


<html>
	<head>
		<style src="assets/style.css"></style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script type="text/javascript" src="assets/jquery.js"></script>
	</head>
	<body>
		<div class="container-fluid">
		<h1>AGENDA</h1>
		<div id="vista">
			<button class="btn btn-success" onClick="nuevoContacto();">Nuevo Contacto</button>
			<br><br>
			
				<div style="width:25%">
					Buscar:<br>
					<input type="text" id="buscarContacto" class="form form-control">
					<input type="submit" id="buscarContactoBtn" class="btn btn-primary" onClick="buscarContacto();" value="Buscar">
				</div>
				
			
			<br><br>
			<div id="respuesta">
			<?php

			include("controller/buscar.php");

			?>
			</div>

		</div>
		</div>
		<script type="text/javascript" src="assets/agenda.js"></script>

	</body>
</html>