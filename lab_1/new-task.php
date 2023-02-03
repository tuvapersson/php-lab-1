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
    <script>
        function validateForm() {
        let titleField = document.forms["createTask"]["title"];
        let descriptionField = document.forms["createTask"]["description"];
        let radioButtons = document.forms["createTask"]["status"];
        let validationOutput = document.querySelector(".form-validation");
        if (titleField.value == "") {
            validationOutput.innerHTML = "Title must be filled out.";
            return false;
        }
        else if (descriptionField.value == "") {
            validationOutput.innerHTML = "Description must be filled out.";
            return false;
        }
        else if (!(radioButtons[0].checked || radioButtons[1].checked)) {
        validationOutput.innerHTML = "Please select if task is completed or not.";
        return false;
}
    }
</script>
</head>
<body>
    <form name="createTask" action="create-task.php" onsubmit="return validateForm()" method="post">
    Title: <input type="text" name="title"><br>
    Description: <input type="text" name="description" ><br>
    Status: <input type="radio" id="not-completed" name="status" value="0">
  <label for="not-completed">Not completed</label>
    <input type="radio" id="completed" name="status" value="1">
  <label for="completed">Completed</label><br><br>
  <p class="form-validation"></p>
    <input type="submit" value="Submit">
    </form>
</body>
</html>