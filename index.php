<?php
header('Content-Type: text/html; charset=utf-8');
echo 'he';
// подключаемся к API
require_once("vendor/autoload.php");
use App\models\PoemModel as PoemModel;
// создаем переменную бота
$token = "1980530629:AAGp6UbT3J_tJrLDfvbwrw7CaAp3w21cXYk";
$bot = new \TelegramBot\Api\Client($token);

// обязательное. Запуск бота
$bot->command('start', function ($message) use ($bot) {
    $answer = 'Добро пожаловать!';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});
// помощь
$bot->command('help', function ($message) use ($bot) {
    $answer = 'Команды:
/help - помощь';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

$bot->command('getpic', function ($message) use ($bot) {
    $answer = 'Изображение:';
    $pic = "https://icopydoc.ru/wp-content/uploads/fortelegrambot.jpg";
    $bot->sendMessage($message->getChat()->getId(), $answer);
    $bot->sendPhoto($message->getChat()->getId(), $pic);
});
// запускаем обработку
$bot->run();