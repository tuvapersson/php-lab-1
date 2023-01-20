<?php

//This is the start page where all tasks are displayed including a link for editing/deleting each task and another link for adding a new task.

$servername = "localhost";
$username = "root";
$password = "root";
$database = "todo_application";

$mysqli = new mysqli($servername, $username, $password, $database);

echo $mysqli->host_info;

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }
  echo "Connected successfully";

//   $sql = "INSERT INTO todo_application (title, description)
//   VALUES ('exempel', 'Beskrivning')";
  
//   if ($mysqli->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $mysqli->error;
//   }
  
//   $mysqli->close();

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