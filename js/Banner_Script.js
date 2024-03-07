            const carouselItems = document.querySelectorAll(".carousel_item");
            const prevBtn = document.querySelector(".prev");
            const nextBtn = document.querySelector(".next");
            
            let i = 0;
            
            function updateImage() {
                Array.from(carouselItems).forEach((item, index) => {
                    item.style.transform = `translateX(-${i * 100}%)`;
                });
            }
            
            prevBtn.addEventListener('click', () => {
                if (i > 0) {
                    i--;
                } else {
                    i = carouselItems.length - 1;
                }
                updateImage();
            });
            
            nextBtn.addEventListener('click', () => {
                if (i < carouselItems.length - 1) {
                    i++;
                } else {
                    i = 0;
                }
                updateImage();
            });
            // автоматическое пролистование
            setInterval(() => {
            if (i < carouselItems.length - 1) {
                i++;
            } else {
                i = 0;
            }
            updateImage();
        }, 15000);