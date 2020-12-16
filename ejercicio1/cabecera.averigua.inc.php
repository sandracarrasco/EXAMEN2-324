<?php
$_SESSION["matricula"]=12345;
$sqlf ="select * from veranos.estudiante ";
$sqlf.="where matricula=".$_SESSION["matricula"];
$resultadof = mysqli_query($conn, $sqlf);
$filaf = mysqli_fetch_row($resultadof);
$matricula=$filaf[0];
$usuario=$filaf[1];
$contraseña=$filaf[2];
?>