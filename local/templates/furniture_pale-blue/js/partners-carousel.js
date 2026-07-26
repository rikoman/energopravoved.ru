document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.querySelector('.logos-wrapper');
    const slides = wrapper.querySelectorAll('img');
    const totalSlides = slides.length;
    let currentIndex = 0;
    let slidesPerView = 3;
    let autoPlayInterval;

    function getSlidesPerView() {
        if (window.innerWidth <= 600) return 1;
        if (window.innerWidth <= 992) return 2;
        return 3;
    }

    function updateCarousel() {
        const slidesPer = getSlidesPerView();
        slidesPerView = slidesPer;
        const slideWidth = 100 / slidesPer;
        const offset = -currentIndex * slideWidth;
        wrapper.style.transform = `translateX(${offset}%)`;
    }

    function nextSlide() {
        const slidesPer = getSlidesPerView();
        const maxIndex = Math.max(0, totalSlides - slidesPer);
        if (currentIndex < maxIndex) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarousel();
    }

    function prevSlide() {
        const slidesPer = getSlidesPerView();
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = Math.max(0, totalSlides - slidesPer);
        }
        updateCarousel();
    }

    document.querySelector('.next-btn').addEventListener('click', function() {
        clearInterval(autoPlayInterval);
        nextSlide();
        startAutoPlay();
    });

    document.querySelector('.prev-btn').addEventListener('click', function() {
        clearInterval(autoPlayInterval);
        prevSlide();
        startAutoPlay();
    });

    function startAutoPlay() {
        clearInterval(autoPlayInterval);
        autoPlayInterval = setInterval(nextSlide, 3000);
    }

    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            const newSlidesPer = getSlidesPerView();
            if (newSlidesPer !== slidesPerView) {
                const maxIndex = Math.max(0, totalSlides - newSlidesPer);
                if (currentIndex > maxIndex) {
                    currentIndex = maxIndex;
                }
                updateCarousel();
            }
        }, 200);
    });

    slidesPerView = getSlidesPerView();
    currentIndex = 0;
    updateCarousel();
    startAutoPlay();

    const carouselContainer = document.querySelector('.carousel-container');
    carouselContainer.addEventListener('mouseenter', function() {
        clearInterval(autoPlayInterval);
    });
    carouselContainer.addEventListener('mouseleave', function() {
        startAutoPlay();
    });
});