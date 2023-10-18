<?php
//conexion
    include('conexion.php');
    //
    session_start();
if(isset($_POST['iniciar'])){
        if(!empty($_POST['correo']) && !empty($_POST['pass'])){
            $mail = $_POST['correo'];
            $pass = $_POST['pass'];
            $query = $con->query("SELECT * FROM datos WHERE correo='$mail'");
            $resultado = $query;
            if ($resultado->num_rows == 1) {
            $usuario = mysqli_fetch_assoc($resultado);
            }
            if ($usuario['contrasena']==$pass) {
            /* */


                switch ($usuario['id_rol']){
                    case '1':
                        //Entrenador
                        header("location: ENTRENADOR/entrenador_pag/pag1.html");
                        break;
                    case '2':
                        //Jugador
                        header("location: HTML/jugadores.php ");
                        break;
                    case '3':
                        //Acudientes
                        header("location: ../index.php");
                        break;
            }
        }
          else {
            echo "<script> alert('Correo o contraseña incorrectos') </script>";
            header( "Refresh:0; url=ENTRENADOR/ENTRENADOR/login.html", true, 303);
        }
}
        else {
            echo "<script> alert('Debes completar todos los campos') </script>";
        header( "Refresh:0; url=ENTRENADOR/ENTRENADOR/login.html", true, 303);

        }
    }


?>