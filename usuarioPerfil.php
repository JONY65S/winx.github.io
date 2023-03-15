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
        <title>Actualizar Usuario</title>
       <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="icon.css">
           <link rel="stylesheet" href="css/estilosmenuarriba.css">
           <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">        
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
        background:#2b507c;
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
        border-radius: 3em;
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
        .temaCentral{
          font-size: 13px;
          
        }
      }




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
 
<div class="ContenedorPrincipal"> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
   
    <div class="col-lg-6 mx-auto">
      
       <!-- Aqui va el codigo de cada uno-->
      
    <p class="Tema">Actualizar Perfil</p>

    <!--DATOS-->
    <div class="datosP" >
      <form action="#" method="POST" >
      <div class="D1">
        <table>
          <center>
            <tr>
             <p class="temaSec">Actualiza tu perfil. Introducir sus datos correctos, ya que serán utilizados para las contancias.</p>
            </tr>
          </center>
        </table>
      </div>
      
      <p class="temaCentral">Datos personales</p>
				

				<div class="datosP">
        <div class="D1">
						<!--******DATOS PERSONALES*******-->
					            <?php 
                $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
                $idc2= $varId ;
                
                   $query4 = ("Select * from usuario where id_usuario='$idc2'");
                  $conn4 = pg_query($conexion, $query4);
                  if (!$conn4) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conn4) > 0) {
                       while ($rowData = pg_fetch_array($conn4)) {
                        $nom = $rowData["nombre_usuario"];
                        $ap = $rowData["apellido_usuario"];
                        $paa = $rowData["pais_usuario"];
                        $idc1 = $rowData["usuario"];
    
                        $query5 = ("Select * from contacto where email='$idc1'");
                  $conn5 = pg_query($conexion, $query5);
                  if (!$conn5) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conn5) > 0) {
                       while ($rowData5 = pg_fetch_array($conn5)) {
                        $cel = $rowData5["telefono"];
                      
                         ?>	
						<table>
							
							<tr>
								<td class="C1">
									<label for="Name">Nombre (s):</label>
								</td>
                    
								<td class="C2">
                                     
									<input class="inputP" style="text-transform:uppercase;" type="text" name="nombre" value=" <?php echo $nom  ?>">
								</td>
                               
							</tr>

							<tr>
								<td class="C1">
									<label for="Last">Apellido (s):</label>
								</td>
								<td class="C2">
									<input class="inputP" style="text-transform:uppercase;" type="text" name="apellido" value="<?php echo $ap  ?>">
								</td>
							</tr>

							<tr>
								<td class="C1">
									<label for="Emails">Correo:</label>
								</td>
								<td class="C2">
									<input class="inputP" type="Email" name="Correo" value="<?php echo $idc1  ?>" readonly>
								</td>
							</tr>

							<tr>
								<td class="C1">
									<label for="Country">País:</label>
								</td>
                                                                <td>
                                                                <select border-radius: 9px; input class="inputP" name ="pais">
                                                
                                                            <option value="<?php echo $paa  ?>"><?php echo $paa  ?></option>
                                                                   <option value="Afganistán">Afganistán</option>
                                                                   <option value="Albania">Albania</option>
                                                                   <option value="Alemania">Alemania</option>
                                                                   <option value="Algeria">Algeria</option>
                                                                   <option value="Andorra">Andorra</option>
                                                                   <option value="Angola">Angola</option>
                                                                   <option value="Anguila">Anguila</option>
                                                                   <option value="Antártida">Antártida</option>
                                                                   <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                                                   <option value="Antillas Neerlandesas">Antillas Neerlandesas</option>
                                                                   <option value="Arabia Saudita">Arabia Saudita</option>
                                                                   <option value="Argentina">Argentina</option>
                                                                   <option value="Armenia">Armenia</option>
                                                                   <option value="Aruba">Aruba</option>
                                                                   <option value="Australia">Australia</option> 
                                                                   <option value="Austria">Austria</option>
                                                                   <option value="Azerbayán">Azerbayán</option>
                                                                   <option value="Bélgica">Bélgica</option>
                                                                   <option value="Bahamas">Bahamas</option>
                                                                   <option value="Bahrein">Bahrein</option>
                                                                   <option value="Bangladesh">Bangladesh</option>
                                                                   <option value="Barbados">Barbados</option>
                                                                   <option value="Belice">Belice</option>
                                                                   <option value="Benín">Benín</option>
                                                                   <option value="Bhután">Bhután</option>
                                                                   <option value="Bielorrusia">Bielorrusia</option>
                                                                   <option value="Birmania">Birmania</option>
                                                                   <option value="Bolivia">Bolivia</option>
                                                                   <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                                                                   <option value="Botsuana">Botsuana</option>
                                                                   <option value="Brasil">Brasil</option>
                                                                   <option value="Brunéi">Brunéi</option>
                                                                   <option value="Bulgaria">Bulgaria</option>
                                                                   <option value="Burkina Faso">Burkina Faso</option>
                                                                   <option value="Burundi">Burundi</option>
                                                                   <option value="Cabo Verde">Cabo Verde</option>
                                                                   <option value="Camboya">Camboya</option>
                                                                   <option value="Camerún">Camerún</option>
                                                                   <option value="Canadá">Canadá</option>
                                                                   <option value="Chad">Chad</option>
                                                                   <option value="Chile">Chile</option>
                                                                   <option value="China">China</option>
                                                                   <option value="Chipre">Chipre</option>
                                                                   <option value="Ciudad del Vaticano">Ciudad del Vaticano</option>
                                                                   <option value="Colombia">Colombia</option>
                                                                   <option value="Comoras">Comoras</option>
                                                                   <option value="Congo">Congo</option>
                                                                   <option value="Corea del Norte">Corea del Norte</option>
                                                                   <option value="Corea del Sur">Corea del Sur</option>
                                                                   <option value="Costa de Marfil">Costa de Marfil</option>
                                                                   <option value="Costa Rica">Costa Rica</option>
                                                                   <option value="Croacia">Croacia</option>
                                                                   <option value="Cuba">Cuba</option>
                                                                   <option value="Dinamarca">Dinamarca</option>
                                                                   <option value="Dominica">Dominica</option>
                                                                   <option value="Ecuador">Ecuador</option>
                                                                   <option value="Egipto">Egipto</option>
                                                                   <option value="El Salvador">El Salvador</option>
                                                                   <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                                                                   <option value="Eritrea">Eritrea</option>
                                                                   <option value="Eslovaquia">Eslovaquia</option>
                                                                   <option value="Eslovenia">Eslovenia</option>
                                                                   <option value="España">España</option>
                                                                   <option value="Estados Unidos de América">Estados Unidos de América</option>
                                                                   <option value="Estonia">Estonia</option>
                                                                   <option value="Etiopía">Etiopía</option>
                                                                   <option value="Filipinas">Filipinas</option>
                                                                   <option value="Finlandia">Finlandia</option>
                                                                   <option value="Fiyi">Fiyi</option>
                                                                   <option value="Francia">Francia</option>
                                                                   <option value="Gabón">Gabón</option>
                                                                   <option value="Gambia">Gambia</option>
                                                                   <option value="Georgia">Georgia</option>
                                                                   <option value="Ghana">Ghana</option>
                                                                   <option value="Gibraltar">Gibraltar</option>
                                                                   <option value="Granada">Granada</option>
                                                                   <option value="Grecia">Grecia</option>
                                                                   <option value="Groenlandia">Groenlandia</option>
                                                                   <option value="Guadalupe">Guadalupe</option>
                                                                   <option value="Guam">Guam</option>
                                                                   <option value="Guatemala">Guatemala</option>
                                                                   <option value="Guayana Francesa">Guayana Francesa</option>
                                                                   <option value="Guernsey">Guernsey</option>
                                                                   <option value="Guinea">Guinea</option>
                                                                   <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                                                   <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                                   <option value="Guyana">Guyana</option>
                                                                   <option value="Haití">Haití</option>
                                                                   <option value="Honduras">Honduras</option>
                                                                   <option value="Hong kong">Hong kong</option>
                                                                   <option value="Hungría">Hungría</option>
                                                                   <option value="India">India</option>
                                                                   <option value="Indonesia">Indonesia</option>
                                                                   <option value="Irán">Irán</option>
                                                                   <option value="Irak">Irak</option>
                                                                   <option value="Irlanda">Irlanda</option>
                                                                   <option value="Isla Bouvet">Isla Bouvet</option>
                                                                   <option value="Isla de Man">Isla de Man</option>
                                                                   <option value="Isla de Navidad">Isla de Navidad</option>
                                                                   <option value="Isla Norfolk">Isla Norfolk</option>
                                                                   <option value="Islandia">Islandia</option>
                                                                   <option value="Islas Bermudas">Islas Bermudas</option>
                                                                   <option value="Islas Caimán">Islas Caimán</option>
                                                                   <option value="Islas Cocos (Keeling)">Islas Cocos (Keeling)</option>
                                                                   <option value="Islas Cook">Islas Cook</option>
                                                                   <option value="Islas de Åland">Islas de Åland</option>
                                                                   <option value="Islas Feroe">Islas Feroe</option>
                                                                   <option value="Islas Georgias del Sur y Sandwich del Sur">Islas Georgias del Sur y Sandwich del Sur</option>
                                                                   <option value="Islas Heard y McDonald">Islas Heard y McDonald</option>
                                                                   <option value="Islas Maldivas">Islas Maldivas</option>
                                                                   <option value="Islas Malvinas">Islas Malvinas</option>
                                                                   <option value="Islas Marianas del Norte">Islas Marianas del Norte</option>
                                                                   <option value="Islas Marshall">Islas Marshall</option>
                                                                   <option value="Islas Pitcairn">Islas Pitcairn</option>
                                                                   <option value="Islas Salomón">Islas Salomón</option>
                                                                   <option value="Islas Turcas y Caicos">Islas Turcas y Caicos</option>
                                                                   <option value="Islas Ultramarinas Menores de Estados Unidos">Islas Ultramarinas Menores de Estados Unidos</option>
                                                                   <option value="Islas Vírgenes Británicas">Islas Vírgenes Británicas</option>
                                                                   <option value="Islas Vírgenes de los Estados Unidos">Islas Vírgenes de los Estados Unidos</option>
                                                                   <option value="Israel">Israel</option>
                                                                   <option value="Italia">Italia</option>
                                                                   <option value="Jamaica">Jamaica</option>
                                                                   <option value="Japón">Japón</option>
                                                                   <option value="Jersey">Jersey</option>
                                                                   <option value="Jordania">Jordania</option>
                                                                   <option value="Kazajistán">Kazajistán</option>
                                                                   <option value="Kenia">Kenia</option>
                                                                   <option value="Kirgizstán">Kirgizstán</option>
                                                                   <option value="Kiribati">Kiribati</option>
                                                                   <option value="Kuwait">Kuwait</option>
                                                                   <option value="Líbano">Líbano</option>
                                                                   <option value="Laos">Laos</option>
                                                                   <option value="Lesoto">Lesoto</option>
                                                                   <option value="Letonia">Letonia</option>
                                                                   <option value="Liberia">Liberia</option>
                                                                   <option value="Libia">Libia</option>
                                                                   <option value="Liechtenstein">Liechtenstein</option>
                                                                   <option value="Lituania">Lituania</option>
                                                                   <option value="Luxemburgo">Luxemburgo</option>
                                                                   <option value="México">México</option>
                                                                   <option value="Mónaco">Mónaco</option>
                                                                   <option value="Macao">Macao</option>
                                                                   <option value="Macedônia">Macedônia</option>
                                                                   <option value="Madagascar">Madagascar</option>
                                                                   <option value="Malasia">Malasia</option>
                                                                   <option value="Malawi">Malawi</option>
                                                                   <option value="Mali">Mali</option>
                                                                   <option value="Malta">Malta</option>
                                                                   <option value="Marruecos">Marruecos</option>
                                                                   <option value="Martinica">Martinica</option>
                                                                   <option value="Mauricio">Mauricio</option>
                                                                   <option value="Mauritania">Mauritania</option>
                                                                   <option value="Mayotte">Mayotte</option>
                                                                   <option value="Micronesia">Micronesia</option>
                                                                   <option value="Moldavia">Moldavia</option>
                                                                   <option value="Mongolia">Mongolia</option>
                                                                   <option value="Montenegro">Montenegro</option>
                                                                   <option value="Montserrat">Montserrat</option>
                                                                   <option value="Mozambique">Mozambique</option>
                                                                   <option value="Namibia">Namibia</option>
                                                                   <option value="Nauru">Nauru</option>
                                                                   <option value="Nepal">Nepal</option>
                                                                   <option value="Nicaragua">Nicaragua</option>
                                                                   <option value="Niger">Niger</option>
                                                                   <option value="Nigeria">Nigeria</option>
                                                                   <option value="Niue">Niue</option>
                                                                   <option value="Noruega">Noruega</option>
                                                                   <option value="Nueva Caledonia">Nueva Caledonia</option>
                                                                   <option value="Nueva Zelanda">Nueva Zelanda</option>
                                                                   <option value="Omán">Omán</option>
                                                                   <option value="Países Bajos">Países Bajos</option>
                                                                   <option value="Pakistán">Pakistán</option>
                                                                   <option value="Palau">Palau</option>
                                                                   <option value="Palestina">Palestina</option>
                                                                   <option value="Panamá">Panamá</option>
                                                                   <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                                                                   <option value="Paraguay">Paraguay</option>
                                                                   <option value="Perú">Perú</option>
                                                                   <option value="Polinesia Francesa">Polinesia Francesa</option>
                                                                   <option value="Polonia">Polonia</option>
                                                                   <option value="Portugal">Portugal</option>
                                                                   <option value="Puerto Rico">Puerto Rico</option>
                                                                   <option value="Qatar">Qatar</option>
                                                                   <option value="Reino Unido">Reino Unido</option>
                                                                   <option value="República Centroafricana">República Centroafricana</option>
                                                                   <option value="República Checa">República Checa</option>
                                                                   <option value="República Dominicana">República Dominicana</option>
                                                                   <option value="Reunión">Reunión</option>
                                                                   <option value="Ruanda">Ruanda</option>
                                                                   <option value="Rumanía">Rumanía</option>
                                                                   <option value="Rusia">Rusia</option>
                                                                   <option value="Sahara Occidental">Sahara Occidental</option>
                                                                   <option value="Samoa">Samoa</option>
                                                                   <option value="Samoa Americana">Samoa Americana</option>
                                                                   <option value="San Bartolomé">San Bartolomé</option>
                                                                   <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                                                                   <option value="San Marino">San Marino</option>
                                                                   <option value="San Martín (Francia)">San Martín (Francia)</option>
                                                                   <option value="San Pedro y Miquelón">San Pedro y Miquelón</option>
                                                                   <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                                                                   <option value="Santa Elena">Santa Elena</option>
                                                                   <option value="Santa Lucía">Santa Lucía</option>
                                                                   <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                                                                   <option value="Senegal">Senegal</option>
                                                                   <option value="Serbia">Serbia</option>
                                                                   <option value="Seychelles">Seychelles</option>
                                                                   <option value="Sierra Leona">Sierra Leona</option>
                                                                   <option value="Singapur">Singapur</option>
                                                                   <option value="Siria">Siria</option>
                                                                   <option value="Somalia">Somalia</option>
                                                                   <option value="Sri lanka">Sri lanka</option>
                                                                   <option value="Sudáfrica">Sudáfrica</option>
                                                                   <option value="Sudán">Sudán</option>
                                                                   <option value="Suecia">Suecia</option>
                                                                   <option value="Suiza">Suiza</option>
                                                                   <option value="Surinám">Surinám</option>
                                                                   <option value="Svalbard y Jan Mayen">Svalbard y Jan Mayen</option>
                                                                   <option value="Swazilandia">Swazilandia</option>
                                                                   <option value="Tadjikistán">Tadjikistán</option>
                                                                   <option value="Tailandia">Tailandia</option>
                                                                   <option value="Taiwán">Taiwán</option>
                                                                   <option value="Tanzania">Tanzania</option>
                                                                   <option value="Territorio Británico del Océano Índico">Territorio Británico del Océano Índico</option>
                                                                   <option value="Territorios Australes y Antárticas Franceses">Territorios Australes y Antárticas Franceses</option>
                                                                   <option value="Timor Oriental">Timor Oriental</option>
                                                                   <option value="Togo">Togo</option>
                                                                   <option value="Tokelau">Tokelau</option>
                                                                   <option value="Tonga">Tonga</option>
                                                                   <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                                                   <option value="Tunez">Tunez</option>
                                                                   <option value="Turkmenistán">Turkmenistán</option>
                                                                   <option value="Turquía">Turquía</option>
                                                                   <option value="Tuvalu">Tuvalu</option>
                                                                   <option value="Ucrania">Ucrania</option>
                                                                   <option value="Uganda">Uganda</option>
                                                                   <option value="Uruguay">Uruguay</option>
                                                                   <option value="Uzbekistán">Uzbekistán</option>
                                                                   <option value="Vanuatu">Vanuatu</option>
                                                                   <option value="Venezuela">Venezuela</option>
                                                                   <option value="Vietnam">Vietnam</option>
                                                                   <option value="Wallis y Futuna">Wallis y Futuna</option>
                                                                   <option value="Yemen">Yemen</option>
                                                                   <option value="Yibuti">Yibuti</option>
                                                                   <option value="Zambia">Zambia</option>
                                                                   <option value="Zimbabue">Zimbabue</option>
                                                
                                                                </select>
							</tr>

							<tr>
                                <td class="C1">
                                    <label  for="Phone">Teléfono:</label>
                                </td>
                                <td class="C2">
                                 <input id="phone" class="inputP" type="tel" name="phone" required pattern="+[0-9]{14}" maxlength="14" onkeypress="numfinal()"value="<?php echo $cel  ?>"> 
                                
                                
                                                                
                                                                </td>
                            </tr>

							
											
						</table>
	
					</div> 

				</div> <!---Fin de datos personales--->

       
        <p class="temaCentral">Trayectoria Académica</p>

<div class="datosP">

  <center>
    <div class="D1">
      <td class="C1">
        <label for="GradoA">Grado Acádemico:</label>
      </td>
      <select name="grado" class="inputP" required />


<?php
 $queryt1 = ("Select * from trayectoria where usuario_id='$idc2'");
                  $connt1 = pg_query($conexion, $queryt1);
                  if (!$connt1) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connt1) > 0) {
                       while ($rowDatat1 = pg_fetch_array($connt1)) {
                        $idt1 = $rowDatat1["id_trayectoria"];
                      
                        $queryt2 = ("Select * from grado_trayectoria where trayectoria_id='$idt1'");
                  $connt2 = pg_query($conexion, $queryt2);
                  if (!$connt2) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connt2) > 0) {
                       while ($rowDatat2 = pg_fetch_array($connt2)) {
                        $idg1 = $rowDatat2["grado_id"];
                           
                             $queryt3 = ("Select * from grado_academico where id_grado='$idg1'");
                             $connt3 = pg_query($conexion, $queryt3);
                             if (!$connt3) {
                                  die(pg_error($conexion));
                              }
 
                                   if (pg_num_rows($connt3) > 0) {
                               while ($rowDatat3 = pg_fetch_array($connt3)) {
                       
                        ?>

  
    <option value="<?php echo $rowDatat3["titulo"] ?>"><?php echo $rowDatat3["titulo"] ?></option>  

                        <?php

                    }}  }}

                      }}
 ?>


        <option value="Estudiante">Estudiante</option>
        <option value="Licenciatura">Licenciatura</option>
        <option value="Maestría">Maestría</option>
        <option value="Doctorado">Doctorado</option>



      </select>

    </div></div>
  </center> <!---Fin de grado academico-->
   
	<p class="temaCentral">Trayectoria Laboral</p>

				<div class="datosP">

				<div class="D1">

    <table>
      <center>
        <tr>
          <td class="C1">
            <label for="Institucion">Institución:</label>
          </td>

          <td>
            <select name="institucion" class="inputP" required value=""/>
  
   <?php 


     $queryi = ("Select * from trayectoria_institucion where trayectoria_id='$idt1'");
            $conni = pg_query($conexion, $queryi);

            if (!$conni) {
              die(pg_error($conexion));
            }

            if (pg_num_rows($conni) > 0) {
              while ($rowDatai = pg_fetch_array($conni)) {
          $idi1 = $rowDatai["institucion_id"];
                      
                       $queryi2 = ("Select * from institucion where id_institucion='$idi1'");
            $conni2 = pg_query($conexion, $queryi2);

            if (!$conni2) {
              die(pg_error($conexion));
            }

            if (pg_num_rows($conni2) > 0) {
              while ($rowDatai2 = pg_fetch_array($conni2)) {
       
 ?>

  
    <option value="<?php echo $rowDatai2["nombre_institucion"] ?>"><?php echo $rowDatai2["nombre_institucion"] ?></option>  

                        <?php


              }}}}
      



      $query1 = ("Select * from institucion");
            $conn1 = pg_query($conexion, $query1);

            if (!$conn1) {
              die(pg_error($conexion));
            }

            if (pg_num_rows($conn1) > 0) {
              while ($rowData = pg_fetch_array($conn1)) {
               ?>   
    <option value="<?php echo $rowData["nombre_institucion"] ?>"><?php echo $rowData["nombre_institucion"] ?></option>  
               
     <?php } }  ?>
              

            </select>
          </td>

        </tr>
      </center>
    </table>

  </div><?php }}}}

                         ?>
				</div>  <!---Fin de trayectoria laboral---->

 <button name="enviarBtn"class="enviarBtn" value="Guardar cambios">Guardar cambios</button>
      </form> </div>
        <br>
        <br>
        <br>
        <br>  
        <a  href="Cambiarcontraseña.php"  > <button >Cambiar contraseña</button> </a>
      <br> <br>
        <br>
        <br>
     <a  href="menu.php"  > <button >Regresar</button> </a>
       </div>
  </div>
