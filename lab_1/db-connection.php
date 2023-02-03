<?php $servername = "localhost";
$username = "root";
$password = "root";
$database = "todo_application";

//connect to mySQL
$mysqli = new mysqli($servername, $username, $password, $database);


// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }