const paymentMethods = document.querySelectorAll('.payment-method');
    
        paymentMethods.forEach(method => {
            method.addEventListener('click', function() {
                // Удаляем класс selected у всех элементов
                paymentMethods.forEach(method => method.classList.remove('selected'));
                // Добавляем класс selected только кликнутому элементу
                this.classList.add('selected');
            });
        });

        // кнопка отправить

         // Получить поле ввода и элементы ползунка диапазона
    let amountInput = document.getElementById('balance');
    let amountRange = document.getElementById('amount-range');

    // Обновляем поле ввода при изменении значения ползунка диапазона
amountRange.addEventListener('input', function() {
    amountInput.value = this.value;
});

// Обновляем ползунок диапазона при изменении значения поля ввода
amountInput.addEventListener('input', function() {
    amountRange.value = this.value;
});