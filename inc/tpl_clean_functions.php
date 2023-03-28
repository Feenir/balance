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

    $to = 'balanse-expert@yandex.ru, ab0gacheva@yandex.ru';
//    $to = 'weca121@ya.ru';
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

    send_amoCRM(); // отправка в амоСРМ

    wp_die();
}







function send_amoCRM() {

// –––––––––––––––––––––––––––
// Авторизация
// –––––––––––––––––––––––––––

    function amoAuth() {

        $subdomain = 'accountant'; //Поддомен нужного аккаунта
        $link = 'https://' . $subdomain . '.amocrm.ru'; //Формируем URL для запроса

        $refresh_token = file_get_contents('./session.txt');
        $data = [
            'client_id' => '7a15b872-f83e-4a2c-8621-6ebc9f82f9d1',
            'client_secret' => 'vgSWSKvhf1RcmE4sLjIlX6EUYP1CcnKhOwzwJUZTT9tekk0t9jjVUOkNPDaCFESj',
            'redirect_uri' => 'https://balanse-expert.ru/',
        'grant_type' => 'refresh_token', // повторная авторизация
        'refresh_token' => $refresh_token, // повторная авторизация

//            'grant_type'    => 'authorization_code', // первичная авторизация
//            'code'    => 'def502003f17098f7bd6a7ed5c3670c610189791e99c664cd2a8ac391a711c61e6372a368463e1949853b0ef2fb4a322e8516c3190fa3f3083bfa90f4a818a6dc3d8cebb8e4e26bb077d9803f5b0f46cc392631265afb12dfc69bf0e89745a250737bcc8ef297d0cb171f581ca5e692b1e635c1d0fbe61346fb37795d71b78b790ace6ecf5a7668d2410e4940ae0a6c0894992fd966716b2e0cf3552e9df1ed61789744d847e032cab0ba89345d932db51e9066833f5d40963f7fe0b44abafb44e13d1e901cef1416749b5d8a95bd573812e03eb0b82775de76b28ee116a35a4a2b60e86aa420e6409c61646f6826347e9504cd5b37a8cc0c469c36c80bc128cd5528e8edbf573c8e0850a1e2fcd2207e4fa54331c3d3ac37128c324c4621ae7816dfd3b1fd5c449550ad5cca59f80f419ef0a1a8fd800a09699450fe0e8edbcfc131eeee623e4f0255a49dd3cb342c681583099fa649ea0988b4c483c13563dd0e3351d81f4f9e9d25ac5f654d1450ea1436ad532cb0cc7e28a57ddc47420db953d8e7550f26481bc8c861cf9259628f60ef31c1e9b3248eb12d7f7e670ce4a11288f815c25ba94b0e61f96b3bdce7aa8deedbc8f2ff16358c57823878c5ced5e5043ac08', // первичная авторизация код из админки
        ];

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-oAuth-client/1.0');
        curl_setopt($curl, CURLOPT_URL, $link . '/oauth2/access_token');
        curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);

        $out  = curl_exec($curl); //Инициируем запрос к API и сохраняем ответ в переменную
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        $response = json_decode($out, true);

        $access_token  = $response['access_token']; //Access токен
        $refresh_token = $response['refresh_token']; //Refresh токен

        $fp = fopen("session.txt", "w"); // запись ключа в файл
        fwrite($fp, $refresh_token);
        fclose($fp);

        return $access_token;
    }

// –––––––––––––––––––––––––––
// Данные
// –––––––––––––––––––––––––––
    $nameForm = htmlspecialchars(strip_tags(trim($_POST['form_subject'])));
    $contactName = htmlspecialchars(strip_tags(trim($_POST['Имя'])));
    $contactPhone = htmlspecialchars(strip_tags(trim($_POST['Телефон'])));
    $contactEmail = '';

    $utm_source = htmlspecialchars(strip_tags(trim($_POST['utm_source'])));
    $utm_medium = htmlspecialchars(strip_tags(trim($_POST['utm_medium'])));
    $utm_campaign = htmlspecialchars(strip_tags(trim($_POST['utm_campaign'])));
    $utm_content = htmlspecialchars(strip_tags(trim($_POST['utm_content'])));
    $utm_term = htmlspecialchars(strip_tags(trim($_POST['utm_term'])));

    $arrContactParams = [
        'form_subject'	=> $nameForm, // название формы
        "namePerson"	=> $contactName, // имя
        "Телефон"	=> $contactPhone, // телефон
        "emailPerson"	=> $contactEmail, // почта
        "utm_source"	=> $utm_source,
        "utm_medium"	=> $utm_medium,
        "utm_campaign"	=> $utm_campaign,
        "utm_content"	=> $utm_content,
        "utm_term"	=> $utm_term,
    ];



    $contactCF = array();
    if ( $contactPhone ) {
        $contactCF[] = array(
            'id'     => '833979',
            'values' => array(
                array(
                    'value' => $contactPhone,
                    'enum'  => 'MOB'
                )
            )
        );
    }
    if ( $contactEmail ) {
        $contactCF[] = array(
            'id'     => '833981',
            'values' => array(
                array(
                    'value' => $contactEmail,
                    'enum'  => 'WORK'
                )
            )
        );
    }


