<?php

require_once 'Bot.php';

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 1);

define("TG_TOKEN", "5862833450:AAHhzSs0lsfBjf3mUg9BFdLXzPYIMf9bre4");
define("TG_USER_ID", 464404946);
define("TG_USER_KRIST", 1031877772);

$bot = new Bot();

$data = file_get_contents('php://input');

$arrDataAnswer = json_decode($data, true);

$textMessage = mb_strtolower($arrDataAnswer["message"]["text"]);
$textPhoto = mb_strtolower($arrDataAnswer["message"]["caption"]);
$chatId = $arrDataAnswer["message"]["chat"]["id"];

$randNumber = [];

$bot->writeLogFile($arrDataAnswer);

if(!empty($arrDataAnswer["message"]["photo"])) {
    $documentData = array_pop($arrDataAnswer["message"]["photo"]);
} elseif(!empty($arrDataAnswer["message"]["document"])) {
    $documentData = array_pop($arrDataAnswer["message"]["document"]);
}

if($textMessage == 'привет' or $textMessage == '/start') {
    $textMessage_bot = 'Привет! Нажми на кнопку "Ссылки" или "Хочу фото"';

    $arrayQuery = array (
        "chat_id" => $chatId,
        "text" => "$textMessage_bot",
        'reply_markup' => json_encode(
            array(
                'keyboard' => array(
                    array(
                        array(
                            'text' => 'Ссылки',
                            'callback_data' => 'test_2'
                        ),

                        array(
                            'text' => 'Хочу фото',
                            'callback_data' => 'test_2'
                        ),
                    )
                ),
                'one_time_keybord' => false,
                'resize_keyboard' => true,
            )
        )
    );
    $bot->TG_sendMessage($arrayQuery);
} elseif($textMessage == 'хочу фото') {
    $textMessage_bot = "Вот, держи!";

    $listFile = $bot->list_files(__DIR__ . "/img/");

    $max = count($listFile) - 1;
    $randIdFile = mt_rand(0, $max);

    $filePath = __DIR__ . "/img/" . $listFile[$randIdFile];

    $arrayQuery = array(
        'chat_id' => $chatId,
        "photo" => new CURLFile($filePath),
        "caption" => "Вот твоё фото!"
    );
    $bot->TG_sendPhoto($arrayQuery);

}

if(!empty($documentData) and $textPhoto == 'август') {
    $arrayQuery = array(
        "file_id" => $documentData["file_id"],
    );
    $resultQuery = $bot->TG_getFile($arrayQuery);

    $arrDataResult = json_decode($resultQuery, true);

    $fileUrl = $arrDataResult["result"]["file_path"];

    $photoPathTG = "https://api.telegram.org/file/bot". TG_TOKEN ."/" . $fileUrl;

    $arrFilePath = explode("/", $fileUrl);
    $newFilerPath = __DIR__ . "/img/" . $arrFilePath[1];

    file_put_contents($newFilerPath , file_get_contents($photoPathTG));

    $arrayQuery = array(
        'chat_id' => $chatId,
        'text' => "Отличное фото!",
        'parse_mode' => "html",
    );
    $bot->TG_sendMessage($arrayQuery);
} elseif($textMessage == 'ссылки') {
    $textMessage_bot = "Вот ссылки";

    $listFile = $bot->list_files(__DIR__ . "/img/");

    $max = count($listFile) - 1;
    $randIdFile = mt_rand(0, $max);

    $filePath = __DIR__ . "/img/" . $listFile[$randIdFile];

    $arrayQuery = array(
        'chat_id' => $chatId,
        "photo" => new CURLFile($filePath),
        "caption" => $textMessage_bot,
        'reply_markup' => json_encode(array(
            'inline_keyboard' => array(
                array(
                    array(
                        'text' => 'ЛМС Политеха',
                        'url' => 'https://online.mospolytech.ru/',
                        'callback_data' => 'but_2',
                    ),
                    array(
                        'text' => 'ИКТ',
                        'url' => 'https://online.mospolytech.ru/course/view.php?id=10551',
                        'callback_data' => 'but_1',
                    ),
                ),
                array(
                    array(
                        'text' => 'Основы веба',
                        'url' => 'https://slavaver.github.io/web-course-site/',
                        'callback_data' => 'but_3',
                    ),
                    array(
                        'text' => 'Хостинг',
                        'url' => 'https://cp.beget.com/main',
                        'callback_data' => 'but_4',
                    ),
                ),
                array(
                    array(
                        'text' => 'Сервер Политеха',
                        'url' => 'https://fit.mospolytech.ru/systems/servers',
                        'callback_data' => 'but_5',
                    ),
                    array(
                        'text' => 'Мой GitHub',
                        'url' => 'https://github.com/nik300904',
                        'callback_data' => 'but_6',
                    ),
                ),
            ),
        )),
    );
    $bot->TG_sendPhoto($arrayQuery);
}

