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

$all = $pdo->query("SELECT * FROM  list");

?>

<h1 style="font-family: arial">

To Do List

</h1>

<table>

<tr>
    <th>
        
    </th>
</tr>

<?php 

        while ($row = $all->fetch(PDO::FETCH_ASSOC))
        {
            ?>
            <tr>
                <td>
                    <?php
                        echo $row["Tasks"];
                    ?>
                </td>

                <td>
                    <a href="edit.php?id= <?php echo $row["id"] ?>"><button>Bewerk</button></a>
                </td>

                <td>
                    <a><button>Verwijder</button></a>
                </td>
            </tr>
            <?php
        }
        ?>


</table>