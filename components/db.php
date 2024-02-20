<?php

    $connect = mysqli_connect('localhost', 'root', '', 'registeruser');

    if (!$connect) {
        die('Error connect to DataBase');
    }