<html lang="es">
    <head>
        <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
        <title>Memorias del Congreso de Matemáticas</title>
       <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="css/estilosmemorias.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> 
          <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
          <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<link rel="icon" href="img/favicon.png" type="image/x-icon">

      
        
        <style>

      .gallery img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }      
      
      .gallery {
        width: 85%;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;

        display: grid;
        grid-template-columns: repeat(auto-fit, 133px);
        grid-auto-rows: 200px;
        justify-content: center;
        gap: 1rem;
      }  

      .gallery_item{
        clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        grid-column: span 2;
        height: 238px;
        transition: 0.5s filter;
      } 


      .gallery_item hover {
        filter: brightness(0.3);
      }
      
      .gallery_item :first-of-type {
          grid-column: 2 / span 2;
      }

      
      
      @media screen and (min-width: 270px) and
      (max-width: 504px) {
        .gallery_item :first-of-type {
           grid-column: 1 / span 2;
        }
        .gallery {
            grid-auto-rows: 283px;
        }

      }

      @media screen and (min-width: 505px) and
      (max-width: 685px) {
          .gallery_item :nth-of-type(add) {
              grid-column: 2 / span 2;
          }

      }

      @media screen and (min-width: 686px) and
      (max-width: 862px) {
        .gallery_item :nth-of-type(3n+1){
              grid-column: 2 / span 2;
          }

      }

       @media screen and (min-width: 863px) and
      (max-width: 1038px) {
          .gallery_item :nth-of-type(4n+1){
              grid-column: 2 / span 2;
          }

      }

       @media screen and (min-width: 1039px) and
      (max-width: 1215px) {
          .gallery_item :nth-of-type(4n+1){
              grid-column: 2 / span 2;
          }

      }

        @media screen and (min-width: 1216px) and
      (max-width: 1372) {
          .gallery_item :nth-of-type(5n+1) {
              grid-column: 2 / span 2;
          }

      }

        @media screen and (min-width: 1372px) {
          .gallery_item :nth-of-type(7n+1) {
              grid-column: 2 / span 2; 
          }

      }




    

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .containerCredi {
        background-color: #333333;
    }

  


      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

     

.contenedoramarillo{
    border-radius: 3em;
  border: 0.3em solid #B18904;
        margin:2em;
          }

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
section{
  min-height: 100vh;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  background: transparent;
  padding: 50px;
  position: relative;
  overflow: hidden;
}
section::before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.6);
  opacity: 0;
  transition: all 0.4s ease;
}
section.active::before{
  opacity: 1;
}
.container{
  max-width: 800px;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  background: #fff;
  padding: 5px 10px;
  position: relative;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
}
 section.active .container{
   visibility: hidden;
 }
