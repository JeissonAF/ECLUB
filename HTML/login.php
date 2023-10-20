<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../CSS/loginnew.css" rel="stylesheet">
</head>

  <body>
    <!-- cabezera -->
  <header>
   <a class="logo">
       <h2 class="logonombre">E-CLUB</h2>
       <img src="../IMG/foto.png" alt="logo de la compañia">
     
   </a>
   <nav class="barra">
       <a href="../INDEX/carpeta/HTMLI/index.php" class="nav-link">Inicio</a>
      
       

       
      
      
   </nav>
</header>

    <div class="login-box">
        <h2>Inicia sesión</h2>
        <form method="POST" action="../insesion.php" >
          <div class="user-box">
            <input type="text" name="correo" required="">
            <label>Correo
            </label>
          </div>
          <div class="user-box">
            <input type="password" name="pass" required="">
            <label>Contraseña</label>
          </div>
          <a class="botonlog">
          <input type="submit" name="iniciar" value="Iniciar Sesión" class="botonlog botonlogbt">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
</a>
        </form>
      </div>
</body>
</html>