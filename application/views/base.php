<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prueba nexura</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="resources/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="resources/css/adminlte.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>


  <!-- <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
    }

    .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
    }

    .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style> -->
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

  <div class="content-wrapper" id="content-wrapper" style="margin-left:0px!important">

  <!-- contenido -->

  </div>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>


<script>
$(document).ready(function () {
  var URLactual = window.location;
  var aux=URLactual.toString().split("/");
  if(aux[aux.length-2]!="prueba_nexura"){
    location.href=aux[0]+"/"+aux[1]+"/"+aux[2]+"/"+aux[3]+"";
    alert("El empleado fue agregado con exito");
  }
  vistaLista();
});

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

</script>

</body>
</html>
