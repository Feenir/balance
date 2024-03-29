<?php

// Подключаем PHP MAILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('phpmailer/Exception.php');
require_once('phpmailer/PHPMailer.php');
require_once('phpmailer/SMTP.php');

// Переменные
$form_subject = htmlspecialchars(strip_tags(trim($_POST['form_subject'])));

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

// Правим кодировку
function adopt($text) {
    return '=?UTF-8?B?'.Base64_encode($text).'?=';
}

$form_subject = adopt($form_subject);

// Настройки
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.yandex.ru';
$mail->SMTPAuth = true;
$mail->Username = 'boxedyou'; // Ваш логин. Именно логин, без @yandex.ru
$mail->Password = 'Qazwsx123'; // Ваш пароль
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->CharSet = 'utf-8';
$mail->setFrom('boxedyou@ya.ru', 'balanse-expert'); // Ваш Email и Имя отправителя
//$mail->addAddress('weca121@ya.ru, balanse-expert@ya.ru'); // Email получателя
//$mail->addAddress('ab0gacheva@yandex.ru, weca121@ya.ru, balanse-expert@yandex.ru'); // Email получателя
$mail->addAddress('weca121@ya.ru'); // Email получателя
//$mail->addAddress('balanse-expert@yandex.ru'); // Email получателя
// $mail->addAddress('example@gmail.com'); // Еще один email, если нужно.

// Письмо
$mail->isHTML(true);
$mail->Subject = "$form_subject - balanse-expert"; // Заголовок письма
$mail->Body = $message; // Текст письма

# Проверяем, прикреплен ли файл
if(isset($_FILES['userfile'])) {
    if($_FILES['userfile']['error'] == 0){
        $mail->AddAttachment($_FILES['userfile']['tmp_name'], $_FILES['userfile']['name']);
    }
}

// Результат
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'ok';
}






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
        'redirect_uri' => 'https://aquastoknn.ru/',
//        'grant_type' => 'refresh_token', // повторная авторизация
//        'refresh_token' => $refresh_token, // повторная авторизация

            'grant_type'    => 'authorization_code', // первичная авторизация
            'code'    => 'def50200c827ac76d2543c5556d8d6ed52c1d71f154dc981b80271c2b8ab986d172451e08b85faf5b3712c141fa7e90e13efe836ef57fc05c064d363ecc09cf831d349ea7e38e5c9c8ad18e7f0d1acb60d026b21d582ad36844cdc12896e02a94ff561ed844434635024db33b3da4f81628b6d77a5911f02c4d63938e3d3bbe04143af36a0e4ef762f76e18606dc5401c0d4599c6ca56d0e03053ae49759c6b28e643cae96d9b9cebbd0b80a88eace801221bfdfd8e9ddd5390588c1a7c3d8aac0eee702f191a9fda2630f0cc58265036a5ed3603c6cc0e14e9bad316e2a985b2f7a35fb54c74cc8865fdbc5c9ecaaefb58bc6268337be085c08d6104b9b86bd2e3267eba724558f614387313528ad1c940a17b7547bcd9146928f349700d9ae8971fd23707751289f1d0bd1696b2dedf954ff5c4697c05930fca42950e08e4374aa6a3bb08d2a10b7bc19a23a3f9a42e2bd557cc1e8fffef16d3843d517411081fbf0722492aca421816b4a5479ac5cfe98c7dc5b1f3c528d0e0d9cb59afcdb2455b023423a5e30b57b35ac415023e27b37d6a934080028011556e23b8bcbabd47a7ffd2e0a0f30cb15862307c51f60bc43542c47e526889b48a4c3384e0c23cd625141a8', // первичная авторизация код из админки
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



//$contact = array(
//    'name'                => $contactName,
//    'linked_leads_id'     => array( $leadId ),
//    'responsible_user_id' => $responsibleUserId,
//    'custom_fields'       => $contactCF
//);


// –––––––––––––––––––––––––––
// Данные
// –––––––––––––––––––––––––––
//$form_subject = htmlspecialchars(strip_tags(trim($_POST['form_subject'])));
//$leadName = htmlspecialchars(strip_tags(trim($_POST['Имя'])));
//$leadTell = htmlspecialchars(strip_tags(trim($_POST['Телефон'])));

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
    'nameForm'	=> $nameForm, // название формы
    "namePerson"	=> $contactName, // имя
    "phonePerson"	=> $contactPhone, // телефон
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
        'id'     => '137177',
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
        'id'     => '137179',
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
        'name'                => $arrContactParams['nameForm'] . ' – ' . $arrContactParams['namePerson'] ,
        'status_id'           => 40558693,
        'responsible_user_id' => 7133581, // ID пользователя, ответственного за сделку
        'date_create'         => time(),
        'pipeline_id'         => 4355272, // ID воронки, в которую добавляется сделка
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
    /*
     * utm_source  - 1080347
    * utm_medium	- 1080349
    * utm_campaign - 1080351
    * utm_content -1080353
    * utm_term - 1080355
     * */
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

    echo '<pre>';
    print_r($response);
    print_r($contact);
    echo '</pre>';

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