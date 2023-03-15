<?php
// ini_set("display_errors", 0);
include 'credentials.php';
//$varName; Nombre
//$varId;
//$varEmail; Correo

session_start();
error_reporting(0);
$varsec = $_SESSION['nombre_usuario'];
if ($varsec == null || $varsec = '') {
  header('Location:404.php');
  session_destroy();
  session_unset();
  die();
}




/////PARA CERRAR SESION/////
if (isset($_POST['btn-cerrar'])) {
  session_destroy();
  // header("https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/WinxCongreso/index3.php");
  "<script> 
 window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/WinxCongreso/index3.php'); </script>";
}

/////////////ENLISTAR LAS FOTOS EXISTENTES///////////////////////////////////////////////
$listar = null;
$directorio = opendir("Pagos/Pagos2023/");

while ($elemento = readdir($directorio)) {
  if ($elemento != '.' && $elemento != '..') {
    if (is_dir("Pagos/Pagos2023/" . $elemento)) {
      $listar .= "<a class=' col-md-6' href='Pagos/Pagos2023/$elemento'target='_blank'> 
    $elemento/</a>
    <br><br>";
    } else {
      $listar .= "<a class=' col-md-6' href='Pagos/Pagos2023/$elemento'target='_blank'> 
    $elemento</a>
    <br><br>";
    }
  }
}

///////////////////////// SUBIR UNA NUEVA FOTO /////////////////////////////////////////////


if (isset($_POST["subir"])) {
  $subir = $_POST["subir"];

  if ($subir  == "Cargar archivo") {

    $folder = "Pagos/Pagos2023/";
    move_uploaded_file($_FILES["formato"]["tmp_name"], "$folder" . $_FILES["formato"]["name"]);
    echo "<div class='alert alert-success'><p class='hidd' align=center>El archivo  " . $_FILES["formato"]["name"] . " se ha cargado correctamente. <a href='pagos2.php' class='btn btn-default'>Clic aquí </a> para verificar.</div>";
  }
}

/////////////////////////////// BORRAR FOTO ////////////////////////////////////

if (isset($_POST['borrarFor'])) {
  $borrarFor = ($_POST['borrarFor']);
  @unlink('Pagos/Pagos2023/' . $borrarFor);
  echo "<div class='alert alert-danger'><p class='hidd' align=center>El archivo  " . $borrarFor . " ha sido eliminado correctamente. <a href='pagos2.php' class='btn btn-default'>Clic aquí </a> para verificar.</div>";
}


?>


<html lang="es">

