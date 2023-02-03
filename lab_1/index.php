<?php

//This is the start page where all tasks are displayed including a link for editing/deleting each task and another link for adding a new task.

require 'db-connection.php';
$result = $mysqli->query("SELECT * FROM tasks");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
</head>
<body>
    <header>
        <nav>
            <ul>
            </ul>
        </nav>
    </header>
    <main>
        <!-- TODO LIST OUTPUT -->
        <ul>
         <?php
            while($row = $result->fetch_assoc()) {
                echo "<li><a href='edit-task.php?id={$row["id"]}'>{$row["title"]} – {$row["description"]}</li>";
            }
        ?>
        </ul>

    </main>
    
</body>
</html>