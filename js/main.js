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


/* ==============================================
** модальное окно - заявка
============================================== */
jQuery(document).ready(function($){
    $('.js-call_open').click(function(e) {
        event.preventDefault();
        $('.popup').addClass('popup_open')
        $('body').addClass('body_popup-open')
    });

    $('.js-popup_close').click(function(e) {
        e.preventDefault();
        $('.popup').removeClass('popup_open');
        $('body').removeClass('body_popup-open')
    });

    $(document).mouseup(function(e) {
        const popup = $('.popup__callBody');
        if (e.target != popup[0] && popup.has(e.target).length === 0) {
            $('.popup').removeClass('popup_open');
            $('body').removeClass('body_popup-open')
        }
    });
});
/* ==============================================
** прокрутка к якорю
============================================== */
var $page = $('html, body');
$('a[href*="#"]').click(function() {
    $page.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 700);
    return false;
});

/* ==============================================
** Показать 6 причин при клике
============================================== */


$('.js-six').click(function(e) {
    e.preventDefault();
    $(this).children('.js-six_show').toggleClass('show')
    $(this).children('.six__plusImg').toggleClass('rotate')
});


function onEntry(entry) {
    entry.forEach(change => {
        if (change.isIntersecting) {
            change.target.classList.add('six-visible');
        }
    });
}

let options = {
    threshold: [0.5] };
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.six-hidden');

for (let elm of elements) {
    observer.observe(elm);
}