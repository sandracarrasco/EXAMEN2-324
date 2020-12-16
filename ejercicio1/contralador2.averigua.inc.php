<?php
$codDocente=$_GET["codDocente"];
$usuario=$_GET["usuario"];
$contraseña=$_GET["contraseña"];

$sqlf ="update veranos.docente SET ";
$sqlf.="usuario='$usuario', ";
$sqlf.="contraseña='$contraseña' ";
$sqlf.="where codDocente=".$_SESSION["codDocente"];
$resultadof = mysqli_query($conn, $sqlf);
?>