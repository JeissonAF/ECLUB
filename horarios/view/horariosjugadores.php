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
    <?php foreach($resultado as $horario){ ?>
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

  <div class="col row p-3"> <button type="button" class="btn btn-dark  w-25" data-bs-toggle="modal" data-bs-target="#subir"><i class="bi bi-arrow-bar-up pe-2"></i>Nuevo</button> </div>
  <?php if(isset($_SESSION['mensaje'])){ ?>
    <div class="row justify-content-end fixed-bottom">
          <div class="alert alert-<?php echo $_SESSION['tipo'] ?> alert-dismissible fade show  w-25 " role="alert">
         <strong><?php echo $_SESSION['mensaje']; ?></strong> 
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </button>
       </div>
          <?php session_unset(); } ?>
          </div>
<!-- Modal -->
<div class=" modal fade" id="subir" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Subir producto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container p-5 text-center">
    <div class="row">
       <div class="col row">
         <form action="../controller/hor_subir.php" method="POST">
          <div class="form-group row">
            <div class="">
              <label  class=" fs-5 py-1 ">Dia</label>
              <select class="form-select" name="dia" id="">
                <option value="" selected disabled>Selecciona el dia</option>
                <option value="1">Lunes</option>
                <option value="2">Martes</option>
                <option value="3">Miercoles</option>
                <option value="4">Jueves</option>
                <option value="5">Viernes</option>
                <option value="6">Sabado</option>
                <option value="7">Domingo</option>
              </select>
            </div>
            <div class="">
              <label  class="fs-5 py-1" >Hora de inicio</label>
              <input  class="form-control" type="time" name="horini" >
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Hora de finalización</label>
              <input  class="form-control" type="time" name="horfin" >
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Evento</label>
              <select class="form-select" name="event" id="">
                <option value="1">Entrenamiento</option>
                <option value="2">Partido</option>
              </select>
            </div>
            <div class="">
              <label  class="fs-5 py-1 ">Categoria</label>
              <select class="form-select" name="cat" id="">
                <option value="1">Sub 13</option>
                <option value="2">Sub 14</option>
              </select>
            </div>

          </div>
          
       </div>
       
  </div>
</div>
      </div>
      <div class="modal-footer align-items-center justify-content-around">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <input type="submit" value="Guardar" class="btn btn-primary my-5" name="subir">
      </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>

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