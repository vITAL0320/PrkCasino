<?php
session_start();
require_once('db.php');

$balance = $_POST['balance'];

// Получаем ID текущего пользователя из сессии
$user_id = $_SESSION['user']['id'];

// Пополнение баланса
if (empty($balance) || $balance < 500) {
    $_SESSION['message_deposit'] = 'Пополнение доступно от 500 рублей!';
    header('Location: ../#openModal_Deposit');
} else {
    // Получаем текущий баланс пользователя из базы данных
    $query = "SELECT `balance` FROM `users` WHERE `id` = '$user_id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $current_balance = $row['balance'];
    } else {
        $_SESSION['message_deposit'] = 'Ошибка получения текущего баланса пользователя.';
        header('Location: ../#openModal_Deposit');
        exit; // Прерываем выполнение скрипта, если не удалось получить текущий баланс
    }

    // Вычисляем новый баланс пользователя
    $new_balance = $current_balance + $balance;

    // Обновляем баланс пользователя в базе данных
    $update_query = "UPDATE `users` SET `balance` = '$new_balance' WHERE `id` = '$user_id'";
    $update_result = mysqli_query($connect, $update_query);

    if ($update_result) {
        // Обновляем баланс пользователя в сессии
        $_SESSION['user']['balance'] = $new_balance;

        $_SESSION['message_deposit'] = 'Баланс успешно пополнен!';
        header('Location: ../#openModal_Deposit');
    } else {
        $_SESSION['message_deposit'] = 'Ошибка обновления баланса пользователя.';
        header('Location: ../#openModal_Deposit');
    }
}
