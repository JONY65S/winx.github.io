<?php
include 'credentials.php';
session_start();
error_reporting(0);
$varsec=$_SESSION['nombre_usuario'];
if($varsec == null || $varsec = '') {
    header('Location:404.php');
    session_destroy();
    session_unset();
    die();
}?>

<html lang="es">
    <head>
        <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
        <title>Congreso de Matemáticas</title>
       <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="icon.css">
 
        <link rel="stylesheet" href="css/estilos_de_informacion.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<link rel="icon" href="img/favicon.png" type="image/x-icon">          
        
        <style>
          .bd-placeholder -img {
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

      .feature-icon {
  width: 4rem;
  height: 4rem;
  border-radius: .75rem;
}

.icon-link > .bi {
  margin-top: .125rem;
  margin-left: .125rem;
  fill: currentcolor;
  transition: transform .25s ease-in-out;
}
.icon-link:hover > .bi {
  transform: translate(.25rem);
}

.icon-square {
  width: 3rem;
  height: 3rem;
  border-radius: .75rem;
}

.text-shadow-1 { text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25); }
.text-shadow-2 { text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25); }
.text-shadow-3 { text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25); }

.card-cover {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

.feature-icon-small {
  width: 3rem;
  height: 3rem;
}

#wrap {
    margin: 20px auto;
    text-align: center;
}

#wrap br {
    display: none;
}

.btn-slide, .btn-slide2 {
    position: relative;
    display: inline-block;
    height: 50px;
    width: 200px;
    line-height: 50px;
    padding: 0;
    border-radius: 50px;
    background: #fdfdfd;
    border: 2px solid #0099cc;
    margin: 10px;
    transition: .5s;
}

.btn-slide2 {
    border: 2px solid #2B307C;
}

.btn-slide:hover {
    background-color: #0099cc;
}

.btn-slide2:hover {
    background-color: #2B307C;
}

.btn-slide:hover span.circle, .btn-slide2:hover span.circle2 {
    left: 100%;
    margin-left: -45px;
    background-color: #fdfdfd;
    color: #0099cc;
}

.btn-slide2:hover span.circle2 {
    color: #2B307C;
}

.btn-slide:hover span.title, .btn-slide2:hover span.title2 {
    left: 40px;
    opacity: 0;
}

.btn-slide:hover span.title-hover, .btn-slide2:hover span.title-hover2 {
    opacity: 1;
    left: 40px;
}

.btn-slide span.circle, .btn-slide2 span.circle2 {
    display: block;
    background-color: #0099cc;
    color: #fff;
    position: absolute;
    float: left;
    margin: 5px;
    line-height: 42px;
    height: 40px;
    width: 40px;
    top: 0;
    left: 0;
    transition: .5s;
    border-radius: 50%;
}

.btn-slide2 span.circle2 {
    background-color: #2B307C;
}

.btn-slide span.title,
  .btn-slide span.title-hover, .btn-slide2 span.title2,
  .btn-slide2 span.title-hover2 {
    position: absolute;
    left: 90px;
    text-align: center;
    margin: 0 auto;
    font-size: 16px;
    font-weight: bold;
    color: #30abd5;
    transition: .5s;
}

.btn-slide2 span.title2,
  .btn-slide2 span.title-hover2 {
    color: #2B307C;
    left: 80px;
}

.btn-slide span.title-hover, .btn-slide2 span.title-hover2 {
    left: 80px;
    opacity: 0;
}

.btn-slide span.title-hover, .btn-slide2 span.title-hover2 {
    color: #fff;
}

.contenedoramarillo{
   border-radius: 3em;
 border: 0.3em solid #2B307C;
        margin:2em;
}

