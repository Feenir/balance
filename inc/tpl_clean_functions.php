<?php
/**
 * настройки общие
 */

function tpl_url() {
   echo get_template_directory_uri();
}
/*использовать так - <?= gtd_url();?> */
/**
 * Plugin Name: Mihdan: Disable Aggressive Updates
 * Description: WordPress плагин для ускорения админки WordPress путём отключения агрессивных проверок обновлений
 * Version: 1.0
 * Plugin URI: https://www.kobzarev.com
 * Author: Mikhail Kobzarev
 * Author URI: https://www.kobzarev.com
 * License: GNU General Public License v2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mihdan-disable-aggressive-updates
 * GitHub Plugin URI: https://github.com/mihdan/mihdan-disable-aggressive-updates
 * GitHub Branch:     master
 * Requires WP:       4.9
 * Requires PHP:      7.2
 *
 * @package mihdan-disable-aggressive-updates
 * @wordpress-plugin
 * @license   GPL-2.0+
 * @link https://wp-kama.ru/id_8514/uskoryaem-adminku-wordpress-otklyuchaem-proverki-obnovlenij.html
 * @see https://wp-kama.ru/filecode/wp-includes/update.php
 * @author Kama (https://wp-kama.ru)
 * @version 1.0
 */

if ( is_admin() ) {
    // отключим проверку обновлений при любом заходе в админку...
    remove_action( 'admin_init', '_maybe_update_core' );
    remove_action( 'admin_init', '_maybe_update_plugins' );
    remove_action( 'admin_init', '_maybe_update_themes' );

    // отключим проверку обновлений при заходе на специальную страницу в админке...
    remove_action( 'load-plugins.php', 'wp_update_plugins' );
    remove_action( 'load-themes.php', 'wp_update_themes' );

    // оставим принудительную проверку при заходе на страницу обновлений...
    //remove_action( 'load-update-core.php', 'wp_update_plugins' );
    //remove_action( 'load-update-core.php', 'wp_update_themes' );

    // внутренняя страница админки "Update/Install Plugin" или "Update/Install Theme" - оставим не мешает...
    //remove_action( 'load-update.php', 'wp_update_plugins' );
    //remove_action( 'load-update.php', 'wp_update_themes' );

    // событие крона не трогаем, через него будет проверяться наличие обновлений - тут все отлично!
    //remove_action( 'wp_version_check', 'wp_version_check' );
    //remove_action( 'wp_update_plugins', 'wp_update_plugins' );
    //remove_action( 'wp_update_themes', 'wp_update_themes' );

    /**
     * отключим проверку необходимости обновить браузер в консоли - мы всегда юзаем топовые браузеры!
     * эта проверка происходит раз в неделю...
     * @see https://wp-kama.ru/function/wp_check_browser_version
     */
    add_filter( 'pre_site_transient_browser_' . md5( $_SERVER['HTTP_USER_AGENT'] ), '__return_empty_array' );
}

// end




add_theme_support('title-tag'); // теперь тайтл управляется самим вп



add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
set_post_thumbnail_size(328, 188, true); // задаем размер миниатюрам 250x150
//add_image_size('micro-thumb', 50, 50, true); // добавляем еще один размер картинкам 400x400 с обрезкой
add_image_size('micro-thumb', 50, 50, true); // добавляем еще один размер картинкам 400x400 с обрезкой



/* ==================================================
 * Изменение названия - записей стандартных
 * =============================================== */

function edit_admin_menus() {
    global $menu;
// здесь будут пункты меню, которые нужно менять
    $menu[5][0] = 'Статьи';
}
add_action( 'admin_menu', 'edit_admin_menus' );


/* =============================================================
** ## Общие CSS стили для админ-панели. Нужно создать файл 'wp-admin.css' в папке темы
============================================================= */

add_action( 'admin_enqueue_scripts', function(){
    wp_enqueue_style( 'my-wp-admin', get_template_directory_uri() .'/style-wp-admin.css' );
}, 99 );



/* ========================================================
*  Отправка письма из карточки товара
======================================================== */

add_action('wp_ajax_sendOrder', 'sendOrder_callback');
add_action('wp_ajax_nopriv_sendOrder', 'sendOrder_callback');
function sendOrder_callback()
{

    $to = 'balanse-expert@yandex.ru, ab0gacheva@yandex.ru, weca121@ya.ru';
    $from = "noreply@balanse-expert.ru";

    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= 'Content-Transfer-Encoding: 7bit' . "\r\n";
    $headers .= 'Date: ' . date('r', $_SERVER['REQUEST_TIME']) . "\r\n";
    $headers .= 'Message-ID: <' . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME']) . '@' . $_SERVER['SERVER_NAME'] . '>' . "\r\n";
    $headers .= 'From: ' . $from . "\r\n";
    $headers .= 'Reply-To: ' . $from . "\r\n";
    $headers .= 'Return-Path: ' . $from . "\r\n";
    $headers .= 'X-Mailer: PHP v' . phpversion() . "\r\n";
    $headers .= 'X-Originating-IP: ' . $_SERVER['SERVER_ADDR'] . "\r\n";


    $message = '';
    // Переменные
    $subject = htmlspecialchars(strip_tags(trim($_POST['form_subject'])));

    // Разбираем все непустые поля формы (кроме form_subject) на Ключ - Значение и заносим в таблицу
    $c = true;
    foreach ( $_POST as $key => $value ) {
        if ( $value != "" && $key != "form_subject" ) {
            $message .= "
      " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
        <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
        <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
      </tr>
      ";
        }
    }
    $message = "<table style='width: 100%;'>$message</table>";


    $mail = mail($to, $subject, $message, $headers);
    ?><pre> <?php print_r($mail); ?> </pre><?php

    if ($mail == false) {
        echo ' Ошибка ';
    } else {
        echo ' Удачно отправлено ';
    }

    wp_die();
}









/* ======================================================== */