<html>
<head></head>
<body>
<?php
$id = $_POST["idLibro"];
$conn = mysqli_connect("localhost", "root", "", "biblioteca");

$result = mysqli_query($conn, "SELECT idLibro, ISBN, Titulo, Autor, Puntuacion FROM libro WHERE idLibro=$id");
$fila = mysqli_fetch_array($result);
mysqli_close($conn);
?>
<h2>Editar Libros</h2>
<form action="update.php" method="GET" >
	<input type="hidden" name="idLibro" value="<?php echo $id?>" />
ISBN: <input type="text" name="ISBN" value="<?php echo $fila["ISBN"]?>" required />
</br>
Titulo: <input type="text" name="Titulo" value="<?php echo $fila["Titulo"]?>" required />
</br>
Autor: <input type="text" name="Autor" value="<?php echo $fila["Autor"]?>" required />
</br>
Puntuacion: <input type="number" name="Puntuacion" value="<?php echo $fila["Puntuacion"]?>" required />
</br>
<input type="reset" value="RESTAURAR"/>
<input type="submit" value="GUARDAR CAMBIOS"/>
<input type="button" value="VOLVER" onclick="history.back()"/>

</form>
</body>

</html>