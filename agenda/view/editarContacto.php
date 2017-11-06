
<?php

session_start();

include("../assets/agenda.php");
include("../assets/tabla.php");

$agenda = new agenda($_SESSION['db']);

$agenda -> buscarContactoId($_POST['id']);

$respuesta = $agenda -> respuesta;

?>

<div style="width:50%;">
  <h4>Editar Contacto</h4>
  <br>
  <br>
  <div id="respuesta">
<form id="contactoForm" method="POST" enctype="text">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="nombre">Nombre(s)</label>
          <input type="text" class="form-control" id="nombre" value="<?php echo utf8_encode($respuesta[0]['nombre']); ?>" required>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="apellidos">Apellidos</label>
          <input type="text" class="form-control" id="apellidos" value="<?php echo utf8_encode($respuesta[0]['apellidos']); ?>" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label for="telefono">Telefono</label>
          <input type="text" class="form-control" id="telefono" value="<?php echo utf8_encode($respuesta[0]['telefono']); ?>" required>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="correo">Correo</label>
          <input type="text" class="form-control" id="correo" value="<?php echo utf8_encode($respuesta[0]['correo']); ?>" required>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="ocupacion">Ocupación</label>
          <select id="ocupacion" class="form-control">
            <?php 
            $nOcupacion = array();
            for($n=1;$n<=5;$n++){
              $nOcupacion[$n]="";
            }
            $nOcupacion[$respuesta[0]['ocupacion']]="SELECTED";
             ?>
            }
            <option value="1" <?php echo $nOcupacion[1]; ?> >Director</option>
            <option value="2" <?php echo $nOcupacion[2]; ?> >Gerente</option>
            <option value="3" <?php echo $nOcupacion[3]; ?> >Jefe de Area</option>
            <option value="4" <?php echo $nOcupacion[4]; ?> >Supervisor</option>
            <option value="5" <?php echo $nOcupacion[5]; ?> >Empleado</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label for="direccion">Dirección</label>
          <input type="text" class="form-control" id="direccion" value="<?php echo utf8_encode($respuesta[0]['direccion']); ?>" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="colonia">Colonia</label>
          <input type="text" class="form-control" id="colonia" value="<?php echo utf8_encode($respuesta[0]['colonia']); ?>" required>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="municipio">Municipio / Delegación</label>
          <input type="text" class="form-control" id="municipio" value="<?php echo utf8_encode($respuesta[0]['municipio']); ?>">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="estado">Estado</label>
          <input type="text" class="form-control" id="estado" value="<?php echo utf8_encode($respuesta[0]['estado']); ?>">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="cp">C.P.</label>
          <input type="text" class="form-control" id="cp" value="<?php echo utf8_encode($respuesta[0]['cp']); ?>">
        </div>
      </div>
    </div>
  </div>
  <a class="btn btn-success" style="color: white; cursor:pointer;" onClick="editarContactoAccion('<?php echo $_POST['id']; ?>');">Editar</a>
  <a href="index.php" class="btn btn-danger">Cancelar</a>
</form>

</div>
</div>