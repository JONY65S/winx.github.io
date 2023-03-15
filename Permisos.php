<?php
session_start();

$varsec=$_SESSION['nombre_usuario'];
$varId=$_SESSION['id_user'];
$V = 't';
$F = 'f';

include 'pgsqlConexion.php';

/*Permiso 0*/

$query0=("select usuario_id, usuario, id_rol, descripcion, estado from permisos, usuario, rol where usuario_id=id_usuario and permiso_id_rol=id_rol and id_usuario='$varId' and id_rol='0'");
$consulta0=pg_query($conexion,$query0);
$queryNew0=pg_fetch_assoc($consulta0);
$queryRol0=$queryNew0["id_rol"];
$queryPermiso0=$queryNew0["estado"];
 
/*Permiso 1*/

$query1=("select usuario_id, usuario, id_rol, descripcion, estado from permisos, usuario, rol where usuario_id=id_usuario and permiso_id_rol=id_rol and id_usuario='$varId' and id_rol='1'");
$consulta1=pg_query($conexion,$query1);
$queryNew1=pg_fetch_assoc($consulta1);
$queryRol1=$queryNew1["id_rol"];
$queryPermiso1=$queryNew1["estado"];

/*Permiso 2*/

$query2=("select usuario_id, usuario, id_rol, descripcion, estado from permisos, usuario, rol where usuario_id=id_usuario and permiso_id_rol=id_rol and id_usuario='$varId' and id_rol='2'");
$consulta2=pg_query($conexion,$query2);
$queryNew2=pg_fetch_assoc($consulta2);
$queryRol2=$queryNew2["id_rol"];
$queryPermiso2=$queryNew2["estado"];

/*Permiso 3*/

$query3=("select usuario_id, usuario, id_rol, descripcion, estado from permisos, usuario, rol where usuario_id=id_usuario and permiso_id_rol=id_rol and id_usuario='$varId' and id_rol='3'");
$consulta3=pg_query($conexion,$query3);
$queryNew3=pg_fetch_assoc($consulta3);
$queryRol3=$queryNew3["id_rol"];
$queryPermiso3=$queryNew3["estado"];

/*Permiso 4*/

$query4=("select usuario_id, usuario, id_rol, descripcion, estado from permisos, usuario, rol where usuario_id=id_usuario and permiso_id_rol=id_rol and id_usuario='$varId' and id_rol='4'");
$consulta4=pg_query($conexion,$query4);
$queryNew4=pg_fetch_assoc($consulta4);
$queryRol4=$queryNew4["id_rol"];
$queryPermiso4=$queryNew4["estado"];

/*Permiso 5*/

$query5=("select usuario_id, usuario, id_rol, descripcion, estado from permisos, usuario, rol where usuario_id=id_usuario and permiso_id_rol=id_rol and id_usuario='$varId' and id_rol='5'");
$consulta5=pg_query($conexion,$query5);
$queryNew5=pg_fetch_assoc($consulta5);
$queryRol5=$queryNew5["id_rol"];
$queryPermiso5=$queryNew5["estado"];

/*Permiso 6*/

$query6=("select usuario_id, usuario, id_rol, descripcion, estado from permisos, usuario, rol where usuario_id=id_usuario and permiso_id_rol=id_rol and id_usuario='$varId' and id_rol='6'");
$consulta6=pg_query($conexion,$query6);
$queryNew6=pg_fetch_assoc($consulta6);
$queryRol6=$queryNew6["id_rol"];
$queryPermiso6=$queryNew6["estado"];

/*Permiso 7*/

$query7=("select usuario_id, usuario, id_rol, descripcion, estado from permisos, usuario, rol where usuario_id=id_usuario and permiso_id_rol=id_rol and id_usuario='$varId' and id_rol='7'");
$consulta7=pg_query($conexion,$query7);
$queryNew7=pg_fetch_assoc($consulta7);
$queryRol7=$queryNew7["id_rol"];
$queryPermiso7=$queryNew7["estado"];

?>