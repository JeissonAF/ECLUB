<!--  select del html  -->
<select name="">
<option value="0">seleccione...</option>    

<?php
//colocar el nombre del archivo de la conexion
include("conexion.php");
//se declaran variables para el cargue de la informacion y el query de seleccion de datos de la tabla que se desea 
$tipodoc="SELECT * FROM TipDoc";

//la variable conexion viene del archivo de conexion a la base de datos
$resultado=mysqli_query($conexion,$tipodoc);
while($valores = mysqli_fetch_array($resultado)){
    echo'<option value="'  .$valores[nombre]. '">' .$valores[nombre]. '</option>';
}
?>

</select>