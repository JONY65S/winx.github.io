<?php
session_start();
error_reporting(0);
$varsec=$_SESSION['nombre_usuario'];
$varId=$_SESSION['id_user'];
$varName=$_SESSION['name_user'];
$varEmail=$varsec;

if($varsec == null || $varsec = '') {
    header('Location:404.php');
    session_destroy();
    session_unset();
    die();
}?>
