<?php
include "inc/fw.php";
include 'header.php';
function query($titulo)
{
	$sql = "SELECT * FROM clientes WHERE name LIKE '%{$titulo}%'";
	$result = mysqli_query($idconn, $sql);
	if ($result === false)
	{
		die ("Error: Falló el comando Select. " . mysqli_error($idconn));
	}
	else
	{
		while ($row = mysqli_fetch_object($result))
		{
			echo "<div><form action='final.php' method='post'>
			<label>Select<input type=radio name=radio value='" . $row->id . "' checked></label>
			<br><br>
			Nombre: <div class=align><input type=text name='name" . $row->id . "' value='" . $row->name . "'></div>
			Apellido: <div class=align><input type=text name='surname" . $row->id . "' value='" . $row->surname . "'></div>
			Teléfono: <div class=align><input type=text name='phone" . $row->id . "' value='" . $row->phone . "'></div>
			E-mail: <div class=align><input type=text name='email" . $row->id . "' size=30 value='" . $row->email . "'></div>
			<hr>";
		}
	}
	echo "<input type='submit' name='update' value='Modificar'>
	<br><br><input type='submit' name='delete' value='Eliminar'></form></div>";
	release($result, $idconn);
}
function release($result, $idconn)
{
	mysqli_free_result($result);
	//mysqli_close($idconn);
}
if (isset($_SESSION['name']))
{
	$titulo = $_POST['titulo'];
	query($titulo);
}
else
{
	header("Location:login.php");
	exit;
}
include 'footer.php';
?>