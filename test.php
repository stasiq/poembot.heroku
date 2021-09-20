<?php
error_reporting(E_ALL);
require_once("vendor/autoload.php");

//use App\models\PoemModel as PoemModel;


$conn = pg_connect(getenv("postgres://kkaegwqhgwgytp:9c5ff6d4472658b746f28825636db218d3e33094d060153fee0e7b3623eda7f2@ec2-54-73-58-75.eu-west-1.compute.amazonaws.com:5432/db2ll6v2e9ukh3"))
or die('Не удалось соединиться: ' . pg_last_error());
//
//// Выполнение SQL-запроса
//
//$query = 'SELECT * FROM poems';
//$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());