<?php
//This page contains a form for creating a new task and a button for deleting the task. 

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
$stmt = $mysqli->prepare("SELECT * FROM tasks WHERE id=?");
$stmt->bind_param("i", $_GET["id"]); //add parameters: i = one integer. sss = three strings.
$stmt->execute();

$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit task</title>
</head>
<body>
<main>
        <ul>
         <?php
            while($row = $result->fetch_assoc()) {
                echo "<li>{$row["title"]} – {$row["description"]}</li>";
            }
        ?>
        </ul>

    </main>
</body>
</html>