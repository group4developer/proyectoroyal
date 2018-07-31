<html>
<body>
<?php
$dato = $_POST['nombre'];
try {
    require_once('conexion.php');
    $sql = "select * from tablacurso where nombre like '%$dato%'";
    $result=$conn->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
printf("<h2><center>....Esta Busqueda</h2></center><p>");
?>
	<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
	<TR>
		<Th>&nbsp;Nombre</Th>
		<Th>&nbsp;Direccion&nbsp;</Th>
		<Th>&nbsp;Telefono&nbsp;</Th>
		<Th>&nbsp;Email&nbsp;</Th>
		<Th>&nbsp;Imagen&nbsp;</Th>
	</TR>
<?php
$i=0;
while($row = $result->fetch_array())
{
	printf("
	<tr>
		<td>&nbsp;%s</td>
		<td>&nbsp;%s&nbsp;</td>
		<td>&nbsp;%s&nbsp;</td>
		<td>&nbsp;%s&nbsp;</td>
		<td>&nbsp;%s&nbsp;</td>
		</td><td><a href=\"actualiza.php?id=%d\">Modificar</a></td></tr>",$row["nombre"],$row["direccion"],$row["telefono"],$row["email"],$row["imagen"],$row["id"]);
$i=$i+1;
}
$result->close();
$conn->close();
//printf($i);
// $i=$result->num_rows;
	if ($i==0)
	{
		printf("<p><center><h3>Datos No Encontrados</h3></center>");
	}
printf("Datos encontrados... "); 
printf($i);
?>
</body>
</html>


