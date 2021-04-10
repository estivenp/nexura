

  <div class="content-wrapper" style="margin-left:0px!important">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lista Empleados</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php if($empleados==false){?>

      <div class="alert alert-info alert-dismissible" style="width: 70%; margin-left: 8%;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-info"></i> Sin empleados</h5>
          No se encontraro empleados registrados en el sistema
      </div>
    <?php }else{?>

    <section class="content">
      <div class="container-fluid">
        <!-- COLOR PALETTE -->
        <div class="card card-default color-palette-box">
        <div class="card-header">
                <!-- <h3 class="card-title">Responsive Hover Table</h3> -->

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" id="modificar" name="modificar"
                    style="border-radius: 7%;">
                    <i class="fas fa-user-plus"></i>&nbsp;&nbsp;Crear</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th><i class="fas fa-user"></i>&nbsp;&nbsp;Nombre</th>
                      <th><i class="fas fa-at"></i>&nbsp;&nbsp;Email</th>
                      <th><i class="fas fa-venus-mars"></i>&nbsp;&nbsp;Sexo</th>
                      <th><i class="fas fa-building"></i>&nbsp;&nbsp;Area</th>
                      <th><i class="fas fa-envelope-open-text"></i>&nbsp;&nbsp;Boletin</th>
                      <th>Modificar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($empleados as $empleado){ ?>
                    <tr>
                      <td><?=$empleado->nombre?></td>
                      <td><?=$empleado->email?></td>
                      <td><?php if($empleado->sexo=="M"){echo "Masculino";}
                        else{echo "Femenino";}?></td>
                      <td><?=$empleado->area?></td>
                      <td><?php if($empleado->boletin==0){echo "NO";}
                        else{echo "SI";}?></td>
                      <td><form action="index.php/empleados/irModificar/<?=$empleado->id?>" method="get">
                      <button ><i class="fas fa-edit"></i></button></form></td>
                      <td><form action="index.php/empleados/irModificar/<?=$empleado->id?>" method="get">
                      <button ><i class="fas fa-trash-alt"></i></button></form></td>
                    </tr>
                  <?php }    ?>
                  </tbody>
                </table>
              </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>

    <?php }?>
  </div>

  <script>

  </script>
  