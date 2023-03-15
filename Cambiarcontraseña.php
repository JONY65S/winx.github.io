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
        <title>Cambiar contraseña</title>
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
                                        
          <script type="text/javascript" src="js/mostrar.js"></script>
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
      
    <p class="Tema">Cambiar contraseña</p>

    <!--DATOS-->
    <div class="datosP" >
      <form action="#" method="POST" >
      <div class="D1">
        <table>
          <center>
            <tr>
             <p class="temaSec">Actualiza tu contraseña. Introducir sus datos correctos, ya que con ellos podra acceder futuramente al sistema.</p>
            </tr>
          </center>
        </table>
      </div>
      
      <p class="temaCentral">Contraseña actual</p>
				

				<div class="datosP">
        <div class="D1">
					<center>
        <tr>
          <td class="C1">
            <label for="Password">Contraseña actual:</label>
          </td>
          <td class="C2">
            <input class="inputP" id="passwordV1" type="password" name="contraseña1" placeholder="Mínimo 8 y Máximo 10 Caracteres" required minlength="8" maxlength="10" />
            <img src="img/icono_ojo.png" id=M1 name="Q1" type="button" width:="22" height="20" onclick="MostrarP1()">
          </td>
        </tr>
      </center>
		
    </div></div>
  <p class="temaCentral">Contraseña nueva</p>   
    <div class="datosP">
   
    <div class="D1">
      <td class="C1">      	<center>
        <tr>
          <td class="C1">
            <label for="Password">Nueva Contraseña:</label>
          </td>
          <td class="C2">
            <input class="inputP" id="passwordV3" type="password" name="contraseña3" placeholder="Mínimo 8 y Máximo 10 Caracteres" required minlength="8" maxlength="10" />
            <img src="img/icono_ojo.png" id=M3 name="Q3" type="button" width:="22" height="20" onclick="MostrarP3()">
          </td>
        </tr>
      </center>

      <center>
        <tr>
          <td class="C1">
            <label for="SPassword">Repetir Contraseña:</label>
          </td>
          <td class="C2">
            <input class="inputP" id="passwordV2" type="password" name="contraseña2" placeholder="Mínimo 8 y Máximo 10 Caracteres" required minlength="8" maxlength="10" />
            <img src="img/icono_ojo.png" id=M2 name="Q2" type="button" width:="22" height="20" onclick="MostrarP2()">
          </td>
        </tr>
      </center></div></div>
<center>
              <button name="enviarBtn"class="enviarBtn" value="Cambiar contraseña">Cambiar contraseña</button></center>
      </form> </div>
       
      <br> <br>
     <a  href="menu.php"  > <button >Regresar</button> </a>
       </div>
  </div>
</div>
</div>

<div>
    <?php 
         // require './envarEmail.php'; 
 $message = '';
     if (isset($_POST['enviarBtn']) && $_POST['enviarBtn'] == 'Cambiar contraseña') {
$idc2= $varId ;

    $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
    $enviarCorreo = false;
    if (isset($_POST["contraseña1"])&& isset($_POST["contraseña2"])&& isset($_POST["contraseña3"])) {
       
      $contraseña1 = $_POST["contraseña1"];
      $contraseña11 = hash('sha512', $contraseña1);

      $contraseña3 = $_POST["contraseña3"];
      $contraseña33 = hash('sha512', $contraseña3);
      $contraseña2 = $_POST["contraseña2"];
      $contraseña22 = hash('sha512', $contraseña2);

       $query1i = ("Select * from usuario where id_usuario='$idc2'");
                  $conn1i = pg_query($conexion, $query1i);
                  if (!$conn1i) {
                    die(pg_last_error($conexion));
                  }

                  if (pg_num_rows($conn1i) > 0) {
                       while ($rowData = pg_fetch_array($conn1i)) {
                        $Correo = $rowData["usuario"];
                      $contra = $rowData["contraseña"];
                      }}
    if ($contra == $contraseña11){
      if($contraseña33 == $contraseña22){

        $query = ("update usuario set contraseña='$contraseña33' where id_usuario='$idc2' ");
                  $consulta1 = pg_query($conexion, $query);
                //  $enviarCorreo = true;
                  if (!$consulta1) {
                    echo "<script languaje='JavaScript'> 
                    alert('Intenta nuevamente!!');
                    </script>";return false;
                  }
                  else{
               
//Importar función
require './enviarEmail.php';

//Envio de correo
$contraseñaSinHash = $_POST["contraseña3"];
$email = $varEmail;
$subject = "Cambio de clave";

//Cuerpo del correo 
$body = "Congreso Internacional sobre la Enseñanza y Aplicación de las Matemáticas 
Facultad de Estudios Superiores Cuautitlán

Su contraseña fue cambiada con éxito, la clave es: {$contraseñaSinHash}";

sendEmail($email, $subject, $body);
                            echo "<script languaje='JavaScript'> 
                    alert('Los datos se actualizaron correctamente');
                    window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/WinxCongreso/menu.php');
                    </script>";
                  }
               
      }else{
           echo "<script languaje='JavaScript'> 
                    alert('Las contraseñas no coinciden. Intenta nuevamente!!');
                    </script>";return false;

      }}else{
                echo "<script languaje='JavaScript'> 
                    alert('La contraseña antigua no es correcta. Intenta nuevamente!!');
                    </script>";return false;

      }

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
   function MostrarP3() {
        var tip = document.getElementById("passwordV3");

        if (tip.type == 'password') {
          tip.type = 'text';
        }else{
          tip.type = 'password';
        }
      }
      </script>
    
</body>
</html>