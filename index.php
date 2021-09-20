<?php
header('Content-Type: text/html; charset=utf-8');

require_once("vendor/autoload.php");

use Faker\Factory as Faker;
use App\models\PoemModel as PoemModel;

$faker = Faker::create('ru_RU');
$token = "1980530629:AAGp6UbT3J_tJrLDfvbwrw7CaAp3w21cXYk";
$bot = new \TelegramBot\Api\Client($token);

$bot->command('start', function ($message) use ($bot) {
    $answer = 'Добро пожаловать! 
    Чтобы увидеть доступные команды - 
    /help';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

$bot->command('help', function ($message) use ($bot) {
    $answer =
        'Выбор настроения:
        /fun - веселое,
        /sad - грустное,
        /soul - загадочное.
        Другие команды:
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

$bot->command('sad', function ($message) use ($bot) {
    $row = PoemModel::getItem(2);
    $title = $row[0];
    $text = $row[1];
    $pic = $row[2];
    $bot->sendPhoto($message->getChat()->getId(), $pic);
    $bot->sendMessage($message->getChat()->getId(), $title);
    $bot->sendMessage($message->getChat()->getId(), $text);
});

$bot->command('fun', function ($message) use ($bot) {
    $row = PoemModel::getItem(1);
    $title = $row[0];
    $text = $row[1];
    $pic = $row[2];
    $bot->sendPhoto($message->getChat()->getId(), $pic);
    $bot->sendMessage($message->getChat()->getId(), $title);
    $bot->sendMessage($message->getChat()->getId(), $text);
});

$bot->command('soul', function ($message) use ($bot) {
    $row = PoemModel::getItem(3);
    $title = $row->;
    $text = $row[1];
    $pic = $row[2];
    $bot->sendPhoto($message->getChat()->getId(), $pic);
    $bot->sendMessage($message->getChat()->getId(), $title);
    $bot->sendMessage($message->getChat()->getId(), $text);
});

$bot->command('bestcar', function ($message) use ($bot) {
    $answer = 'Зеленый матиз!:';
    $pic = "https://a.d-cd.net/4a1f644s-960.jpg";
    $bot->sendMessage($message->getChat()->getId(), $answer);
    $bot->sendPhoto($message->getChat()->getId(), $pic);
});

$bot->run();