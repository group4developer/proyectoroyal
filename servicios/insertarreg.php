<html>
<head>
<title>Ejemplo de PHP</title>
</head>
<body>
<H1>Ejemplo de uso de bases de datos con PHP y MySQL</H1>
<form action="agregar.php" method="post">
<TABLE>
	<TR>
	<TD>Nombre:</TD>
	<TD><INPUT TYPE="text" NAME="nombre" SIZE="20" MAXLENGTH="30"></TD>
	</TR>
	<TR>
	<TD>Direccion:</TD>
	<TD><INPUT TYPE="text" NAME="direccion" SIZE="20" MAXLENGTH="30"></TD>
	</TR>
	<TR>
	<TD>Telefono:</TD>
	<TD><INPUT TYPE="text" NAME="telefono" SIZE="20" MAXLENGTH="30"></TD>
	</TR>
	<TR>
	<TD>Email:</TD>
	<TD><INPUT TYPE="text" NAME="email" SIZE="20" MAXLENGTH="30"></TD>
	</TR>
	<TR>
	<TD>Imagen:</TD>
	<TD><INPUT TYPE="text" NAME="imagen" SIZE="20" 	MAXLENGTH="30"></TD>
	</TR>
	</TABLE>
	<INPUT TYPE="submit" NAME="accion" VALUE="Grabar">
	</FORM>
	<hr>
<?php
try {
    require_once('conexion.php');
    $sql = "select * from tablacurso";
    $result=$conn->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
// if (!$result) {
//     die($conn->error);
//}
?>
<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
<TR>
<TD>&nbsp;Nombre</TD>
<TD>&nbsp;Direccion&nbsp;</TD>
<TD>&nbsp;Telefono&nbsp;</TD>
<TD>&nbsp;Email&nbsp;</TD>
<TD>&nbsp;Imagen&nbsp;</TD>
</TR>
<?php

while($row = $result->fetch_array()) {
printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;<img
src=img\%s>&nbsp;</td></tr>",
$row["nombre"],$row["direccion"],$row["telefono"],$row["email"],$row["imagen"]);
}
$result->close();
$conn->close();
?>
</table>
</body>
</html>

