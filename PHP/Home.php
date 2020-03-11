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

function add($conn)
{
    $sql = "INSERT INTO `list`(`member`, `amount`) VALUES (?, ?)";
    $statement = $conn->prepare($sql);
    $statement->execute(array("auto", 5));
}

$all = "SELECT * FROM  list";

?>

<h1 style="font-family: arial">

To Do List

</h1>
<form method="post">

<label name="name"></label>

</form>