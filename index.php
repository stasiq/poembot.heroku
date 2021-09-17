<?php
header('Content-Type: text/html; charset=utf-8');
echo 'he';
// подключаемся к API
require_once("vendor/autoload.php");
use Faker\Factory as Faker;
use App\models\PoemModel as PoemModel;

$faker = Faker::create('ru_RU');
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
$bot->command('getpic', function ($message) use ($bot) {
    $answer = 'Изображение:';
    $pic = "https://icopydoc.ru/wp-content/uploads/fortelegrambot.jpg";
    $bot->sendMessage($message->getChat()->getId(), $answer);
    $bot->sendPhoto($message->getChat()->getId(), $pic);
});
//$bot->command('sad', function ($message) use ($bot) {
//    $row = new PoemModel::getItem('sad');
//    $answer = $row[0];
//    $pic = "https://icopydoc.ru/wp-content/uploads/fortelegrambot.jpg";
//    $bot->sendMessage($message->getChat()->getId(), $answer);
//    $bot->sendPhoto($message->getChat()->getId(), $pic);
//});
$bot->command('bestcar', function ($message) use ($bot) {
    $answer = 'Зеленый матиз!:';
    $pic = "https://a.d-cd.net/4a1f644s-960.jpg";
    $bot->sendMessage($message->getChat()->getId(), $answer);
    $bot->sendPhoto($message->getChat()->getId(), $pic);
});
// запускаем обработку
$bot->run();