if (date('i:s') == '5:00' or date('i:s') == '5:01' or date('i:s') == '5:02') {
    $a = file_get_contents("https://complimentos.com/compliments/100-komplimentov-devushke-lyubimoj-podruge.html");

    preg_match_all("/<p>(.+?)<\/p>/ius", $a, $matches);

    $newMatches = [];

    for ($i = 1; $i <= 201; $i += 1) {
        if ($i % 2 != 0 and $i < 100) {
            array_push($newMatches, $matches[1][$i]);
        } elseif ($i % 2 == 0 and $i > 100) {
            array_push($newMatches, $matches[1][$i]);
        }

    }

    $strMatches = implode('', $newMatches);

    preg_match_all('/[а-яёА-ЯЁ]+/u', $strMatches, $arr);

    $newArrMsg = [];

    foreach ($arr as $keys => $item) {
        $newArrMsg = $item;
    }

    $x = file_get_contents(__DIR__ . '/number.txt');
    $textMessage = '';
    print_r($x);

    if ($x == 0) {
        $textArr = array_slice($newArrMsg, 0, 9);

        array_splice($newArrMsg, 0, 9);

        $newArrMsg = implode(' ', $newArrMsg);
        file_put_contents(__DIR__ . '/log.txt', $newArrMsg);

        $text = implode(', ', $textArr);
        $text = mb_strtolower($text, 'UTF-8');

        $textMessage = 'Ты ' . $text;

        $arrayQuery = array(
            'chat_id' => TG_USER_KRIST,
            'text' => $textMessage,
            'parse_mode' => "html",
        );

        $bot->TG_sendMessage($arrayQuery);
        $x++;
        file_put_contents(__DIR__ . '/number.txt', $x);
    } else {
        $newArrMsg = file_get_contents(__DIR__ . '/log.txt');
        $newArrMsg = explode(' ', $newArrMsg);
        file_put_contents(__DIR__ . '/asf.txt', $newArrMsg);

        $textArr = array_slice($newArrMsg, 0, 9);

        array_splice($newArrMsg, 0, 9);

        $text = implode(', ', $textArr);
        $text = mb_strtolower($text, 'UTF-8');

        $newMessage = 'Ты ' . $text;

        $arrayQuery = array(
            'chat_id' => TG_USER_KRIST,
            'text' => $newMessage,
            'parse_mode' => "html",
        );

        $bot->TG_sendMessage($arrayQuery);

        $newArrMsg = implode(' ', $newArrMsg);
        file_put_contents(__DIR__ . '/log.txt', $newArrMsg);
    }
}

//if($arrDataAnswer["callback_query"]) {
//    $dataBut = $arrDataAnswer["callback_query"]["data"];
//    $textMessage = mb_strtolower($arrDataAnswer["callback_query"]["message"]["text"]);
//    $chatId = $arrDataAnswer["callback_query"]["message"]["chat"]["id"];
//
//    if($dataBut == "but_1") {
//        $arrayQuery = array(
//            'chat_id' => $chatId,
//            'text' => "<a href=''>Икт</a>",
//            'parse_mode' => "html",
//        );
//        $bot->TG_sendMessage($arrayQuery);
//    }
//    else if($dataBut == "but_2") {
//        $arrayQuery = array(
//            'chat_id' => $chatId,
//            'text' => "Ты нажал на 'КНОПКА 2'",
//            'parse_mode' => "html",
//        );
//        $bot->TG_sendMessage($arrayQuery);
//    }
//}
