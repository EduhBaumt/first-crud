<?php
    
    try {
        include_once('db.php');
        $email = $_POST['email'];
        $password = $_POST['pass'];

        if(isset($_POST['login']) && !empty($_POST['email']) && !empty($_POST['pass'])){

            $sql = "SELECT * FROM users WHERE email = ':email' and pass = ':pass'";
            $stmt = $pdo->prepare('$sql');
            $stmt->execute([
                ':email' => $email,
                ':pass' => $pass
            ]);

            echo 'Você entrou';
        }
    } catch (PDOException $e) {
        echo 'Erro no login'. $e->getMessage();
        }