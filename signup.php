<?php
session_start();
require_once 'connect.php';


$email = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {

    mysqli_query($conn, "INSERT INTO `user1` (`id`,`email`, `password`,`create_time`) VALUES (0,'$email', '$password', CURRENT_TIMESTAMP)");

    $_SESSION['msg'] = 'Регистрация прошла успешно!';
    header ( "Location: index.html");
} else 
{
    $_SESSION['msg'] = 'Пароли не совпадают';
    header("Location: registration.html");
}

?>