<?php
include "inc/fw.php";
include 'header.php';
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
   	echo "<br>Quieres hacer más modificaciones o cerrar sesión?
   	<form action='where.php' method='post'>
    <input type='submit' name='modify' value='Seguir editando'>
    <br><br>
   	<input type='submit' name='exit' value='Salir y cerrar sesión'></form>";
}
function delete($id)
{
	$sql = "DELETE FROM clientes WHERE id=$id";
	same();
}

function update($id, $name, $surname, $phone, $email)
{
	$sql = "UPDATE clientes SET name = '$name', surname = '$surname', phone = '$phone', email = '$email' WHERE id=$id";
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
include 'footer.php';
?>