<!-- глобальное включение сессии -->
<?php
session_start();
if (!$_SESSION['user']) {
  header('Location: ./without_user.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./styles/Gstyle.css">
  <link rel="stylesheet" href="./styles/Banner-Style.css">
  <link rel="stylesheet" href="./styles/Modal-Window.css">
  <script src="./components/Banner_Script.js"></script>
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

    <!-- отображение в шапке авторизованного пользователя -->
    <?php
    if ($_SESSION['user']) {
      echo '
            <div class="div-display">
            <a href="#openModal_Deposit" class="deposit_in_cap">Депозит</a>
            <div id="openModal_Deposit" class="modal">
                <form action="" method="post">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Пополнить баланс</h3>
                                <a href="#close" title="Close" class="close">×</a>
                            </div>
                            <div class="modal-body">
                                <h6 style="padding:0px; margin: 0px;">Выберите платежную систему</h6>
                                <input type="radio" placeholder="Visa/Mastercard" name="VISA/Mastercard" />
                                <h6>Visa<h6>
                                <input type="radio" name="Bitcoin" />
                                <input type="radio" name="WebMoney" />
                                <input type="radio" name="СПБ" />
                                <button name="Sign-In" style="display: block; margin: 10px auto;">Пополнить</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
              <a href="#">
                <p class="alignText">Баланс: 0,00₽</p>
              </a>
              <a href="#">
                <p class="alignText">' . $_SESSION['user']['login'] . '</p>
              </a>
              <a href="./components/logout.php">
                <p class="alignText">выход</p>
              </a>
            </div>';
    }
    ?>
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