<?php
@session_start();
include_once'header.php';
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
	echo "Estás dentro<br />";
	echo "Puedes agregar, modificar y borrar noticias de la base de datos.<BR>";
	echo "<BR><input type=button value='Agregar noticia' onclick='insert()'/><BR>";
	echo "<BR><button id=show>Modificar o Borrar noticia</button><BR><BR>";
	echo "<div><form action=modify.php method=POST>";
	echo "<input type=text name=titulo /><BR>";
	echo "<input type=submit value='Buscar' /><BR>";
	echo "</form></div>";
}
include_once 'footer.php';
?>