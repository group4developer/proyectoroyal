<html>
<head>
	<title>Ejemplo de PHP</title>
</head>
<body>
<?php
$id= $_GET['id'];
try {
    require_once('conexion.php');
    $sql = "select * from tablacurso where id=$id";
    $result=$conn->query($sql);
    $datos = $result->fetch_assoc(); 
} catch (Exception $e) {
    $error = $e->getMessage();
}	
?>

	<H1>Ejemplo de uso de bases de datos con PHP y MySQL</H1>
	<FORM ACTION="modifica.php" method="get">
		<TABLE>
			<TR>
				<TD>Nombre:</TD><TD><INPUT TYPE="text" NAME="nombre" SIZE="20" MAXLENGTH="30" value="<?php echo $datos['nombre']; ?>"></TD>
			</TR>
			<TR>
				<TD>Direccion:</TD><TD><INPUT TYPE="text" NAME="direccion" SIZE="20" MAXLENGTH="30"value="<?php echo $datos['direccion']; ?>"></TD>
			</TR>
			<TR>
				<TD>Telefono:</TD><TD><INPUT TYPE="text" NAME="telefono" SIZE="20" MAXLENGTH="30"value="<?php echo $datos['telefono']; ?>"></TD>
			</TR>
			<TR>
				<TD>Email:</TD>
				<TD><INPUT TYPE="text" NAME="email" SIZE="20" MAXLENGTH="30"value="<?= $datos['email']; ?>"></TD>
			</TR>
			<TR>
				<TD>Imagen:</TD>
				<TD><INPUT TYPE="text" NAME="imagen" SIZE="20" MAXLENGTH="30"value="<?= $datos['imagen']; ?>"></TD>
			</TR>
	</TABLE>
	<INPUT TYPE="submit" NAME="accion" VALUE="Modificar">
	<input type="hidden" name="id" value="<?= $datos['id']; ?>">
</FORM>

</body>
</html>



