<?php
header('Content-Type: text/html; charset=utf-8');
echo 'he';
// подключаемся к API
require_once("vendor/autoload.php");

// создаем переменную бота
$token = "1980530629:AAGp6UbT3J_tJrLDfvbwrw7CaAp3w21cXYk";
$bot = new \TelegramBot\Api\Client($token);

// обязательное. Запуск бота
$bot->command('start', function ($message) use ($bot) {
    $answer = 'Добро пожаловать! 
    Чтобы увидеть доступные команды - 
    /help';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});
// помощь
$bot->command('help', function ($message) use ($bot) {
    $answer = 'Команды:
    /bestcar - Безоговорочно лучшая автомашина на свете!,
    /getpic - Изображение,
    /help - помощь';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

// запускаем обработку
$bot->run();