/* ==============================================
** Слайдер
============================================== */
let aboutSwiper = new Swiper(".aboutSwiper", {
    slidesPerView: 1,
    navigation: {
        nextEl: ".about-next",
        prevEl: ".about-prev",
    },
});

/* ==============================================
** Слайдер
============================================== */
let reviewsSwiper = new Swiper(".reviewsSwiper", {
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
            slidesPerView: 1.7,
        },
        561: {
            slidesPerView: 2.5,
        },
        991: {
            slidesPerView: 5,
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
    $('.js-popup_open').click(function (e) {
        e.preventDefault();
        $('.popup').addClass('popup_open');
        $('body').addClass('body_popup-open');
    });

    $('.js-btn_call').click(function() {
        $('.js-popup_head').html('Обратный <span>звонок</span>');
        $('.js-text_sale').text ('Оставьте заявку и мы обязательно свяжемся с вами')
        $('.js-form-name').val('Обратный звонок');
    });

    $('.js-btn_audit').click(function() {
        $('.js-popup_head').html('Получить аудит <span>бесплатно</span>');
        $('.js-text_sale').text ('Оставьте заявку и мы обязательно свяжемся с вами')
        $('.js-form-name').val('Аудит бесплатно');
    });

    $('.js-btn_sail').click(function() {
        $('.js-popup_head').html('Акция для новых <span>клиентов!</span>');
        $('.js-text_sale').text ('Первый месяц обслуживания бесплатно, удаленный доступ в 1С и экспресс аудит в подарок')
        $('.js-form-name').val('Акция');
    });

    $('.js-btn_consultation').click(function() {
        $('.js-popup_head').html('Получить <span>консультацию!</span>');
        $('.js-text_sale').text ('Заполните форму и получите консультацию бесплатно')
        $('.js-form-name').val('Акция');
    });


    $('.js-popup_close').click(function(e) {
        e.preventDefault();
        $('.popup').removeClass('popup_open');
        $('body').removeClass('body_popup-open');
    });

    $(document).mouseup(function(e) {
        const popup = $('.popup__callBody');
        if (e.target != popup[0] && popup.has(e.target).length === 0) {
            $('.popup').removeClass('popup_open');
            $('body').removeClass('body_popup-open');
        }
    });
});


$('.js-full_burger-open').click(function(e) {
    e.preventDefault();
    $('.popupFull').addClass('popupFull_open');
    $('.popupFull__content_top').addClass('popupFull__content_topOpen')
    $('.popupFull__content_bottom').addClass('popupFull__content_bottomOpen')
    $('.popupFull__close').addClass('popupFull__close_open')
});

$('.popupFull__close').click(function(e) {
    e.preventDefault();
    $('.popupFull').removeClass('popupFull_open');
    $('.popupFull__content_top').removeClass('popupFull__content_topOpen')
    $('.popupFull__content_bottom').removeClass('popupFull__content_bottomOpen')
    $('.popupFull__close').removeClass('popupFull__close_open')
});


jQuery(document).ready(function($){
    $('.js-Personal-account-show').click(function (e) {
        e.preventDefault();
        $('.personal-accountBack').addClass('personal-account_show');
        $('.personal-account').addClass('personal-account_show');
        $('body').addClass('body_popup-open');
    })
});

$('.js-personal-account-close').click(function(e) {
    e.preventDefault();
    $('.personal-accountBack').removeClass('personal-account_show');
    $('.personal-account').removeClass('personal-account_show')
});

/* ==============================================
** прокрутка к якорю
============================================== */
// let $page = $('html, body');
// $('a[href*="#"]').click(function() {
//     $page.animate({
//         scrollTop: $($.attr(this, 'href')).offset().top
//     }, 700);
//     return false;
// });
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

/* ==============================================
** Маска
============================================== */
$('.js-phoneMask').mask("+7 (999) 999 - 9999",{autoclear: false});


$('.js-fancybox-video').fancybox({
    openEffect: 'none',
    closeEffect: 'none',
    helpers: {
        media: {}
    }
});

$('.reviews__fancybox').fancybox({
    'hideOnContentClick': false
})
/* ==============================================
** отправка заявки
============================================== */



