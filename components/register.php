<?php
session_start();
// Принятие данных с формы регистраниции
require_once('db.php');

$email = $_POST['email'];
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];

if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
    $_SESSION['message_register'] = 'Заполните все поля';
    header('Location: ../#openModal-2');
} else {
    if ($pass != $repeatpass){
        $_SESSION['message_register'] = 'Пароли не совпадают';
        header('Location: ../#openModal-2');
    } else {
        // Отправка в БД
        $sql = "INSERT INTO `users` (email, login, pass) VALUES ('$email', '$login', '$pass')";
        // Проверка запроса true или не true
       if ($conn -> query($sql) === TRUE) {
        echo 'Успешная регистрация';
       } else {
        echo "Ошибка: " .$conn->error;
       }
    }
}
