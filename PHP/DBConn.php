<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "list";

$dsn = 'mysql:host='.$server.';dbname='.$database;
$pdo = new PDO($dsn, $username, $password);

try
{
    $pdo = new PDO($dsn, $username, $password);
}

catch(PDOException $e)
{
    print $e->getMessage();
}

?>