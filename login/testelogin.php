<?php
    session_start();

    include_once('db.php');
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':email' => $email]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && $usuario['pass'] === $pass) {
        $_SESSION['user_id'] = $usuario['id'];
        $_SESSION['user_name'] = $usuario['name'];
        header('location: home.php');
        exit;
    } else {
                
    }