$(function(){
    'use strict';
    $('#send').on('submit', function(e) {
        e.preventDefault();
        let phone = $('#phone').val();
        let phoneClear = phone.replace(/[^0-9]/g, '');
        let name = $('#name').val();
        let nameClear = name.replace(/[^a-zа-яё\s]/gi, ''); // Удалить всё кроме букв и пробелов

        // console.log(phoneClear);

        if (phoneClear.length < 11 ) {
            alert('Пожалуйста введите номер Вашего телефона полностью');
            return false;
        } else if (nameClear.length < 2 ) {
            alert('Пожалуйста введите корректно Ваше Имя');
            return false;
        } else {
            let fd = new FormData(this);
            let th = $(this);
            $.ajax({
                //url: '/../inc/mail-order.php', // Путь до файла
                url: ajaxurl + '?action=sendOrder',
                type: 'POST',
                contentType: false,
                processData: false,
                data: fd,
                success: function () {
                    // alert("Ваше сообщение отправлено успешно!");
                    // $(".js-btnOrder").val("Отправлено");
                    window.location = "/spasibo";
                    // $(".js-btn-advice").text("Отправлено");
                    setTimeout(function () {
                        // Done Functions
                        $(this).trigger("reset");
                        // $(".js-btn-advice").text("Отправить");
                    }, 1000);
                }
            });
        }
    });
});


$(function(){
    'use strict';
    $('#sendFooter').on('submit', function(e) {
    // $('.js-send').on('click', function (e) {
        e.preventDefault();
        // var phonePattern = /^(\+7)?[\s]\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
        // var phoneTest = phonePattern.test(phone);
        let phone = $('#phoneFooter').val();
        let phoneClear = phone.replace(/[^0-9]/g, ''); // удалить все кроме цифр
        let name = $('#nameFooter').val();
        let nameClear = name.replace(/[^a-zа-яё\s]/gi, ''); // Удалить всё кроме букв и пробелов

        // console.log(phoneClear);
        // console.log(nameClear);

        if (phoneClear.length < 11 ) {
            alert('Пожалуйста введите номер Вашего телефона полностью');
            return false;
        } else if (nameClear.length < 2 ) {
            alert('Пожалуйста введите корректно Ваше Имя');
            return false;
        } else {
            let fd = new FormData(this);
            let th = $(this);
            $.ajax({
                //url: '/../inc/mail-order.php', // Путь до файла
                url: ajaxurl + '?action=sendOrder',
                type: 'POST',
                contentType: false,
                processData: false,
                data: fd,
                success: function () {
                    // alert("Ваше сообщение отправлено успешно!");
                    // $(".js-btnOrder").val("Отправлено");
                    window.location = "/spasibo";
                    // $(".js-btn-advice").text("Отправлено");
                    setTimeout(function () {
                        // Done Functions
                        $(this).trigger("reset");
                        // $(".js-btn-advice").text("Отправить");
                    }, 1000);
                }
            });
        }
    });
});


/*=================================================
  // Копирование в буфер по клику
 ================================================*/
$(document).ready(function () {
    $('.js-copy').on('click', function () {
        copyToClipboard($(this).text());
        ui_copyDone(this);
    });
    $('.js-headerMailcopy').on('click', function () {
        copyToClipboard($('.js-mail_copy').text());
    });
 
    function copyToClipboard(str) {
        let area = document.createElement('textarea');
        document.body.appendChild(area);
        area.value = str;
        area.select();
        document.execCommand("copy");
        document.body.removeChild(area);
        alert('Почта скопирована')
        $('body').fadeIn(500).append('<div class="notify-popup"> <div class="notify-popup__body"><p class="notify-popup__message"> Текст скопирован в Ваш буфер обмена</p></div></div>')
        $('.notify-popup').delay(4000).fadeOut(500)
        setTimeout(function () {
            $('.notify-popup').remove();
        }, 4600);
    }
})

/*
============================
  Кастомный ползунок в квизе
============================
*/
let stepsRangeSlider = document.getElementById('range-steps-fake');
if (stepsRangeSlider) {
    noUiSlider.create(stepsRangeSlider, {
        start: 20,
        step: 1,
        tooltips: wNumb({decimals: 0}),
        connect: 'lower',
        range: {
            'min': [1],
            'max': [350]
        },
    });
    const inputRoom = document.getElementById('range-steps-input');
    stepsRangeSlider.noUiSlider.on('update', function (values, handle) {
        inputRoom.value = Math.round(values);
    });
}

