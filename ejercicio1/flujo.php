<?php
session_start();
include "conexion.inc.php";
$codflujo=$_GET["cf"];
$codproceso=$_GET["cp"];
$sql ="select * from proceso ";
$sql.="where codFlujo='$codflujo' ";
$sql.="and codProceso='$codproceso'";
$resultado = mysqli_query($conn, $sql);
$fila = mysqli_fetch_row($resultado);
include "cabecera.".$fila[5];
?>
<form action="controlador.php" method="GET" />
<?php
include $fila[5];
?>
<br/>
<input type="hidden" name="pantalla" value="<?php echo $fila[5];?>"/>
<input type="hidden" name="codflujo" value="<?php echo $fila[0];?>"/>
<input type="hidden" name="codproceso" value="<?php echo $fila[1];?>"/>
<input type="submit" name="Siguiente" value="Siguiente"/>
<input type="submit" name="Anterior" value="Anterior"/>
</form>