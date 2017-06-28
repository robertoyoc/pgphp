<?php

require 'pg_conexion.php';

$query = "select id, nombre from consultas where dinero >0;";

$result = pg_query($dbconn, $query);
if (!$result) {
  echo "Ocurrió un error.\n";
  exit;
}

echo "<select id='pg_seleccion'>";
while ($row = pg_fetch_row($result)) {
	echo "<option value='". $row[0]."'>".$row[1]. "</option>";
}
echo "</select>";

?>
