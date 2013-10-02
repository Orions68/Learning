<?php
include_once 'header.php';
echo "<form action=add.php method=POST>";
echo "Nombre: <input type=text name=name />";
echo "Apellido: <input type=text name=surname />";
echo "Teléfono: <input type=text name=phone />";
echo "E-mail: <input type=text name=email />";
echo "<BR><input type=submit value='Enviar' />";
echo "</form>";
include_once 'footer.php';
?>