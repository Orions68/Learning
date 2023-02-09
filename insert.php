<?php
include_once 'header.php';
echo "<form action='add.php' method='post'>";
echo "<label><input type='text' name='name'> Nombre</label>";
echo "<br><br><label><input type='text' name='surname'> Apellido</label>";
echo "<br><br><label><input type='text' name='phone'> Teléfono</label>";
echo "<br><br><label><input type='text' name='email'> E-mail</label>";
echo "<br><br><label><input type='submit' value='Enviar'>";
echo "</form>";
include_once 'footer.php';
?>