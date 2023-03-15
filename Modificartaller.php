<?php

include 'credentials.php';
include 'pgsqlConexion';
//  America/Mexico_City
date_default_timezone_set("America/Mexico_City");
$fechaActual = date('Y-m-d');
$fechaid = date('myhis');
$horaActual = date("H:i:s");
$numid = intval($fechaid);

?>
<html lang="es">

<head>
  <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
  <title>Modificar Ponencia</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">

  <!-- <link rel="stylesheet" href="mainregistroponencia.js"> -->
  <link rel="stylesheet" href="css/estilosregistroponencias1.css">
  <link rel="stylesheet" href="css/estilosregistrosresumenesptc.css">
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <link rel="icon" href="img/favicon.png" type="image/x-icon">
  <script type="text/javascript" src="js/mostrar.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <!-- jQuery Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />


  <script src="https://www.google.com/recaptcha/api.js"></script>
  <meta http-equiv="XX-UA-Compatible" content="ie=edge">

  <!-- recuadro resumen -->
  <style type="text/css">
    textarea {
      width: 100%;
      padding: 12px;
      border: 0.15em solid #2B307C;
      border-radius: 9px;
      resize: none;
      height: 100px;
      text-align: left;
      font-size: 13.5px;


    }
  </style>

  <!-- recuadros de titulo, palabras clave y correos-->

  <style type="text/css">
    .textarea2 {

      width: 500px;
      padding: 12px;
      border: 0.15em solid #2B307C;
      resize: none;
      height: 50px;
      text-align: left;
      position: relative;
    }
  </style>


  <!-- recuadros de resumen-->

  <style type="text/css">
    .textarea3 {

      width: 500px;
      padding: 12px;
      border: 0.15em solid #2B307C;
      resize: none;
      height: 50px;
      text-align: left;
      position: relative;
    }
  </style>
  <style>
    .nav-bar {
      display: none;
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
      transition: background-position 0.5s;

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
      transition: background-position 0.5s;

    }

    .boton2:hover {
      background-position: right;
      color: white;
      font-weight: 700;
    }

    .boton3 {
      padding: 15px 25px;
      margin: 1x;
      font-size: 16px;
      border: 2px solid #876E13;
      border-radius: 1em;
      color: black;
      cursor: pointer;
      background: linear-gradient(to right, transparent 50%, #876E13 50%);
      background-size: 200%;
      background-position: left;
      transition: background-position 0.5s;

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
      transition: background-position 0.5s;

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
      transition: background-position 0.5s;

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
      transition: background-position 0.5s;

    }

    .inputPCategorias {
      width: 270px;
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


      @media (max-width: 800px) {
        .textarea2 {
          width: 270px;

        }

        .textarea3 {
          width: 270px;

        }


      }

      @media (max-width: 560px) {
        .textarea2 {
          width: 160px;

        }

        .textarea3 {
          width: 160px;

        }

        .inputPCategorias {
          width: 160px;
        }

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
      <label for="btn-menu"><img src="img/menuicono.png" alt=""> </label>
      <nav class="menu" style="z-index: 1;">
        <ul>
          <li> <a href="indexSesion.php">Inicio</a></li>
          <li> <a href="memoriascarruselSesion.php">Memorias</a></li>
          <li> <a href="convocatoriaSesion.php">Convocatoria</a></li>
          <li> <a href="inscripcionYcostosSesion.php">Inscripción y Costos</a></li>
          <li> <a href="ComiteOrgSesion.php">Comité Organizador</a></li>
          <li> <a href="ComiteEvaSesion.php">Comité Evaluador</a></li>
          <li> <a href="destroySesion.php"><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Cerrar Sesión</a></li>
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

  <div class="ContenedorPrincipal">
    <div class="px-4 pt-5 my-5 text-center border-bottom">

      <div class="col-lg-6 mx-auto">



        <?php

        if (isset($_SESSION['sms']) && $_SESSION['sms']) {
          printf('<b>%s</b>', $_SESSION['sms']);
          unset($_SESSION['sms']);
        }

        $idt = $_GET['id'];
        $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");



        $querydt = ("Select * from trabajos where id_trabajo='$idt'");
        //obtiene el id de su evaluacion
        $conndt = pg_query($conexion, $querydt);

        if (!$conndt) {
          die(pg_error($conexion));
        }

        if (pg_num_rows($conndt) > 0) {
          while ($rowDatadt = pg_fetch_array($conndt)) {
            $titulo = $rowDatadt["titulo"];
            $pal = $rowDatadt["palabras_clave"];
            $cat = $rowDatadt["categoria"];
          }
        }

        $querydt2 = ("Select * from talleres where id_trabajos='$idt'");
        //obtiene el id de su evaluacion
        $conndt2 = pg_query($conexion, $querydt2);

        if (!$conndt2) {
          die(pg_error($conexion));
        }

        if (pg_num_rows($conndt2) > 0) {
          while ($rowDatadt2 = pg_fetch_array($conndt2)) {
            $resu = $rowDatadt2["resumen_ponencia"];
          }
        }
        //trabajos_coautores
        $queryc = ("Select * from trabajos_coautores where trabajos_id='$idt'");
        //obtiene el id de su evaluacion
        $connc = pg_query($conexion, $queryc);
        $coautor1id = 0;
        $coautor2id = 0;
        $coautor3id = 0;
        $coautor4id = 0;
        $ccoautor = 0;
        if (!$connc) {
          die(pg_error($conexion));
        }
        if (pg_num_rows($connc) > 1) {
          while ($rowDatac = pg_fetch_array($connc)) { //tiene 2 coautores
            $ccoautor++;
            if ($ccoautor == 1) {
              $coautor1id = $rowDatac["coautor_id"];
            }

            if ($ccoautor == 2) {
              $coautor2id = $rowDatac["coautor_id"];
            }
          }
        } elseif (pg_num_rows($connc) > 0) {
          while ($rowDatac = pg_fetch_array($connc)) { //tiene 1 coautor
            $ccoautor++;
            if ($ccoautor == 1) {
              $coautor1id = $rowDatac["coautor_id"];
            }
          }
        }
        $coautor2 = '';
        $coautor1 = '';

        if ($coautor2id == 0) {
          $coautor2 = '';
        } else {
          $queryco2 = ("Select * from usuario where id_usuario='$coautor2id'");
          //obtiene el id de su evaluacion
          $connco2 = pg_query($conexion, $queryco2);

          if (!$connco2) {
            die(pg_error($conexion));
          }

          if (pg_num_rows($connco2) > 0) {
            while ($rowDatco2 = pg_fetch_array($connco2)) {
              $coautor2 = $rowDatco2["usuario"];
            }
          }
        }

        if ($coautor1id == 0) {
          $coautor1 = 'N/A';
        } else {
          $queryco1 = ("Select * from usuario where id_usuario='$coautor1id'");
          //obtiene el id de su evaluacion
          $connco1 = pg_query($conexion, $queryco1);

          if (!$connco1) {
            die(pg_error($conexion));
          }

          if (pg_num_rows($connco1) > 0) {
            while ($rowDatco1 = pg_fetch_array($connco1)) {
              $coautor1 = $rowDatco1["usuario"];
            }
          }
        }


        ?>
        <p class="Tema">Modificar de Resumen para Taller</p>
        <form method="POST" enctype="multipart/form-data">
          <p class="temaSec">Antes de llenar cada espacio, favor de leer primero las indicaciones detenidamente. </p> <br>
          <p class="temaCentral">Datos</p>

          <div class="datosP">
            <!-- <p class="temaSec">Ingrese correctamente los datos de su cartel.</p> -->

            <div class="D1">
              <!--******DATOS SOBRE LA PONENCIA*******-->

              <table>

                <p class="temaSec">1.- El resumen debe de incluir el título del trabajo a lo más 15 palabras.</p>
                <center>
                  <tr>
                    <td class="C1">

                      <label for="Title">Título:</label>
                    </td>
                    <td class="C2">
                      <textarea class="textarea2" type="text" name="titulo" placeholder="INGRESA TITULO DE MÁXIMO 15 PALABRAS" style="text-transform:uppercase;" value="<?php echo $titulo ?>"><?php echo $titulo ?></textarea>

                    </td>
                  </tr>
                </center>
              </table>


              <table>
                <br>
                <p class="temaSec">2.- El resumen del trabajo debe de contener no más de 300 palabras.</p>
                <center>
                  <tr>
                    <td class="C1">
                      <br> <label for="Resumen">Resumen:</label>
                    </td>
                    <td class="C2">

                      <textarea class="textarea3" type="text" name="resumen" placeholder="INGRESA RESUMEN DE MÁXIMO 300 PALABRAS" style="text-transform:uppercase;" value="<?php echo $resu ?>"><?php echo $resu ?></textarea>
                      <!--<textarea  type="text" name="resumen" placeholder="Ingresa resumen"  required> </textarea>-->

                    </td>
                  </tr>
                </center>
              </table>



              <table>
                <br>
                <p class="temaSec">3.- Agregar palabras clave.</p>
                <center>
                  <tr>
                    <td class="C1">
                      <label for="Palabras">Palabras clave:</label>
                    </td>
                    <td class="C2">
                      <textarea class="textarea2" type="text" name="palabrasclave" placeholder="INGRESA PALABRAS CLAVE DEL RESUMEN" style="text-transform:uppercase;" value="<?php echo $pal ?>"><?php echo $pal ?></textarea>

                    </td>
                  </tr>
                </center>
              </table>


              <table>
                <br>
                <p class="temaSec">4.- Seleccione una categoria.</p>
                <center>
                  <tr>
                    <td class="C1">
                      <label for="Palabras">Categoría:</label>


                    </td>
                    <td class="C2">
                      <!--<input class="inputP" style="text-transform:uppercase;" type="text" name="categoria" placeholder="Ingresa categoria" required> -->

                      <select border-radius: 9px; input class="inputPCategorias" name="categorias">
                        <option><?php echo $cat ?></option>
                        <option>ENSEÑANZA DE LAS MATEMÁTICAS CON LAS TIC
                          EN LA NUEVA NORMALIDAD (EN)</option>
                        <option>EXPERENCIA E INNOVACIÓN DIDÁCTICA (ID)</option>
                        <option>INVESTIGACIÓN DEL PROCESO DE LA ENSEÑANZA
                          DE LAS MATEMÁTICAS (IP)</option>
                        <option>EVALUACIÓN DEL APRENDIZAJE EN LA ENSEÑANZADA
                          DE LAS MATEMÁTICAS (EA)</option>
                        <option>APLICACIÓN Y/O VINCULACIÓN DE LAS MATEMÁTICAS CON
                          OTRAS DISCIPLINAS (AP)</option>

                      </select>
                    </td>
                  </tr>
                </center>

              </table>

            </div>

          </div>


          <p class="temaCentral">Autor</p>

          <div class="datosP">

            <!-- <p class="temaSec">Ingrese correctamente los datos de su cartel.</p> -->

            <div class="D1">
              <!--******DATOS SOBRE LOS COAUTORES*******-->

              <table>

                <center>
                  <tr>
                    <td class="C1">
                      <label for="Correo">Correo:</label>
                    </td>
                    <td class="C2">
                      <textarea class="textarea2" type="text" readonly="readonly" name="Correo1" placeholder=" <?= $varEmail ?>" required><?= $varEmail ?></textarea>

                    </td>
                  </tr>
                </center>

              </table>



            </div>



            <p class="temaCentral">Coautores</p>

            <div class="datosP">

              <div class="D1">
                <!--******DATOS SOBRE LOS COAUTORES*******-->

                <table>
                  <br>
                  <p class="temaSec">5.- Ingrese un correo únicamente por recuadro de texto. Importante: el correo debe estar registrado en el sistema para que el registro de este resumen sea éxitoso.</p>

                  <center>
                    <tr>
                      <td class="C1">
                        <label for="Correo">Correo 1:</label>
                      </td>
                      <td class="C2">
                        <textarea class="textarea2" type="text" name="Correo2" placeholder="INGRESA CORREO DEL COAUTOR 1 (OPCIONAL)" value="<?php echo $coautor1 ?>"><?php echo $coautor1 ?></textarea>

                      </td>
                    </tr>
                  </center>

                  <center>
                    <tr>
                      <td class="C1">
                        <label for="Correo">Correo 2:</label>
                      </td>
                      <td class="C2">
                        <textarea class="textarea2" type="text" name="Correo3" placeholder="INGRESA CORREO DEL COAUTOR 2 (OPCIONAL)" value="<?php echo $coautor2 ?>"><?php echo $coautor2 ?></textarea>
                      </td>
                    </tr>
                  </center>





                </table>

              </div>

            </div>





            <p class="temaCentral">Referencias</p>

            <div class="datosP">

              <!--******REFERENCIAS*******-->
              <div class="D1">
                <!--******BIBLIOGRAFIA*******-->

                <table>
                  <br>
                  <p class="temaSec">6.- Ingrese una bibliografía únicamente por recuadro de texto, a lo más 200 palabras. Importante: el correo debe estar registrado en el sistema para que el registro de este resumen sea éxitoso.</p>
                  <center>
                    <tr>
                      <td class="C1">
                        <label for="Biblio">Bibliografía:</label>
                      </td>
                      <td class="C2">
                        <?php

                        $queryref1 = ("Select * from trabajos_referencias where trabajos_id='$idt'");
                        //obtiene el id de su evaluacion
                        $connref1 = pg_query($conexion, $queryref1);

                        if (!$connref1) {
                          die(pg_error($conexion));
                        }

                        if (pg_num_rows($connref1) > 0) {
                          while ($rowDatref1 = pg_fetch_array($connref1)) {

                            $idrefe = $rowDatref1["referencias_id"];

                            $queryref2 = ("Select * from  referencias where id_referencia='$idrefe'");

                            $connref2 = pg_query($conexion, $queryref2);

                            if (!$connref2) {
                              die(pg_error($conexion));
                            }

                            if (pg_num_rows($connref2) > 0) {
                              while ($rowDatref2 = pg_fetch_array($connref2)) {

                                $refe2 = $rowDatref2["referencia"];
                              }
                            }
                          }
                        }

                        ?>
                        <textarea class="textarea2" type="text" name="bibliografia" placeholder="INGRESA LAS BIBLIOGRAFIAS DEL RESUMEN" required><?php echo $refe2 ?></textarea>
                      </td>
                    </tr>

                  </center>

                </table>

              </div>


              <div id="dinamic"></div>




              <br> <button name="uploadBtn" class="enviarBtn" value="Enviar">Modificar Taller</button>



              <br> <br> <br> <br><button name="uploadBtn2" class="enviarBtn" value="Borrar" onclick="return confirm('¿Estás Seguro que deseas Eliminar este Taller?');">Eliminar Taller</button>

            </div>
          </div>
        </form>

        <br><br> <a href="HistorialTrabajos.php"> <button class="enviarBtn">Regresar</button> </a>

        <?php
        $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
        $idt = $_GET['id'];
        $redir = 0;

        if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Enviar') {

          if (isset($_POST["titulo"]) && isset($_POST["resumen"]) && isset($_POST["palabrasclave"]) && isset($_POST["categorias"]) && isset($_POST["Correo1"])  && isset($_POST["bibliografia"])  && isset($_POST["Correo2"]) && isset($_POST["Correo3"])) {
            $titulo1 = $_POST["titulo"];
            $titulo = strtoupper($titulo1);
            $resumen1 = $_POST["resumen"];
            $resumen = strtoupper($resumen1);
            $palabrasclave1 = $_POST["palabrasclave"];
            $palabrasclave = strtoupper($palabrasclave1);
            $categoria = $_POST["categorias"];
            $Correo1 = $_POST["Correo1"];
            $Correo2 = $_POST["Correo2"];
            $Correo3 = $_POST["Correo3"];
            $idcoautor4 = "";
            $bibliografia = $_POST["bibliografia"];
            $queryref1 = ("Select * from trabajos_referencias where trabajos_id='$idt'");
            //obtiene el id de su evaluacion
            $connref1 = pg_query($conexion, $queryref1);

            if (!$connref1) {
              die(pg_error($conexion));
            }

            if (pg_num_rows($connref1) > 0) {
              while ($rowDatref1 = pg_fetch_array($connref1)) {

                $idrefe = $rowDatref1["referencias_id"];

                $queryref2 = ("Select * from  referencias where id_referencia='$idrefe'");

                $connref2 = pg_query($conexion, $queryref2);

                if (!$connref2) {
                  die(pg_error($conexion));
                }

                if (pg_num_rows($connref2) > 0) {
                  while ($rowDatref2 = pg_fetch_array($connref2)) {

                    $refe2 = $rowDatref2["referencia"];
                  }
                }
              }
            }



            if ($Correo2 != "") {
              $Correo2 = $_POST["Correo2"];
              $query = ("Select id_usuario from usuario where usuario='$Correo2' ");
              $conn = pg_query($conexion, $query);
              $cantidad = pg_num_rows($conn);
              if ($cantidad > 0) {
              }
              if (!$conn) {
                die(pg_error($conexion));
              }

              if (pg_num_rows($conn) > 0) {
                while ($rowData = pg_fetch_array($conn)) {
                  $idcoautor2 = intval($rowData["id_usuario"]);
                }
              }

              if ($Correo3 != "") {
                $Correo3 = $_POST["Correo3"];
                $query2 = ("Select id_usuario from usuario where usuario='$Correo3' ");
                $conn2 = pg_query($conexion, $query2);
                $cantidad2 = pg_num_rows($conn2);
                if ($cantidad2 > 0) {
                }
                if (!$conn2) {
                  die(pg_error($conexion));
                }

                if (pg_num_rows($conn2) > 0) {
                  while ($rowData = pg_fetch_array($conn2)) {
                    $idcoautor3 = intval($rowData["id_usuario"]);
                  }
                }




                $query5 = ("UPDATE trabajos set titulo='$titulo', categoria='$categoria', palabras_clave='$palabrasclave', fecha_trabajos='$fechaActual', hora_trabajos='$horaActual' where id_trabajo='$idt'");
                $consulta1 = pg_query($conexion, $query5);

                //TABLAS CON LAS QUE SE RELACIONA LA TABLA TRABAJOS
                // 1. TABLA PONENCIA 
                //INSERT PARA INSERTAR EL ID DE LA TABLA TRABAJOS EN LA TABLA PONENCIA
                //INSERT PARA INSERTAR TAMBIEN EL RESUMEN, EXTENSO Y VIDEO                      

                $query7 = ("UPDATE talleres SET   resumen_ponencia='$resumen'  WHERE id_trabajos='$idt'");
                $consulta2 = pg_query($conexion, $query7);


                //coautor 2
                $query41 = ("Select * from coautor where id_coautor='$idcoautor2' ");
                $conn41 = pg_query($conexion, $query41);
                if (!$conn41) {
                  die(pg_error($conexion));
                }

                if (pg_num_rows($conn41) > 0) {
                  while ($rowData = pg_fetch_array($conn41)) {
                    $id_coa2 = intval($rowData["id_coautor"]);
                  }
                } else {
                  $query51 = ("INSERT INTO coautor (id_coautor,fecha)
                                                                      VALUES('$idcoautor2','$fechaActual')");
                  $consulta51 = pg_query($conexion, $query51);
                }
                //coautor 3
                $query42 = ("Select * from coautor where id_coautor='$idcoautor3' ");
                $conn42 = pg_query($conexion, $query42);
                $cantidad42 = pg_num_rows($conn42);

                if (!$conn42) {
                  die(pg_error($conexion));
                }

                if (pg_num_rows($conn42) > 0) {
                  while ($rowData = pg_fetch_array($conn42)) {
                    $id_coa3 = intval($rowData["id_coautor"]);
                  }
                } else {
                  $query52 = ("INSERT INTO coautor (id_coautor,fecha)
                                                                      VALUES('$idcoautor3','$fechaActual')");
                  $consulta52 = pg_query($conexion, $query52);
                }

                //si modifico el coautor 1             
                if ($coautor1id == $idcoautor2) {
                } else {
                  if ($coautor1id == 0) {

                    $query91 = ("INSERT INTO trabajos_coautores (trabajos_id, coautor_id)
                                            VALUES('$idt','$idcoautor2')");
                    $consulta41 = pg_query($conexion, $query91);
                  } else {
                    $query9 = ("UPDATE trabajos_coautores set coautor_id='$idcoautor2' WHERE trabajos_id='$idt' and coautor_id='$coautor1id' ");
                    $consulta4 = pg_query($conexion, $query9);
                  }
                }


                //si modifico el coautor 2 
                if ($coautor2id == $idcoautor3) {
                } else {
                  if ($coautor2id == 0) {

                    $query92 = ("INSERT INTO trabajos_coautores (trabajos_id, coautor_id)
                                            VALUES('$idt','$idcoautor3')");
                    $consulta42 = pg_query($conexion, $query92);
                  } else {
                    $query10 = ("UPDATE trabajos_coautores set coautor_id='$idcoautor3' WHERE trabajos_id='$idt' and coautor_id='$coautor2id' ");
                    $consulta5 = pg_query($conexion, $query10);
                  }
                }


                //SI CAMBIO LA REFERENCIA
                if ($refe2 == $bibliografia) {
                } else {
                  $queryR = ("UPDATE referencias SET referencia='$bibliografia' WHERE id_referencia='$idrefe'");
                  $consulta = pg_query($conexion, $queryR);
                }


                //Estado de la evaluacion
                $queryE1 = ("UPDATE evaluacion_trabajos SET estado='POR EVALUAR' WHERE trabajos_id='$idt'");
                $consultaE1 = pg_query($conexion, $queryE1);

                if ($redir == 0) {
                  //Importar función
                  require './enviarEmail.php';

                  //Envio de correo

                  $titul = $titulo;
                  $email = $varEmail;
                  $subject = "Confirmacion de modificación de resumen";

                  //Cuerpo del correo 
                  $body = "Congreso Internacional sobre la Enseñanza y Aplicación de las Matemáticas 
                  Facultad de Estudios Superiores Cuautitlán. 
                  
                  La modificación del resumen para el taller {$titul}  ha sido corregido con éxito.";

                  sendEmail($email, $subject, $body);
                  echo "<script>alert('Modificación exitosa.');window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/menu.php');</script>";
                } else {
                  $redir++;
                  echo "<script>alert('El correo del Coautor 2 no está registrado en el sistema, inténtelo de nuevo.');</script>";
                }
              } else { //no hay coautor 2 o dejo el campo vacio (posiblemente no habia correo o elimino el correo anterior de ese coautor)

                $query5 = ("UPDATE trabajos set titulo='$titulo', categoria='$categoria', palabras_clave='$palabrasclave', fecha_trabajos='$fechaActual', hora_trabajos='$horaActual' where id_trabajo='$idt'");
                $consulta1 = pg_query($conexion, $query5);

                //TABLAS CON LAS QUE SE RELACIONA LA TABLA TRABAJOS
                // 1. TABLA PONENCIA 
                //INSERT PARA INSERTAR EL ID DE LA TABLA TRABAJOS EN LA TABLA PONENCIA
                //INSERT PARA INSERTAR TAMBIEN EL RESUMEN, EXTENSO Y VIDEO                      

                $query7 = ("UPDATE talleres SET   resumen_ponencia='$resumen'  WHERE id_trabajos='$idt'");
                $consulta2 = pg_query($conexion, $query7);


                //coautor 2
                $query41 = ("Select * from coautor where id_coautor='$idcoautor2' ");
                $conn41 = pg_query($conexion, $query41);
                $cantidad41 = pg_num_rows($conn41);

                if (!$conn41) {
                  die(pg_error($conexion));
                }

                if (pg_num_rows($conn41) > 0) {
                  while ($rowData = pg_fetch_array($conn41)) {
                    $id_coa2 = intval($rowData["id_coautor"]);
                  }
                } else {
                  $query51 = ("INSERT INTO coautor (id_coautor,fecha)
                                                                      VALUES('$idcoautor2','$fechaActual')");
                  $consulta51 = pg_query($conexion, $query51);
                }



                //si modifico el coautor 1             
                if ($coautor1id == $idcoautor2) {
                } else {


                  if ($coautor1id == 0) {
                    $query91 = ("INSERT INTO trabajos_coautores (trabajos_id, coautor_id)
                                            VALUES('$idt','$idcoautor2')");
                    $consulta41 = pg_query($conexion, $query91);
                  } else {
                    $query9 = ("UPDATE trabajos_coautores set coautor_id='$idcoautor2' WHERE trabajos_id='$idt' and coautor_id='$coautor1id' ");
                    $consulta4 = pg_query($conexion, $query9);
                  }
                }


                //si modifico el coautor 2 
                if ($coautor2id == 0) {
                } else {

                  $query92 = ("DELETE FROM trabajos_coautores where trabajos_id='$idt' and  coautor_id='$coautor2id'");
                  $consulta42 = pg_query($conexion, $query92);
                }


                //SI CAMBIO LA REFERENCIA
                if ($refe2 == $bibliografia) {
                } else {
                  $queryR = ("UPDATE referencias SET referencia='$bibliografia' WHERE id_referencia='$idrefe'");
                  $consulta = pg_query($conexion, $queryR);
                }

                //Estado de la evaluacion
                $queryE1 = ("UPDATE evaluacion_trabajos SET estado='POR EVALUAR' WHERE trabajos_id='$idt'");
                $consultaE1 = pg_query($conexion, $queryE1);

                if ($redir == 0) {
                  //Importar función
                  require './enviarEmail.php';

                  //Envio de correo

                  $titul = $titulo;
                  $email = $varEmail;
                  $subject = "Confirmacion de modificación de resumen";

                  //Cuerpo del correo 
                  $body = "Congreso Internacional sobre la Enseñanza y Aplicación de las Matemáticas 
                  Facultad de Estudios Superiores Cuautitlán. 
                  
                  La modificación del resumen para el taller {$titul}  ha sido corregido con éxito.";

                  sendEmail($email, $subject, $body);
                  echo "<script>alert('Modificación exitosa.');window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/menu.php');</script>";
                } else {
                  $redir++;
                  echo "<script>alert('El correo del Coautor 1 no está registrado en el sistema, inténtelo de nuevo.');</script>";
                }
              }

              //existe correo 2
            } else { //no existe correo 2 


              //ACTUALIZA DATOS DEL TRABAJO

              $query5 = ("UPDATE trabajos set titulo='$titulo', categoria='$categoria', palabras_clave='$palabrasclave', fecha_trabajos='$fechaActual', hora_trabajos='$horaActual' where id_trabajo='$idt'");
              $consulta1 = pg_query($conexion, $query5);



              //ACTUALIZA LA PONENCIA                           
              $query7 = ("UPDATE talleres SET resumen_ponencia='$resumen'  WHERE id_trabajos='$idt'");
              $consulta2 = pg_query($conexion, $query7);

              if ($coautor1id == 0) {
              } else {

                $query92 = ("DELETE FROM trabajos_coautores where trabajos_id='$idt' and  coautor_id='$coautor1id'");
                $consulta42 = pg_query($conexion, $query92);
              }



              //SI CAMBIO LA REFERENCIA
              if ($refe2 == $bibliografia) {
              } else {
                $queryR = ("UPDATE referencias SET referencia='$bibliografia' WHERE id_referencia='$idrefe'");
                $consulta = pg_query($conexion, $queryR);
              }

              //Estado de la evaluacion
              $queryE1 = ("UPDATE evaluacion_trabajos SET estado='POR EVALUAR' WHERE trabajos_id='$idt'");
              $consultaE1 = pg_query($conexion, $queryE1);

              if ($redir == 0) {
                //Importar función
                require './enviarEmail.php';

                //Envio de correo

                $titul = $titulo;
                $email = $varEmail;
                $subject = "Confirmacion de modificación de resumen";

                //Cuerpo del correo 
                $body = "Congreso Internacional sobre la Enseñanza y Aplicación de las Matemáticas 
                  Facultad de Estudios Superiores Cuautitlán. 
                  
                 La modificación del resumen para el taller {$titul}  ha sido corregido con éxito.";

                sendEmail($email, $subject, $body);
                echo "<script>alert('Modificación exitosa.');window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/menu.php');</script>";
              }
            } //cierra si no se cambio ningun coautor



            //Corchetes que cierran el if del boton y del post
          }
        }
        ?>


        <?php

        if (isset($_POST['uploadBtn2']) && $_POST['uploadBtn2'] == 'Borrar') {

          $idt = $_GET['id'];

          $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");

          $rt = ("Select * from trabajos_referencias where trabajos_id='$idt' ");
          //obtiene el id de la referencia
          $rt1 = pg_query($conexion, $rt);
          if (!$rt1) {
            die(pg_error($conexion));
          }

          if (pg_num_rows($rt1) > 0) {
            while ($rowData = pg_fetch_array($rt1)) {
              $idref = $rowData["referencias_id"];
            }
          }
          $elim1 = ("delete from trabajos_referencias where referencias_id='$idref' ");
          $e1 = pg_query($conexion, $elim1);

          $elim2 = ("delete from referencias where id_referencia='$idref' ");
          $e2 = pg_query($conexion, $elim2);

          $elim4 = ("delete from talleres where id_trabajos='$idt' ");
          $e4 = pg_query($conexion, $elim4);

          $elim5 = ("delete from trabajos_coautores where trabajos_id='$idt' ");
          $e5 = pg_query($conexion, $elim5);

          $elim6 = ("delete from trabajos_congreso where trabajos_id='$idt' ");
          $e6 = pg_query($conexion, $elim6);

          $elim7 = ("delete from ponente_trabajos where trabajos_id='$idt' ");
          $e7 = pg_query($conexion, $elim7);

          $elim3 = ("delete from trabajos where id_trabajo='$idt' ");
          $e3 = pg_query($conexion, $elim3);

          echo "<script>alert('Registro eliminado exitosamente.');window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/menu.php');</script>"; //Importar función
        }

        ?>




        <div class="alert alert-info" style="display: none;"></div>
        <div>




        </div>

      </div>
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
                document.write(f.getFullYear());
              </script> Hecho en México, todos los derechos reservados. </p>
          </center>
        </footer>
      </div>
      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </footer>
  </div>


</body>

<script>
  const phoneInputField = document.querySelector("#phone");
  const phoneInput = window.intlTelInput(phoneInputField, {
    preferredCountries: ["mx"],
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    autoHideDialCode: false,
    nationalMode: false
  });
</script>

</html>