 
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prueba nexura</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../resources/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../resources/css/adminlte.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background:#343a40;margin-left:0px!important">

    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" tipe="button" style="color:white;cursor:pointer" onclick="vistaLista()" >Listar Empleados</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" tipe="button" style="color:white;cursor:pointer" onclick="vistaRegistrar()" >Registrar Empleado</a>
      </li>
    </ul>
    
    </nav>
  <div class="content-wrapper" style="margin-left:0px!important">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Modificar Empleado</h1>
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
              <form id="form_empl" method="POST" action="index.php/empleados/modificarEmp">
                <div class="card-body">
                <div class="form-group" style="display:none">
                    <label >id</label>
                    <input type="number" class="form-control" id="id" name="id" 
                    value="<?= $empleado->id?>">
                  </div>
                  <div class="form-group">
                    <label >Nombre Completo*</label>
                    <input type="text" class="form-control" id="nombre" value="<?= $empleado->nombre?>"
                    name="nombre" placeholder="Nombre completo del empleado" required>
                  </div>
                  <div class="form-group">
                    <label >Correo electronico*</label>
                    <input type="email" class="form-control" id="Correo electronico" 
                    name="email" placeholder="email" value="<?= $empleado->email?>" required>
                  </div>

                  <div class="form-group">
                    <label >Sexo*</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="masculino" id="masculino"
                      onclick="validarCheckSexo()"
                      <?php if($empleado->sexo=="M"){
                        echo "checked";
                      }
                      ?>
                      
                      >
                      <label class="form-check-label">Masculino</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="femenino" id="femenino" 
                      onclick="validarCheckSexo()"
                      <?php if($empleado->sexo=="F"){
                        echo "checked";
                      }
                      ?>>
                      <label class="form-check-label">Femenino</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Area*</label>
                    <select class="form-control" id="area" name="area" value="<?= $empleado->area?>">
                      <option value="1">Administración</option>
                      <option value="2">Ventas</option>
                      <option value="3">Calidad</option>
                      <option value="4">Producción</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label >Descripcion*</label>
                    <textarea class="form-control" rows="3" required id="descripcion" name="descripcion"
                    placeholder="Descripcion de la experiencia del empleado" 
                    value="<?= $empleado->descripcion?>"></textarea>
                  </div>
                  
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="boletin" name="boletin"
                      <?php if($empleado->boletin==1){
                        echo "checked";
                      }
                      ?>>
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
                  <button class="btn btn-primary" type="submit" id="modificar" name="modificar" >Modificar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>


<script>
$(document).ready(function () {
  var URLactual = window.location;
  var aux=URLactual.toString().split("/");
  history.pushState(null, "", aux[0]+"/"+aux[1]+"/"+aux[2]+"/"+aux[3]+"/");
})
  
  // trae el codigo html de listar los empleados
    function vistaLista() {
        $.ajax({
            url: 'index.php/empleados/getListaEmpleados',
            method: 'POST',
            dataType: 'html',
            data: {},
            success: function (data) {
                $('#content-wrapper').html(data);
            }
        });
    }


// trae el codigo html para registrar un empleado
    function vistaRegistrar() {
        $.ajax({
            url: 'index.php/empleados/vistaAgregarEmpleado',
            method: 'POST',
            dataType: 'html',
            data: {},
            success: function (data) {
                $('#content-wrapper').html(data);
            }
        });
    }

    function validarCheckSexo(){
      var isCheckedMas = document. getElementById('masculino'). checked;
      var isCheckedFem = document. getElementById('femenino'). checked;
      if(isCheckedMas){
        document. getElementById('femenino'). checked=0;
      }
      if(isCheckedFem){
        document. getElementById('masculino'). checked=0;
      }
    }

</script>

</body>
</html>