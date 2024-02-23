<!-- глобальное включение сессии -->
<?php
session_start();
if ($_SESSION['user']) {
    header('Location: ./index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../styles/Gstyle.css">
    <link rel="stylesheet" href="../styles/Modal-Window.css">
</head>

<body class="background">
    <!-- Шапка сайта -->
    <div class="cap">
        <div class="div-display">
            <img src="../assets/PrkLogo.png" class="cap-image">
            <a id="home-button" href="#">
                <p class="title-navigate">ГЛАВНАЯ</p>
            </a>
            <a id="slots-button" href="#">
                <p class="title-navigate">СЛОТЫ</p>
            </a>
            <a id="live-dealers-button" href="#">
                <p class="title-navigate">LIVE-ДИЛЛЕРЫ</p>
            </a>
        </div>
        <div class="div-display">
            <a href="#openModal-1" class="alignText">ВХОД</a>
            <div id="openModal-1" class="modal">
                <form action="./components/login.php" method="post">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Авторизуйтесь</h3>
                                <a href="#close" title="Close" class="close">×</a>
                            </div>
                            <div class="modal-body">
                                <h6 style="padding:0px; margin: 0px;">Email/Логин</h6>
                                <input type="text" placeholder="login" name="login" />

                                <h6 style="padding:0px; margin:0px;">Пароль</h6>
                                <input type="password" placeholder="pass" name="pass" />
                                <button type="submit" name="Sign-In" style="display: block; margin: 10px auto;">ВОЙТИ</button>
                            </div>
                            <!-- Включение сессии для отображения предупреждения о ошибке в вводе -->

                            <?php
                            // если переменная $_SESSION['message_login'] существует, то выводить отображение об ошибке в теге <p>
                            if ($_SESSION['message_login']) {
                                echo '<p class="message_warning">' . $_SESSION['message_login'] . '</p>';
                            }
                            // Затем удаляется переменная для того чтобы данное предупреждение не отображалось при обновлении страницы
                            unset($_SESSION['message_login']);
                            ?>
                        </div>
                    </div>
                </form>
            </div>
            <a href="#openModal-2" class="alignText">РЕГИСТРАЦИЯ</a>
            <div id="openModal-2" class="modal">
                <form action="/components/register.php" method="post">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Регистрация</h3>
                                <a href="#close" title="Close" class="close">×</a>
                            </div>
                            <div class="modal-body">
                                <h6 style="padding:0px; margin: 0px;">Почта</h6>
                                <input type="text" placeholder="email" name="email" />
                                <h6 style="padding:0px; margin: 0px;">Логин</h6>
                                <input type="text" placeholder="login" name="login" />

                                <h6 style="padding:0px; margin:0px;">Пароль</h6>
                                <input type="password" placeholder="password" name="pass" />
                                <h6 style="padding:0px; margin:0px;">Повторите пароль</h6>
                                <input type="text" placeholder="repeat password" name="repeatpass" />
                                <button name="Sign-In" style="display: block; margin: 10px auto;">РЕГИСТРАЦИЯ</button>
                            </div>
                            <!-- Включение сессии для отображения предупреждения о ошибке в вводе -->

                            <?php
                            // если переменная $_SESSION['message_register'] существует, то выводить отображение об ошибке в теге <p>
                            if ($_SESSION['message_register']) {
                                echo '<p class="message_warning">' . $_SESSION['message_register'] . '</p>';
                            }
                            // Затем удаляется переменная для того чтобы данное предупреждение не отображалось при обновлении страницы
                            unset($_SESSION['message_register']);
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="content"></div>
    <!-- подвал сайта -->
    <div class="footer">
        <img src="./assets/footer/CringeLogo.png" />
        <img src="./assets/footer/FakeLogo.png" />
        <img src=" ./assets/footer/StoneIslandLogo.png" />
        <img src="./assets/footer/PsinaLogo.png" />
        <img src="./assets/footer/AbibasLogo.png" />
    </div>
    <div class="footer">
        <img src="./assets/footer/SchweppesLogo.png " />
        <img src="./assets/footer/YandFoofLogo.png" />
        <img src=" ./assets/footer/FigmaLogo.png" />
        <img src="./assets/footer/GitHubLogo.png" />
        <img src="./assets/footer/NotionLogo.png" />
        <img src="./assets/footer/HipeLogo.png" />
        <img src="./assets/footer/VagnerLogo.png" />
    </div>
    <div class="footer">
        <img src="./assets/footer/ChatGPTLogo.png " />
        <img src="./assets/footer/DiscordLogo.png" />
        <img src="./assets/footer/DomruLogo.png" />
        <img src="./assets/footer/PolitehLogo.png" />
        <img src="./assets/footer/PRKLogo.png" />
        <img src="./assets/footer/VSCodeLogo.png" />
        <img src="./assets/footer/UFCLogo.png" />
    </div>
    <p>По соглашению с Bednov.V.A и Kozlov.V.V., игровая лицензия № 2024/PRK, PRKCasino находится под управлением компанией OOO “KringeAreHype”, Tankistov 46, Perm</p>
</body>
<script>
    // Получаем ссылки на кнопки навигации
    let homeButton = document.getElementById("home-button");
    let slotsButton = document.getElementById("slots-button");
    let liveDealersButton = document.getElementById("live-dealers-button");

    // Получаем ссылку на блок div с id "content"
    let contentDiv = document.getElementById("content");

    // Обработчики нажатия кнопок навигации
    homeButton.addEventListener("click", function() {
        // Загрузка главной страницы
        contentDiv.innerHTML = '<iframe src="./components/Main.html" frameborder="0" width="100%" height="1400px" scrolling="no" style="margin: 0;"></iframe>';
    });

    slotsButton.addEventListener("click", function() {
        // Загрузка страницы со слотами
        contentDiv.innerHTML = '<iframe src="./components/SlotsList.html" frameborder="0" width="100%" height="1400px" scrolling="no" style="margin: 0;"></iframe>';
    });

    liveDealersButton.addEventListener("click", function() {
        // Загрузка страницы с лайв-дилерами
        contentDiv.innerHTML = '<iframe src="./components/Live_Dealers.html" frameborder="0" width="100%" height="1400px" scrolling="no" style="margin: 0;"></iframe>';
    });
    // Загрузка главной страницы при загрузке страницы
    window.addEventListener("DOMContentLoaded", function() {
        contentDiv.innerHTML = '<iframe src="./components/Main.html" frameborder="0" width="100%" height="1400px" scrolling="no" style="margin: 0;"></iframe>';
    });
</script>

</html>