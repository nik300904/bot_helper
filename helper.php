<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define("TG_TOKEN", "5862833450:AAHhzSs0lsfBjf3mUg9BFdLXzPYIMf9bre4");
define("TG_USER_ID", 464404946);

//====================================================================//

// Отправка сообщений

// https://api.telegram.org/bot5862833450:AAHhzSs0lsfBjf3mUg9BFdLXzPYIMf9bre4/getUpdates

//$textMessage = "Тестовое asd";
//$textMessage = urlencode($textMessage);
//
//$urlQuery = "https://api.telegram.org/bot" . TG_TOKEN . "/sendMessage?chat_id=" . TG_USER_ID . "&text=" . $textMessage;
//$result = file_get_contents($urlQuery);

//====================================================================//

// Отправка сообщения

//$getQuery = array(
//    "chat_id" 	=> TG_USER_ID,
//    "text"  	=> "Новое сообщение из формы",
//    "parse_mode" => "html",
//);
//$ch = curl_init("https://api.telegram.org/bot". TG_TOKEN ."/sendMessage?" . http_build_query($getQuery));
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_HEADER, false);
//
//$resultQuery = curl_exec($ch);
//curl_close($ch);
//
//$link = "https://api.telegram.org/bot". TG_TOKEN ."/sendMessage?" . http_build_query($getQuery);
//
//echo $link;
//echo $resultQuery;

//====================================================================//

// Удаление сообщений

//$getQuery = array(
//    "chat_id" => TG_USER_ID,
//    "message_id" => 21 ,
//);
//
//$ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/deleteMessage?" . http_build_query($getQuery));
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_HEADER, false);
//
//$resultQuery = curl_exec($ch);
//curl_close($ch);
//
//echo $resultQuery;

//====================================================================//

// Кнопки

//$getQuery = array (
//    "chat_id" => TG_USER_ID,
//    "text" => "Сообщение с кнопками",
//    "reply_markup" => json_encode(
//        array(
//            'inline_keyboard' => array(
//                array(
//                    array(
//                        'text' => 'Button 1',
//                        'callback_data' => 'test_2',
//                    ),
//
//                    array(
//                        'text' => 'Button 2',
//                        'callback_data' => 'test_2',
//                    ),
//                ),
//                array(
//                    array(
//                        'text' => 'Button 3',
//                        'callback_data' => 'test_2',
//                    ),
//
//                    array(
//                        'text' => 'Button 4',
//                        'callback_data' => 'test_2',
//                    ),
//                )
//            ),
//        )
//    ),
//);
//
//$ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/sendMessage?" . http_build_query($getQuery));
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_HEADER, false);
//
//$resultQuery = curl_exec($ch);
//curl_close($ch);
//
//$link = ("https://api.telegram.org/bot" . TG_TOKEN . "/sendMessage?" . http_build_query($getQuery));
//
//echo $link;

//====================================================================//

// Кнопки на клавиатуре

//$getQuery = array (
//    "chat_id" => TG_USER_ID,
//    "text" => "Сообщение с кнопками",
//    'reply_markup' => json_encode(
//        array(
//            'keyboard' => array(
//                array(
//                    array(
//                        'text' => 'Button 1',
//                        'callback_data' => 'test_2'
//                    ),
//
//                    array(
//                        'text' => 'Button 2',
//                        'callback_data' => 'test_2'
//                    ),
//                )
//            ),
//            'one_time_keybord' => TRUE,
//            'resize_keyboard' => TRUE,
//        )
//    )
//);
//
//$ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/sendMessage?" . http_build_query($getQuery));
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_HEADER, false);
//
//$resultQuery = curl_exec($ch);
//curl_close($ch);
//
//$link = ("https://api.telegram.org/bot" . TG_TOKEN . "/sendMessage?" . http_build_query($getQuery));
//
//echo $link;

//====================================================================//

// Изображения

//$getQuery = array(
//    'chat_id' => TG_USER_ID,
//    'caption' => 'Check work',
//    'photo' => curl_file_create(__DIR__ . '/bot.jpg', 'image/jpg', 'bot.jpg'),
//    'protect_content' => true, // Запрещает перессылать или скачивать фото
//);
//
//$ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/sendPhoto");
//curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $getQuery);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_HEADER, false);
//
//$resultQuery = curl_exec($ch);
//curl_close($ch);
//
//echo $resultQuery;

//====================================================================//

// Отправка документов

//$getQuery = array(
//    'chat_id' => TG_USER_ID,
//    'caption' => 'Check work',
//    'document' => curl_file_create(__DIR__ . '/bot_bg.png', 'image/png', 'bot_bg.png')
//);
//
//$ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/sendDocument");
//curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $getQuery);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_HEADER, false);
//
//$resultQuery = curl_exec($ch);
//curl_close($ch);
//
//echo $resultQuery;

//====================================================================//

// Отправка несколько фото сразу

//$getQuery = array(
//    'chat_id' => TG_USER_ID,
//
//    'media' => json_encode([
//        ['type' => 'photo', 'media' => 'attach://bot'],
//        ['type' => 'photo', 'media' => 'attach://bot_2'],
//    ]),
//
//    'bot' => new CURLFile(__DIR__ . '/bot.jpg'),
//    'bot_2' => new CURLFile(__DIR__ . '/bot_2.jpg')
//);
//
//$ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/sendMediaGroup");
//curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $getQuery);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_HEADER, false);
//
//$resultQuery = curl_exec($ch);
//curl_close($ch);
//
//echo $resultQuery;

//====================================================================//

// Отправка нескольких документов сразу

//$getQuery = array(
//    'chat_id' => TG_USER_ID,
//
//    'media' => json_encode([
//        ['type' => 'document', 'media' => 'attach://bot'],
//        ['type' => 'document', 'media' => 'attach://bot_2'],
//    ]),
//
//    'bot' => new CURLFile(__DIR__ . '/bot.jpg'),
//    'bot_2' => new CURLFile(__DIR__ . '/bot_2.jpg')
//);
//
//$ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/sendMediaGroup");
//curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_POSTFIELDS, $getQuery);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_HEADER, false);
//
//$resultQuery = curl_exec($ch);
//curl_close($ch);
//
//echo $resultQuery;

//====================================================================//

// Создать хук на сайт

//$getQuery = array(
//    'url' => 'https://b500-85-249-41-174.eu.ngrok.io/bot/helper.php'
//);
//
//$ch = curl_init("https://api.telegram.org/bot" . TG_TOKEN . "/setWebhook?" . http_build_query($getQuery));
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_HEADER, false);
//
//$resultQuery = curl_exec($ch);
//curl_close($ch);
//
//echo $resultQuery;

//====================================================================//

// Ловим и записываем сообщение от пользователя

function writeLogFile ($string, $clear = false)
{
    $log_file_name = __DIR__ . "/message.txt";
    if ( $clear == false ) {
        $now = date("Y-m-d H:i:s");
        file_put_contents($log_file_name, $now . "" . print_r($string, true) . "\r\n", FILE_APPEND);
    } else {
        $now = date("Y-m-d H:i:s");
        file_put_contents($log_file_name, '');
        file_put_contents($log_file_name, $now . "" . print_r($string, true) . "\r\n", FILE_APPEND);
    }
}

$data = file_get_contents('php://input');
writeLogFile($data, true);

echo file_get_contents(__DIR__ . "/message.txt");