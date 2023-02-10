<?php
//This page contains a form for creating a new task and a button for deleting the task. 

require_once __DIR__ . '/db-connection.php';

// prepare and bind
$stmt = $mysqli->prepare("SELECT * FROM tasks WHERE id=?");
$stmt->bind_param("i", $_GET["id"]); //add parameters: i = one integer. sss = three strings.
$stmt->execute();

$result = $stmt->get_result();
$task = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit task</title>
    <script>
        window.onload = function checkStatus() {
            if (<?= $task["status"] ?> == 1) {
                document.querySelector(".task-status").innerHTML = "Status: Completed"
            }
            else {
                document.querySelector(".task-status").innerHTML = "Status: Not completed"
            }
        }
    </script>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    
</head>
<body>
<button onclick="history.back()" class="back-btn">Go Back</button>
<main>
        <h1>
            <?= $task["title"] ?>
        </h1>
        <p>
            <?= $task["description"] ?>
        </p>
        <p class="task-status"></p>
        <a href='edit-task.php?id=<?= $task["id"] ?>'><button class="edit-button">Edit task</button></a>
        <form action="delete-task.php" method="post">
            <input type="hidden" name="id" value="<?= $task["id"] ?>">
            <input type="submit" value="Delete task" class="delete-button">
        </form>

</main>
</body>
</html>