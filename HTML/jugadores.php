<!DOCTYPE html>
<html>
<head>
  <title>Botón de Mapa con Modal, Fuente Calibri y Tamaño de Fuente</title>
  <!-- Agrega los enlaces a los archivos de Bootstrap y jQuery -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../CSS/jugador.css">
  <style>

    .btn-no-background {
      background-color: transparent;
      border: none;
      text-decoration: none;
      color: #000000; 
      font-family: Calibri, sans-serif; 
      font-size: 25px;
    }
  </style>
</head>
<body>
 



    <header>
        <a href="#" class="logo">
            <h2 class="logonombre">E-CLUB</h2>
            <img src="../IMG/foto.png" alt="logo de la compañia" class="logo-img">

        </a>
        <nav class="barra">
           <a href="../horarios../view/horariosjugadores.php" class="nav-link">Horarios</a>
            <a href="../HTML/galeria.html" class="nav-link">Galeria</a>
            <a href="https://chat-pc.glide.page/" class="nav-link">Chat</a>
            
         

<button type="button" class="btn btn-no-background" data-toggle="modal" data-target="#mapModal">
  MAPA
</button>

<div class="modal" id="mapModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Mapa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1931.9991201633622!2d-74.09620187858458!3d4.554058411639294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scade%20la%20victoria!5e0!3m2!1ses!2sco!4v1697783902806!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
          


         
           
        </nav>
    </header>

    
    <div class="contenedor">
        <img class="cuadro" src="../IMG/IMG1.jpg" alt="">

        <div class="text"> 
            <H3>¡Esfuerzo! </H3>
            <p>Los sueños sin metas, son sólo sueños; y te llevarán a desilusiones. Las metas, son el camino hacia tus sueños; pero no se pueden lograr sin disciplina y consistencia.
                <p>(Denzel Washington)</p>
            </p>
        </div>

    </div>


    <div class="contenedor2">
        <div class="text2"> 
        <H3>¡Disciplina! </H3>
        <p>Entiende el don que se te ha dado, lucha por ese don, desarrollalo, úsalo, no abuses de él. Así serás esa persona que tanto quieres ser.  </p>
        <p>(Denzel Washington)</p>
        </div>

        <img class="cuadro2" src="../IMG/IMG4.jpg" alt="">
    </div>    

    <div class="contenedor3">
        <img class="cuadro3" src="../IMG/IMG2.jpg" alt="">
        <div class="text3"> 
        <H3>¡Diversión! </H3>
        <p>La pasión y la diversión son las fuerzas más poderosas a la hora de conseguir cosas. </p>
        <p>(Rafael Santandreu) </p>
        </div>

        
    </div> 






</body>
</html>
