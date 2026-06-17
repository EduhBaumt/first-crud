<?php 
    $user = 'root';
    $pass = '';
    $host = 'localhost';
    $dbname = 'login';

    try {
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

        $pdo = new PDO($dsn, $user, $pass);

    } catch(PDOException $e) {
        echo "erro na conexão: " . $e->getMessage();
    }
?>