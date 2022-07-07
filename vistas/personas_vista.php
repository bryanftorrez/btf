<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<title>Nombre y edad</title>
</head>
<form name="frmins" method="POST" >
Nombre: <input type="text" name="nombre">
Peso: <input type="text" name="peso">
<input type="Submit" value="Guardar">
</form>
<body>
<table >
<tr>
<td>Nombre</td>
<td>Peso</td>
</tr>
<?php
foreach ($datos as $dato) {
echo "<tr><td>".$dato['nombre']."</td>";
echo "<td>".$dato['peso']."</td></tr>";
}
?>
</table>
</body>
</html>