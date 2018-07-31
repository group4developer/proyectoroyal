<html>
<head>
	<title>Ejemplo de PHP</title>
</head>
<body>
<?php
$id= $_GET['id'];
try {
    require_once('conexion.php');
    $sql = "select * from usuario where id_usuario=$id";
    $result=$conn->query($sql);
    $datos = $result->fetch_assoc(); 
} catch (Exception $e) {
    $error = $e->getMessage();
}	
?>

	<H1>Ejemplo de uso de bases de datos con PHP y MySQL</H1>
	<FORM ACTION="modifica.php" method="POST">
            <TABLE>
        <TR>
	<TD>Cédula:</TD>
	<TD><INPUT TYPE="text" NAME="cedula" SIZE="10" MAXLENGTH="30" value="<?php echo $datos['ci_user']; ?>"></TD>
	</TR>
	<TR>
	<TD>Nombres:</TD>
	<TD><INPUT TYPE="text" NAME="nombre" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['nombres']; ?>"></TD>
	</TR>
        <TR>
	<TD>Apellidos:</TD>
	<TD><INPUT TYPE="text" NAME="apellido" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['apellidos']; ?>"></TD>
	</TR>
        <TR>
	<TD>Fecha nacimiento:</TD>
        <TD><INPUT TYPE="date" NAME="fechan"  MAXLENGTH="30" value="<?php echo $datos['fecha_nacimiento']; ?>"></TD>
	</TR>
	<TR>
	<TD>Direccion:</TD>
	<TD><INPUT TYPE="text" NAME="direccion" SIZE="50" MAXLENGTH="30" value="<?php echo $datos['direccion_user']; ?>"></TD>
	</TR>
        <TR>
	<TD>Email:</TD>
	<TD><INPUT TYPE="text" NAME="email" SIZE="50" MAXLENGTH="30" value="<?php echo $datos['email_user']; ?>"></TD>
	</TR>
	<TR>
	<TD>Telefono:</TD>
	<TD><INPUT TYPE="text" NAME="telefono" SIZE="10" MAXLENGTH="30" value="<?php echo $datos['telefono_user']; ?>"></TD>
	</TR>
	<TR>
	<TD>Celular:</TD>
	<TD><INPUT TYPE="text" NAME="celular" SIZE="10" MAXLENGTH="30" value="<?php echo $datos['celular_user']; ?>"></TD>
	</TR>
	</TABLE>
		
	<INPUT TYPE="submit" NAME="accion" VALUE="Modificar">
	<input type="hidden" name="id" value="<?= $datos['id_usuario']; ?>">
</FORM>

</body>
</html>



