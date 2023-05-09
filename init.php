<?php
//* Manejo de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

//* Configuración de fechas y timezone
setlocale(LC_TIME, 'es', 'spa', 'es_ES');
date_default_timezone_set('Europe/Madrid');

//* Conexión a base de datos
$host = 'localhost';
$user = $password = 'root';
$database = 'micro_cms';
$port = '8889';

$app_db = mysqli_connect($host, $user, $password, $database, $port);
if ($app_db === false) {
    die("Error al conectar la base de datos:  ". mysqli_connect_error());
}
;

?>