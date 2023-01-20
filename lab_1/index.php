<?php

//This is the start page where all tasks are displayed including a link for editing/deleting each task and another link for adding a new task.

$servername = "localhost";
$username = "root";
$password = "root";
$database = "todo_application";

$connection = new mysqli($servername, $username, $password, $database);

echo $connection->host_info;

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
                <li></li>
            </ul>
        </nav>
    </header>
    <main>

    </main>
    
</body>
</html>