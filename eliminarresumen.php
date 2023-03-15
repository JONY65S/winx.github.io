<?php
include 'credentials.php';
include 'pgsqlConexion';

//$referencias = $_GET['r'];
$eliminar = "DELETE FROM referencias WHERE id_referencia = '123061822'";
$resultadoEliminar = pg_query($conexion, $eliminar);

if ($resultadoEliminar){

//Importar función
require './enviarEmail.php';

//Envio de correo
$titulo = $titulo
$email = $varEmail;
$subject = "Confirmacion de eliminacion de resumen";

//Cuerpo del correo 
$body = "Congreso Internacional sobre la Enseñanza y Aplicación de las Matemáticas 
Facultad de Estudios Superiores Cuautitlán

Su resumen de ponencia ha sido eliminado con éxito.";

sendEmail($email, $subject, $body);

  echo "<script>alert('Registro exitoso.');window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/HistorialTrabajos.php');</script>";
} else {
 echo "<script>alert('No se pudo eliminar.');window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/HistorialTrabajos.php');</script>";
}




$eliminar = "DELETE FROM trabajos WHERE id_trabajo = '123061822'";
$resultadoEliminar = pg_query($conexion, $eliminar);

if ($resultadoEliminar){

//Importar función
require './enviarEmail.php';

//Envio de correo
$titulo = $titulo
$email = $varEmail;
$subject = "Confirmacion de eliminacion de resumen";

//Cuerpo del correo 
$body = "Congreso Internacional sobre la Enseñanza y Aplicación de las Matemáticas 
Facultad de Estudios Superiores Cuautitlán

Su resumen de ponencia ha sido eliminado con éxito.";

sendEmail($email, $subject, $body);

  echo "<script>alert('Registro exitoso.');window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/HistorialTrabajos.php');</script>";
} else {
 echo "<script>alert('No se pudo eliminar.');window.location.replace('https://laboratoriosistemas.cuautitlan2.unam.mx/congresowinx/.WinxCongreso/HistorialTrabajos.php');</script>";
}
?>