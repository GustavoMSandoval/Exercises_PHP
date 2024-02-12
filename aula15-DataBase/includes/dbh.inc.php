<?php 

define('PATH',3307);
$dsn = "mysql:host=localhost:".PATH.";dbname=mydb";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn,$dbusername,$dbpassword);//important one
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed " . $e->getMessage();
}