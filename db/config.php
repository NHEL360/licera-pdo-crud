<?php
define('DB_SERVER', 'localhost');
define('DB_NAME', 'u593341949_db_serenio');
define('DB_USERNAME', 'u593341949_dev_serenio');
define('DB_PASSWORD', '20212014Serenio');

try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>