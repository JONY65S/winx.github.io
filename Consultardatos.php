<?php
session_start();
error_reporting(1);
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
        <title>Consultar Datos</title>
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


.nav-bar {
      display: none;
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

@media only screen and (max-width:768px){

    .nav-bar{
    position: fixed;
    right: 0;
    top: 14%;
    font-size:1.5rem;
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

    .menuRB{
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

    .icond:first-child{
        border-radius: 1rem 0 0 0;
    }

    .icond:last-child{
        border-radius: 0 0 0 1rem;
    }



}



  #btn-menu3{
      display: none;
    }
    .menu3 ul{
      margin: 0;
      list-style: none;
      padding: 0;
      display: flex;
    }
    
    .menu3 li{
      text-align: center;
      flex-grow: 1;
    }
    
    .menu3 li:hover {
        background:  rgb(135, 110, 19); 
    }
    
    .menu3 li a{
      display:  block;
      padding: 15px 20px;
      color: #fff;
      text-decoration: none;
    }

 @media (max-width: 768px){
      header label{
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
      .menu3 li{
        border-top: 1px solid transparent;
      }
      #btn-menu3:checked ~.menu3 {
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
.contenedorregistroI{
    border-radius: 3em;
  border: 0.3em solid #B18904;
    margin:2em;
    flex-direction: row;
}

.contenedorregistroI2{
    border-radius: 3em;
  border: 0.3em solid #B18904;
    margin:2em;
    flex-direction: row;
    
}
     

/*Estilos de los elementos del contenedor de registro*
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
.Tema2 {
  margin: -10px;
  padding: 0 0 50px;
  text-align: center;
  font-size: 20px;
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

.D11 {
  margin-bottom: 6%;
  margin-top: 3%;
  display: none;
}
.D1 {
  margin-bottom: 6%;
  margin-top: 3%;
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

        .temaCentral{
          font-size: 13px;
          
        }
        .contenedorregistroI{
        margin:1em;

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

        .temaCentral{
          font-size: 13px;
          
        }

        .contenedorregistroI{
        margin:1em;
}
      }
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

.table-responsive{

        margin:1em;
        height: 90%;

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
     
      
         <div id="wrapper" > <center> <img src="img/banpru.jpg" class="baner"/> </center>  </div>
         
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
    <p class="Tema">Consultar datos</p>
<form action="#" method="POST" >
<div class="D1">
                            <table>
                                <tr>
            <td class="C2">
          <select class="inputNombreC" name ="tabla1">
                      
                  
                <option >SELECCIONE UNA TABLA</option>
                <option value="USUARIOS">USUARIOS</option>
               <option value="CONGRESOS">CONGRESOS</option>

               <option value="RESUMEN DE TRABAJOS REGISTRADOS EN EL CONGRESO">RESUMEN DE TRABAJOS REGISTRADOS EN EL CONGRESO</option>

               <option value="PONENCIAS SIN EVALUADOR ASIGNADO">PONENCIAS SIN EVALUADOR ASIGNADO</option>
               <option value="PONENCIAS POR EVALUAR">PONENCIAS POR EVALUAR</option>
               <option value="PONENCIAS POR CORREGIR">PONENCIAS POR CORREGIR</option>
               <option value="PONENCIAS ACEPTADAS">PONENCIAS ACEPTADAS</option>

               <option value="CARTELES SIN EVALUADOR ASIGNADO">CARTELES SIN EVALUADOR ASIGNADO</option>
               <option value="CARTELES POR EVALUAR">CARTELES POR EVALUAR</option>
               <option value="CARTELES POR CORREGIR">CARTELES POR CORREGIR</option>
               <option value="CARTELES ACEPTADOS">CARTELES ACEPTADOS</option>
               
               <option value="TALLERES SIN EVALUADOR ASIGNADO">TALLERES SIN EVALUADOR ASIGNADO</option>
               <option value="TALLERES POR EVALUAR">TALLERES POR EVALUAR</option>
               <option value="TALLERES POR CORREGIR">TALLERES POR CORREGIR</option>
               <option value="TALLERES ACEPTADOS">TALLERES ACEPTADOS</option>

             <!--  <option value="EXTENSOS APROBADOS">EXTENSOS APROBADOS</option>
               <option value="EXTENSOS POR EVALUAR">EXTENSOS POR EVALUAR</option>
              <option value="EXTENSOS POR CORREGIR">EXTENSOS POR CORREGIR</option>-->

                </select>
                 
              <button name="uploadBtn2" class="enviarBtn" value="Buscar">Buscar</button> 
                </td>                                                 
              </tr> 
 </table> </div> </form>
    
    <?php if (isset($_POST['uploadBtn2']) && $_POST['uploadBtn2'] == 'Buscar') {

          
            if (isset($_POST["tabla1"])) {
             $tablaa = $_POST["tabla1"]; 
             
             //Opcion Usuarios
             if($tablaa =='USUARIOS') { ?>

      <div class="contenedorregistroI2"  > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <p class="Tema2">USUARIOS</p>
       <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
               <table class="inputNombreC" > 
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Correo</td>
              <td class="inputNombreC2">Nombre</td>
              <td class="inputNombreC2">País</td>
              <td class="inputNombreC2">Teléfono</td>
            </tr>

          
               <?php 
           $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
            $query1 = ("Select * from usuario");
                  $conn1 = pg_query($conexion, $query1);

                  if (!$conn1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conn1) > 0) {
                    while ($rowData = pg_fetch_array($conn1)) {
                 
                 $correoo = $rowData["usuario"];   ?>   
          <tr class="inputNombreC2">  <td class="inputNombreC2"><?php echo $rowData["usuario"] ?></td>  
           <td class="inputNombreC2" ><?php echo $rowData["nombre_usuario"] ?></td>  
           <td class="inputNombreC2"><?php echo $rowData["pais_usuario"] ?></td>          
           
          <?php $query2 = ("Select * from contacto where email= '$correoo' ");
                  $conn2 = pg_query($conexion, $query2);

                  if (!$conn2) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conn2) > 0) {
                    while ($rowData2 = pg_fetch_array($conn2)) {
                     ?>   
          <td class="inputNombreC2"><?php echo $rowData2["telefono"] ?></td>  
          <!-- <td> <button >Editar</button> </td> -->

                 </tr>   <?php } }  ?> <?php } }  ?>
       
</table></center></table>
      </div>
      </div></div>
  </div><?php

             } 
             //Opcion CONGRESOS
              else if($tablaa =='CONGRESOS') {
                ?>

      <div class="contenedorregistroI2"  > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <p class="Tema2">CONGRESOS</p>

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
                 
                // $correoo = $rowData["usuario"];  
                 ?>       
           <tr class="inputNombreC2">
           <td class="inputNombreC2"><?php echo $rowData3["id_congreso"] ?></td>
              <td class="inputNombreC2"><?php echo $rowData3["email"] ?></td>
              <!-- nombre congreso  -->
              <td class="inputNombreC2"><?php echo $rowData3["nombre_congreso"] ?></td>
              <!-- numero congreso -->
              <td class="inputNombreC2"><?php echo $rowData3["numero_congreso"] ?></td>
              <!-- identificador numero registro -->
              <td class="inputNombreC2"><?php echo $rowData3["identificador_numero_registro"] ?></td>

              <!-- congreso  -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_inicio_congreso"] ?></td>
              <td class="inputNombreC2"><?php echo $rowData3["fecha_fin_congreso"] ?></td>

              <!--Envio de invitaciones convocatoria  -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_inicio_envio_invitaciones_convocatoria"] ?></td>
              <td class="inputNombreC2"><?php echo $rowData3["fecha_fin_envio_invitaciones_convocatoria"] ?></td>

              <!--recepcion resumenes  -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_inicio_recepcion_resumenes"] ?></td>
              <td class="inputNombreC2"><?php echo $rowData3["fecha_fin_recepcion_resumenes"] ?></td>

              <!--evaluacion resumenes  -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_inicio_evaluacion_resumenes"] ?></td>
              <td class="inputNombreC2"><?php echo $rowData3["fecha_fin_evaluacion_resumenes"] ?></td>

              <!--resultados de evaluacion resumenes  -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_inicio_resultado_evaluacion_resumenes"] ?></td>
              <td class="inputNombreC2"><?php echo $rowData3["fecha_fin_resultado_evaluacion_resumenes"] ?></td>

              <!-- recepcion correccion resumenes -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_inicio_recepcion_correcion_resumenes"] ?></td>
              <td class="inputNombreC2"><?php echo $rowData3["fecha_fin_recepcion_correcion_resumenes"] ?></td>

             <!-- recepcion extensos  -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_inicio_recepcion_extensos"] ?></td>
              <td class="inputNombreC2"><?php echo $rowData3["fecha_fin_recepcion_extensos"] ?></td>

               <!-- notifiacion observaciones extensos  -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_inicio_notificacion_observaciones_extensos"] ?></td>
              <td class="inputNombreC2"><?php echo $rowData3["fecha_fin_notificacion_observaciones_extensos"] ?></td>

               <!-- recepcion pagos  -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_inicio_recepcion_pagos"] ?></td>
              <td class="inputNombreC2"><?php echo $rowData3["fceha_fin_recepcion_pagos"] ?></td>

              <!--  recepcion extensos finales -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_inicio_recepcion_extensos_finales"] ?></td>
              <td class="inputNombreC2"><?php echo $rowData3["fecha_fin_recepcion_extensos_finales"] ?></td>

              <!--  recepcion videos ponencias aceptadas -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_inicio_recepcion_videos_ponencias_aceptadas"] ?></td>
              <td class="inputNombreC2"><?php echo $rowData3["fecha_fin_recepcion_videos_ponencias_aceptadas"] ?></td>

              <!-- publicacion programa evento  -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_publicacion_programa_evento"] ?></td>

              <!--  imparticion talleres -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_inicio_imparticion_talleres"] ?></td>
              <td class="inputNombreC2"><?php echo $rowData3["fecha_fin_imparticion_talleres"] ?></td>

              <!--  envio constancias -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_inicio_envio_contancias"] ?></td>
              <td class="inputNombreC2"><?php echo $rowData3["fecha_fin_envio_contancias"] ?></td>

              <!--  publicacion memorias -->
              <td class="inputNombreC2"><?php echo $rowData3["fecha_publicacion_memorias"] ?></td>

              <!--  numero de trabajos -->
              <td class="inputNombreC2"><center><?php echo $rowData3["num_total_trabajos"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["num_ponencias"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["num_carteles"] ?></center></td>
              <td class="inputNombreC2"><center><?php echo $rowData3["num_talleres"] ?></center></td>

            </tr>   <?php } }  ?>
       
</table> </center></table>
      </div>
      </div></div>
  </div><?php

              }
             //Opcion TRABAJOS
              else if($tablaa =='PONENCIAS SIN EVALUADOR ASIGNADO') {

                ?>

              <div class="contenedorregistroI2" id='usua1' > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
      
      <table class="inputNombreC" > 
         <h1 class="Tema">Ponencia sin evaluador</h1>
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Titulo</td>
              <td class="inputNombreC3">Correo del Autor</td>
              <td class="inputNombreC3">Nombre(s) del Autor</td>
              <td class="inputNombreC3">Apellido(s) del Autor</td>
              <td class="inputNombreC3">Categoria del trabajo</td>
              <td class="inputNombreC3">Palabras clave</td>
              <td class="inputNombreC3">Fecha</td>
              <td class="inputNombreC3">Hora</td>
            </tr>

               <?php 
                    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                    //hace un select de todos los trabajos de ponencia
                     $queryTT1 = ("Select * from ponencia");
                  $connTT1 = pg_query($conexion, $queryTT1);

                  if (!$connTT1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connTT1) > 0) {
                    while ($rowDataTT1 = pg_fetch_array($connTT1)) {
               
                  //obtenemos id de cada trabajo
                          $Idtrabajo = $rowDataTT1["id_trabajos"];  
                                   $queryT1 = ("Select * from trabajos where id_trabajo = '$Idtrabajo'");
                                   $connT1 = pg_query($conexion, $queryT1);

                                     if (!$connT1) {
                                     die(pg_error($conexion));
                                          }

                                        if (pg_num_rows($connT1) > 0) {
                                       while ($rowDataT1 = pg_fetch_array($connT1)) {
               
                  //obtenemos id de cada trabajo
                                
                          

                      //Verificamos si ese trabajo se encuentra en evaluación
                      //de ser el caso contrario, se mostrará los datos en la tabla de tal trabajo para que 
                      //se le asigne un evaluador
                  $queryT2 = ("Select * from evaluacion_trabajos where trabajos_id='$Idtrabajo'");
                  $connT2 = pg_query($conexion, $queryT2);

                  if (!$connT2) {
                    die(pg_error($conexion));
                  }
                  //evalua si el trabajo se encuentra en la tabla evaluación trabajos
                  if (pg_num_rows($connT2) > 0) {
                    }else {  //Si el trabajo no se encuentra en la tabla evaluación trabajos
                  //Muestra el titulo del trabajo
                   ?>

                  <tr >  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["titulo"] ?> </textarea></td> 
                <?php
                //busca el id del autor en la tabla ponente_trabajos
          $queryT3 = ("Select * from ponente_trabajos where trabajos_id = '$Idtrabajo'");
                  $connT3 = pg_query($conexion, $queryT3);

                  if (!$connT3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connT3) > 0) {
                    while ($rowDataT3 = pg_fetch_array($connT3)) {
                      //Guarda el id del autor en la variable $Idusuario
                          $Idusuario = $rowDataT3["ponente_id"];}
                                  //Select de usuarios para obtener los datos del autor mediante el id obtenido recien
                                 $queryT4 = ("Select * from usuario where id_usuario = '$Idusuario'");
                                $connT4 = pg_query($conexion, $queryT4);

                                         if (!$connT4) {
                                       die(pg_error($conexion));
                                       }

                                               if (pg_num_rows($connT4) > 0) {
                                              while ($rowDataT4 = pg_fetch_array($connT4)) {

                                             $correo = $rowDataT4["usuario"];
                                              $nombre = $rowDataT4["nombre_usuario"];
                                              $apellido= $rowDataT4["apellido_usuario"];
                        ?>
                              <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $correo ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $nombre ?> </textarea></td>
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $apellido ?> </textarea></td>
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["categoria"] ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["palabras_clave"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["fecha_trabajos"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["hora_trabajos"] ?> </textarea></td> 
                              


                                </tr> 

<?php
                                           }}
                      
                    }}
                    }}}}

 ?>
       </table></table>

      </div>

      </div></div>
  </div>

          <?php
          }
             //Opcion TRABAJOS
              else if($tablaa =='PONENCIAS POR EVALUAR') {
              ?>  

              <div class="contenedorregistroI2" id='usua1' > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
      
      <table class="inputNombreC" > 
         <h1 class="Tema">Ponencia por evaluar</h1>
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Titulo</td>
              <td class="inputNombreC3">Correo del Autor</td>
              <td class="inputNombreC3">Nombre(s) del Autor</td>
              <td class="inputNombreC3">Apellido(s) del Autor</td>
              <td class="inputNombreC3">Categoria del trabajo</td>
              <td class="inputNombreC3">Palabras clave</td>
              <td class="inputNombreC3">Fecha</td>
              <td class="inputNombreC3">Hora</td>
            </tr>

               <?php 
                    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                    //hace un select de todos los trabajos de ponencia
                     $queryTT1 = ("Select * from ponencia");
                  $connTT1 = pg_query($conexion, $queryTT1);

                  if (!$connTT1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connTT1) > 0) {
                    while ($rowDataTT1 = pg_fetch_array($connTT1)) {
               
                  //obtenemos id de cada trabajo
                          $Idtrabajo = $rowDataTT1["id_trabajos"];  
                                   $queryT1 = ("Select * from trabajos where id_trabajo = '$Idtrabajo'");
                                   $connT1 = pg_query($conexion, $queryT1);

                                     if (!$connT1) {
                                     die(pg_error($conexion));
                                          }

                                        if (pg_num_rows($connT1) > 0) {
                                       while ($rowDataT1 = pg_fetch_array($connT1)) {
               
                  //obtenemos id de cada trabajo
                                
                          

                      //Verificamos si ese trabajo se encuentra en evaluación
                      //de ser el caso contrario, se mostrará los datos en la tabla de tal trabajo para que 
                      //se le asigne un evaluador
                  $queryT2 = ("Select * from evaluacion_trabajos where trabajos_id='$Idtrabajo'and estado='POR EVALUAR'");
                  $connT2 = pg_query($conexion, $queryT2);

                  if (!$connT2) {
                    die(pg_error($conexion));
                  }
                  //evalua si el trabajo se encuentra en la tabla evaluación trabajos
                  if (pg_num_rows($connT2) > 0) {
                   //Si el trabajo  se encuentra en la tabla evaluación trabajos
                  //Muestra el titulo del trabajo
                   ?>

                  <tr >  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["titulo"] ?> </textarea></td> 
                <?php
                //busca el id del autor en la tabla ponente_trabajos
          $queryT3 = ("Select * from ponente_trabajos where trabajos_id = '$Idtrabajo'");
                  $connT3 = pg_query($conexion, $queryT3);

                  if (!$connT3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connT3) > 0) {
                    while ($rowDataT3 = pg_fetch_array($connT3)) {
                      //Guarda el id del autor en la variable $Idusuario
                          $Idusuario = $rowDataT3["ponente_id"];}
                                  //Select de usuarios para obtener los datos del autor mediante el id obtenido recien
                                 $queryT4 = ("Select * from usuario where id_usuario = '$Idusuario'");
                                $connT4 = pg_query($conexion, $queryT4);

                                         if (!$connT4) {
                                       die(pg_error($conexion));
                                       }

                                               if (pg_num_rows($connT4) > 0) {
                                              while ($rowDataT4 = pg_fetch_array($connT4)) {

                                             $correo = $rowDataT4["usuario"];
                                              $nombre = $rowDataT4["nombre_usuario"];
                                              $apellido= $rowDataT4["apellido_usuario"];
                        ?>
                              <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $correo ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $nombre ?> </textarea></td>
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $apellido ?> </textarea></td>
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["categoria"] ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["palabras_clave"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["fecha_trabajos"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["hora_trabajos"] ?> </textarea></td> 
                              


                                </tr> 

<?php
                                           }}
                      
                    }}
                    }}}}

 ?>
       </table></table>

      </div>

      </div></div>
  </div>              

  <?php }else if($tablaa =='PONENCIAS POR CORREGIR'){?>


              <div class="contenedorregistroI2" id='usua1' > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
      
      <table class="inputNombreC" > 
         <h1 class="Tema">Ponencia por corregir</h1>
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Titulo</td>
              <td class="inputNombreC3">Correo del Autor</td>
              <td class="inputNombreC3">Nombre(s) del Autor</td>
              <td class="inputNombreC3">Apellido(s) del Autor</td>
              <td class="inputNombreC3">Categoria del trabajo</td>
              <td class="inputNombreC3">Palabras clave</td>
              <td class="inputNombreC3">Fecha</td>
              <td class="inputNombreC3">Hora</td>
            </tr>

               <?php 
                    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                    //hace un select de todos los trabajos de ponencia
                     $queryTT1 = ("Select * from ponencia");
                  $connTT1 = pg_query($conexion, $queryTT1);

                  if (!$connTT1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connTT1) > 0) {
                    while ($rowDataTT1 = pg_fetch_array($connTT1)) {
               
                  //obtenemos id de cada trabajo
                          $Idtrabajo = $rowDataTT1["id_trabajos"];  
                                   $queryT1 = ("Select * from trabajos where id_trabajo = '$Idtrabajo'");
                                   $connT1 = pg_query($conexion, $queryT1);

                                     if (!$connT1) {
                                     die(pg_error($conexion));
                                          }

                                        if (pg_num_rows($connT1) > 0) {
                                       while ($rowDataT1 = pg_fetch_array($connT1)) {
               
                  //obtenemos id de cada trabajo
                                
                          

                      //Verificamos si ese trabajo se encuentra en evaluación
                      //de ser el caso contrario, se mostrará los datos en la tabla de tal trabajo para que 
                      //se le asigne un evaluador
                  $queryT2 = ("Select * from evaluacion_trabajos where trabajos_id='$Idtrabajo'and estado='POR CORREGIR'");
                  $connT2 = pg_query($conexion, $queryT2);

                  if (!$connT2) {
                    die(pg_error($conexion));
                  }
                  //evalua si el trabajo se encuentra en la tabla evaluación trabajos
                  if (pg_num_rows($connT2) > 0) {
                   //Si el trabajo  se encuentra en la tabla evaluación trabajos
                  //Muestra el titulo del trabajo
                   ?>

                  <tr >  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["titulo"] ?> </textarea></td> 
                <?php
                //busca el id del autor en la tabla ponente_trabajos
          $queryT3 = ("Select * from ponente_trabajos where trabajos_id = '$Idtrabajo'");
                  $connT3 = pg_query($conexion, $queryT3);

                  if (!$connT3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connT3) > 0) {
                    while ($rowDataT3 = pg_fetch_array($connT3)) {
                      //Guarda el id del autor en la variable $Idusuario
                          $Idusuario = $rowDataT3["ponente_id"];}
                                  //Select de usuarios para obtener los datos del autor mediante el id obtenido recien
                                 $queryT4 = ("Select * from usuario where id_usuario = '$Idusuario'");
                                $connT4 = pg_query($conexion, $queryT4);

                                         if (!$connT4) {
                                       die(pg_error($conexion));
                                       }

                                               if (pg_num_rows($connT4) > 0) {
                                              while ($rowDataT4 = pg_fetch_array($connT4)) {

                                             $correo = $rowDataT4["usuario"];
                                              $nombre = $rowDataT4["nombre_usuario"];
                                              $apellido= $rowDataT4["apellido_usuario"];
                        ?>
                              <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $correo ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $nombre ?> </textarea></td>
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $apellido ?> </textarea></td>
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["categoria"] ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["palabras_clave"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["fecha_trabajos"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["hora_trabajos"] ?> </textarea></td> 
                              


                                </tr> 

<?php
                                           }}
                      
                    }}
                    }}}}

 ?>
       </table></table>

      </div>

      </div></div>
  </div>   
                <?php }else if($tablaa =='PONENCIAS ACEPTADAS'){ ?>


              <div class="contenedorregistroI2" id='usua1' > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
      
      <table class="inputNombreC" > 
         <h1 class="Tema">Ponencias aceptadas</h1>
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Titulo</td>
              <td class="inputNombreC3">Correo del Autor</td>
              <td class="inputNombreC3">Nombre(s) del Autor</td>
              <td class="inputNombreC3">Apellido(s) del Autor</td>
              <td class="inputNombreC3">Categoria del trabajo</td>
              <td class="inputNombreC3">Palabras clave</td>
              <td class="inputNombreC3">Fecha</td>
              <td class="inputNombreC3">Hora</td>
            </tr>

               <?php 
                    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                    //hace un select de todos los trabajos de ponencia
                     $queryTT1 = ("Select * from ponencia");
                  $connTT1 = pg_query($conexion, $queryTT1);

                  if (!$connTT1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connTT1) > 0) {
                    while ($rowDataTT1 = pg_fetch_array($connTT1)) {
               
                  //obtenemos id de cada trabajo
                          $Idtrabajo = $rowDataTT1["id_trabajos"];  
                                   $queryT1 = ("Select * from trabajos where id_trabajo = '$Idtrabajo'");
                                   $connT1 = pg_query($conexion, $queryT1);

                                     if (!$connT1) {
                                     die(pg_error($conexion));
                                          }

                                        if (pg_num_rows($connT1) > 0) {
                                       while ($rowDataT1 = pg_fetch_array($connT1)) {
               
                  //obtenemos id de cada trabajo
                                
                          

                      //Verificamos si ese trabajo se encuentra en evaluación
                      //de ser el caso contrario, se mostrará los datos en la tabla de tal trabajo para que 
                      //se le asigne un evaluador
                  $queryT2 = ("Select * from evaluacion_trabajos where trabajos_id='$Idtrabajo'and estado='ACEPTADO'");
                  $connT2 = pg_query($conexion, $queryT2);

                  if (!$connT2) {
                    die(pg_error($conexion));
                  }
                  //evalua si el trabajo se encuentra en la tabla evaluación trabajos
                  if (pg_num_rows($connT2) > 0) {
                   //Si el trabajo  se encuentra en la tabla evaluación trabajos
                  //Muestra el titulo del trabajo
                   ?>

                  <tr >  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["titulo"] ?> </textarea></td> 
                <?php
                //busca el id del autor en la tabla ponente_trabajos
          $queryT3 = ("Select * from ponente_trabajos where trabajos_id = '$Idtrabajo'");
                  $connT3 = pg_query($conexion, $queryT3);

                  if (!$connT3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connT3) > 0) {
                    while ($rowDataT3 = pg_fetch_array($connT3)) {
                      //Guarda el id del autor en la variable $Idusuario
                          $Idusuario = $rowDataT3["ponente_id"];}
                                  //Select de usuarios para obtener los datos del autor mediante el id obtenido recien
                                 $queryT4 = ("Select * from usuario where id_usuario = '$Idusuario'");
                                $connT4 = pg_query($conexion, $queryT4);

                                         if (!$connT4) {
                                       die(pg_error($conexion));
                                       }

                                               if (pg_num_rows($connT4) > 0) {
                                              while ($rowDataT4 = pg_fetch_array($connT4)) {

                                             $correo = $rowDataT4["usuario"];
                                              $nombre = $rowDataT4["nombre_usuario"];
                                              $apellido= $rowDataT4["apellido_usuario"];
                        ?>
                              <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $correo ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $nombre ?> </textarea></td>
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $apellido ?> </textarea></td>
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["categoria"] ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["palabras_clave"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["fecha_trabajos"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["hora_trabajos"] ?> </textarea></td> 
                              


                                </tr> 

<?php
                                           }}
                      
                    }}
                    }}}}

 ?>
       </table></table>

      </div>

      </div></div>
  </div> 



                         <?php 
              }else if($tablaa =='CARTELES SIN EVALUADOR ASIGNADO') {

                ?>


              <div class="contenedorregistroI2" id='usua1' > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
      
      <table class="inputNombreC" > 
         <h1 class="Tema">Cartel sin evaluador</h1>
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Titulo</td>
              <td class="inputNombreC3">Correo del Autor</td>
              <td class="inputNombreC3">Nombre(s) del Autor</td>
              <td class="inputNombreC3">Apellido(s) del Autor</td>
              <td class="inputNombreC3">Categoria del trabajo</td>
              <td class="inputNombreC3">Palabras clave</td>
              <td class="inputNombreC3">Fecha</td>
              <td class="inputNombreC3">Hora</td>
            </tr>

               <?php 
                    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                    //hace un select de todos los trabajos de ponencia
                     $queryTT1 = ("Select * from carteles");
                  $connTT1 = pg_query($conexion, $queryTT1);

                  if (!$connTT1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connTT1) > 0) {
                    while ($rowDataTT1 = pg_fetch_array($connTT1)) {
               
                  //obtenemos id de cada trabajo
                          $Idtrabajo = $rowDataTT1["id_trabajos"];  
                                   $queryT1 = ("Select * from trabajos where id_trabajo = '$Idtrabajo'");
                                   $connT1 = pg_query($conexion, $queryT1);

                                     if (!$connT1) {
                                     die(pg_error($conexion));
                                          }

                                        if (pg_num_rows($connT1) > 0) {
                                       while ($rowDataT1 = pg_fetch_array($connT1)) {
               
                  //obtenemos id de cada trabajo
                                
                          

                      //Verificamos si ese trabajo se encuentra en evaluación
                      //de ser el caso contrario, se mostrará los datos en la tabla de tal trabajo para que 
                      //se le asigne un evaluador
                  $queryT2 = ("Select * from evaluacion_trabajos where trabajos_id='$Idtrabajo'");
                  $connT2 = pg_query($conexion, $queryT2);

                  if (!$connT2) {
                    die(pg_error($conexion));
                  }
                  //evalua si el trabajo se encuentra en la tabla evaluación trabajos
                  if (pg_num_rows($connT2) > 0) {
                    }else {  //Si el trabajo no se encuentra en la tabla evaluación trabajos
                  //Muestra el titulo del trabajo
                   ?>

                  <tr >  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["titulo"] ?> </textarea></td> 
                <?php
                //busca el id del autor en la tabla ponente_trabajos
          $queryT3 = ("Select * from ponente_trabajos where trabajos_id = '$Idtrabajo'");
                  $connT3 = pg_query($conexion, $queryT3);

                  if (!$connT3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connT3) > 0) {
                    while ($rowDataT3 = pg_fetch_array($connT3)) {
                      //Guarda el id del autor en la variable $Idusuario
                          $Idusuario = $rowDataT3["ponente_id"];}
                                  //Select de usuarios para obtener los datos del autor mediante el id obtenido recien
                                 $queryT4 = ("Select * from usuario where id_usuario = '$Idusuario'");
                                $connT4 = pg_query($conexion, $queryT4);

                                         if (!$connT4) {
                                       die(pg_error($conexion));
                                       }

                                               if (pg_num_rows($connT4) > 0) {
                                              while ($rowDataT4 = pg_fetch_array($connT4)) {

                                             $correo = $rowDataT4["usuario"];
                                              $nombre = $rowDataT4["nombre_usuario"];
                                              $apellido= $rowDataT4["apellido_usuario"];
                        ?>
                              <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $correo ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $nombre ?> </textarea></td>
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $apellido ?> </textarea></td>
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["categoria"] ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["palabras_clave"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["fecha_trabajos"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["hora_trabajos"] ?> </textarea></td> 
                              


                                </tr> 

<?php
                                           }}
                      
                    }}
                    }}}}

 ?>
       </table></table>

      </div>

      </div></div>
  </div>



               <?php }else if($tablaa =='CARTELES POR EVALUAR') { ?>


          <div class="contenedorregistroI2" id='usua1' > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
      
      <table class="inputNombreC" > 
         <h1 class="Tema">Carteles por evaluar</h1>
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Titulo</td>
              <td class="inputNombreC3">Correo del Autor</td>
              <td class="inputNombreC3">Nombre(s) del Autor</td>
              <td class="inputNombreC3">Apellido(s) del Autor</td>
              <td class="inputNombreC3">Categoria del trabajo</td>
              <td class="inputNombreC3">Palabras clave</td>
              <td class="inputNombreC3">Fecha</td>
              <td class="inputNombreC3">Hora</td>
            </tr>

               <?php 
                    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                    //hace un select de todos los trabajos de ponencia
                     $queryTT1 = ("Select * from carteles");
                  $connTT1 = pg_query($conexion, $queryTT1);

                  if (!$connTT1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connTT1) > 0) {
                    while ($rowDataTT1 = pg_fetch_array($connTT1)) {
               
                  //obtenemos id de cada trabajo
                          $Idtrabajo = $rowDataTT1["id_trabajos"];  
                                   $queryT1 = ("Select * from trabajos where id_trabajo = '$Idtrabajo'");
                                   $connT1 = pg_query($conexion, $queryT1);

                                     if (!$connT1) {
                                     die(pg_error($conexion));
                                          }

                                        if (pg_num_rows($connT1) > 0) {
                                       while ($rowDataT1 = pg_fetch_array($connT1)) {
               
                  //obtenemos id de cada trabajo
                                
                          

                      //Verificamos si ese trabajo se encuentra en evaluación
                      //de ser el caso contrario, se mostrará los datos en la tabla de tal trabajo para que 
                      //se le asigne un evaluador
                  $queryT2 = ("Select * from evaluacion_trabajos where trabajos_id='$Idtrabajo'and estado='POR EVALUAR'");
                  $connT2 = pg_query($conexion, $queryT2);

                  if (!$connT2) {
                    die(pg_error($conexion));
                  }
                  //evalua si el trabajo se encuentra en la tabla evaluación trabajos
                  if (pg_num_rows($connT2) > 0) {
                   //Si el trabajo  se encuentra en la tabla evaluación trabajos
                  //Muestra el titulo del trabajo
                   ?>

                  <tr >  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["titulo"] ?> </textarea></td> 
                <?php
                //busca el id del autor en la tabla ponente_trabajos
          $queryT3 = ("Select * from ponente_trabajos where trabajos_id = '$Idtrabajo'");
                  $connT3 = pg_query($conexion, $queryT3);

                  if (!$connT3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connT3) > 0) {
                    while ($rowDataT3 = pg_fetch_array($connT3)) {
                      //Guarda el id del autor en la variable $Idusuario
                          $Idusuario = $rowDataT3["ponente_id"];}
                                  //Select de usuarios para obtener los datos del autor mediante el id obtenido recien
                                 $queryT4 = ("Select * from usuario where id_usuario = '$Idusuario'");
                                $connT4 = pg_query($conexion, $queryT4);

                                         if (!$connT4) {
                                       die(pg_error($conexion));
                                       }

                                               if (pg_num_rows($connT4) > 0) {
                                              while ($rowDataT4 = pg_fetch_array($connT4)) {

                                             $correo = $rowDataT4["usuario"];
                                              $nombre = $rowDataT4["nombre_usuario"];
                                              $apellido= $rowDataT4["apellido_usuario"];
                        ?>
                              <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $correo ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $nombre ?> </textarea></td>
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $apellido ?> </textarea></td>
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["categoria"] ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["palabras_clave"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["fecha_trabajos"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["hora_trabajos"] ?> </textarea></td> 
                              


                                </tr> 

<?php
                                           }}
                      
                    }}
                    }}}}

 ?>
       </table></table>

      </div>

      </div></div>
  </div>     

<?php    }else if($tablaa =='CARTELES POR CORREGIR'){ ?>

          <div class="contenedorregistroI2" id='usua1' > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
      
      <table class="inputNombreC" > 
         <h1 class="Tema">Carteles por corregir</h1>
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Titulo</td>
              <td class="inputNombreC3">Correo del Autor</td>
              <td class="inputNombreC3">Nombre(s) del Autor</td>
              <td class="inputNombreC3">Apellido(s) del Autor</td>
              <td class="inputNombreC3">Categoria del trabajo</td>
              <td class="inputNombreC3">Palabras clave</td>
              <td class="inputNombreC3">Fecha</td>
              <td class="inputNombreC3">Hora</td>
            </tr>

               <?php 
                    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                    //hace un select de todos los trabajos de ponencia
                     $queryTT1 = ("Select * from carteles");
                  $connTT1 = pg_query($conexion, $queryTT1);

                  if (!$connTT1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connTT1) > 0) {
                    while ($rowDataTT1 = pg_fetch_array($connTT1)) {
               
                  //obtenemos id de cada trabajo
                          $Idtrabajo = $rowDataTT1["id_trabajos"];  
                                   $queryT1 = ("Select * from trabajos where id_trabajo = '$Idtrabajo'");
                                   $connT1 = pg_query($conexion, $queryT1);

                                     if (!$connT1) {
                                     die(pg_error($conexion));
                                          }

                                        if (pg_num_rows($connT1) > 0) {
                                       while ($rowDataT1 = pg_fetch_array($connT1)) {
               
                  //obtenemos id de cada trabajo
                                
                          

                      //Verificamos si ese trabajo se encuentra en evaluación
                      //de ser el caso contrario, se mostrará los datos en la tabla de tal trabajo para que 
                      //se le asigne un evaluador
                  $queryT2 = ("Select * from evaluacion_trabajos where trabajos_id='$Idtrabajo'and estado='POR CORREGIR'");
                  $connT2 = pg_query($conexion, $queryT2);

                  if (!$connT2) {
                    die(pg_error($conexion));
                  }
                  //evalua si el trabajo se encuentra en la tabla evaluación trabajos
                  if (pg_num_rows($connT2) > 0) {
                   //Si el trabajo  se encuentra en la tabla evaluación trabajos
                  //Muestra el titulo del trabajo
                   ?>

                  <tr >  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["titulo"] ?> </textarea></td> 
                <?php
                //busca el id del autor en la tabla ponente_trabajos
          $queryT3 = ("Select * from ponente_trabajos where trabajos_id = '$Idtrabajo'");
                  $connT3 = pg_query($conexion, $queryT3);

                  if (!$connT3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connT3) > 0) {
                    while ($rowDataT3 = pg_fetch_array($connT3)) {
                      //Guarda el id del autor en la variable $Idusuario
                          $Idusuario = $rowDataT3["ponente_id"];}
                                  //Select de usuarios para obtener los datos del autor mediante el id obtenido recien
                                 $queryT4 = ("Select * from usuario where id_usuario = '$Idusuario'");
                                $connT4 = pg_query($conexion, $queryT4);

                                         if (!$connT4) {
                                       die(pg_error($conexion));
                                       }

                                               if (pg_num_rows($connT4) > 0) {
                                              while ($rowDataT4 = pg_fetch_array($connT4)) {

                                             $correo = $rowDataT4["usuario"];
                                              $nombre = $rowDataT4["nombre_usuario"];
                                              $apellido= $rowDataT4["apellido_usuario"];
                        ?>
                              <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $correo ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $nombre ?> </textarea></td>
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $apellido ?> </textarea></td>
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["categoria"] ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["palabras_clave"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["fecha_trabajos"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["hora_trabajos"] ?> </textarea></td> 
                              


                                </tr> 

<?php
                                           }}
                      
                    }}
                    }}}}

 ?>
       </table></table>

      </div>

      </div></div>
  </div>  



<?php }else if($tablaa =='CARTELES ACEPTADOS'){?>

   <div class="contenedorregistroI2" id='usua1' > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
      
      <table class="inputNombreC" > 
         <h1 class="Tema">Carteles por corregir</h1>
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Titulo</td>
              <td class="inputNombreC3">Correo del Autor</td>
              <td class="inputNombreC3">Nombre(s) del Autor</td>
              <td class="inputNombreC3">Apellido(s) del Autor</td>
              <td class="inputNombreC3">Categoria del trabajo</td>
              <td class="inputNombreC3">Palabras clave</td>
              <td class="inputNombreC3">Fecha</td>
              <td class="inputNombreC3">Hora</td>
            </tr>

               <?php 
                    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                    //hace un select de todos los trabajos de ponencia
                     $queryTT1 = ("Select * from carteles");
                  $connTT1 = pg_query($conexion, $queryTT1);

                  if (!$connTT1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connTT1) > 0) {
                    while ($rowDataTT1 = pg_fetch_array($connTT1)) {
               
                  //obtenemos id de cada trabajo
                          $Idtrabajo = $rowDataTT1["id_trabajos"];  
                                   $queryT1 = ("Select * from trabajos where id_trabajo = '$Idtrabajo'");
                                   $connT1 = pg_query($conexion, $queryT1);

                                     if (!$connT1) {
                                     die(pg_error($conexion));
                                          }

                                        if (pg_num_rows($connT1) > 0) {
                                       while ($rowDataT1 = pg_fetch_array($connT1)) {
               
                  //obtenemos id de cada trabajo
                                
                          

                      //Verificamos si ese trabajo se encuentra en evaluación
                      //de ser el caso contrario, se mostrará los datos en la tabla de tal trabajo para que 
                      //se le asigne un evaluador
                  $queryT2 = ("Select * from evaluacion_trabajos where trabajos_id='$Idtrabajo'and estado='ACEPTADO'");
                  $connT2 = pg_query($conexion, $queryT2);

                  if (!$connT2) {
                    die(pg_error($conexion));
                  }
                  //evalua si el trabajo se encuentra en la tabla evaluación trabajos
                  if (pg_num_rows($connT2) > 0) {
                   //Si el trabajo  se encuentra en la tabla evaluación trabajos
                  //Muestra el titulo del trabajo
                   ?>

                  <tr >  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["titulo"] ?> </textarea></td> 
                <?php
                //busca el id del autor en la tabla ponente_trabajos
          $queryT3 = ("Select * from ponente_trabajos where trabajos_id = '$Idtrabajo'");
                  $connT3 = pg_query($conexion, $queryT3);

                  if (!$connT3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connT3) > 0) {
                    while ($rowDataT3 = pg_fetch_array($connT3)) {
                      //Guarda el id del autor en la variable $Idusuario
                          $Idusuario = $rowDataT3["ponente_id"];}
                                  //Select de usuarios para obtener los datos del autor mediante el id obtenido recien
                                 $queryT4 = ("Select * from usuario where id_usuario = '$Idusuario'");
                                $connT4 = pg_query($conexion, $queryT4);

                                         if (!$connT4) {
                                       die(pg_error($conexion));
                                       }

                                               if (pg_num_rows($connT4) > 0) {
                                              while ($rowDataT4 = pg_fetch_array($connT4)) {

                                             $correo = $rowDataT4["usuario"];
                                              $nombre = $rowDataT4["nombre_usuario"];
                                              $apellido= $rowDataT4["apellido_usuario"];
                        ?>
                              <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $correo ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $nombre ?> </textarea></td>
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $apellido ?> </textarea></td>
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["categoria"] ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["palabras_clave"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["fecha_trabajos"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["hora_trabajos"] ?> </textarea></td> 
                              


                                </tr> 

<?php
                                           }}
                      
                    }}
                    }}}}

 ?>
       </table></table>

      </div>

      </div></div>
  </div>  




             <?php 
              }else if($tablaa =='TALLERES SIN EVALUADOR ASIGNADO') {
                      ?>

              <div class="contenedorregistroI2" id='usua1' > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
      
      <table class="inputNombreC" > 
         <h1 class="Tema">Taller sin evaluador</h1>
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Titulo</td>
              <td class="inputNombreC3">Correo del Autor</td>
              <td class="inputNombreC3">Nombre(s) del Autor</td>
              <td class="inputNombreC3">Apellido(s) del Autor</td>
              <td class="inputNombreC3">Categoria del trabajo</td>
              <td class="inputNombreC3">Palabras clave</td>
              <td class="inputNombreC3">Fecha</td>
              <td class="inputNombreC3">Hora</td>
            </tr>

               <?php 
                    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                    //hace un select de todos los trabajos de ponencia
                     $queryTT1 = ("Select * from talleres");
                  $connTT1 = pg_query($conexion, $queryTT1);

                  if (!$connTT1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connTT1) > 0) {
                    while ($rowDataTT1 = pg_fetch_array($connTT1)) {
               
                  //obtenemos id de cada trabajo
                          $Idtrabajo = $rowDataTT1["id_trabajos"];  
                                   $queryT1 = ("Select * from trabajos where id_trabajo = '$Idtrabajo'");
                                   $connT1 = pg_query($conexion, $queryT1);

                                     if (!$connT1) {
                                     die(pg_error($conexion));
                                          }

                                        if (pg_num_rows($connT1) > 0) {
                                       while ($rowDataT1 = pg_fetch_array($connT1)) {
               
                  //obtenemos id de cada trabajo
                                
                          

                      //Verificamos si ese trabajo se encuentra en evaluación
                      //de ser el caso contrario, se mostrará los datos en la tabla de tal trabajo para que 
                      //se le asigne un evaluador
                  $queryT2 = ("Select * from evaluacion_trabajos where trabajos_id='$Idtrabajo'");
                  $connT2 = pg_query($conexion, $queryT2);

                  if (!$connT2) {
                    die(pg_error($conexion));
                  }
                  //evalua si el trabajo se encuentra en la tabla evaluación trabajos
                  if (pg_num_rows($connT2) > 0) {
                    }else {  //Si el trabajo no se encuentra en la tabla evaluación trabajos
                  //Muestra el titulo del trabajo
                   ?>

                  <tr >  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["titulo"] ?> </textarea></td> 
                <?php
                //busca el id del autor en la tabla ponente_trabajos
          $queryT3 = ("Select * from ponente_trabajos where trabajos_id = '$Idtrabajo'");
                  $connT3 = pg_query($conexion, $queryT3);

                  if (!$connT3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connT3) > 0) {
                    while ($rowDataT3 = pg_fetch_array($connT3)) {
                      //Guarda el id del autor en la variable $Idusuario
                          $Idusuario = $rowDataT3["ponente_id"];}
                                  //Select de usuarios para obtener los datos del autor mediante el id obtenido recien
                                 $queryT4 = ("Select * from usuario where id_usuario = '$Idusuario'");
                                $connT4 = pg_query($conexion, $queryT4);

                                         if (!$connT4) {
                                       die(pg_error($conexion));
                                       }

                                               if (pg_num_rows($connT4) > 0) {
                                              while ($rowDataT4 = pg_fetch_array($connT4)) {

                                             $correo = $rowDataT4["usuario"];
                                              $nombre = $rowDataT4["nombre_usuario"];
                                              $apellido= $rowDataT4["apellido_usuario"];
                        ?>
                              <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $correo ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $nombre ?> </textarea></td>
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $apellido ?> </textarea></td>
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["categoria"] ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["palabras_clave"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["fecha_trabajos"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["hora_trabajos"] ?> </textarea></td> 
                              


                                </tr> 

<?php
                                           }}
                      
                    }}
                    }}}}

 ?>
       </table></table>

      </div>

      </div></div>
  </div>

               
                <?php
              }else if($tablaa =='TALLERES POR EVALUAR'){ ?>


          <div class="contenedorregistroI2" id='usua1' > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
      
      <table class="inputNombreC" > 
         <h1 class="Tema">Talleres por evaluar</h1>
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Titulo</td>
              <td class="inputNombreC3">Correo del Autor</td>
              <td class="inputNombreC3">Nombre(s) del Autor</td>
              <td class="inputNombreC3">Apellido(s) del Autor</td>
              <td class="inputNombreC3">Categoria del trabajo</td>
              <td class="inputNombreC3">Palabras clave</td>
              <td class="inputNombreC3">Fecha</td>
              <td class="inputNombreC3">Hora</td>
            </tr>

               <?php 
                    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                    //hace un select de todos los trabajos de ponencia
                     $queryTT1 = ("Select * from talleres");
                  $connTT1 = pg_query($conexion, $queryTT1);

                  if (!$connTT1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connTT1) > 0) {
                    while ($rowDataTT1 = pg_fetch_array($connTT1)) {
               
                  //obtenemos id de cada trabajo
                          $Idtrabajo = $rowDataTT1["id_trabajos"];  
                                   $queryT1 = ("Select * from trabajos where id_trabajo = '$Idtrabajo'");
                                   $connT1 = pg_query($conexion, $queryT1);

                                     if (!$connT1) {
                                     die(pg_error($conexion));
                                          }

                                        if (pg_num_rows($connT1) > 0) {
                                       while ($rowDataT1 = pg_fetch_array($connT1)) {
               
                  //obtenemos id de cada trabajo
                                
                          

                      //Verificamos si ese trabajo se encuentra en evaluación
                      //de ser el caso contrario, se mostrará los datos en la tabla de tal trabajo para que 
                      //se le asigne un evaluador
                  $queryT2 = ("Select * from evaluacion_trabajos where trabajos_id='$Idtrabajo'and estado='POR EVALUAR'");
                  $connT2 = pg_query($conexion, $queryT2);

                  if (!$connT2) {
                    die(pg_error($conexion));
                  }
                  //evalua si el trabajo se encuentra en la tabla evaluación trabajos
                  if (pg_num_rows($connT2) > 0) {
                   //Si el trabajo  se encuentra en la tabla evaluación trabajos
                  //Muestra el titulo del trabajo
                   ?>

                  <tr >  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["titulo"] ?> </textarea></td> 
                <?php
                //busca el id del autor en la tabla ponente_trabajos
          $queryT3 = ("Select * from ponente_trabajos where trabajos_id = '$Idtrabajo'");
                  $connT3 = pg_query($conexion, $queryT3);

                  if (!$connT3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connT3) > 0) {
                    while ($rowDataT3 = pg_fetch_array($connT3)) {
                      //Guarda el id del autor en la variable $Idusuario
                          $Idusuario = $rowDataT3["ponente_id"];}
                                  //Select de usuarios para obtener los datos del autor mediante el id obtenido recien
                                 $queryT4 = ("Select * from usuario where id_usuario = '$Idusuario'");
                                $connT4 = pg_query($conexion, $queryT4);

                                         if (!$connT4) {
                                       die(pg_error($conexion));
                                       }

                                               if (pg_num_rows($connT4) > 0) {
                                              while ($rowDataT4 = pg_fetch_array($connT4)) {

                                             $correo = $rowDataT4["usuario"];
                                              $nombre = $rowDataT4["nombre_usuario"];
                                              $apellido= $rowDataT4["apellido_usuario"];
                        ?>
                              <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $correo ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $nombre ?> </textarea></td>
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $apellido ?> </textarea></td>
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["categoria"] ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["palabras_clave"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["fecha_trabajos"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["hora_trabajos"] ?> </textarea></td> 
                              


                                </tr> 

<?php
                                           }}
                      
                    }}
                    }}}}

 ?>
       </table></table>

      </div>

      </div></div>
  </div>





                <?php  
              } else if($tablaa =='TALLERES POR CORREGIR'){ ?>

          <div class="contenedorregistroI2" id='usua1' > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
      
      <table class="inputNombreC" > 
         <h1 class="Tema">Talleres por corregir</h1>
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Titulo</td>
              <td class="inputNombreC3">Correo del Autor</td>
              <td class="inputNombreC3">Nombre(s) del Autor</td>
              <td class="inputNombreC3">Apellido(s) del Autor</td>
              <td class="inputNombreC3">Categoria del trabajo</td>
              <td class="inputNombreC3">Palabras clave</td>
              <td class="inputNombreC3">Fecha</td>
              <td class="inputNombreC3">Hora</td>
            </tr>

               <?php 
                    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                    //hace un select de todos los trabajos de ponencia
                     $queryTT1 = ("Select * from talleres");
                  $connTT1 = pg_query($conexion, $queryTT1);

                  if (!$connTT1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connTT1) > 0) {
                    while ($rowDataTT1 = pg_fetch_array($connTT1)) {
               
                  //obtenemos id de cada trabajo
                          $Idtrabajo = $rowDataTT1["id_trabajos"];  
                                   $queryT1 = ("Select * from trabajos where id_trabajo = '$Idtrabajo'");
                                   $connT1 = pg_query($conexion, $queryT1);

                                     if (!$connT1) {
                                     die(pg_error($conexion));
                                          }

                                        if (pg_num_rows($connT1) > 0) {
                                       while ($rowDataT1 = pg_fetch_array($connT1)) {
               
                  //obtenemos id de cada trabajo
                                
                          

                      //Verificamos si ese trabajo se encuentra en evaluación
                      //de ser el caso contrario, se mostrará los datos en la tabla de tal trabajo para que 
                      //se le asigne un evaluador
                  $queryT2 = ("Select * from evaluacion_trabajos where trabajos_id='$Idtrabajo'and estado='POR CORREGIR'");
                  $connT2 = pg_query($conexion, $queryT2);

                  if (!$connT2) {
                    die(pg_error($conexion));
                  }
                  //evalua si el trabajo se encuentra en la tabla evaluación trabajos
                  if (pg_num_rows($connT2) > 0) {
                   //Si el trabajo  se encuentra en la tabla evaluación trabajos
                  //Muestra el titulo del trabajo
                   ?>

                  <tr >  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["titulo"] ?> </textarea></td> 
                <?php
                //busca el id del autor en la tabla ponente_trabajos
          $queryT3 = ("Select * from ponente_trabajos where trabajos_id = '$Idtrabajo'");
                  $connT3 = pg_query($conexion, $queryT3);

                  if (!$connT3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connT3) > 0) {
                    while ($rowDataT3 = pg_fetch_array($connT3)) {
                      //Guarda el id del autor en la variable $Idusuario
                          $Idusuario = $rowDataT3["ponente_id"];}
                                  //Select de usuarios para obtener los datos del autor mediante el id obtenido recien
                                 $queryT4 = ("Select * from usuario where id_usuario = '$Idusuario'");
                                $connT4 = pg_query($conexion, $queryT4);

                                         if (!$connT4) {
                                       die(pg_error($conexion));
                                       }

                                               if (pg_num_rows($connT4) > 0) {
                                              while ($rowDataT4 = pg_fetch_array($connT4)) {

                                             $correo = $rowDataT4["usuario"];
                                              $nombre = $rowDataT4["nombre_usuario"];
                                              $apellido= $rowDataT4["apellido_usuario"];
                        ?>
                              <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $correo ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $nombre ?> </textarea></td>
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $apellido ?> </textarea></td>
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["categoria"] ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["palabras_clave"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["fecha_trabajos"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["hora_trabajos"] ?> </textarea></td> 
                              


                                </tr> 

<?php
                                           }}
                      
                    }}
                    }}}}

 ?>
       </table></table>

      </div>

      </div></div>
  </div>



              <?php } else if($tablaa =='TALLERES ACEPTADOS'){?>


          <div class="contenedorregistroI2" id='usua1' > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
      
      <table class="inputNombreC" > 
         <h1 class="Tema">Talleres por corregir</h1>
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Titulo</td>
              <td class="inputNombreC3">Correo del Autor</td>
              <td class="inputNombreC3">Nombre(s) del Autor</td>
              <td class="inputNombreC3">Apellido(s) del Autor</td>
              <td class="inputNombreC3">Categoria del trabajo</td>
              <td class="inputNombreC3">Palabras clave</td>
              <td class="inputNombreC3">Fecha</td>
              <td class="inputNombreC3">Hora</td>
            </tr>

               <?php 
                    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                    //hace un select de todos los trabajos de ponencia
                     $queryTT1 = ("Select * from talleres");
                  $connTT1 = pg_query($conexion, $queryTT1);

                  if (!$connTT1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connTT1) > 0) {
                    while ($rowDataTT1 = pg_fetch_array($connTT1)) {
               
                  //obtenemos id de cada trabajo
                          $Idtrabajo = $rowDataTT1["id_trabajos"];  
                                   $queryT1 = ("Select * from trabajos where id_trabajo = '$Idtrabajo'");
                                   $connT1 = pg_query($conexion, $queryT1);

                                     if (!$connT1) {
                                     die(pg_error($conexion));
                                          }

                                        if (pg_num_rows($connT1) > 0) {
                                       while ($rowDataT1 = pg_fetch_array($connT1)) {
               
                  //obtenemos id de cada trabajo
                                
                          

                      //Verificamos si ese trabajo se encuentra en evaluación
                      //de ser el caso contrario, se mostrará los datos en la tabla de tal trabajo para que 
                      //se le asigne un evaluador
                  $queryT2 = ("Select * from evaluacion_trabajos where trabajos_id='$Idtrabajo'and estado='ACEPTADO'");
                  $connT2 = pg_query($conexion, $queryT2);

                  if (!$connT2) {
                    die(pg_error($conexion));
                  }
                  //evalua si el trabajo se encuentra en la tabla evaluación trabajos
                  if (pg_num_rows($connT2) > 0) {
                   //Si el trabajo  se encuentra en la tabla evaluación trabajos
                  //Muestra el titulo del trabajo
                   ?>

                  <tr >  <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["titulo"] ?> </textarea></td> 
                <?php
                //busca el id del autor en la tabla ponente_trabajos
          $queryT3 = ("Select * from ponente_trabajos where trabajos_id = '$Idtrabajo'");
                  $connT3 = pg_query($conexion, $queryT3);

                  if (!$connT3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connT3) > 0) {
                    while ($rowDataT3 = pg_fetch_array($connT3)) {
                      //Guarda el id del autor en la variable $Idusuario
                          $Idusuario = $rowDataT3["ponente_id"];}
                                  //Select de usuarios para obtener los datos del autor mediante el id obtenido recien
                                 $queryT4 = ("Select * from usuario where id_usuario = '$Idusuario'");
                                $connT4 = pg_query($conexion, $queryT4);

                                         if (!$connT4) {
                                       die(pg_error($conexion));
                                       }

                                               if (pg_num_rows($connT4) > 0) {
                                              while ($rowDataT4 = pg_fetch_array($connT4)) {

                                             $correo = $rowDataT4["usuario"];
                                              $nombre = $rowDataT4["nombre_usuario"];
                                              $apellido= $rowDataT4["apellido_usuario"];
                        ?>
                              <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $correo ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $nombre ?> </textarea></td>
                               <td class="inputNombreC2"><textarea name="cor" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $apellido ?> </textarea></td>
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["categoria"] ?> </textarea></td> 
                               <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["palabras_clave"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["fecha_trabajos"] ?> </textarea></td> 
                              <td class="inputNombreC2"><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly > <?php echo $rowDataT1["hora_trabajos"] ?> </textarea></td> 
                              


                                </tr> 

<?php
                                           }}
                      
                    }}
                    }}}}

 ?>
       </table></table>

      </div>

      </div></div>
  </div>


              <?php  }else if($tablaa =='RESUMEN DE TRABAJOS REGISTRADOS EN EL CONGRESO'){ ?>
                    
<div class="contenedorregistroI2" id='usua1' > 
  <div class="px-4 pt-1 my-5 text-center border-bottom">
    <div class="col-lg-12 mx-auto">
      <div class="table-responsive">
      <table class="table table-bordered border border-secondary"  ><center>
      
      <table class="inputNombreC" > 
         <h1 class="Tema">RESUMEN DE TRABAJOS REGISTRADOS EN EL CONGRESO</h1>
            <tr class="inputNombreC2">
              <td class="inputNombreC2">Número de congreso</td>
              <td class="inputNombreC2">Tipo de trabajo</td>
              <td class="inputNombreC2">Cantidad de trabajos registrados</td> 
            </tr>
<?php 
 
$conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                    //hace un select de todos los trabajos de ponencia
                    
    $querycongre = ("Select * from congreso");
                  $conncongre = pg_query($conexion, $querycongre);

                  if (!$conncongre) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conncongre) > 0) {
                    while ($rowDatacongre = pg_fetch_array($conncongre)) { 
                  //obtenemos id de cada trabajo
                      $contadorponencias = 0;
                      $contadorcarteles = 0;
                      $contadortalleres = 0;
                       $contadortotal = 0;
                          $idcongreso = intval($rowDatacongre["id_congreso"]);
                         $numcongreso = $rowDatacongre["numero_congreso"];


              $querycongre1 = ("Select * from trabajos_congreso where congreso_id='$idcongreso'");
                  $conncongre1 = pg_query($conexion, $querycongre1);

                  if (!$conncongre1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conncongre1) > 0) {
                    while ($rowDatatrab = pg_fetch_array($conncongre1)) { 
                  //obtenemos id de cada trabajo
                          $Idtrabajo = $rowDatatrab["trabajos_id"];
                      
             $querytrabajos1 = ("Select * from ponencia where id_trabajos='$Idtrabajo' ");
                  $conntrab1 = pg_query($conexion, $querytrabajos1);

                  if (!$conntrab1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conntrab1) > 0) {
                    while ($rowDatatrab1 = pg_fetch_array($conntrab1)) { 
                  //obtenemos id de cada trabajo
                           $contadorponencias= $contadorponencias + 1;
                            
                        }}
             $querytrabajos2 = ("Select * from talleres where id_trabajos='$Idtrabajo' ");
                  $conntrab2 = pg_query($conexion, $querytrabajos2);

                  if (!$conntrab2) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conntrab2) > 0) {
                    while ($rowDatatrab2 = pg_fetch_array($conntrab2)) { 
                  //obtenemos id de cada trabajo
                           $contadortalleres= $contadortalleres + 1;
                            
                        }}

              $querytrabajos3 = ("Select * from carteles where id_trabajos='$Idtrabajo' ");
                  $conntrab3 = pg_query($conexion, $querytrabajos3);

                  if (!$conntrab3) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conntrab3) > 0) {
                    while ($rowDatatrab3 = pg_fetch_array($conntrab3)) { 
                  //obtenemos id de cada trabajo
                           $contadorcarteles= $contadorcarteles +1;
                            
                        }}    }}
  
             $contadortotal =$contadorponencias + $contadorcarteles + $contadortalleres;

              $querytrabajos4 = ("Select * from trabajosresumen_congreso where id_congreso='$idcongreso' ");
                  $conntrab4 = pg_query($conexion, $querytrabajos4);

                  if (!$conntrab4) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conntrab4) > 0) {
                    while ($rowDatatrab4 = pg_fetch_array($conntrab4)) { 
                  //obtenemos id de cada trabajo
                         
                          $ntotal = intval($rowDatatrab4["n_totaltrabajos"]);
 
                        if($contadortotal==$ntotal){
                       
                          }else{

                            $querytrabajos5 = ("UPDATE trabajosresumen_congreso set n_ponencias='$contadorponencias', n_carteles='$contadorcarteles', n_talleres='$contadortalleres', n_totaltrabajos='$contadortotal' where id_congreso='$idcongreso' ");
                            $conntrab5 = pg_query($conexion, $querytrabajos5);
                           
 
                          } 
                        }}else{
                 $querytrabajos5 = ("INSERT INTO trabajosresumen_congreso (id_congreso, n_ponencias, n_talleres,n_carteles, n_totaltrabajos)values('$idcongreso','$contadorponencias', '$contadorcarteles', '$contadortalleres', '$contadortotal')");
                            $conntrab5 = pg_query($conexion, $querytrabajos5);

  


                        }



?>

 <tr >  
<td class="inputNombreC2"><center><?php echo $numcongreso ?></center></td>
<td class="inputNombreC2"><center><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly >PONENCIA</textarea><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly >CARTEL</textarea><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly >TALLER</textarea><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly >TOTAL</textarea></center>
 
</td>
<td class="inputNombreC2"><center><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly ><?php echo $contadorponencias ?></textarea><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly ><?php echo $contadorcarteles ?></textarea><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly ><?php echo $contadortalleres ?></textarea><textarea name="textareaa" rows="mx-auto" cols="mx-auto" class="sinborde"  readonly ><?php echo $contadortotal ?></textarea></center></td>


                                </tr> 


                          <?php

                        


                        }}


                    


?>
 

  </table> 

      </div>

      </div></div>
  </div>








              <?php } /*

              //Opcion EXTENSOS APROBADOS
              else {


              } //Opcion EXTENSOS POR EVALUAR
              else {


              }//Opcion EXTENSOS POR CORREGIR
              else {


              }*/



           }} ?>
      <a  href="menu.php"  > <button >Regresar</button> </a> 
         
  </div></div>
  </div>


              <br><!-- -->
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