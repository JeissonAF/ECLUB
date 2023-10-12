<?php 
$query = "INSERT INTO horario(dia,hora_in,hora_fin,evento,categoria) values('$dia','$horin','$horfin','$evento','$categoria')";
$solucion = mysqli_query($con,$query);
?>