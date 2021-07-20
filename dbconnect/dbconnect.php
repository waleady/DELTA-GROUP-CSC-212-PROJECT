<?php

define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'delta');
 
try{
    $pdo = new PDO("mysql:host=localhost; dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>