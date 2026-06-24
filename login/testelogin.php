<?php
    //16:30
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pass'])){

    include_once('db.php');
    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    $sql = "SELECT * FROM users WHERE email = ':email' and pass = ':pass'";
    $stmt = $pdo->prepare('$sql');
    $stmt->execute([
        ':email' => $email,
        ':pass' => $pass
    ]);
    echo $stmt;
    } else {
        header('location: login.php');
    }