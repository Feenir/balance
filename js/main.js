var aboutSwiper = new Swiper(".aboutSwiper", {
    slidesPerView: 1,
    navigation: {
        nextEl: ".about-next",
        prevEl: ".about-prev",
    },
});

var reviewsSwiper = new Swiper(".reviewsSwiper", {
    slidesPerView: 4,
    spaceBetween: 15,
    autoplay: true,
    loop: true,
    delay: 3000,
    speed: 800,
    navigation: {
        nextEl: ".reviewsSwiper__next",
        prevEl: ".reviewsSwiper__prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    on: {
        init() {
            this.el.addEventListener('mouseenter', () => {
                this.autoplay.stop();
            });

            this.el.addEventListener('mouseleave', () => {
                this.autoplay.start();
            });
        }
    },
});