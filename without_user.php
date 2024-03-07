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
    <link rel="stylesheet" href="./styles/Banner-Style.css">
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
                                <input type="text" placeholder="Логин или почта" name="login" />

                                <h6 style="padding:0px; margin:0px;">Пароль</h6>
                                <input type="password" placeholder="Пароль" name="pass" />
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
                                <input type="text" placeholder="Логин" name="login" />

                                <h6 style="padding:0px; margin:0px;">Пароль</h6>
                                <input type="password" placeholder="Пароль" name="pass" />
                                <h6 style="padding:0px; margin:0px;">Повторите пароль</h6>
                                <input type="text" placeholder="Повторите пароль" name="repeatpass" />
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
    <!-- баннер -->
    <div class="first_img">
        <button class="navigation_banner prev">&#8592</button>
        <div class="carousel-container">
            <div class="carousel_items">
                <div class="carousel_item item1">
                </div>
                <div class="carousel_item item2">
                </div>
                <div class="carousel_item item3">
                </div>
                <div class="carousel_item item4">
                </div>
                <div class="carousel_item item5">
                </div>
            </div>
        </div>
        <button class="navigation_banner next">&#8594</button>
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
    <script src="./js/Banner_Script.js"></script>
    <script src="./js/Connecting_Pages.js"></script>
</body>

</html>