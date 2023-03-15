<?php
ini_set("display_errors", 0);
session_start();
?>

<html lang="es">
    <head>
      
        <title>Pagina Principal</title>
       <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale">
           <link rel="stylesheet" href="css/estilosmemorias.css">
          <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<link rel="icon" href="img/favicon.png" type="image/x-icon"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
            <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<link rel="icon" href="img/favicon.png" type="image/x-icon"> 


      <style>
        /*Estilos del carrusel*/
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

 .containerCredi {
        background-color: #333333;
    }

/*estilos de carrusel*/
#container-slider
{
    position: relative;
    display: block;
    width: 100%;
}
.slider url {
  width: 100%;
              height: 500px;
}
#slider {
    position: relative;
    display: block;
    width: 100%;
    height: 100vh;
    min-height: 500px;
}
#slider li {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100%;
    height: 100%;
    display: block;
    -webkit-transition: opacity 1s;
    -moz-transition: opacity 1s;
    -ms-transition: opacity 1s;
    -o-transition: opacity 1s;
    transition: opacity 1s;
    z-index: -1;
    opacity: 0;
    transition: in;
}
#container-slider .arrowPrev, #container-slider .arrowNext{
    font-size: 30pt;
    color: rgba(204, 204, 204, 0.65);
    cursor: pointer;
    position: absolute;
    top: 50%;
    left: 50px;
    z-index: 2; 
}
#container-slider .arrowNext {
    left: initial;
    right: 50px !important;
}
.content_slider{
    padding: 15px 30px;
    color: #FFF;
    width: 100%;
    height: 100%;
}
.content_slider div{
    text-align: center;
}
.content_slider h2{
    font-family: 'arial';
    font-size: 30pt;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 20px;
}
.content_slider p {
    font-size: 15pt;
    font-family: 'arial';
    color: #FFF;
    margin-bottom: 20px;
}
#slider li .content_slider{
    
    padding: 10px 125px;

}
.content_slider{
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: center;
    align-items: center;
}
.btnSlider{
    color: #FFF;
    font-size: 15pt;
    font-family: 'arial';
    letter-spacing: 1px;
    padding: 10px 50px;
    border: 1px solid #CCC;
    background: rgba(13, 13, 13, 0.55);
    border-radius: 31px;
    text-decoration: none;
    transition: .5s all;
}
.btnSlider:hover{
    background: #111;
    border: 1px solid #111;
}
.listslider {
    position: absolute;
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: space-between;
    align-items: center;
    left: 50%;
    bottom: 5%;
    list-style: none;
    z-index: 2;
    transform: translateX(-50%);
}
.listslider li {
    border-radius: 50%;
    width: 10px;
    height: 10px;
    cursor: pointer;
    margin: 0 5px;
}
.listslider li a {
    background: #CCC;
    border-radius: 50%;
    width: 100%;
    height: 100%;
    display: block;
}
.item-select-slid {
    background: #FFF  !important;
}

@media screen and (max-width: 460px){
  .content_slider h2 {
      font-size: 15pt !important;
  }
  .content_slider p {
      font-size: 12pt !important;
  }
  #container-slider .arrowPrev, #container-slider .arrowNext{
    font-size: 20pt;
  }
  #container-slider .arrowPrev{
    left: 15px;
  }
  #container-slider .arrowNext{
    right: 15px !important;
  }
  #slider{
    height: 400px;
    min-height: 400px;
  }
  #slider li .content_slider{
    padding: 10px 35px;
  }
  .btnSlider{
    padding: 10px 30px;
      font-size: 10pt;
  }

} 

/*estilos de iniciar sesion*/
.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 12px;
  border-bottom-left-radius: 12px;
  
				border-bottom: 3px solid #2B307C;
				background: #00000012;
				color: #000;

}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-bottom-right-radius: 12px;
  border-bottom-left-radius: 12px;
  
				border-bottom: 3px solid #2B307C;
				background: #00000012;
				color: #000;
}

/*estilos de la tabla*/
.table-responsive{

        margin:4em;
        height: 90%;

        border-radius: 1em;
 border: 0.5em solid #2B307C;
        width: auto;
        background-color: #FFFFFA;
}


