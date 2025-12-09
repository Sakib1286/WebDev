<?php

$conn = new mysqli("localhost", "root", "", "complaint_system");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$address = $_POST['address'];
$description = $_POST['description'];


$sql = "INSERT INTO store_data (address, description) VALUES ('$address', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Data stored successfully!";
    header("Location: index.html?status=success");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>