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
        <title>Modificar Rol</title>
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
      <!--<form  method="post"> -->
    <p class="Tema">Modificar Rol</p>  <form action="#" method="POST" >
<div class="D1"> 
     <?php
 $conexion = pg_connect("host=localhost dbname=congresowinx user=congresowinx password=W1nxC0ngr3s032511");
$id = $_GET['id']; 
$id2 = $_GET['id2'];
        $id_p= $id2;
                     $query2 = ("Select * from usuario where id_usuario= '$id' ");
                  $conn2 = pg_query($conexion, $query2);

                  if (!$conn2) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conn2) > 0) {
                    while ($rowData2 = pg_fetch_array($conn2)) {
                      ?> <table>
                       <tr>
            <td class="C2">
          <input class="inputNombreC" type="text" name="nombr" value="<?php echo $rowData2["usuario"] ?>" readonly> </td>  </tr> 
          <?php } } 

          $query3 = ("Select * from rol where id_rol= '$id_p' ");
                  $conn3 = pg_query($conexion, $query3);

                  if (!$conn2) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conn3) > 0) {
                    while ($rowData3 = pg_fetch_array($conn3)) {
                      ?>
          <tr>
          <td class="C2">
          
        <select name="roll" class="inputNombreC" required>

                    <option ><?php echo $rowData3["descripcion"] ?></option>
                   <?php 
           
            $query4 = ("Select * from rol");
                  $conn4 = pg_query($conexion, $query4);

                  if (!$conn4) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conn4) > 0) {
                    while ($rowData4 = pg_fetch_array($conn4)) {
                     ?>   
          <option><?php echo $rowData4["descripcion"] ?></option>  
                     
          <?php } }  }}  ?>

                  </select>
        </td>

          
                                                                
              </tr> 
            <!-- estado -->



          <?php 
          $query6 = ("Select * from permisos where permiso_id_rol= '$id2' and usuario_id='$id' ");
                  $conn6 = pg_query($conexion, $query6);

                  if (!$conn6) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conn6) > 0) {
                    while ($rowData6 = pg_fetch_array($conn6)) {
                      $estb =$rowData6["estado"];
                      ?>
          <tr>
          <td class="C2">
          
        <select name="est" class="inputNombreC" required>
                    <?php if($estb == 't'){
                         ?> <option >Activo</option>
                         <option >Inactivo</option> <?php
                    }else{

                       ?> <option >Inactivo</option>
                       <option >Activo</option> <?php
                    } } } ?>

                  </select>
        </td>
                   <?php  ?>                                             
              </tr> 



 </table> </div>

      <button name="uploadBtn" class="enviarBtn" value="Actualizar">Actualizar</button> 
         </form><br><br> <a  href="Asignarroles.php"  > <button class="enviarBtn">Regresar</button> </a><br><br><br><br> <a  href="menu.php"  > <button class="enviarBtn">Regresar al menú</button> </a>
  </div></div>
  </div>   
  <div>
  <?php 

 //$id = $_GET['id'];
  if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Actualizar') {
     
     $id = $_GET['id'];
   if (isset($_POST["nombr"]) && isset($_POST["roll"]) && isset($_POST["est"]) ) {
    $cor = $_POST['nombr'];
    $rolll = $_POST['roll'];
    $estado3 = $_POST['est'];
    if($estado3=="Activo"){
      $estado="t";
    }else{$estado="f";}

    $query5 = ("Select * from rol where descripcion= '$rolll' ");
                  $conn5 = pg_query($conexion, $query5);

                  if (!$conn5) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conn5) > 0) {
                    while ($rowData5 = pg_fetch_array($conn5)) {
                        $id_rr = intval($rowData5["id_rol"]);
                      }}
     

     //en caso de que cambiara el estado en un permiso existente   
     $query8 = ("Select * from permisos where permiso_id_rol= '$id_rr' and usuario_id='$id'");
                  $conn8 = pg_query($conexion, $query8);

                  if (!$conn8) {
                    die(pg_error($conexion));
                  }

                  if (pg_num_rows($conn8) > 0) { // si existe ese usuario con ese rol
                    while ($rowData8 = pg_fetch_array($conn8)) {

                       //obtiene el estado del permiso
                        $estado2 = intval($rowData8["estado"]);}

                        if($estado2==$estado){
                          //si el estado de ese permiso esta igual que el seleccionado
                          //osea no cambio ese campo

                        }else{
                          //si cambio el estado de ese rol
                         $query6 = ("update permisos set estado='$estado' where permiso_id_rol= '$id_rr' and usuario_id='$id'");
                  $conn6 = pg_query($conexion, $query6);
               if (!$conn6) {
                    die(pg_error($conexion));
                  }else{ 

                    
                 
                           //si el rol es ponente y el estado es activo
                         if($id_rr == "1"){ 
                          if($estado =="t"){

                         $query41=("Select * from ponente where rol_id='$id' ");
                            $conn41=pg_query($conexion,$query41);
                         $cantidad41= pg_num_rows($conn41);
                         
                            if(!$conn41){
                                 die(pg_error($conexion));
                                    }

                               if (pg_num_rows($conn41) > 0) {
                                          while($rowData = pg_fetch_array($conn41)){
                                       //si ya estaba registrado en la tabla ponente
                                                   }
                               }else { //no estaba registrado en la tabla ponente
                                    $query51=("INSERT INTO ponente (rol_id) VALUES('$id')");
                                    $consulta51=pg_query($conexion,$query51); }

                                }else{
                          //si el estado de rol no es activo
                           
                         $query41=("Select * from ponente where rol_id='$id' ");
                            $conn41=pg_query($conexion,$query41);
                         $cantidad41= pg_num_rows($conn41);
                         
                            if(!$conn41){
                                 die(pg_error($conexion));
                                    }

                               if (pg_num_rows($conn41) > 0) {
                                          while($rowData = pg_fetch_array($conn41)){
                                       //si ya estaba registrado en la tabla ponente
                                          //borra el registro
                                          $query43 = ("delete from ponente where rol_id='$id'");
                                            $conn43 = pg_query($conexion, $query43);
                                                   }
                                             }else { //no estaba registrado en la tabla ponente
                                             }
                                 }}
                         

                                     echo "<script languaje='JavaScript'> 
                    alert('Los datos de actualizaron correctamente');
                    window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/Asignarroles.php');
                    </script>";}
                        }}else{
                          //si no existe permiso del usuario con el mismo rol
                          //osea que le va a agregar un nuevo rol al usuario
                          $query52=("INSERT INTO permisos (permiso_id_rol, usuario_id, estado) VALUES('$id_rr','$id','$estado')");
                         $consulta52=pg_query($conexion,$query52);
                         if(!$consulta52){
                                 die(pg_error($conexion));
                                    }else{
                         
                         //si el nuevo rol es ponente
                         //si el rol es ponente y el estado es activo
                         if($id_rr == "1"){ 
                          if($estado =="t"){

                         $query41=("Select * from ponente where rol_id='$id' ");
                            $conn41=pg_query($conexion,$query41);
                         $cantidad41= pg_num_rows($conn41);
                         
                            if(!$conn41){
                                 die(pg_error($conexion));
                                    }

                               if (pg_num_rows($conn41) > 0) {
                                          while($rowData = pg_fetch_array($conn41)){
                                       //si ya estaba registrado en la tabla ponente
                                                   }
                               }else { //no estaba registrado en la tabla ponente
                                    $query51=("INSERT INTO ponente (rol_id) VALUES('$id')");
                                    $consulta51=pg_query($conexion,$query51); }

                                }else{
                          //si el estado de rol no es activo
                           
                         $query41=("Select * from ponente where rol_id='$id' ");
                            $conn41=pg_query($conexion,$query41);
                         $cantidad41= pg_num_rows($conn41);
                         
                            if(!$conn41){
                                 die(pg_error($conexion));
                                    }

                               if (pg_num_rows($conn41) > 0) {
                                          while($rowData = pg_fetch_array($conn41)){
                                       //si ya estaba registrado en la tabla ponente
                                          //borra el registro
                                          $query43 = ("delete from ponente where rol_id='$id'");
                                            $conn43 = pg_query($conexion, $query43);
                                                   }
                                             }else { //no estaba registrado en la tabla ponente
                                             }
                                 }}  else{
                          //si el nuevo rol no es ponente
                           
                         $query41=("Select * from ponente where rol_id='$id' ");
                            $conn41=pg_query($conexion,$query41);
                         $cantidad41= pg_num_rows($conn41);
                         
                            if(!$conn41){
                                 die(pg_error($conexion));
                                    }

                               if (pg_num_rows($conn41) > 0) {
                                          while($rowData = pg_fetch_array($conn41)){
                                       //si ya estaba registrado en la tabla ponente
                                          //borra el registro
                                          $query43 = ("delete from ponente where rol_id='$id'");
                                            $conn43 = pg_query($conexion, $query43);
                                                   }
                                             }else { //no estaba registrado en la tabla ponente
                                             }
                                 }
                        echo "<script languaje='JavaScript'> 
                    alert('Los datos se actualizaron correctamente');
                    window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/Asignarroles.php');
                    </script>"; }}}}

  

 ?>  </div>  

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



</body>
</html>