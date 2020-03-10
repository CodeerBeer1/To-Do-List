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
    echo "connectie gemaakt";
}

catch(PDOException $e)
{
    print $e->getMessage();
}

$sql = "INSERT INTO benodigdheden (de ding) VALUES (?, ?)";
$statement = $pdo->prepare($sql);
$statement->execute(array("auto", "wiel"));

?>

<h1>



</h1>