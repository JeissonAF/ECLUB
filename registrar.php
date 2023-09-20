<?php
include("conexion.php");
if (!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['genero']) && !empty($_POST['tipdoc']) && !empty($_POST['numdoc']) && !empty($_POST['rol']) && !empty($_POST['correo']) && !empty($_POST['contrasena'])) {

    $name = $_POST['nombre'];
    $apell = $_POST['apellido'];
    $gen = $_POST['genero'];
    $tipdoc = $_POST['tipdoc'];
    $numdoc = $_POST['numdoc'];
    $rol = $_POST['rol'];
    $email = $_POST['correo'];
    $pass = $_POST['contrasena'];

    $sql = "INSERT INTO datos(Nombre,Apellido,id_genero,id_tipdoc,NumeroDocumento,id_rol,correo,contrasena) VALUES(:nom,:apell,:gen,:tipdoc,:numdoc,:rol,:corr,:pass)";

    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(":nom",$name);
    $stmt->bindParam(":apell",$apell);
    $stmt->bindParam(":gen",$gen);
    $stmt->bindParam(":tipdoc",$tipdoc);
    $stmt->bindParam(":numdoc",$numdoc);
    $stmt->bindParam(":rol",$rol);
    $stmt->bindParam(":corr",$email);
    $stmt->bindParam(":pass",$pass);

    if ($stmt->execute()){
        header("location: login.php");
}
}
else{
$alerta='<div class="alert alert-danger text-center my-3">
<p> DEBES COMPLETAR TODOS LOS CAMPOS </p>
</div>';
echo($alerta);
}
?>