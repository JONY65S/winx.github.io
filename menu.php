<?php
include 'credentials.php';
include 'Permisos.php';
?>

<html lang="es">
    <head>
        <link href="icono.ico" type="image/x-icon" rel="shortcut icon" />
        <title>Menu Principal</title>
       <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="icon.css">
         <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
           <link rel="stylesheet" href="css/estilosmenuarriba.css">
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
        /*Ponencias*/
.contenedorregistroI2{
    border-radius: 3em;
    border: 0.3em solid #B18904;
    margin:2em;
    flex-direction: row;
    display: none;
}
           /*Memorias*/
.contenedorregistroI3{
    border-radius: 3em;
    border: 0.3em solid #B18904;
    margin:2em;
    flex-direction: row;
    display: none;
}
            /*Evaluador*/
.contenedorregistroI4{
    border-radius: 3em;
    border: 0.3em solid #B18904;
    margin:2em;
    flex-direction: row;
    display: none;
}
               /*Comte Organizador*/
.contenedorregistroI5{
    border-radius: 3em;
    border: 0.3em solid #B18904;
    margin:2em;
    flex-direction: row;
    display: none;
}

   /*Admin 1*/
.contenedorregistroI6{
    border-radius: 3em;
    border: 0.3em solid #B18904;
    margin:2em;
    flex-direction: row;
    display: none;
}

   /*Admin 2 (escuelas)*/
.contenedorregistroI7{
    border-radius: 3em;
    border: 0.3em solid #B18904;
    margin:2em;
    flex-direction: row;
    display: none;
}
   /*Admin 3 (eventos)*/
.contenedorregistroI8{
    border-radius: 3em;
    border: 0.3em solid #B18904;
    margin:2em;
    flex-direction: row;
    display: none;
}
/*Comte Evaluador*/
.contenedorregistroI9{
    border-radius: 3em;
    border: 0.3em solid #B18904;
    margin:2em;
    flex-direction: row;
    display: none;
}

/*Secretaria*/
.contenedorregistroI10{
    border-radius: 3em;
    border: 0.3em solid #B18904;
    margin:2em;
    flex-direction: row;
    display: none;
}


