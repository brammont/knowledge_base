<?php
$servername = "localhost"; // Ensure this matches your XAMPP setup
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "knowledge_base"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Database connection is successful!";
}
?>
