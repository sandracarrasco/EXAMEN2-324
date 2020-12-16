<?php
$matricula=$_GET["matricula"];
$usuario=$_GET["usuario"];
$contraseña=$_GET["contraseña"];

$sqlf ="update veranos.estudiante SET ";
$sqlf.="usuario='$usuario', ";
$sqlf.="contraseña='$contraseña' ";
$sqlf.="where id=".$_SESSION["matricula"];
$resultadof = mysqli_query($conn, $sqlf);
?>