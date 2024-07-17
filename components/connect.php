<?php

$db_host = 'localhost';
$db_name = 'mobileecommerce';
$user_name = 'root';
$user_password = '';

try {
    // Establish a connection to the database
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $user_name, $user_password);

    // Set PDO to throw exceptions on errors
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Connected successfully lasan";
} catch(PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
}

?>
