<?php
$user_profile_img = "./assets/img/theme/team-4-800x800.jpg";
?>
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
  <!-- Escritorio -->
  <a id="escritorio"></a>
  <div class="escritorio">
    <h1 class="titulo-pagina">Escritorio</h1>


  </div>
  <!-- Clientes -->
  <a id="clientes"></a>
  <div class="clientes">
    <h1 class="titulo-pagina" >Clientes</h1>
        <input type="text" name="caja_busqueda" id="caja_busqueda" placeholder="Buscar">

      <div id="datos">

      </div>
  </div>
  <!-- Facturas -->
  <a id="facturas"></a>
  <div class="facturas">
    <h1 class="titulo-pagina" >Facturas</h1>
      <div class="contenedor">
        <input type="text" name="caja_busqueda" id="caja_busqueda_facturas" placeholder="Buscar">
      </div>

      <div id="datos_factura">

      </div>
  </div>
  <!-- Reportes -->
  <a id="reportes"></a>
    <div class="reportes">
      <h1 class="titulo-pagina" >Reportes</h1>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js"></script>

  <?php
  $a = 5;
  $b = 10;
  $as = $a--;
  $sd = ++$b;
  $asd = $as + $sd;
  echo $asd;
 ?>



</body>

</html>
