<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ukl";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM rent_mobil  
WHERE id_mobil = 3";

if ($conn->query($sql) === TRUE) {
    echo "Record Deleted Successfully";
} else {
    echo "Error Deleting Record: " . $conn->error;
}

$conn->close();
?>