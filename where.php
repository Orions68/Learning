<?php
include_once 'header.php';
if (isset($_POST['modify']))
{
	header("Location:inside.php");
	exit;
}
if (isset($_POST['exit']))
{
	header("Location:exit.php");
	exit;
}
include_once 'footer.php';
?>