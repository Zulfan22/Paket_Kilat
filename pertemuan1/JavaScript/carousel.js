const prevBtn = document.querySelector('.carousel-controls-previous');
        const nextBtn = document.querySelector('.carousel-controls-next');
        const carouselInner = document.querySelector('.carousel-inner');
        const carouselItems = document.querySelectorAll('.carousel-item');
        let index = 0;

        function updateCarousel() {
            const offset = -index * 100;
            carouselInner.style.transform = `translateX(${offset}%)`;
            carouselItems.forEach((item, i) => {
                item.classList.toggle('active', i === index);
            });
        }

        prevBtn.addEventListener('click', () => {
            index = (index > 0) ? index - 1 : carouselInner.children.length - 1;
            updateCarousel();
        });

        nextBtn.addEventListener('click', () => {
            index = (index < carouselInner.children.length - 1) ? index + 1 : 0;
            updateCarousel();
        });
        updateCarousel();
        const carouselButtons = document.querySelectorAll('.carousel-button');
        const floatingMenu = document.getElementById('floating-menu');
        
        carouselButtons.forEach(button => {
            button.addEventListener('click', () => {
                floatingMenu.style.display = floatingMenu.style.display === 'block' ? 'none' : 'block';
            });
        });
