<?php
include ('../model/conexion.php');
session_start();
if(isset($_POST['modificar'])){
   $id=$_POST['id']; 
   $dia = $_POST['dia'];
   $hora_in = $_POST['horain'];
   $hora_fin = $_POST['horafin'];
   $event = $_POST['evento'];
   $cat = $_POST['cat'];
  

    //VALIDAR 
    if($dia== "" OR $hora_in=="" OR  $hora_fin=="" OR $event=="" OR  $cat==""){
        $_SESSION['mensaje'] = 'Debes llenar todos los campos';
        $_SESSION['tipo'] = 'danger';
        header('location:../view/horario.php');
    }else{
        require("../model/conexion.php");
        //MODIFICAR
        $modificar = "UPDATE horario SET dia = '$dia', hora_in = '$hora_in',hora_fin = '$hora_fin', evento = '$event', categoria = '$cat'";
        $resultado = mysqli_query($con,$modificar); 
        /* SUBIDO */
        if ($resultado){
        $_SESSION['mensaje'] = 'Datos del horario modificados exitosamente!';
        $_SESSION['tipo'] = 'success';
        header('location:../view/horario.php');
    }
    /* ERROR */
    else{
        $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            $_SESSION['tipo'] = 'danger';
            header('location:../view/horario.php');
    }
    }
   }
?>