/*
============================
  Калькулятор
============================
*/

let changeOperation = document.querySelectorAll('.noUi-handle')
let calculates = document.querySelectorAll('.calculator__button')
let staffQuantity = document.querySelector('.js-staff')


for (let i = 0; i < changeOperation.length; i++) {

    let sale
    let price = document.querySelector('.price-popup')
    let liteTariffs = document.querySelector('.js-lite')
    let premiumTariffs = document.querySelector('.js-premium')
    let fifteenTariffs = document.querySelector('.js-taxation-fifteen')
    let sixTariffs = document.querySelector('.js-taxation-six')
    let range = changeOperation[i]
    let inputPrice = document.querySelector('.price-in-form')

    function valueChange() {

        let valueNow = range.getAttribute('aria-valuenow')
        let round

        if (valueNow >= 1 && valueNow <= 4) {
            sale = 4900
        }

        else if (valueNow >= 5 && valueNow <= 15) {
            sale = 5900
        }

        else if (valueNow >= 16 && valueNow <= 30) {
            sale = 12200
        }

        else if (valueNow >= 31 && valueNow <= 50) {
            sale = 17100
        }

        else if (valueNow >= 51 && valueNow <= 70) {
            sale = 23200
        }

        else if (valueNow >= 71 && valueNow <= 100) {
            sale = 27000
        }

        else if (valueNow > 100 && valueNow <= 150){
            sale = 31700
        }

        else if (valueNow >= 151 && valueNow <= 200) {
            sale = 40200
        }

        else if (valueNow >= 201 && valueNow <= 300) {
            sale = 50000
        }

        else if (valueNow > 300) {
            sale = 'Индивидуальный расчет'.toString()
        }


        if (sixTariffs.checked) {
            round = sale - (sale*18/100)
            sale = Math.round(round/100)*100;
            if (valueNow > 300) {
                sale = 'Индивидуальный расчет'.toString()
            }
        }

        if (fifteenTariffs.checked) {
            round = sale - (sale*15/100)
            sale = Math.round(round/100)*100;
            if (valueNow > 300) {
                sale = 'Индивидуальный расчет'.toString()
            }
        }

        if (liteTariffs.checked) {
            sale = sale - (sale*20/100)
            if (valueNow > 300) {
                sale = 'Индивидуальный расчет'.toString()
            }
        }

        if (premiumTariffs.checked) {
            sale =  sale + (sale*20/100)
            if (valueNow > 300) {
                sale = 'Индивидуальный расчет'.toString()
            }
        }


        if (staffQuantity.value > 3) {
            sale = sale + ((staffQuantity.value - 3) * 500)
            if (valueNow > 300) {
                sale = 'Индивидуальный расчет'.toString()
            }
        }


        inputPrice.value = sale
        let options = {
            style: 'currency',
            currency: 'RUB',
            maximumFractionDigits: 0,
        }
        sale = sale.toLocaleString('ru-RU', options);

        price.innerHTML = sale


        console.log(inputPrice.value)


    }
}
staffQuantity.addEventListener('keydown', function (event) {

    // Разрешаем: backspace, delete, tab и escape
    if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 ||
      // Разрешаем: Ctrl+A
      (event.keyCode == 65 && event.ctrlKey === true) ||
      // Разрешаем: Ctrl+V
      (event.keyCode == 86 && event.ctrlKey === true) ||
      // Разрешаем: Ctrl+X
      (event.keyCode == 88 && event.ctrlKey === true) ||
      // Разрешаем: home, end, влево, вправо
      (event.keyCode >= 35 && event.keyCode <= 39)) {

        // Ничего не делаем
        return;
    } else {
        // Запрещаем все, кроме цифр на основной клавиатуре, а так же Num-клавиатуре
        if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
            event.preventDefault();
        }
    }
})

$('.js-calculate').click(function (e) {
    e.preventDefault();
    $('.popup-calculator').slideDown().css('display','flex');
});
$('.calculator__close').click(function(e) {
    e.preventDefault();
    $('.popup-calculator').slideUp()
});
$(document).mouseup(function(e) {
    const popup = $('.js-calculator-body');
    if (e.target != popup[0] && popup.has(e.target).length === 0) {
        $('.popup-calculator').slideUp()
    }
});

