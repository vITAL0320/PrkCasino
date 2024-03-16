<?php
session_start();
// Подключения БД
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if (empty($login) || empty($pass)) {
    $_SESSION['message_login'] = 'Заполните все поля';
    header('Location: ../#openModal-1');
} else {

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' ");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "email" => $user['email'],
            "balance" => $user['balance'],
        ];
        header('Location: ../index.php');
    } else {
        $_SESSION['message_login'] = 'Неверный логин или пароль';
        header('Location: ../#openModal-1');
    }
}
