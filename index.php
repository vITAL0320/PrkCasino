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
            <a href="#">
            <p class="deposit_in_cap">Депозит</p>
            </a>
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
  <div id="content"></div>
  <!-- подвал сайта -->
  <div class="footer">
    <img src="" />
  </div>
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