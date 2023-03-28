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

/* Настройки некоторых почтовых сервисов

// Яндекс
$mail->Host = 'ssl://smtp.yandex.ru';
$mail->Port = 465;
$mail->Username = 'Логин';
$mail->Password = 'Пароль';

// Mail.RU
$mail->Host = 'ssl://smtp.mail.ru';
$mail->Port = 465;
$mail->Username = 'Логин';
$mail->Password = 'Пароль';

// GMail
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'Логин';
$mail->Password = 'Пароль';

Если возникает ошибка при отправки почты, то нужно отключить двухфакторную авторизацию и разблокировать «ненадежные приложения» в настройках конфиденциальности аккаунта https://myaccount.google.com/security?pli=1

// Рамблер
$mail->Host = 'ssl://smtp.rambler.ru';
$mail->Port = 465;
$mail->Username = 'Логин';
$mail->Password = 'Пароль';

// iCloud
$mail->Host = 'ssl://smtp.mail.me.com';
$mail->Port = 587;
$mail->Username = 'Логин';
$mail->Password = 'Пароль';

// Мастерхост
$mail->Host = 'ssl://smtp.masterhost.ru';
$mail->Port = 465;
$mail->Username = 'Логин';
$mail->Password = 'Пароль';

// Timeweb
$mail->Host = 'ssl://smtp.timeweb.ru';
$mail->Port = 465;
$mail->Username = 'Логин';
$mail->Password = 'Пароль';

// Хостинг Центр (hc.ru)
Доступ к сторонним почтовым серверам по SMTP-портам (25, 465, 587) ограничен, разрешена отправка не более 300 сообщений в сутки.
$mail->Host = 'smtp.домен.ru';
$mail->SMTPSecure = 'TLS';
$mail->Port = 25;
$mail->Username = 'Логин';
$mail->Password = 'Пароль';

// REG.RU
Имя сервера можно узнать в разделе «Информация о включенных сервисах и паролях доступа»
$mail->Host = 'ssl://serverXXX.hosting.reg.ru';
$mail->Port = 465;
$mail->Username = 'Логин';
$mail->Password = 'Пароль';

// ДЖИНО
В разделе «Услуги» нужно включить опцию «SMTP-сервер»
$mail->Host = 'ssl://smtp.jino.ru';
$mail->Port = 465;
$mail->Username = 'Логин';
$mail->Password = 'Пароль';

// nic.ru
В настройках веб-сервера необходимо включить PHP расширение «openssl»
$mail->Host = 'ssl://mail.nic.ru';
$mail->Port = 465;
$mail->Username = 'Логин';
$mail->Password = 'Пароль';

// beget.com
$mail->Host = 'ssl://smtp.beget.com';
$mail->Port = 465;
$mail->Username = 'Логин';
$mail->Password = 'Пароль';

Выбирайте подходящие и вставляйте в соответствующие переменные ниже */



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
$mail->setFrom('boxedyou@ya.ru', 'septikpronn'); // Ваш Email и Имя отправителя
$mail->addAddress('weca121@ya.ru'); // Email получателя
$mail->addAddress('septikpro-nn@ya.ru'); // Email получателя
// $mail->addAddress('example@gmail.com'); // Еще один email, если нужно.

// Письмо
$mail->isHTML(true);
$mail->Subject = "$form_subject - septikpronn"; // Заголовок письма
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

    $subdomain = 'septikpronn'; //Поддомен нужного аккаунта
    $link = 'https://' . $subdomain . '.amocrm.ru'; //Формируем URL для запроса

    $refresh_token = file_get_contents('./session.txt');
    $data = [
        'client_id' => '002b1055-27d2-4654-858a-8096be27c183',
        'client_secret' => '13Cu1QHtH8zMQwfzaYE05AAPF3cFyhyfrV4zfqJFoXB4850BwTXJJopDANLLioYW',
        'redirect_uri' => 'https://aquastoknn.ru/',
        'grant_type' => 'refresh_token', // повторная авторизация
        'refresh_token' => $refresh_token, // повторная авторизация

        //    'grant_type'    => 'authorization_code', // первичная авторизация
        //    'code'    => 'def502007cc9a7e23e864955e9fab764b2eaf3426724591204ff1d5d58b898a6220ee7aaaa17da5f5f1dd0feb8fa06542e13e0c50707eade65c6089604a6a622de20e7fb10419d1ff804af9d6ae0bd0df4a37a6dc563a4407e2c25f9a5be36645ffd313d9d8fd3f226445171f306d662ab940b5ade2d4adcc69e8ad9e021acb8ba55f18be4ee54e4877bb059273445a959f8232a2821ec25b385e6984ce49983f10103a79c0b733784bd325eb6dfb8e25a77b09a4c1bb29ce79840e7a9ac0406256f0ac21cee9c087d947a67bfa85a6c08c1e2ad96c21f284b8ac5642a9517b84d0e8e9194c3bd55c41f4d8668886f20fda276302193014b473688b3fd9baf5793fe359f261018cf0b19ee18369a152f98e8c3d6aae27a46aef398382501cbea84b8c4ed18ecec14eee2f6ddcd1007199d7c60e4d8467c2b4106ad718ba0e75466a18f6c12a4b6f7f27bbe7330bcb0c2227f0f39d740834cc31ed70e91c94c25295bc6b23c25dd3223895043d9398c8aa15c97a974644639830ee3275571e2be1f22ddada5e6d13b0474239317d461d66df94d0744d9da5c93335af5937f69546f53eb8b9d7f7d563161ec93f70d1cb96f46ed651635480ee5391a57f5a8522ec3', // первичная авторизация код из админки
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

$leadQuiz1 = htmlspecialchars(strip_tags(trim($_POST['Уровень'])));
$leadQuiz2 = htmlspecialchars(strip_tags(trim($_POST['Проживание'])));
$leadQuiz3 = htmlspecialchars(strip_tags(trim($_POST['Грунт'])));
$leadQuiz4 = htmlspecialchars(strip_tags(trim($_POST['Людей'])));
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
    "quiz1"	=> $leadQuiz1,
    "quiz2"	=> $leadQuiz2,
    "quiz3"	=> $leadQuiz3,
    "quiz4"	=> $leadQuiz4,
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

    $link = 'https://septikpronn.amocrm.ru';
    $lead = [
        //'name'                => $form_subject . '–' . $leadName,
        'name'                => $arrContactParams['nameForm'] . ' – ' . $arrContactParams['namePerson'] ,
        'status_id'           => 40558693,
        'responsible_user_id' => 7133581, // ID пользователя, ответственного за сделку
        'date_create'         => time(),
        'pipeline_id'         => 4355272, // ID воронки, в которую добавляется сделка
        'custom_fields'	=> [
            [
                'id'	=> 1079079,
                "values" => [["value" => $arrContactParams["quiz1"],]]
            ],
            [
                'id'	=> 1079081,
                "values" => [["value" => $arrContactParams["quiz2"],]]
            ],
            [
                'id'	=> 1079083,
                "values" => [["value" => $arrContactParams["quiz3"],]]
            ],
            [
                'id'	=> 1079085,
                "values" => [["value" => $arrContactParams["quiz4"],]]
            ],
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
    $link = 'https://septikpronn.amocrm.ru';
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
    $link = 'https://septikpronn.amocrm.ru';

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