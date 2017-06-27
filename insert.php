<?php

require 'conexion.php';

$nombre = $_GET['nombre'];
$dinero = $_GET['dinero'];


$query = "insert into consultas(nombre, dinero) values ('$nombre', '$dinero');";

if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
}else if($conn->errno ==1062){
	echo "Entrada duplicada.";
}else if($conn->errno ==1034){
	echo "No se permite nulo.";
} 
else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

?>
