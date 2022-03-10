<?php
$servername = "localhost";
$username = "user";
$password = "pw";
$dbname = "";

// Creating a connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// Creating a database named newDB
$sql = "CREATE DATABASE coviddb";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully with the name coviddb";
    $dbname = "coviddb";
} else {
    echo "Error creating database: " . $conn->error;
}
// closing connection
$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);
// Creating a table named country_notification
$sql = "CREATE TABLE country_notification(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    country VARCHAR(30) NOT NULL,
    country_code VARCHAR(30) NOT NULL,   
    continent VARCHAR(30) NOT NULL,
    population VARCHAR(30) NOT NULL,
    indicator VARCHAR(30) NOT NULL,
    weekly_count VARCHAR(30) NOT NULL,
    year_week VARCHAR(30) NOT NULL,
    cumulative_count VARCHAR(30) NOT NULL,
    source VARCHAR(100) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "<br>Table created successfully with the name country_notification";
} else {
    echo "Error creating Table: " . $conn->error;
}
// closing connection
$conn->close();
?>
