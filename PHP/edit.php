<?php

include "DBConn.php";

$id = $_GET["id"];

$sql = "SELECT `Tasks` FROM list WHERE id = $id";
$all = $pdo->query($sql);
$alles = $all->fetch();

?>

<h1 style="font-family: arial">

Bewerken

</h1>

<form method="post" action="editScript.php?id=<?php echo $id ?>">

    <input name="task" value="<?php echo $alles["Tasks"] ?>"></input>
    <input type="submit"></input>

</form>


