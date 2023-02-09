<?php

//This is the start page where all tasks are displayed including a link for editing/deleting each task and another link for adding a new task.

require_once __DIR__ . '/db-connection.php';
$result = $mysqli->query("SELECT * FROM tasks");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>To do list</title>
</head>
<body>
<a href="new-task.php" class="new-task"><button>+ New task</button></a>
    <main>
        <!-- TODO LIST OUTPUT -->
        <h1 class="h1">TO-DO LIST</h1>
        <ul>
         <?php
            while($row = $result->fetch_assoc()) {
                echo "<a href='view-task.php?id={$row["id"]}'><li>{$row["title"]}</li></a>";
            }
        ?>
        </ul>

    </main>
    
</body>
</html>