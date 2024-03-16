<?php
session_start();
require_once('db.php');

$email = $_POST['email'];
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];

if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
    $_SESSION['message_register'] = 'Заполните все поля';
    header('Location: ../#openModal-2');
    exit;
}

if ($pass != $repeatpass) {
    $_SESSION['message_register'] = 'Пароли не совпадают';
    header('Location: ../#openModal-2');
    exit;
}

// Отправка в БД
$sql = "INSERT INTO `users` (email, login, pass, balance) VALUES ('$email', '$login', '$pass', 0)";
if ($connect->query($sql) === TRUE) {
    // Устанавливаем сессию для зарегистрированного пользователя
    $_SESSION['user'] = [
        "id" => mysqli_insert_id($connect), // Получаем ID только что созданного пользователя
        "login" => $login,
        "email" => $email,
        "balance" => 0 // Устанавливаем баланс по умолчанию равным 0
    ];
    header('Location: ../index.php');
} else {
    $_SESSION['message_register'] = 'Ошибка при регистрации';
    header('Location: ../#openModal-2');
}
