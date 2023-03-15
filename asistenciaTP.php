<?php
ini_set("display_errors", 1);
?>

<?php
include 'credentials.php';

session_start();
error_reporting(0);
$varsec = $_SESSION['nombre_usuario'];
if ($varsec == null || $varsec = '') {
  header('Location:404.php');
  session_destroy();
  session_unset();
  die();
}


?>



<html lang="es">

<head>
  <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
  <title>Asistencia a Talleres y ponencias del Congreso de Matemáticas</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">

  <link rel="stylesheet" href="icon.css">
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/estilosmenuarriba.css">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

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

    /*Aqui empieza el nuevo menu de colores junto con el menu para celular responsivo
-------
------
------
------*/


    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Roboto, sans-serif;
    }



    .containerBoton {
      width: 100%;
      height: 12vh;
      position: relative;
      top: 6%;
      transform: translateY(-50%);
      text-align: center;
      background-color: transparent;

    }


    .boton1 {
      padding: 15px 25px;
      margin: 1px;
      font-size: 16px;
      border: 2px solid #876E13;
      border-radius: 1em;
      color: black;
      cursor: pointer;
      background: linear-gradient(to right, transparent 50%, #876E13 50%);
      background-size: 200%;
      background-position: left;
      transition: background-position 0.5s
    }

    .boton1:hover {
      background-position: right;
      color: white;
      font-weight: 700;
    }

    .boton2 {
      padding: 15px 25px;
      margin: 1px;
      font-size: 16px;
      border: 2px solid #876E13;
      border-radius: 1em;
      color: black;
      cursor: pointer;
      background: linear-gradient(to right, transparent 50%, #876E13 50%);
      background-size: 200%;
      background-position: left;
      transition: background-position 0.5s
    }

    .boton2:hover {
      background-position: right;
      color: white;
      font-weight: 700;
    }

    .boton3 {
      padding: 15px 25px;
      margin: 1px;
      font-size: 16px;
      border: 2px solid #876E13;
      border-radius: 1em;
      color: black;
      cursor: pointer;
      background: linear-gradient(to right, transparent 50%, #876E13 50%);
      background-size: 200%;
      background-position: left;
      transition: background-position 0.5s
    }

    .boton3:hover {
      background-position: right;
      color: white;
      font-weight: 700;
    }

    .boton4 {
      padding: 15px 25px;
      margin: 1px;
      font-size: 16px;
      border: 2px solid #876E13;
      border-radius: 1em;
      color: black;
      cursor: pointer;
      background: linear-gradient(to right, transparent 50%, #876E13 50%);
      background-size: 200%;
      background-position: left;
      transition: background-position 0.5s
    }

    .boton4:hover {
      background-position: right;
      color: white;
      font-weight: 700;
    }

    .boton5 {
      padding: 15px 25px;
      margin: 1px;
      font-size: 16px;
      border: 2px solid #876E13;
      border-radius: 1em;
      color: black;
      cursor: pointer;
      background: linear-gradient(to right, transparent 50%, #876E13 50%);
      background-size: 200%;
      background-position: left;
      transition: background-position 0.5s
    }

    .boton5:hover {
      background-position: right;
      color: white;
      font-weight: 700;
    }

    .boton6 {
      padding: 15px 25px;
      margin: 1px;
      font-size: 16px;
      border: 2px solid #876E13;
      border-radius: 1em;
      color: black;
      cursor: pointer;
      background: linear-gradient(to right, transparent 50%, #876E13 50%);
      background-size: 200%;
      background-position: left;
      transition: background-position 0.5s
    }

    .boton6:hover {
      background-position: right;
      color: white;
      font-weight: 700;
    }

    @media only screen and (max-width:768px) {

      .nav-bar {
        position: fixed;
        right: 0;
        top: 14%;
        font-size: 1.5rem;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        z-index: 100;
      }

      .icond {
        color: white;
        text-decoration: none;
        padding: .7rem;
        display: flex;
        transition: all .5s;
      }

      .menuRB {
        display: none;
      }

      .icon-book {
        background: #876E13;
      }

      .icon-file-text2 {
        background: #2b507c;
      }

      .icon-mic {
        background: #876E13;
      }

      .icon-stack {
        background: #2b507c;
      }

      .icon-key {
        background: #876E13;
      }

      .icon-hearth {
        background: #2b507c;
      }

      .icond:first-child {
        border-radius: 1rem 0 0 0;
      }

      .icond:last-child {
        border-radius: 0 0 0 1rem;
      }



    }

    .nav-bar {
      display: none;
    }

    #btn-menu3 {
      display: none;
    }

    .menu3 ul {
      margin: 0;
      list-style: none;
      padding: 0;
      display: flex;
    }

    .menu3 li {
      text-align: center;
      flex-grow: 1;
    }

    .menu3 li:hover {
      background: rgb(135, 110, 19);
    }

    .menu3 li a {
      display: block;
      padding: 15px 20px;
      color: #fff;
      text-decoration: none;
    }

    @media (max-width: 768px) {
      header label {
        display: block;
      }

      .menu3 {
        position: absolute;
        background: transparent;
        width: 70%;
        margin-left: -70%;
        transition: all 0.5s;
      }

      .menu3 ul {
        flex-direction: column;
      }

      .menu3 li {
        border-top: 1px solid transparent;
      }

      #btn-menu3:checked~.menu3 {
        margin: 0;
      }
    }

    /*Aqui termina el nuevo menu de colores junto con el menu para celular responsivo*
-------------
------------
------------*/

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
      top: 50%;
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
      border: 0.15em solid #B18904;
      width: 250px;
      border-radius: 3em;
      margin: 0.25em;
    }

    .inputC {
      border: 0.15em solid #B18904;
      width: 350px;
      border-radius: 3em;
      margin: 0.25em;
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
      text-align: left;
    }


    @media (max-width: 600px) {
      .inputP {
        width: 150px;
      }

      .inputC {
        width: 150px;
      }

      .temaCentral {
        font-size: 13px;

      }

    }

    @media (max-width: 340px) {
      .inputP {
        width: 110px;
      }

      .inputC {
        width: 110px;
      }
    }

    @media (max-width: 290px) {
      .inputP {
        width: 90px;
      }

      .inputC {
        width: 90px;
      }
    }

    /*  .contenedorregistroI{
    border-radius: 2em;
    border: 0.3em solid #B18904;
    margin:1em;
    flex-direction: row;
    }

.contenedorregistroI2{
    border-radius: 2em;
  border: 0.3em solid #B18904;
    margin:1em;
    flex-direction: row;
    
}*/


    .ContenedorPrincipal {
      border-radius: 3em;
      border: 0.3em solid #2B307C;
      margin: 3em;
    }

    .inputNombreC {
      border: 0.15em solid #B18904;
      width: 500px;
      border-radius: 3em;
    }

    .inputNombreC2 {
      border: 0.15em solid #B18904;
      width: 500px;
      border-radius: 3em;
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

      .content-select {
        width: 160px;
      }

      .temaCentral {
        font-size: 13px;

      }

      .contenedorregistroI {
        margin: 1em;

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

      .content-select {
        width: 60px;
      }

      .temaCentral {
        font-size: 13px;

      }

      .contenedorregistroI {
        margin: 1em;
      }
    }



    .table-responsive {

      margin: 1em;
      height: 90%;
      border-radius: 1em;
      width: auto;
    }
  </style>

  <script type="text/javascript">
    function preguntarSiNo() {
      alertify.confirm('Confirmar asistencia', '¿Esta seguro de asistir a este evento?',
        function() {
          alertify.success('Ok')
        },
        function() {
          alertify.error('Cancel')
        });

    }
  </script>


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


  <div class="ContenedorPrincipal">
    <div class="px-4 pt-5 my-5 text-center border-bottom">

      <div class="col-lg-6 mx-auto">

        <form action="#" method="POST">
          <!-- Aqui va el codigo de cada uno-->
          <input name="id" class="datosP" type="text" value="<?= $varId ?>" readonly style="display:none">

          <p class="Tema">Asistencia a Ponencias y Talleres</p>

          <!--DATOS-->
          <div class="datosP">
            <div class="D1">
              <table>
                <center>
                  <tr>
                    <p class="temaSec">Elige el taller o ponencia al que deseas asistir y porteriormente realiza el pago para la asistencia.</p>
                  </tr>
                </center>
              </table>
            </div>
          </div>


          <!--******Asistencia******-->
          <p class="temaCentral">Selecione un tipo de evento</p>
          <div class="datosP">
            <br>

            <div class="D1">
              <table>
                <tr>
                  <td class="C2">
                    <select class="inputNombreC" name="tabla1">


                      <option>SELECCIONE</option>
                      <option value="MESA">MESA REDONDA</option>
                      <option value="CONFERENCIA">CONFERENCIA</option>


                    </select>

                    <button name="uploadBtn2" class="enviarBtn" value="Buscar">Buscar</button>
                  </td>
                </tr>
              </table>
            </div>
        </form>

        <?php if (isset($_POST['uploadBtn2']) && $_POST['uploadBtn2'] == 'Buscar') {


          if (isset($_POST["tabla1"])) {
            $tablaa = $_POST["tabla1"];

            //Opcion Usuarios
            if ($tablaa == 'MESA') { ?>

              <div class="contenedorregistroI2">
                <div class="px-4 pt-1 my-5 text-center border-bottom">
                  <div class="col-lg-12 mx-auto">
                    <p class="temaCentral">MESAS DISPONIBLES</p>
                    <div class="datosP">

                      <div class="table-responsive">
                        <table class="table table-bordered border border-secondary">

                          <table class="inputNombreC">
                            <tr class="inputNombreC2">
                              <td class="inputNombreC2">Código</td>
                              <td class="inputNombreC2">Titulo</td>
                              <td class="inputNombreC2">Categoria</td>
                              <td class="inputNombreC2"></td>
                            </tr>


                            <?php
                            $conexion8 = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                            $query2 = ("select * from exposicion inner join mesa_redonda on exposicion.id_expo=mesa_redonda.exposicion_id");
                            $conn1 = pg_query($conexion8, $query2);

                            if (!$conn1) {
                              die(pg_last_error($conexion8));
                            }

                            if (pg_num_rows($conn1) > 0) {
                              while ($rowData = pg_fetch_array($conn1)) {
                                //$ponente = $rowData["ponente_id"];  
                            ?>
                                <tr class="inputNombreC2">
                                  <td  class="inputNombreC2"><?php echo $rowData["exposicion_id"] ?></td>
                                  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly><?php echo $rowData["titulo_mesa_redonda"] ?></textarea></td>
                                  <!-- categoria -->
                                  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly><?php echo $rowData["categoria_mesa"] ?></textarea></td>
                                  

                                  <!-- Asistir -->
                                  <td class="inputNombreC2">

                                  <a href="asistenciaMesa.php?id=<?php echo $rowData["exposicion_id"];
                                         ?>"> <input value ="Asistir" type="button" class="enviarBtn" onclick="getElementsByTagName('textareaa').readonly:false;"/> </a>
                                  
                                  </td>
                                </tr> <?php } }  ?>

                          </table>

                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div><?php

                  }
                  //Opcion CONGRESOS
                  else if ($tablaa == 'CONFERENCIA') {
                    ?>

              <div class="contenedorregistroI2">
                <div class="px-4 pt-1 my-5 text-center border-bottom">
                  <div class="col-lg-12 mx-auto">
                    <p class="temaCentral">CONFERENCIAS DISPONIBLES</p>
                    <div class="datosP">

                      <div class="table-responsive">
                        <table class="table table-bordered border border-secondary">
                          <center>
                            <table class="inputNombreC">
                              <tr class="inputNombreC2">

                                <td class="inputNombreC2">Código</td>
                                <td class="inputNombreC2">Titulo</td>
                                <td class="inputNombreC2">Categoria</td>
                               
                                <td class="inputNombreC2"></td>

                              </tr>


                              <?php
                              $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                              $query3 = ("select * from exposicion inner join conferencia on exposicion.id_expo=conferencia.exposicion_id");
                              $conn3 = pg_query($conexion, $query3);

                              if (!$conn3) {
                                die(pg_last_error($conexion));
                              }

                              if (pg_num_rows($conn3) > 0) {
                                while ($rowData3 = pg_fetch_array($conn3)) {


                              ?>
                                  <tr class="inputNombreC2" >
                                    <td  class="inputNombreC2"><?php echo $rowData3["exposicion_id"] ?>
                                    </td>

                                    <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly><?php echo $rowData3["titulo_conferencia"] ?></textarea></td>
                                    <!-- categoria -->
                                    <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly><?php echo $rowData3["categoria_conferencia"] ?></textarea></td>
                                    <!--boton -->
                  
                                    
                                    <td class="inputNombreC2">
                                     
                                      <a href="asistenciaTP2.php?id=<?php echo $rowData3["exposicion_id"];
                                         ?>"> <input value ="Asistir" type="button" class="enviarBtn" onclick="getElementsByTagName('textareaa').readonly:false;"/> </a>

                                    </td>


                                  </tr> <?php } }   ?>

                            </table>
                          </center>
                        </table>

                      </div>
                    </div>
                  </div>
                </div>

              </div> <?php } ?> <!--  fin del else if de CONFERENCIA -->
        <?php } } ?>
        <br>
      </div>
    </div>
    <div> <a href="menu.php"> <button id="btn">Regresar</button> </a> </div>
  </div>

  </div>

  <br>

  <?php
  $message = '';

  if (isset($_POST[''])) {

    $conexion5 = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");


    if (isset($_POST["id_expo"]) && isset($_POST["id"])) {

      $id_exposicion = $_POST["id_expo"];
      $varId = $_POST["id"];

      $query5 = ("SELECT * FROM usuario_asiste_exposicion WHERE usuario_id ='$VarId'");
      $consulta5 = pg_query($conexion5, $query5);
      $cantidad5 = pg_num_rows($consulta5);
      if ($cantidad5 > 0) {
        echo "<script>alert('Ya te inscribiste a este curso. Intenta inscribirte a un nuevo curso.'); 
         window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/asistenciaTP.php');</script>";
      } else {
        $query6 = ("INSERT INTO usuario_asiste_exposicion (usuario_id, exposicion_id) VALUES ('$varId','$id_exposicion')");
        $consulta6 = pg_query($conexion5, $query6);
        if ($consulta6) {

          echo  "<script>alert('Asistencia registrada exitosamente!!!'); 
        window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/menu.php');</script>";
        } else {

          die(pg_last_error($conexion5));
        }
      }
    }
  }


  $_SESSION['sms'] = $message;
  ?>
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