<?php

include 'credentials.php';
// $varName; Nombre
// $varId Id;
// $varEmail; Correo
?>

<?php


///////////////////////// SUBIR UN TALLER /////////////////////////////////////////////


if(isset($_POST["subir"]))   {
   $subir = $_POST["subir"] ;
//evalua la acción del botón Enviar
if ($subir  == "Cargar archivo")
{
 
//evalua si existe contenido en el input del url
 if(isset($_POST['contenido']) && isset($_POST['materiales'])){

//crea la variable url y le da el valor del formulario del input con el name url
 $contenido = $_POST['contenido']; 
 $materiales = $_POST['materiales']; 
 //conecta a la BD
  $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
$idtt=$_GET['itt'];
  
//Query que actualiza la tabla, agregando el dato de contenido en la tabla talleres
$query2 = ("UPDATE talleres SET contenido = '$contenido' WHERE id_trabajos = '$idtt'"); //el numerito es el id de un taller
$consulta1=pg_query($conexion,$query2); //ejecuta la acción query en la BD

//Query que actualiza la tabla, agregando el dato de materiales en la tabla talleres

//El ID de la tabla materiales lo usa la tabla TALLERES_MATERIAL y saca su ID:

$query4 = ("Select * from talleres_material where taller_id='$idtt' ");
                  $conn1 = pg_query($conexion, $query4);

                  if (!$conn1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conn1) > 0) {
                    while ($rowData = pg_fetch_array($conn1)) {
                      $id_material = intval($rowData["id_material"]);
                    }
                  }

$query3 = ("UPDATE materiales SET  nombre_material='$materiales' WHERE id_material='$id_material");
$consulta2=pg_query($conexion,$query3); //ejecuta la acción query en la BD

//Query que de la relacion de materiales con el taller
  //ejecuta la acción query en la BD

$queryT=("select * from trabajos where id_trabajo='$idtt'"); 
$consultaT=pg_query($conexion,$queryT); 
$queryNewT=pg_fetch_array($consultaT);
$queryTitulo=$queryNewT["titulo"];

$queryT1=("select * from evaluacion_trabajos where  trabajos_id='$idtt'"); 
$consultaT1=pg_query($conexion,$queryT1); 

if (pg_num_rows($consultaT1) > 0) {
    while($rowData = pg_fetch_array($consultaT1)){
    $idevr=$rowData["evaluacion_id"];
    $queryT2=("select * from evaluacion_taller where evaluacion_id='$idevr'"); 
$consultaT2=pg_query($conexion,$queryT2); 

                if (pg_num_rows($consultaT2) > 0) {
                     while($rowData2 = pg_fetch_array($consultaT2)){
          $idevaluacio=$rowData2["evaluacion_id"];  }}
 
        }}


//Estado de la evaluacion
             $queryE1=("UPDATE evaluacion_trabajos SET estado='POR EVALUAR' WHERE trabajos_id='$idtt' and evaluacion_id='$idevaluacio'");
        $consultaE1=pg_query($conexion,$queryE1); 





// Avisa al usuaro que el archivo se cargo con exito
//Importar función
require './enviarEmail.php';

//Envio de correo 
$titul = $queryTitulo;
$email = $varEmail;
$subject = "Confirmacion de correccion de trabajo";

//Cuerpo del correo
$body = "Congreso Internacional sobre la Enseñanza y Aplicación de las Matemáticas 
Facultad de Estudios Superiores Cuautitlán

Su corrección de contenido y materiales de taller {$titul} ha sido registrada con éxito.";

sendEmail($email, $subject, $body);  
echo "<script>alert('Registro exitoso.');window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/menu.php');</script>"; 

} }
  }


?>
<html lang="es">
    <head>
        <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
        <title>Correción de Contenido y Materiales</title>
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
              
           <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
                                        <!-- jQuery Modal -->
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
                                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
                                        
        
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <meta http-equiv="XX-UA-Compatible" content="ie=edge">

