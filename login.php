<?php
    // controllo dei parametri
    define('MIN_LEN', 8);

    if( !isset($_POST['email']) || !isset($_POST['password']) ){
        header($_SERVER["SERVER_PROTOCOL"] . ' 422 Unprocessable Entity');
        echo json_encode(['error' => 'You need to send email and password']);
        exit();
    }

    $email = $_POST["email"];

    if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
        header($_SERVER["SERVER_PROTOCOL"] . ' 422 Unprocessable Entity');
        echo json_encode(['error' => 'Email is not valid']);
        exit();
    }

    $password = $_POST["password"];

    if( strlen($password) < MIN_LEN ){
        header($_SERVER["SERVER_PROTOCOL"] . ' 422 Unprocessable Entity');
        echo json_encode(['error' => 'The password should be at least 8 characters']);
        exit();
    }

    $passFile = require __DIR__ . '/password.php';

    if( !isset($passFile) || !password_verify($password, $passFile[$email]) ){
        header($_SERVER["SERVER_PROTOCOL"] . ' 401 Unauthorized');
        echo json_encode(['error' => 'User not authenticated']);
        exit();
    }
    
    echo json_encode(['msg' => 'User authenticated!']);

?>