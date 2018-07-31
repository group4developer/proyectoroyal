<html>
<body>
<?php
$dato = $_POST['nombre'];
try {
    require_once('conexion.php');
    $sql = "select * from usuario where nombres like '%$dato%'";
    $result=$conn->query($sql);
} catch (Exception $e) {
    $error = $e->getMessage();
}
printf("<h2><center>....Esta Busqueda</h2></center><p>");
?>
	<TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
	<TR>
            <th>&nbsp;Cedula</th>
            <th>&nbsp;Nombres</th>
            <th>&nbsp;Apellidos</th>
            <th>&nbsp;Fecha nacimiento&nbsp;</th>
            <th>&nbsp;Direccion</th>
            <th>&nbsp;Email&nbsp;</th>
            <th>&nbsp;Telefono&nbsp;</th>
            <th>&nbsp;Celular&nbsp;</th>
            <th>&nbsp;Modificar&nbsp;</th>
            <th>&nbsp;Eliminar&nbsp;</th>
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
            <td>&nbsp;%s&nbsp;</td>
            <td>&nbsp;%s&nbsp;</td>
            <td>&nbsp;%s&nbsp;</td>
            <td><a href=\"actualiza.php?id=%d\">Modificar</a></td>
            <td><a href=\"borra.php?id=%d\">Eliminar</a></td>
            </tr>",$row["ci_user"],$row["nombres"],$row["apellidos"],$row["fecha_nacimiento"],$row["direccion_user"],$row["email_user"],$row["telefono_user"],$row["celular_user"],$row["id_usuario"],$row["id_usuario"]);
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


