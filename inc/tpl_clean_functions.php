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
*  Приемка
======================================================== */

add_action('wp_ajax_sendPay', 'sendPay_callback');
add_action('wp_ajax_nopriv_sendPay', 'sendPay_callback');
function sendPay_callback()
{



//    $payBody = array {
//        TransactionId:  "1120305033"
//        Amount: "100.00",
//        Currency:   "RUB",
//        PaymentAmount:  "100.00",
//        PaymentCurrency:    "RUB",
//        OperationType:  "Payment",
//        InvoiceId:  "1234567",
//        AccountId:  "",
//        SubscriptionId: "",
//        Name:   "",
//        Email:  "user@example.com",
//        DateTime:   "2022-05-02 0:2:22",
//        IpAddress:  "89.109.44.147",
//        IpCountry:  "RU",
//        IpCity: "\u041d\u0438\u0436\u043d\u0438\u0439 \u041d\u043e\u0432\u0433\u043e\u0440\u043e\u0434",
//        IpRegion:   "\u041d\u0438\u0436\u0435\u0433\u043e\u0440\u043e\u0434\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c",
//        IpDistrict: "\u041f\u0440\u0438\u0432\u043e\u043b\u0436\u0441\u043a\u0438\u0439 \u0444\u0435\u0434\u0435\u0440\u0430\u043b\u044c\u043d\u044b\u0439 \u043e\u043a\u0440\u0443\u0433",
//        IpLatitude: "56.329918",
//        IpLongitude:    "44.009193",
//        CardFirstSix:   "424242",
//        CardLastFour:   "4242",
//        CardType:   "Visa",
//        CardExpDate:    "12\/12",
//        Issuer: "CloudPayments",
//        IssuerBankCountry:  "RU",
//        Description:    "\u0411\u043b\u0430\u0433\u043e\u0442\u0432\u043e\u0440\u0438\u0442\u0435\u043b\u044c\u043d\u043e\u0435 \u043f\u043e\u0436\u0435\u0440\u0442\u0432\u043e\u0432\u0430\u043d\u0438\u0435",
//        AuthCode:   "A1B2C3",
//        TestMode:   "1",
//        Status: "Authorized",
//        GatewayName:    "Test",
//        Data:   "{\\\"myProp\\\:\\\"myProp value\\\"}",
//        TotalFee:   "0.00",
//        CardProduct:    "I",
//        PaymentMethod:  "",
//    };
//    {
//"TransactionId":"1120656537",
//"Amount":"101.00",
//"Currency":"RUB",
//"PaymentAmount":"101.00",
//"PaymentCurrency":"RUB",
//"OperationType":"Payment",
//"InvoiceId":"",
//"AccountId":"w.white@cloudpayments.ru",
//"SubscriptionId":"",
//"Name":"",
//"Email":"ivaka@cloudpayments.ru",
//"DateTime":"2022-05-02 12:01:47",
//"IpAddress":"89.109.44.147",
//"IpCountry":"RU",
//"IpCity":"\u041d\u0438\u0436\u043d\u0438\u0439 \u041d\u043e\u0432\u0433\u043e\u0440\u043e\u0434",
//"IpRegion":"\u041d\u0438\u0436\u0435\u0433\u043e\u0440\u043e\u0434\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c",
//"IpDistrict":"\u041f\u0440\u0438\u0432\u043e\u043b\u0436\u0441\u043a\u0438\u0439 \u0444\u0435\u0434\u0435\u0440\u0430\u043b\u044c\u043d\u044b\u0439 \u043e\u043a\u0440\u0443\u0433",
//"IpLatitude":"56.329918",
//"IpLongitude":"44.009193",
//"CardFirstSix":"424242",
//"CardLastFour":"4242",
//"CardType":"Visa",
//"CardExpDate":"04\/23",
//"Issuer":"CloudPayments",
//"IssuerBankCountry":"RU",
//"Description":"\u041f\u043e\u0436\u0435\u0440\u0442\u0432\u043e\u0432\u0430\u043d\u0438\u0435 \u0432 \u0444\u043e\u043d\u0434 ...",
//"AuthCode":"A1B2C3",
//"Token":"tk_0cf59ce3cfee4ad591f9d3e86439c",
//"TestMode":"1",
//"Status":"Completed",
//"GatewayName":"Test",
//"Data":"{\\\"name\\\":\\\"ivan\\\",
//\\\"lastName\\\":\\\"ivanov\\\",
//\\\"phone\\\":\\\"\\\"}",
//"TotalFee":"0.00",
//"CardProduct":"I",
//"PaymentMethod":""}


    $to = 'weca121@ya.ru';
    $subject = 'Pay';
    $from = "noreply@fkdd.ru";

    $d1 = json_encode($_POST['Data']);
    $d2 = json_decode($d1);
//    $d3 = stripslashes($d2);
    $d3 = stripslashes(stripslashes($d1));


//    $outcls=json_decode($d3); // пустота
//    $outcls=$d3; // пустота
    $outcls=json_decode($d1);
//    $d12 = ($d3['name']);
    //$finishName = $outcls->{'name'};

//    $d3 = json_decode($d22);
//    $d3 = json_decode($d22);
//    $d3 = json_encode($d2);
//    $d3 = json_encode($d22['Name'];
//    $d3 = $d22=>Name;


    $data1=json_encode($_POST['Data'], JSON_UNESCAPED_UNICODE);
    $data2=json_decode(stripslashes($data1));
    $data3=json_decode($data2);
    $finishName=$data3->{'name'} . ' ' . $data3->{'lastName'};


    mail($to, $subject, $_POST['Amount'] );

    // $payDataName = $_POST['Name']; // Имя Name
//    $payDataName = json_decode($_POST['Data']['Name']['lastName']); // $a[‘aaa’][‘bbb’]
//    $payDataName = json_encode($_POST['Data'] => lastName'); // $a[‘aaa’][‘bbb’]
//    $payDataName = json_encode($_POST['Data'](json_decode($d1)));
//
//    $payDataLastName = $_POST['lastName']; // Имя Name
    $payDataEmail = $_POST['Email']; // Имя Name
    $payDataAmount = $_POST['Amount']; // сумма
    $payDataDateTime = $_POST['DateTime']; // сумма

    $my_postarr = array(
        'post_type'    => 'donation',
        'post_title'    => $finishName,
        'post_content'  => '', // контент
        'post_status'   => 'publish' // опубликованный пост
    );

    // добавляем пост и получаем его ID
    $my_post_id = wp_insert_post( $my_postarr );

    $field_key = 'field_626aba8a891d2';
    update_field($field_key, $payDataAmount, $my_post_id);





    wp_die();
}



/* ======================================================== */