.container .main-video{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(1);
  width: 100%;
  z-index: 999;
  opacity: 0;
  pointer-events: none;
  visibility: visible;
  transition: all 0.4s ease;
}
section.active .container .main-video{
  transform:translate(-50%, -50%) scale(1);
  opacity: 1;
  pointer-events: auto;
}
.container .main-video video{
  height: 100%;
  width: 100%;
  object-fit: cover;
  outline: none;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .main-video .close{
  position: absolute;
  top: -10px;
  right: -36px;
  font-size: 35px;
  color: #fff;
  cursor: pointer;
  transition: all 0.3s ease;
  z-index: 1000;
  pointer-events: auto;
  opacity: 0.6;
}
.container .main-video .close:hover{
  opacity: 1;
}
.container .videos{
  position: relative;
  height: 200px;
  width: calc(100% / 2 - 5px);
  margin: 5px 0;
  cursor: pointer;
}
.container .videos::before{
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background: rgba(0,0,0,0.3);
  pointer-events: none;
}
.container .videos video{
  width: 100%;
  height: 100%;
  object-fit: cover;
  outline: none;
  pointer-events: none;
}
.container .videos i{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 50px;
  color: #fff;
  pointer-events: none;
}
@media (max-width: 750px) {
  .container .main-video{
    position: fixed;
    width: 83%;
  }
  .container .videos{
    width: 100%;
    height: 320px;
  }
}
@media (max-width: 600px) {
  .container .videos{
    width: 100%;
    height: 250px;
  }
}

.zoom {
    transition: transform .2s; 
}
 
.zoom:hover {
    transform: scale(1.5); 
}




        </style>
    </head>
    <body>
        <!--
Encabezado de la página */
        */banner, menu, carrusel, cuadro iniciar, cuadro fechas, -->
        <!-- Baner -->
     
      
         <div id="wrapper" > <center> <img src="img/banpru.jpg" class="baner"/> </center>  </div>
         
       <!-- Barra de menu -->
          <!-- Barra de menu -->
         <div>
            <header>  
                <input type="checkbox" id="btn-menu"> 
                <label for="btn-menu"><img src="img/menuicono2.png" alt=""> </label>
                <nav class="menu" style="z-index: 1;">
                    <ul>
                       <li> <a href="index3.php">Inicio</a></li>
                       <li> <a href="memoriascarrusel.php">Memorias</a></li>
                        <li> <a href="convocatoria.php">Convocatoria</a></li> 
                        <li> <a href="inscripcionYcostos.php">Inscripción y Costos</a></li>
                        <li> <a href="ComiteOrg.php">Comité Organizador</a></li>
                        <li> <a href="ComiteEva.php">Comité Evaluador</a></li>
                        <li> <a href="InicioSesion.php"><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Iniciar Sesión</a></li>
                    </ul>  
                </nav> 
            </header>
        </div>


         <div>
            <header>
            <input type="checkbox" id="btn-menu2"> 
                <label for="btn-menu2"><img src="img/icono_informacion2.png" alt=""> </label>
                <nav class="menu2" style="z-index: 2;">           
                    <ul>    
                      <li> <a href=""><img class="alineadoicono" src="img/icono_informacion2.png"> </a></li>        
                        <li> <a href="ponencias_info.php">Ponencias</a></li>  
                        <li> <a href="carteles_info.php">Carteles</a></li>
                        <li> <a href="talleres_info.php">Talleres</a></li>
                    </ul>  
                </nav>                
            </header>
        </div>


   <center>
<div class ="row align-items-start">
   <div class='col-6 col-sm-3'><p class='btn btn-warning'> <a href="memoriascarrusel.php" onclick="Date();"style="color: #050504;" class='btn btn-default'><script>
                var f = new Date();
                document.write( f.getFullYear());
                      </script></a></div>";

<div class='col-6 col-sm-6'><p class='btn btn-warning'> <a href="memoriascarrusel1.php" onclick="Date();" style="color: #050504;" class='btn btn-default'>  <script>
                var f = new Date();
                document.write( f.getFullYear()-1);
                      </script></a></div>";

<div class='col'><p class='btn btn-warning'> <a href="memoriascarrusel2.php" onclick="Date();" style="color: #050504;" class='btn btn-default'>  <script>
                var f = new Date();
                document.write( f.getFullYear()-2);
                      </script></a></div>"; 
</div>
</center>     

 <br>
 <div class="contenedoramarillo">
      <h1><center>Fotos y videos del Congreso de Matemáticas</center></h1>
          <h1><center> <script>
                var f = new Date();
                document.write( f.getFullYear()-3);
                      </script> </center></h1>
          
    <br>
   
    <main class="gallery">
        <?php
     $fotos  = scandir('memorias/memorias3');
       foreach ($fotos as $foto) 
         {
        if (str_contains($foto, '.jpg') || str_contains($foto, '.jpeg') || str_contains($foto, '.png')) {
            $htmlImagen = "<div class=\"gallery_item :nth-of-type \"><div class=\"gallery_item\"><div class=\"Imagen\"> 

            <a href= \"memorias/memorias3/" . $foto . " \"> <img class=\"zoom\"src= \"memorias/memorias3/" . $foto . " \" /></a>

            </div></div></div>";

            echo $htmlImagen;
        }
       }
       
        ?>   
  </main>
  <br>
  <br>

<section>
<div class="container">
<?php
    $videos  = scandir('memorias/memorias3');
    foreach ($videos as $video) {

       if (str_contains($video, 'mp4')) {
               $htmlVideo = "<div class=\"videos\"><video src=\"memorias/memorias3/" . $video . "\" muted autoplay loop></video></div>";
                echo $htmlVideo;
            }
        
    }

    ?>

</div>
</section>

  
  <br>
  <br>
  <br> 
</div>

<center>
 
<br>
<br>
    
 <div class="containerCredi">
<footer class="py-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <ul class="nav flex-column">
          <li class="nav-item mb-2" class="nav-link p-0 text-muted"> <img src="img/escudo-blanco.png" alt="Photo" style="width:65%;"> </li>
        </ul>
        </div>

      <div class="col-6 col-md-2 mb-3">
        <h5 style="color: #FFFFFF;">CONTACTO</h5>
        <ul class="nav flex-column">
          <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted ">SEDE</li>
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted">Facultad de Estudios Superiores Cuautitlán</li>
        </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
        <h5 style="color: #FFFFFF;">UBICACIÓN</h5>
        <ul class="nav flex-column">
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted">Km 2.5 carretera Cuautitlán-Teoloyucan, San Sebastián Xhala, Cuautitlán Izcalli, Estado de México. C.P. 54714.</li>
        </ul>
        </div>
        
        <div class="col-6 col-md-2 mb-3">
        <h5 style="color: #FFFFFF;">TELÉFONO</h5>
        <ul class="nav flex-column">
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> (55) 56 23 18 86 / (55) 56 23 18 90</li>
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted">Para mayores informes o dudas comunicarse al Departamento de Matemáticas Edificio A8 Campo 4.</li>
        </ul>
        </div>

  <div class="containerCredi">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li style="color: #FFFFFF;"class="nav-item" class="nav-link px-2 text-muted">Sitio Web administrado por: Departamento de Matemáticas</li>
       <li style="color: #FFFFFF;" class="nav-item" class="nav-link px-2 text-muted">Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente
        completa y su dirección electrónica.</li>
         <li style="color: #FFFFFF;" class="nav-item" class="nav-link px-2 text-muted">De otra forma requiere permiso previo por escrito de la institución</li>
    </ul>
    <center>
     <p style="color: #FFFFFF;">&copy; <script>
                var f = new Date();
                document.write( f.getFullYear());
                      </script>  Hecho en México, todos los derechos reservados. </p>
    </center>
  </footer>
</div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
   
  
           
</body>
</html>