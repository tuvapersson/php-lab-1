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
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script>
        window.onload = function() {
            if (<?= $task["status"] ?> == 1) {
                document.getElementById("status").checked = true;
            }
            else {
                document.getElementById("status").checked = false;
            }
        }

        function validateForm() {

        let titleField = document.forms["updateTask"]["title"];
        let descriptionField = document.forms["updateTask"]["description"];
        // let radioButtons = document.forms["updateTask"]["status"];
        let validationOutput = document.querySelector(".form-validation");
        if (titleField.value == "") {
            validationOutput.innerHTML = "Title must be filled out.";
            return false;
        }
        else if (descriptionField.value == "") {
            validationOutput.innerHTML = "Description must be filled out.";
            return false;
        }
        // else if (!(radioButtons[0].checked || radioButtons[1].checked)) {
        // validationOutput.innerHTML = "Please select if task is completed or not.";
        // return false;
}
</script>
</head>
<body>
<main>
        <h1>
            <?= $task["title"] ?>
        </h1>

        <form name="updateTask" action="update-task.php" onsubmit="return validateForm()" method="post">
            <input type="text" name="title" value="<?= $task["title"] ?>"><br>
            <textarea name="description" rows="4" cols="27"><?= $task["description"] ?></textarea><br>
             <input type="hidden" name="status" value="0">
             <input type="checkbox" name="status" id="status" value="1">
             <label for="status">Task completed</label>
             <input type="hidden" name="id" value="<?= $task["id"] ?>"><br>
             
             <p class="form-validation"></p>
            <input type="submit" value="Submit" class="submit-button">
        </form>

</main>
</body>
</html>