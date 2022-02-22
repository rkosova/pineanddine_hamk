<?php  
// Database configuration  
$dbHost     = "db";  
$dbUsername = "root";  
$dbPassword = "password";  
$dbName     = "menu";  
  
// Create database connection  
$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($con->connect_error) {  
    die("Connection failed: " . $con->connect_error);  
}
