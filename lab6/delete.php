<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'sl');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Check if delete request is sent
if(isset($_GET['id'])) {
    $delete_id = $_GET['id'];
    // Delete record
    $sql = "DELETE FROM registration WHERE id = $delete_id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>
