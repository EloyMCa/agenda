<div style="width:50%;">
  <h4>Agregar Nuevo Contacto</h4>
  <br>
  <br>
  <div id="respuesta">
<form id="contactoForm" method="POST" enctype="text">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="nombre">Nombre(s)</label>
          <input type="text" class="form-control" id="nombre" required>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="apellidos">Apellidos</label>
          <input type="text" class="form-control" id="apellidos" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label for="telefono">Telefono</label>
          <input type="text" class="form-control" id="telefono" required>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="correo">Correo</label>
          <input type="text" class="form-control" id="correo" required>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label for="ocupacion">Ocupación</label>
          <select id="ocupacion" class="form-control">
            <option value="1">Director</option>
            <option value="2">Gerente</option>
            <option value="3">Jefe de Area</option>
            <option value="4">Supervisor</option>
            <option value="5">Empleado</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label for="direccion">Dirección</label>
          <input type="text" class="form-control" id="direccion" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="colonia">Colonia</label>
          <input type="text" class="form-control" id="colonia" required>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="municipio">Municipio / Delegación</label>
          <input type="text" class="form-control" id="municipio" >
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="form-group">
          <label for="estado">Estado</label>
          <input type="text" class="form-control" id="estado" >
        </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="cp">C.P.</label>
          <input type="text" class="form-control" id="cp" >
        </div>
      </div>
    </div>
  </div>
  <a class="btn btn-success" style="color: white; cursor:pointer;" onClick="agregarContacto();">Agregar</a>
  <a href="index.php" class="btn btn-danger">Cancelar</a>
</form>

</div>
</div>