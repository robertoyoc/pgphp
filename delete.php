<?php
$id = $_GET["id"];

require 'conexion.php';

$sql = "DELETE FROM consultas WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


?>
