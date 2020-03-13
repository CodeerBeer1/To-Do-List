<?php

include "DBConn.php";

$task = $_POST["task"];

$sql = "INSERT INTO `list` (`Tasks`) VALUES ( ? )";

$query = $pdo->prepare($sql);
$query->execute(array($task));

header("Location: Home.php");

?>