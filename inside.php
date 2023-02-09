<?php
@session_start();
include 'header.php';
?>
<script type="text/javascript">
function insert()
{
	window.open("insert.php", "_self")
}
</script>
<script type="text/jscript" src="jquery.min.js">
</script>
<script type="text/jscript">
$(document).ready(function()
{
	$("div").hide();
	$("#show").click(function()
	{
		$("div").show();
	});
});
</script>
<?php
if (isset($_POST["name"]))
{
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	if ($name == 'admin')
	{
		if ($pass == '123456')
		{
			$_SESSION["name"] = $_POST["name"];
			inside();
		}
		else
		{
			header("Location:login.php");
			exit;
		}

	}
	else
	{
		header("Location:login.php");
		exit;
	}
}
else
{
	if (isset($_SESSION["name"]))
	{
		inside();
	}
	else
	{
		header("Location:login.php");
		exit;
	}
}

function inside()
{
	echo "<h1>Estás dentro</h1>
    <br>
	<h3>Puedes agregar, modificar y borrar noticias de la base de datos.</h3>
    <br><br>
    <input type=button value='Agregar noticia' onclick='insert()'>
    <br><br>
    <button id='show'>Modificar o Borrar noticia</button>
    <br><br>
	<div><form action='modify.php' method='post'>
	<input type='text' name='titulo'>
    <br><br>
	<input type='submit' value='Buscar'>
	</form></div>";
}
include_once 'footer.php';
?>