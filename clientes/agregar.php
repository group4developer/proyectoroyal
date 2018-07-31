<?php
$cedula=$_POST[cedula];
$nombre=$_POST[nombre];
$apellido=$_POST[apellido];
$fechan=$_POST[fechan];
$direccion=$_POST[direccion];
$email=$_POST[email];
$telefono=$_POST[telefono];
$celular=$_POST[celular];
$cont=0;

try {
    require_once('conexion.php');
    $sql="insert into usuario(ci_user,nombres,apellidos,fecha_nacimiento,direccion_user,email_user,telefono_user,celular_user) 
        values ('$cedula','$nombre','$apellido','$fechan','$direccion','$email','$telefono','$celular')";
    $result=$conn->query($sql);  
    $sql3="select * from usuario where ci_user='$cedula'";
    $r3=$conn->query($sql3);
    $i=$r3->fetch_array();
    $id=$i["id_usuario"];
    $sql2="insert into cliente(cedula_cliente,contrasena,id_user) 
    values ('$cedula','$cedula',$id)";
    $result2=$conn->query($sql2);
    
} catch (Exception $e) {
    $error = $e->getMessage();
}
header("Location: insertarreg.php");
?>

