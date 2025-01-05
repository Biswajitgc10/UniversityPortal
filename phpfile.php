<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}

$stmt = $mysqli -> prepare("INSERT INTO form (fname,email,comment,subject) VALUES (?, ?, ?)");
$stmt -> bind_param("sss", $fname, $email,$comment,$subject);


if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}