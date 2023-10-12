<?php 
  include('../controller/hor_subir.php');
  include('../model/hor_select_all.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Horarios | E-club</title>
  <!-- LIBRERÍAS CSS -->  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" >
  <link rel="stylesheet" href="../../css/styles.css">
  <!-- META  -->
  <meta name="description" content="Horarios | E-club">
</head>
<body class="bg-foto">
  <div class="container my-5 p-5 shadow-lg ">
    <nav class="navbar navbar-light d-flex">
      <h1>Horarios</h1>
    </nav>

<table class="table table-bordered border-1 bg-white shadow-lg">
    <thead>
      <tr class="bnaranja" >
        <th scope="col">id</th>
        <th scope="col" class="" >Dia</th>
        <th scope="col" class="" >Hora de Inicio</th>
        <th scope="col" class="" >Hora de Finalización</th>
        <th scope="col" class="" >Evento</th>
        <th scope="col" class="" >Categoria</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($solucion as $horario){ ?>
      <tr class="text-center">
        <th><?php echo $horario['id_hor']; ?></th>
        <td><?php echo $horario['dia']; ?></td>
        <td><?php echo $horario['hora_in']; ?></td>
        <td><?php echo $horario['hora_fin']; ?></td>
        <td><?php echo $horario['evento']; ?></td>
        <td><?php echo $horario['categoria']; ?></td>
      </tr>
  <?php }?>
    </tbody>
  </table>

<!-- DELETE FROM `inventario` WHERE `inventario`.`id_emp` = 1 -->

<div class="row justify-content-center">

  
  <?php if(isset($_SESSION['mensaje'])){ ?>
    <div class="row justify-content-end fixed-bottom">
          <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show  w-25 " role="alert">
         <strong><?php echo $_SESSION['mensaje']; ?></strong> 
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </button>
       </div>
          <?php session_unset(); } ?>
          </div>


  <!-- scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- WOW -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
    <script src="../../js/script.js"></script>

</body>
  </html>