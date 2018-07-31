<?php
$id= $_GET['id'];
$nombre= $_GET['nombre'];
$direccion= $_GET['direccion'];
$telefono= $_GET['telefono'];
$email= $_GET['email'];
$imagen= $_GET['imagen'];
//$sql="UPDATE tablacurso SET nombre='$nombre',direccion='$direccion', telefono='$telefono',email='$email', 
//				imagen='$imagen' WHERE id='$id'";
//echo "$sql";
// exit();

try {
    require_once('conexion.php');
    $sql="UPDATE tablacurso SET nombre='$nombre',direccion='$direccion', telefono='$telefono',email='$email', 
				imagen='$imagen' WHERE id='$id'";
    $result=$conn->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
header("Location: modificareg.php");
?>



