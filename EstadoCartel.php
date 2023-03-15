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
  <title>Estado Carteles</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
  <link rel="stylesheet" href="icon.css">
  <link rel="stylesheet" href="css/estilosmenuarriba.css">
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <!---banderas--->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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


    .nav-bar {
      display: none;
    }

    .feature-icon {
      width: 4rem;
      height: 4rem;
      border-radius: .75rem;
    }

    .icon-link>.bi {
      margin-top: .125rem;
      margin-left: .125rem;
      fill: currentcolor;
      transition: transform .25s ease-in-out;
    }

    .icon-link:hover>.bi {
      transform: translate(.25rem);
    }

    .icon-square {
      width: 3rem;
      height: 3rem;
      border-radius: .75rem;
    }

    .text-shadow-1 {
      text-shadow: 0 .125rem .25rem rgba(0, 0, 0, .25);
    }

    .text-shadow-2 {
      text-shadow: 0 .25rem .5rem rgba(0, 0, 0, .25);
    }

    .text-shadow-3 {
      text-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .25);
    }

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

    .register label {
      margin: 0;
      margin-top: 50px;
      padding: 0;
      color: #2B307C;
    }

    .register input {

      border-radius: 9px;

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
      border: 0.15em solid #2B307C;
      border-radius: 3em;
      margin: 0.25em;
      width: 250px;
    }

    .inputNombreC {
        border: 0.15em solid #2B307C;
        width: 500px;
        border-radius: 1em;
      }

    .temaCentral {
      margin: 0;
      padding: 0;
      color: #2B307C;
      background: white;
      border: 0.25em solid #FFF;
      position: absolute;
      transform: translate(0%, -50%);
      font-size: 18px;
    }

    .inputNombreC2 {
				border: 0.15em solid #B18904;
				width: 500px;
        border-radius: 3em;
			}

    .datosP {
      border-top: 0.25em solid #2B307C;

    }

    .C1 {
      text-align: right;
      width: 180px;

    }

    .D1 {
      margin-bottom: 6%;
      margin-top: 3%;
      text-align: left;
    }

    @media (max-width: 760px) {
        .inputP {
          width: 80px;
        }
        .inputNombreC {
          width: 160px;
          font-size: 0.9rem;
        }
        .inputNombreC2 {
          width: 160px;
          font-size: 0.6rem;
        }
        .inputNombreC3 {
          width: 90px;
          font-size: 0.6rem;
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
      .button2{
   font-size: 0.9rem;
  border-radius: 0.5rem;
  padding: 0.5px 1px;
  margin-bottom: -5px; 
  position: relative;
  top:10%; 
  margin-left: -10px;
  margin-right: -10px;
width: 90px;
}
    }
      @media (max-width: 370px) {
        .inputP {
          width: 60px;
        }
        .inputNombreC {
          width: 130px;
        }
        .inputNombreC2 {
          width: 130px;
           font-size: 0.6rem;
        }
        .inputNombreC3 {
          width: 20px;
          height: 10px;
          font-size: 0.6rem;
        }
        .content-select {
          width: 60px;
        }

        .temaCentral{
          font-size: 13px;
          
        }

.button2{
  font-size: 2px;
  border-radius: 0.5rem;
  padding: 0.5px 2px;
  margin-bottom: -5px; 
  position: relative;
  top:10%; 
  left: 90%;

}
        .contenedorregistroI{
        margin:1em;
}
      }

    .ContenedorPrincipal {
      border-radius: 3em;
      border: 0.3em solid #2B307C;
      margin: 3em;
    }

    .table-responsive{

margin:1em;
height: 60%;

border-radius: 1em;

width: auto;
}
  </style>
</head>


<body>
  <!--
Encabezado de la página */
        */banner, menu, carrusel, cuadro iniciar, cuadro fechas, -->
  <!-- Baner -->


  <div id="wrapper">
    <center> <img src="img/banpru.jpg" class="baner" /> </center>
  </div>

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

<div class="contenedorPrincipal"> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
    <div class="col-lg-6 mx-auto"> 
      <!--<form  method="post"> -->
     <p class="Tema">Estado de Cartel</p>  <form action="#" method="POST" >
     <div class="D1">  
     <?php
             $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
             $id_pon = $_GET['id']; 
    
                     $query2 = ("Select * from trabajos WHERE id_trabajo='$id_pon' ");
                     $conn2 = pg_query($conexion, $query2);

                     if (!$conn2) {
                       die(pg_error($conexion));
                     }
   
                     if (pg_num_rows($conn2) > 0) {
                       while ($rowData2 = pg_fetch_array($conn2)) {
                         ?> 

                <table> 
                <tr>                                         
								<td class="C1">
									<label >Id del Cartel: </label>
								</td>
								<td class="C2">
									<input class="inputNombreC"  name="IdPon"  value="<?php echo $rowData2["id_trabajo"] ?>" readonly>
								</td>
							   </tr>                                                                       
               <tr>                                         
								<td class="C1">
									<label >Título del Cartel: </label>
								</td>
								<td class="C2">
									<textarea class="inputNombreC"  name="TituloPon"  readonly> <?php echo $rowData2["titulo"] ?> </textarea>
								</td>
                </tr>
                <tr>
                <td class="C1">
									<label >Categoría: </label>
								</td>
								<td class="C2">
									<textarea class="inputNombreC"  name="CatPon"  readonly> <?php echo $rowData2["categoria"] ?> </textarea>
								</td>
							   </tr>
                                
                 </table>
              </div>
     <p class="temaCentral">Resumen </p>
				 <div class="datosP">					                                        
            <div class="D1">
            <div> 
            <?php
              $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
              $id_pon = $_GET['id']; 
              $queryERP = ("Select * from evaluacion_resumen ");
              $connERP = pg_query($conexion, $queryERP);
              if (!$connERP) {
                die(pg_error($conexion));
              }
              if (pg_num_rows($connERP) > 0) {
                while ($rowDataEvaResP = pg_fetch_array($connERP)) {
            $id_EvResP= $rowDataEvaResP["evaluacion_id"];

            $queryERP2 = ("Select * from evaluacion WHERE id_evaluacion='$id_EvResP'");
            $connERP2 = pg_query($conexion, $queryERP2);
            if (!$connERP2) {
              die(pg_error($conexion));
            }
            if (pg_num_rows($connERP2) > 0) {
              while ($rowDataEvaResP2 = pg_fetch_array($connERP2)) {
          $id_EvResP2= $rowDataEvaResP2["id_evaluacion"];

          $queryERP3 = ("Select * from evaluacion_trabajos WHERE trabajos_id='$id_pon' and evaluacion_id = '$id_EvResP2' ");
          $connERP3 = pg_query($conexion, $queryERP3);
            if (!$connERP3) {
              die(pg_error($conexion));
            }
            if (pg_num_rows($connERP3) > 0) {
              while ($rowDataEvaResP3 = pg_fetch_array($connERP3)) {
              ?>
                <table>                                                                        
               <tr>                                         
								<td class="C1">
									<label >Estado Actual de la Evaluación del Resumen:</label>
								</td>
								<td class="C2">
									<input class="inputP"  name="EstadoReP"  value="<?php echo $rowDataEvaResP3["estado"]?>" readonly>
								</td>

                <td >
                  <?php
                             if($rowDataEvaResP3["estado"]=="POR CORREGIR"){
                         ?> 
                               <a href="corregircartel.php?itt=<?php echo $rowDataEvaResP3["trabajos_id"];?>">
                        
                  <button type="button" >Corregir Resumen</button> </a>
                 <br> <br> <br>

                         <?php
                             }else if($rowDataEvaResP3["estado"]=="ACEPTADO"){
                   $querycondi = ("Select * from carteles WHERE id_trabajos='$id_pon'");
                  $conncondi = pg_query($conexion, $querycondi);
                  if (!$conncondi) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($conncondi) > 0) {
                    while ($rowDatacondi = pg_fetch_array($conncondi)) {
                    $condi2= $rowDatacondi["cartel_jpg"];

              }}

                             if($condi2==''){

                              ?>

                       <a href="registrojpgcartel.php?itt=<?php echo $rowDataEvaResP3["trabajos_id"];?>">
                        
                  <button type="button" >Enviar Cartel</button> </a> 
                    <?php
                             }}
                  ?>
               </td>
							   </tr>                    
                 </table>
              </div>
            </div>               
         </div>   


         <p class="temaCentral">Cartel </p>
				 <div class="datosP">					                                        
            <div class="D1">
            <div> 
            <?php
               $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
               $id_pon = $_GET['id']; 
               $queryEXP = ("Select * from evaluacion_cartel ");
                    $connEXP = pg_query($conexion, $queryEXP);
                    if (!$connEXP) {
                      die(pg_error($conexion));
                    }
                    if (pg_num_rows($connEXP) > 0) {
                      while ($rowDataEvaExP = pg_fetch_array($connEXP)) {
                  $id_EvExP= $rowDataEvaExP["evaluacion_id"];
  
                  $queryEXP2 = ("Select * from evaluacion WHERE id_evaluacion='$id_EvExP'");
                  $connEXP2 = pg_query($conexion, $queryEXP2);
                    if (!$connEXP2) {
                      die(pg_error($conexion));
                    }
                    if (pg_num_rows($connEXP2) > 0) {
                      while ($rowDataEvaExP2 = pg_fetch_array($connEXP2)) {
                  $id_EvExP2= $rowDataEvaExP2["id_evaluacion"];
  
                $queryEXP3 = ("Select * from evaluacion_trabajos WHERE trabajos_id='$id_pon' and evaluacion_id = '$id_EvExP2' ");
                $connEXP3 = pg_query($conexion, $queryEXP3);
                  if (!$connEXP3) {
                    die(pg_error($conexion));
                  }

                  ?>

                  
                  <?php
                  if (pg_num_rows($connEXP3) > 0) {
                    while ($rowDataEvaExP3 = pg_fetch_array($connEXP3)) {
              ?>
                <table>                                                                        
               <tr>                                         
								<td class="C1">
									<label >Estado Actual de la Evaluación del Cartel:</label>
								</td>
								<td class="C2">
									<input class="inputP"  name="EstadoExP"  value="<?php echo $rowDataEvaExP3["estado"]?>" readonly>
								</td>

                <td >
                  <?php
                             if($rowDataEvaExP3["estado"]=="POR CORREGIR"){
                         ?> 
                               <a href="corregirjpgcartel.php?itt=<?php echo $rowDataEvaExP3["trabajos_id"];?>">
                        
                  <button type="button" >Corregir Cartel</button> </a>
                 <br> <br> <br>

                         <?php
                             }else if($rowDataEvaExP3["estado"]=="ACEPTADO"){
                   $querycondi = ("Select * from carteles WHERE id_trabajos='$id_pon'");
                  $conncondi = pg_query($conexion, $querycondi);
                  if (!$conncondi) {
                    die(pg_error($conexion));
                  }
                  if (pg_num_rows($conncondi) > 0) {
                    while ($rowDatacondi = pg_fetch_array($conncondi)) {
                 
                $condi3= $rowDatacondi["video_url"];}}

                             if($condi3==''){

                              ?>  

                       <a href="registrourlcartel.php?itt=<?php echo $rowDataEvaExP3["trabajos_id"];?>">
                        
                  <button type="button" >Enviar URL del Video</button> </a> 
                    <?php
                             }}
                  ?>
               </td>
							   </tr>
                                
                 </table>
              </div>
            </div>               
         </div> 


         <p class="temaCentral">Video </p>
				 <div class="datosP">					                                        
            <div class="D1">
            <div> 
            <?php
              $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
              $id_pon = $_GET['id']; 
              $queryEVP = ("Select * from evaluacion_video ");
               $connEVP = pg_query($conexion, $queryEVP);
               if (!$connEVP) {
                 die(pg_error($conexion));
               }
               if (pg_num_rows($connEVP) > 0) {
                 while ($rowDataEvaVP = pg_fetch_array($connEVP)) {
             $id_EvViP= $rowDataEvaVP["evaluacion_id"];

             $queryEVP2 = ("Select * from evaluacion WHERE id_evaluacion='$id_EvViP'");
             $connEVP2 = pg_query($conexion, $queryEVP2);
             if (!$connEVP2) {
               die(pg_error($conexion));
             }
             if (pg_num_rows($connEVP2) > 0) {
               while ($rowDataEvaVP2 = pg_fetch_array($connEVP2)) {
           $id_EvViP2= $rowDataEvaVP2["id_evaluacion"];

           $queryEVP3 = ("Select * from evaluacion_trabajos WHERE trabajos_id='$id_pon' and evaluacion_id = '$id_EvViP2' ");
           $connEVP3 = pg_query($conexion, $queryEVP3);
             if (!$connEVP3) {
               die(pg_error($conexion));
             }
             if (pg_num_rows($connEVP3) > 0) {
               while ($rowDataEvaVP3 = pg_fetch_array($connEVP3)) {
              ?>
            
                <table>                                                                        
               <tr>                                         
								<td class="C1">
									<label >Estado Actual de la Evaluación del Video:</label>
								</td>
								<td class="C2">
                  <input class="inputP"  name="EstadoViP"  value="<?php echo $rowDataEvaVP3["estado"] ?>" readonly>
                </td>
                <td>
                <?php
                             if($rowDataEvaVP3["estado"]=="POR CORREGIR"){
                         ?> 
                              <a href="corregirurlcartel.php?itt=<?php echo $rowDataEvaVP3["trabajos_id"];?>">
                        
                  <button type="button" >Corregir Video</button> </a>
                 <br> <br> <br>
                         <?php
                             }
                  ?>
               </td>

							   </tr>
                                
                 </table>
              </div>


            </div>               
         </div> 

         <?php } }  } } } } } } } } } } } } } } } } } }
              ?>    
      </div>
      <a  href="HistorialTrabajos.php"  > <button type="button"> Regresar</button> </a>
         </form>
     </div>
  </div>
 
</div>
              </div> </div>
  <br>
  <br>

  <!---Creditos--->

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
            <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted">Facultad de Estudios Superiores Cuautitlán</li>
          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
          <h5 style="color: #FFFFFF;">UBICACIÓN</h5>
          <ul class="nav flex-column">
            <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted">Km 2.5 carretera Cuautitlán-Teoloyucan, San Sebastián Xhala, Cuautitlán Izcalli, Estado de México. C.P. 54714.</li>
          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
          <h5 style="color: #FFFFFF;">TELÉFONO</h5>
          <ul class="nav flex-column">
            <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted"> (55) 56 23 18 86 / (55) 56 23 18 90</li>
            <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted">Para mayores informes o dudas comunicarse al Departamento de Matemáticas Edificio A8 Campo 4.</li>
          </ul>
        </div>

        <div class="containerCredi">
          <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li style="color: #FFFFFF;" class="nav-item" class="nav-link px-2 text-muted">Sitio Web administrado por: Departamento de Matemáticas</li>
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