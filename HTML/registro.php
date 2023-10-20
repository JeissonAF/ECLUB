<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../CSS/registro.css">
    <title>Registro</title>
</head>

<body>
    <main id="Hero">
    <form action="../registrar.php" method="POST">
    <section class="formregistro">
        <h4>Formulario Registro</h4>
        <input class="controls" type="text" name="nombre" id="nombres" placeholder="Ingrese su nombre">
        <input class="controls" type="text" name="apellido" id="apellidos" placeholder="Ingrese su apellido ">
        <select  class="controls" name="genero" id="genero" placeholder="Elija su género">
            <option value="" selected disabled>Elija su género</option>
            <option value="1"> Femenino</option>
            <option value="2"> Masculino</option> 
        </select>

        <select class="controls" name="tipdoc" id="tipdoc" placeholder="Elija su tipo de documento">
            <option value="" selected disabled>Elija su tipo de documento</option>
            <option value="1">TI</option>
            <option value="2">CC</option>
            <option value="3">CE</option>
            <option value="4">NUIP</option>>

        </select>

        <input class="controls" type="text" name="numdoc" id="NumeroDocumento" placeholder="Ingrese su número de documento">

        <select class="controls"  name="rol" id="rol" placeholder="Elija su rol">
            <option value="" selected disabled>Elija su rol</option>
            <option value="1"> Entrenador</option>
            <option value="2"> Jugador</option>
            <option value="3"> Acudiente</option>
        </select>
        <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese su correo">
        <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña ">
       


        <input class="botonreg" type="submit" value="Registrar">
        <p><a href="../HTML/login.php">¿Ya tengo cuenta?</a></p>
    </section>
    </form>
    <video muted autoplay loop>
        <source src="../IMG/videofondoreg.mp4" type="video/mp4">
    </video>
    </main>
    <header class="eo">
        <div class="aju">
        <h2 class="eclublog">E-CLUB</h2>
        <a href="../HTML/index.html" class="logo">
            <img src="../IMG/foto.png" alt="logo">
        </a>
        </div>

        <nav>
            <a href="../HTML/index.html" class="nav-link">Inicio</a>
        </nav>
    </header>
</body>



</html>