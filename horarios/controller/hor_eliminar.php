<?php
include ('../model/conexion.php');
session_start();
    $id =$_GET['id'];
    $eliminar = "DELETE FROM horario WHERE id_hor='$id'";
    $resultado = mysqli_query($con,$eliminar); 
    /* ELIMINADO */
    if ($resultado){
    $_SESSION['mensaje'] = 'Empleado eliminado';
    $_SESSION['tipo'] = 'danger';
    header('location:../view/horario.php');
}

?>