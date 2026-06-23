<?php

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['pass'])){

    include_once('db.php');
    $email = $_POST['email'];
    $password = $_POST['pass'];
    } else {
        header('location: login.php');
    }