<?php
// Read JSON to connect to the database.
$json = file_get_contents("db.json");
$db = json_decode($json, true);

try
{
    $connection = mysqli_connect($db["HOST"], $db["USER"], $db["PASSWORD"], $db["NAME"]) or $error = 1;
}
catch (Exception $exception)
{
    die("La aplicación NO se pudo conectar con la base de datos: " . $exception->getMessage());
}

mysqli_set_charset($connection, "utf8");
?>