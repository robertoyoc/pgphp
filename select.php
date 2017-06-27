<?php

require 'conexion.php';

$query = "select id, nombre from consultas where dinero >100;";

$result = $conn->query($query);

if ($result->num_rows > 0) {
	echo "<select id='seleccion'>";
    while($row = $result->fetch_assoc()) {
        echo "<option value='". $row["id"]."'>".$row["nombre"]. "</option>";
    }
    echo "</select>";
} else {
    echo "0 results";
}



?>
