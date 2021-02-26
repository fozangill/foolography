<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "foolography";

// Create database connection
try{
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}



$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword,$dbName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";