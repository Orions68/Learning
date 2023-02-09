<?php
include "inc/fw.php";
include 'header.php';
function add($name, $surname, $phone, $email)
{
	$sql = "INSERT INTO clientes (name, surname, phone, email) values ('$name', '$surname', '$phone', '$email')";
	$result = mysqli_query($idconn, $sql);
	if ($result === false)
	{
		die('Error: ' . mysql_error($idconn));
	}
	else
	{
		echo "Datos agregados correctamente.
		<br><h3>Quieres hacer más modificaciones o cerrar sesión?</h3>
		<form action='where.php' method='post'>
        <input type='submit' name='modify' value='Seguir editando'>
        <br><br>
		<input type='submit' name='exit' value='Salir y cerrar sesión'></form>";
	}
}
add($_POST['name'], $_POST['surname'], $_POST['phone'], $_POST['email']);
include 'footer.php';
?>