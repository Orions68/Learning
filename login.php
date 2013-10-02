<?php
require("inc/fw.php");
include_once 'header.php';
if (isset($_SESSION["name"]))
{
	echo "Ya has iniciado sesión.";
	echo "Deseas cerrar sesión?";
	echo "<a href='exit.php'>Salir</a>";
	echo "<a href='inside.php'>Modificar la base de datos.</a>";
}
else
{
?>
<h3>Por favor introduzca sus credenciales.</h3>
<form action="inside.php" method="post">
<p>
<div>Nombre: </div><div class="align"><input type="text" name="name" /></div></p>
<p>
<div>Contraseña: </div><div class="align"><input type="password" name="pass" /></div>
<input type="submit" value="Enviar" />
</p>
</form>
<?php
mysqli_close($idconn);
}
include_once 'footer.php';
?>