button {
      background: #2B307C;
      color: #FFF;
      font-size: 20px;
      border-radius: 9px;
      padding: 5px 30px;
      margin-bottom: -30px;
      position: relative;
      top: 60%;
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
         <div>
            <header>  
                <input type="checkbox" id="btn-menu"> 
                <label for="btn-menu"><img src="img/menuicono2.png" alt=""> </label>
                <nav class="menu" style="z-index: 1;">
                    <ul>
                    <li> <a href="indexSesion.php">Inicio</a></li>
                        <li> <a href="memoriascarruselSesion.php">Memorias</a></li>
                        <li> <a href="convocatoriaSesion.php">Convocatoria</a></li> 
                        <li>  <a href="inscripcionYcostosSesion.php">Inscripción y Costos</a></li>
                        <li> <a href="ComiteOrgSesion.php">Comité Organizador</a></li>
                        <li> <a href="ComiteEvaSesion.php">Comité Evaluador</a></li>
                        <li> <a href="destroySesion.php"><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Cerrar  Sesión</a></li>
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
                        <li> <a href="carteles_infoSesion.php">Carteles</a></li>  
                        <li> <a href="talleres_infoSesion.php">Talleres</a></li>
                    </ul>  
                </nav> 
            </header>
        </div>
        <br>
        <div> <a  href="menu.php"  > <center> <button > Regresar al Menu</button>  </center></a> </div>  
  <br>

       <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

<symbol id="book" viewBox="0 0 16 16">
  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</symbol>

<symbol id="checklist" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</symbol>

  <symbol id="tools" viewBox="0 0 16 16">
    <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
  </symbol>

<symbol id="exclamation-octagon" viewBox="0 0 16 16">
  <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z"/>
  <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
</symbol>
</svg>
<main>
    
     <div class="photo">
    <center>
  <img src="img/ponenciass.jpg" alt="Photo" style="width:60%;">
  </center>
</div>    

       <br><!-- -->
       <br>


<div class="contenedoramarillo"> 
 <div class="container px-4 py-5" id="hanging-icons">
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#book"/></svg>
        </div>
        <div>
          <h3 class="fs-2">INSTRUCCIONES</h3>
          <p>La ponencia debe ser original y producto de investigación teórica o aplicada. Serán aceptados todos los trabajos que puedan hacer alguna aportación al conocimiento teórico o práctico en la enseñanza y aplicación de las matemáticas. Así mismo se debe cumplir con los lineamientos que se indican en la elaboración del resumen.</p>
          <p>El registro de ponencias consta de tres procesos:
            <li>1.- El resumen.</li>
            <li>2.- El extenso.</li>
            <li>3.- El vídeo de la exposición de la ponencia.</li></p>
           <p>El resumen, extenso y el vídeo de cada ponencia requieren ser registrados en el sitio del congreso para ser evaluados por el comité correspondiente.</p> 
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#checklist"/></svg>
        </div>
        <div>
          <h3 class="fs-2">REQUISITOS</h3>
          <p>El resumen deberá contener:
            <li>A) Título (Máximo 15 palabras).</li>
            <br>
            <li>B) Categoría.</li>
            <br>
            <li>C) Contenido (Máximo 300 palabras estructurado de acuerdo a la categoría seleccionada) .</li>
            <br>
            <li>D) Referencias estilo APA (American Psychological Association).</li>
            <br>
            <li>E) Nombre del autor (y opcional coautores. Máximo 5 integrantes).</li>
            <br>
            <li>F) Indicar si requiere constancia de participación.</li>
          </p>

        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#exclamation-octagon"/></svg>
        </div>
        <div>
          <h3 class="fs-2">ACLARACIONES</h3>
          <p>
          <p>Espesificaciones del resumen:</p>
          <p>A) El título deberá reflejar el contenido de la ponencia.</p>

<p>B) Las categorias en donde los autores podrán registrar sus trabajos relacionados al Proceso de Enseñanza Aprendizaje (PEA) son:</p>

<li>Enseñanza de las matemáticas con las TIC en la nueva normalidad (EN).</li>
<li>Experiencia e innovación didáctica en la enseñanza de las matemáticas (ID).</li>
<li>Investigación del proceso de la enseñanza de las matemáticas (IP).</li>
<li>Evaluión del aprendizaje en la enseñanza de las matemáticas en la nueva normalidad (EA).</li>
<li>Aplicación y/o vinculación de las matemáticas con otras disciplinas (AP).</li>


<p>Al momento de registrar sus trabajos el ponente seleccionará la categoría que más se adapte a ellos.</p>

<p>C) En el contenido se expondrá una síntesis del tema referido y se debe incluir según la categoría elegida:</p>

<li>Objetivo.</li>
<li>Sustento teórico o antecedentes.</li>
<li>Metodología o desarrollo.</li>
<li>Resultados y/o conclusiones.</li>
<br>

<p>D) Es necesario que las citas y referencias incluidas en el documento se encuentren en formato APA.</p>

<p>E) Registro autores y coautores.
Los asistentes al congreso podrán participar como ponentes con un máximo de 5 trabajos ya sea como autor o coautor en las siguientes modalidades:</p>

<li>Ponencias.</li>
<li>Talleres.</li>
<li>Carteles.</li>
<br>

<p>F) Las constancias son individuales por lo que el autor y coautores que las requieran necesitan realizar la exposición del trabajo y el pago correspondiente.</p>


<li>Se entregará constancia de "Asistencia al congreso", cuando haya participado en las actividades del congreso.</li>
<li>Se entregará constancia de "Presentación de ponencia", cuando su trabajo en extenso y vídeo hayan sido aceptados por el comité organizador y estos hayan sido presentados en el evento.</li>
<li>Se entregará constancia de "Publicación en memorias del congreso" con registro ISSN , cuando su trabajo en extenso haya sido incluido en las memorias del congreso.</li>
<br>

<p> Cualquier aspecto o situación no considerada en la presente convocatoria será resuelta por el comité organizador y su desición será inapelable.</p>
</p>

 
          </p>
        </div>
      </div>
    </div>
  </div>

<center>
<p style="font-size: 20px"> <b> Plantilla de ponencias </b> </p>
</center>

<center>
<div id="wrap">
<a href="documentos/Plantilla_extenso_2023.docx" download="Plantilla_Ponencias" class="btn-slide2" target="_blank">
<span class="circle2"><i class="fa fa-download"></i></span>
<span class="title2">Descargar</span>
<span class="title-hover2" download="Plantilla_Ponencias" >Click Aquí</span>
</a>
</div>
</center>

</main>
</div>




              <br><!-- -->
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