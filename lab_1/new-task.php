<?php

//This page contains a form for creating a new task.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New task</title>
</head>
<body>
    <form action="create-task.php" method="post">
    Title: <input type="text" name="title"><br>
    Description: <input type="text" name="description"><br>
    Status: <input type="number" name="status"><br>
    <input type="submit">
    </form>
</body>
</html>