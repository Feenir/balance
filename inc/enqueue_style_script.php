<?php
/**
 * Подключение стилей и скриптов.
 */

add_action('wp_footer', 'add_scripts'); // приклеем ф-ю на добавление скриптов в футер
if (!function_exists('add_scripts')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function add_scripts()
    { // добавление скриптов
        if (is_admin()) return false; // если мы в админке - ничего не делаем
        wp_deregister_script('jquery'); // выключаем стандартный jquery
        wp_register_script('jquery_new', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', '', '', true);
        wp_enqueue_script('maskedinput', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array('jquery_new'), '', true);    // masked
//        wp_enqueue_script('slickjs', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery_new'), false, true); // слайдер слик
        wp_enqueue_script('swiper', '//unpkg.com/swiper@8/swiper-bundle.min.js', array('jquery_new'), false, true); // слайдер слик
//        wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array('jquery_new'), '', true);    // swiper
        wp_enqueue_script('fancyBox', get_template_directory_uri() . '/js/fancybox.js', array('jquery_new'), '', true); // и скрипты шаблона
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery_new'), '', true); // и скрипты шаблона
    }
}

add_action('wp_print_styles', 'add_styles'); // приклеем ф-ю на добавление стилей в хедер
if (!function_exists('add_styles')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
    function add_styles()
    { // добавление стилей
        if (is_admin()) return false; // если мы в админке - ничего не делаем
        wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css'); // слайдер swiper
//        wp_enqueue_style('slickcss', '//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css'); // слайдер слик
//        wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/css/owl.carousel.min.css'); // owl.carousel
//        wp_enqueue_style('owlcarouseltheme', get_template_directory_uri() . '/css/owl.theme.default.min.css'); // owl.theme.default
        wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css'); // основные стили шаблона
        wp_enqueue_style('main', get_template_directory_uri() . '/style.css'); // стили темы
    }
}

