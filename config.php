<?php

// Database configuration
$db_host = 'localhost';
$db_name = 'basic_php';
$db_user = 'root';
$db_pass = '';

// Connect to the database
try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

?>