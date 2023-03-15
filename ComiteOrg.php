<html lang="es">
    <head>
        <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
        <title>Comite Organizador</title>
       <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="icon.css">
 
           <link rel="stylesheet" href="css/estilosmenuarriba.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">        

        <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<link rel="icon" href="img/favicon.png" type="image/x-icon">
        
        <style>
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
        .contenedorregistroI{
        margin:1em;
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


/*Aqui Empieza el css de estilos de la pagina de cada uno*
-------------
------------
------------*/			
.Tema {
	margin: -10px;
	padding: 0 0 50px;
	text-align: center;
	font-size: 50px;
	font-style: normal;
	color: #2B307C;
}
.temaCentral {
	margin: 0;
	padding: 0;
	color: #2B307C;
	background: white;
	border: 0.25em solid #FFF;
	position: absolute;
	transform: translate(0%, -50%);
	font-size: 20px;				
}

.contenedorregistroI{
    border-radius: 3em;
	border: 0.3em solid #B18904;
        margin:3em;
}

@media (max-width: 680px) {
        .tema{
          font-size: 40px;         
        }
        .temaCentral{
          font-size: 15px;          
        }
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
                <label for="btn-menu"><img src="img/menuicono11.png" alt=""> </label>
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
 
       

<div class="contenedorregistroI"> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
   
    <div class="col-lg-6 mx-auto">
     
        <p class="Tema">Comité Organizador</p>
			<form action="#" method="POST" >
                            <table>
                                <tr>    
                                            <td>
                                            <p class="temaCentral">Comité Organizador: </p>
                                            <br>
                                            <ul>
                                            <li> <span> Dr. José Juan Contreras Espinosa </span></li>
                                            <li> <span> Dra. Celina Elena Urrutia Vargas </span></li>
                                            <li> <span> Dr. Armando Aguilar Márquez </span></li>
                                            <li> <span> Dra. Frida María León Rodríguez </span> </li>
                                            <li> <span> Dr. José Luz Hernández Castillo </span> </li>
                                            <li> <span> Dr. Jorge Altamira Ibarra </span> </li>
                                            <li> <span> M. en I. Miguel de Nazareth Pineda Becerril </span> </li>
                                            <li> <span> Dr. Leonel Gualberto López Salazar </span> </li>
                                            <li> <span> Dr. Carlos Oropeza Legorreta </span> </li>
                                            <li> <span> Dr. Omar García León </span> </li>
                                            <li> <span> Ing. José Juan Rico Castro </span> </li>
                                            <li> <span> Dr. Rogelio Ramos Carranza </span> </li>
                                            <li> <span> Dr. Víctor Hugo Hernández Gómez </span> </li>
                                            <li> <span> Dr. Julio Moisés Sánchez Barrera </span></li>
                                            <li> <span> M. en C. José Isaac Sánchez Guerra </span> </li>
                                            <li> <span> Dr. Hugo Sánchez Nava </span> </li>
                                            <li> <span> M.A.O. Martha Lilia Urrutia Vargas </span> </li>
                                            <li> <span> L.D.C.V Karina Simón Farfán </span> </li>
                                            <li> <span> Dr. Valentín Roldán Vázquez </span></li>
                                            </ul>
                                        </td>
                                            <td>
                                           <p class="temaCentral">Comité Técnico: </p>
                                            <br>
                                            <ul>
                                            <li> <span> M.D.A Clarisa Clemente Rodríguez </span> </li>
                                            <li> <span> M.C. Mayte Flores Pérez </span> </li>
                                            <li> <span> M.C. Maricela Lara Martínez </span></li>
                                            <li> <span> L.S.C. Liana López Pachecho </span></li>
                                            <li> <span> M. en CE. Domingo Márquez Ortega </span></li>
                                            <li> <span> Ing. Guillermo Pérez Hernández </span></li>
                                            <li> <span> Ing. José Juan Rico Castro </span></li>
                                            <li> <span> M.G.T.I. Rosalba Nancy Rosas Fonseca </span></li>
                                            <li> <span> M.V.Z. Alejandro Valdez Santamaría </span></li>
                                            <li> <span> M. en C. María Guadalupe Vázquez Salazar </span> </li>
                                            </ul>
                                        </td>           
                           <tr>
                           </table>
        
       </div>
  </div>
</div>

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