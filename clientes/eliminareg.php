<html>
<head>
<title>Eliminar Archivos</title>
</head>
<body>
	<H1>Eliminar Archivos</H1>
<?php
	try {
    require_once('conexion.php');
    $sql = "select * from tablacurso";
    $result=$conn->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
	<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
	<TR>
	<TH>&nbsp;Nombre</Th>
	<Th>&nbsp;Direcci�n&nbsp;</Th>
	<Th>&nbsp;Telefono&nbsp;</Th>
	<Th>&nbsp;Email&nbsp;</Th>
	<Th>&nbsp;Imagen&nbsp;</Th>
	<Th>&nbsp;Borra&nbsp;</Th>
	</TR>
<?php
while($row = $result->fetch_array()) {
printf("
	<tr>
		<td>&nbsp;%s</td>
		<td>&nbsp;%s&nbsp;</td>
		<td>&nbsp;%s&nbsp;</td>
		<td>&nbsp;%s&nbsp;</td>
		<td>&nbsp;%s&nbsp;</td>
		</td><td><a href=\"borra.php?id=%d\">Borra</a></td></tr>",$row["nombre"],$row["direccion"],$row["telefono"],$row["email"],$row["imagen"],$row["id"]);
}
$result->close();
$conn->close();
?>
</table>
</body>
</html>


