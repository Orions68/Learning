<?php
require("inc/fw.php");
include_once 'header.php';
function same()
{
	$result = mysqli_query($idconn, $sql);
	if ($result === false)
	{
		die('Error: ' . mysqli_error($idconn));
	}
	else
	{
		echo "Base de datos actualizada.";
	}
   	echo "<BR>Quieres hacer más modificaciones o cerrar sesión?";
   	echo "<form action=where.php method=POST><input type=submit name=modify value='Seguir editando' />";
   	echo "<input type=submit name=exit value='Salir y cerrar sesión' /></form>";
}
function delete($id)
{
	$sql = "delete from clientes where id = '$id'";
	same();
}

function update($id, $name, $surname, $phone, $email)
{
	$sql = "update clientes set name = '$name', surname = '$surname', phone = '$phone', email = '$email' where id = '$id'";
	same();

}
if (isset($_POST['update']))
{
	update($_POST['radio'], $_POST['name' . $_POST['radio']], $_POST['surname' . $_POST['radio']], $_POST['phone' . $_POST['radio']], $_POST['email' . $_POST['radio']]);
}
else
{
	if (isset($_POST['delete']))
	{
		delete($_POST['radio']);
	}
}
include_once 'footer.php';
?>