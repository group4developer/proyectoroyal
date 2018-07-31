<html>
<head>
<title>Ejemplo de PHP</title>
</head>
<body>
<H1>Ejemplo de uso de bases de datos con PHP y MySQL</H1>
<form action="agregar.php" method="post">
<TABLE>
        <TR>
	<TD>Cédula:</TD>
	<TD><INPUT TYPE="text" NAME="cedula" SIZE="10" MAXLENGTH="30"></TD>
	</TR>
	<TR>
	<TD>Nombres:</TD>
	<TD><INPUT TYPE="text" NAME="nombre" SIZE="20" MAXLENGTH="30"></TD>
	</TR>
        <TR>
	<TD>Apellidos:</TD>
	<TD><INPUT TYPE="text" NAME="apellido" SIZE="20" MAXLENGTH="30"></TD>
	</TR>
        <TR>
	<TD>Fecha nacimiento:</TD>
        <TD><INPUT TYPE="date" NAME="fechan"  MAXLENGTH="30"></TD>
	</TR>
	<TR>
	<TD>Direccion:</TD>
	<TD><INPUT TYPE="text" NAME="direccion" SIZE="50" MAXLENGTH="30"></TD>
	</TR>
        <TR>
	<TD>Email:</TD>
	<TD><INPUT TYPE="text" NAME="email" SIZE="50" MAXLENGTH="30"></TD>
	</TR>
	<TR>
	<TD>Telefono:</TD>
	<TD><INPUT TYPE="text" NAME="telefono" SIZE="10" MAXLENGTH="30"></TD>
	</TR>
	<TR>
	<TD>Celular:</TD>
	<TD><INPUT TYPE="text" NAME="celular" SIZE="10" MAXLENGTH="30"></TD>
	</TR>
	</TABLE>
	<INPUT TYPE="submit" NAME="accion" VALUE="Grabar">
	</FORM>
	<hr>
<?php
try {
    require_once('conexion.php');
    $sql = "select * from usuario";
    $result=$conn->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}

?>
<TABLE BORDER=1 >
<TR>
<th>&nbsp;Cedula</th>
<th>&nbsp;Nombres</th>
<th>&nbsp;Apellidos</th>
<th>&nbsp;Fecha nacimiento&nbsp;</th>
<th>&nbsp;Direccion</th>
<th>&nbsp;Email&nbsp;</th>
<th>&nbsp;Telefono&nbsp;</th>
<th>&nbsp;Celular&nbsp;</th>
</TR>
<?php

while($row = $result->fetch_array()) {
printf("<tr>
    <td>&nbsp;%s</td>
    <td>&nbsp;%s&nbsp;</td>
    <td>&nbsp;%s&nbsp;</td>
    <td>&nbsp;%s&nbsp;</td>
    <td>&nbsp;%s&nbsp;</td>
    <td>&nbsp;%s&nbsp;</td>
    <td>&nbsp;%s&nbsp;</td>
    <td>&nbsp;%s&nbsp;</td>
    </tr>",$row["ci_user"],$row["nombres"],$row["apellidos"],$row["fecha_nacimiento"],$row["direccion_user"],$row["email_user"],$row["telefono_user"],$row["celular_user"]);
}
$result->close();
$conn->close();
?>
</table>
</body>
</html>

