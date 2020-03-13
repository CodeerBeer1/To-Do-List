<?php

include "DBConn.php";

$id = $_GET["id"];

$sql = "DELETE FROM `list` WHERE `id` = ?";

$query = $pdo->prepare($sql);
$query->execute(array($id));

header("Location: Home.php");

?>