</div>
       

       <br>
       <br>

       <!---Creditos--->
</div>

<div>
    <?php 
         
 $message = '';
     if (isset($_POST['enviarBtn']) && $_POST['enviarBtn'] == 'Guardar cambios') {

    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
 if (isset($_POST["nombre"])&& isset($_POST["apellido"])&& isset($_POST["Correo"]) && isset($_POST["pais"])&& isset($_POST["phone"])&& isset($_POST["grado"]) && isset($_POST["institucion"])) {
          $nombre1 = $_POST["nombre"];
      $nombre = strtoupper($nombre1);
      $apellido1 = $_POST["apellido"];
      $apellido = strtoupper($apellido1);
       $Correo = $_POST["Correo"];
      $pais = $_POST["pais"];

      $phone = $_POST["phone"];
      $grado = $_POST["grado"];
      $institucion = $_POST["institucion"];

             $query = ("update usuario set nombre_usuario='$nombre', apellido_usuario='$apellido', pais_usuario='$pais' where usuario='$Correo' ");
                  $consulta1 = pg_query($conexion, $query);

           $querytel = ("update contacto set telefono='$phone' where usuario_id='$idc2' ");
                  $consultatel = pg_query($conexion, $querytel);

                   if ($grado!="Estudiante") {
                   //si no es estudiante, dar rol ponente
               
                     $queryp8 = ("Select * from permisos where permiso_id_rol='1' and usuario_id='$idc2'");
                  $connp8 = pg_query($conexion, $queryp8);

                  if (!$connp8) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connp8) > 0) { // si existe ese usuario con ese rol
                    while ($rowDatap8 = pg_fetch_array($connp8)) {

                       //obtiene el estado del permiso
                        $estado2 = intval($rowDatap8["estado"]);}

                        if($estado2=='t'){
                            
                        }else{
                                   $queryp6 = ("update permisos set estado='t' where permiso_id_rol= '1' and usuario_id='$idc2'");
                  $connp6 = pg_query($conexion, $queryp6);
               if (!$connp6) {
                    die(pg_error($conexion));
                  }
                        }

                          
                      }else{
                        $query52p=("INSERT INTO permisos (permiso_id_rol, usuario_id, estado) VALUES('1','$idc2','t')");
                         $consulta52p=pg_query($conexion,$query52p);
                         if(!$consulta52p){
                                 die(pg_error($conexion));
                                    }
                      }




                  }else{
                     //si es estudiante, quitar ponente
                          $queryp8 = ("Select * from permisos where permiso_id_rol='1' and usuario_id='$idc2'");
                  $connp8 = pg_query($conexion, $queryp8);

                  if (!$connp8) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($connp8) > 0) { // si existe ese usuario con ese rol
                    while ($rowDatap8 = pg_fetch_array($connp8)) {

                       //obtiene el estado del permiso
                        $estado2 = $rowDatap8["estado"];}

                        if($estado2=='t'){
                             $queryp6 = ("update permisos set estado='f' where permiso_id_rol= '1' and usuario_id='$idc2'");
                  $connp6 = pg_query($conexion, $queryp6);
               if (!$connp6) {
                    die(pg_error($conexion));
                            }
                                          } 
                            
                      }      

                  } 




             $query1g = ("Select * from grado_academico where titulo='$grado'");
                  $conn1g = pg_query($conexion, $query1g);
                  if (!$conn1g) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conn1g) > 0) {
                       while ($rowData = pg_fetch_array($conn1g)) {
                        $idgg = $rowData["id_grado"];}}


                   $query2 = ("update grado_trayectoria set grado_id='$idgg' where trayectoria_id='$idc2' ");
                  $consulta2 = pg_query($conexion, $query2);




             $query1i = ("Select * from institucion where nombre_institucion='$institucion'");
                  $conn1i = pg_query($conexion, $query1i);
                  if (!$conn1i) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conn1i) > 0) {
                       while ($rowData = pg_fetch_array($conn1i)) {
                        $idii = $rowData["id_institucion"];}}

                         $query3 = ("update trayectoria_institucion set institucion_id='$idii' where trayectoria_id='$idc2' ");
                  $consulta3 = pg_query($conexion, $query3);


                  echo "<script languaje='JavaScript'> 
                    alert('Los datos de actualizaron correctamente');
                    window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/menu.php');
                    </script>";
}}
?>

</div>

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
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
         <script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
       preferredCountries: ["mx"],
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js", autoHideDialCode:false,
    nationalMode: false } );
      </script>
    
</body>
</html>