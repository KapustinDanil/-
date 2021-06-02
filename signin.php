<?php
session_start();

require_once 'connect.php';

$email = $_POST['login'];
$password = $_POST['password'];

$error_fields = [];

if ($login === '') {
    $error_fields[] = 'login';
}

if ($password === '') {
    $error_fields[] = 'password';
}

if (!empty($error_fields)) {
    $response = [
        "status" => false,
        "type" => 1,
        "message" => "Проверьте правильность полей",
        "fields" => $error_fields
    ];

    echo json_encode($response);

    die();
}

$check_user = mysqli_query($conn, "SELECT * FROM `user1` WHERE `email` = '$email' AND `password` = '$password'");

    if (mysqli_num_rows($check_user) > 0) {
        header("Location: YouTube.html");

    } else {

        $response = [
            "status" => false,
            "msg" => 'Неверный логин или пароль'
        ];
        header("Location: index.html");
        echo json_encode($response);
    }

    ?>
