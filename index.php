<?php
header('Content-Type: text/html; charset=utf-8');

// подключаемся к API
require_once("vendor/autoload.php");
use \TelegramBot\Api\Client as TelegramBot;
// создаем переменную бота
$token = "1980530629:AAGp6UbT3J_tJrLDfvbwrw7CaAp3w21cXYk";
$bot = new TelegramBot($token);

// если Телеграм-бот не зарегистрирован - регистрируем
if(!file_exists("registered.trigger")){

    $page_url = "https://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    echo $page_url;
    $result = $bot->setWebhook($page_url);
    if($result){
        file_put_contents("registered.trigger",time()); // создаем файл дабы остановить повторные регистрации
    }
}