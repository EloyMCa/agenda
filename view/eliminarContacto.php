
<?php

session_start();

include("../assets/agenda.php");
include("../assets/tabla.php");

$agenda = new agenda($_SESSION['db']);

$agenda -> buscarContactoId($_POST['id']);

$respuesta = $agenda -> respuesta;

?>

<div style="width:50%;">
  <h4>¿Seguro desea Eliminar Contacto?</h4>
  <br>
  <br>
  <div id="respuesta">
<form id="contactoForm" method="POST" enctype="text">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="nombre">Nombre(s)</label>
          <b><?php echo utf8_encode($respuesta[0]['nombre']); ?></b>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="apellidos">Apellidos</label>
          <b><?php echo utf8_encode($respuesta[0]['apellidos']); ?></b>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label for="telefono">Telefono</label>
          <b><?php echo utf8_encode($respuesta[0]['telefono']); ?></b>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="correo">Correo</label>
          <b><?php echo utf8_encode($respuesta[0]['correo']); ?></b>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="ocupacion">Ocupación</label>
          <b><?php echo utf8_encode($respuesta[0]['ocupacion2']); ?></b>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label for="direccion">Dirección</label>
          <b><?php echo utf8_encode($respuesta[0]['direccion']); ?></b>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="colonia">Colonia</label>
          <b><?php echo utf8_encode($respuesta[0]['colonia']); ?></b>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="municipio">Municipio / Delegación</label>
          <b><?php echo utf8_encode($respuesta[0]['municipio']); ?></b>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="estado">Estado</label>
          <b><?php echo utf8_encode($respuesta[0]['estado']); ?></b>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="cp">C.P.</label>
          <b><?php echo utf8_encode($respuesta[0]['cp']); ?></b>
        </div>
      </div>
    </div>
  </div>
  <a class="btn btn-danger" style="color: white; cursor:pointer;" onClick="eliminarContactoAccion('<?php echo $_POST['id']; ?>');">Eliminar</a>
  <a href="index.php" class="btn btn-success">Cancelar</a>
</form>

</div>
</div>