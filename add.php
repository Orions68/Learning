<?php
require("inc/fw.php");
include_once 'header.php';
function add($name, $surname, $phone, $email)
{
	$sql = "insert into clientes (name, surname, phone, email) values ('$name', '$surname', '$phone', '$email')";
	$result = mysqli_query($idconn, $sql);
	if ($result === false)
	{
		die('Error: ' . mysql_error($idconn));
	}
	else
	{
		echo "Datos agregados correctamente.";
		echo "<BR>Quieres hacer más modificaciones o cerrar sesión?";
		echo "<form action=where.php method=POST><input type=submit name=modify value='Seguir editando' />";
		echo "<input type=submit name=exit value='Salir y cerrar sesión' /></form>";
	}
}
add($_POST['name'], $_POST['surname'], $_POST['phone'], $_POST['email']);
include_once 'footer.php';
?>