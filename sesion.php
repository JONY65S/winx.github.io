<?php

include 'pgsqlConexion.php';

session_start();

$usuario=$_POST['user'];
$clave=$_POST['pass'];
$sha512Clave = hash('sha512', $clave);

$query=("SELECT * FROM usuario WHERE usuario='$usuario' AND contraseña='$sha512Clave'");

$consulta=pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);

$queryNew=pg_fetch_assoc($consulta);
$queryId=$queryNew["id_usuario"];
$queryName=$queryNew["nombre_usuario"];

if($cantidad>0){
    echo "<script>alert('Bienvenido!!!'); </script>";
	$_SESSION['nombre_usuario']=$usuario;
    $_SESSION['id_user']=$queryId;
    $_SESSION['name_user']=$queryName;
	header('Location:menu.php');
}
else{
    echo '<script type="text/javascript">
        window.onload = function () { 
    var opcion = confirm("La dirección de correo electrónico o la contraseña que has introducido no son correctas.");
    if (opcion == true) {
        window.history.back();
	} else {
	    window.history.back();
	}
	}
        </script>'; 
    
    /*header('Location:log.php');*/
} 

?>

