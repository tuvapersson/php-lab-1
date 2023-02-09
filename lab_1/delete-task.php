<?php

//This script contains code for getting a task id from a POST-request, deleting the task with that id in the database, and then redirecting the user to the start page.

require_once __DIR__ . '/db-connection.php';


// prepare and bind
$stmt = $mysqli->prepare("DELETE FROM tasks WHERE id = ?");
$stmt->bind_param("i", $_POST["id"]); //add parameters: i = one integer. sss = three strings.
$success = $stmt->execute();

$result = $stmt->get_result();

//redirect user if success
if ($success) {
    header("location: index.php");
}
else {
    echo "error";
}