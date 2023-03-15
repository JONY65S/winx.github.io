<?php
ini_set("display_errors", 1);
?>

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
        <title>Modificar Congreso</title>
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
      .inputNombreC3 {
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

 .sinborde {
    border: 0;
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
                <label for="btn-menu2"><img src="img/icono_informacion.png" alt=""> </label>
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
      <!--<form  method="post"> -->
     <p class="Tema">Modificar Congreso</p>  <form action="#" method="POST" >
     <div class="D1"> 
     <?php
             $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
             $id_congr = $_GET['id']; 
    
                     $query2 = ("Select * from congreso where id_congreso='$id_congr' ");
                     $conn2 = pg_query($conexion, $query2);

                     if (!$conn2) {
                       die(pg_error($conexion));
                     }
   
                     if (pg_num_rows($conn2) > 0) {
                       while ($rowData2 = pg_fetch_array($conn2)) {
                         ?> <table>
                          <tr>
               <td class="C2">
               <p >Id del Congreso a Modificar:</p> 
             <input class="inputNombreC" type="text" name="id" value="<?php echo $rowData2["id_congreso"] ?>" readonly> </td> </tr>
            </tr>  
                       </table>
                       
                       <table>
                        <br>
                       <p class="temaCentral">Cambia solo los datos que deseas modificar del congreso:</p> 
                       <br>
                                <tr>
						<td class="C1">
              <br>
					<label for="Name">Nombre del Congreso:</label>
                                                </td>
						<td class="C2">
					<input class="inputNombreC" type="text" name="NombreC"  value="<?php echo $rowData2["nombre_congreso"] ?>" required>
								</td>                                                               
							</tr>
                            </table>
                             </div>
                            <div> 
                                <table>
                                                        <tr>
                                                        <td class="C1">
									<label for="Registro">Identificador :</label>
								</td>
								<td class="C2">                
									<select class="inputP" type="text" name="Iden"  required>
                  <option> <?php echo $rowData2["identificador_numero_registro"]?> </option>
                  <?php 
           $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
            $query1 = ("Select n_referencia, tipo from identificador");
                  $consulta = pg_query($conexion, $query1); ?>

          <?php 
          while($obj=pg_fetch_object($consulta)){        
          ?>
         <option value="<?php echo $obj->n_referencia ?>"><?php echo $obj->tipo;?> <?php echo $obj->n_referencia;?></option>
         <?php
          }
           ?>      

                    </select>
								
							</tr>
              <tr>
              <td class="C1">
									<label for="Numero">Número de Congreso:</label>
								</td>
								<td class="C2">
                                                                    <select name="NumeroC" class="inputP"  required>
                                                                    <option ><?php echo $rowData2["numero_congreso"] ?> </option>
                                                                        <option > 1° Primero I</option>
                                                                        <option class="inputP"> 2° Segundo  II</option>
                                                                        <option class="inputP"> 3° Tercero  III</option>
                                                                        <option class="inputP"> 4° Cuarto  IV</option>
                                                                        <option class="inputP"> 5° Quinto  V</option> 
                                                                        <option class="inputP"> 6° Sexto  VI</option>
                                                                        <option class="inputP"> 7° Séptimo  VII</option>
                                                                        <option class="inputP"> 8° Octavo VIII</option>
                                                                        <option class="inputP"> 9° Noveno  IX</option>
                                                                        <option class="inputP"> 10° Décimo  X</option>
                                                                        <option class="inputP"> 11° Décimoprimero  XI</option>
                                                                        <option class="inputP"> 12° Décimosegundo  XII</option>
                                                                        <option class="inputP"> 13° Décimotercero  XIII</option>
                                                                        <option class="inputP"> 14° Décimocuarto  XIV</option>
                                                                        <option class="inputP"> 15° Décimoquinto  XV</option>
                                                                        <option class="inputP"> 16° Décimosexto  XVI</option>
                                                                        <option class="inputP"> 17° Décimoséptimo  XVII</option>
                                                                        <option class="inputP"> 18° Décimooctavo  XVIII</option>
                                                                        <option class="inputP"> 19° Décimonoveno  XIX</option>
                                                                        <option class="inputP"> 20° Vigésimo  XX</option>
                                                                        <option class="inputP"> 21° Vigésimoprimero  XXI</option>
                                                                        <option class="inputP"> 22° Vigésimosegundo  XXII</option>
                                                                        <option class="inputP"> 23° Vigésimotercero  XXIII</option>
                                                                        <option class="inputP"> 24° Vigésimocuarto  XXIV</option>
                                                                        <option class="inputP"> 25° Vigésimoquinto  XXV</option>
                                                                        <option class="inputP"> 26° Vigésimosexto  XXVI</option>
                                                                        <option class="inputP"> 27° Vigésimoseptimo  XXVII</option>
                                                                    </select>
								</td>
        </tr>                                      
            <tr>                                         
								<td class="C1">
									<label for="Email">Correo del Congreso:</label>
								</td>
								<td class="C2">
									<input class="inputP" type="email" name="CorreoC"  value="<?php echo $rowData2["email"] ?>" required>
								</td>
							</tr>
                                
                            </table>
                             </div>
                            <br>
				<p class="temaCentral">Envio Invitaciones de la Convocatoria </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
                           <input  class="inputP" type ="date" name ="InviI"  value="<?php echo $rowData2["fecha_inicio_envio_invitaciones_convocatoria"] ?>" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="InviF" value="<?php echo $rowData2["fecha_fin_envio_invitaciones_convocatoria"] ?>" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>

                          <p class="temaCentral">Fechas del Congreso: </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="IniC" value="<?php echo $rowData2["fecha_inicio_congreso"] ?>" required/>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="FinC" value="<?php echo $rowData2["fecha_fin_congreso"] ?>" required/>
								</td>
							</tr>						
						</table>
					</div> 
				</div>
                          
                          <p class="temaCentral">Recepción de Pagos </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="PagI" value="<?php echo $rowData2["fecha_inicio_recepcion_pagos"] ?>"  required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="PagF" value="<?php echo $rowData2["fceha_fin_recepcion_pagos"] ?>" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>  
                                
				<p class="temaCentral">Recepción de Resumenes </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ResuI" value="<?php echo $rowData2["fecha_inicio_recepcion_resumenes"] ?>" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ResuF" value="<?php echo $rowData2["fecha_fin_recepcion_resumenes"] ?>" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>
                                
                                <p class="temaCentral">Evaluación de Resumenes </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="EvaRI" value="<?php echo $rowData2["fecha_inicio_evaluacion_resumenes"] ?>" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="EvaRF" value="<?php echo $rowData2["fecha_fin_evaluacion_resumenes"] ?>" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>
                                
                           <p class="temaCentral">Resultado Evaluación de Resumenes </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ResEvRI" value="<?php echo $rowData2["fecha_inicio_resultado_evaluacion_resumenes"] ?>"  required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ResEvRF" value="<?php echo $rowData2["fecha_fin_resultado_evaluacion_resumenes"] ?>" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>
                           
                           <p class="temaCentral">Recepción Corrección de Resumenes </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="CorRI" value="<?php echo $rowData2["fecha_inicio_recepcion_correcion_resumenes"] ?>" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="CorRF" value="<?php echo $rowData2["fecha_fin_recepcion_correcion_resumenes"] ?>" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>
                           
                           <p class="temaCentral">Recepción de Extensos </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ExtI" value="<?php echo $rowData2["fecha_inicio_recepcion_extensos"] ?>" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ExtF" value="<?php echo $rowData2["fecha_fin_recepcion_extensos"] ?>"required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>  
                             
                           <p class="temaCentral">Notificación de Observaciones de Extensos </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="NotObExI" value="<?php echo $rowData2["fecha_inicio_notificacion_observaciones_extensos"] ?>" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="NotObExF" value="<?php echo $rowData2["fecha_fin_notificacion_observaciones_extensos"] ?>"  required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>                             
                           
                           <p class="temaCentral">Recepción de Extensos Finales</p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ReExtFI" value="<?php echo $rowData2["fecha_inicio_recepcion_extensos_finales"] ?>"  required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ReExtFF" value="<?php echo $rowData2["fecha_fin_recepcion_extensos_finales"] ?>" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>  
                           
                           <p class="temaCentral">Recepción de Videos de Ponencias Aceptadas  </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="VidPonAI" value="<?php echo $rowData2["fecha_inicio_recepcion_videos_ponencias_aceptadas"] ?>"  required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="VidPonAF" value="<?php echo $rowData2["fecha_fin_recepcion_videos_ponencias_aceptadas"] ?>" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>  
                           
                           <p class="temaCentral">Publicación del Programa del Evento  </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha de Publicación del Evento:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="ProgEven" value="<?php echo $rowData2["fecha_publicacion_programa_evento"] ?>" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>  
                           
                           <p class="temaCentral">Impartición de Talleres </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="TallI" value="<?php echo $rowData2["fecha_inicio_imparticion_talleres"] ?>" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="TallF" value="<?php echo $rowData2["fecha_fin_imparticion_talleres"] ?>" required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>  
                           
                           <p class="temaCentral">Envio de Constancias </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha Inicio:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="EnvConsI" value="<?php echo $rowData2["fecha_inicio_envio_contancias"] ?>" required>
								</td>
                                                                
								<td class="C1">
									<label for="Last">Fecha Fin:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="EnvConsF" value="<?php echo $rowData2["fecha_fin_envio_contancias"] ?>"required>
								</td>
							</tr>						
						</table>
					</div> 
				</div>
                           
                           <p class="temaCentral">Publicación de Memorias </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Fecha de Publicación de Memorias del Congreso:</label>
								</td>
								<td class="C2">
									<input  class="inputP" type ="date" name ="Pmemo" value="<?php echo $rowData2["fecha_publicacion_memorias"] ?>" required>
								</td>
							</tr>						
						</table>

        </div>


        <p class="temaCentral">Número de Trabajos para el Congreso </p>
				<div class="datosP">					                                        
                                        <div class="D1">
						<table>							
							<tr>
								<td class="C1">
									<label for="Name">Número Total de Trabajos:</label>
								</td>
								<td class="C2">
                <select name="NumeroTotalT" class="inputP" required>
                                                                        <option ><?php echo $rowData2["num_total_trabajos"] ?> </option>
                                                                        <option class="inputP"> 1</option>
                                                                        <option class="inputP"> 2</option>
                                                                        <option class="inputP"> 3</option>
                                                                        <option class="inputP"> 4</option>
                                                                        <option class="inputP"> 5</option> 
                                                                        <option class="inputP"> 6</option>
                                                                        <option class="inputP"> 7</option>
                                                                        <option class="inputP"> 8</option>
                                                                        <option class="inputP"> 9</option>
                                                                        <option class="inputP"> 10</option>
                                                                        <option class="inputP"> 11</option>
                                                                        <option class="inputP"> 12</option>
                                                                        <option class="inputP"> 13</option>
                                                                        <option class="inputP"> 14</option>
                                                                        <option class="inputP"> 15</option>
                                                                        <option class="inputP"> 16</option>
                                                                        <option class="inputP"> 17</option>
                                                                        <option class="inputP"> 18</option>
                                                                        <option class="inputP"> 19</option>
                                                                        <option class="inputP"> 20</option>
                                                                    </select>
								</td>
                <td class="C1">
									<label for="Name">Número de Ponencias:</label>
								</td>
								<td class="C2">
                <select name="NumeroPonencia" class="inputP" required>
                                                                        <option ><?php echo $rowData2["num_ponencias"] ?> </option>
                                                                        <option class="inputP"> 1</option>
                                                                        <option class="inputP"> 2</option>
                                                                        <option class="inputP"> 3</option>
                                                                        <option class="inputP"> 4</option>
                                                                        <option class="inputP"> 5</option> 
                                                                        <option class="inputP"> 6</option>
                                                                        <option class="inputP"> 7</option>
                                                                        <option class="inputP"> 8</option>
                                                                        <option class="inputP"> 9</option>
                                                                        <option class="inputP"> 10</option>
                                                                        <option class="inputP"> 11</option>
                                                                        <option class="inputP"> 12</option>
                                                                        <option class="inputP"> 13</option>
                                                                        <option class="inputP"> 14</option>
                                                                        <option class="inputP"> 15</option>
                                                                    </select>
								</td>
							</tr>			
              <tr>
								<td class="C1">
									<label for="Name">Número de Carteles:</label>
								</td>
								<td class="C2">
                <select name="NumeroCartel" class="inputP" required>
                                                                       <option ><?php echo $rowData2["num_carteles"] ?> </option>
                                                                        <option class="inputP"> 1</option>
                                                                        <option class="inputP"> 2</option>
                                                                        <option class="inputP"> 3</option>
                                                                        <option class="inputP"> 4</option>
                                                                        <option class="inputP"> 5</option> 
                                                                        <option class="inputP"> 6</option>
                                                                        <option class="inputP"> 7</option>
                                                                        <option class="inputP"> 8</option>
                                                                        <option class="inputP"> 9</option>
                                                                        <option class="inputP"> 10</option>
                                                                    </select>
								</td>
                <td class="C1">
									<label for="Name">Número de Talleres:</label>
								</td>
								<td class="C2">
                <select name="NumeroTaller" class="inputP" required>
                                                                        <option ><?php echo $rowData2["num_talleres"] ?> </option>
                                                                        <option class="inputP"> 1</option>
                                                                        <option class="inputP"> 2</option>
                                                                        <option class="inputP"> 3</option>
                                                                        <option class="inputP"> 4</option>
                                                                        <option class="inputP"> 5</option> 
                                                                    </select>
								</td>
              </tr>	
						</table>
					</div>

             <?php } }
              ?>
      </div>

      <button name="uploadBtn" class="enviarBtn" value="Actualizar">Actualizar Congreso</button> 

      <br> <br> <br> <br>
      <button name="uploadBtn" class="enviarBtn" value="Borrar" onclick="return confirm('¿Estás Seguro que deseas Eliminar este Congreso?');" >Borrar Congreso</button>
      
         </form>
     </div> </div>
     <br> <br> <br> <br>
     <div> <a  href="BusquedaCongr.php"  > <button > Regresar</button> </a> </div> 
    </div>
  </div>   
<div>
      

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
        <script type="text/javascript">
           function ico1(){
                document.getElementById('link').style.display = 'block';
                
            }
        </script>

<div>
  <?php
$message = '';
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Actualizar') {
    

    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
   

    if (isset($_POST["NombreC"]) && isset($_POST["Iden"]) && isset($_POST["NumeroC"]) && isset($_POST["CorreoC"])&& isset($_POST["InviI"]) && isset($_POST["InviF"])) {

      $NombreC = $_POST["NombreC"];
      $Identi = $_POST["Iden"];
      $NumeroC = $_POST["NumeroC"];
      $CorreoC = $_POST["CorreoC"];
      $InvitacionesI = $_POST["InviI"];
      $InvitacionesF = $_POST["InviF"];
      $CongresoI = $_POST["IniC"];
      $CongresoF = $_POST["FinC"];
      $PagoI = $_POST["PagI"];
      $PagoF = $_POST["PagF"];
      $ResumI = $_POST["ResuI"];
      $ResumF = $_POST["ResuF"];
      $EvalResI = $_POST["EvaRI"];
      $EvalResF = $_POST["EvaRF"];
      $RestEvaResI = $_POST["ResEvRI"];
      $RestEvaResF = $_POST["ResEvRF"];
      $CorResI = $_POST["CorRI"];
      $CorResF = $_POST["CorRF"];
      $ExtenI = $_POST["ExtI"];
      $ExtenF = $_POST["ExtF"];
      $NotObsExtI = $_POST["NotObExI"];
      $NotObsExtF = $_POST["NotObExF"];
      $RecExtenFinI = $_POST["ReExtFI"];
      $RecExtenFinF = $_POST["ReExtFF"];
      $VideoPonAcI = $_POST["VidPonAI"];
      $VideoPonAcF = $_POST["VidPonAF"];
      $ProgramEvent = $_POST["ProgEven"];
      $TallerI = $_POST["TallI"];
      $TallerF = $_POST["TallF"];
      $EnvioConstI = $_POST["EnvConsI"];
      $EnvioConstF = $_POST["EnvConsF"];
      $PublicMemor = $_POST["Pmemo"];
      $numid=$_POST["id"];

      $NumTotal = $_POST["NumeroTotalT"];
      $NumPon = $_POST["NumeroPonencia"];
      $NumCart = $_POST["NumeroCartel"];
      $NumTall = $_POST["NumeroTaller"];


        $query = ("UPDATE congreso SET email='$CorreoC',  fecha_inicio_envio_invitaciones_convocatoria='$InvitacionesI',  fecha_fin_envio_invitaciones_convocatoria='$InvitacionesF', fecha_inicio_recepcion_resumenes='$ResumI', fecha_fin_recepcion_resumenes='$ResumF', fecha_inicio_evaluacion_resumenes='$EvalResI', fecha_fin_evaluacion_resumenes='$EvalResF', fecha_inicio_resultado_evaluacion_resumenes='$RestEvaResI', fecha_fin_resultado_evaluacion_resumenes='$RestEvaResF', fecha_inicio_recepcion_correcion_resumenes='$CorResI', fecha_fin_recepcion_correcion_resumenes='$CorResF',  fecha_inicio_recepcion_extensos='$ExtenI',  fecha_fin_recepcion_extensos='$ExtenF', fecha_inicio_notificacion_observaciones_extensos='$NotObsExtI', fecha_fin_notificacion_observaciones_extensos='$NotObsExtF', fecha_inicio_recepcion_pagos='$PagoI',  fceha_fin_recepcion_pagos='$PagoF',  fecha_inicio_recepcion_extensos_finales='$RecExtenFinI',  fecha_fin_recepcion_extensos_finales='$RecExtenFinF',  fecha_inicio_recepcion_videos_ponencias_aceptadas='$VideoPonAcI',  fecha_fin_recepcion_videos_ponencias_aceptadas='$VideoPonAcF', fecha_publicacion_programa_evento='$ProgramEvent', fecha_inicio_congreso='$CongresoI', fecha_fin_congreso='$CongresoF', fecha_inicio_imparticion_talleres='$TallerI', fecha_fin_imparticion_talleres='$TallerF', fecha_inicio_envio_contancias='$EnvioConstI', fecha_fin_envio_contancias='$EnvioConstF', fecha_publicacion_memorias='$PublicMemor', nombre_congreso='$NombreC', numero_congreso='$NumeroC', identificador_numero_registro='$Identi', num_total_trabajos='$NumTotal',  num_ponencias='$NumPon', num_carteles='$NumCart',  num_talleres='$NumTall'
        WHERE id_congreso='$numid' ");
      $consulta = pg_query($conexion, $query);
      if($consulta){
      echo "<script>alert('Congreso Actualizado Exitosamente !!!'); 
       window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/BusquedaCongr.php');</script>";
      }
     }}
     $_SESSION['sms'] = $message;  ?>  
        </div>

        <div>
  <?php
$message = '';
if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Borrar') {

    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
   
    if (isset($_POST["id"]) && isset($_POST["CorreoC"]) ) {
    $numid=$_POST["id"];
    $CorreoC = $_POST["CorreoC"];

        $queryB = "DELETE FROM congreso WHERE email='$CorreoC' " ;
      $consultaB = pg_query($conexion, $queryB);
      if($consultaB){
      echo "<script>alert('Congreso Borrado !!!'); 
       window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/BusquedaCongr.php');</script>";
      } else{
        echo "<script>alert('Error de  Borrado, este Congreso está en Uso Actualmente !!!'); 
        window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/BusquedaCongr.php');</script>";
      }
     } }
     $_SESSION['sms'] = $message;  ?>  
        </div>
</body>
</html>