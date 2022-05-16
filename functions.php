<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage balanse
 */

$urlStyle = get_stylesheet_directory_uri();

$includes = array(
    'inc/enqueue_style_script.php',        // подключение стилей и скриптов
    'inc/tpl_clean_functions.php',     // настройки общие
    //'inc/register-types.php',         // Регистрация типов записей
);

foreach ($includes as $i) {
    locate_template ($i, true);
}