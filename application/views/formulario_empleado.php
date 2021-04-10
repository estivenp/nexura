 
 
  <div class="content-wrapper" style="margin-left:0px!important">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Crear Empleado</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- COLOR PALETTE -->
        <div class="card card-default color-palette-box" style="width: 70%!important;
    margin-left: 13%!important;">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Los campos con asteriscos (*) son obligatorios</h3>
              </div>
              <form id="form_empl" method="POST" action="index.php/empleados/agregarEmpleado">
                <div class="card-body">
                  <div class="form-group">
                    <label >Nombre Completo*</label>
                    <input type="text" class="form-control" id="nombre" 
                    name="nombre" placeholder="Nombre completo del empleado" required>
                  </div>
                  <div class="form-group">
                    <label >Correo electronico*</label>
                    <input type="email" class="form-control" id="Correo electronico" 
                    name="email" placeholder="email" required>
                  </div>

                  <div class="form-group">
                    <label >Sexo*</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="masculino" id="masculino">
                      <label class="form-check-label">Masculino</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="femenino" id="femenino" >
                      <label class="form-check-label">Femenido</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Area*</label>
                    <select class="form-control" id="area" name="area">
                      <option value="1">Administración</option>
                      <option value="2">Ventas</option>
                      <option value="3">Calidad</option>
                      <option value="4">Producción</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label >Descripcion*</label>
                    <textarea class="form-control" rows="3" required id="descripcion" name="descripcion"
                    placeholder="Descripcion de la experiencia del empleado"></textarea>
                  </div>
                  
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="boletin" name="boletin">
                      <label class="form-check-label">Deseo recibir boletin informativo</label>
                    </div>
                  </div>


                  <div class="form-group">
                    <label >Roles*</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio1" id="desarrollador" name="desarrollador">
                      <label class="form-check-label">Profesional de proyectos - Desarrollador</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gerente" id="gerente">
                      <label class="form-check-label">Gerente estratégico</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="auxiliar" id="auxiliar">
                      <label class="form-check-label">Auxiliar administrativo</label>
                    </div>
                  </div>

                </div>

                <div class="card-footer">
                  <button class="btn btn-danger" >Cancelar</button>
                  <button class="btn btn-primary" type="submit" id="registrar" name="registrar" >Registrar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <script>

$(document).ready(function () {
  $("#basic-form").validate();
})
  

  </script>