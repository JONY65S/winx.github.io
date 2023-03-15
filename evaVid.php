<?php
    include 'pgsqlConexion.php';
    include 'credentials.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Evaluación de Resumen</title>
    <meta charset="utf-8" http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
    <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
    <link rel="stylesheet" href="icon.css">
    <link rel="stylesheet" href="css/estilosmenuarriba.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styleEva.css">
    <script src="js/jquery.js"></script>
    <script type='text/javascript'> 
        function submitForm(){ 
            // Call submit() method
            document.getElementById('forms1').submit(); 
        } 
    </script>
</head>

<body>
    <div id="wrapper">
        <center><img src="img/banpru.jpg" class="banner"></center>
    </div>
    <div>
        <header>
            <input type="checkbox" id="btn-menu">
            <label for="btn-menu">
                <img src="img/menuicono11.png">
            </label>
            <nav class="menu" style="z-index: 1;">
               <ul>
                   <li><a href="indexSesion.php">Inicio</a></li>
                   <li><a href="memoriascarruselSesion.php">Memorias</a></li>
                   <li><a href="convocatoriaSesion.php">Convocatoria</a></li>
                   <li><a href="inscripcionYcostosSesion.php">Inscripción y Costos</a></li>
                   <li><a href="ComiteOrgSesion">Comité Organizador</a></li>
                   <li><a href="ComiteEvaSesion">Comité Evaluador</a></li>
                   <li><a href="destroySesion.php"><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Cerrar Sesión</a></li>
               </ul>  
            </nav>
        </header>
    </div>
    <div>
        <header>
            <input type="checkbox" id="btn-menu2">
            <label for="btn-menu2">
                <img src="img/icono_informacion2.png">
            </label>
            <nav class="menu2" style="z-index: 2;">
                <ul>
                    <li><a href="#"><img class="alineadoicono" src="img/icono_informacion2.png"></a></li>
                    <li><a href="ponencias_infoSesion.php">Ponencias</a></li>
                    <li><a href="carteles_infoSesion.php">Carteles</a></li>
                    <li><a href="talleres_infoSesion.php">Talleres</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div class="contenedorregistroI">
        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <div class="col-lg-6 mx-auto justify-content: center;">
                <p class="Tema">Video a evaluar</p>
                <form name="first" method="post" id='forms1' action="evaVidF.php">
                    <p class="temaCentral">Seleccione un trabajo a evaluar.</p>
                    <div class="datosP">
                        <div class="D1">
                            <table>
                                <tr>
                                    <td class="C4">
                                        <p align="left">Trabajo: 
                                            <select name="workUser" onchange='submitForm();'>
                                                <option>Seleccione un trabajo</option>
                                                <?php
                                                $query=("select * from  evaluacion, evaluacion_trabajos, trabajos,ponencia where evaluacion.id_evaluacion=evaluacion_trabajos.evaluacion_id and evaluacion_trabajos.trabajos_id=trabajos.id_trabajo and trabajos.id_trabajo=ponencia.id_trabajos and evaluacion_trabajos.estado='POR EVALUAR' and video_url LIKE '%' and evaluacion.usuario_id='$varId'");
                                                $result=pg_query($conexion, $query);
                                                while ($row=pg_fetch_array($result)){
                                                echo '<option value="'.$row['trabajos_id'].'">'.$row['titulo'].'</option>';   
                                                }
                                                $workUserId = htmlspecialchars($_POST['workUser']);
                                                ?>
                                            </select>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </form>  
                <br><br>                                
                <div>
                    <center>
                        <button type="submit" onclick="window.location.href = 'evaVM.php'">Atras</button>
                        <button type="submit" onclick="window.location.href = 'menu.php'">Regresar al Menú</button>
                    </center>
                </div>
            </div>
        </div>    
        
    </div>
</body>

<div class="containerCredi">
    <footer class="py-5">
        <div class="row gx-0">
            <div class="col-6 col-md-2 mb-3">
                <ul class="nav flex-column">
                    <li class="nav-item mb-2" class="nav-link p-0 text-muted">
                        <img src="img/escudo-blanco.png" alt="Photo" style="width:65%;">
                    </li>
                </ul>
            </div>
            <div class="col-6 col-md-2 mb-3">
                <h5 style="color: #FFFFFF;">CONTACTO</h5>
                <ul class="nav flex-column">
                    <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted ">SEDE</li>
                    <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted ">Facultad de Estudios Superiores Cuautitlán</li>
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
                    <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted">(55) 56 23 18 86 / (55) 56 23 18 90</li>
                    <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted">Para mayores informes o dudas comunicarse al Departamento de Matemáticas Edificio A8 Campo 4.</li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<div class="containerCredi">
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li style="color: #FFFFFF;" class="nav-item" class="nav-link px-2 text-muted">Sitio Web administrado por: Departamento de Matemáticas.</li>
            <li style="color: #FFFFFF;" class="nav-item" class="nav-link px-2 text-muted">Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se mutile, se cite la fuente
                            completa y su dirección electrónica.</li>
            <li style="color: #FFFFFF;" class="nav-item" class="nav-link px-2 text-muted">De otra forma requiere permiso previo por escrito de la institución.</li>
        </ul>
        <center>
            <p style="color: #FFFFFF;">&copy; <?php echo date('Y'); ?> Hecho en México, todos los derechos reservados.</p>
        </center>
    </footer>
</div>
</html> 