<head>
  <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
  <title>Pagos del Congreso de Matemáticas</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">

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
    .nav-bar {
      display: none;
    }



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
      text-align: center;
      background-color: transparent;
      margin-top: 10px;
      margin-bottom: -10px;

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
      border: 0.15em solid #B18904;
      width: 250px;
      border-radius: 3em;
      margin: 0.25em;
    }

    .inputNombreC {
      border: 0.15em solid #B18904;
      width: 500px;
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
    .datosPP {
      border-top: 0.25em solid #B18904;
display:none;

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

      .temaCentral {
        font-size: 13px;

      }

      /*Hacer responsiva la imagen*/
      .img {
        width: 50px;
        height: 40px;
      }
    }




    .ContenedorPrincipal {
      border-radius: 3em;
      border: 0.3em solid #2B307C;
      margin: 3em;
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

 

  <main>
    <div class="ContenedorPrincipal">
      <div class="px-4 pt-5 my-5 text-center border-bottom">

        <div class="col-lg-6 mx-auto">

          <form action="#" method="POST">
            <!-- Aqui va el codigo de cada uno-->
            <input name = "id" class="datosPP" type="text" value="<?= $varId ?>" readonly>
            <br>
           
            <p class="Tema">Pagos</p>

            <!--DATOS-->
            <div class="datosP">
              <div class="D1">
                <table>
                  <center>
                    <tr>
                      <div class="photo">
                        <img src="img/info_pagos5.png" alt="Photo" style="width:100%;">
                      </div>
                      <p class="temaSec">1. Introducir los datos de pagos</p>
                    </tr>
                  </center>
                </table>
              </div>
            </div>


            <!--******Tipo de pagos*******-->
            <p class="temaCentral">Tipo de pago</p>
            <div class="datosP">
              <br>

              <table>

                <center>
                  <tr>
                    <td class="C1">
                      <label for="Folio">Referencia o folio:</label>
                    </td>
                    <td class="C2">
                      <input class="inputP" style="text-transform:uppercase;" type="number" name="id_referencia" placeholder="Referencia" required>
                    </td>
                  </tr>
                </center>
                <center>
                  <tr>
                    <td class="C1">
                      <label for="Metodo"><br>Tipo de pago:</label>
                    </td>
                    <td class="C2">
                      <select type="text" class="inputP" style="text-transform:uppercase;" id="metodo_pago" name="metodo_pago" placeholder="Seleccione" required>
                        <option selected>Elija una Opción</option>
                        <option value="Efectivo">Efectivo</option>
                        <option value="Transferencia">Tranferencia</option>
                        <option value="Beca">Beca</option>

                      </select>
                    </td>
                  </tr>
                </center>
                <center>
                  <tr>
                    <td class="C1">
                      <label for="MontoPago">Monto:</label>
                    </td>
                    <td class="C2">
                      <select type = "number" class="inputP" style="text-transform:uppercase;" id="monto" name="monto" placeholder="Seleccione" required>
                        <option selected>Elija una Opción</option>
                        <option value="200">700</option>
                        <option value="1200">1200</option>
                        <option value="1400">1400</option>

                      </select>
                    </td>
                  </tr>
                </center>

                <center>
                  <tr>
                    <td class="C1">
                      <label for="Date">Fecha:</label>
                    </td>
                    <td class="C2">
                      <input class="inputP" style="text-transform:uppercase;" type="date" name="fecha" value="2023-01-01" min="2022-01-01" max="2030-12-31" required>
                    </td>
                  </tr>
                </center>


              </table>
              <br>
              <br>
              <center>
                <button name="uploadBtn" class="enviarBtn" value="Enviar">Enviar</button>
              </center>

            </div>
            <br>
            <br>

            <!--******Imagen*******-->
            <p class="temaCentral">Comprobante de pago</p>
            <div class="datosP">

              <p class="temaTer"><br>2. Subir el ficha de pago en formato jpg. El nombre del archivo debe ser el numero de folio de su pago. IMPORTANTE: Debe validar que la imagen se cargo correctamente.</p>



              <!-- <input class="imgPago" type="file" name="imgPago">-->


          </form>
        </div>
      </div>
      
      <center>
        <form method="post" enctype="multipart/form-data" class="col-md-offset-4 col-md-4" style="margin-right:2%; border-radius:20px;">
          <div class="bg-secondary text-white" style="margin-top:2%; margin-bottom:20%; padding:3%; border-radius:20px; background-color: #2B307C;">
            <input class="form-control" type="file" name="formato" id="formato" style="margin-bottom:2%;">
            <input class="btn btn-default" type="submit" name="subir" value="Cargar archivo" style="width:100%; color: white;">
          </div>
        </form>
        <br>
        <form method="post" class="col-md-offset-4 col-md-4" style="margin-right:2%; margin-top:-7%; ">

          <div class="bg-dark text-white" style="margin-top:2%; margin-bottom:20%; padding:3%; border-radius:20px;">
            <input class="form-control" name="borrarFor" size="50" placeholder=" Ejemplo: 1.Nombre_Del_Archivo.xls" style="margin-bottom:2%;" />
            <input class="btn btn-default" type="submit" name="borrar" value="Borrar archivo" style="width:100%; color: white;">
            <div class="col-md-6" style="margin-top:-6%;">
              <?php
              if (isset($_POST['mensajeOk'])) {
                $mensajeOk = ($_POST['mensajeOk']);
                echo $mensajeOk;
              }
              ?>
            </div>
            <br>
          </div>
        
        </form>
        <div> <a href="menu.php"> <button>Regresar</button> </a> </div>
      </center>



    </div>

    </div>
    <div>

      <?php
   
      $message = '';

      if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Enviar') {

        $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");

       $enviarCorreo = false;
        if (isset($_POST["id_referencia"]) && isset($_POST["metodo_pago"]) && isset($_POST["monto"]) && isset($_POST["fecha"]) && isset($_POST["id"])) {

          
          $id_referencia_pago = $_POST["id_referencia"];
          $metodo_pago = $_POST["metodo_pago"];
          $monto = $_POST["monto"];
          $fecha = $_POST["fecha"];
          $estado = "Enviado";
          $varId2 = $_POST["id"];

          $query = "SELECT * FROM pagos WHERE id_referencia_pago ='$id_referencia_pago'";
          $consulta = pg_query($conexion, $query);
          $cantidad = pg_num_rows($consulta);

          $enviarCorreo = true;
          if ($cantidad > 0) {
            echo "<script>alert('Ya existe una referencia con este numero. Intenta Nuevamente!!!'); 
        window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/pagos2.php');</script>";
          } else {
            $query2 = ("INSERT INTO pagos (id_referencia_pago, monto, fecha, estado, metodo_pago, usuario_id ) 
         VALUES ('$id_referencia_pago', '$monto', '$fecha', '$estado' ,'$metodo_pago','$varId2')");
            $consulta2 = pg_query($conexion, $query2);
           $enviarCorreo = true;
           

           if($consulta2){
            require './enviarEmail.php';
           // ENVIO DE CORREO  
            $id_referencia_pago = $_POST["id_referencia"];
            $correo=$varEmail;
             $estado = "Enviado";
             $subject = "Registro de Pago Congreso de Matematicas FES Cuautitlan";
             $body = "Se ha registrado tu pago de manera exitosa con la clave de pago: {$id_referencia_pago}. El estado del pago es: {$estado}, espera a que la secretaria del congreso se comunique contigo para confirmar el pago.";
             sendEmail($correo, $subject, $body);

      
             echo  "<script>alert('Pago Registrado Exitosamente!!! Revisa tu Email para verificar'); </script>";

           } else{
            echo  "<script>alert('Ocurrio un error, vuelve a intentarlo'); 
            window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/pagos2.php');</script>";

           }
            
          }
        }
      }
      $_SESSION['sms'] = $message;
      ?>
    </div>



    </div>
  </main>

  <br>
  <br>

  <!---Creditos--->

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


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>