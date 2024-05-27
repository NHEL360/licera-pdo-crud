<?php

$host = 'localhost';
$dbname = 'u593341949_db_licera';
$username = 'u593341949_dev_licera';
$password = '20201362Licera';

try {   
 $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
 die("Database connection failed: " . $e->getMessage());
}

