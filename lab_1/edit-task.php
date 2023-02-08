<?php
//This page contains a form for creating a new task and a button for deleting the task. 

require 'db-connection.php';

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
        <p>
            <?= $task["description"] ?>
        </p>
        <form action="delete-task.php" method="post">
            <input type="hidden" name="id" value="<?= $task["id"] ?>">
            <input type="submit" value="Delete task">
        </form>

        <form name="updateTask" action="update-task.php" onsubmit="return validateForm()" method="post">
            Title: <input type="text" name="title" value="<?= $task["title"] ?>"><br>
            Description: <input type="text" name="description" value="<?= $task["description"] ?>"><br>
             <input type="hidden" name="status" value="0">
             <input type="checkbox" name="status" id="status" value="1">
             <label for="status">Task completed</label>
             <input type="hidden" name="id" value="<?= $task["id"] ?>"><br>
             
             <p class="form-validation"></p>
            <input type="submit" value="Submit">
        </form>

</main>
</body>
</html>