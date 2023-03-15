<?php
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
        
        <title>Buscar Congresos de Matemáticas</title>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="icon.css">
           <link rel="stylesheet" href="css/estilosmenuarriba.css">
            <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
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

      .nav-bar{
      display: none;
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
button{
	background: #2B307C;
	color: #FFF;
	font-size: 20px;
	border-radius: 9px;
	padding: 5px 30px;	
	margin-bottom: -30px; 
	position: relative;
	   top:60%; 
}

.Tema {
	margin: -10px;
	padding: 0 0 50px;
	text-align: center;
	font-size: 50px;
	font-style: normal;
	color: #2B307C;
}

.inputP {
	border: 0.15em solid #B18904;
        border-radius: 3em;
        margin: 0.25em;
    width: 250px;
	
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

			.datosP {
	border-top: 0.25em solid #B18904;	
}

.C1 {
	text-align: right;
	width: 180px;
	
}

.D1 {
	margin-bottom: 6%;
	margin-top: 3%;
}
.inputNombreC2 {
				border: 0.15em solid #B18904;
				width: 500px;
        border-radius: 3em;
			}

      @media (max-width: 560px) {
        .inputP {
          width: 80px;
        }
        .inputNombreC2 {
          width: 160px;
        }

        .content-select {
          width: 160px;
        }

        .temaCentral{
          font-size: 13px;
          
        }
        .contenedorregistroI{
        margin:1em;

      }
    }
      @media (max-width: 370px) {
        .inputP {
          width: 65px;
        }
        .inputNombreC2 {
          width: 150px;
        }
        .content-select {
          width: 60px;
        }

        .temaCentral{
          font-size: 13px;
          
        }

        .contenedorregistroI{
        margin:1em;
}
      }

 /*     @media (max-width: 2388px) {
        .inputP {
          width: 95px;
        }
        .inputNombreC {
          width: 220px;
        }
        .content-select {
          width: 120px;
        }

        .temaCentral{
          font-size: 13px;
          
        }

        .contenedorregistroI{
        margin:1em;
}
      }*/

.contenedorregistroI{
    border-radius: 3em;
	border: 0.3em solid #B18904;
        margin:3em;
}
.table-responsive{

margin:1em;
height: 60%;

border-radius: 1em;

width: auto;
}

.button2{
  background: #2B307C;
  color: #FFF;
  font-size: 15px;
  border-radius: 1px;
  padding: 1px 10px;
  margin-bottom: 0.5px; 
  position: relative;
  top:10%; 
  left: 10%;

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
                      <li> <a href="ponencias_infoSesion.php">Ponencias</a></li>  
                        <li> <a href="carteles_infoSesion.php">Carteles</a></li>
                        <li> <a href="talleres_infoSesion.php">Talleres</a></li>
                    </ul>  
                </nav>                
            </header>
        </div>
                
                 
       

<div class="contenedorregistroI"> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
    <div class="col-lg-6 mx-auto">
           
          <p class="Tema">Busqueda de Congreso</p>
			
      <p>Desliza la barra para poder ver todos los datos y modificar de ser necesario</p>
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
               <table class="inputNombreC" > 
            <tr class="inputNombreC2">
            <th class="inputNombreC2"><center>Id</center></th>
              <th class="inputNombreC2"><center>Email</center></th>
              <!-- nombre congreso  -->
              <th class="inputNombreC2"><center>Nombre del congreso </center></th>
              <!-- numero congreso -->
              <th class="inputNombreC2"><center>Número del congreso </center></th>
              <!-- identificador numero registro -->
              <th class="inputNombreC2"><center>Identificador del número del registro</center></th>

              <!-- congreso  -->
              <th class="inputNombreC2"><center>Fecha de inicio del congreso <center></th>
              <th class="inputNombreC2"><center>Fecha final del congreso <center></th>

              <!--Envio de invitaciones convocatoria  -->
              <th class="inputNombreC2"><center>Fecha de inicio de envio de invitaciones de convocatoria</center></th>
              <th class="inputNombreC2"><center>Fecha final de envio de invitaciones de convocatoria</center></th>

              <!--recepcion resumenes  -->
              <th class="inputNombreC2"><center>Fecha de inicio de recepción de resumenes</center></th>
              <th class="inputNombreC2"><center>Fecha final de recepción de resumenes</center></th>

              <!--evaluacion resumenes  -->
              <th class="inputNombreC2"><center>Fecha de inicio de evaluación de resumenes</center></th>
              <th class="inputNombreC2"><center>Fecha final de evaluación de resumenes</center></th>

              <!--resultados de evaluacion resumenes  -->
              <th class="inputNombreC2"><center>Fecha de inicio de resultados de evaluaciones de resumenes</center></th>
              <th class="inputNombreC2"><center>Fecha final de resultados de evaluaciones de resumenes</center></th>

              <!-- recepcion correccion resumenes -->
              <th class="inputNombreC2"><center>Fecha de inicio de recepciones de correcciones de resumenes</center></th>
              <th class="inputNombreC2"><center>Fecha final de recepciones de correcciones de resumenes</center></th>

             <!-- recepcion extensos  -->
              <th class="inputNombreC2"><center>Fecha de inicio de recepcion de extensos</center> </th>
              <th class="inputNombreC2"><center>Fecha final de recepcion de extensos </center></th>

               <!-- notifiacion observaciones extensos  -->
              <th class="inputNombreC2"><center>Fecha de inicio de notificaciones de observaciones de extensos </center></th>
              <th class="inputNombreC2"><center>Fecha final de notificaciones de observaciones de extensos </center></th>

               <!-- recepcion pagos  -->
              <th class="inputNombreC2"><center>Fecha de inicio de recepcion de pagos</center></th>
              <th class="inputNombreC2"><center>Fecha final de recepcion de pagos</center></th>

              <!--  recepcion extensos finales -->
              <th class="inputNombreC2"><center>Fecha de inicio de recepciones de extensos finales </center></th>
              <th class="inputNombreC2"><center>Fecha final de recepciones de extensos finales </center></th>

              <!--  recepcion videos ponencias aceptadas -->
              <th class="inputNombreC2"><center>Fecha de inicio de recepciones de videos de ponencias aceptadas </center></th>
              <th class="inputNombreC2"><center>Fecha final de recepciones de videos de ponencias aceptadas </center></th>

              <!-- Publicacion del programa evento  -->
              <th class="inputNombreC2"><center>Fecha de publicación del programa del evento </center></th>

              <!--  imparticion talleres -->
              <th class="inputNombreC2"><center>Fecha de inicio de imparticion de talleres </center></th>
              <th class="inputNombreC2"><center>Fecha final de imparticion de talleres </center></th>

              <!--  envio constancias -->
              <th class="inputNombreC2"><center>Fecha de inicio de envios de constancias <center></th>
              <th class="inputNombreC2"><center>Fecha final de envios de constancias </center></th>

              <!--  publicacion memorias -->
              <th class="inputNombreC2"><center>Fecha de publicacion de memorias </center> </th>

              <!--  numero de trabajos -->
              <th class="inputNombreC2"><center>Número Total de Trabajos </center> </th>
              <th class="inputNombreC2"><center>Número de Ponencias </center> </th>
              <th class="inputNombreC2"><center>Número de Carteles </center> </th>
              <th class="inputNombreC2"><center>Número de Talleres </center> </th>

              <th class="inputNombreC2"><center>Opción</center></th>

            </tr>

          
               <?php 
           $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
            $query3 = ("Select * from congreso");
                  $conn3 = pg_query($conexion, $query3);

                  if (!$conn3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conn3) > 0) {
                    while ($rowData3 = pg_fetch_array($conn3)) {
                 
                $id_congr= $rowData3["id_congreso"];
                 ?>       
           <tr class="inputNombreC2">
           <td class="inputNombreC2"><center><?php echo $rowData3["id_congreso"] ?></center></td>
           
              <td class="inputNombreC2"><center><?php echo $rowData3["email"] ?></center></td>
              <!-- nombre congreso  -->
              <td class="inputNombreC2"><center><?php echo $rowData3["nombre_congreso"] ?></center></td>
              <!-- numero congreso -->
              <td class="inputNombreC2"><center><?php echo $rowData3["numero_congreso"] ?></center></td>
              <!-- identificador numero registro -->
              <td class="inputNombreC2"><center><?php echo $rowData3["identificador_numero_registro"] ?></center></td>

              <!-- congreso  -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_inicio_congreso"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_fin_congreso"] ?></center></td>

              <!--Envio de invitaciones convocatoria  -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_inicio_envio_invitaciones_convocatoria"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_fin_envio_invitaciones_convocatoria"] ?></center></td>

              <!--recepcion resumenes  -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_inicio_recepcion_resumenes"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_fin_recepcion_resumenes"] ?></center></td>

              <!--evaluacion resumenes  -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_inicio_evaluacion_resumenes"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_fin_evaluacion_resumenes"] ?></center></td>

              <!--resultados de evaluacion resumenes  -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_inicio_resultado_evaluacion_resumenes"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_fin_resultado_evaluacion_resumenes"] ?></center></td>

              <!-- recepcion correccion resumenes -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_inicio_recepcion_correcion_resumenes"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_fin_recepcion_correcion_resumenes"] ?></center></td>

             <!-- recepcion extensos  -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_inicio_recepcion_extensos"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_fin_recepcion_extensos"] ?></center></td>

               <!-- notifiacion observaciones extensos  -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_inicio_notificacion_observaciones_extensos"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_fin_notificacion_observaciones_extensos"] ?></center></td>

               <!-- recepcion pagos  -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_inicio_recepcion_pagos"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["fceha_fin_recepcion_pagos"] ?><center></td>

              <!--  recepcion extensos finales -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_inicio_recepcion_extensos_finales"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_fin_recepcion_extensos_finales"] ?></center></td>

              <!--  recepcion videos ponencias aceptadas -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_inicio_recepcion_videos_ponencias_aceptadas"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_fin_recepcion_videos_ponencias_aceptadas"] ?></center></td>

              <!-- publicacion programa evento  -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_publicacion_programa_evento"] ?></center></td>

              <!--  imparticion talleres -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_inicio_imparticion_talleres"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_fin_imparticion_talleres"] ?></center></td>

              <!--  envio constancias -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_inicio_envio_contancias"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_fin_envio_contancias"] ?></center></td>

              <!--  publicacion memorias -->
              <td class="inputNombreC2"><center><?php echo $rowData3["fecha_publicacion_memorias"] ?></center></td>

              <!--  numero de trabajos -->
              <td class="inputNombreC2"><center><?php echo $rowData3["num_total_trabajos"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["num_ponencias"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["num_carteles"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["num_talleres"] ?></center></td>

              <td class="inputNombreC2" >
               

              <a href="ModificarCongr.php?id=<?php echo $rowData3["id_congreso"];?>"> 

         <button class="button2" onclick="getElementsByTagName('textareaa').readonly:false;">Editar Congreso</button> </a>
          </td>

            </tr>   <?php } }  ?>
       
</table> </center></table>

      </div>
      <div> <a  href="menu.php"  > <button > Regresar</button> </a> </div>   
			
        
       </div>
  </div>
</div>

       <br>
       <br>

<div class="containerCredi">
<footer class="py-5">
    <div class="row gx-0">
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