<?php
header('Content-Type: text/html; charset=utf-8');

// подключаемся к API
require_once("vendor/autoload.php");
//use App\models\PoemModel as PoemModel;
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
// запускаем обработку
$bot->run();

//$rows = PoemModel::getList();
?>

<!--<div class="block">-->
<!--    --><?php
//    foreach ($rows as $row) {
//        ?>
<!--        <div class="item">-->
<!--            <img src="--><?//=$row->image ?><!--" alt="">-->
<!--            <h3>--><?//=$row->title?><!--</h3>-->
<!--            <p>--><?//=$row->text?><!--</p>-->
<!--        </div>-->
<!--    --><?php
//    }?>
<!--</div>-->