<?php
# src/mysql.php

$hostname = "mysql";
$dbname = "database_name";
$username = "example-user";
$password = "my_cool_secret";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);

    // Configure PDO error mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Failed to connect: " . $e->getMessage();
}

// Perform database operations

// Close the connection
$conn = null;
