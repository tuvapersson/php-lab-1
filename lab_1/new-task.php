<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New task</title>
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
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
}
    }
</script>
</head>
<body>
<button onclick="history.back()" class="back-btn">Go Back</button>
    <main>
        <h1>Create task</h1>
    <form name="createTask" action="create-task.php" onsubmit="return validateForm()" method="post">
    <input type="text" name="title" placeholder="Title"><br>
    <textarea name="description" rows="4" cols="27" placeholder="Description"></textarea><br>
  <input type="hidden" name="status" value="0">
  <p class="form-validation"></p>
    <input type="submit" value="Submit" class="submit-button">
    </form>
    </main>
</body>
</html>