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
  <link rel="stylesheet" href="./styles/deposit_windows.css">
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
        <html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment Methods</title>
        </head>
        <body>
            <div class="div-display">
            <a href="#openModal_Deposit" ><p class="deposit_in_cap">Депозит</p></a>
            <div id="openModal_Deposit" class="modal">
                <form action="./php/deposit.php" method="post">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Пополнить баланс</h3>
                                <a href="#close" title="Close" class="close">×</a>
                            </div>
                            <div class="modal-body">
                                <div class="payment-methods-container">
                                    <div class="payment-method sbp" style="margin-right: 5px;">
                                        <img src="./assets/PaymentSystems/Prk_SBP.png" alt="SBP">
                                        <span>SBP</span>
                                    </div>
                                    <div class="payment-method pay" style="margin-left: 5px;">
                                        <img src="./assets/PaymentSystems/Prk_Pay.png" alt="Pay">
                                        <span>PAY</span>
                                    </div>
                                    <div class="payment-method sber" style="margin-left: 5px;">
                                        <img src="./assets/PaymentSystems/Prk_Sber.png" alt="Sber">
                                        <span>Сбер</span>
                                    </div>
                                    <div class="payment-method binance" style="margin-right: 5px;" >
                                        <img src="./assets/PaymentSystems/Prk_Binance.png" alt="Binance">
                                        <span>Binance</span>
                                    </div>
                                    <div class="slider-container">
                                        <label for="amount">Сумма (500 - 30000 RUB)</label>
                                        <input type="number" id="balance" name="balance" value="500"> RUB
                                        <input type="range" id="amount-range" name="amount-range" min="500" max="30000" value="500">
                                        <button id="pay-button">Оплатить</button>
                                        <script src="./js/Button_Deposit.js"></script>
                                    </div>';
      if ($_SESSION['message_deposit']) {
        echo '<p class="message_warning">' . $_SESSION['message_deposit'] . '</p>';
        unset($_SESSION["message_deposit"]);
      }
      echo '
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <a href="#">
                <p class="alignText">Баланс: ' . $_SESSION['user']['balance'] . ' ₽</p>
            </a>
            <a href="#">
                <p class="alignText">' . $_SESSION['user']['login'] . '</p>
            </a>
            <a href="./php/logout.php">
                <p class="alignText">выйти</p>
            </a>
            </div>
        </body>
        </html>';
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