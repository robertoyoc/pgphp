<?php
$id = $_GET["id"];

require 'pg_conexion.php';

$sql = "DELETE FROM consultas WHERE id='$id'";



$result = pg_query($dbconn, $sql);
	if (!$result) {
	  echo "Ocurrió un error.\n";
	  exit;
	}
	else{
		echo "Registro borrado correctamente";
	}



?>
