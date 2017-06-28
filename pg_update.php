<?php

	require 'pg_conexion.php';

	$id = $_GET["id"];
	$dinero = $_GET["dinero"];

	$sql = "UPDATE consultas SET dinero='$dinero' WHERE id='$id'";


	$result = pg_query($dbconn, $sql);
	if (!$result) {
	  echo "Ocurrió un error.\n";
	  exit;
	}
	else{
		echo "Actualizado correctamente";
	}


?>