// –––––––––––––––––––––––––––
// добавление лида
// –––––––––––––––––––––––––––

    function addLead($access_token, $arrContactParams) {

        $link = 'https://accountant.amocrm.ru';
        $lead = [
            //'name'                => $form_subject . '–' . $leadName,
            'name'                => $arrContactParams['form_subject'] . ' – ' . $arrContactParams['namePerson'] ,
            'status_id'           => 47417482,
            'responsible_user_id' => 8107657, // ID пользователя, ответственного за сделку
            'date_create'         => time(),
            'pipeline_id'         => 5325490, // ID воронки, в которую добавляется сделка
            'custom_fields'	=> [
                [
                    'id'	=> 1080347,
                    "values" => [["value" => $arrContactParams["utm_source"],]]
                ],
                [
                    'id'	=> 1080349,
                    "values" => [["value" => $arrContactParams["utm_medium"],]]
                ],
                [
                    'id'	=> 1080351,
                    "values" => [["value" => $arrContactParams["utm_campaign"],]]
                ],
                [
                    'id'	=> 1080353,
                    "values" => [["value" => $arrContactParams["utm_content"],]]
                ],
                [
                    'id'	=> 1080355,
                    "values" => [["value" => $arrContactParams["utm_term"],]]
                ]
            ]


        ];
        $leadData['request']['leads']['add'][] = $lead;

        $curlOptionsSetLead = [
            CURLOPT_URL            => $link . '/private/api/v2/json/leads/set',
            CURLOPT_CUSTOMREQUEST  => 'POST',
            CURLOPT_POSTFIELDS     => json_encode($leadData),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_USERAGENT      => 'amoCRM-API-client/1.0',
            CURLOPT_HEADER         => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTPHEADER     => [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $access_token,
            ],
        ];

        $curl = curl_init();
        curl_setopt_array($curl, $curlOptionsSetLead);
        $out = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($out, true);

        return $response['response']['leads']['add'][0]['id'];
    }


// –––––––––––––––––––––––––––
// добавление контакта
// –––––––––––––––––––––––––––

    function addContact($access_token, $leadId = false, $arrContactParams, $contactCF) {
        $link = 'https://accountant.amocrm.ru';
        $contact = [
            'name'          => $arrContactParams['namePerson'],
            'custom_fields'       => $contactCF,
        ];


        if ($leadId) {
            $contact['linked_leads_id'] = [$leadId];
        }

        $contactData['request']['contacts']['add'][] = $contact;

        $curlOptionsSetContact = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_USERAGENT      => 'amoCRM-API-client/1.0',
            CURLOPT_HEADER         => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_URL            => $link . '/private/api/v2/json/contacts/set',
            CURLOPT_CUSTOMREQUEST  => 'POST',
            CURLOPT_POSTFIELDS     => json_encode($contactData),
            CURLOPT_HTTPHEADER     => [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $access_token,
            ],
        ];

        $curl = curl_init();
        curl_setopt_array($curl, $curlOptionsSetContact);
        $out = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($out, true);

//        echo '<pre>';
//        print_r($response);
//        print_r($contact);
//        echo '</pre>';

        return $response['response']['contacts']['add'][0]["id"] || false;
    }

// –––––––––––––––––––––––––––
// добавление заметки
// –––––––––––––––––––––––––––
    /*
    function addNote( $noteData ) {
        $link = 'https://accountant.amocrm.ru';

        $lead = '9309617';
        $noteMess = 'текст заметки';

        $noteData = array(
            'element_id'          => $lead, // ид сделки
            'element_type'        => 2, // типа элемента (заметка)
            'note_type'           => 4, // тип заметки?
            'text'                => $noteMess, // текст заметки
            'created_at'          => time(), // время создания
            'responsible_user_id' => $GLOBALS[ 7133581 ], // ответственный пользователь
            'created_by'          => $GLOBALS[7133581] // автор заметки
        );

        $curlOptionsSetNote = array(
            CURLOPT_URL           => $link . '/private/api/v2/json/leads/set',
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS    => json_encode( $noteData ),
            CURLOPT_HTTPHEADER    => array( 'Content-Type: application/json' ),
        );

        $curl = curl_init();
        curl_setopt_array( $curl, $GLOBALS['curl'] + $curlOptionsSetNote );
        $out = curl_exec( $curl );
        curl_close( $curl );

    }
    */
// and (добавление заметки)




    $access_token = amoAuth();
    $leadId = addLead($access_token, $arrContactParams);
    addContact($access_token, $leadId , $arrContactParams, $contactCF);
}

/* ======================================================== */