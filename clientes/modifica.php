<?php
$cedula=$_POST[cedula];
$nombre=$_POST[nombre];
$apellido=$_POST[apellido];
$fechan=$_POST[fechan];
$direccion=$_POST[direccion];
$email=$_POST[email];
$telefono=$_POST[telefono];
$celular=$_POST[celular];
$id=$_POST['id'];
$cont=0;

try {
    require_once('conexion.php');
    $sql="UPDATE usuario SET nombres='$nombre',apellidos='$apellido',fecha_nacimiento='$fechan',direccion_user='$direccion',email_user='$email', telefono_user='$telefono', 
				celular_user='$celular' WHERE id_usuario=$id";
    $result=$conn->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
header("Location: insertarreg.php");
?>



