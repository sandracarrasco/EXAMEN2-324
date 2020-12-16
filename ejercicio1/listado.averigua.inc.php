<?php
$_SESSION["codDocente"]=1;
$sqlf ="SELECT e.nombre
                                        from estudiante e, registro re , materia p
                                        WHERE e.matricula = re.matricula 
                                        and re.codMateria = p.codMateria 
                                       
                                         ";
$sqlf.="where nombreM=".$_SESSION["codDocente"];

$resultadof = mysqli_query($conn, $sqlf);
$filaf = mysqli_fetch_row($resultadof);
$codDocente=$filaf[0];
$usuario=$filaf[1];
$contraseña=$filaf[2];
?>