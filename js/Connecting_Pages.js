// Получаем ссылки на кнопки навигации
let homeButton = document.getElementById("home-button");
let slotsButton = document.getElementById("slots-button");
let liveDealersButton = document.getElementById("live-dealers-button");

// Получаем ссылку на блок div с id "content"
let contentDiv = document.getElementById("content");

// Обработчики нажатия кнопок навигации
homeButton.addEventListener("click", function() {
  // Загрузка главной страницы
  contentDiv.innerHTML = '<iframe src="./components/Main.html" frameborder="0" width="100%" height="1800px" scrolling="no" style="margin: 0;"></iframe>';
});

slotsButton.addEventListener("click", function() {
  // Загрузка страницы со слотами
  contentDiv.innerHTML = '<iframe src="./components/SlotsList.html" frameborder="0" width="100%" height="1800px"" scrolling="no" style="margin: 0;"></iframe>';
});

liveDealersButton.addEventListener("click", function() {
  // Загрузка страницы с лайв-дилерами
  contentDiv.innerHTML = '<iframe src="./components/Live_Dealers.html" frameborder="0" width="100%" height="1800px"" scrolling="no" style="margin: 0;"></iframe>';
});
// Загрузка главной страницы при загрузке страницы
window.addEventListener("DOMContentLoaded", function() {
  contentDiv.innerHTML = '<iframe src="./components/Main.html" frameborder="0" width="100%" height="1800px" scrolling="no" style="margin: 0;"></iframe>';
});