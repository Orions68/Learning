<?php
include "inc/fw.php";
include 'header.php';
if (isset($_SESSION["name"]))
{
	echo "<h1>Ya has iniciado sesión.</h1>
	<h3>Deseas cerrar sesión?</h3>
    <a href='exit.php'>Salir</a>
    <br><br>
	<a href='inside.php'>Modificar la base de datos.</a>";
}
else
{
?>
<h3>Por favor introduzca sus credenciales.</h3>
<form action="inside.php" method="post">
<div class="align"><label><input type="text" name="name"> Nombre</label></div>
<br><br>
<div class="align"><label><input type="password" name="pass"> Contraseña</label></div>
<br><br>
<input type="submit" value="Enviar">
</form>
<?php
mysqli_close($idconn);
}
include 'footer.php';
?>