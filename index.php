<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Patito System</title>
  <!-- Favicon -->
  <link href="assets/img/brand/logo.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="assets/css/argon.css?v=1.0.0" rel="stylesheet">
  <meta charset="utf-8">
</head>

<body>
  <?php
    require ("parts/header.php");
  ?>
  <div class="contenedor">
  <!-- Clientes -->
  <div id="clientes" class="activo">
    <h1 class="titulo-pagina izquiera" >Clientes</h1>
    <div class="contenedor_peq izquiera">
      <input type="text" name="caja_busqueda" id="caja_busqueda" placeholder="Buscar clientes" class="form-control">
    </div>
    <div class="contenedor_peq derecha">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Nuevo Cliente</button>
    </div>
      <div id="datos">

      </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        include ('formulario-cliente.php');
        ?>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
  <!-- Facturas -->
  <div id="facturas" class="desactivado">
    <h1 class="titulo-pagina izquiera" >Facturas</h1>
      <div class="contenedor_peq izquiera">
        <input type="text" name="caja_busqueda" id="caja_busqueda_facturas" placeholder="Buscar facturas" class="form-control">
      </div>
      <div class="contenedor_peq derecha">
        <button class="btn btn-primary" type="button">Nueva Factura</button>
      </div>
      <div id="datos_factura">

      </div>
  </div>
  <!-- Reportes -->
    <div id="reportes" class="desactivado">
      <h1 class="titulo-pagina" >Reportes</h1>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js"></script>

  <script type="text/javascript">
      
  </script>


</body>

</html>