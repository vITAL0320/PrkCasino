<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <!-- Переделать под тег див со стилями -->
        <form>
            <h2><?= $_SESSION['user']['login'] ?></h2>
            <a href="#"><?= $_SESSION['user']['email'] ?></a>
        </form>
    </body>
</html>