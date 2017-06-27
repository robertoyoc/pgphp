<?php
require ('pg_conexion.php');

$nombre = $_GET["nombre"];
$dinero = $_GET["dinero"];

$query= "insert into consultas(nombre, dinero) values ('$nombre', '$dinero') returning id;";

error_reporting(E_ALL & ~E_WARNING);

$result = pg_query($dbconn, $query);

if($result)
{
	while ($row = pg_fetch_row($result)) {
	$last_id = $row[0];
	}
	echo "Se ha insertado con id: ".$last_id;
}
else
{
  $error = pg_last_error();

  // you need to adapt this regex
  if (preg_match('/duplicada/i', $error))
  {
    echo "Esta llave ya existe";
  }
  // you need to adapt this regex
  elseif(preg_match('/different type/i', $error))
  {
    echo "You should enter wrong type for column blabla";
  }
  else
  {
    // different error
  }
}




error_reporting(E_ALL);


?>
