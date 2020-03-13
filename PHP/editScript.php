<?php


include "DBConn.php";

$new = $_POST["task"];

$id = $_GET["id"];

$sql = "UPDATE `list` SET `Tasks`= ? WHERE `id` = ?";

$query = $pdo->prepare($sql);
$query->execute(array($new, $id));

header("Location: Home.php");

?>