<?php
include('../model/conexion.php');
session_start();
if(isset($_POST['subir'])){
    $id=$_POST['id']; 
    $dia = $_POST['dia'];
    $horin = $_POST['horini'];
    $horfin = $_POST['horfin'];
    $evento = $_POST['event'];
    $categoria = $_POST['cat'];

    if(!empty($_POST['dia']) && !empty($_POST['horini']) && !empty($_POST['horfin']) && !empty($_POST['event']) && !empty($_POST['cat'])){
        include_once('../model/horario_subir.php');
         if($resultado){
            $_SESSION['mensaje'] = 'Horario agregado exitosamente!';
            $_SESSION['tipo'] = 'success';
            header('location:../view/horario.php');
         }else{
            $_SESSION['mensaje'] = 'Ocurrió un error en el servidor';
            $_SESSION['tipo'] = 'danger';
            header('location:../view/horario.php');
         }
      }else {
         $_SESSION['mensaje'] = 'Debes llenar todos los campos';
         $_SESSION['tipo'] = 'danger';
         header('location:../view/horario.php');
      }
   }
?>