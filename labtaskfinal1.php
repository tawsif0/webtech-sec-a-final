<?php

$servername = " localhost ";
$username = "root";
$password = "";
$dbname = "update";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE update SET name = 'Doctor-1001',password ='doctor-1',gender ='male',email ='doctor@gmail.com',WHERE username=doctor";

if ($conn->query($sql) === true) {
    echo "Successfully updated";
} else {
    echo "Error update: " . $conn->error;
}

$conn->close();
