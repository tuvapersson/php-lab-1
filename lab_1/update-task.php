<?php

require_once __DIR__ . '/db-connection.php';

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