$('.noUi-tooltip').on('DOMSubtreeModified', function () {
    const rateVal = $(".noUi-tooltip").text();

    if (rateVal >= 320) {
        $('.noUi-handle .noUi-tooltip').addClass('tooltip-position')
    } else if ((rateVal <= 15)) {
        $('.noUi-handle .noUi-tooltip').addClass('tooltip-position')
    } else {
        $('.noUi-handle .noUi-tooltip').removeClass('tooltip-position')
    }
});





const progressbarThumb = document.querySelector('.progressbar__thumb');
const progressbarPercent = document.querySelector('.progressbar__percent > tspan');
const stepThree = document.getElementById('step-three')
const btn = document.querySelector('.btn');
const btnBack = document.querySelector('.btn-back');
const stepLoad = document.querySelector('.load-screen')
const stepOne = document.getElementById('step-one')
const stepTwo = document.getElementById('step-two')

function onUpdateGsap() {
    const percent = gsap.getProperty(progressbarThumb, '--percent');

    if (percent > 99) {
        stepThree.classList.add('calculator__body--active')
        stepTwo.classList.remove('calculator__body--active')
        tl.reverse()
    }

    progressbarPercent.textContent = Math.round(percent);
}

const tl = gsap.timeline({defaults: {duration: 3, ease: 'ease-out'}})
  .to(progressbarThumb, {'--percent': 100, onUpdate: onUpdateGsap});

tl.paused(true);

btn.addEventListener('click', (e) => {
    if (!btn.classList.contains('active')) {
        btn.classList.add('active');
        tl.play();
    }
});

btnBack.addEventListener('click', (e) => {


    if (btn.classList.contains('active')) {
        btn.classList.remove('active');
        }

    stepThree.classList.remove('calculator__body--active')
    stepOne.classList.add('calculator__body--active')


})

calculates.forEach(function (calculate) {
    calculate.onclick = valueChange
})

stepLoad.addEventListener('click', function () {
    stepOne.classList.remove('calculator__body--active')
    stepTwo.classList.add('calculator__body--active')
})

const backScreen = document.querySelector('.back-form-screen')
const lastStepOne = document.querySelector('.calculator__step-one')
const lastStepTwo = document.querySelector('.calculator__step-two')
const lastPrice = document.querySelector('.calculator__price')
backScreen.addEventListener('click', function () {
    lastStepTwo.classList.remove('calculator-step-active')
    lastStepOne.classList.add('calculator-step-active')
    lastPrice.classList.add('calculator__price--blur')
})

const submitForm = $('.js-submit')
const setForm = $('.set-form')

setForm.click(function () {

    submitForm.submit(function (e) {
        e.preventDefault()
        $('.calculator__price').removeClass('calculator__price--blur')
        $('.calculator__step-one').removeClass('calculator-step-active')
        $('.calculator__step-two').addClass('calculator-step-active')
    })
})

const reset = $('.js-reset')

reset.click(function () {
    stepOne.classList.add('calculator__body--active')
    stepThree.classList.remove('calculator__body--active')
    $('.calculator__price').addClass('calculator__price--blur')
    $('.calculator__step-one').addClass('calculator-step-active')
    $('.calculator__step-two').removeClass('calculator-step-active')
    if (btn.classList.contains('active')) {
        btn.classList.remove('active');
    }
})






const week = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
const day = document.getElementById('fordays'); // Получаем div куда всё будем вставлять
const moskowUTC = 3;
const todayDay = new Date();
const workTime = new Date().getUTCHours() + moskowUTC
const days = () => {
    week.forEach((item, i) => {
        if (i === +todayDay.getDay()-1 && (i == 0 || i == 1 || i == 2 || i == 3 || i == 4))  {
          if (workTime >= 10 && workTime < 18) {
              day.classList.add('at-work');
              day.classList.remove('at-home');
          }
          else if (workTime >= 18) {
               day.classList.remove('at-work');
               day.classList.add('at-home');
           }
        }

        if (i === +todayDay.getDay()-1 && (i == 5 || i == 6)) { // Если выходные то
            day.classList.add('at-home');
            day.classList.remove('at-work');
        }
    });
};

function fn60sec() {
    days()
}
fn60sec();
setInterval(fn60sec, 60*1000);






























