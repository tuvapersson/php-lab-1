<?php 
//This script contains code for getting task data from a POST-request, saving that as a new task to the database, and then redirecting the user to the start page.
$servername = "localhost";
$username = "root";
$password = "root";
$database = "todo_application";

//connect to mySQL
$mysqli = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }

// prepare and bind
$stmt = $mysqli->prepare("INSERT INTO tasks (title, description) VALUES (?, ?)");
$stmt->bind_param("i", $_POST["id"]); //add parameters: i = one integer. sss = three strings.
$stmt->execute();

$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create task</title>
</head>
<body>
<form action="welcome.php" method="post">
Title: <input type="text" name="title"><br>
Description: <input type="text" name="description"><br>
<input type="submit">
</form>
</body>
</html>