/*Estilos de los botones del Menu Circulos*
-------------
------------
------------*/
/*Usuario*/
.botonU {
      background: transparent;
      background-image: url("img/perfil1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonU:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    .botonH {
      background: transparent;
      background-image: url("img/historial1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      border-radius: 0px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
      
     /* top: 41%;
      left: 35%;
         /*transform: translate(-30%, -40%);*/
    }

    .botonH:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    .botonP {
      background: transparent;
      background-image: url("img/pagos1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      border-radius: 0px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
      /*top: 41%;
      left: 55%;
        /*transform: translate(-30%, -40%);*/

    }

    .botonP:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    .botonR {

      background: transparent;
      background-image: url("img/inscripcion_tp1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      border-radius: 0px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
      
    /* top: 41%;
      left: 75%;
         /*transform: translate(-30%, -40%);*/

    }

    .botonR:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    /*Ponente*/
    .botonPon {
      background: transparent;
      background-image: url("img/ponencia1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonPon:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    .botonCar {
      background: transparent;
      background-image: url("img/carteles_1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonCar:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    .botonTal {
      background: transparent;
      background-image: url("img/talleres_1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonTal:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    /*Memorias*/
    .botonSubmem {
      background: transparent;
      background-image: url("img/subir_memorias1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonSubmem:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    .botonMem {
      background: transparent;
      background-image: url("img/memoria1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonMem:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }
/* Evaluador*/
.botonEvP {
      background: transparent;
      background-image: url("img/evaluar_resumen_1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonEvP:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }
            
    .botonExt {
      background: transparent;
      background-image: url("img/evaluar_extensos1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonExt:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }        

    .botonEvC {
      background: transparent;
      background-image: url("img/evaluar_carteles1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonEvC:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    .botonEvT {
      background: transparent;
      background-image: url("img/evaluar_talleres1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonEvT:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    .botonEvVid {
      background: transparent;
      background-image: url("img/evaluar_video1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonEvVid:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    /* Comite organizador */
     .botonNueC {
      background: transparent;
      background-image: url("img/nue_congreso1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonNueC:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

     .botonRefCon {
      background: transparent;
      background-image: url("img/referencia_congre1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonRefCon:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

     .botonBusCon {
      background: transparent;
      background-image: url("img/buscar_congreso1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonBusCon:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }
  
     /* Administrador */
    .botonAgrEven {
      background: transparent;
      background-image: url("img/agregar_evento1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonAgrEven:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    .botonAsigRol {
      background: transparent;
      background-image: url("img/asignar_roles1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonAsigRol:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    .botonConfEsc {
      background: transparent;
      background-image: url("img/escuelas1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonConfEsc:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    .botonConsDat {
      background: transparent;
      background-image: url("img/consultar_datos1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonConsDat:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    /* Admin escuelas  */
     .botonAgrEsc {
      background: transparent;
      background-image: url("img/agregar_escuela1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonAgrEsc:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    .botonModEsc {
      background: transparent;
      background-image: url("img/modificar_escuela1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonModEsc:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    /* Admin eventos  */
     .botonAgrConfe {
      background: transparent;
      background-image: url("img/agregar_conferencia1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonAgrConfe:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    .botonAgrMesa {
      background: transparent;
      background-image: url("img/agregar_mesaredonda1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonAgrMesa:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }
    /* Comite evaluador  */
    .botonAsEva {
      background: transparent;
      background-image: url("img/asignar_evaluadores1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonAsEva:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    /*Secretaria     */
    .botonSecP {
      background: transparent;
      background-image: url("img/pagos1.png");
      border-color: transparent;
      background-size: cover;
      background-position: center;
      display: inline-block;
      border: none;
      padding: 20px;
      width: 180px;
      height: 180px;
      transition: all 0.5s;
      cursor: pointer;
      position: relative;
      margin: 1em;
     
     /* top: 41%;
      left: 15%;
      /*transform: translate(-30%, -40%);*/

    }

    .botonSecP:hover {
      width: 230px;
      height: 230px;
      filter: invert(59%) sepia(73%) saturate(310%) hue-rotate(10deg) brightness(92%) contrast(97%);
    }

    .Tema {
	margin: -10px;
	padding: 0 0 50px;
	text-align: center;
	font-size: 50px;
	font-style: normal;
	color: #2B307C;
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
 
        
       <div class="containerBoton">
        <label for="btn-menu3"></label>
        <nav class="menu3" style="z-index: 2;">  
        <button class="boton1" type="button" id="btnUserPc" onClick="ico2()" >Usuario</button>
         
        <button class="boton2" type="button" id="btnPonPc" onClick="ico1()">Ponente</button>
        
        <button class="boton3" type="button" id="btnEvaPc" onClick="ico4()" >Evaluador</button>
       
        <button class="boton4" type="button" id="btnMemPc" onClick="ico3()" >Memorias</button>
        
        <button class="boton5" type="button" id="btnSecPc" onClick="ico10()" >Secretaria</button>
        <button class="boton5" type="button" id="btnAdmPc" onClick="ico6()" >Administrador</button>
         
        <button class="boton5" type="button" id="btnCePc" onClick="ico11()" >Comite Evaluador</button>
        
        <button class="boton6" type="button" id="btnCoPc" onClick="ico5()" >Comite Organizador</button> 
        </nav>
    </div>

    <!-- Barra de menu Secundario - Movil-->

       <div class="nav-bar" >  
           <!-- Usuario-->
            <a id="btnUserMb" onClick="return ico2()"class="icond icon-book" target="_blank"> <img src="img/icons8-usuario-16.png"/> </a> 
        
         <!-- ponente-->
            <a id="btnPonMb" onClick="return ico1()" href="#" class="icond icon-file-text2" target="_blank"> <img src="img/icons8-expositor-16.png"/> </a>
              
            <!-- evaluador-->
            <a id="btnEvaMb" onClick="return ico4()" href="#" class="icond icon-hearth" target="_blank"> <img src="img/icons8-lectura-16.png"/> </a>
           

            <!-- memorias-->
            <a id="btnMemMb" onClick="return ico3()" href="#" class="icond icon-key" target="_blank"> <img src="img/icons8-foto-16.png"/> </a>
            
           
            <!-- secretaria-->
            <a id="btnSecMb" onClick="return ico10()" href="#" class="icond icon-hearth" target="_blank"> <img src="img/iconsec.png"/> </a>


            <!-- administrador-->
            <a id="btnAdmMb" onClick="return ico6()" href="#" class="icond icon-key" target="_blank"> <img src="img/icons8-configuración-del-administrador-16.png"/> </a>
            
            
            <!-- comité evaluador-->
            <a id="btnCeMb" onClick="return ico11()" href="#" class="icond icon-hearth" target="_blank"> <img src="img/iconcomev.png"/> </a>
            
            <!-- comité Organizador-->
            <a id="btnCoMb" onClick="return ico5()" href="#" class="icond icon-key" target="_blank"> <img src="img/icons8-llamada-de-conferencia-16.png"/> </a>
            
        </div> 

<div class="contenedorregistroI" id='User'> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
  <p class="Tema">Usuario </p>


     <a href="usuarioPerfil.php"> <div class="botonU">  </div>  </a>
     <a href="HistorialTrabajos.php"> <div class="botonH">  </div>  </a>
     <a href="pagos2.php"> <div class="botonP">  </div>  </a>  
     <a href="asistenciaTP.php"> <div class="botonR">  </div>  </a>
  </div>
  </div>

<div class="contenedorregistroI2" id='Pone'> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
  <p class="Tema">Ponente </p>
     <a href="registroponencias.php"> <div class="botonPon">  </div>  </a>
     <a href="registrocarteles.php"> <div class="botonCar">  </div>  </a>
     <a href="registrotalleres.php"> <div class="botonTal">  </div>  </a>                                  
       
  </div>
</div>

   <div class="contenedorregistroI3" id='Mem'> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
  <p class="Tema">Memorias </p>
     <a href="perfilmemorias.php"> <div class="botonSubmem">  </div>  </a>
     <a href="memoriascarruselSesion.php"> <div class="botonMem">  </div>  </a>                                 
       
  </div>
</div>

<div class="contenedorregistroI4" id='Eval'> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
  <p class="Tema"> Evaluador </p>
     <a href="evaMain.php"> <div class="botonEvP">  </div>  </a>
     <a href="evaCar.php"> <div class="botonEvC">  </div>  </a>
     <a href="evaTar.php"> <div class="botonEvT">  </div>  </a>
     <a href="evaVM.php"> <div class="botonEvVid">  </div>  </a> 
     <a href="evaExt.php"> <div class="botonExt">  </div>  </a>       
       
  </div>
</div>

<div class="contenedorregistroI5" id='Comi'>
  <div class="px-4 pt-5 my-5 text-center border-bottom">
  <p class="Tema">Comite Organizador </p>  
     <a href="RegistroCongr.php"> <div class="botonNueC">  </div>  </a>
     <a href="ReferenciaCongr.php"> <div class="botonRefCon">  </div>  </a>
     <a href="BusquedaCongr.php"> <div class="botonBusCon">  </div>  </a>                                  
       
  </div>
</div>
<div class="contenedorregistroI10" id='Sec1'> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
  <p class="Tema">Secretaria </p>
     <a href="pagosgaleria.php"> <div class="botonSecP">  </div>  </a>                                   
       
  </div>
</div>

<div class="contenedorregistroI6" id='Admin1'> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
  <p class="Tema">Administrador </p>
     <a href="#"> <div class="botonAgrEven" onClick="return ico8()" >  </div>  </a>
     <a href="Asignarroles.php"> <div class="botonAsigRol">  </div>  </a>
     <a href="#"> <div class="botonConfEsc" onClick="return ico7()" >  </div>  </a>
     <a href="Consultardatos.php"> <div class="botonConsDat">  </div>  </a>                                     
       
  </div>
</div>

   <div class="contenedorregistroI7" id='Admin2'> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
   
     <a href="Agregarescuela.php"> <div class="botonAgrEsc">  </div>  </a>
     <a href="Modificarescuelas.php"> <div class="botonModEsc">  </div>  </a>                                   
       
  </div>
</div>

<div class="contenedorregistroI8" id='Admin3'> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
   
     <a href="Agregarconferencia.php"> <div class="botonAgrConfe">  </div>  </a>
     <a href="Agregarmesaredonda.php"> <div class="botonAgrMesa">  </div>  </a>                                   
       
  </div>
</div>

<div class="contenedorregistroI9" id='ComEval'> 
  <div class="px-4 pt-5 my-5 text-center border-bottom">
  <p class="Tema"> Comite Evaluador </p>
     <a href="AsignaEval.php"> <div class="botonAsEva">  </div>  </a>
  </div>
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
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted">15congresomatematicas</li>
          <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted">@cuautitlan.unam.mx</li>
          <li style="color: #FFFFFF;" class="nav-item mb-2" class="nav-link p-0 text-muted"> SEDE </li>
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
        <li style="color: #FFFFFF;"class="nav-item mb-2" class="nav-link p-0 text-muted"> Dávila Almaraz Nayeli</li>
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
    </footer>
    </div>
    <script type="text/javascript" src="js/functionMain.js"></script>
    <script type="text/javascript">
        var varJs0 = "<?php echo $queryPermiso0; ?>";
        var varJs1 = "<?php echo $queryPermiso1; ?>";
        var varJs2 = "<?php echo $queryPermiso2; ?>";
        var varJs3 = "<?php echo $queryPermiso3; ?>";
        var varJs4 = "<?php echo $queryPermiso4; ?>";
        var varJs5 = "<?php echo $queryPermiso5; ?>";
        var varJs6 = "<?php echo $queryPermiso6; ?>";
        var varJs7 = "<?php echo $queryPermiso7; ?>"; 

    </script>
    <script type="text/javascript" src="modulesJS/keyLicense.js"></script>



</body>
</html>