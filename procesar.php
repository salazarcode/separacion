<?php   

// Leemos el cuerpo del request
$body = file_get_contents('php://input');

// Decodificamos la cadena JSON en un objeto PHP
$data = json_decode($body);

$array = array("nombreRecibido" => $data->nombres;);

$json = json_encode($array);

header('Content-Type: application/json');

echo $json;