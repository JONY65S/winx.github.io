<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
        <title>Inicio de Sesión</title>
       <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
       
           <link rel="stylesheet" href="css/estilosmenuarriba.css" type="text/css">
           
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




.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 12px;
  border-bottom-left-radius: 12px;
  
				border-bottom: 3px solid #2B307C;
				background: #00000012;
				color: #000;

}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-bottom-right-radius: 12px;
  border-bottom-left-radius: 12px;
  
				border-bottom: 3px solid #2B307C;
				background: #00000012;
				color: #000;
}

/*Aqui Empieza el css de estilos de la pagina de cada uno*
-------------
------------
------------*/			

.ContenedorPrincipal{
    border-radius: 5em;
	border: 0.3em solid #2B307C;
        margin:3em;
}

.loginBox input[type="submit"] {
				border: none;
				outline: none;
				height: 40px;
                                width: 200px;
				background: #2B307C;
				color: #FFF;
				font-size: 18px;
				border-radius: 20px;	
			}
			
			.loginBox input[type="submit"]:hover {
				cursor: pointer;
				background: #998636;
			}
                        
                        .loginBox a {
				text-decoration: none;
				font-size: 14px;
				line-height: 20px;
				color: navy;
			}
			
			.loginBox a:hover {
				color: #998636;
			}
                         .loginBox h1 {
				color:  #2B307C;
				font-size: 26px;
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
                    <li> <a href="index3.php">Inicio</a></li>
                    <li> <a href="memoriascarrusel.php">Memorias</a></li>
                        <li> <a href="convocatoria.php">Convocatoria</a></li> 
                        <li> <a href="inscripcionYcostos.php">Inscripción y Costos</a></li>
                        <li> <a href="ComiteOrg.php">Comité Organizador</a></li>
                        <li> <a href="ComiteEva.php">Comité Evaluador</a></li>
                        <li> <a href="InicioSesion.php"><img class="alineadoicono" src="img/iniciaricono.png">&nbsp;Iniciar Sesión</a></li>
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
    <body class="text-center">
    
        <div class="loginBox">
<main class="form-signin w-100 m-auto">
  <form action="sesion.php" method="POST">
    <img class="mb-4" src="img/Recurso1.png" alt="" width="80" height="80">
    <h1 class="h3 mb-3 fw-normal" >Iniciar Sesion</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="user" placeholder="name@example.com" required>
      <label for="floatingInput">Correo</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password" required>  
      <label for="floatingPassword">Contraseña</label>
    </div>

    
    <input type="submit" name="entrar" class="btn btn-success" value="Iniciar Sesión">
    <br>
    <br>
 <a href="contraseñaOlvido.php">¿Olvidaste tu contraseña?</a>
					<br>
					<a href="RegistroN.php">¿No tienes una cuenta?</a>
  </form>
</main>
        </div>

        

  </body>
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

        <div class="col-6 col-md-2 mb-3">
        <h5 style="color: #FFFFFF;">DESARROLLADORES</h5>
        <ul class="nav flex-column">
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Chavez Luna Miriam Virginia</li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Baltazar Balderas Jonathan </li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Davila Almaraz Nayeli</li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Montes Rangel Luz Elena </li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Olivares Vega Ana Jesús</li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Olvera Mendoza Viridiana</li>
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Pérez Martínez Monserrat </li>
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Romero Jaime Fernanda Yael </li>
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

</body>
</html>