<!-- recuadro resumen -->
        <style type="text/css">
    textarea{
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
    .textarea2{

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
     
     .nav-bar{
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

.inputPCategorias{
      	width: 270px;
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


@media (max-width: 800px) {
      .textarea2 {
        width: 270px;
       
      }

      .textarea3 {
        width: 270px;
       
      }

.
      


    }

    @media (max-width: 560px) {
      .textarea2 {
        width: 160px;
       
      }

      .textarea3 {
        width: 160px;
       
      }

      .inputPCategorias{
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

.ContenedorPrincipal{
    border-radius: 3em;
	border: 0.3em solid #2B307C;
        margin:3em;
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
 

<div class="ContenedorPrincipal"> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
   
    <div class="col-lg-6 mx-auto">
      


 <?php
    if (isset($_SESSION['sms']) && $_SESSION['sms'])
    {
      printf('<b>%s</b>', $_SESSION['sms']);
      unset($_SESSION['sms']);
    } 

     $idt=$_GET['itt'];
                   $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                  $queryevr=("Select * from evaluacion_trabajos where trabajos_id='$idt' ");
                  //obtiene el id de su evaluacion
                            $connevr=pg_query($conexion,$queryevr); 
                     
                                                     if(!$connevr){
                                                        die(pg_error($conexion));
                                                         }

                                               if (pg_num_rows($connevr) > 0) {
                                                    while($rowData = pg_fetch_array($connevr)){
                                                      $idev=$rowData["evaluacion_id"];
   $queryevr2=("Select * from evaluacion_taller where evaluacion_id='$idev' ");
                  //obtiene el id de su evaluacion
                            $connevr2=pg_query($conexion,$queryevr2); 
                     
                                                     if(!$connevr2){
                                                        die(pg_error($conexion));
                                                         }

                                               if (pg_num_rows($connevr2) > 0) {
                                                    while($rowData2 = pg_fetch_array($connevr2)){
                                                      $idev2=$rowData2["observaciones"];}}

                                                  }}


 $queryurl=("Select * from talleres where id_trabajos='$idt' ");
                  //obtiene el id de su evaluacion
                            $conneurl=pg_query($conexion,$queryurl); 
                     
                                                     if(!$conneurl){
                                                        die(pg_error($conexion));
                                                         }

                                               if (pg_num_rows($conneurl) > 0) {
                                                    while($rowData1 = pg_fetch_array($conneurl)){
                                                      $contenido=$rowData1["contenido"];}}


              $querym=("Select * from talleres_material where taller_id='$idt' ");
                  //obtiene el id de su evaluacion
                            $connem=pg_query($conexion,$querym); 
                     
                                                     if(!$connem){
                                                        die(pg_error($conexion));
                                                         }

                                               if (pg_num_rows($connem) > 0) {
                                                    while($rowDatam = pg_fetch_array($connem)){
                                                      $idm1=$rowDatam["material_id"];}}

                
                  $querm1=("Select * from materiales where id_material='$idm1' ");
                  //obtiene el id de su evaluacion
                            $connm1=pg_query($conexion,$querm1); 
                     
                                                     if(!$connm1){
                                                        die(pg_error($conexion));
                                                         }

                                               if (pg_num_rows($connm1) > 0) {
                                   while($rowDatam11 = pg_fetch_array($connm1)){
                                                $mater1=$rowDatam11["nombre_material"];}}
 


  ?>
        <p class="Tema">Corrección de Contenido y Materiales para Taller</p>
                        <form  method="POST" enctype="multipart/form-data"   >
<table>

                         <p class="temaSec">Las observaciones acerca de su contenido y materiales son las siguientes:</p>   
                        <center>    <tr>
                                <td class="C1">

                                    <label for="Observaciones">Observaciones:</label>
                                </td>
                                <td class="C2">
                                    <textarea class="textarea2" type="text"  name="titulo" style="text-transform:uppercase;" readonly><?php echo $idev2 ?></textarea>
                            
                                </td>
                                                    </tr> </center>
                        </table>



        <br>
                   <p class="temaCentral">Contenido</p>  

                <div class="datosP">
<div class="D1">
                    
  <table>
                            
                        <center> <tr>
                               <tr> <p class="temaSec">1.- Ingresa el contenido de tu taller.</p> </tr> <td class="C1">
                                <label for="Contenido">Contenido:</label> 
                                </td>
                                <td class="C2">
                               <br><textarea class="textarea2"  type="text"  name="contenido" placeholder="INGRESA EL CONTENIDO DEL TALLER" style="text-transform:uppercase;" required><?php echo $contenido ?></textarea> 
                                </td>
                                                    </tr> </center>
    
    </table>    <br>   </div>
    </div>         


    <p class="temaCentral">Materiales</p>
                
                <div class="datosP">
                    <!-- <p class="temaSec">Ingrese correctamente los datos de su cartel.</p> -->

                   <div class="D1">
                        <!--******DATOS SOBRE EL CARTEL*******-->
                        
                        <table>
                            
                        
                            
                            <center>    <tr>
                                 <p class="temaSec">2.- Ingresa los materiales para el taller.</p> </tr> <td class="C1">
                                <label for="Materiales">Materiales:</label> 
                                 
                                </td>
                                <td class="C2">
                                    <textarea class="textarea2" type="text" name="materiales" placeholder="INGRESA LOS MATERIALES PARA EL TALLER" style="text-transform:uppercase;"required><?php echo $mater1 ?></textarea>
                            
                                </td>
                            </tr> </center>

                            

                         
                        </table>
    
                    </div> 

                </div>                                




        
             <br><button class="enviarBtn" type="submit" name="subir" value="Cargar archivo">Enviar contenido y materiales</button><br>             


            </form>

            <br><br> <a  href="HistorialTrabajos.php"  > <button class="enviarBtn">Regresar</button> </a>


        
        <div class="alert alert-info" style="display: none;"></div>
   
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

 <script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
       preferredCountries: ["mx"],
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js", autoHideDialCode:false,
    nationalMode: false } );
      </script>

</html>