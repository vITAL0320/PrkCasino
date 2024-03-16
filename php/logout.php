<?php
session_start();
unset($_SESSION['user']);
header('Location: ../without_user.php');
