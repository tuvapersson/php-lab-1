<?php 
//This script contains code for getting task data from a POST-request, saving that as a new task to the database, and then redirecting the user to the start page.

require_once __DIR__ . '/db-connection.php';


// prepare and bind
$stmt = $mysqli->prepare("INSERT INTO tasks (title, description, status) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $_POST["title"], $_POST["description"], $_POST["status"]); //add parameters: i = one integer. sss = three strings.
$success = $stmt->execute();


//redirect user if success
if ($success) {
    header("location: index.php");
}
else {
    echo "error";
}

?>