.loginBox input[type="submit"] {
				border: none;
				outline: none;
				height: 40px;
                                width: 200px;
				background: #2B307C;
				color: #FFF;
				font-size: 18px;
				border-radius: 20px;	
			}
			
			.loginBox input[type="submit"]:hover {
				cursor: pointer;
				background: #998636;
			}
                        
                        .loginBox a {
				text-decoration: none;
				font-size: 14px;
				line-height: 20px;
				color: navy;
			}
			
			.loginBox a:hover {
				color: #998636;
			}
                         .loginBox h1 {
				color:  #2B307C;
				font-size: 26px;
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
                <label for="btn-menu"><img src="img/menuicono11.png"> </label>
                <nav class="menu" style="z-index: 2;">
                    <ul>
                        <li> <a href="memoriascarrusel.php">Memorias</a></li>
                        <li> <a href="convocatoria.php">Convocatoria</a></li> 
                        <li> <a href="inscripcionYcostos.php">Inscripción y Costos</a></li>
                        <li> <a href="ComiteOrg.php">Comité Organizador</a></li>
                        <li> <a href="ComiteEva.php">Comité Evaluador</a></li>
                        <li> <a href="InicioSesion.php"><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Iniciar Sesión</a></li>
                    </ul>  
                </nav> 
                
            
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
       
<div>
<section id="container-slider"> 
   <a href="javascript: fntExecuteSlide('prev');" class="arrowPrev"><i class="fas fa-chevron-circle-left"></i></a>
   <a href="javascript: fntExecuteSlide('next');" class="arrowNext"><i class="fas fa-chevron-circle-right"></i></a>
   <ul class="listslider">
     <li><a itlist="itList_0" href="#" class="item-select-slid"></a></li>
     <li><a itlist="itList_1" href="#"></a></li>
     <li><a itlist="itList_2" href="#"></a></li>
   </ul>
   <ul id="slider">
     <li style="background-image: url('img/pruebaconvocatoria1.jpg'); z-index:0; opacity: 1;">
       <div class="content_slider" >
         <div>
   </div>
       </div>
     </li>
     <li style="background-image: url('img/convocatoriafechas.jpg'); ">
       <div class="content_slider" >
         <div>
   </div>
       </div>
     </li>
     <li style="background-image: url('img/carrusel2.jpg'); ">
       <div class="content_slider" >
         <div>
   </div>
       </div>
     </li>

     <li style="background-image: url('img/carrusel2.jpg'); ">
       <div class="content_slider" >
         <div>
   </div>
       </div>
     </li>
  </ul>
</section>
</div>

<div class="contenedorinicio">
  <body class="text-center">
<div class="loginBox">
<main class="form-signin w-100 m-auto">
  <form action="sesion.php" method="POST">
    <center>
    <img class="mb-4" src="img/Recurso1.png" alt="" width="60" height="57"></center>
    <center><h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1></center>
    <form method="POST">
      
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="user" placeholder="name@example.com" required>
      <label for="floatingInput">Correo</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password" required>
      <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="checkbox mb-3">
      <label>
       <a href="contraseñaOlvido.php">¿Olvidaste tu contraseña?</a>
          <br>
          <a href="RegistroN.php">¿No tienes una cuenta?</a>
 
      </label>
    </div>
    <center><input type="submit" name="uploadBtn"  value="Iniciar Sesión"></center>
    
  </form>
</main>

 </body>
    </div>



<br>
<br>

<center>
<h2>FECHAS IMPORTANTES</h2>
<div class="table-responsive">
<table class="table table-bordered border border-secondary"  >
  <thead>
    <tr>
      <th scope="col" >Descripción</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Recepción de resúmenes de trabajos.</td>
      <td>Del 28 de noviembre de 2022 al 15 de enero de 2023</td>
  
    </tr>
    <tr>
      <td>Evaluación de resúmenes por parte del comité.</td>
      <td>Del 16 al 22 de enero de 2023</td>
    </tr>

    <tr>
      <td>Resultado de evaluación de resúmenes.</td>
      <td>Del 23 al 29 de enero de 2023</td>
    </tr>

    <tr>
      <td>Recepción de corrección de resúmenes.</td>
      <td>Del 30 de enero al 10 de febrero de 2023</td>
    </tr>

    <tr>
      <td class="table-danger"><center>Si su resumen no fué aprobado al 10 de febrero quedará fuera del evento.</center></td>
      <td class="table-danger"><center></center></td>
    </tr>
     
       <tr>
      <td>Recepción de trabajos en extenso.</td>
      <td>Del 30 de enero al 12 de febrero de 2023</td>
  
    </tr>
    <tr>
      <td>Notificación de observaciones de los trabajos en extenso.</td>
      <td>Del 20 al 24 de febrero de 2023</td>
    </tr>

    <tr>
      <td>Inicia el periodo de recepción de pagos.</td>
      <td>10 de marzo de 2023</td>
    </tr>

    <tr>
      <td>Recepción de extensos finales.</td>
      <td>Del 13 al 17 de marzo de 2023</td>
    </tr>

      <tr>
      <td class="table-danger"><center>Si su extenso no fué aprobado para el 20 de marzo quedará fuera del evento.</center></td>
       <td class="table-danger"></td>
    </tr>

    <tr>
      <td>Recepción de videos de las ponencias aceptadas.</td>
      <td>Del 20 de marzo al 21 de abril de 2023</td>
    </tr>

      <tr>
      <td class="table-danger"><center>Si su video no fué recibido para el 21 de abril quedará fuera del evento.</center></td>
       <td class="table-danger"></td>
    </tr>

       <tr>
      <td>Publicación del programa general del evento.</td>
      <td>17 de abril de 2023</td>
  
    </tr>
    <tr>
      <td>Periodo de impartición de talleres en línea.</td>
      <td>2 y 3 de mayo de 2023</td>
    </tr>

    <tr>
      <td>Fecha del Congreso.</td>
      <td>4 y 5 de mayo de 2023</td>
    </tr>

    <tr>
      <td>Inicia el envío de constancias virtuales.</td>
      <td>Del 5 al 9 de junio 2023</td>
    </tr>

     <tr>
      <td>Publicación de las memorias del congreso.</td>
      <td>A partir del 12 de junio de 2023</td>
    </tr>

    <tr>
      <td class="table-info"><center>*A partir de esta fecha puede enviar correcciones de trabajos extensos si ya cuenta con observaciones.</center></td>
       <td class="table-info"></td>
    </tr>



  </tbody>
</table>
</div>

</center>


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
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted">15congresomatematicas</li>
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted">@cuautitlan.unam.mx</li>
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

        <div class="col-6 col-md-2 mb-3">
        <h5 style="color: #FFFFFF;">DESARROLLADORES</h5>
        <ul class="nav flex-column">
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Chavez Luna Miriam Virginia</li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Baltazar Balderas Jonathan </li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Davila Almaraz Nayeli</li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Montes Rangel Luz Elena </li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Olivares Vega Ana Jesús</li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Olvera Mendoza Viridiana</li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Pérez Martínez Monserrat </li>
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Romero Jaime Fernanda Yael </li>
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
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script>
  if(document.querySelector('#container-slider')){
   setInterval('fntExecuteSlide("next")',5000);
}
//------------------------------ LIST SLIDER -------------------------
if(document.querySelector('.listslider')){
   let link = document.querySelectorAll(".listslider li a");
   link.forEach(function(link) {
      link.addEventListener('click', function(e){
         e.preventDefault();
         let item = this.getAttribute('itlist');
         let arrItem = item.split("_");
         fntExecuteSlide(arrItem[1]);
         return false;
      });
    });
}

function fntExecuteSlide(side){
    let parentTarget = document.getElementById('slider');
    let elements = parentTarget.getElementsByTagName('li');
    let curElement, nextElement;

    for(var i=0; i<elements.length;i++){

        if(elements[i].style.opacity==1){
            curElement = i;
            break;
        }
    }
    if(side == 'prev' || side == 'next'){

        if(side=="prev"){
            nextElement = (curElement == 0)?elements.length -1:curElement -1;
        }else{
            nextElement = (curElement == elements.length -1)?0:curElement +1;
        }
    }else{
        nextElement = side;
        side = (curElement > nextElement)?'prev':'next';

    }
    //RESALTA LOS PUNTOS
    let elementSel = document.getElementsByClassName("listslider")[0].getElementsByTagName("a");
    elementSel[curElement].classList.remove("item-select-slid");
    elementSel[nextElement].classList.add("item-select-slid");
    elements[curElement].style.opacity=0;
    elements[curElement].style.zIndex =0;
    elements[nextElement].style.opacity=1;
    elements[nextElement].style.zIndex =1;
}
</script>

</body>
</html>  