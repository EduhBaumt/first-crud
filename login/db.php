 <?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'login';

    try {
        $dsn = "mysql:host=localhost;dbname=login";
        $pdo = new PDO($dsn, $user, $pass);
    } catch (PDOException $e) {
        echo "Database conecction error: ". $e->getMessage();
    }