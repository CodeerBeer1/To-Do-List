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

$id = $_GET["id"];

$sql = "SELECT `Tasks` FROM list WHERE id = $id";
$all = $pdo->query($sql);
$alles = $all->fetch();

function edit($conn)
{
    echo "hoi";
    $sql = "UPDATE `list` SET `Tasks`= ?, WHERE id = $id";
    $query = $conn->prepare($sql);
}

?>

<h1 style="font-family: arial">

Bewerken

</h1>

<form method="post" action="edit()">

    <input value="<?php echo $alles["Tasks"] ?>"></input>

</form>


