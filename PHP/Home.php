<?php

include "DBConn.php";

$all = $pdo->query("SELECT * FROM  list");

?>

<h1 style="font-family: arial">

To Do List

</h1>

<table>

<tr>
    <th>
        Task
    </th>
    <th>
        status
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
                    <button id="status <?php echo $row["id"] ?>" onclick="changeStatus( <?php echo $row['id'] ?> )"><?php
                        echo $row["status"];
                    ?></button>
                </td>

                <td>
                    <a href="edit.php?id= <?php echo $row["id"] ?>"><button>Bewerk</button></a>
                </td>

                <td>
                    <a href="delete.php?id= <?php echo $row["id"] ?>"><button>Verwijder</button></a>
                </td>
            </tr>
            <?php
        }
        ?>

        <a href="add.php"><button>Toevoegen</button></a>


</table>

<script src="java.js"></script>