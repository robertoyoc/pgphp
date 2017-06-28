<?php

$data = json_decode(file_get_contents('php://input'), true);


echo $data["nombre"]. " tiene ". $data["edad"]. " años y es: <br>";

foreach ($data["attb"] as $key => $value) {
	echo "- ".$value."<br>";
}

?>