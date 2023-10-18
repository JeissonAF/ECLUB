<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/horario_editar.css">
</head>
<body>
    
<header>
        <a href="#" class="logo">
            <h2 class="logonombre">E-CLUB</h2>
            <img src="../../IMG/foto.png" alt="logo de la compañia" class="logo-img">
        </a>
    </header>

    <?php 
require('../model/conexion.php');
$id=$_GET["id"];

$mostrarArticulo = "SELECT * FROM horario WHERE id_hor='$id'";
$result = $con->query($mostrarArticulo);

if ($horario= mysqli_fetch_array($result)){

}
?>

    <form action="../controller/hor_editar.php" method="POST">
          
       <section class="form">

       <label  class="titulo">Id</label>
       <br>
        <input type="text" name="" id="" placeholder="" readonly >
        <br>
          
        <label  class="titulo">Dia</label>
        <select class="controls" name="dia" id="" value="<?php
    echo $horario ['dia'];
    ?>">
                <option value="" selected disabled>Selecciona el dia</option>
                <option value="1"  <?php if ($horario['dia']==1) {
                echo ('selected');} ?>>Lunes</option>
                <option value="2" <?php if ($horario['dia']==2) {
                echo ('selected');} ?>>Martes</option>
                <option value="3" <?php if ($horario['dia']==3) {
                echo ('selected');} ?>>Miercoles</option>
                <option value="4" <?php if ($horario['dia']==4) {
                echo ('selected');} ?>>Jueves</option>
                <option value="5" <?php if ($horario['dia']==5) {
                echo ('selected');} ?>>Viernes</option>
                <option value="6" <?php if ($horario['dia']==6) {
                echo ('selected');} ?>>Sabado</option>
                <option value="7" <?php if ($horario['dia']==7) {
                echo ('selected');} ?>>Domingo</option>
              </select>

        <label  class="titulo" >Hora de inicio</label>
        <input  class="controls" type="time" name="horain" value="<?php
    echo $horario ['hora_in'];
    ?>">

        <label  class="titulo">Hora de finalización</label>
        <input  class="controls" type="time" name="horafin" value="<?php
    echo $horario ['hora_fin'];
    ?>">

        
        <label  class="titulo">Evento</label>
              <select class="controls" name="evento" id="" value="<?php
    echo $horario ['evento'];
    ?>">
              <option value=""  selected disabled>Selecciona el evento</option>
                <option value="1" <?php if ($horario['evento']==1) {
                echo ('selected');} ?> >Entrenamiento</option>
                <option value="2" <?php if ($horario['evento']==2) {
                echo ('selected');} ?>>Partido</option>
              </select>


              <label  class="titulo">Categoria</label>
              <select class="controls" name="cat" id="" value="<?php
               echo $horario ['categoria'];
    ?>">
              <option value="" selected disabled>Selecciona la categoria</option>
                <option value="1" <?php if ($horario['categoria']==1) {
                echo ('selected');} ?>>Sub 9</option>
                <option value="2"<?php if ($horario['categoria']==2) {
                echo ('selected');} ?>>Sub 12</option>
                <option value="3"<?php if ($horario['categoria']==3) {
                echo ('selected');} ?>>Sub 15</option>
                <option value="4"<?php if ($horario['categoria']==4) {
                echo ('selected');} ?>>Sub 18</option>
              </select>

        <a href="../view/horario.php" class="boton"> Cancelar</a> 
       <input class="boton2" type="submit" value="Guardar" name="modificar">

       </section>

      
      </form>

    

</body>
</html>