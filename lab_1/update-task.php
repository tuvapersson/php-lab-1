<?php

//This script contains code for getting task data from a POST-request, saving that to an existing task in the database, and then redirecting the user to the start page.

require 'db-connection.php';

// prepare and bind
$stmt = $mysqli->prepare("UPDATE tasks SET title = ?, description = ?, status = ? WHERE id = ?");
$stmt->bind_param("ssii", $_POST["title"], $_POST["description"], $_POST["status"], $_POST["id"]);
$success = $stmt->execute();


//redirect user if success
if ($success) {
    header("location: index.php");
}
else {
    echo "error";
}