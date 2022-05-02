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
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        561: {
            slidesPerView: 2,
            spaceBetween: 15,
        },
        991: {
            slidesPerView: 4,
            spaceBetween: 15,
        }},
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
** Показать 6 причин при Скроле
============================================== */
// function onEntry(entry) {
//     entry.forEach(change => {
//         if (change.isIntersecting) {
//             change.target.classList.add('six-visible');
//         }
//     });
// }
//
// let options = {
//     threshold: [0.5] };
// let observer = new IntersectionObserver(onEntry, options);
// let elements = document.querySelectorAll('.six-hidden');
//
// for (let elm of elements) {
//     observer.observe(elm);
// }



/* ==============================================
** Показать 6 причин при клике
============================================== */
$('.js-tab-trigger').click(function() {
    var id = $(this).attr('data-tab'),
        content = $('.js-tab-content[data-tab="'+ id +'"]');

    $('.js-tab-trigger.active').removeClass('active'); // 1
    $(this).addClass('active'); // 2

    $('.js-tab-content.active').removeClass('active'); // 3
    content.addClass('active'); // 4
});

/* ==============================================
** увелиечение видеоролика fancybox на главном экране
============================================== */
$('.js-fancybox-video').fancybox({
    openEffect: 'none',
    closeEffect: 'none',
    helpers: {
        media: {}
    }
});
