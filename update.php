<?php

	require 'conexion.php';

	$id = $_GET["id"];
	$dinero = $_GET["dinero"];

	$sql = "UPDATE consultas SET dinero='$dinero' WHERE id='$id'";
	if ($conn->query($sql) === TRUE) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . $conn->error;
	}




?>
